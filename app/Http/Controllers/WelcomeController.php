<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
   public function index(){
       return view('front.home.home-content');

       //$data = 'Hello From Data';
       //return view('demo',compact('data'));
       //return view('demo')->with('op',$data);
       //return view('demo',[
          // 'data'=> $data
       //]);

   }

   public function category(){
       return view('front.category.category-content');
   }

   public function mcategory(){
       return view('front.category.mcategory-content');
   }
}
