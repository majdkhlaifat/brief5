<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        $lesson = Lesson::where('email', $request->input('email'))->first();
        
        
        if ($lesson && Hash::check($request->input('password'), $lesson->password)) {
    
            \Illuminate\Support\Facades\Auth::login($lesson);
            Session::put('user_type', 'lesson');
            Session::put('lesson_id', $lesson->id);
            $lessonData = Lesson::find($lesson->id);
            return redirect()->intended('lessons')->with(['lessonData'=>$lessonData]);
        }

    $credentials = $request->only('email', 'password');
    if (\Illuminate\Support\Facades\Auth::attempt($credentials)) {
        $user = \Illuminate\Support\Facades\Auth::user();
        if ($user->role_id == 1) {
            
            Session::put('user_type', 'admin');
            Session::put('admin_name', $user->id);
            
            return redirect()->intended('admin');
        } elseif ($user->role_id == 3) {
        
            Session::put('user_type', 'user');
            Session::put('user_id', $user->id);
            $userData = User::find($user->id);
            return redirect()->intended('home')->with(['userData'=>$userData]);

        } else {

            Session::put('user_type', 'default');
            Session::put('user_name', $user->name);
            return redirect()->intended('/');
        }
    } else {
        return redirect()->back()->withErrors(['email' => 'Invalid email or password.']);
    }
}

    
}
