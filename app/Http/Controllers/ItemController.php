<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function item($item)
    {
        $items = [12, 24, $item];
        return view("index", compact('items'));
    }
}

?>
