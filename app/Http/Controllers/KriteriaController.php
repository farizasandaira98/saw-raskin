<?php

namespace App\Http\Controllers;

use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends VoyagerBaseController
{
    // Override the browse method
    public function index(Request $request)
    {
        // Custom logic here
        $kriterias = Kriteria::all();
        return view('voyager::kriterias.index', compact('kriterias'));
    }

    
    // API new function to return json data for index_user get all kriteria
    public function index_user()
    {
        return view('kriteria', [
            'kriterias' => Kriteria::all()
        ]);
    }

    // Override the store method
    public function store(Request $request)
    {
        // Custom logic here
        $kriteria = Kriteria::create($request->all());
        return redirect()->route('voyager.kriterias.browse')->with([
            'message'    => __('voyager::generic.successfully_added_new')." Kriteria",
            'alert-type' => 'success',
        ]);
    }

    // Override the update method
    public function update(Request $request, $id)
    {
        // Custom logic here
        $kriteria = Kriteria::find($id);
        $kriteria->update($request->all());
        return redirect()->route('voyager.kriterias.browse')->with([
            'message'    => __('voyager::generic.successfully_updated')." Kriteria",
            'alert-type' => 'success',
        ]);
    }

    // Override the destroy method
    public function destroy(Request $request, $id)
    {
        // Custom logic here
        Kriteria::destroy($id);
        return redirect()->route('voyager.kriterias.browse')->with([
            'message'    => __('voyager::generic.successfully_deleted')." Kriteria",
            'alert-type' => 'success',
        ]);
    }
}
