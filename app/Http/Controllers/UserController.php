<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Str;
use App\Models\VerifyUser;
use Mail;
use App\Mail\VerifyEmail;
use Session;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

            return redirect()->route('home');
        } else {
            // làm thêm chức năng khóa tài khoản
            return back()->with('error_login','Login failed!');
        }
    }

    public function loginView()
    {
        if (Auth::check()) {

            return redirect('/');
        }
        VerifyUser::truncate();

        return view('first_page');
    }

    public function registerView(Request $request)
    {
        if (Auth::check()) {

            return redirect()->route('home');
        }

        return view('components.register',['old_email' => $request->email_register]);
    }

    public function register(RegisterRequest $request)
    {
        $input = $request->all();
        $input['name'] = $request->nameUser;
        $input['email'] = $request->email_register;
        $input['password'] = Hash::make($request->password);
        $user = User::create($input);
        if ($user) {

            return redirect()->route('login_view');
        } else {

            return back()->with('error_register','Register Failed!');
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login_view');
    }

    public function verifyView()
    {
        if (Auth::check()) {

            return redirect('/');
        }

        return view('emails.verify_email');
    }

    public function verifyEmail(Request $request) {
        $request->validate([
            'verify_email' => 'required',
        ]);
        $user = User::where('email',$request->verify_email)->first();
        if ($user) {
            VerifyUser::create([
                'token' => Str::random(20),
                'user_id' => $user->id,
            ]);
            $mail = Mail::to($user->email)->send(new VerifyEmail($user));

            return  'sending email';
        } else {
            return back()->with('exist','email not exist!');
        }
    }

    public function resetView()
    {
        if (Auth::check()) {

            return redirect('/');
        }

        return view('emails.reset_password');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'reset_pass' => 'required',
            're_pass' => 'required|same:reset_pass',
        ]);
        $reset = User::where('email',$request->email)->first();
        $input = $request->all();
        $input['password'] = Hash::make($request->reset_pass);
        $result = $reset->update($input);
        if ($result > 0) {
            \Session::pull('pass_token');
            $token = VerifyUser::where('user_id', $reset->id)->first();
            $token->delete();
            return redirect()->route('login_view');
        }

        return back()->with('error', 'Fail!');
    }

    public function checkTokenView()
    {
        if (Auth::check()) {

            return redirect('/');
        }

        return view('emails.check_token');
    }

    public function checkToken(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        $token = VerifyUser::where('token',$request->token)->first();
        if ($token) {
            $user = User::where('id', $token->user_id)->first();
            \Session::put('pass_token', $token);

            return view('emails.reset_password',['user' => $user]);
        } else {

            return back()->with('error', 'Fail!');
        }
    }
}
