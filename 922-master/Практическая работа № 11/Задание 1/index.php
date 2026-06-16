<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

<header>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
  <div class="container-fluid p-3 fs-4">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" p-3 fs-4>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</header>

<section>
    <form action="" method="post" class="w-50 mx-auto">
         <div class="mb-3 min-height: 80vh container py-3" >
    <label for="exampleInputEmail1" class="form-label">Имя</label>
    <input type="email" class="form-control form-control rounded-pill shadow-sm px-3" id="exampleInputEmail1" aria-describedby="name" name="name">
    <div id="emailHelp" class="form-text">Input your name.</div>
  </div>

 <div class="mb-3 min-height: 80vh container py-3">
    <label for="exampleInputEmail1" class="form-label">Логин</label>
    <input type="email" class="form-control form-control rounded-pill shadow-sm px-3" id="exampleInputEmail1" aria-describedby="login" name="login">
    <div id="emailHelp" class="form-text">Whats your login?</div>
  </div>

  <div class="mb-3 min-height: 80vh container py-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control form-control rounded-pill shadow-sm px-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3 min-height: 80vh container py-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control form-control rounded-pill shadow-sm px-3" id="exampleInputPassword1" name="rassword">
  </div>

  <div class="mb-3 form-check min-height: 80vh container py-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary mb-3 form-check min-height: 80vh container py-3">Submit</button>
</form>
</section>

<footer>
</footer>

<?php

$connect= new mysqli("localhost", "root", "12345678", "users");
$sql= sprintf("INSERT INTO`users`(`id_user`, `name`, `login`, `email`, `password`)
 VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]'",

$_POST['id_user'],
$_POST['name'],
$_POST['login'],
$_POST['email'],
$_POST['password']
);  
$result=$conn->query($sql);
?>
</body>
</html>