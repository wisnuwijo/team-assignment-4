<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ourtube</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="padding:20px;">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-1"></div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                <a href="{{ url('/upload') }}" class="btn btn-md btn-primary">Upload Video</a>
                <br/>
                <br/>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if (count($videos) > 0)
                    <h1>Daftar Video</h1>
                @else
                    <h1>Belum ada video, klik upload untuk menambahkan</h1>
                @endif

                @foreach($videos as $v)
                    <a href="{{ url('video', $v->id) }}">
                        <h4>{{ $v->name }}</h4>
                    </a>
                    <hr/>
                @endforeach
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-1"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>