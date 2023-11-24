@extends("template")

@section("title")

@endsection

@section("content")
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        h5 {
            font-size: 25px;
            font-family: 'Poppins', sans-serif;
            font-weight: bolder;
            background-color: rgba(11, 23, 39, 0.58);
            padding: 5px;
            border-radius: 40px;
            border-width: 700px;
        }
        #design {
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            color: white;
        }
        .card {
            position: relative;
            overflow: hidden;
            border-radius: 25px;
        }
        .img-title {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(5, 5, 5, 0.7);
            top: 300px;
            transition: all 0.5s ease-in;
        }
        .img-title p, h3 {
            line-height: 20px;
            position: relative;
            top: 100px;
            text-shadow: rgba(5, 5, 5, 0.5);
        }
        .card:hover .img-title {
            top: 0;
            transition: all 0.5s ease-out;
        }
        .card img {
            transform: scale(1);
            transition: all 0.3s ease-out;
        }
        .card:hover img {
            transform: scale(1.1);
            transition: all 0.3s ease-in;
        }
        .img {
            height: 700px;
            margin-top: 0px;
        }
        .carousel-inner {
            padding-bottom: 1rem;
        }
        .d-block {
            height: 750px;
        }
        .Desu {
            font-weight: 550;
        }
    </style>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 0"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 1"></button>                
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 2"></button>                
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('/assets/Prambanan2.jpg') }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5><i>PRAMBANAN</i></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('/assets/Raja Ampat Indonesia.jpg') }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5><i>RAJA AMPAT</i></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('/assets/Sunrise and Walking Up Mount Bromo.jpg') }}" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <h5><i>BROMO</i></h5>
                    </div>
                </div>
            </div>
        </div>
    <section id="design"><br>
        <div class="container p-5">
          <div class="row text-center mb-3">
            <div class="col mb-3 text-dark">
              <h2 class="Desu">Destinasi Pilihan</h2>
              <br>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ url('assets/Prambanan2.jpg') }}" alt="Desain 1">
                    <div class="img-title text-white">
                      <h3>Destination Type 1</h3>
                      <p>PRAMBANAN TEMPLE</p>
                    </div>
                  </div> 
              </div>
              <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ url('assets/Goa.jpg') }}" alt="Desain 2">
                    <div class="img-title text-white">
                      <h3>Destination Type 2</h3>
                      <p>SUNYARAGI CAVE</p>
                    </div>
                  </div> 
              </div>
              <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ url('assets/Raja Ampat Indonesia.jpg') }}" alt="Desain 3">
                    <div class="img-title text-white">
                      <h3>Destination Type 3</h3>
                      <p>RAJA AMPAT</p>
                    </div>
                  </div> 
              </div>
              <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ url('assets/Toba.jpg') }}" alt="Desain 4">
                    <div class="img-title text-white">
                      <h3>Destination Type 4</h3>
                      <p>LAKE TOBA</p>
                    </div>
                  </div> 
              </div>   
              <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ url('assets/Sunrise and Walking Up Mount Bromo.jpg') }}" alt="Desain 4">
                    <div class="img-title text-white">
                      <h3>Destination Type 5</h3>
                      <p>BROMO MOUNTAIN</p>
                    </div>
                  </div> 
              </div>   
            </div>                   
          </div>
        </div>
      </section>
      <footer class="footer bg-900 py-5 text-white fixed">
        <div class="container">
          <div class="row">
            <div class="col text-center">
                <p>&copy; 2023 Your Company. All rights reserved.</p>
                <p class="pt-4 mb-3 mb-0 text-700">Powered by <a class="text-700 text-decoration-none" href="#!"><span class="border-bottom border-800 border-2x" style="line-height:10px;margin-bottom:10px"> M.N.F</span></a></p>
            </div>
          </div>
        </div><!-- end of .container-->
      </footer>
@endsection
