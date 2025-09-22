<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class   PostController extends Controller
{
    public function index()
    {
       
        $posts = Post::all();
        
        return view('posts', compact('posts'));

        }

        public function create()
        {
            $postsArr = [
                [
                    'title' => 'title of post from phpshtorm',
                    'content' => 'some interesting content',
                    'image' => 'imageblabla.jpg',
                    'likes' => 52,
                    'is_published' => 1,
                ],
                [
                    'title' => 'another title of post from phpshtorm',
                    'content' => 'another some interesting content',
                    'image' => 'another imageblabla.jpg',
                    'likes' => 25,
                    'is_published' => 1,
                ],
            ];

            foreach ($postsArr as $item) {

                Post::create($item);
            }
            dd('created');
        }


        public function update()
        {
            $post = Post::find(6);
            $post->update([
                'title' => 'updated',
                'content' => 'updated',
                'image' => 'updated',
                'likes' => 1000,
                'is_published' => 0,
            ]);
            dd('update');
        }

        public function delete()
        {
            $post = Post::withTrashed()->find(2);
            $post->restore();
            dd('Данные восстановлены!');
        }


        public function firstOrCreate() {
            
            $post = Post::find(1);

            
            $anotherPost = [
                'title' => 'some post',
                'content' => 'some content',
                'image' => 'some imageblabla.jpg',
                'likes' => 5000,
                'is_published' => 1,
            ];

            $myPost = Post::firstOrCreate([
                'title' => 'some title phpshtorm',
            ],[
                'title' => 'some title phpshtorm',
                'content' => 'some content',
                'image' => 'some imageblabla.jpg',
                'likes' => 5000,
                'is_published' => 1,
            ]);

            dd($post->content);
            dd('finished');
        }

        public function updateOrCreate() {
             $anotherPost = 
             [
                'title' => 'updateorcreate some post',
                'content' => 'updateorcreate some content',
                'image' => 'updateorcreate some imageblabla.jpg',
                'likes' => 500,
                'is_published' => 0,
            ];

            $post = Post::updateOrCreate([
                'title' => 'some title not phpshtorm'
            ],[
                'title' => 'some title phpshtorm',
                'content' => 'its no updateorcreate some content',
                'image' => 'its no updateorcreate some imageblabla.jpg',
                'likes' => 500,
                'is_published' => 0,
            ]);

            dump($post->content);

        }

}
