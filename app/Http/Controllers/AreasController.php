<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $areasArray = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();


        $areas = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();
        // dd($areasArray);

        // $comps = collect($areas)->mapWithKeys(function($comp){
        //     return  [
        //                // $comp['Competitions'] => $comp['Competitions'][0],
        //                 // $area['Name'] => $area['Competitions']
        //             ];
        // });

        foreach($areas as $area){
            if(!empty($area['Competitions'])){
                // dump($area['Competitions']);
                foreach($area['Competitions'] as $competition){
                    // dump($competition);
                }
            }         
        }

        // dd($areas);
        
        return  view('area', 
        [
            // 'areasArray' => $areasArray,
            'areas' => $areas,
        ]);
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

        $areasArray = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/Areas')->json();

        if(!empty($_GET['area_id'])){
            $area_id = $_GET['area_id'];         
        }

        if(!empty($_GET['area_name'])){
            $area_name = $_GET['area_name'];         
        }

        if(!empty($_GET['comp_id'])){
            // $area_comp = json_decode($area_comp = $_GET['area_comp[]']);  
            $comp_id = $_GET['comp_id'];      
        }
        
        dd($comp_id);

        // $competition = Http::withHeaders(['Ocp-Apim-Subscription-Key'=>'f7b0c7419d204f299f59e646b45ca563'])->get('https://api.sportsdata.io/v3/soccer/scores/json/CompetitionDetails/' . $area_id)->json();

        // dd($areasArray);

        return view('show', 
            [
                'areasArray' => $areasArray,
                'area_id' => $area_id,
                'area_name' => $area_name,
                
            ]);
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
