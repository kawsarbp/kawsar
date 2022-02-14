@extends('admin.include.layouts')
@section('title')
    Manage Post
@endsection
@section('content')
    <h4 class="py-3">Manage Post</h4>
    @if(session()->has('message'))
        <div class="alert alert-{{session('type')}} text-center">{{session('message')}}</div>
    @endif
    <table class="table table-bordered table-striped">
        <tr>
            <th>Sl No</th>
            <th>Post Title</th>
            <th>Slug</th>
            <th>Photo</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td><a href="{{$post->slug}}" target="_blank">Click here</a></td>
            <td>{{$post->status}}</td>
            <td><img src="{{$post->photo}}" width="80px;" alt=""></td>
            <td>
                <a href="{{route('admin.post.show',$post->id)}}" class="btn btn-outline-info btn-sm">View</a>
                <a href="{{route('admin.post.edit',$post->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                <form action="{{route('admin.post.destroy',$post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$posts->links()}}
@endsection
