<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Science Fiction Book Collection</title>
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
      transition: height 0.3s ease;
    }

    .card-text.expanded {
      -webkit-line-clamp: unset;
      height: auto;
    }

    .btn-show-more {
      background: none;
      border: none;
      color: #007bff;
      padding: 0;
      font-size: 0.875rem;
      cursor: pointer;
    }

    .btn-show-more:hover {
      text-decoration: underline;
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
  <h1 class="text-center mb-5">Science Fiction Book Collection</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Book Card 1 -->
    <div class="col">
      <div class="card">
        <img src="science\Dune.jpg" class="card-img-top" alt="Dune">
        <div class="card-body">
          <h5 class="card-title">Dune</h5>
          <p class="card-text" id="desc1">
            A masterpiece by Frank Herbert, exploring politics, religion, and survival on the desert planet Arrakis.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc1', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 249</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Dune', 249)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 2 -->
    <div class="col">
      <div class="card">
        <img src="science\Foundation.jpg" class="card-img-top" alt="Foundation">
        <div class="card-body">
          <h5 class="card-title">Foundation</h5>
          <p class="card-text" id="desc2">
            Isaac Asimov's epic saga of the Galactic Empire and the fall of civilization as predicted by psychohistory.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc2', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 189</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Foundation', 189)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 3 -->
    <div class="col">
      <div class="card">
        <img src="science\Neuromancer.jpg" class="card-img-top" alt="Neuromancer">
        <div class="card-body">
          <h5 class="card-title">Neuromancer</h5>
          <p class="card-text" id="desc3">
            William Gibson's groundbreaking cyberpunk novel about a washed-up computer hacker hired for a final heist.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc3', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 149</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Neuromancer', 149)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 4 -->
    <div class="col">
      <div class="card">
        <img src="science\Hyperion.jpg" class="card-img-top" alt="Hyperion">
        <div class="card-body">
          <h5 class="card-title">Hyperion</h5>
          <p class="card-text" id="desc4">
            Dan Simmons' epic tale of seven pilgrims and their journey to confront the mysterious Shrike.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 199</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Hyperion', 199)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 5 -->
    <div class="col">
      <div class="card">
        <img src="science\Snow Crash.jpg" class="card-img-top" alt="Snow Crash">
        <div class="card-body">
          <h5 class="card-title">Snow Crash</h5>
          <p class="card-text" id="desc5">
            Neal Stephenson's action-packed story of a computer virus and the Metaverse.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc5', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 169</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Snow Crash', 169)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 6 -->
    <div class="col">
      <div class="card">
        <img src="science\Red Mars.jpg" class="card-img-top" alt="Red Mars">
        <div class="card-body">
          <h5 class="card-title">Red Mars</h5>
          <p class="card-text" id="desc6">
            Kim Stanley Robinson's vivid depiction of humanity's colonization and terraforming of Mars.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc6', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 229</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Red Mars', 229)">Add to Cart</button>
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

  function toggleDescription(id, button) {
    const desc = document.getElementById(id);
    if (desc.style.maxHeight === "none") {
      desc.style.maxHeight = "3em";
      button.textContent = "Show More";
    } else {
      desc.style.maxHeight = "none";
      button.textContent = "Show Less";
    }
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
