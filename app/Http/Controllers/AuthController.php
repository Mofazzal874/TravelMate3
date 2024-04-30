<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
 
class AuthController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    public function register()
    {
        return view('auth.register');
    }
 
    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();
 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => "0"
        ]);
 
        return redirect()->route('login');
    }
 
    public function login()
    {
        return view('auth.login');
    }
 
    public function loginAction(Request $request)
{
    Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ])->validate();

    if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
    }

    $request->session()->regenerate();

    $user = auth()->user();

    // Check user type and redirect accordingly
    switch ($user->type) {
        case 'admin':
            return redirect()->route('admin.dashboard');
        case 'manager':
            return redirect()->route('manager.dashboard');
        case 'tourGuide':
            return redirect()->route('tourGuide.dashboard');
        default:
            return redirect()->route('user.dashboard');
    }
}

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
 
        $request->session()->invalidate();
 
        return redirect('/login');
    }
 
    public function profile()
    {
        return view('userprofile');
    }
}