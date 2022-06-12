<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Services;



class AdminController extends Controller
{
    // Dashboard
    public function viewDashboard(){
        $usersCount = DB::table('users')->count();
        $servicesCount = DB::table('services')->count();
        $reservationsCount = DB::table('reservations')->count();
        return view('Admin.dashboard',['usersCount'=>$usersCount, 'servicesCount'=>$servicesCount, 'reservationsCount'=>$reservationsCount]);
    }
    // Users
    public function viewUsers(){
        $usersInfo = DB::select('select * from users where is_deleted=0');
        return view('Admin.users',['usersInfo'=>$usersInfo]);
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
        $file-> move(public_path('admin/Images'), $filename);
        $image= $filename;

        $newService->service_name=request('service_name');
        $newService->service_cost=request('service_cost');
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
            $file-> move(public_path('Images'), $filename);
            $service_image= $filename;
        }else{
            $service_image= $editService->service_image;
        }
        $editService-> service_name=request('service_name');
        $editService-> service_cost=request('service_cost');
        $editService-> service_image=$service_image;
        $editService-> save();
        return redirect('AdminServices')->with('message','Service edited succefully');
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
}
