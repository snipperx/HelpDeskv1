<?php

namespace App\Http\Controllers\settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ThemeSettings;

class CompanySettingsController extends Controller {
    public function __construct() {
        $this->middleware( 'auth' );

    }

    public function index() {

        $Themes = ThemeSettings::all();

        return view( 'settings.company_config', compact( 'Themes' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $exp =  explode( '-', $request->sidebarThemeSettings );

        ThemeSettings::updateOrCreate(
            [ 'id' =>  1 ],
            [ 'name' => $exp[ 1 ] ]
        );

        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\ThemeSettings  $ThemeSettings
    * @return \Illuminate\Http\Response
    */

    public function show( ThemeSettings $ThemeSettings ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\bids  $ThemeSettings
    * @return \Illuminate\Http\Response
    */

    public function edit( ThemeSettings $ThemeSettings ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\bids  $ThemeSettings
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, ThemeSettings $ThemeSettings ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\bids  $ThemeSettings
    * @return \Illuminate\Http\Response
    */

    public function destroy( ThemeSettings $ThemeSettings ) {
        //
    }
}
