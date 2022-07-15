<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">kelompok 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        @auth
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-light text-dangeri" >logout</button>
          </form>
        @else
          <a href="/login" class="nav-link {{ ($title === "login") ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        @endauth
      </li>

      </ul>
    </div>
  </div>
</nav>