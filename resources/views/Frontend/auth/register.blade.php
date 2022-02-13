@extends('Frontend.include.layouts')
@section('title')
User Registration
@endsection
@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h5>User Registration Form</h5>
        </div>
        <div class="card-body">
            <form action="{{route('user.registration')}}" method="POST" enctype="multipart/form-data">
                @csrf

                @if(session('message'))
                    <div class="alert alert-{{session('type')}} text-center">{{session('message')}}</div>
                @endif

                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" placeholder="Enter Your Name" id="name">
                    @error('name') <span class="text-danger fst-italic">{{$message}}</span> @enderror
                </div>
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
                <div class="mb-3">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Your Confirm Password" id="cpassword">
                </div>
                <div class="mb-3">
                    <label for="photo">Profile Photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo"  id="photo">
                    @error('photo') <span class="text-danger fst-italic">{{$message}}</span> @enderror
                </div>
                <div class="mb-3 text-end">
                    <button type="submit" class="btn btn-primary">Registration</button>
                </div>
            </form>
        </div>
    </div>
@endsection
