<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/17/2018
 * Time: 23:35
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function showList(Request $rq)
    {
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