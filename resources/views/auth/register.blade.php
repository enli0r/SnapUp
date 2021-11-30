<x-layout>

    <div class="d-flex container justify-content-center my-2">
        <div class="col-6 bg-light border rounded-lg bg-light text-secondary p-5">
            <h3 class="mb-3 text-center">Register</h3>

            <form action="{{route('register')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') border border-danger @enderror" id="name" name="name"placeholder="Your Name" value="{{old('name')}}">

                    @error('name')
                    <div class="mb-2 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control  @error('username') border border-danger @enderror" id="username" name="username" placeholder="Username" value="{{old('username')}}">

                    @error('username')
                    <div class="mb-2 text-danger">
                        {{$message}}
                    </div>
                    @enderror
                </div>

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
                    <label for="name">Password again</label>
                    <input type="password" class="form-control" id="name" name="password_confirmation" placeholder="Repeat password">
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
</x-layout>