<?php

namespace App\Http\Controllers;

use App\Influencer;
use Illuminate\Http\Request;

class InfluencerController extends Controller
{
    private const PAGINATION_COUNT = 10;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $influencers = Influencer::paginate(self::PAGINATION_COUNT);

        return view('influencer.index', compact('influencers'));
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
     * @param  \App\Influence  $influence
     * @return \Illuminate\Http\Response
     */
    public function show(Influence $influence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Influence  $influence
     * @return \Illuminate\Http\Response
     */
    public function edit(Influence $influence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Influence  $influence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Influence $influence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Influence  $influence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Influence $influence)
    {
        //
    }
}
