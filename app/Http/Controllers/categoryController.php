<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
class categoryController extends Controller
{




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }









    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view("category.index")->with("categories", $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.createCategory");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required'
        ]);

        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect()->back();
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
        $categories = Category::find($id);

        return view("category.editCategory")->with("categories", $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;
        $category->save();
        return redirect()->route("categories");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route("categories");
    }


    public function trashed()
    {
        // to make restore
        $category = Category::onlyTrashed()->get();

        return view("category.softDeleted")->with("categories", $category);
    }


    public function restore($id)
    {
        // to make restore
        $category = Category::withTrashed()->where('id', $id)->first();
        $category->restore();
        return redirect()->route("categories");
    }

    public function hdelete($id)
    {
        // to make hard Delete
        $category = Category::withTrashed()->where('id', $id)->first();
        $category->forceDelete();
        return redirect()->back();
    }







}
