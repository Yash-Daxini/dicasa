document.addEventListener("DOMContentLoaded", function () {
  var currentUrl = window.location.href;
  var urlParams = new URLSearchParams(currentUrl);
  var ProductUrl = urlParams.get("ProductUrl");

  // Display or use the parameter values as needed
  console.warn("param1:", ProductUrl);

  const displayAllProducts = () => {
    let apiURL = `https://kingdomceramic.com/ad_kingdomceramic/API/SelectedProductApi`;
    const apiKey = "ADMIN123123";
    let data = {
      apikey: apiKey,
      ProductUrl: ProductUrl,
    };
    let options = {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    };
    fetch(apiURL, options)
      .then((response) => {
        if (!response.ok) {
          throw new Error(
            `Failed to fetch data from the API. Status: ${response.status}`
          );
        }
        return response.json();
      })
      .then((data) => {
        let allProductsDiv = document.getElementById("product-details");
        data.data.forEach((element) => {
          allProductsDiv.innerHTML += `
            <div class="d-flex justify-content-center gap-5 align-items-center flex-wrap">
                <div class="card border-dark shadow-lg mb-3 productDetailsDivImg">
                    <img src="https://kingdomceramic.com/Images/product/${element.ImagePath}" class="card-img-top" alt="Can't Load Image">
                </div>
                <div class="card border-0 productDetailsDiv shadow-lg text-center p-4" style=" font-size:20px">
                    <h5 class="card-text fw-900">${element.ProductName}</h5>
                    <br>
                    <br>
                    <p class="card-text"><span class="fw-semibold">Size : </span>${element.SizeName}</p>
                    <p class="card-text"><span class="fw-semibold">Finish : </span>${element.FinishName}</p>
                    <p class="card-text"><span class="fw-semibold">Space : </span>${element.SpaceName}</p>
                    <p class="card-text"><span class="fw-semibold">Look : </span>${element.LookName}</p>
                </div>
            </div>
        `;
        });
      })
      .catch((error) => {
        console.error(error.message);
      });
  };
  displayAllProducts();
});
displayAllProducts();
