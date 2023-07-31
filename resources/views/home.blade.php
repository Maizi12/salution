<?php include(app_path().'\http\header.blade.php')?>

<body>

    <!-- Navbar -->
    <?php include(app_path().'\http\navbar.blade.php')?>
    
    <!-- End Navbar -->

    <!-- Start Hero Section -->
    <section class="text-light p-5 text-center text-sm-start bg-home" id="home">
        <div class="container py-5">
            <div class="d-sm-flex align-items-center justify-content-between py-5">
                <div>
                    <h1>Selamat datang di <span class="text-warning" id="span-navbar">SaluTion!</span></h1>
                    <h3 class="my-4">Partner Teknologi Bisnis Anda</h3>
                    <p class="lead my-4" id="home-paragraf">
                      Sebagai penyedia jasa IT yang berpengalaman, 
                      <br><span class="text-warning" id="text-marketing">SaluTion</span> menawarkan solusi terkini & inovatif yang dapat meningkatkan -
                      <br> efesiensi & produktivitas bisnis Anda.
                    </p>
                    <button class="btn btn-primary bg-dark btn-lg" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Hubungi kami</button>
                </div>
                <a href="#">
                    <img src="img/technology-fix.svg" class="img-fluid" width="500">
                </a>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Newsletter Section -->
    <section class="bg-ns text-dark p-5">
      <div class="container py-5">
          <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="mb-3 mb-md-0 h3-discover">
              Sign up for Newsletter
            </h3>
            <div class="input-group new-input">
                <input type="text" class="form-control" placeholder="Enter Your E-mail">
            <button class="btn btn-dark btn-lg">Discover</button>
          </div>
          </div>
      </div>
    </section>
    <!-- End Newsletter Section -->

    <!-- F & Q Section -->
    <section class="p-5" id="questions">
      <div class="container py-5">
        <h2 class="text-center mb-4" id="question-title">Pertanyaan yang sering diajukan ( FAQ )</h2>

        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="faq-1">
                Apa jenis layanan IT yang ditawarkan oleh<span class="text-info mx-1" id="faq-2"> SaluTion </span>?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>SaluTion</strong> menyediakan berbagai layanan IT, termasuk pengembangan perangkat lunak kustom, desain dan pengembangan situs web, solusi e-commerce, <br>integrasi sistem, keamanan jaringan dan layanan manajemen infrastruktur
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="faq-3">
                Berapa biaya atau estimasi harga untuk layanan tertentu yang ditawarkan?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Biaya layanan dapat bervariasi tergantung pada kebutuhan khusus Anda. <span class="text-info" id="faq-4">SaluTion </span> menawarkan estimasi harga yang transparan setelah mendiskusikan kebutuhan Anda secara rinci. <br>Untuk informasi lebih lanjut, silakan hubungi <span class="text-info" id="faq-4">SaluTion </span> untuk mendapatkan penawaran.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="faq-5">
                Bagaimana cara memulai kerjasama dengan <span class="text-info mx-1" id="faq-6">SaluTion</span>?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Memulai kerjasama dengan kami sangat mudah. Anda dapat menghubungi kami melalui formulir kontak di situs web <span class="text-info" id="faq-6">SaluTion</span> atau mengirimkan email langsung.<br> Tim <span class="text-info" id="faq-6">SoluTion</span> akan segera menghubungi Anda untuk mendiskusikan kebutuhan Anda dan memulai proses kerjasama.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="faq-7">
                Apakah <span class="text-info mx-1" id="faq-8"> SaluTion </span> memiliki spesialisasi dalam bidang tertentu?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Ya, <span class="text-info" id="faq-8">SaluTion</span> memiliki tim ahli dengan spesialisasi dalam beberapa bidang teknologi, termasuk pengembangan aplikasi mobile, keamanan siber,<br> pengelolaan basis data, dan integrasi sistem perusahaan.
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End F & Q Section -->

    <!-- Start Footer Section -->
    <?php include(app_path().'\http\footer-section.html')?>
    
    <!-- End Footer Section -->

    <!-- Start Footer Bottom -->
    <?php include(app_path().'\http\footer-bottom.html')?>
    <!-- End Footer Bottom -->

    <!-- Start Modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="contact/store" method="post">
            {{ csrf_field()}}
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Contact To <span class="text-info"><strong>SaluTion</strong></span></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Fill Form and <span class="text-info"><strong>SaluTion</strong></span> will get back to you</p>

            
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  First Name
                </label>
                <input type="text" class="form-control" id="first_name" name="firstName">
              </div>

              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  Last Name
                </label>
                <input type="text" class="form-control" id="last_name" name="lastName">
              </div>

              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  Email Id
                </label>
                <input type="email" class="form-control" id="email" name="Email">
              </div>

              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  Mobile No
                </label>
                <input type="text" class="form-control" id="mob_no" name="Phone">
              </div>
          <input type="hidden" name="Nama" value="" id="fullName">
            <script>
              
          </script>
          <input type="hidden" name="Pesan" value="Tidak Diisi">
          </div>
          <div class="modal-footer">
            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-info" onclick="
            const firstName = document.getElementById('first_name').value;
              const lastName = document.getElementById('last_name').value;

              const fullName = `${firstName} ${lastName}`;
              var names=document.getElementById('fullName');
              names.setAttribute('value',`${fullName}`);
              console.log(`${firstName}`);
              console.log(`${lastName}`);
              console.log(`${names}`);
              console.log(`${fullName}`);
              ">Submit</button>
          </div>
          )
        </form>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Hide this modal and show the first with the button below.
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Modal -->

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>