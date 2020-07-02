<?php

namespace App\Http\Controllers;

use App\Models\Vote;

use Illuminate\Http\{
    Request,
    Response
};

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Vote $vote
     *
     * @return Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Vote    $vote
     *
     * @return Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Vote $vote
     *
     * @return Response
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
