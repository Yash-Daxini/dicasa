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

<!-- <div class="hero heroBackgroundImageDiv d-flex justify-content-center align-items-center" style="
    background: url('furni/images/P7.webp');
  ">
  <div>
    <h1 class="text-white" style="filter: brightness(1);">Products</h1>
  </div>
</div> -->

<div class="d-flex justify-content-center align-items-center">
  <div>
    <h1 class="m-5 text-secondary-emphasis fs-3">Products</h1>
  </div>
</div>


<div class="container products my-5">
  <div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">
      <div class="card border-light shadow-lg mb-3" style="">
        <div class="card-header text-center d-flex justify-content-start">
          <img class="p-2" style="width:50px" src="furni/images/edit.webp">
          <h4 class="mt-2 mx-2">Type</h4>
          <i class="fas fa-caret-down fa-lg mx-1 mt-3"></i>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allTypeList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="">
        <div class="card-header text-center d-flex justify-content-start">
          <img class="p-2" style="width:50px" src="furni/images/edit.webp">
          <h4 class="mt-2 mx-2">Size</h4>
          <i class="fas fa-caret-down fa-lg mx-1 mt-3"></i>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allSizesList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="">
        <div class="card-header text-center d-flex justify-content-start">
          <img class="p-2" style="width:50px" src="furni/images/edit.webp">
          <h4 class="mt-2 mx-2">Finish</h4>
          <i class="fas fa-caret-down fa-lg mx-1 mt-3"></i>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allFinishList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="">
        <div class="card-header text-center d-flex justify-content-start">
          <img class="p-2" style="width:50px" src="furni/images/edit.webp">
          <h4 class="mt-2 mx-2">Space</h4>
          <i class="fas fa-caret-down fa-lg mx-1 mt-3"></i>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allSpaceList">
          </ul>
        </div>
      </div>
      <div class="card border-light shadow-lg mb-3" style="">
        <div class="card-header text-center d-flex justify-content-start">
          <img class="p-2" style="width:50px" src="furni/images/edit.webp">
          <h4 class="mt-2 mx-2">Look</h4>
          <i class="fas fa-caret-down fa-lg mx-1 mt-3"></i>
        </div>
        <div class="card-body">
          <ul class="list clearfix" id="allLookList">
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-12 content-side">
      <div class="team-style-three">
        <div class="row clearfix text-center" id="allProductsDiv" data-zanim-xs='{"delay":0}'
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