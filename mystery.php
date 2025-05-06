<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mystery Book Collection</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    body {
      background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
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
  <h1 class="text-center mb-5">Mystery Book Collection</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Book Card 1 -->
    <div class="col">
      <div class="card">
        <img src="mystery\The Adventures of Sherlock Holmes.jpg" class="card-img-top" alt="The Adventures of Sherlock Holmes">
        <div class="card-body">
          <h5 class="card-title">The Adventures of Sherlock Holmes</h5>
          <p class="card-text" id="desc1">
            A classic collection of twelve mysteries where Sherlock Holmes, the iconic detective, unravels the most perplexing crimes.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc1', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 204</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Adventures of Sherlock Holmes', 204)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 2 -->
    <div class="col">
      <div class="card">
        <img src="mystery\Murder on the Orient Express.jpg" class="card-img-top" alt="Murder on the Orient Express">
        <div class="card-body">
          <h5 class="card-title">Murder on the Orient Express</h5>
          <p class="card-text" id="desc2">
            Hercule Poirot faces one of his most challenging cases on a snowbound train, uncovering a web of secrets.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc2', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 199</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Murder on the Orient Express', 199)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 3 -->
    <div class="col">
      <div class="card">
        <img src="mystery\Gone Girl.jpg" class="card-img-top" alt="Gone Girl">
        <div class="card-body">
          <h5 class="card-title">Gone Girl</h5>
          <p class="card-text" id="desc3">
            A psychological thriller by Gillian Flynn that delves into the complexities of marriage and manipulation.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc3', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 145</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Gone Girl', 145)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 4 -->
    <div class="col">
      <div class="card">
        <img src="mystery\The Da Vinci Code.jpg" class="card-img-top" alt="The Da Vinci Code">
        <div class="card-body">
          <h5 class="card-title">The Da Vinci Code</h5>
          <p class="card-text" id="desc4">
            A gripping mystery thriller by Dan Brown that explores secret codes and conspiracies in religious history.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 249</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Da Vinci Code', 249)">Add to Cart</button>
        </div>
      </div>
    </div>
       

    <!-- Book Card 5 -->
    <div class="col">
      <div class="card">
        <img src="mystery\Curious Incident of the Dog in the Night.jpg" class="card-img-top" alt="Curious Incident of the Dog in the Night ">
        <div class="card-body">
          <h5 class="card-title">Curious Incident of the Dog in the Night </h5>
          <p class="card-text" id="desc3">
          This is Christopher's murder mystery story. There are also no lies in this story because Christopher can't tell lies.          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc3', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 149</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Gone Girl', 149)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Book Card 6 -->
    <div class="col">
      <div class="card">
        <img src="mystery\Gone Girl.jpg" class="card-img-top" alt="A Murder In Dehradun">
        <div class="card-body">
          <h5 class="card-title">A Murder In Dehradun</h5>
          <p class="card-text" id="desc3">
            A Murder In Dehradun is a murder mystery novel by Siddhart Maheshwari.It is an exiting gripping story about wealthy Dinshaw family.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc3', this)">Show More</button>
          <h6 class="text-primary mt-2">₹ 299</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Gone Girl', 299)">Add to Cart</button>
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
