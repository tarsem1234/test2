<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Industry;
use App\Models\Service;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries = Industry::latest()->get();

        return view('backend.industry.index', ['industries' => $industries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.industry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'industry' => 'required',
            ]);

        $checkIfIndustry = Industry::where('industry', $request->industry)->first();
        if (count($checkIfIndustry) > 0) {
            return redirect()->route('admin.industries.create')->with('flash_warning',
                'Industry already exists.');
        }

        $industry = new Industry;
        $industry->industry = $request->industry;
        if ($industry->save()) {
            return redirect()->route('admin.industries.index')->with('flash_success',
                'Industry saved successfully.');
        }

        return redirect()->route('backend.industries.create')->with('flash_danger',
            'Industry not saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id) {
            $industry = Industry::find($id);

            return view('backend.industry.create', ['industry' => $industry]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'industry' => 'required',
            ]);
        //        dd($request->all());
        $input['industry'] = $request->industry;
        if (Industry::where('id', $id)->update($input)) {

            return redirect()->route('admin.industries.index')->with('flash_success',
                'Industry updated successfully.');
        }

        return redirect()->back()->with('flash_success',
            'Industry Updation Failed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Industry::where('id', $id)->delete()) {
            Service::where('industry_id', $id)->delete();

            return response()->json(['success' => true, 'message' => 'Industry deleted successfully'],
                200);
        }

        return response()->json(['success' => true, 'message' => 'Industry Deletion Failed'],
            500);
    }
}
