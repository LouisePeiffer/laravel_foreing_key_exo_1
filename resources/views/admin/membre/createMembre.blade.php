@extends('layouts.index')

@section('content')
    <h3>Ajouter un membre</h3>
    <form action="{{route('membre.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name : </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            <br>
        </div>
        <div>
            <label for="genre_id">Genre : </label>
            <select name="genre_id" id="genre_id" class="form-control">
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->type}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success" type="submit">Ajouter</button>
    </form>
@endsection