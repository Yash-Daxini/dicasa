<?php
echo "
    <nav
      class='custom-navbar justify-content-sm-between navbar navbar-dark navbar navbar-expand-md navbar navbar-default navbar-fixed-top'
      arial-label='Furni navigation bar'
    >
      <div class='container-xl'>
        <a class='navbar-brand justify-content-center' href='index.php'
          ><img src='furni/images/DICASA CERAMICA LOGO.png' class='img-fluid'
        /></a>
        <button
          class='navbar-toggler'
          type='button'
          data-bs-toggle='collapse'
          data-bs-target='#navbarNav'
          aria-controls='navbarNav'
          aria-expanded='false'
          aria-label='Toggle navigation'
        >
          <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse' id='navbarsFurni'>
          <ul class='custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0'>
            <li class='nav-item active'>
              <a class='nav-link' href='index.php'>Home</a>
            </li>
            <li><a class='nav-link' href='aboutus.php'>About us</a></li>
            <li><a class='nav-link' href='products.php'>Products</a></li>
            <li class='nav-item dropdown'>
              <a
              class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'
              >
                Information
              </a>
              <ul class='dropdown-menu'>
                <!-- <li>
                  <a class='nav-link' href='products-details.php'
                    >Products-Details</a
                  >
                </li> -->
                <li>
                  <a class='nav-link' href='technical-specification.php'
                    >Technical-Specification</a
                  >
                </li>
                <!-- <li>
                  <a class='nav-link' href='tiles-calculator.php'
                    >Tiles-Calculator</a
                  >
                </li> -->
                <li>
                  <a class='nav-link' href='packing-details.php'
                    >Packing-Details</a
                  >
                </li>
              </ul>
            </li>
            <li><a class='nav-link' href='contact.php'>Contact us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>

    "
?>;