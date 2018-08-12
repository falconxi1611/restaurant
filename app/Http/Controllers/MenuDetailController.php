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
use App\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuDetailController extends Controller
{
    public function showDetail(Request $request)
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

        $quantity = session('num_people');
        if (strlen($quantity) != 0)
        {
            $this->data['quantity'] = $quantity;
            if ($quantity % 10 == 0)
            {
                $this->data['num_table'] = $quantity / 10;
            }
            else
            {
                $this->data['num_table'] = intval($quantity / 10) + 1;
            }
        }
        else
        {
            $this->data['quantity']  = "";
            $this->data['num_table'] = "";
        }
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

        $service               = Service::all();
        $this->data['service'] = $service;

        return view('menu/menu_detail', $this->data);
    }

    public function showPeople(Request $request)
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

        $menu_id   = $request->input('ID');
        $food_list = Food::whereIn('FOOD_ID', Menu_Detail::where('MENU_ID', $menu_id)->get(['FOOD_ID']))->get();
        if ($food_list === null)
        {
            return view('errors/error');
        }
        $this->data['food_list'] = $food_list;
        $menu                    = Menu::where('ID', $menu_id)->get();

        $people    = $request->input('people');
        $people_af = $request->input('people_after');
        if ($people_af != null)
        {
            $people = $people_af;
        }

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

        $menu     = json_decode($menu)[0];
        $quantity = $request->input('quantity');

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

        $this->data['menu']     = $menu;
        $this->data['flg']      = $flg;
        $this->data['quantity'] = $quantity;
        session(['num_people' => $quantity]);

        $service               = Service::all();
        $this->data['service'] = $service;

        return view('menu/menu_detail', $this->data);
    }
}