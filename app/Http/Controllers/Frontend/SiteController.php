<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Http\Requests\UserRegistration;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function SinglePost()
    {
        return view('frontend.single-post');
    }

    //  Execute Register Form

    public function ShowRegisterForm()
    {
        return view('frontend.auth.register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
//            'photo'  => 'required|image'
        ]);

//        $photo = $request->file('photo');
//        if($photo->isValid())
//        {
//            $file_name = rand(11111,99999).date('Ymdhis.').$photo->getClientOriginalExtension();
//            $photo->storeAs('users',$file_name);
//        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            session()->flash('type', 'success');
            session()->flash('message', 'User registration success');
        } catch (Exception $e) {
            session()->flash('type', 'danger');
            session()->flash('message', 'Wring!');
        }
        return redirect()->back();
    }

    //  Execute Login Form
    public function ShowLoginForm()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if (auth()->attempt($data)) {
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('type', 'danger');
            session()->flash('message', 'Incorrect Information');
            return redirect()->back();
        }
    }

//    logout
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
