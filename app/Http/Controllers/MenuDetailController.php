<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/20/2018
 * Time: 23:44
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu_Detail;
use App\Food;
use App\Menu;

use Illuminate\Http\Request;

class MenuDetailController extends Controller
{
    public function showDetail(Request $request)
    {
        $menu_id = $request->get('menu_id');
        $food_list = Food::whereIn('FOOD_ID', Menu_Detail::where('MENU_ID', $menu_id)->get(['FOOD_ID']))->get();
        if($food_list === null)
        {
            return view('errors/error');
        }
        $this->data['food_list'] = $food_list;

        $menu = Menu::where('ID', $menu_id)->get(["MENU_NAME"]);
        $menu = json_decode($menu)[0];
        echo "<pre>"; var_dump($menu); echo "</pre>"; die;
        $this->data['menu'] = json_decode($menu);



        return view('menu/menu_detail', $this->data);
    }
}