<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\AdvertiseImage;
use File;
use Illuminate\Http\Request;

class AdvertiseImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertiseImages = AdvertiseImage::get();

        return view('backend.advertise-images.index', ['advertiseImages' => $advertiseImages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.advertise-images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'page_link' => 'required',
            'advertise_image' => 'required|image|mimes:jpeg,jpg,png|max:1024',
        ]);

        // Removing App name
        $reducedLink = str_replace(asset('/'), '', $request->page_link);

        $advImage = store_advertise_image($request->advertise_image);
        $advertise = new AdvertiseImage;
        $advertise->page_link = $reducedLink;
        $advertise->image = $advImage;

        if ($advertise->save()) {
            return redirect()->route('admin.advertise-images.index')->with('flash_success',
                'Advertise saved successfully.');
        }

        return redirect()->route('backend.advertise-images.create')->with('flash_danger',
            'Advertise not saved.');
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
    public function edit($id) {}

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advertiseImage = AdvertiseImage::where('id', $id)->first();
        if ($advertiseImage) {
            if (File::deleteDirectory(storage_path('app/public/'.strstr($advertiseImage->image, '/', true)))) {
                AdvertiseImage::where('id', $id)->forceDelete();

                return response()->json(['success' => true, 'message' => 'Advertise deleted successfully'],
                    200);
            }
        }

        return response()->json(['success' => true, 'message' => 'Advertise deletion failed'],
            500);
    }
}
