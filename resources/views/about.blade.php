<?php include(app_path().'\http\header.blade.php')?>

<body>
    <!-- Navbar -->
    <?php include(app_path().'\http\navbar.blade.php')?>
    
    <!-- End Navbar -->

    <!-- Start About Section -->
    <section class="p-5" id="about">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <a href="#"><img src="img/about.svg" class="img-fluid" alt=""></a>
                </div>
                <div class="col-md">
                    <h2 class="about">Kenapa Memilih <span class="text-warning" id="about-us">SaluTion</span>?</h2>
                    <p id="about-paragraf"><span class="text-warning" id="about-text">SoluTion</span> hadir untuk memudahkan perjalanan teknologi bisnis Anda. Dengan solusi terbaik yang kami tawarkan, kami bertekad untuk membantu Anda mengidentifikasi solusi terbaik yang sesuai dengan anggaran dan tujuan bisnis anda</p>

                    <p id="about-paragraf">Bersama-sama, mari kita jadikan bisnis Anda sukses di era digital ini!</p>
                    <a href="#" class="btn btn-dark mt-3"><i class="bi bi-chevron-right"></i> Read More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

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