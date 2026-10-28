<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function shop()
    {
        $items=Item::orderBy('id','DESC')->paginate(12);
        return view ('front.shops',compact('items'));
    }
    public function shopItem($id)
    {
        $item=Item::find($id);
    return view ('front.shop-item',compact('item')); 
    }
}
