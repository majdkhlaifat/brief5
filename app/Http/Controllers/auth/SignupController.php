<?php
namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;

class SignupController extends Controller
{

    public function index()
    {
        return view('signup');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);
            $user = new User();
            $user->user_name = strip_tags($request->input('name')) ;
            $user->email= strip_tags($request->input('email'));
            $password = strip_tags($request->input('password'));
            $hashedPassword = Hash::make($password);
            $user->password = $hashedPassword;
            $user->image = 'https://st4.depositphotos.com/9998432/25494/v/450/depositphotos_254942238-stock-illustration-person-gray-photo-placeholder-man.jpg';
            $user->role_id =3;
            $user->save();

    }

    public function show($id)
    {
        
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
