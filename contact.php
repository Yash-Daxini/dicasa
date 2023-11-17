<?php
$MetaDescription = "sdfsa";
$MetaOgTitle = "fa";
$MetaOgImage = "dfsa";
$MetaKeywords = "fas";
$MetaOgImage = "fd";
$MetaOgDescription = "fdf";
$Title = "Dicasa Ceramic - Contact Us";
include_once __DIR__ . '/c_layout/Header/header.php';
?>

<div class="hero heroBackgroundImageDiv d-flex justify-content-center align-items-center" style="
      background: url('furni/images/SILAS BIANCO 4400px.jpg');
    ">
  <div>
    <h1 class="text-white">Contact Us</h1>
  </div>
</div>

<div class="container my-3">

  <div class="d-flex justify-content-center align-items-center flex-wrap gap-5">
    <!-- <div class="col-md-12"> -->
    <div class="">
      <div class="">
        <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left"
          data-aos-delay="0">
          <div class="service-icon color-1 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-geo-alt-fill" viewbox="0 0 16 16">
              <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
              </path>
            </svg>
          </div>
          <!-- /.icon -->
          <div class="service-contents">
            <p>202, Bilva trade hub,<br>Near mahendranagar circle,<br> 8-A national highway,<br> Morbi - 363642 Gujarat, India</p>
          </div>
          <!-- /.service-contents-->
        </div>
        <!-- /.service -->
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left"
          data-aos-delay="0">
          <div class="service-icon color-1 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-envelope-fill" viewbox="0 0 16 16">
              <path
                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z">
              </path>
            </svg>
          </div>
          <!-- /.icon -->
          <div class="service-contents">
            <p>Info@dicasaceramica.com</p>
          </div>
          <!-- /.service-contents-->
        </div>
        <!-- /.service -->
      </div>
    </div>
    <div class="">
      <div class="">
        <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left"
          data-aos-delay="0">
          <div class="service-icon color-1 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-telephone-fill" viewbox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z">
              </path>
            </svg>
          </div>
          <!-- /.icon -->
          <div class="service-contents">
            <p>+91 96625 78987</p>
          </div>
          <!-- /.service-contents-->
        </div>
        <!-- /.service -->
      </div>
    </div>
    <!-- </div> -->
  </div>
  <div class="formAndMapDiv d-flex justify-content-center align-items-center flex-wrap gap-5">
    <!-- <div class="col-md-12"> -->
    <div class="mapDiv">
      <div class="map d-flex justify-content-center align-items-center my-3">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58848.572782694064!2d70.84520153380565!3d22.801137358126343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39598dc69c8044d5%3A0x1c108cde80ccb10d!2sKINGDOM%20CERAMIC!5e0!3m2!1sen!2sin!4v1699329707838!5m2!1sen!2sin"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
    <div class="formDiv">
      <form id="contactForm">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label class="text-black" for="fname">First name</label>
              <input type="text" class="form-control" id="fname" />
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label class="text-black" for="lname">Last name</label>
              <input type="text" class="form-control" id="lname" />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="text-black" for="email">Email address</label>
          <input type="email" class="form-control" id="email" />
        </div>

        <div class="form-group mb-5">
          <label class="text-black" for="message">Message</label>
          <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
        </div>

        <button type="submit" class="btn btn-outline-success">
          Send Message
        </button>
      </form>
    </div>
    <!-- </div> -->
  </div>

</div>

<?php
include_once __DIR__ . '/c_layout/Footer/footer.php';
?>