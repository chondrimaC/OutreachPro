<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="margin-bottom:1em;">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Outreach Pro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('sites')}}">Site</a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{url('sites/create')}}"> Create Site <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
