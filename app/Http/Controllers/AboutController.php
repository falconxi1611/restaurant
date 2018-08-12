<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 6/27/2018
 * Time: 01:10
 */

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class AboutController
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

        return view('about/about', $this->data);
    }
}