

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="/" class="{{ Request::is('/') ? 'active' : '' }}" >Todo List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {{ Request::is('/todo/create') ? 'active' :'' }}" href="/todo/create"> Create <span class="sr-only">(current)</span></a>

      </div>
    </div>
  </nav>
