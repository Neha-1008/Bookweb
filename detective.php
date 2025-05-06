<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
  <h1 class="text-center mb-5">Detective/Mystery Book Collection</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Book Card 1 -->
    <div class="col">
      <div class="card">
        <img src="detective\The Hound of the Baskervilles.jpg" class="card-img-top" alt="Sherlock Holmes">
        <div class="card-body">
          <h5 class="card-title">The Hound of the Baskervilles</h5>
          <p class="card-text">
            A gripping tale of a supernatural hound terrorizing the Baskerville family, with Sherlock Holmes on the case.
          </p>
          <h6 class="text-primary mt-2">₹ 340</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Hound of the Baskervilles', 340)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 2 -->
    <div class="col">
      <div class="card">
        <img src="detective\Death on the Nile.jpg" class="card-img-top" alt="Hercule Poirot">
        <div class="card-body">
          <h5 class="card-title">Death on the Nile</h5>
          <p class="card-text">
            Hercule Poirot investigates a murder mystery during a luxurious cruise on the Nile River.
          </p>
          <h6 class="text-primary mt-2">₹ 360</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Death on the Nile', 360)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 3 -->
    <div class="col">
      <div class="card">
        <img src="detective\Sharp Objects.jpg" class="card-img-top" alt="Gone Girl">
        <div class="card-body">
          <h5 class="card-title">Sharp Objects</h5>
          <p class="card-text">
            A chilling psychological thriller about a journalist uncovering dark secrets in her hometown.
          </p>
          <h6 class="text-primary mt-2">₹ 400</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Sharp Objects', 400)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 4 -->
    <div class="col">
      <div class="card">
        <img src="detective\Angels & Demons.jpg" class="card-img-top" alt="The Da Vinci Code">
        <div class="card-body">
          <h5 class="card-title">Angels & Demons</h5>
          <p class="card-text">
            Robert Langdon embarks on a thrilling adventure to uncover an ancient secret society.
          </p>
          <h6 class="text-primary mt-2">₹ 450</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Angels & Demons', 450)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 5 -->
    <div class="col">
      <div class="card">
        <img src="detective\Big Little Lies.jpg" class="card-img-top" alt="Big Little Lies">
        <div class="card-body">
          <h5 class="card-title">Big Little Lies</h5>
          <p class="card-text">
            A suspenseful novel filled with secrets, lies, and a shocking murder.
          </p>
          <h6 class="text-primary mt-2">₹150</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Big Little Lies', 150)">Add to Cart</button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card">
        <img src="Images\good girl guide to murder.jpg" class="card-img-top" alt="Hercule Poirot">
        <div class="card-body">
          <h5 class="card-title">Good Girls Guide To Murder</h5>
          <p class="card-text">
            A Girl investigates a murder mystery during a luxurious cruise on the Nile River.
          </p>
          <h6 class="text-primary mt-2">₹ 317</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Death on the Nile', 317)">Add to Cart</button>
        </div>
      </div>
    </div>

    
    <div class="col">
      <div class="card">
        <img src="Images\The advenchure of Sherlock.jpg" class="card-img-top" alt="Hercule Poirot">
        <div class="card-body">
          <h5 class="card-title">The adventure of sherlock holmes</h5>
          <p class="card-text">
          A gripping tale of a supernatural hound terrorizing the Baskerville family, with Sherlock Holmes on the case.
          </p>
          <h6 class="text-primary mt-2">₹ 189</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The adventure of sherlock holmes', 189)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 6 -->
    <div class="col">
      <div class="card">
        <img src="detective\thedetective.jpg" class="card-img-top" alt="Big Little Lies">
        <div class="card-body">
          <h5 class="card-title">The Detective</h5>
          <p class="card-text">
            A suspenseful novel filled with secrets, lies, and a shocking murder.
          </p>
          <h6 class="text-primary mt-2">₹350</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Big Little Lies', 350)">Add to Cart</button>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
  function addToCart(bookName, price) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: bookName, price });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${bookName} has been added to your cart for ₹${price}!`);
  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
