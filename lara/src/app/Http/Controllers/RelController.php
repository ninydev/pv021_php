<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Cache;

class RelController extends Controller
{

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
