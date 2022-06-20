<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="assets/images/icon.png">
  	<title>Edit Data Schedule</title>
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
	  				<div class="img" src="{!! asset('assets/images/icon.png') !!}" style="background-image: url('{{ asset('assets/images/icon.png')}}');"></div>
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
            <h1 class="mb-4">Ubah Data Schedule</h1>
          <form action="{{ route('update-data-schedule',$editSchedule->id) }}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="jns_konten_id" class="form-label">Jenis Konten</label>
                  <select class="form-control" name="jns_konten_id" id="jns_konten_id">
                    <option value="{{ $editSchedule->jns_konten_id }}">{{ $editSchedule->jns_konten->jns_konten }}</option>
                    @foreach($jnsk as $item)
                    <option value="{{ $item->id }}">{{ $item->jns_konten }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="platform_id" class="form-label">Platform</label>
                  <select class="form-control" name="platform_id" id="platform_id">
                  <option value="{{ $editSchedule->platform_id }}">{{ $editSchedule->platform->platform }}</option>
                    @foreach($plat as $item)
                    <option value="{{ $item->id }}">{{ $item->platform }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="hashtag_id" class="form-label">Hashtag</label>
                  <select class="form-control" name="hashtag_id" id="hashtag_id">
                  <option value="{{ $editSchedule->hashtag_id }}">{{ $editSchedule->hashtag->hashtag }}</option>
                    @foreach($hash as $item)
                    <option value="{{ $item->id }}">{{ $item->hashtag }}</option>
                    @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="judul_konten" class="form-label">Judul Konten</label>
                  <input type="text" id="judul_konten" name="judul_konten" value="{{ $editSchedule->judul_konten }}" class="form-control" placeholder="Masukan Judul Konten" required>
              </div>
              <div class="form-group">
                  <label for="caption" class="form-label">Caption</label>
                  <textarea id="caption" name="caption" class="form-control" required>{{ $editSchedule->caption }}</textarea>
              </div>
              <div class="form-group">
                  <label for="created_at" class="form-label">Created At</label>
                  <input type="datetime-local" id="created_at" name="created_at" value="{{ $editSchedule->created_at }}" class="form-control" min="1990-01-01T00:00" max="2050-01-01T00:00" placeholder="dd-mm-yyyy" required>
              </div>
              <div class="form-group">
                  <label for="updated_at" class="form-label">Updated At</label>
                  <input type="datetime-local" id="updated_at" name="updated_at" value="{{ $editSchedule->updated_at }}" class="form-control" min="1990-01-01T00:00" max="2050-01-01T00:00" placeholder="dd-mm-yyyy" required>
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