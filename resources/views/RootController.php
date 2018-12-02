<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\GuzzleClient;


class RootController extends Controller
{
   protected $client;

      public function __construct(){
          $this->client  = new GuzzleClient();

      }

    public function Welcome(){
     $data  =$this->client->GET_DATA_CLIENT('GETCourses');
     if($data ==false){
         $data = array();
     }
     //dd($data);
        return view('welcome')->with(compact('data'));
    }


}
