<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 8/1/2018
 * Time: 18:27
 */

namespace App\Http\Controllers;

use App\Food;
use App\Menu_Type;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    public function showList()
    {
        $food_list = DB::table('FOOD')
            ->where('SIZE','=', 1)
            ->where('DEL_FLG','=', 0)
        ->paginate(6);

        $this->data["food_list"] = $food_list;

        return view('food/option_menu', $this->data);
    }
}

