@extends('layouts.app')
@section('myContent')

<form method="POST" action="{{route("posts.store")}}">
    @csrf
       <div class="mb-3">
           <label class="form-label">Title</label>
           <input name="title" type="text" class="form-control"  >
       </div>
       <div class="mb-3">
           <label  class="form-label">Description </label>
           <input name="description" type="text" class="form-control"  >
       </div>
    <div class="mb-3">
        <p>User</p>
            <select class="form-select" name="user_id">

                @foreach($users as $user)
                <option  value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>

</form>
@endsection
