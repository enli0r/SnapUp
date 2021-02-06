@extends('layouts.app')

@section('content')
    <div class="d-flex container justify-content-center my-2 flex-column">

        @if (session('status'))
            <div class="alert alert-danger col-6 align-self-center py-3">
                {{session('status')}}
            </div>
        @endif

        <div class="col-6 bg-light border rounded-lg p-5 align-self-center bg-dark text-white">
            <h3 class="mb-3 text-center">ADMIN LOGIN</h3>
            <form action="{{route('admin.login.post')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control  @error('email') border border-danger @enderror" id="email" name="email" placeholder="Enter Email" value="{{old('email')}}">

                    @error('email')
                    <div class="mb-2 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control  @error('password') border border-danger @enderror" id="password" name="password" placeholder="Password">

                    @error('password')
                    <div class="mb-2 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </div>

                <button type="submit" class="btn btn-danger w-100">Login</button>
            </form>
        </div>
    </div>
@endsection