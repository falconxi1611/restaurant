<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 8/1/2018
 * Time: 18:27
 */

namespace App\Http\Controllers;

use App\Food;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function  showList()
    {
        $food_list  = Food::all();
        $this->data["food_list"] = $food_list;

        return view("food/option_menu");
    }
}