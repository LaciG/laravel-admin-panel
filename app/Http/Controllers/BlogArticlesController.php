<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Category;
use App\Blog;
use Image;
use Auth;

class BlogArticlesController extends Controller
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

    public function index(Request $request) {

        $bloglist = DB::table('blog')->orderBy('created_at', 'desc')->paginate(5);        

        return view('blogarticle', ['bloglist' =>$bloglist]);
    }

    public function create() {
        $categories = Category::all();
        return view('addblogarticle', ['categories' => $categories]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'blog_title' => 'required',
            'categoryId' => 'required',
            'blog_language' => 'required',
            'blog_start_post' => 'required',
            'blog_rest_post' => 'required',
            'blog_cover_image' => 'required',
            'blog_cover_image_alt' => 'required',
            'blog_meta_description' => 'required',
            'blog_meta_keywords' => 'required',
        ]);
        $post = new Blog;
        $post->blog_title = $request->input('blog_title');
        $post->blog_category = $request->input('categoryId');
        $post->language = $request->input('blog_language');
        $post->blog_start_post = $request->input('blog_start_post');
        $post->blog_rest_post = $request->input('blog_rest_post');

        if(Input::hasFile('blog_cover_image')) {

            $file = Input::file('blog_cover_image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();

            //$path = public_path('/images/' . $filename);
            //$url = URL::to("/") . '/public/images/' . $filename;
            
            $path = public_path('/images/' . $filename);
            $url = URL::to("/") . '/images/' . $filename;

            Image::make($file->getRealPath())->resize(600, 400)->save($path);


        }
        $post->blog_cover_image = $url;
        $post->blog_cover_image_alt = $request->input('blog_cover_image_alt');
        $post->blog_meta_description = $request->input('blog_meta_description');
        $post->blog_meta_keywords = $request->input('blog_meta_keywords');
        $post->save();

        return redirect('/home')->with('response', 'Cikk hozzáadva');
    }

    public function view($id) {
        $categories = Category::all();
        $blogpost = Blog::find($id);
        $category = Category::find($blogpost->categoryId);

        return view('editblogarticle', ['categories' => $categories, 'blogpost' => $blogpost, 'category' => $category]);
    }

    public function edit(Request $request, $id) {
        $this->validate($request, [
            'blog_title' => 'required',
            'categoryId' => 'required',
            'blog_language' => 'required',
            'blog_start_post' => 'required',
            'blog_rest_post' => 'required',
            'blog_cover_image' => 'required',
            'blog_cover_image_alt' => 'required',
            'blog_meta_description' => 'required',
            'blog_meta_keywords' => 'required',
        ]);
        $post = new Blog;
        $post->blog_title = $request->input('blog_title');
        $post->blog_category = $request->input('categoryId');
        $post->language = $request->input('blog_language');
        $post->blog_start_post = $request->input('blog_start_post');
        $post->blog_rest_post = $request->input('blog_rest_post');

        if(Input::hasFile('blog_cover_image')) {

            $file = Input::file('blog_cover_image');
            $filename  = time() . '.' . $file->getClientOriginalExtension();

            //$path = public_path('/images/' . $filename);
            //$url = URL::to("/") . '/public/images/' . $filename;
            
            $path = public_path('/images/' . $filename);
            $url = URL::to("/") . '/images/' . $filename;

            Image::make($file->getRealPath())->resize(600, 400)->save($path);


        }
        $post->blog_cover_image = $url;
        $post->blog_cover_image_alt = $request->input('blog_cover_image_alt');
        $post->blog_meta_description = $request->input('blog_meta_description');
        $post->blog_meta_keywords = $request->input('blog_meta_keywords');

        $data = array(
            'blog_title' => $post->blog_title,
            'blog_category' => $post->blog_category,
            'language' => $post->language,
            'blog_start_post' => $post->blog_start_post,
            'blog_rest_post' => $post->blog_rest_post,
            'blog_cover_image' => $post->blog_cover_image,
            'blog_cover_image_alt' => $post->blog_cover_image_alt,
            'blog_meta_description' => $post->blog_meta_description,
            'blog_meta_keywords' => $post->blog_meta_keywords,
        );
        Blog::where('id', $id)->update($data);
        $post->update();
        return redirect('/home')->with('response', 'Cikk Szerkesztve');
    }

    public function destroy($id) {
        Blog::where('id', $id)->delete();
        return redirect('/blogarticles')->with('response', 'Cikk Törölve');
    }

}
