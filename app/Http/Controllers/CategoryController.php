<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.categories.AddCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("Store function is called");
        // echo "Store function is called";
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',

        ]);
        try {
            Category::create([
                'name' => $request->name,
            ]);

            return redirect()->route('categories.index')
                ->with('success', 'Location created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
        // dd($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //

        return view('admin.categories.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
        // dd($category::all());
        //
        // dd("Update function is called");
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);
        try {
            $category->update([
                'name' => $request->name,
            ]);

            return redirect()->route('categories.index')
                ->with('success', 'category Updated successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
        $category->delete();
        return redirect()->route('categories.index')->with('sucess', 'Category deleted sucessfully');
    }
}
