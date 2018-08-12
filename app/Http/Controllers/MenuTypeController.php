<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/11/2018
 * Time: 22:12
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu_Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuTypeController extends Controller
{
    public function showView()
    {
        $list_type               = Menu_Type::whereIn('MENUTYPE_ID', array(1,2,3))->get();
        $this->data['menu_type'] = $list_type;
        if ($list_type === null)
        {
            return view('errors/error');
        }
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

        return view('menu/menu', $this->data);
    }

    public function bookTable(Request $request)
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

        session(['time' => $request->input("time")]);
        session(['date' => $request->input("date")]);
        session(['num_people' => $request->input("quantity_people")]);

        $list_type               = Menu_Type::all();
        $this->data['menu_type'] = $list_type;
        if ($list_type === null)
        {
            return view('errors/error');
        }
        return view('menu/menu', $this->data);
    }
}