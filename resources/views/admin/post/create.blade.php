@extends('admin.include.layouts')
@section('title')
    Add Post
@endsection
@section('content')
    Work not done!
    <div class="row justify-content-center">
        <div class="col-md-12"><h4 class="py-3">Add New Post</h4></div>
        <div class="col-md-6">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('message'))
                <div class="alert alert-{{session('type')}} text-center">{{session('message')}}</div>
            @endif
            <form action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Post</h5>
                    </div>
                    <div class="card-body">
                        <div class="my-3">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-3">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Post title">
                        </div>
                        <div class="my-3">
                            <label for="desc">Description</label>
                            <textarea name="desc" id="desc" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="my-3">
                            <label for="status">Status</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="active" name="status" id="active">
                                <label class="form-check-label" for="active">
                                    Active
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="inactive" name="status" id="inactive">
                                <label class="form-check-label" for="inactive">
                                    Inactive
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-outline-success">Add Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
