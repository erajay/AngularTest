<?php

namespace App\Http\Controllers;

use App\Matches;
use Illuminate\Http\Request;
use App\Team;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $matches = Team::with('matches','matches2')->get()->toArray();
       
       //echo json_encode($matches);
         dd($matches);

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
     * @param  \App\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function show($teamId)
    {
        $matches= Team::with('matches','matches2')->select(['id','name','logoUri'])
        ->where('id',$teamId)->get();
       
        $count1= $matches[0]->matches->count();
        $count2= $matches[0]->matches2->count();

        if($count1 || $count2){
            
            echo json_encode(['status'=>'true','data'=>$matches->toArray()]);

        }else{
            echo json_encode(['status'=>'false']);
        }
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function edit($teamId)
    {
        //dd($matches);
        
        // foreach($matches as $matchVal){
        //     foreach($matchVal->matches as $matchesval){
        //            dd($matchesval->pivot->winnerTeamId);
        //     } 
            
        // }
        // dd($matches->matches);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matches $matches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matches  $matches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matches $matches)
    {
        //
    }
}
