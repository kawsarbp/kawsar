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
                    <td>{{$post->title}}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$post->desc}}</td>
                </tr>
                <tr>
                    <th>Slug</th>
                    <td>{{$post->slug}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$post->status}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
