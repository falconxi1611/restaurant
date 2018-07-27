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
        $menu_id   = $request->get('menu_id');
        $food_list = Food::whereIn('FOOD_ID', Menu_Detail::where('MENU_ID', $menu_id)->get(['FOOD_ID']))->get();
        if ($food_list === null)
        {
            return view('errors/error');
        }
        $this->data['food_list'] = $food_list;
        $menu                    = Menu::where('ID', $menu_id)->get();
        $menu                    = json_decode($menu)[0];

        $this->data['menu'] = $menu;
        $this->data['flg']  = 10;
        $this->data['num_table'] = "";

        return view('menu/menu_detail', $this->data);
    }

    public function showPeople(Request $request)
    {
        $menu_id   = $request->input('ID');
        $food_list = Food::whereIn('FOOD_ID', Menu_Detail::where('MENU_ID', $menu_id)->get(['FOOD_ID']))->get();
        if ($food_list === null)
        {
            return view('errors/error');
        }
        $this->data['food_list'] = $food_list;
        $menu                    = Menu::where('ID', $menu_id)->get();

        $people = $request->input('people');
        echo "<pre>"; var_dump($request->input()); echo "</pre>"; die;
        if ($people == 8)
        {
            $flg           = 8;
            $menu[0]->COST -= 200000;
        }
        else if ($people == 12)
        {
            $flg           = 12;
            $menu[0]->COST += 200000;
        }
        else
        {
            $flg = 10;
        }
        $menu               = json_decode($menu)[0];
        $quantity           = $request->input('quantity');

        if ($quantity % $flg == 0)
        {
            $num_table = $quantity / $flg;
        }
        else
        {
            $num_table = intval($quantity / $flg) + 1;
        }

        if ($quantity != null)
        {
            $this->data['num_table'] = $num_table;
        }
        else
        {
            $this->data['num_table'] = "";
        }

        $this->data['menu'] = $menu;
        $this->data['flg']  = $flg;

        return view('menu/menu_detail', $this->data);
    }
}