<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Post;
use App\Category;
class postController extends Controller
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
        $posts = Post::all();
        $categorey = Category::all();
        return view("posts.index")
                    ->with("posts", $posts)
                    ->with("categories", $categorey);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // to get all Category from category table // by relation
        $categories = Category::all();
        if($categories->count() == 0){
            return redirect()->route("category.createCategory");
        }
        return view("posts.createPost")->with("categories", $categories);
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
            'title' => 'required',
            'content' => 'required',
            'link' => 'required',
            'category_id' => 'required',
            'featured' => 'required|image'
        ]);

        // to add image
        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move("uploads/posts", $featured_new_name);



        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link,
            'category_id' => $request->category_id,
            'featured' => 'uploads/posts/'.$featured_new_name,
            'slug' =>  str_slug($request->title) // my new post  my-new-post
        ]);

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
        $posts = Post::find($id);
        return view('posts.showPostByID')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return  view("posts.editPost")
                            ->with("posts", $post)
                            ->with("categories", $categories);
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
        $post = Post::find($id);

        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'link' => 'required',
            'category_id' => 'required'
        ]);



        if($request->hasFile('featured')){
            // to add image
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move("uploads/posts/", $featured_new_name);

            $post->featured = "uploads/posts/".$featured_new_name;
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->link = $request->link;
        $post->category_id = $request->category_id;
        
  

        $post->save();
        
      

        return redirect()->route("posts");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }


    public function trashed()
    {
        // to make restore
        $post = Post::onlyTrashed()->get();

        return view("posts.softDeleted")->with("posts", $post);
    }


    public function restore($id)
    {
        // to make restore
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();
        return redirect()->route("posts");
    }

    public function hdelete($id)
    {
        // to make restore
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();
        return redirect()->back();
    }



    // public function search(Request $request){

    //     $search = $request->get('search'); // to get the name of search form
        
    //     // like to get any $search have the same name or between patients '%' . $search . '%'
    //     $posts = DB::table('posts')->where('title', 'like', '%' . $search . '%')->get() ;
    //     return view('posts.index')
    //                     ->with('posts', $posts);

    // }







}
