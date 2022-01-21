<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Its Me | {{ $title}}</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" ><h3>It's Me</h3></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{($active === "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "about") ? 'active' : '' }}" aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "posts") ? 'active' : '' }}" aria-current="page" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === "categories") ? 'active' : '' }}" aria-current="page" href="/categories">Categories</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
<div class="container mt-4">
    @yield('container')
</div>

</body>
</html>
