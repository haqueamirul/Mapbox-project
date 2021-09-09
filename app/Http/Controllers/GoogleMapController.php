<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\FormMapRequest;
use App\Boxmap;
class GoogleMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boxmap = Boxmap::all();

        $dataMap  = Array();
        $dataMap['type']='FeatureCollection';
        $dataMap['features']=array();
       foreach($boxmap as $value){
                $feaures = array();
                $feaures['type']='Feature';
                $geometry = array("type"=>"Point","coordinates"=>[$value->lng, $value->lat]);
                $feaures['geometry']=$geometry;
                $properties=array('title'=>$value->title,"ques_one"=>$value->ques_one,"ques_two"=>$value->ques_two,"description"=>$value->description);
                $feaures['properties']= $properties;
                array_push($dataMap['features'],$feaures);

       }
        return View('pages.google-map')->with('dataArray',json_encode($dataMap));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $validated = $request->validated();
        // dd($request->all());
       // Boxmap::create($request->all());

            $map = new Boxmap();
            $map->title = $request->title;
            $map->description = $request->description;
            $map->ques_one = $request->ques_one;
            $arryValue = implode(', ', $request->ques_two);
            $map->ques_two = $arryValue;
            $map->lat = $request->lat;
            $map->lng = $request->lng;

            $map->save();
       return redirect()->route('google.map.index')->with('success',"Add map success!");


    }
}
