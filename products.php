<?php
$MetaDescription = "sdfsa";
$MetaOgTitle = "fa";
$MetaOgImage = "dfsa";
$MetaKeywords = "fas";
$MetaOgImage = "fd";
$MetaOgDescription = "fdf";
$Title = "Products - Dicasa Ceramic";
include_once __DIR__ . '/c_layout/Header/header.php';
?>

<a href='product-details.php?name=abc'>Link</a>

<div class="hero heroBackgroundImageDiv d-flex justify-content-center align-items-center" style="
    background: url('furni/images/P7.jpg');
  ">
  <div>
    <h1 class="text-white" style="filter: brightness(1);">Packing-Details</h1>
  </div>
</div>


<div class="products m-5">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12 fs-6">
      <div class="card border-light shadow-lg mb-3" style="max-width: 18rem">
        <div class="card-header text-center d-flex justify-content-center">
          <img class="w-25 p-2" src="https://kingdomceramic.com/assets/img/icon/edit.png">
          <h4 class="mt-3 mx-5">Type</h4>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allTypeList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="max-width: 18rem">
        <div class="card-header text-center d-flex justify-content-center">
          <img class="w-25 p-2" src="https://kingdomceramic.com/assets/img/icon/edit.png">
          <h4 class="mt-3 mx-5">Size</h4>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allSizesList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="max-width: 18rem">
        <div class="card-header text-center d-flex justify-content-center">
          <img class="w-25 p-2" src="https://kingdomceramic.com/assets/img/icon/edit.png">
          <h4 class="mt-3 mx-5">Finish</h4>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allFinishList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="max-width: 18rem">
        <div class="card-header text-center d-flex justify-content-center">
          <img class="w-25 p-2" src="https://kingdomceramic.com/assets/img/icon/edit.png">
          <h4 class="mt-3 mx-5">Space</h4>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allSpaceList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="max-width: 18rem">
        <div class="card-header text-center d-flex justify-content-center">
          <img class="w-25 p-2" src="https://kingdomceramic.com/assets/img/icon/edit.png">
          <h4 class="mt-3 mx-5">Look</h4>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allLookList">
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12 content-side">
      <div class="team-style-three product py-0">
        <div class="row clearfix" id="allProductsDiv" data-zanim-xs='{"delay":0}'
          style="transform: translate(0px, 0px); opacity: 1">
        </div>
      </div>
    </div>
  </div>
</div>

<script src="product.js"></script>

<?php
include_once __DIR__ . '/c_layout/Footer/footer.php';
?>