<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/17/2018
 * Time: 23:35
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function showList(Request $rq)
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

        $menutype_id = $rq->get('menutype_id');
        $list_menu   = Menu::where('MENUTYPE_ID', $menutype_id)->get();

        $data = json_decode($list_menu);
        if (count($data) == 0)
        {
            return view('errors/error');
        }
        $this->data['list_menu'] = $list_menu;
        if (session('num_people') == null)
        {
            session(['num_people' => 1]);
        }
        return view('menu/set_menu', $this->data);
    }

}