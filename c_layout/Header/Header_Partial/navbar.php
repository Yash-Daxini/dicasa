<?php
$page = basename($_SERVER['PHP_SELF']);
echo "
    <nav
      class='navbar custom-navbar navbar-expand-md justify-content-sm-between'
    >
      <div class='container-xl'>
        <a class='navbar-brand justify-content-center' href='Home'
          ><img src='furni/images/DICASA CERAMICA LOGO.png' class='img-fluid'
        /></a>
        <button
          class='navbar-toggler border border-4'
          type='button'
          data-bs-toggle='collapse'
          data-bs-target='#navbarsFurni'
          aria-controls='navbarNav'
          aria-expanded='false'
          aria-label='Toggle navigation'
        >
          <span class='navbar-toggler-icon'></span>
        </button>

        <div class='collapse navbar-collapse' id='navbarsFurni'>
          <ul class='custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0'>
            <li class='nav-item "?> <?php if($page == "Home") echo "active" ?> 
            <?php echo "'> <a class='nav-link' href='Home'>Home</a>
            </li>
            <li class='nav-item "?> <?php if($page == "About") echo "active" ?> 
            <?php echo "'><a class='nav-link' href='About'>About us</a></li>
            <li class='nav-item "?> <?php if($page == "Products"||$page == "product-details.php" ) echo "active" ?> 
            <?php echo "'><a class='nav-link' href='Products'>Products</a></li>
            <li class='nav-item "?> <?php if($page == "Catalouge") echo "active" ?> 
            <?php echo "'><a class='nav-link' href='Catalouge'>E-Catalouge</a></li>
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
                <li class='nav-item "?> <?php if($page == "Technical-Specification") echo "active" ?> 
                <?php echo "'>
                  <a class='nav-link' href='Technical-Specification'
                    >Technical-Specification</a
                  >
                </li>
                <!-- <li>
                  <a class='nav-link' href='tiles-calculator.php'
                    >Tiles-Calculator</a
                  >
                </li> -->
                <li class='nav-item "?> <?php if($page == "Packing-Details") echo "active" ?> 
                <?php echo "'>
                  <a class='nav-link' href='Packing-Details'
                    >Packing-Details</a
                  >
                </li>
              </ul>
            </li>
            <li class='nav-item "?> <?php if($page == "Contact") echo "active" ?> 
            <?php echo "'><a class='nav-link' href='Contact'>Contact us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>

    "
?>