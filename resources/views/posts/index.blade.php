@extends('layouts.app')
@section('myContent')

    <a href="{{route("posts.create")}}" class="btn btn-success mb-2">Create Post</a>
    @csrf
    <table class="table" >
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->created_at->format('y-m-d')}}</td>
            <td>
                <a href="{{route("posts.show",["post"=>$post->id])}}" class="btn btn-info">View</a>
                <a href="{{route("posts.edit",["post"=>$post->id])}}"  class="btn btn-primary">Edit</a>

                <form STYLE="display:inline" action="{{route("posts.destroy",["post"=>$post->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="myFunction()" class="btn btn-danger">Delete</button>
                    <script>
                        function myFunction() {
                            alert("Are you sure ?");
                        }
                    </script>
                </form> </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
