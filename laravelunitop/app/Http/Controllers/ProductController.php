<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller // kế thừa lớp Controller
{
    //
    function show($id){
        // return "Thông tin sản phẩm id".$id;
        $price = 200;
        $color = ['red', 'green'];
        return view('product.show', compact('id', 'price', 'color'));
    }
    function create(){
        //return "thêm sản phẩm";
        return view('product.create');
    }
    function update($id){
        return "update sản phẩm có id".$id;
    }
}
