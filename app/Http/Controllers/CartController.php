<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/23/2018
 * Time: 00:06
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Order;

class CartController extends Controller
{
    public function show(Request $request)
    {
        $totalCart = count($request->input());
        $cart_name = array();
        $quantity  = array();
        $amount    = array();
        for ($i = 0; $i < $totalCart; $i++)
        {
            $item_name1 = "shoe_item_" . $i;
            $name       = $request->input($item_name1);
            if ($name != "")
            {
                $cart_name[] = $request->input($item_name1);
            }

            $item_name2 = "quantity_" . $i;
            $num        = $request->input($item_name2);
            if ($num != "")
            {
                $quantity[] = $request->input($item_name2);
            }

            $item_name3 = "amount_" . $i;
            $price      = $request->input($item_name3);
            if ($price != "")
            {
                $amount[] = $request->input($item_name3);
            }
        }

        $this->data['cart_name'] = $cart_name;
        $this->data['quantity']  = $quantity;
        $this->data['amount']    = $amount;

        return view('cart/checkout', $this->data);
    }

    public function add()
    {
        $p                     = new Order;
        $p->CUSTOMER_ID        = 1;
        $p->MENU_ID            = 1;
        $p->NUMBER_OF_TABLE    = 50;
        $p->NUMBER_OF_CUSTOMER = 100;
        $p->ORDER_DATE         = '2018-07-25';
        $p->TIME_DATE          = '12:00';
        $p->TOTAL_AMOUNT       = 1300000;
        $p->DISCOUNT           = 0;
        $p->DEPOSIT            = 500000;
        $p->REST_MONEY         = 600000;
        $p->PAYMENT_METHOD     = 1;
        $p->STATUS             = 0;

        $p->save();
        echo "<pre>";
        var_dump("OK");
        echo "</pre>";
        die;
    }
}