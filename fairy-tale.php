<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fairy Tale Books</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      Background-image:linear-gradient(to top, #a8edea 0%, #fed6e3 100%);  
      padding: 20px;
    }
    .text-center {
    color:rgb(18, 18, 19); /* This is a deep indigo color to give a fairy tale vibe */
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
  <h1 class="text-center mb-5">Fairy Tale Books</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Book Card 1 -->
    <div class="col">
      <div class="card">
        <img src="fairy tale\The Little Mermaid.jpg" class="card-img-top" alt="The Little Mermaid">
        <div class="card-body">
          <h5 class="card-title">The Little Mermaid</h5>
          <p class="card-text" id="desc1">
            A beautiful tale of a mermaid who dreams of life on land and sacrifices everything for love.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc1', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 140</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Little Mermaid', 140)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 2 -->
    <div class="col">
      <div class="card">
        <img src="fairy tale\Cinderella.jpg" class="card-img-top" alt="Cinderella">
        <div class="card-body">
          <h5 class="card-title">Cinderella</h5>
          <p class="card-text" id="desc2">
            The classic story of a kind-hearted girl, her magical transformation, and a lost glass slipper.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc2', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 210</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Cinderella', 210)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 3 -->
    <div class="col">
      <div class="card">
        <img src="fairy tale\Snow White.jpg" class="card-img-top" alt="Snow White">
        <div class="card-body">
          <h5 class="card-title">Snow White</h5>
          <p class="card-text" id="desc3">
            Follow the adventures of Snow White, her escape from the wicked queen, and her friendship with the seven dwarfs.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc3', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 160</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Snow White', 160)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 4 -->
    <div class="col">
      <div class="card">
        <img src="fairy tale\Rapunzel.jpg" class="card-img-top" alt="Rapunzel">
        <div class="card-body">
          <h5 class="card-title">Rapunzel</h5>
          <p class="card-text" id="desc4">
            The enchanting story of a girl with long golden hair trapped in a tower and her quest for freedom.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 260</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Rapunzel', 260)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 5 -->
    <div class="col">
      <div class="card">
        <img src="fairy tale\Beauty and the Beast.jpg" class="card-img-top" alt="Beauty and the Beast">
        <div class="card-body">
          <h5 class="card-title">Beauty and the Beast</h5>
          <p class="card-text" id="desc5">
            A timeless tale of love and redemption that transcends appearances.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc5', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 310</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Beauty and the Beast', 310)">Add to Cart</button>
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
