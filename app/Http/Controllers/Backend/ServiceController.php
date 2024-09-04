<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ServiceRequest;
use App\Models\Industry;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();

        return view('backend.service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industries = Industry::get();

        return view('backend.service.create', ['industries' => $industries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $this->validate($request,
            [
                'industry' => 'required',
                'service' => 'required|max:191',
            ]);
        $checkIfService = Service::where('service', $request->service)->where('industry_id',
            $request->industry)->first();
        if (count($checkIfService) > 0) {
            return redirect()->route('admin.services.create')->with('flash_danger',
                'Service already exists.');
        }
        $checkIfIndustry = Industry::where('id', $request->industry)->first();
        $industry = new Service;
        $industry->industry_id = $checkIfIndustry->id;
        $industry->service = $request->service;
        if ($industry->save()) {
            return redirect()->route('admin.services.index')->with('flash_success',
                'Service saved successfully.');
        }

        return redirect()->route('backend.services.create')->with('flash_danger',
            'Service not saved.');
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
            $industries = Industry::get();
            $service = Service::where('id', $id)->with('industry')->first();

            return view('backend.service.create',
                ['service' => $service, 'industries' => $industries]);
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
                'service' => 'required',
            ]);
        //        dd($request->all());
        if ($request->industry) {
            $input['industry_id'] = $request->industry;
        }

        $input['service'] = $request->service;
        //update fields
        if (Service::where('id', $id)->exists()) {
            Service::where('id', $id)->update($input);

            return redirect()->route('admin.services.index')->with('flash_success',
                'Service updated successfully.');
        }

        return redirect()->back()->with('flash_success',
            'Service Updation Failed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Service::where('id', $id)->delete()) {

            return response()->json(['success' => true, 'message' => 'Service deleted successfully'],
                200);
        }

        return response()->json(['success' => false, 'message' => 'Service Deletion Failed'],
            500);
    }
}
