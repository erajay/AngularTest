<?php

namespace App\Http\Controllers;

use App\Points;
use Illuminate\Http\Request;
use App\Team;
use Illuminate\Support\Facades\DB;

class PointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      



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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Points  $points
     * @return \Illuminate\Http\Response
     */
    public function show($teamId)
    {
    
      $teams= Team::with(['points' => function($query) use ($teamId){
        $query->where('teamId', $teamId);
      }])->where('id',$teamId)->select(['id','name','logoUri'])->get();

      foreach($teams as $kt=>$kv){
       $points= $kv->points->sum('points');
          
      }
    
      if($points){
        echo json_encode(['status'=>true,'point'=>$points]);
      }else{
        echo json_encode(['status'=>false]);
      }
    
    
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Points  $points
     * @return \Illuminate\Http\Response
     */
    public function edit(Points $points)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Points  $points
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Points $points)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Points  $points
     * @return \Illuminate\Http\Response
     */
    public function destroy(Points $points)
    {
        //
    }
}
