<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\authorizeRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Design;
use App\Models\User;
use App\Models\VeriftCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(authorizeRequest $request){
        $credentials = $request->only('email', 'password');

//        $credentials = [
//            'email' => $request->get('email'),
//            'password' => $request->get('password')
//        ];
//        $users = User::where('email', $request->email)->first();
//        if ($users->status != 'admin') {
//            return redirect()->route('authorizeP')->with('status', 'You are not admin');
//        }
        $users = User::where('email', $request->email)->first();
        if ($users == null || $users->status != 'admin') {
            return redirect()->route('authorizeP')->with('status', 'You are not admin');
        }
        if (Auth::attempt($credentials)){
            $designs = Design::with('category')->get();
            return redirect()->route('design-page')->with('status', 'Authorized success!');
            //return view('design')->with('status', 'Authorized success!');

//            return redirect('/design-page')->with('status','Authorized success!');//->route('/design-page')
        }
        return redirect()->route('authorizeP')->with('status', 'Something is wrong');

//        return view('authorization-page')->with('status', 'Something is wrong');
    }

    public function create(RegisterRequest $request){
//        $verifyCode = VeriftCode::find($request->verifyCode);
//        if (VeriftCode::find($request->verifyCode)) {
            if ($request->password == $request->confirm_password) {
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'verifyCode' => $request->verifyCode,
                    'status' => 'admin'
                ]);

                return redirect()->route('authorizeP')->with('status', 'Registration success!');
            }
            return redirect()->route('registrationP')->with('status', 'Password not equal');
            //return view('registrationPage')->with('status', 'Password not equal');
//        }
//        return redirect()->route('registrationP')->with('status', 'VerifyCode not equal');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('design-page')->with('status','Log Out success!');//->route('/design-page')

    }
}
