<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="padding:20px;">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-1"></div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                @if (isset($video))
                    <h4>{{ $video->name }}</h4>
                    <hr/>
                    <video width="100%" height="240" controls>
                        <source src="{{ url('storage/' . $video->link) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <br/>
                    <a href="{{ url()->previous() }}">Kembali</a>
                @else
                    <h1>Video tidak ditemukan</h1>
                @endif
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-1"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>