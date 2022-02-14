@extends('admin.include.layouts')
@section('title')
    Add Category
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12"><h4 class="py-3">Add New Categories</h4></div>
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
            <form action="{{route('admin.category.store')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Categories</h5>
                    </div>
                    <div class="card-body">
                        <div class="my-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name" value="{{old('name')}}">
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
