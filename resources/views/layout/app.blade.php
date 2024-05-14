<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
  <style>

    td.action-buttons form{
        float:right;
    }
    .card-img, .card-img-bottom, .card-img-top {
        width: 100%;
        height: 201px;
        object-fit: contain;
        border: 3px solid #80808045;
    }
    /* .title-posts h2 {
        text-transform: uppercase;
    } */
    </style>
</head>

<body>
  <div class="container">
    <div class="row my-2">
      <!-- <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto"> -->
        <div class="title-posts">
          <h2 class="text-primary">@yield('heading')</h2>
        </div>
        <div class="justify-content-end">
          <a href="@yield('link')" class="btn btn-outline-primary">@yield('link_text')</a>
        </div>

      <!-- </div> -->
    </div>
    <hr class="my-2">

    @yield('content')

  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
</body>

</html>