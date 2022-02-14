@extends('admin.include.layouts')
@section('title')
    Manage Categories
@endsection
@section('content')
    <h4 class="py-3">Manage Categories</h4>
    @if(session()->has('message'))
        <div class="alert alert-{{session('type')}} text-center">{{session('message')}}</div>
    @endif
    <table class="table table-bordered table-striped">
        <tr>
            <th>Sl No</th>
            <th>Name</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td>{{$category->status}}</td>
            <td>
                <a href="{{route('admin.category.show',$category->id)}}" class="btn btn-outline-info btn-sm">View</a>
                <a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                <form action="{{route('admin.category.destroy',$category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$categories->links()}}
@endsection
