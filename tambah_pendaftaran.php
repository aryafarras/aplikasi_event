<!DOCTYPE html>
<html>
<head>
	<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="pendaftaran.php">Pendaftaran</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Event <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index2.html">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled"></a>
      </li>
    </ul>
   
  </div>
</nav>
<br>
<br>
	<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
		<form action="proses_tambah_pendaftaran.php" method="POST">
	<section class="h-100 h-custom" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSApMCBAD53GwUf5tkWlbK8l7VjrZrEDyiwzw&usqp=CAU">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://static.vecteezy.com/system/resources/previews/012/919/200/original/hari-santri-nasional-or-indonesian-national-muslim-student-day-with-islamic-students-and-decoration-vector.jpg"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
<div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">SIGN UP</h3>

            <form class="px-md-2">

              <div class="form-outline mb-4">
                <input type="text" name="nama" class="form-control" />
                <label class="form-label" for="form3Example1q">Nama : </label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" name="email" />
                    <label for="exampleDatepicker1" class="form-label">Email : </label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                	<div class="form-outline datepicker">
                		<input type="date" name="tanggal_lahir" class="form-control">
                		<label for="exampleDatepicker1" class="form-label">Tanggal Lahir : </label>
                </div>
            </div>
               <div class="col-md-6 mb-4">
                	<div class="form-outline datepicker">
                		<textarea name="alamat" rows="5" cols="5" class="form-control"></textarea>
                		<label for="exampleDatepicker1" class="form-label">alamat : </label>
              </div>
               </div>
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-1">register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <center><div>copyrihgt &copy; 2023|SMK Luqman AL Hakim</div></center>
</section>
</body>
</html>