@extends('Frontend.include.layouts')
@section('title')
    User Login
@endsection
@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h5>User Login Form</h5>
        </div>
        <div class="card-body">
            <form action="{{route('user.login')}}" method="POST"    >
                @csrf
                @if(session('message'))
                    <div class="alert alert-{{session('type')}} text-center">{{session('message')}}</div>
                @endif
                <div class="mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" name="email" placeholder="Enter Your e-mail Address" id="email">
                    @error('email') <span class="text-danger fst-italic">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" id="password">
                    @error('password') <span class="text-danger fst-italic">{{$message}}</span> @enderror
                </div>
                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
