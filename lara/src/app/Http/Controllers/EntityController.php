<?php

namespace App\Http\Controllers;

use App\Http\Requests\Entity\StoreEntityRequest;
use App\Models\Entity;
use Illuminate\Http\Request;


class EntityController extends Controller
{
    public function index()
    {
        $all = Entity::all();
//        $all = Entity::query()
//            ->where('id', '>' ,'10');
        // dd($all); // Вывести на экран полученные результаты - var_dump
        return view('entity.index',
        [
            'entities' => $all
        ]
        );
    }


    /**
     * @param Request $request - Если такой параметр - не будет происходить
     * проверка данных по правилам
     * Что бы проверять до запуска контроллера
     * следует создать класс Request
     * И описать в нем правила
     */
    public function store(StoreEntityRequest $request){
        // dd($request);
        $newEntity = new Entity;
        $newEntity->name = $request->name;
        $newEntity->url = $request->url;
        $newEntity->description = $request->description;

        $newEntity->save();
        return redirect(route('entity.read.all'));
//        return view('entity.index',
//            [
//                'entities' => Entity::all()
//            ]
//        );
        //dd($newEntity);

    }
}
