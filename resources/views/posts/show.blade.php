@extends('layouts.app')
@section('myContent')

    <div class="card">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title"> <b>Id</b> : {{$post->id}}</h5>
            <h5 class="card-title"> <b>Title</b> : {{$post->title}}</h5>
            <p class="card-text"><b>Description</b>  </p>
            <p class="card-text">{{$post->description}} </p>

        </div>
    </div>
@endsection
