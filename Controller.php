<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    //https://developers.google.com/chart/interactive/docs/gallery/vegachart
    public function index()
    {
        // $data=DB::table('students')->get();
        $data=DB::select(DB::raw("select count(*) as total_city,city from students group by city"));
        $result="";
        foreach($data as $list)
        {
            $result.="['".$list->city."', ".$list->total_city."],";
        }
        $ary["resu"]=rtrim($result,",");
        return view('chart',$ary);
    }


    public function index2()
    {
        // $data=DB::table('students')->get();
        $data=DB::select(DB::raw("select count(*) as total_city,city from students group by city"));
        $result="";
        foreach($data as $list)
        {
            $result.="['".$list->city."', ".$list->total_city."],";
        }
        $ary["resu"]=rtrim($result,",");
        return view('chart2',$ary);
    }
}
