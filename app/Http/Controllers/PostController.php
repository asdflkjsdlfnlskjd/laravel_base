<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class   PostController extends Controller
{
    public function index()
    {
        $post = Post::where('is_published', 0)->first();
        dump($post->title);
        dd('end');
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
}
