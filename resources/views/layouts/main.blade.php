<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">   
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <div class="row" >
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('post.index')}}">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('about.index')}}">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  
    </div>
    @yield('content')
    </div>
</body>
</html>