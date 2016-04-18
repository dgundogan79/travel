<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Countries;

class ProfileController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function getedit() {
        $user = Auth::user();
        $profile = Profile::where('user_id', '=', $user->id);
        if ($profile->count()) {
            $profile = $profile->first();
            $countries = Countries::lists('name','id');

            return View('profile.edit',compact('profile','countries'));
        }
    }

    public function postedit(Request $request) {

        $user = Auth::user();
        $profile = Profile::where('user_id', '=', $user->id);
        if ($profile->count()) {
            $profile = $profile->first();
            $profile->country_id = $request->country_id;
            $profile->save();

            $countries = Countries::lists('name','id');
            
            return View('profile.edit',compact('profile','countries'));
        }
    }

}
