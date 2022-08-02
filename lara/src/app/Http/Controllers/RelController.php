<?php

namespace App\Http\Controllers;

use App\Models\Category;
use \App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Cache;

class RelController extends Controller
{

    public function manyToMany(){
        // $tags = Tag::all();
        // вести посты из метками (id 2 )

        //$posts = Tag::find(2)->posts;
//        $posts = Tag::query()->where('id', 2)->first()->posts;
//        Debugbar::info($posts);

        $tags = Tag::query()->where('id', 2)->with('posts')->get();
        Debugbar::info($tags);

        foreach ($tags as $tag) {
            foreach ($tag->posts as $post) {
                Debugbar::info($post->toArray());
            }
        }


        return view('home');
    }

    public function oneToMany(){
//        $allPost = \App\Models\Post::query()->with('category')->get();
//        Debugbar::info($allPost->toArray());
        // $laravelPost = Category::find(3)->posts;
        $laravelPost = Category::query()->where('slug', 'laravel')->first()->posts;
        Debugbar::info($laravelPost);

        $laravelPost2 = Post::query()->where('category_id', 3)->get();
        Debugbar::info($laravelPost2->toArray());


        return view('home');
    }


    public function oneToOne(){
//        $allUser = User::all();
//        //dd($allUser);
//        $firstUser = User::all()->first();
//        //dd($firstUser);
//

        // $allPost = Post::all()->first();
        //$a = Post::all();
        //$a = Post::query()->first();
        // $a = Post::query()->take(1)->get();
        //dd($a);

//        $keeper = User::query()
//            ->where('email', 'keeper@ninydev.com')
//            // ->with('profile') // Сразу запрашивает с отношениями
//        //->get();
//            ->first();
//        // $keeper = User::find(1);
//        echo "work";
//        Debugbar::info($keeper->toArray());
//        echo $keeper->profile;
//        Debugbar::info($keeper->toArray());



//        $keeper = Cache::get('keeper', function () {
//            $putToCache = User::query()
//                ->where('email', 'keeper@ninydev.com')
//                ->with('profile') // Сразу запрашивает с отношениями
//                ->first();
//
//            Cache::put('keeper', $putToCache, 360);
//
//            return $putToCache;
//        });

        // Cache::forget('keeper');

        // Debugbar::info($keeper->toArray());

        $profile = Profile::find(1);
        Debugbar::info($profile->toArray());
        Debugbar::info($profile->user->toArray());


        return view('home');
    }

}
