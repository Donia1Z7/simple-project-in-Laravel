@extends('layouts.app')
@section('myContent')

    <form action="{{route('posts.update',[$post->id])}}" method="POST" >
@method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{$post->title}}" >
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input name="description" type="text" class="form-control"  value="{{$post->description}}" >
        </div>
        <div class="mb-3">
            <p>User</p>
            <select class="form-select" name="user_id">

                @foreach($users as $user)
                    <option  value="{{$user->id}}"  @if($user->id == $post->user_id) selected @endif>{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
