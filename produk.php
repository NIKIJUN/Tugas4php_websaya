<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .product {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 20px;
      margin-bottom: 20px;
    }

    .product img {
      max-width: 100%;
      height: auto;
    }

    .product-info {
      padding: 10px;
    }

    .product-info h2 {
      margin-top: 0;
    }

    .product-info p {
      margin-bottom: 10px;
    }

    .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #555;
    }
  </style>
</head>

<body>
  <h1>PRODUK</h1>
  <div class="container">
    <div class="product">
      <img src="Produk.jpg" alt="Product Image">
      <div class="product-info">
        <h2>Product Name</h2>
        <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>Price: $99.99</p>
        <a href="#" class="btn">Add to Cart</a>
      </div>
    </div>
    
  </div>
</body>

</html>
