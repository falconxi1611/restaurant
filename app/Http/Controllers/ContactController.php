<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 8/13/2018
 * Time: 06:34
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact()
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

        return view('contact/contact', $this->data);
    }
}