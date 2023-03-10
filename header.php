<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <?php
  $admin = $_SESSION['loggedin'] == true;


  echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Kanha LogIn System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';


  if (!$admin) {
    echo '
      <li class="nav-item">
        <a class="nav-link" href="./signup.php">Signup</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="./login.php">SignIn</a>
      </li>';
  }

  if ($admin) {
    echo '
 	<li class="nav-item">
        <a class="nav-link" href="./logout.php">Logout</a>
      </li>';
  }


  echo ' </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>   ';
  ?>