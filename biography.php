<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biography Collection</title>
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
  <h1 class="text-center mb-5">Biography Collection</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Biography Card 1 -->
    <div class="col">
      <div class="card">
        <img src="biography\Steve Jobs.jpg" class="card-img-top" alt="Steve Jobs Biography">
        <div class="card-body">
          <h5 class="card-title">Steve Jobs</h5>
          <p class="card-text" id="desc1">
            A compelling biography by Walter Isaacson, offering a fascinating insight into the life of the visionary co-founder of Apple.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc1', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 246</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Steve Jobs', 246)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Biography Card 2 -->
    <div class="col">
      <div class="card">
        <img src="biography\Long Walk to Freedom.jpg" class="card-img-top" alt="Nelson Mandela Biography">
        <div class="card-body">
          <h5 class="card-title">Long Walk to Freedom</h5>
          <p class="card-text" id="desc2">
            Nelson Mandela’s autobiography, chronicling his journey from a young activist to becoming South Africa’s first Black president.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc2', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 189</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Long Walk to Freedom', 189)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Biography Card 3 -->
    <div class="col">
      <div class="card">
        <img src="biography\Becoming.jpg" class="card-img-top" alt="Michelle Obama Biography">
        <div class="card-body">
          <h5 class="card-title">Becoming</h5>
          <p class="card-text" id="desc3">
            Michelle Obama’s inspiring memoir, sharing her extraordinary journey as the First Lady of the United States.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc3', this)">Show More</button>
          <h6 class="text-primary mt-2">₹229</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Becoming', 229)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Biography Card 4 -->
    <div class="col">
      <div class="card">
        <img src="biography\Einstein His Life and Universe.jpg" class="card-img-top" alt="Albert Einstein Biography">
        <div class="card-body">
          <h5 class="card-title">Einstein: His Life and Universe</h5>
          <p class="card-text" id="desc4">
            Walter Isaacson’s biography, exploring the life of Albert Einstein and his groundbreaking contributions to science.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 269</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Einstein: His Life and Universe', 269)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Biography Card 5 -->
    <div class="col">
      <div class="card">
        <img src="biography\mary kom.jpg" class="card-img-top" alt="Albert Einstein Biography">
        <div class="card-body">
          <h5 class="card-title">Mary Kom</h5>
          <p class="card-text" id="desc4">
          The Life of Mary Kom. Written by the great boxing champion herself, 'Unbreakable' is not just a story of how Mary Kom fought against all the odds to become 
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 269</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Einstein: His Life and Universe', 269)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Biography Card 4 -->
    <div class="col">
      <div class="card">
        <img src="biography\abdul.jpg" class="card-img-top" alt="Albert Einstein Biography">
        <div class="card-body">
          <h5 class="card-title">A.P.J Abdul kalam</h5>
          <p class="card-text" id="desc4">
          Wings of Fire is an autography of APJ Abdul Kalam covering his early life and his work in Indian space research and missile programs.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 269</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Einstein: His Life and Universe', 269)">Add to Cart</button>
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
