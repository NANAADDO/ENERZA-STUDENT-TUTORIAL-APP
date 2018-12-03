<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\GuzzleClient;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;


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

    public function ShowSelectedCourse(Request $request)
    {

        $id =$request->course_id;
        Session::put('course_id',$id);
       return redirect('CourseSubject');

    }

    public function ShowSelectedCourseID()
    {
       $id = Session::get('course_id');
        $data = $this->client->GET_DATA_CLIENT('GETCourseSubject/'.$id);
        if($data ==false){
            $data = array();
        }
        return view('student.course')->with(compact('data'));
    }


    public function SelectedSubjectContent(Request $request)
    {
        $id =$request->content_id;
        Session::put('content_id',$id);
        $data = $this->client->GET_DATA_CLIENT('GETSubjectContent/'.$id);
        if($data ==false){
            $data = array();
        }
       return response()->json(['d'=>$data]);
    }

    public function ShowSelectedQuizContent(Request $request)
    {
        $id =$request->content_id;
        Session::put('content_id',$id);
        $data = $this->client->GET_DATA_CLIENT('GETSubjectQuizContent/'.$id);
        if($data ==false){
            $data = array();
        }
        return response()->json(['d'=>$data]);
    }
}
