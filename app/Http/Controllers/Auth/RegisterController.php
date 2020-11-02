<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admins');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|string|email|max:255|unique:admin',
            'admin_password' => 'required|string|min:8|confirmed',
            'admin_username' => 'required|string|max:255|unique:admin'
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAdminRegisterForm()
    {
        return view('admin.auth.register');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function RegisterAdmin(Request $request)
    {
        //$this->validator($request->all())->validate();
        //$Admin = new Admin();
        //$Admin->admin_name = $request->input()['admin_name'];
        //$Admin->admin_username = $request->input()['admin_username'];
        //$Admin->admin_email = $request->input()['admin_email'];
        //$Admin->admin_password = Hash::make($request->input()['admin_password']);
        //if($Admin->save()) {
        //    return redirect('admin/auth/login');
        //}
        if(Admin::create([
            'name' => $request->input()['name'],
            'username' => $request->input()['username'],
            'password' => Hash::make($request->input()['password']),
            'email' => $request->input()['email']
        ])){
            if (Auth::guard('admins')->attempt(['email' => $request->input()['email'],'password' => $request->input()['password']], true)) {
                $user_id = sha1(Auth::guard('admins')->id());
                Storage::disk('admins')->makeDirectory("public/$user_id");
                Storage::disk('admins')->makeDirectory("public/$user_id"."/blogs");
                return redirect()->intended('admin/blog/create');
            }else{
                echo "<h1> Login after you are verified.</h1>";
                sleep(4);
                return redirect('admin/auth/login');
            }
            
        }else{
            echo "failure";
        }
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
}