<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Exception;
use App\Http\Middleware;
//use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    //
    public function __construct()
    {
        $this->middleware('guest:admins')->except('admin_logout');
    }

    public function showLoginFormAdmins()
    {
        return view('admin.auth.login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);
    }

    public function Adminlogin(Request $request)
    {
        $this->validator($request->all())->validate();
        $input = $request->input();
        $pass = $input['password'];

        try {
            if (Auth::guard('admins')->attempt(['email' => $input['email'], 'password' => $pass, 'is_verified' => true], true)) {
                return redirect()->intended('/admin/blog/create');
            }
        } catch (Exception $e) {
            print($e);
            throw new Exception($e);
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    protected function username()
    {
        # code...
        return "email";
    }
    public function admin_logout()
    {
        try {
            Auth::guard('admins')->logout();
            if (Auth::guard('admins')->check()) {
                throw new Exception("Unable to logout due to an unknown error");
            } else {
                return redirect()->intended('admin/auth/login');
            }
        } catch (Exception $er) {
            die($er);
        }
    }
}
