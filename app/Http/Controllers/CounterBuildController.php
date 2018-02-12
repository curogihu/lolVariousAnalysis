<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterBuildController extends Controller
{
/*
In Python, collect data win builds and lose builds with opponent champion 
aggregate and submit them to My SQL on server 
*/



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_champions_list()
    {
        // i will be changed to return view('counterbuild.index',compact('champions_info'));
        return view('counterbuild.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_opponent_champions_list($my_champion_id)
    {
        return view('counterbuild.opponent_champions_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show_item_builds_list($my_champion_id, $enemy_champion_id)
    {
        return view('counterbuild.item_builds_list');
    }

}
