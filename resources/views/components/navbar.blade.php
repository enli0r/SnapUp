<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}"><span>s</span>nap <span>u</span>p</a>
    <button class="navbar-toggler">
      <span class="navbar-toggler-icon"></span>
    </button>

    <button type="button" class="close close-toggler" aria-label="Close">
      <img class="close-icon" src="../public/images/cancel.png" alt="">
    </button>
      

    <div class="sidebar" id="sidebar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about')}}" href="#">About</a>
        </li>

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
      </div>
    </div>
  </nav>
