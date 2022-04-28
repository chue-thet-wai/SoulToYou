<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class IdolManageUser extends Controller
{
    public function show_userlist()
    {
        $user_res = DB::table('users')
           ->paginate(2);
        return view('admin.idoluser.userlist',['user_list' => $user_res]);
    }
    public function show_profile()
    {
        $user_id=Auth::id();
        $user_res = DB::select('select * from users where id="'.$user_id.'"');
       
        return view('admin.idoluser.profile',['user_res' => $user_res]);
    }
    public function logout()
    {        
        Auth::logout();
        return redirect('/');
    }
}
