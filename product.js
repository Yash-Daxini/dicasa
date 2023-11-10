let TypeUrl = "";
let SizeUrl = "";
let FinishUrl = "";
let SpaceUrl = "";
let LookUrl = "";
let mapForType = [];
let mapForSize = [];
let mapForSpace = [];
let mapForLook = [];
let mapForFinish = [];
let apiURL = "https://kingdomceramic.com/ad_kingdomceramic/API/SizeApi";
const apiKey = "ADMIN123123";

// Define the API key in a JSON object
let data = {
  apikey: apiKey,
  TypeUrl: "",
  SizeUrl: "",
  FinishUrl: "",
  SpaceUrl: "",
  LookUrl: "",
};

// Fetch options
let options = {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify(data),
};

const displayAllSize = () => {
  fetch(apiURL, options)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          `Failed to fetch data from the API. Status: ${response.status}`
        );
      }
      return response.json();
    })
    .then((res) => {
      let allSizesList = document.getElementById("allSizesList");
      res.data.forEach((element) => {
        mapForSize[element.SizeName] = element.SizeUrl;
        allSizesList.innerHTML += `
                <li>
                  <button class="productPageBtn sizeBtn text-dark">
                    ${element.SizeName}</button>
                </li>
          `;
      });
      let allSizeBtns = document.querySelectorAll(".sizeBtn");
      allSizeBtns.forEach(function (element) {
        element.addEventListener("click", () => {
          allSizeBtns.forEach(function (element1) {
            element1.classList.remove("productPageBtnUnderLine");
          });
          element.classList.add("productPageBtnUnderLine");
          data = {
            ...data,
            SizeUrl: mapForSize[element.innerText],
          };
          filteredData();
        });
      });
    })
    .catch((error) => {
      console.error(error.message);
    });
};
displayAllSize();

const displayAllLook = () => {
  apiURL = `https://kingdomceramic.com/ad_kingdomceramic/API/LookApi`;
  fetch(apiURL, options)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          `Failed to fetch data from the API. Status: ${response.status}`
        );
      }
      return response.json();
    })
    .then((res) => {
      let allLookList = document.getElementById("allLookList");
      res.data.forEach((element) => {
        mapForLook[element.LookName] = element.LookUrl;
        allLookList.innerHTML +=
          `
                  <li>
                    <button data-effectid="1" data-effectname="` +
          element.LookName +
          `"
                      class="productPageBtn lookBtn text-decoration-none text-dark">
                      ${element.LookName}  
                    </button>
                  </li>
            `;
      });
      let allLookBtns = document.querySelectorAll(".lookBtn");
      allLookBtns.forEach(function (element) {
        element.addEventListener("click", () => {
          allLookBtns.forEach(function (element1) {
            element1.classList.remove("productPageBtnUnderLine");
          });
          element.classList.add("productPageBtnUnderLine");
          data = {
            ...data,
            LookUrl: mapForLook[element.innerText],
          };
          filteredData();
        });
      });
    })
    .catch((error) => {
      console.error(error.message);
    });
};
displayAllLook();

const displayAllSpace = () => {
  apiURL = `https://kingdomceramic.com/ad_kingdomceramic/API/SpaceApi`;
  fetch(apiURL, options)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          `Failed to fetch data from the API. Status: ${response.status}`
        );
      }
      return response.json();
    })
    .then((res) => {
      let allSpaceList = document.getElementById("allSpaceList");
      res.data.forEach((element) => {
        mapForSpace[element.SpaceName] = element.SpaceUrl;
        allSpaceList.innerHTML +=
          `
              <li>
                  <button data-spaceid="1" data-spacename="` +
          element.SpaceName +
          `"
                    class="productPageBtn spaceBtn space sp_1 text-decoration-none text-dark">
                    ${element.SpaceName} 
                  </button>
                </li>
          `;
      });
      let allSpaceBtns = document.querySelectorAll(".spaceBtn");
      allSpaceBtns.forEach(function (element) {
        element.addEventListener("click", () => {
          allSpaceBtns.forEach(function (element1) {
            element1.classList.remove("productPageBtnUnderLine");
          });
          element.classList.add("productPageBtnUnderLine");
          data = {
            ...data,
            SpaceUrl: mapForSpace[element.innerText],
          };
          filteredData();
        });
      });
    })
    .catch((error) => {
      console.error(error.message);
    });
};
displayAllSpace();

const displayAllFinish = () => {
  apiURL = `https://kingdomceramic.com/ad_kingdomceramic/API/FinishApi`;
  fetch(apiURL, options)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          `Failed to fetch data from the API. Status: ${response.status}`
        );
      }
      return response.json();
    })
    .then((res) => {
      let allFinishList = document.getElementById("allFinishList");
      res.data.forEach((element) => {
        mapForFinish[element.FinishName] = element.FinishUrl;
        allFinishList.innerHTML += `
                <li>
                  <button class="productPageBtn finishBtn text-decoration-none text-dark">
                  ${element.FinishName} 
                  </button>
                </li>
          `;
      });
      let allFinishBtns = document.querySelectorAll(".finishBtn");
      allFinishBtns.forEach(function (element) {
        element.addEventListener("click", () => {
          allFinishBtns.forEach(function (element1) {
            element1.classList.remove("productPageBtnUnderLine");
          });
          element.classList.add("productPageBtnUnderLine");
          data = {
            ...data,
            FinishUrl: mapForFinish[element.innerText],
          };
          filteredData();
        });
      });
    })
    .catch((error) => {
      console.error(error.message);
    });
};
displayAllFinish();

const displayAllTypes = () => {
  apiURL = `https://kingdomceramic.com/ad_kingdomceramic/API/TypeApi`;
  fetch(apiURL, options)
    .then((response) => {
      if (!response.ok) {
        throw new Error(
          `Failed to fetch data from the API. Status: ${response.status}`
        );
      }
      return response.json();
    })
    .then((res) => {
      let allTypeList = document.getElementById("allTypeList");
      res.data.forEach((element) => {
        mapForType[element.TypeName] = element.TypeUrl;
        allTypeList.innerHTML += `
                <li>
                  <button class="productPageBtn typeBtn text-decoration-none text-dark">${element.TypeName}</button>
                </li>
          `;
      });
      let allTypeBtns = document.querySelectorAll(".typeBtn");
      allTypeBtns.forEach(function (element) {
        element.addEventListener("click", () => {
          let allSizeBtns = document.querySelectorAll(".sizeBtn");
          let allLookBtns = document.querySelectorAll(".lookBtn");
          let allFinishBtns = document.querySelectorAll(".finishBtn");
          let allSpaceBtns = document.querySelectorAll(".spaceBtn");
          allSizeBtns.forEach((element) => {
            element.classList.remove("productPageBtnUnderLine");
          });
          allLookBtns.forEach((element) => {
            element.classList.remove("productPageBtnUnderLine");
          });
          allFinishBtns.forEach((element) => {
            element.classList.remove("productPageBtnUnderLine");
          });
          allSpaceBtns.forEach((element) => {
            element.classList.remove("productPageBtnUnderLine");
          });
          allTypeBtns.forEach(function (element1) {
            element1.classList.remove("productPageBtnUnderLine");
          });
          element.classList.add("productPageBtnUnderLine");
          data = {
            ...data,
            TypeUrl: mapForType[element.innerText],
            SizeUrl: "",
            FinishUrl: "",
            LookUrl: "",
            SpaceUrl: "",
          };
          filteredData();
        });
      });
    })
    .catch((error) => {
      console.error(error.message);
    });
};
displayAllTypes();

const displayAllProducts = () => {
  apiURL = `https://kingdomceramic.com/ad_kingdomceramic/API/ProductApi`;
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
      let allProductsDiv = document.getElementById("allProductsDiv");
      data.data.forEach((element) => {
        allProductsDiv.innerHTML += `
              <div class="col-lg-4 col-md-6 col-sm-6 col-12 my-4" data-zanim-xs='{"delay":0.1}'
              style="transform: translate(0px, 0px); opacity: 1">
              <a class="text-decoration-none" href='product-details.php?&ProductUrl=${element.ProductUrl}'>
              <div class="card border-light shadow-lg mb-3 d-flex justify-content-center align-items-center" style="width: 18rem;">
                <img src="https://kingdomceramic.com/Images/product/${element.ImagePath}" alt=""
                  class="card-img-top tilesImg img-fuild" style="transform: rotate(0deg)" />
                <div class="card-body">
                  <p class="card-text">${element.ProductName}</p>
                </div>
              </div>
              </a>
            </div>
        `;
      });
    })
    .catch((error) => {
      console.error(error.message);
    });
};
displayAllProducts();

const filteredData = () => {
  options = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  };
  apiURL = `https://kingdomceramic.com/ad_kingdomceramic/API/ProductApi`;
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
      let allProductsDiv = document.getElementById("allProductsDiv");
      allProductsDiv.innerHTML = "";
      data.data.forEach((element) => {
        allProductsDiv.innerHTML += `
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 my-4" data-zanim-xs='{"delay":0.1}'
            style="transform: translate(0px, 0px); opacity: 1">
            <div class="card border-light shadow-lg mb-3 d-flex justify-content-center align-items-center" style="width: 18rem;">
              <img src="https://kingdomceramic.com/Images/product/${element.ImagePath}" alt=""
                class="card-img-top tilesImg img-fuild" style="transform: rotate(0deg)" />
              <div class="card-body">
                <p class="card-text">${element.ProductName}</p>
              </div>
            </div>
          </div>
      `;
      });
      if (data.data.length === 0) {
        allProductsDiv.innerHTML = `<h1 class="text-dark">No data found</h1>`;
      }
    })
    .catch((error) => {
      console.error(error.message);
    });
};
