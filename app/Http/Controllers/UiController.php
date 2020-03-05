<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Post;
use App\Category;
use Artesaos\SEOTools\Facades\SEOMeta;
class UiController extends Controller
{










    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {


        SEOMeta::setTitle('Windows Soft');
        SEOMeta::setDescription("All Software You need In This Web Site, Programs, Packges, Game , Application,Free Antivirus , Downloads");
        SEOMeta::addKeyword(['WindowsSoft', 'Windows', 'Soft', 'Windows10', 'Programmes', 'PC', 'Laptop', 'Android','IOS', '2019', '2020', 'Box','Actiation', 'Key', 'Antivirus', 'Office', 'Adobe' ,'Progrmmaing', 'Coding', 'Stduing', 'Learnning', 'Bit', 'Pro', '64','32','Microsoft','Full','Professional' ,'Server','License' , 'product']);


        // for make paginate when num of Post 33 {{$posst->links()}}
        $posts = Post::orderBy("created_at", "desc")->paginate(33);


        return view("UI.index")
                    ->with("categories", Category::take(5)->get())
                    ->with("posts",$posts );
    }







    public function showPost($slug)
    {


   


        $post = Post::where('slug', $slug)->firstOrFail();

        $next_page = Post::where('id' , ">" , $post->id)->orderBy('id', 'asc')->first();
        $prev_page = Post::where('id' , "<" , $post->id)->orderBy('id', 'desc')->first();


        SEOMeta::setTitle("Windows Soft | $post->title");

        SEOMeta::setDescription("$post->content");

        SEOMeta::addKeyword(['WindowsSoft', 'Windows', 'Soft', 'Windows10', 'Programmes', 'PC', 'Laptop', 'Android','IOS', '2019', '2020', 'Box','Actiation', 'Key', 'Antivirus', 'Office', 'Adobe' ,'Progrmmaing', 'Coding', 'Stduing', 'Learnning', 'Bit', 'Pro', '64','32','Microsoft','Full','Professional' ,'Server','License' , 'product']);



        // for count
        $postKey =  $post->id;
        if(!Session::has($postKey)){
            $post->increment('count_view');
            Session::put($postKey, 1);
        }





        return view("UI.showPost")
                        ->with('post', $post)
                        ->with('next' , $next_page)
                        ->with('prev' , $prev_page)
                        ->with("categories", Category::take(7)->get());
    }


    //       //route for query results

    public function search(){

        $post = Post::where('title', 'like' ,  '%' . request('search') . '%' )->get();


        SEOMeta::setTitle("Windows Soft | Search");
        
        SEOMeta::setDescription("All Software You need In This Web Site, Programs, Packges, Game , Application,Free Antivirus , Downloads");

        SEOMeta::addKeyword(['WindowsSoft', 'Windows', 'Soft', 'Windows10', 'Programmes', 'PC', 'Laptop', 'Android','IOS', '2019', '2020', 'Box','Actiation', 'Key', 'Antivirus', 'Office', 'Adobe' ,'Progrmmaing', 'Coding', 'Stduing', 'Learnning', 'Bit', 'Pro', '64','32','Microsoft','Full','Professional' ,'Server','License' , 'product']);




        return view('UI.searchResult')
                    ->with('posts' , $post )
                    ->with('query' , request('search'))
                    ->with('title' ,  'Result : '. request('search') )
                    ->with("categories", Category::take(7)->get());
    }








    public function category($id)
    {

        $category = Category::find($id) ;


        SEOMeta::setTitle("Windows Soft | $category->name");
        
        SEOMeta::setDescription("All Software You need In This Web Site, Programs, Packges, Game , Application,Free Antivirus , Downloads");

        SEOMeta::addKeyword(['WindowsSoft', 'Windows', 'Soft', 'Windows10', 'Programmes', 'PC', 'Laptop', 'Android','IOS', '2019', '2020', 'Box','Actiation', 'Key', 'Antivirus', 'Office', 'Adobe' ,'Progrmmaing', 'Coding', 'Stduing', 'Learnning', 'Bit', 'Pro', '64','32','Microsoft','Full','Professional' ,'Server','License' , 'product']);




        return view('UI.category')
                            ->with('title' , $category->name)
                            ->with('categories' , Category::take(7)->get() )
                            ->with('name' , $category->name )
                            ->with('category' , $category );

    }






    public function download($slug)
    {

        $post = Post::where('slug', $slug)->firstOrFail();

        return view("UI.download")
                        ->with('post', $post)

                        ->with("categories", Category::take(7)->get());
    }













    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
