<!DOCTYPE html>
<html>
<head>
	<title>pendaftaran</title>
	<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form action="proses_pendaftran.php">
<section class="h-100 h-custom" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-Zbw-YO1DxVdmKk83fKjeVn_rvF4J96d_Zg&usqp=CAU);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://img.freepik.com/free-vector/modern-music-event-poster-template_1361-1292.jpg?w=2000"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">sign up</h3>

            <form class="px-md-2">

              <div class="form-outline mb-4">
                <input type="text" name="nama" class="form-control" />
                <label class="form-label" for="form3Example1q">nama</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" name="email" />
                    <label for="exampleDatepicker1" class="form-label">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                	<div class="form-outline datepicker">
                		<input type="date" name="tanggal_lahir" class="form-control">
                		<label for="exampleDatepicker1" class="form-label">Tanggal Lahir</label>
                </div>
            </div>
               <div class="col-md-6 mb-4">
                	<div class="form-outline datepicker">
                		<textarea name="alamat" rows="5" cols="5" class="form-control"></textarea>
                		<label for="exampleDatepicker1" class="form-label">alamat</label>
              </div>
               </div>
              </div>

              <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>