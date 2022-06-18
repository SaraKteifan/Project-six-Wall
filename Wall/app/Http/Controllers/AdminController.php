<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Services;
use App\Models\User;

use App\Models\Reservation;

class AdminController extends Controller
{
    // Dashboard
    public function viewDashboard(){
        $usersCount = DB::table('users')->count();
        $servicesCount = DB::table('services')->count();
        $reservationsCount = DB::table('reservations')->count();

        $service1 = DB::select('select * from reservations where service_id=1');
        $count1= count($service1);
        $service2 = DB::select('select * from reservations where service_id=2');
        $count2= count($service2);
        $service3 = DB::select('select * from reservations where service_id=3');
        $count3= count($service3);
        $service4 = DB::select('select * from reservations where service_id=4');
        $count4= count($service4);
        $datas=[$count1, $count2, $count3, $count4];

        return view('Admin.dashboard',['usersCount'=>$usersCount, 'servicesCount'=>$servicesCount, 'reservationsCount'=>$reservationsCount, 'datas'=>$datas]);
    }
    // Users
    public function viewUsers(){
        $usersInfo = DB::select('select * from users where is_deleted=0');
        return view('Admin.users',['usersInfo'=>$usersInfo]);
    }
    public function editUserPage($id){
        $editUser = User::find($id);
        return view('Admin.editUserPage', compact('editUser'));
    }
    public function editUser($id){
        $editUser = User::find($id);
        $editUser-> first_name=request('first_name');
        $editUser-> last_name=request('last_name');
        $editUser-> email=request('email');
        $editUser-> phone_number=request('phone_number');
        $editUser-> city=request('city');
        $editUser-> is_admin=request('role');
        $editUser-> is_organization=request('org');
        $editUser-> save();
        return redirect('AdminUsers')->with('message','User updated succefully');
    }
    public function deleteUser($id){
        $delUser = User::find($id);
        $delUser->is_deleted=1;
        $delUser->save();
        return redirect('AdminUsers')->with('message','User deleted succefully');
    }

    // Services
    public function viewServices(){
        $servicesInfo = DB::select('select * from services where is_deleted=0');
        return view('Admin.services',['servicesInfo'=>$servicesInfo]);
    }
    public function addServicePage(){
        return view('Admin.addSer');
    }
    public function addService(Request $request){
        // $servicesInfo = DB::select('select * from services');
        $newService = new Services();

        $file= $request->file('service_image');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('/images/services/'), $filename);
        $image= $filename;

        $newService->service_name=request('service_name');
        $newService-> service_short_description=request('service_short_description');
        $newService->service_cost=request('service_cost');
        $newService->service_description=request('service_description');
        $newService->service_image=$image;
        $newService->save();
        return redirect('AdminServices')->with('message','Service added succefully');
    }
    public function editServicePage($id){
        $editSer = Services::find($id);
        return view('Admin.editSer', compact('editSer'));
    }
    public function editService(Request $request, $id){
        $editService = Services::find($id);
        if($request->file('service_image')){
            $file= $request->file('service_image');
            $filename=$file->getClientOriginalName();
            $file-> move(public_path('admin/Images'), $filename);
            $service_image= $filename;
        }else{
            $service_image= $editService->service_image;
        }
 
        $editService-> service_short_description=request('service_short_description');
        $editService-> service_name=request('service_name');
        $editService-> service_cost=request('service_cost');
        $editService-> service_image=$service_image;
        $editService-> save();
        return redirect('AdminServices')->with('message','Service updated succefully');
    }
    public function deleteService($id){
        $delSer = Services::find($id);
        $delSer->is_deleted=1;
        $delSer->save();
        return redirect('AdminServices')->with('message','Service deleted succefully');
    }
    // Reservations
    public function viewReservations(){
        $reservationsInfo = DB::select('select * from reservations join users on reservations.user_id = users.id join services on reservations.service_id = services.id');
        return view('Admin.reservations',['reservationsInfo'=>$reservationsInfo]);
    }

    //Login
    public function viewLogin(){
        return view('Admin.login');
    }
    public function Login(){
        $email= request('adminEmail');
        $pass= request('adminPass');
        $users = DB::select('select * from users where is_deleted=0');
        foreach ($users as $user) {
            if($user->email == $email){
                if(($user->password == $pass) && ($user->is_admin == 1)){
                    return redirect('/AdminDashboard')->with('id',$user->id);
                }else{
                    if($users[count($users)-1]->id == $user->id){
                    return redirect('/AdminLogin')->with('message','Email or password is wrong');
                    }else{
                        continue;
                    }
                }
            }else{
                if($users[count($users)-1]->id == $user->id){
                    return redirect('/AdminLogin')->with('message','Email or password is wrong');
                }else{
                    continue;
                }
            }
        }
    }

    //Contact US
    public function reservations(Request $request, $id){
        // dd($id);
        $services= Services::all();
        $data= User::find($id);
        $userId=$data->id;
        // dd($userId);
        $displayNav="inline-block";
        return view('reservations', compact('services','userId','displayNav'));
    }
    public function bringReservations(Request $request,$id){
        // dd($id);
        // foreach($id as $data){

        //     dd($data);
        // }
        $height= $request->input('Height');
        $width= $request->input('Width');
        $total= $request->input('total');
        $file= $request->file('service_image');
        $filename=$file->getClientOriginalName();
        $file-> move(public_path('/images/reservation/'), $filename);
        $image= $filename;

        // $service_id=request('service_id');
        $service_id=request('service');
        $pay=request('pay');
        $service_image= $image;
        $user = User::find($id);
        $service = Services::find($service_id);
        $serviceCost=request('service_cost');
        $reservation = new Reservation();
        $reservation->user_id=$id;
        $reservation->height=$height;
        $reservation->width=$width;
        $reservation->total=$total;
        $reservation->cost=$serviceCost;
        $reservation->service_id=$service_id;
        // $reservation->user_address=$user->address;
        // $reservation->cost=$service->service_cost;
        // $userInfo = new User();
        // 'user_id'->$user_id;
        $reservation->pay=$pay;
        $reservation->service_image=$service_image;
        $reservation->save();

        return redirect('reservation/id/'.$id)->with('message', 'Your message is sent, we will respond soon')->with('id',$id);
        // Redirect::to('reservation/id?id='. $id);
        // return redirect()->route('reservation', [$id]);

        
    }

    public function showContacts(){
        $contacts = DB::select('select * from contacts');
        return view('Admin.contacts', compact('contacts'));
    }
    public function showMessage($id){
        $conMessage = DB::select('select * from contacts where id=?',[$id]);
        return view('Admin.conMessage', compact('conMessage'));
    }
    public function showVolunteers(){
        $volunteers = DB::select('select * from volunteers');
        return view('Admin.volunteers', compact('volunteers'));
    }
    // Bar Chart
    // public function barChart(){
    //     $service1 = DB::select('select * from reservations where service_id=1');
    //     $count1= count($service1);
    //     $service2 = DB::select('select * from reservations where service_id=2');
    //     $count2= count($service2);
    //     $service3 = DB::select('select * from reservations where service_id=3');
    //     $count3= count($service3);
    //     $datas=[$count1, $count2, $count3];
    //     return redirect('/AdminDashboard', ['datas'=>$datas]);
    // }
}