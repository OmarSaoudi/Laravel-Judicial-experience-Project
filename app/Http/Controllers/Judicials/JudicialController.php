<?php

namespace App\Http\Controllers\Judicials;
use App\Http\Controllers\Controller;

use App\Models\Judicial;
use Illuminate\Http\Request;
use App\Repository\JudicialRepositoryInterface;

class JudicialController extends Controller
{

    protected $Judicial;

    public function __construct(JudicialRepositoryInterface $Judicial)
    {
        $this->Judicial = $Judicial;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function show(Judicial $judicial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function edit(Judicial $judicial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Judicial $judicial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Judicial $judicial)
    {
        //
    }
}
