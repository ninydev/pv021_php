@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1> Тут будет коллекция сущностей </h1>

        <ul>
        @forelse ($entities as $entity)
            <li data-id="{{$entity->id}}">{{ $entity->name }}</li>
        @empty
            <li>No Entities</li>
        @endforelse
        </ul>
    </div>

    <div class="row">
        <form action="{{route('entity.store')}}" method="POST">
            @csrf
            <input type="text" name="name"><br>
            <input type="text" name="url"><br>
            <textarea name="description">

            </textarea><br>
            <input type="submit" value="save">
        </form>
    </div>
</div>
@endsection

