
<div class="l-logo-container">
  <div class="l-logo">
    <img class="l-img-1" src="./assets/Asset 512.png" alt="Logo 1" />
    <div class="l-detailss">
      <p class="l-title">Free Shipping</p>
      <p class="l-info">Free shipping on order above $99</p>
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-2" src="./assets/Asset 412.png" alt="Logo 2" />
    <div class="l-detailss">
      <p class="l-title">Cash On Delivery</p>
      <p class="l-info">The internet trend to repeat</p>
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-3" src="./assets/Asset 312.png" alt="Logo 3" />
    <div class="l-detailss">
      <p class="l-title">Gift For All</p>
      <p class="l-info">Receive gift when subscribe</p>
    </div>
  </div>
  <div class="l-logo">
    <img class="l-img-4" src="./assets/Asset 212.png" alt="Logo 4" />
    <div class="l-detailss">
      <p class="l-title">Opening All Weeks</p>
      <p class="l-info">6:00am to 17:00pm</p>
    </div>
  </div>
</div>

<!DOCTYPE html>
<html>
<head>
  <title>Service Bar Example</title>
  <style>
    .l-logo-container {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      background-color: #70809014;
      padding: 2em 1em;
      margin: 4em 0 0 0;
    }

    .l-logo {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .l-img-1 {
      width: 35%;
      height: 6vh;
    }

    .l-img-2 {
      width: 35%;
      height: 6vh;
    }

    .l-img-3 {
      width: 20%;
      height: 6vh;
    }

    .l-img-4 {
      width: 35%;
      height: 6vh;
    }

    .l-title {
      font-weight: bolder;
    }

    .l-detailss {
      text-align: center;
      margin: 1em 0 0 0;
    }

    .l-info {
      font-size: small;
    }

    @media only screen and (max-width: 768px) {
      .l-logo-container {
        flex-direction: column;
        padding: 2em 0;
      }

      .l-logo {
        margin-bottom: 2em;
      }

      .l-img-1,
      .l-img-2 {
        width: 20%;
        height: auto;
      }

      .l-img-3,
      .l-img-4 {
        width: 15%;
        height: auto;
      }

      .l-detailss {
        font-size: larger;
      }
    }
  </style>
</head>
<body>
</body>
</html>
