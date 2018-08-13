<?php
/**
 * Created by PhpStorm.
 * User: Toan
 * Date: 7/23/2018
 * Time: 00:06
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Menu_Detail;
use Illuminate\Http\Request;
use Cart;
use App\Order;
use App\Menu_Type;
use App\Menu;
use App\Customer_Info;
use App\Service_Detail;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function show(Request $request)
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
//        if($request->input('option_quantity') != null)
//        {
//            $num_option = $request->input('option_quantity');
//        }
        $mode = $request->input("mode");
        if ($mode == "option")
        {
            session(['mode' => "option"]);
            $this->data["mode"] = 1;
        }
        else
        {
            $this->data["mode"] = 0;
        }
        $totalCart    = count($request->input());
        $id_menu      = array();
        $cart_name    = array();
        $quantity     = array();
        $amount       = array();
        $image        = array();
        $people       = array();
        $total_amount = 0;

        for ($i = 1; $i < $totalCart; $i++)
        {
            $item_name0 = "id_menu_" . $i;
            $id         = $request->input($item_name0);
            if ($id != "")
            {
                $id_menu[] = $id;
            }

            $item_name1 = "shoe_item_" . $i;
            $name       = $request->input($item_name1);
            if ($name != "")
            {
                $cart_name[] = $name;
            }

            $item_name2 = "quantity_" . $i;
            $num        = $request->input($item_name2);
            if ($num != "")
            {
                $quantity[] = $num;
            }

            $item_name3 = "amount_" . $i;
            $price      = $request->input($item_name3);
            if ($price != "")
            {
                $amount[] = $price;
            }

            $item_name4 = "image_" . $i;
            $img        = $request->input($item_name4);
            if ($img != "")
            {
                $image[] = $img;
            }

            $item_name5 = "people_num_" . $i;
            $people_num = $request->input($item_name5);
            if ($people_num != "")
            {
                $people[] = $people_num;
            }

            $total_amount += $price * $num;
        }

        $this->data['id_menu']      = $id_menu;
        $this->data['cart_name']    = $cart_name;
        $this->data['quantity']     = $quantity;
        $this->data['amount']       = $amount;
        $this->data['image']        = $image;
        $this->data['total']        = count($cart_name);
        $this->data['total_amount'] = $total_amount;
        $this->data['people_num']   = $people;
        if (session('date') != null)
        {
            $this->data['date_order'] = session('date');
        }
        else
        {
            $this->data['date_order'] = '';
        }
        if (session('time') != null)
        {
            $this->data['time_order'] = session('time');
        }
        else
        {
            $this->data['time_order'] = '';
        }

        if (session('num_people') != null)
        {
            $this->data['total_peo'] = session('num_people');
        }
        else
        {
            $this->data['total_peo'] = '';
        }

        return view('cart/checkout', $this->data);
    }

    public function remove(Request $request)
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

        $mode = $request->input("mode");
        if ($mode == "option")
        {
            session(['mode' => "option"]);
            $this->data["mode"] = 1;
        }
        else
        {
            $this->data["mode"] = 0;
        }
        $id_del     = $request->input('id_del');
        $id_menu    = $request->input('id_menu');
        $cart_name  = $request->input('name');
        $image      = $request->input('image');
        $quantity   = $request->input('quantity');
        $people_num = $request->input('people_num');
        $amount     = $request->input('amount');


        array_splice($id_menu, $id_del, 1);
        array_splice($cart_name, $id_del, 1);
        array_splice($image, $id_del, 1);
        array_splice($quantity, $id_del, 1);
        array_splice($people_num, $id_del, 1);
        array_splice($amount, $id_del, 1);

        $this->data['id_menu']    = $id_menu;
        $this->data['cart_name']  = $cart_name;
        $this->data['quantity']   = $quantity;
        $this->data['amount']     = $amount;
        $this->data['image']      = $image;
        $this->data['total']      = count($cart_name);
        $this->data['people_num'] = $people_num;
        if (session('date') != null)
        {
            $this->data['date_order'] = session('date');
        }
        else
        {
            $this->data['date_order'] = '';
        }
        if (session('time') != null)
        {
            $this->data['time_order'] = session('time');
        }
        else
        {
            $this->data['time_order'] = '';
        }

        $total_amount = 0;
        for ($i = 0; $i < count($amount); $i++)
        {
            $total_amount = $total_amount + ($amount[$i] * $quantity[$i]);
        }
        $this->data['total_amount'] = $total_amount;

        return view('cart/checkout', $this->data);
    }

    public function removeall(Request $request)
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

        $mode = $request->input("mode");
        if ($mode == "option")
        {
            session(['mode' => "option"]);
            $this->data["mode"] = 1;
        }
        else
        {
            $this->data["mode"] = 0;
        }
        $this->data['total']        = 0;
        $this->data['id_menu']      = array();
        $this->data['cart_name']    = array();
        $this->data['quantity']     = array();
        $this->data['amount']       = array();
        $this->data['image']        = array();
        $this->data['people_num']   = array();
        $this->data['total_amount'] = 0;
        if (session('date') != null)
        {
            $this->data['date_order'] = session('date');
        }
        else
        {
            $this->data['date_order'] = '';
        }
        if (session('time') != null)
        {
            $this->data['time_order'] = session('time');
        }
        else
        {
            $this->data['time_order'] = '';
        }

        return view('cart/checkout', $this->data);
    }

    public function edit(Request $request)
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

        $mode = $request->input("mode");
        if ($mode == "option")
        {
            session(['mode' => "option"]);
            $this->data["mode"] = 1;
        }
        else
        {
            $this->data["mode"] = 0;
        }
        $id_edit      = $request->input('id_edit');
        $new_quantity = $request->input('new_quantity');
        $id_menu      = $request->input('id_menu');
        $cart_name    = $request->input('name');
        $image        = $request->input('image');
        $quantity     = $request->input('quantity');
        $people_num   = $request->input('people_num');
        $amount       = $request->input('amount');

        $total_amount = 0;

        for ($i = 0; $i < count($amount); $i++)
        {
            if ($i == $id_edit)
            {
                $quantity[$i] = $new_quantity;
            }
            $total_amount = $total_amount + ($amount[$i] * $quantity[$i]);
        }

        $this->data['id_menu']      = $id_menu;
        $this->data['cart_name']    = $cart_name;
        $this->data['quantity']     = $quantity;
        $this->data['amount']       = $amount;
        $this->data['image']        = $image;
        $this->data['total']        = count($cart_name);
        $this->data['people_num']   = $people_num;
        $this->data['total_amount'] = $total_amount;
        if (session('date') != null)
        {
            $this->data['date_order'] = session('date');
        }
        else
        {
            $this->data['date_order'] = '';
        }
        if (session('time') != null)
        {
            $this->data['time_order'] = session('time');
        }
        else
        {
            $this->data['time_order'] = '';
        }

        return view('cart/checkout', $this->data);
    }

    public function payment(Request $request)
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

        $id_menu = Menu_Type::orderBy('MENUTYPE_ID', 'DESC')->get(['MENUTYPE_ID'])->first();
        $id      = json_decode($id_menu);
        $id      = $id->MENUTYPE_ID;

        $input = $request->input();

        if (session('mode') == "option")
        {
            $iTotal = count($input['quantity_table']);
            for ($i = 0; $i < $iTotal; $i++)
            {
                $input['quantity_table'][$i] = $request->input('num_table');
            }

            session(['num_people' => $request->input('num_people')]);
        }
        session(['input' => $input]);
        $total_amount = $request->input('total_amount');


        $this->data['total_amount'] = $total_amount;

        return view('cart/payment', $this->data);
    }

    public function add(Request $request)
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

        $mode           = session('mode');
        $deposit        = $request->input('deposit');
        $payment_method = $request->input('payment_method');
        $discount       = 0;
        $num_people     = session('num_people');

        if (session('input')['fullname'] != null)
        {
            $fullname = session('input')['fullname'];
        }
        if (session('input')['phone'] != null)
        {
            $phone = session('input')['phone'];
        }
        if (session('input')['email'] != null)
        {
            $email = session('input')['email'];
        }
        if (session('input')['address'] != null)
        {
            $address = session('input')['address'];
        }
        if (session('input')['date_order'] != null)
        {
            $date_order = session('input')['date_order'];
        }
        if (session('input')['date_time'] != null)
        {
            $date_time = session('input')['date_time'];
        }
        $remark = session('input')['address'];

        $cart_id        = session('input')['id'];
        $cart_name      = session('input')['name'];
        $type           = session('input')['type'];
        $quantity_table = session('input')['quantity_table'];

        $total_amount = session('input')['total_amount'];
        $date_order   = date('Y-m-d', strtotime($date_order));

        //Insert Customer Info
        $email_flg = Customer_Info::where('EMAIL', $email)->get(['EMAIL']);
        $point_new = $total_amount * 0.00001;
        if (count($email_flg) != null)
        {
            $point_old = Customer_Info::where('EMAIL', $email)->get();
            foreach ($point_old as $p)
            {
                $pnt_old = $p->POINT;
            }
            $update_point = Customer_Info::where('EMAIL', $email);
            $update_point->update(['POINT' => ($pnt_old + $point_new)]);
        }
        else
        {
            $cus                = new Customer_Info;
            $cus->CUSTOMER_NAME = $fullname;
            $cus->EMAIL         = $email;
            $cus->ADDRESS       = $address;
            $cus->PHONE         = $phone;
            $cus->POINT         = $point_new;
            $cus->save();
        }
        $status = 0;
        if ($deposit == $total_amount)
        {
            $status = 1;
        }

        if ($mode == 'option')
        {
            $cus_id = Customer_Info::orderBy('CUSTOMER_ID', 'DESC')->get(['CUSTOMER_ID'])->first();
            $cus_id = json_decode($cus_id);
            $id_cus = $cus_id->CUSTOMER_ID;
            //Insert New menu
            $new_menu              = new Menu;
            $new_menu->MENU_NAME   = "Menu tự chọn";
            $new_menu->MENUTYPE_ID = 4;
            $new_menu->CUSTOMER_ID = $id_cus;
            $new_menu->DESCRIPTION = "Ngon";
            $new_menu->IMAGE       = "unknown.jpg";
            $new_menu->COST        = session('input')['total_amount'];
            $new_menu->save();

            //Inser MenuDetail
            $arrIdFood = session('input')['id'];
            $iTotalID  = count($arrIdFood);
            for ($i = 0; $i < $iTotalID; $i++)
            {
                $menu_detail          = new Menu_Detail;
                $menu_detail->MENU_ID = 4;
                $menu_detail->FOOD_ID = $arrIdFood[$i];
                $menu_detail->save();
            }


        }


        //Insert ORDER
        $id_cus = Customer_Info::where('EMAIL', $email)->get();
        foreach ($id_cus as $cus)
        {
            $id = $cus->CUSTOMER_ID;
        }
        if ($mode == 'option')
        {
            $id_menu = Menu::orderBy('ID', 'DESC')->get(['ID'])->first();
            $id_cart = json_decode($id_menu);
            $id_cart = $id_cart->ID;
            $id_cart = strval($id_cart);
            for ($i = 0; $i < count($cart_id); $i++)
            {
                if ($type[$i] != "Dịch vụ kèm theo")
                {
                    $quantity_table = $quantity_table[$i];
                    break;
                }
            }
        }
        else
        {
            for ($i = 0; $i < count($cart_id); $i++)
            {
                if ($type[$i] != "Dịch vụ kèm theo")
                {
                    $id_cart        = $cart_id[$i];
                    $quantity_table = $quantity_table[$i];
                    break;
                }
            }
        }
//
        $order                     = new Order;
        $order->CUSTOMER_ID        = $id;
        $order->MENU_ID            = $id_cart;
        $order->NUMBER_OF_CUSTOMER = (int)$num_people;
        $order->NUMBER_OF_TABLE    = (int)$quantity_table;
        $order->ORDER_DATE         = $date_order;
        $order->TIME_DATE          = $date_time;
        $order->TOTAL_AMOUNT       = $total_amount;
        $order->DISCOUNT           = $discount;
        $order->DEPOSIT            = $deposit;
        $order->REST_MONEY         = ($total_amount - $discount - $deposit);
        $order->PAYMENT_METHOD     = $payment_method;
        $order->STATUS             = $status;
        $order->REMARK             = $remark;
        $order->save();

        //Insert SERVICE DETAIL
        $id = Order::orderBy('ORDER_ID', 'DESC')->get(['ORDER_ID'])->first();
        $id = json_decode($id);
        $id = $id->ORDER_ID;

        for ($i = 0; $i < count($cart_id); $i++)
        {
            if ($type[$i] == "Dịch vụ kèm theo")
            {
                $sd             = new Service_Detail;
                $sd->SERVICE_ID = $cart_id[$i];
                $sd->ORDER_ID   = $id + 1;
                $sd->save();
                $id++;
            }
        }
        $request->session()->flush();


        return view('success');
    }

    public function listorder()
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

        $email = DB::table('USER')->select('EMAIL')
            ->where('USERNAME', '=', session('username'))->get();

        $customer_id = DB::table('CUSTOMER_INFO')->select('CUSTOMER_ID')
            ->where('EMAIL', '=',  $email[0]->EMAIL)->get();

        $arrOrder = DB::table('ORDER')->select('*')
            ->where('CUSTOMER_ID', '=', $customer_id[0]->CUSTOMER_ID)->get();

        $this->data['arrOrder'] = $arrOrder;

        return view("cart/listorder", $this->data);
    }
}