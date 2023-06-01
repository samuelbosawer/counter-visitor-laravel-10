<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body class="bg-success">
    <div class="container">
        <div class="row">
            <div class="col text-center p-5 text-white">
                <p class="display-1 fw-bold">Post/show</p>
            </div>
        </div>
        <div class="row mt-5 bg-secondary rounded shadow">
            <div class="col  p-5 text-white">
              <h3 class="fw-bold"> {{$post->title}}</h3>
              <p class="mt-3"> {{$post->desc}}</p>
            </div>
        </div>

        <div class="row  mt-5 mb-5 ">
            <div class="col-6  p-5 text-white bg-secondary rounded shadow">
              <h3 class="fw-bold"> Visitor </h3>
              <div class="">

                <p class="mt-3"> Pengujung hari ini  <span class=""> {{$hari}} </span></p>
                <p class="mt-3"> Pengujung bulan ini  <span class=""> {{$hari}} </span></p>
                <p class="mt-3"> Pengujung total semua  <span class=""> {{$total}} </span></p>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
