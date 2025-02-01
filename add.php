<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link href="cdn/shop/t/64/assets/fontae4b.css?v=50157125298610985211704803541" rel="stylesheet" type="text/css"
    media="all" />
  <link href="cdn/shop/t/64/assets/application.min5cfe.css?v=163312093385010144691737007238" rel="stylesheet"
    type="text/css" media="all" />

  <!-- <script src="cdn.jsdelivr.net/npm/%40growthbook/growthbook/dist/bundles/index.js"></script> -->
  <script src="cdn/shop/t/64/assets/ab-test90e2.js?v=79723028281500467951720528958"></script>
  <script src="cdn/shop/t/64/assets/application.min617f.js?v=86893644808988964271736939393"></script>
  <script src="cdn/shop/t/64/assets/jquery-min-v3.6.1.min03ee.js?v=77389668493903155241704692039"></script>
  <script src="cdn/shop/t/64/assets/cart-grouping.mincfd1.js?v=3489674350605185701732606037" defer="defer"></script>
  <script src="cdn/shop/t/64/assets/base.min70af.js?v=132773053093560774521732606036" defer></script>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link href="cdn/shop/t/64/assets/mini-cart-drawer.min1f71.css?v=86613100141728982041704692040" rel="stylesheet"
    type="text/css" media="all" />
  <script src="cdn/shop/t/64/assets/product-common-function.mincc34.js?v=129864563763486658341732606038"
    defer="defer"></script>
  <script src="cdn/shop/t/64/assets/product-common-card.min0050.js?v=132855597793528529881717578406"
    defer="defer"></script>
  <script src="cdn/shop/t/64/assets/product-add-to-bag.mincedd.js?v=16858383435048487951727180947"
    defer="defer"></script>
  <link href="cdn/shop/t/64/assets/product-add-to-bag.mincb77.css?v=7892603211099314451726665388" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn/shop/t/64/assets/product-card.mine3b7.css?v=94156981987166474241726569589" rel="stylesheet"
    type="text/css" media="all" />
  <link rel="stylesheet" href="main.css">
  <style>
    /* .cart-container {
     width:100%;
      margin: 0 auto;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background-color:rgb(51, 201, 108);
      color: #fff;
      text-align: left;
      padding: 15px;
      
    }

    td {
      padding: 15px;
      border-bottom: 1px solid #eee;
    }

    .product-info {
      display: flex;
      align-items: center;
    }

    .product-info img {
      width: 60px;
      height: 60px;
      border-radius: 10px;
      margin-right: 15px;
      object-fit: cover;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .product-info div {
      font-size: 14px;
    }

    .product-info div div {
      font-weight: bold;
      margin-bottom: 5px;
    }

    .quantity-controls {
      display: flex;
      align-items: center;
    }

    .quantity-controls button {
      background-color:rgb(51, 201, 108);
      color: white;
      border: none;
      border-radius: 5px;
      padding: 5px 10px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .quantity-controls button:hover {
      background-color: rgb(51, 201, 108);
    }

    .quantity-controls span {
      margin: 0 10px;
      font-weight: bold;
      font-size: 16px;
    }

    .total-cell {
      font-weight: bold;
      color: rgb(51, 201, 108);
      font-size: 16px;
    }

    .cart-footer {
      text-align: right;
      padding: 15px;
      background-color: #f1f1f1;
    }

    .cart-footer button {
      background-color: rgb(51, 201, 108);
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .cart-footer button:hover {
      background-color: rgb(51, 201, 108);
    }
    .h2{
      display:flex;
      justify-content:center;
      align-items:center;
      font-size:20px;
      font-weight:500;
      padding-bottom:10px;
    }
     */

     /* Base Styles (default for larger screens) */
.cart-container {
  width: 100%;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th {
  background-color: rgb(51, 201, 108);
  color: #fff;
  text-align: left;
  padding: 15px;
}

td {
  padding: 15px;
  border-bottom: 1px solid #eee;
}

.product-info {
  display: flex;
  align-items: center;
}

.product-info img {
  width: 60px;
  height: 60px;
  border-radius: 10px;
  margin-right: 15px;
  object-fit: cover;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.quantity-controls {
  display: flex;
  align-items: center;
}

.quantity-controls button {
  background-color: rgb(51, 201, 108);
  color: white;
  border: none;
  border-radius: 5px;
  padding: 5px 10px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.quantity-controls span {
  margin: 0 10px;
  font-weight: bold;
  font-size: 16px;
}

.total-cell {
  font-weight: bold;
  color: rgb(51, 201, 108);
  font-size: 16px;
}

.cart-footer {
  text-align: right;
  padding: 15px;
  background-color: #f1f1f1;
}

.cart-footer button {
  background-color: rgb(51, 201, 108);
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

/* Media Queries for Responsiveness */
@media (max-width: 1200px) {
  table {
    font-size: 14px;
  }

  .quantity-controls button {
    padding: 5px 8px;
    font-size: 14px;
  }

  .quantity-controls span {
    font-size: 14px;
  }
}

@media (max-width: 992px) {
  .cart-container {
    padding: 10px;
  }

  .product-info {
    flex-direction: column;
    align-items: flex-start;
  }

  .product-info img {
    width: 80px;
    height: 80px;
  }
}

@media (max-width: 768px) {
  th, td {
    font-size: 14px;
    padding: 10px;
  }

  .cart-footer button {
    width: 100%;
    padding: 8px 15px;
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .cart-container {
    padding: 10px;
    margin: 0 5px;
  }

  table {
    display: block;
    overflow-x: auto;
    width: 100%;
    border: none;
  }

  thead {
    display: none;
  }

  tbody tr {
    display: flex;
    flex-direction: column;
    border-bottom: 1px solid #eee;
    margin-bottom: 10px;
  }

  td {
    display: flex;
    justify-content: space-between;
    padding: 10px 5px;
    font-size: 14px;
  }

  td:first-child {
    flex-direction: column;
    align-items: flex-start;
  }

  .product-info {
    flex-direction: column;
    align-items: flex-start;
    gap: 5px;
  }

  .product-info img {
    width: 60px;
    height: 60px;
  }

  .quantity-controls {
    justify-content: space-between;
    width: 100%;
  }

  .cart-footer {
    text-align: center;
    padding: 15px;
  }

  .cart-footer button {
    width: 100%;
    padding: 10px;
    font-size: 14px;
  }
}
@media (max-width: 425px) {
      .cart-container {
        padding: 10px;
        margin: 0 5px;
      }

      table {
        display: block;
        overflow-x: auto;
        width: 100%;
      }

      thead {
        display: none;
      }

      tbody tr {
        display: flex;
        flex-direction: column;
        border-bottom: 1px solid #eee;
        margin-bottom: 10px;
      }

      td {
        display: flex;
        justify-content: space-between;
        padding: 10px 5px;
        font-size: 14px;
      }

      .product-info {
        flex-direction: column;
        align-items: flex-start;
      }

      .cart-footer {
        text-align: center;
        padding: 15px;
      }

      .cart-footer button {
        width: 100%;
        padding: 10px;
      }
    }

  </style>
</head>
<body data-theme="tmrw_veirdo_theme">
<div class="blur-bg w-full h-screen absolute bg-white/30 hidden"></div>

<div id="shopify-section-header" class="shopify-section section-header">
  <!-- Top announcement-bar start -->
  <div id="announcement-bar"
    class="block font-[onestSemibold] py-2 px-3 text-center h-fit text-white text-xs lg:text-base lg:leading-none bg-[#2D8CE3]   relative uppercase text-center px-auto whitespace-nowrap">
    <div class="flex w-full items-center justify-center overflow-hidden">
      <div class="carousel-list-slider flex w-full lg:w-[40rem]">
        <div> HOODIES & SWEATSHIRTS (PICK ANY 2 @1699) </div>
        <div> BUY 3 @1099 PRINTED OVERSIZED T-SHIRTS </div>
        <div> PREPAID ORDERS WILL BE SHIPPED ON PRIORITY </div>
        <div> GET ADDITIONAL 10% OFF ON PREPAID RDERS </div>
      </div>
    </div>
  </div>
  <!-- Top announcement-bar end --> 

  <!-- Menu icon -->
  <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
    <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z"
        fill="currentColor" />
    </symbol>
  </svg>
   <!-- Header start -->
   <?php include("inc/navbar.php") ?>
    <!-- header end -->
  <div class="cart-container "style="margin-bottom:30px; margin-top:20px;">
    <h4 class="h2">Cart Page</h4>
    <div class="cart-items">
      <table>
        <thead>
          <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <!-- Product 1 -->
          <tr>
            <td>
              <div class="product-info">
                <img src="./cdn/shop/products/Black-striped-crew-neck-Tee-Veirdo-351215d.jpg" alt="Product 1">
                <div>
                  <div>Black Plain Hoodie</div>
                  <small>Categories: Hoodie</small>
                </div>
              </div>
            </td>
            <td>$20.00</td>
            <td>
              <div class="quantity-controls">
                <button onclick="decrementQuantity('item1', 20.00)">-</button>
                <span id="item1-quantity">1</span>
                <button onclick="incrementQuantity('item1', 20.00)">+</button>
              </div>
            </td>
            <td id="item1-total">$20.00</td>
          </tr>
          <!-- Product 2 -->
          <tr>
            <td>
              <div class="product-info">
                <img src="./cdn/shop/products/Black-striped-crew-neck-Tee-Veirdo-351bd50.jpg" alt="Product 2">
                <div>
                <div>Black Plain Hoodie</div>
                <small>Categories: Hoodie</small>
                </div>
              </div>
            </td>
            <td>$395.00</td>
            <td>
              <div class="quantity-controls">
                <button onclick="decrementQuantity('item2', 395.00)">-</button>
                <span id="item2-quantity">1</span>
                <button onclick="incrementQuantity('item2', 395.00)">+</button>
              </div>
            </td>
            <td id="item2-total">$395.00</td>
          </tr>
          <!-- Product 3 -->
          <tr>
            <td>
              <div class="product-info">
                <img src="./cdn/shop/products/Black-striped-crew-neck-Tee-Veirdo-445ec7e.jpg" alt="Product 3">
                <div>
                <div>Black Plain Hoodie</div>
                <small>Categories: Hoodie</small>
                </div>
              </div>
            </td>
            <td>$25.00</td>
            <td>
              <div class="quantity-controls">
                <button onclick="decrementQuantity('item3', 25.00)">-</button>
                <span id="item3-quantity">1</span>
                <button onclick="incrementQuantity('item3', 25.00)">+</button>
              </div>
            </td>
            <td id="item3-total">$25.00</td>
          </tr>
          <!-- Product 4 -->
          <tr>
            <td>
              <div class="product-info">
                <img src="./cdn//shop/products/Black-striped-crew-neck-Tee-Veirdo-891c3c7.jpg" alt="Product 4">
                <div>
                <div>Black Plain Hoodie</div>
                <small>Categories: Hoodie</small>                                                                                                                                  
                </div>
              </div>
            </td>
            <td>$10.00</td>
            <td>
              <div class="quantity-controls">
                <button onclick="decrementQuantity('item4', 10.00)">-</button>
                <span id="item4-quantity">1</span>
                <button onclick="incrementQuantity('item4', 10.00)">+</button>
              </div>
            </td>
            <td id="item4-total">$10.00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    function incrementQuantity(itemId, price) {
      const quantityElement = document.getElementById(`${itemId}-quantity`);
      const totalElement = document.getElementById(`${itemId}-total`);
      let quantity = parseInt(quantityElement.textContent);

      quantity++;
      quantityElement.textContent = quantity;
      totalElement.textContent = `$${(quantity * price).toFixed(2)}`;
    }

    function decrementQuantity(itemId, price) {
      const quantityElement = document.getElementById(`${itemId}-quantity`);
      const totalElement = document.getElementById(`${itemId}-total`);
      let quantity = parseInt(quantityElement.textContent);

      if (quantity > 1) {
        quantity--;
        quantityElement.textContent = quantity;
        totalElement.textContent = `$${(quantity * price).toFixed(2)}`;
      }
    }
  </script>
  <?php include './inc/footer.php';?>
</body>
</html>
