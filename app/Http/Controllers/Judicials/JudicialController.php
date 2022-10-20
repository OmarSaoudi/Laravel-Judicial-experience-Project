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
        return $this->Judicial->GetJudicials();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->Judicial->CreateJudicials();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->Judicial->StoreJudicials($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->Judicial->ShowJudicials($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->Judicial->EditJudicials($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return $this->Judicial->UpdateJudicials($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Judicial  $judicial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        return $this->Judicial->DeleteJudicials($request);
    }

    public function delete_all_j(Request $request)
    {
        return $this->Judicial->delete_all_j($request);
    }
}
