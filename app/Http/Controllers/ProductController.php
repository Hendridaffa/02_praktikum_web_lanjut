<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
    }
    public function product($id){
        return '<a href="https://www.educastudio.com/category/'.$id.'">https://www.educastudio.com/category/'.$id.'</a>';
    }
    public function news($id){
        return '<a href="https://www.educastudio.com/news/'.$id.'">https://www.educastudio.com/news/'.$id.'</a>';
    }
    public function program($id){
        return '<a href="https://www.educastudio.com/program/'.$id.'">https://www.educastudio.com/program/'.$id.'</a>';
    }
    public function us(){
        return '<a href="https://www.educastudio.com/contact-us/'.$id.'">https://www.educastudio.com/contact-us/'.$id.'</a>';
    }
}
