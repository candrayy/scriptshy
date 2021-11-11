<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}">
  	<title>Edit Data Jenis Konten</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url('{{ asset('assets/images/bg_1.jpg')}}');">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url('{{ asset('assets/images/icon.png')}}');"></div>
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
          <li>
            <a href="{{ route('data-jenis-konten') }}"><span class="fa fa-camera mr-3"></span> Jenis Konten</a>
          </li>
          <li>
            <a href="{{ route('data-platform') }}"><span class="fa fa-share-square mr-3"></span> Platform</a>
          </li>
          <li>
            <a href="{{ route('data-hashtag') }}"><span class="fa fa-hashtag mr-3"></span> Hashtag</a>
          </li>
          <li>
            <a href="{{ route('data-laporan') }}"><span class="fa fa-file mr-3"></span> Laporan</a>
          </li>
          <li>
            <a href="{{ route('logout') }}"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <br>
        <div class="shadow p-3 mb-1 bg-white rounded">
            <h1 class="mb-4">Ubah Data Jenis Konten</h1>
          <form action="{{ route('update-data-jenis-konten',$editJnsKonten->id) }}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                  <label for="kd_jns_konten" clas="form-label">Kode Jenis Konten</label>
                  <input type="text" id="kd_jns_konten" name="kd_jns_konten" value="{{$editJnsKonten->kd_jns_konten}}" class="form-control" placeholder="Masukan Kode Jenis Konten" required>
              </div>
              <div class="form-group">
                  <label for="jns_konten" clas="form-label">Nama Jenis Konten</label>
                  <input type="text" id="jns_konten" name="jns_konten" value="{{$editJnsKonten->jns_konten}}" class="form-control" placeholder="Masukan Nama Jenis Konten" required>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn rounded-pill btn-submit" onclick="return confirm('Yakin Data Mau Diubah?')">Ubah</button>
              </div>
          </form>
        </div>
      </div>
		</div>

    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/js/popper.js') !!}"></script>
    <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/js/main.js') !!}"></script>
  </body>
</html>