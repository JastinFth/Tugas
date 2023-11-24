<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ url('bootstrap/css/bootstrap.min.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-size: 30px;
            margin-right: 110px;
        }
        .footer {
            background-color: #161020;
            font-family: 'Poppins', sans-serif;
        }
        .title {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            font-weight: 600;
        }
        .table {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-theme fs--1 shadow" style="letter-spacing: 1px; background-color: rgba(11, 23, 39, 0.58);">
        <div class="container">
          <a class="navbar-brand" href="#">TravelPedia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto p-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('destinations-data') }}">Destination</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <h1 class="title">@yield("title")</h1>
        @if(session()->has("pesan"))
        <div class="alert alert-info">
            {{ session("pesan")}}
        </div>
        @endif
    </div>
    @yield("content")
    <script src="{{ url('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>