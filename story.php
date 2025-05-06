<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Storybooks Collection</title>
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
  <h1 class="text-center mb-5">Storybooks Collection</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Book Card 1 -->
    <div class="col">
      <div class="card">
        <img src="story\jungle book.jpg" class="card-img-top" alt="Ramayana">
        <div class="card-body">
          <h5 class="card-title">Jungle Book</h5>
          <p class="card-text">
            An epic tale of Lord Mogali's journey, featuring valor, devotion, and moral values. A timeless story of good triumphing over evil.
          </p>
          <h6 class="text-primary mt-2">₹ 145</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Ramayana',145 )">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 2 -->
    <div class="col">
      <div class="card">
        <img src="story\hanuman.jpg" class="card-img-top" alt="Mahabharata">
        <div class="card-body">
          <h5 class="card-title">Hanuman</h5>
          <p class="card-text">
            A grand narrative of hanuman conflict, divine interventions, and life lessons from ancient India. Features the Bhagavad Gita.
          </p>
          <h6 class="text-primary mt-2">₹ 199</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Mahabharata', 199)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 3 -->
    <div class="col">
      <div class="card">
        <img src="story\Panchatantra.jpg" class="card-img-top" alt="Panchatantra">
        <div class="card-body">
          <h5 class="card-title">Panchatantra</h5>
          <p class="card-text">
            A collection of animal fables that teach life lessons and moral values. Perfect for children and adults alike.
          </p>
          <h6 class="text-primary mt-2">₹129</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Panchatantra', 129)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 4 -->
    <div class="col">
      <div class="card">
        <img src="story\Jataka Tales.jpg" class="card-img-top" alt="Jataka Tales">
        <div class="card-body">
          <h5 class="card-title">Jataka Tales</h5>
          <p class="card-text">
            Tales of Buddha's past lives filled with wisdom, compassion, and teachings about karma and ethics.
          </p>
          <h6 class="text-primary mt-2">₹ 200</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Jataka Tales', 200)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 5 -->
    <div class="col">
      <div class="card">
        <img src="story\Vikram and Betaal.jpg" class="card-img-top" alt="Vikram and Betaal">
        <div class="card-body">
          <h5 class="card-title">Vikram and Betaal</h5>
          <p class="card-text">
            Stories of King Vikram and the witty ghost Betaal, known for their clever riddles and moral dilemmas.
          </p>
          <h6 class="text-primary mt-2">₹ 145</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Vikram and Betaal', 145)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 6 -->
    <div class="col">
      <div class="card">
        <img src="story\Akbar and Birbal.jpg" class="card-img-top" alt="Akbar and Birbal">
        <div class="card-body">
          <h5 class="card-title">Akbar and Birbal</h5>
          <p class="card-text">
            Humorous and insightful tales of Emperor Akbar and his clever advisor Birbal, offering wisdom with wit.
          </p>
          <h6 class="text-primary mt-2">₹ 126</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Akbar and Birbal', 126)">Add to Cart</button>
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
