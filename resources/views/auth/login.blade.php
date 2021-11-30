<x-layout>
    <div class="d-flex container justify-content-center my-2 flex-column">

        @if (session('status'))
            <div class="alert alert-danger col-6 align-self-center py-3">
                {{session('status')}}
            </div>
        @endif

        <div class="col-6 bg-light border rounded-lg bg-light text-secondary p-5 align-self-center">
            <h3 class="mb-3 text-center">Login</h3>
            <form action="{{route('login')}}" method="post">
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

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
</x-layout>