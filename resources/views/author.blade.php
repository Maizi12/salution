<?php include(app_path().'\http\header.blade.php')?>

<body>
    <!-- Navbar -->
    <?php include(app_path().'\http\navbar.blade.php')?>

    <!-- End Navbar -->

    <!-- Start Contact Section -->
    <section class="p-5" id="bg-author">
        <div class="container py-5">
            <h2 class="text-center text-white mb-3" id="title-contact">Our Team</h2>

            <p class="lead text-center text-white mb-5">
              Hubungi kami dan temukan bagaimana <strong id="desc-author">SaluTion</strong> dapat membawa perubahan positif bagi bisnis Anda.
            </p>

            <div class="row g-4">
            @foreach ($team_profile as $p)
              
              <!-- Profiles -->
              <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                  <div class="card-body text-center p-5">
                    <img src="{{$p->Foto_tim}}" alt="" class="rounded-circle mb-3" width="100" height="{{$p->height}}" id="{{$p->id_name}}">
                    <h4 class="card-title mb-3"><strong>{{$p->Nama_tim}}</strong></h4>
                    <p class="card-text">
                      {{$p->Role}}
                    </p>
                    <a href="#"><i class="bi bi-facebook text-dark mx-1 lead"></i></a>
                    <a href="#"><i class="bi bi-twitter text-dark mx-1 lead"></i></a>
                    <a href="#"><i class="bi bi-linkedin text-dark mx-1 lead"></i></a>
                    <a href="{{$p->IG_profile}}"><i class="bi bi-instagram text-dark mx-1 lead"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>

        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Footer Section -->
    <?php include(app_path().'\http\footer-section.html')?>
    
    <!-- End Footer Section -->

    <!-- Start Footer Bottom -->
    <?php include(app_path().'\http\footer-bottom.html')?>

    <!-- End Footer Bottom -->


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>