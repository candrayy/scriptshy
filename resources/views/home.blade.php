<!doctype html>
<html lang="en">
  <head>
  	<title>Fidi Scheduling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(assets/images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(assets/images/icon.png);"></div>
	  				<h3>Fidi IT Kreatif</h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{ route('beranda') }}"><span class="fa fa-home mr-3"></span> Beranda</a>
          </li>
          <li>
            <a href="{{ route('data-schedule') }}"><span class="fa fa-calendar mr-3"></span> Schedule</a>
          </li>
          @if(auth()->user()->level=="admin")
          <li>
            <a href="{{ route('data-jenis-konten') }}"><span class="fa fa-camera mr-3"></span> Jenis Konten</a>
          </li>
          @endif
          @if(auth()->user()->level=="admin")
          <li>
            <a href="{{ route('data-platform') }}"><span class="fa fa-share-square mr-3"></span> Platform</a>
          </li>
          @endif
          @if(auth()->user()->level=="admin")
          <li>
            <a href="{{ route('data-hashtag') }}"><span class="fa fa-hashtag mr-3"></span> Hashtag</a>
          </li>
          @endif
          @if(auth()->user()->level=="admin")
          <li>
            <a href="{{ route('data-laporan') }}"><span class="fa fa-file mr-3"></span> Laporan</a>
          </li>
          @endif
          <li>
            <a href="{{ route('logout') }}"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <br>
        <div class="shadow p-3 mb-1 bg-white rounded">
          <h1 class="mb-4">Dashboard</h1>
          <div class="row">
          <!-- Card Sosmed Instagram-->
            <div class="col-sm-6 mb-4 text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Instagram</h5>
              <p class="card-text">Berikut akun resmi instagram PT. Fidi IT Kreatif</p>
              <a href="https://www.instagram.com/fidiitkreatif/?hl=id" class="btn btn-primary rounded-pill">Klik Disini</a>
            </div>
          </div>
          <!-- Card Sosmed Instagram-->
          <!-- Card Sosmed Facebook-->
          <div class="col-sm-6 mb-4 text-center" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Facebook</h5>
              <p class="card-text">Berikut akun resmi facebook PT. Fidi IT Kreatif</p>
              <a href="https://www.facebook.com/Fidi-Inovasi-Teknologi-Kreatif-102015534556970/" class="btn btn-primary rounded-pill">Klik Disini</a>
            </div>
          </div>
          <!-- Card Sosmed Facebook-->
          </div>
        </div>
      </div>
		</div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>