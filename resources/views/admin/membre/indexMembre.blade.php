@extends('layouts.index')

@section('content')
    <div class="mx-auto d-flex justify-content-center m-5">
        <a href="{{route('membre.create')}}" class="btn btn-primary">Ajouter un membre</a>       
    </div>
    <div class="mx-auto d-flex flex-column align-items-center justify-content-center m-5">
        @foreach ($allMembres as $membre)
                <p>{{$membre->name}} -> {{$membre->genre->type}}</p>
        @endforeach
    </div>
@endsection