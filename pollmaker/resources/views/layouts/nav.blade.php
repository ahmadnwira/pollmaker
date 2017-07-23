<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Awesome poll-maker</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
    </ul>

	<ul class="nav navbar-nav navbar-right">
      <li>
      	<a>Wellcome, 
      		@if(Auth::check())
      			{{ ucwords(Auth::user()->name) }}
     		@endif
		</a>

      </li>
    </ul>
  </div>
</nav>