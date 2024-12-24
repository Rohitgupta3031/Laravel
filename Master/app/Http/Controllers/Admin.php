<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Session;


class Admin extends Controller
{
    public function registration(Request $request){
    $user = new User();
    $request->validate([
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required|unique:users',
        'pass'=>'required'
    ]);
    $user->name = $request->first_name;
    $user->lastname = $request->last_name;
    $user->email = $request->email;
    $user->password = FacadesHash::make($request->pass);
    $data=$user->save();
    if($data){
        return back()->with('success','Registered');
    }else{
        return back()->with('fail','failed');
    }
    }


    public function login(Request $request)
    {
        $user = new user();
        $request->validate([
            'email' => 'required',
            'pass' => 'required'

        ]);
        
        $data = user::where('email', $request->email)->first();
        // print_r($data->password);
        
        // die;
        if ($data) {
            if (FacadesHash::check($request->pass,$data->password)) {
               
                $session = $request->session()->all();
                
                session()->put('LoggedIn', $data->id);

              return redirect('dashboard');

            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'Email is not register');
        }
    }

    public function dashboard(){
        if(Session::has('LoggedIn')){
            $user_session=User::where('id',Session::has('LoggedIn'))->first();
           
            return view('dashboard',compact('user_session'));
        }
    }
}