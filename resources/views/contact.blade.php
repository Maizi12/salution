<?php include(app_path().'\http\header.blade.php')?>

<body>

  <!-- Navbar -->
      <?php include(app_path().'\http\navbar.blade.php')?>

<!-- End Navbar -->

    <!-- Contact Section Start -->
    <div class="container" id="ct-contact">
        <div class="row mt-5 mb-5" id="rw-contact">
            <div class="col-md-7" id="cl-contact7">
              <form action="contact/store" method="post">
              {{ csrf_field()}}
              <h4><strong>SaluTion</strong></h4><hr>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" name="Nama">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E - mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email" name="Email">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Contact No.</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter your number" name="Phone">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-dark">Send</button>
              </form>
            </div>
            
            <div class="col-md-5" id="cl-contact5">
              <h4><strong>Contact Us</strong></h4><hr>
              <div class="mt-5">
                  <div class="d-flex">
                      <i class="bi bi-geo-alt-fill"></i>
                      <p>Location : South Tangerang, Indonesia</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-telephone-fill"></i>
                    <p>Contact : (+62) 813 8567 4562</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-envelope-fill"></i>
                    <p>Email : info@SoluTion.com</p>
                  </div><hr>
                  <div class="d-flex">
                    <i class="bi bi-browser-chrome"></i>
                    <p>Web : www.salution.com</p>
                  </div><hr>
              </div>
            </div>
        </div>
    </div>


    <!-- <section id="contact" class="contact">
        <h2>Kontak <span>SaluTion</span></h2>
        <p>Apabila Anda memiliki pertanyaan atau ingin berhubungan dengan kami,
          <br>Silakan lengkapi form data anda di bawah ini</p>

        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126904.29865035765!2d106.62591057376386!3d-6.295325956111825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fab10419c095%3A0x8706481c2c4aafe4!2sTangerang%20Selatan%2C%20Kota%20Tangerang%20Selatan%2C%20Banten!5e0!3m2!1sid!2sid!4v1682516803723!5m2!1sid!2sid" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        <form action="">
            <div class="input-group">
                <i data-feather="user" class="icon"></i>
                <input type="text" placeholder="Nama">
            </div>
            <div class="input-group">
                <i data-feather="mail" class="icon"></i>
                <input type="text" placeholder="E-mail">
            </div>
            <div class="input-group">
                <i data-feather="phone" class="icon"></i>
                <input type="text" placeholder="No. Hp">
            </div>
            <button type="submit" class="btn">Hubungi kami</button>
        </form>

        </div>
    </section> -->
    <!-- Contact Section End -->

    <!-- Feather Icons -->
    <!-- <script>
        feather.replace()
    </script> -->

    <!-- Start Footer Section -->
    <footer id="contact" class="page-footer p-3 text-md-center fixed-bottom">
      <div class="container">
        <p class="mb-0">
          Copyright &copy; 2023 <strong>SaluTion</strong>
        </p>
        <!-- <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-up-circle h1 mb-5" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
          </svg>
        </a> -->
      </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Start Footer Bottom -->
    <!-- <footer class="p-3 text-black text-center position-relative" id="bg-footer">
      <div class="container">
        <p class="mb-0">
          Copyright &copy; 2023 <strong>SaluTion</strong>
        </p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-up-circle h1 mb-5" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
          </svg>
        </a>
      </div>
    </footer> -->
    <!-- End Footer Bottom -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>