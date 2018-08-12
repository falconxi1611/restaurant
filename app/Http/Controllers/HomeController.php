<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 6/27/2018
 * Time: 01:02
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function showView()
    {
        if(strlen(session('username')) != 0)
        {
            $this->data['flg_login'] = 1;
            $avatar = DB::table('USER')->select('IMAGE')->where('USERNAME','=', session('username'))->get();
            $this->data['avatar'] = $avatar[0]->IMAGE;
        }
        else
        {
            $this->data['flg_login'] = 0;
        }
        return view('home', $this->data);
    }
}