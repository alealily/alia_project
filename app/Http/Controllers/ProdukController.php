<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function produk(){
        $data = [
            ["id"=> "1", "product"=> "Laptop"],
            ["id"=> "2", "product"=> "Televisi"],
            ["id"=> "3", "product"=> "Komputer"],
            ["id"=> "4", "product"=> "Mesin Cuci"],
            ["id"=> "5", "product"=> "AC"],
            ["id"=> "6", "product"=> "Handphone"]
        ];

        return view("list_produk", compact("data"));
    }
}
