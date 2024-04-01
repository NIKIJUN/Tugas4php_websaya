<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
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

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 10px;
    }

    .gallery-item {
      overflow: hidden;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .gallery-item img {
      max-width: 100%;
      height: auto;
      display: block;
      transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Gallery</h1>
    <div class="gallery">
      <div class="gallery-item">
        <img src="Indonesia_Indah.jpg" alt="Image 1">
      </div>
      <div class="gallery-item">
        <img src="Sakura.jpg" alt="Image 2">
      </div>
      <div class="gallery-item">
        <img src="NZ.jpg" alt="Image 3">
      </div>
      <div class="gallery-item">
        <img src="super.jpg" alt="Image 3">
      </div>
      <div class="gallery-item">
        <img src="swiss.jpg" alt="Image 3">
      </div>
      <div class="gallery-item">
        <img src="alaska.jpeg" alt="Image 3">
      </div>
    
    </div>
  </div>
</body>

</html>
