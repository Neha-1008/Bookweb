<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fictional Book Collection</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      Background-image:linear-gradient(to top, #a8edea 0%, #fed6e3 100%);  
          padding: 20px;
    }
    .text-center {
    color:rgb(17, 17, 17); /* This is a deep indigo color to give a fairy tale vibe */
    font-weight: bold;
}

    .card {
      width: 100%;
      max-width: 250px;
      margin: auto;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease-in-out;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card-img-top {
      height: 150px;
      object-fit: contain;
      background-color: #f8f9fa;
      border-bottom: 1px solid #ddd;
      border-radius: 8px 8px 0 0;
    }
    .card-body {
      padding: 10px;
      text-align: center;
    }
    .card-title {
      font-size: 1rem;
      margin-bottom: 8px;
    }
    .card-text {
      font-size: 0.875rem;
      margin-bottom: 8px;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      text-overflow: ellipsis;
      height: 3rem;
    }
    .btn-primary {
      font-size: 0.875rem;
      padding: 8px 12px;
    }
    .row {
      justify-content: center;
      gap: 20px;
    }
  </style>
</head>
<body>
<div class="container">
  <h1 class="text-center mb-5">Fictional Book Collection</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Book Card 1 -->
    <div class="col">
      <div class="card">
        <img src="fictional\The Mystery of the Forgotten Forest.jpg" class="card-img-top" alt="The Mystery of the Forgotten Forest">
        <div class="card-body">
          <h5 class="card-title">The Mystery of the Forgotten Forest</h5>
          <p class="card-text">
            A thrilling tale of adventure and secrets hidden deep within an ancient forest.
          </p>
          <h6 class="text-primary mt-2">₹ 200</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Mystery of the Forgotten Forest', 200)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 2 -->
    <div class="col">
      <div class="card">
        <img src="fictional\Galactic Odyssey.jpg" class="card-img-top" alt="Galactic Odyssey">
        <div class="card-body">
          <h5 class="card-title">Galactic Odyssey</h5>
          <p class="card-text">
            Embark on an interstellar journey filled with danger, wonder, and cosmic mysteries.
          </p>
          <h6 class="text-primary mt-2">₹ 150</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Galactic Odyssey', 150)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 3 -->
    <div class="col">
      <div class="card">
        <img src="fictional\The Dragon's Legend.jpg" class="card-img-top" alt="The Dragon's Legend">
        <div class="card-body">
          <h5 class="card-title">The Dragon's Legend</h5>
          <p class="card-text">
            An epic fantasy novel about a hero's quest to uncover a lost dragon kingdom.
          </p>
          <h6 class="text-primary mt-2">₹ 250</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Dragon\'s Legend', 250)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 4 -->
    <div class="col">
      <div class="card">
        <img src="fictional\Chronos Crossing.jpg" class="card-img-top" alt="Chronos Crossing">
        <div class="card-body">
          <h5 class="card-title">Chronos Crossing</h5>
          <p class="card-text">
            A mind-bending journey through time, uncovering the mysteries of the past and future.
          </p>
          <h6 class="text-primary mt-2">₹ 160</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Chronos Crossing', 160)">Add to Cart</button>
        </div>
      </div>
    </div>

  <!-- Book Card 5 -->
  <div class="col">
      <div class="card">
        <img src="fictional\The Arrange Mariiage Murder.jpg" class="card-img-top" alt="The Arrange Mariiage Murder">
        <div class="card-body">
          <h5 class="card-title">The Arrange Mariiage Murder</h5>
          <p class="card-text">
            A spine-chilling story of a young investigator unraveling the truth behind ghostly whispers.
          </p>
          <h6 class="text-primary mt-2">₹ 310</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Arrange Mariiage Murder', 310)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 6 -->
  <div class="col">
      <div class="card">
        <img src="fictional\Pride And Prejudice.jpg" class="card-img-top" alt="Pride And Prejudice">
        <div class="card-body">
          <h5 class="card-title">Pride And Prejudice</h5>
          <p class="card-text">
            A chilling story of a young investigator unraveling the truth behind ghostly whispers.
          </p>
          <h6 class="text-primary mt-2">₹ 240</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Pride And Prejudice', 240)">Add to Cart</button>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- JavaScript -->
<script>
  function addToCart(productName, price) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: productName, price });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${productName} has been added to your cart for ₹${price.toFixed(2)}!`);
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
