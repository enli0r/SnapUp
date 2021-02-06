<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}"><span>s</span>nap <span>u</span>p</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}" href="#">About</a>
          </li>
        </ul>
          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav ml-auto">

              @auth
                <li class="nav-item py-0">
                  <a class="nav-link py-0" href="{{route('login')}}">{{Auth::user()->name}}</a>
                </li>
                
                <form action="{{route('logout')}}" method="POST">
                    @csrf

                    <button type="submit" class="btn nav-link py-0">Logout</button>
                </form>


              @endauth
              
              @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
              @endguest

            </ul>
          </div>
      </div>
    </div>
  </nav>
