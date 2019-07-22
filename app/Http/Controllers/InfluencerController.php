<?php

namespace App\Http\Controllers;

use App\Influencer;
use PDF;

class InfluencerController extends Controller
{
    /**
     * Display a listing of the influencer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $influencers = Influencer::paginate(self::PAGINATION_COUNT);

        return view('influencers.index', compact('influencers'));
    }


    /**
     * Export list of the influencers in PDF
     *
     * @return \Illuminate\Http\Response
     */
    public function export()
    {
        $influencers = Influencer::all();
        $pdf = PDF::loadView('influencers.export', compact('influencers'));

        return $pdf->download('influencers.pdf');
    }
}
