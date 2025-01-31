<div >
    <nav class="navbar bg-body-tertiary ">
      <div class="container-fluid">
        <a class="navbar-brand" href="/posts">Blog Rheyno</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/posts">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('posts/create') }}">Make Posts</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu">
                  @if (Auth::check())
                    <li><a class="dropdown-item" href=" {{ url('logout') }}">LogOut</a></li>
                @else
                      <hr class="dropdown-divider"> 
                    <li><a class="dropdown-item" href="{{ url('register') }}">Register</a></li>
                    <li><a class="dropdown-item" href="{{ url('login') }}">Login</a></li>
                @endif
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

</div>