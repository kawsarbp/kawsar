@extends('admin.include.layouts')
@section('title')
    View
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12"><h4 class="py-3">Single Categories</h4></div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{$category->name}}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{$category->slug}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$category->status}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
