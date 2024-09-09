<?php

namespace App\Http\Controllers\Backend;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $categories = Category::latest()->get();

        return view('backend.learning_center.category_list',
            ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('backend.learning_center.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        //        dd($request->all());
        $this->validate($request,
            [
                'category' => 'required|max:150',
                'description' => 'required',
            ]);

        //        $checkIfIndustry = Industry::where('industry', $request->industry)->first();
        //        if (count($checkIfIndustry) > 0) {
        //            return redirect()->route('admin.industries.create')->with('flash_warning',
        //                    'Industry already exists.');
        //        }

        $category = new Category;
        $category->category = $request->category;
        $category->description = $request->description;
        if ($category->save()) {
            return redirect()->route('admin.categories.index')->with('flash_success',
                'Category saved successfully.');
        }

        return redirect()->route('backend.categories.create')->with('flash_danger',
            'Category not saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id): View
    {
        if ($id) {
            $category = Category::find($id);

            return view('backend.learning_center.category_create',
                ['category' => $category]);
        }
    }

    public function deactivate($id): RedirectResponse
    {
        if ($id) {
            $exist = Category::find($id);
            if ($exist->count() > 0) {
                if ($exist->status == 1) {
                    if (Category::where('id', $id)->update(['status' => 0])) {
                        return redirect()->route('admin.categories.index')->with('flash_success',
                            'Category deactivated successfully.');
                    }
                }
                if ($exist->status == 0) {
                    if (Category::where('id', $id)->update(['status' => 1])) {
                        return redirect()->route('admin.categories.index')->with('flash_success',
                            'Category activated successfully.');
                    }
                }
            }

            return redirect()->back()->with('flash_success',
                'Category Updation Failed.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $this->validate($request,
            [
                'category' => 'required|max:150',
                'description' => 'required',
            ]);
        //        dd($request->all());
        $input['category'] = $request->category;
        $input['description'] = $request->description;
        if (Category::where('id', $id)->update($input)) {

            return redirect()->route('admin.categories.index')->with('flash_success',
                'Category updated successfully.');
        }

        return redirect()->back()->with('flash_success',
            'Category Updation Failed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id): JsonResponse
    {
        if (Category::where('id', $id)->delete()) {

            return response()->json(['success' => true, 'message' => 'Category deleted successfully'], 200);
        }

        return response()->json(['success' => true, 'message' => 'Category Deletion Failed'], 500);
    }
}
