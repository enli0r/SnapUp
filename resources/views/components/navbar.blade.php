<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}"><span>s</span>nap <span>u</span>p</a>


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

      <span class="navbar-toggler-icon"></span>
      
  
      <img class="close-icon" src="https://i.ibb.co/6RDhB9Q/cancel.png" alt="hehe">
    </div>
  </nav>
