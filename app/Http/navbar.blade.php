<nav class="navbar navbar-expand-lg navbar-dark navbar-home py-3 fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/" id="navbar">SaluTion</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-item">
              <li class="nav-item">
                <a class="nav-link <?php echo ("$_SERVER[REQUEST_URI]")=='/'?'active':'';?>" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ("$_SERVER[REQUEST_URI]")=='/jasa'?'active':'';?>" href="jasa">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ("$_SERVER[REQUEST_URI]")=='/about'?'active':'';?>" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ("$_SERVER[REQUEST_URI]")=='/contact'?'active':'';?>" href="contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo ("$_SERVER[REQUEST_URI]")=='/author'?'active':'';?>" href="author">Profile</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>