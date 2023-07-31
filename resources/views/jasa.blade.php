<?php include(app_path().'\http\header.blade.php')?>
<body>
    <!-- Navbar -->
    <?php include(app_path().'\http\navbar.blade.php')?>
    <!-- End Navbar -->

    <!-- Start Services Section -->
    <section class="p-5" id="services">
        <div class="container py-5">
            <div class="row text-center g-4">
                <!-- Web Design -->
                <div class="col-md">
                    <div class="card bg-dark text-light p-5 m-3">
                        <img src="img/web-design.jpg" width="1000" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h3 class="card-title mt-3 mb-3">
                                Web Design
                            </h3>
                            <p class="card-text">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="btn btn-primary" id="btn-read-1">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="col-md">
                    <div class="card bg-dark text-light p-5 m-3">
                        <img src="img/web-development.jpg" width="1000" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h3 class="card-title mt-3 mb-3">
                                Web Development
                            </h3>
                            <p class="card-text">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="btn btn-primary" id="btn-read-1">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Software Design -->
                <div class="col-md">
                    <div class="card bg-dark text-light p-5 m-3">
                        <img src="img/software design.jpg" width="2000" class="card-img-top" alt="">
                        <div class="card-body text-center">
                            <h3 class="card-title mt-3 mb-3">
                                Software Design
                            </h3>
                            <p class="card-text">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            </p>
                            <a href="#" class="btn btn-primary" id="btn-read-1">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>
    <!-- End Services Section -->

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