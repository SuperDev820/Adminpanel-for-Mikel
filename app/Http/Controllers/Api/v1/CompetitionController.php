<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompetitionController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api', ['except' => []]);
    }
    /**
     * Response all data
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $competitions = Competition::all();
        foreach ($competitions as $competition) {
            $competition->competition_type;
        }
        return response()->json([
            'message' => 'success',
            'competitions' => $competitions
        ], 200);
    }

    /**
     * Response one data by id
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getById(Request $request, $competitionId)
    {
        $competition = competition::find($competitionId);
        $competition->competition_type;
        return response()->json([
            'message' => 'success',    
            'competition' => $competition,
        ], 200);
    }

    /**
     * Create new data
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        //
    }
}