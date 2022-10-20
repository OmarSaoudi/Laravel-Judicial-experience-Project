<?php

namespace App\Repository;
use App\Models\Judicial;
use Illuminate\Support\Facades\DB;

class JudicialRepository implements JudicialRepositoryInterface{

    public function GetJudicials()
    {
        $judicials = Judicial::all();
        return view('pages.judicials.index', compact('judicials'));
    }

    public function CreateJudicials()
    {
        return view('pages.judicials.create');

    }

    public function StoreJudicials($request)
    {
        DB::beginTransaction();

        try {
            $judicials = new Judicial();
            $judicials->statement = $request->statement;
            $judicials->council_or_court = $request->council_or_court;
            $judicials->case_number = $request->case_number;
            $judicials->index_number = $request->index_number;
            $judicials->session_day = $request->session_day;
            $judicials->room = $request->room;
            $judicials->investigation_number = $request->investigation_number;
            $judicials->prosecution_number = $request->prosecution_number;
            $judicials->deposit_date = $request->deposit_date;
            $judicials->deposit_number = $request->deposit_number;
            $judicials->advance_amount = $request->advance_amount;
            $judicials->amount_invoice = $request->amount_invoice;
            $judicials->estimated_amount = $request->estimated_amount;
            $judicials->note = $request->note;
            $judicials->save();

            DB::commit(); // insert data
            return redirect()->route('judicials.index');

        }

        catch (\Exception $e){
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function ShowJudicials($id)
    {
        $judicials = Judicial::findorfail($id);
        return view('pages.judicials.show',compact('judicials'));
    }

    public function EditJudicials($id)
    {
        $judicials =  Judicial::findOrFail($id);
        return view('pages.judicials.edit', compact('judicials'));
    }

    public function UpdateJudicials($request)
    {
        try{
            $judicials = Judicial::findorfail($request->id);
            $judicials->statement = $request->statement;
            $judicials->council_or_court = $request->council_or_court;
            $judicials->case_number = $request->case_number;
            $judicials->index_number = $request->index_number;
            $judicials->session_day = $request->session_day;
            $judicials->room = $request->room;
            $judicials->investigation_number = $request->investigation_number;
            $judicials->prosecution_number = $request->prosecution_number;
            $judicials->deposit_date = $request->deposit_date;
            $judicials->deposit_number = $request->deposit_number;
            $judicials->advance_amount = $request->advance_amount;
            $judicials->amount_invoice = $request->amount_invoice;
            $judicials->estimated_amount = $request->estimated_amount;
            $judicials->note = $request->note;
            $judicials->save();

            return redirect()->route('judicials.index');
        }

        catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function DeleteJudicials($request)
    {
        Judicial::destroy($request->id);
        return redirect()->route('judicials.index');
    }

}
