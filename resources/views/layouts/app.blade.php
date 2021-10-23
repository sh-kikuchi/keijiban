<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"><!--トークン-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>掲示板</title>
</head>
<body>
  <header>
    <h1 id="main-title">guzzle board</h1>
  </header>
  <main class="py-4 mb-5" style="height: 100vh; width: 100%;">
      @yield('content')
  </main>
<footer class="bg-dark u-content-space-top pb-4" role="footer" style="width: 100%;  left: 0; bottom: 0px; margin-top: 20px;">
    <div class="container-fluid">
      <div class="px-md-3">
        <!-- Social Sharing -->
        <div class="text-center">
        <h3 id="footer-title" class="h5 font-weight-light mb-4">Thanx for using guzzle. We are grad.</h3>
          <div class="d-flex justify-content-center">
          </div>
        </div>
        <!-- End Social Sharing -->
        <small id="small-title">&copy; 2021 <a class="text-white" href="https://htmlstream.com">guzzle</a>. </small>
      </div>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
