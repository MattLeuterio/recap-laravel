<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{   
    private $article;

    public function __construct() {
        $this->article = config('blog');
    }

    public function index() {
        $post = $this->article;
        return view('blog.index-blog', compact('post'));
    }

    public function show($slug) {
        $singlePost = $this->checkPost($slug, $this->article);

        if(! $singlePost) {
            abort(404);
        }

        $data = ['post' => $singlePost];

        return view('blog.show', $data);
    }   

    private function checkPost($slug, $array) {
        foreach ($array as $post) {
            if ($post['slug'] == $slug) {
               return $post;
            }
        }

        return false;
        
    }
}
