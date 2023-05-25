<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Gategory;
use App\Models\Post;
use App\Models\User;
use DOMDocument;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthorController extends Controller

{

    public function __construct() {
        $this->middleware('IsAuthorMiddleware');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $author_id = $request->route('author');
        $author = Author::find($author_id);
        $posts = $author->posts;
        $sortedPosts = collect($posts)->sortByDesc('created_at')->values()->all();
        $user = User::find($author->user_id);
        return view('CMS.index',['orderedPostsDate'=>$sortedPosts,'user'=>$user,'author'=>$author_id]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $gategories = Gategory::all();
        $authorId = $request->route('author');
        $author = Author::find($authorId);
        $profilePic = $author->user->profilePic;
        return view('CMS.postCreate',['authorId'=>$authorId,'gategories'=>$gategories,'profilePic'=>$profilePic]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        function StoreOnPost($post,$author_id) {

            global $request;

            $gategory = Gategory::where('name','=',$request->gategories)->first();

            $path= $request->file('thumbnail')->store('public/images/post');
            $filename = basename($path);


            $post->thumbnail = $filename;
            $post->author_id = $author_id;
            $post->gategory_id = $gategory->id;

            $html = $request->input('content');

            $dom = new DOMDocument();
            $dom->loadHTML($html);

            $h1 = $dom->getElementsByTagName('h1')->item(0);
            $newDom = new DOMDocument();
            if ($h1) {
                $newDom->appendChild($newDom->importNode($h1, true));


                $h1_html = $newDom->saveHTML();
                $start = strpos($h1_html, '>') + 1;
                $end = strrpos($h1_html, '<');
                $h1_innerHTML = substr($h1_html, $start, $end - $start);

                $h1_innerH = str_replace('&#13;', '', $h1_innerHTML);

                $h1_parent = $h1->parentNode;
                $h1_parent->removeChild($h1);

                $html = $dom->saveHTML();

            }

            $post->content = $html;

            $post->title = $h1_innerH;

            if($request->input('action') == 'post') {
                $post->isPosted = true;
            }

            if($post->save()) {
                $author = Author::find($author_id);
                $nb_articles = $author->nb_articles;

                $author->nb_articles = $nb_articles+1;

                $author->save();
            }

        }


        if($request->input('action') == 'save') {

            StoreOnPost(new Post(),$request->route('author'));

            $author_id = $request->route('author');

        return redirect(Route('author.posts.index',['author'=>$author_id]));

        } elseif ($request->input('action') == 'post') {

            $author_id = $request->route('author');
            StoreOnPost(new Post(),$request->route('author'));
            return redirect(Route('getBlogWebsite'));
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,Request $request)
    {
        $postId = $request->route('post');
        $post = Post::find($postId);
        return view('CMS.show',compact('post'));
//        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,Request $request)
    {
        $gategories = Gategory::all();
        $authorId = $request->route('author');
        $postId = $request->route('post');
        $post = Post::find($postId);
        $author = Author::find($authorId);
        $profilePic = $author->user->profilePic;
        return view('CMS.edit',['authorId'=>$authorId,'gategories'=>$gategories,'profilePic'=>$profilePic,'post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $currentDateTime = date('Y-m-d H:i:s');
        $post_id = $request->route('post');
        $post = Post::find($post_id );
        $gategory = Gategory::where('name','=',$request->gategories)->first();
        $author_id = $request->route('author');

        $path= $request->file('thumbnail')->store('public/images/post');
        $filename = basename($path);

        $post->thumbnail = $filename;

        $post->author_id = $author_id;
        $post->gategory_id = $gategory->id;

        $html = $request->input('content');

        $dom = new DOMDocument();
        $dom->loadHTML($html);

        $h1 = $dom->getElementsByTagName('h1')->item(0);
        $newDom = new DOMDocument();
        if ($h1) {
            $newDom->appendChild($newDom->importNode($h1, true));


            $h1_html = $newDom->saveHTML();
            $start = strpos($h1_html, '>') + 1;
            $end = strrpos($h1_html, '<');
            $h1_innerHTML = substr($h1_html, $start, $end - $start);

            $h1_innerH = str_replace('&#13;', '', $h1_innerHTML);

            $h1_parent = $h1->parentNode;
            $h1_parent->removeChild($h1);

            $html = $dom->saveHTML();

        }

        $post->content = $html;

        $post->title = $h1_innerH;
        $post->created_at = $currentDateTime;
        $post->update();
        return redirect(Route('author.posts.index',['author'=>$author_id]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        $post_id= $request->route('post');
        $author_id= $request->route('author');

        $author = Author::find($author_id);
        $nb_articles = $author->nb_articles;

        $author->nb_articles = $nb_articles-1;

        $author->save();

        Post::where('id',$post_id)->delete();
        return redirect(Route('author.posts.index',['author'=>$author_id]));
    }

    public function postArticle(string $id, Request $request) {
        $post_id = $request->Route('post');
        $author_id = $request->Route('author');
        $post = Post::find($post_id);
        $post->isPosted = true;
        $post->save();
        return redirect(Route('author.posts.index',['author'=>$author_id]));
    }

    public function draftArticle(string $id, Request $request) {
        $post_id = $request->Route('post');
        $author_id = $request->Route('author');
        $post = Post::find($post_id);
        $post->isPosted = false;
        $post->save();
        return redirect(Route('author.posts.index',['author'=>$author_id]));
    }
}
