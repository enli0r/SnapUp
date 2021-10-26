<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a href="" class="navbar-brand text-light">Administrator Page</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarsExample07">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item py-0">
                    <a class="nav-link py-0 text-light" href="">Administrator</a>
                </li>
                
                <li class="nav-item py-0">
                    <a class="nav-link py-0 text-light" href="{{route('admin.logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>