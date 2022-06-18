<?php
  
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use Hash;
  
class AuthController extends Controller
{

    public function index()
    {
        $displayNav="none";
      
        return view('auth.login',compact('displayNav'));
    }  

    public function registration()
    {
        $displayNav="none";
      
        return view('auth.registration',compact('displayNav'));
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            // 'first_name' => 'required',
            // 'last_name' => 'required',
            'email' => 'required',
            // 'phone_number' => 'required',
            //'city' => 'required',
            //'address' => 'required,
            'password' => 'required',
            //'password_confirmation' => 'required',
        ]);
   
        $input = $request->only('email', 'password');
        // foreach($input as $value ){
        //     if($data->name == $request->input('name')){
    
        //     }else{
                
        //     }
        // }
        $users = DB::select('select * from users where is_deleted=0');
        foreach ($users as $user) {
       
            if($user->email == $input['email']){
                $id=$user->id;
                if(($user->password == $input['password']) && ($user->is_admin == 0)){
                    $user->is_login=1;
                    DB::update('Update users SET is_login=? where id=?',[
                        1,
                        $id
                    ]);
                    $display="none";
                    return redirect('reservation/id/'.$id)->with('id',$user->id);
                }else{
                    if($users[count($users)-1]->id == $user->id){
                    return redirect('/login')->with('message','Email or password is wrong');
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
        // if (Auth::attempt(['email'=>$input['email'],'password'=>$input['password']  ])) {
        //     // 'is_login'=>1
        //     return redirect('home');
        // }else{
        //     return redirect("login")->with('message','Oppes! You have entered invalid credentials');
        // }
        // if(Auth::check()){
        //     return redirect()->route('home');
        // }
        // else{
        //         return redirect("login")->with('message','Oppes! You have entered invalid credentials');
        //     }
  
        
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            // 'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|min:10',
            'city' => 'required',
            'address' => 'required',
            'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' =>'min:8',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('Great! You have Successfully loggedin');
    }

    public function home()
    {
        if(Auth::check()){
            return view('home');
        }
  
        //return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'email' => $data['email'],
        'phone_number' =>$data['phone_number'],
        'city' =>$data['city'],
        'address' =>$data['address'],
        'password' => $data['password']
        // 'password_confirmation' => ($data['password_confirmation'])
        ]);
    }

    // public function logout() {
    //     Session::flush();
    //     Auth::logout();
    //     return Redirect('login');
    // }
}
