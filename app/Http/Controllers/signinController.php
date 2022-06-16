<?php

namespace App\Http\Controllers;

use App\Models\signin;
use App\Models\signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class signinController extends Controller
{
    public function viewsignin(){
        return view('signin');
    }

    public function signin(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new signin;
        $flag_exist = $user->isExist($username, $password);
        
        if ($flag_exist[0]->count == 1){
            Session::put('user', $username);
            Session::put('pass', $password);
            return redirect('/home');

        } else {
            Session::flash('error', "Invalid signin, please try again");
            return redirect('/');
        }
    }
    public function regis(Request $req){

        $messages = array();
        $user = $_POST['username'];
        $password = $_POST['password'];
        $warehouse =$_POST['Warehouse'];
        $nama = $_POST['nama'];

        $models = New signup;
        $flag_exist = $models->signup($user, $password, $warehouse, $nama);

        if ($flag_exist){

            return redirect('/');
        }

    }
    public function logout(Request $req){
        Session::flush();
        return redirect('/');
    }
}