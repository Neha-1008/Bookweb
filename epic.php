<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Indian Epic Books Collection</title>
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
  <h1 class="text-center mb-5">Indian Epic Books Collection</h1>
  <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3">

    <!-- Card 1 -->
    <div class="col">
      <div class="card">
        <img src="epic book\ramayan.jpg" class="card-img-top" alt="The Ramayana">
        <div class="card-body">
          <h5 class="card-title">The Ramayana</h5>
          <p class="card-text" id="desc1">
            A timeless Indian epic by Valmiki, chronicling the heroic journey of Lord Rama to rescue Sita and uphold dharma.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc1', this)">Show More</button>
          <h6 class="text-primary mt-2">₹499</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Ramayana', 499)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col">
      <div class="card">
        <img src="epic book\mahabhart.jpg" class="card-img-top" alt="The Mahabharata">
        <div class="card-body">
          <h5 class="card-title">The Mahabharata</h5>
          <p class="card-text" id="desc2">
            India’s longest epic by Vyasa, telling the story of the Kauravas and Pandavas, filled with wisdom and lessons of life.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc2', this)">Show More</button>
          <h6 class="text-primary mt-2">₹799</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('The Mahabharata', 799)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col">
      <div class="card">
        <img src="epic book\gita.jpg" class="card-img-top" alt="Bhagavad Gita">
        <div class="card-body">
          <h5 class="card-title">Bhagavad Gita</h5>
          <p class="card-text" id="desc3">
            The Song of God – a divine dialogue between Krishna and Arjuna, guiding humanity on life and spirituality.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc3', this)">Show More</button>
          <h6 class="text-primary mt-2">₹299</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Bhagavad Gita', 299)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col">
      <div class="card">
        <img src="epic book\panchtantr.jpg" class="card-img-top" alt="Panchatantra">
        <div class="card-body">
          <h5 class="card-title">Panchatantra</h5>
          <p class="card-text" id="desc4">
            A classic collection of moral fables and ancient wisdom, teaching lessons through stories of animals and kings.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹399</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Panchatantra', 399)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col">
      <div class="card">
        <img src="epic book\shivPuran.jpg" class="card-img-top" alt="Shiva Purana">
        <div class="card-body">
          <h5 class="card-title">Shiva Purana</h5>
          <p class="card-text" id="desc5">
            Stories and teachings revolving around Lord Shiva, filled with devotion, spirituality, and mythology.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc5', this)">Show More</button>
          <h6 class="text-primary mt-2">540</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Shiva Purana', 599)">Add to Cart</button>
        </div>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col">
      <div class="card">
        <img src="epic book\vishnu.jpg" class="card-img-top" alt="Vishnu Purana">
        <div class="card-body">
          <h5 class="card-title">Vishnu Purana</h5>
          <p class="card-text" id="desc6">
            A sacred text narrating the tales of Lord Vishnu, his avatars, and his role in maintaining cosmic balance.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc6', this)">Show More</button>
          <h6 class="text-primary mt-2">₹549</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Vishnu Purana', 549)">Add to Cart</button>
        </div>
      </div>
    </div>

  </div>
</div>


    <!-- Card 4 -->
    <div class="col">
      <div class="card">
        <img src="Images\samsara.jpg" class="card-img-top" alt="Panchatantra">
        <div class="card-body">
          <h5 class="card-title">Samsara</h5>
          <p class="card-text" id="desc4">
            A classic collection of moral fables and ancient wisdom, teaching lessons through stories of animals and kings.
          </p>
          <button class="btn-show-more" onclick="toggleDescription('desc4', this)">Show More</button>
          <h6 class="text-primary mt-2">₹146</h6>
          <button class="btn btn-primary w-100" onclick="addToCart('Samsara', 146)">Add to Cart</button>
        </div>
      </div>
    </div>

<!-- JavaScript -->
<script>
  function addToCart(productName, price) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: productName, price });
    localStorage.setItem('cart', JSON.stringify(cart));
    alert(`${productName} has been added to your cart for ₹${price}!`);
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
