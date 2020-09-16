<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $req1 = 'https://api.sportsdata.io/v3/soccer/scores/json/Areas';
        $header1= 'f7b0c7419d204f299f59e646b45ca563';

        $areas = Http::withHeaders(['Ocp-Apim-Subscription-Key' => $header1])->get($req1)->json();

        $AreaId = $areas[0]['AreaId'];

        // dd($AreaId);

        
        $req = 'https://api.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/' . $AreaId;
        $header = 'f7b0c7419d204f299f59e646b45ca563';

        $comp = Http::withHeaders(['Ocp-Apim-Subscription-Key' => $header])->get($req)->json();

        dd($comp['CurrentSeason']['Rounds']);

        return view('areas.index', ['areas' => $areas]); 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
