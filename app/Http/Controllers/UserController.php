<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    public function welcome() {
        return view('welcome');
    }

    static $registration_error = [
        'registered' => "email already registered! Try another!"
    ];

    public function registration(Request $request){
        $input = $request->all();
        if(!isset($input['submit'])) {
            abort(403, 'Unauthorized action.');
        }

        $username = $input['username'];
        $email = $input['email'];
        $password = $input['password'];

        $current_email = DB::table('login')->where('email', $email)->first();

        if(!$current_email) {
            DB::table('login')->insert([
                'username' => $username,
                'email' => $email,
                'password' => Hash::make($password)
            ]);
        } else {
            return view('welcome', ['error_registration' => UserController::$registration_error ['registered']]);
        }

        return redirect()->route('user', ['username' => $username]);

    }

    public function hello($username){
        return view('user', ['username' => $username]);
    }

}

?>
