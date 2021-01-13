<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestAgency;
use App\Http\Requests\FormRequestAgencyEdit;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->title;
        $agencys = DB::table('agencies')
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('code', 'LIKE', "%{$search}%")
            ->get();
        return view("backend.index", compact('agencys'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencys = Agency::all();
        return view("backend.index", compact('agencys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormRequestAgency $request)
    {
        $agency = new Agency();
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function edit(Agency $agency, $id)
    {
        $agency = Agency::findOrFail($id);
        return view("backend.edit", compact("agency"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function update(FormRequestAgencyEdit $request, Agency $agency)
    {
        $agency = Agency::findOrFail($request->id);
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agency $agency, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('admin.index');
    }
}
