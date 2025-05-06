let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}

window.onscroll = () =>{
  searchForm.classList.remove('active');

  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }
}

window.onload = () =>{
  if(window.scrollY > 80){
    document.querySelector('.header .header-2').classList.add('active');
  }else{
    document.querySelector('.header .header-2').classList.remove('active');
  }

  fadeOut();
}

function loader(){
  document.querySelector('.loader-container').classList.add('active');
}

function fadeOut(){
  setTimeout(loader, 4000);
}

var swiper = new Swiper(".books-slider", {
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".featured-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    450: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 4,
    },
  },
});

var swiper = new Swiper(".arrivals-slider", {
  spaceBetween: 10,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor:true,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".blogs-slider", {
  spaceBetween: 10,
  grabCursor:true,
  loop:true,
  centeredSlides: true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

// ========== Search Functionality ==========
document.addEventListener("DOMContentLoaded", function() {
    let searchBox = document.getElementById('search-box');
    let resultsContainer = document.getElementById('search-results'); // Make sure to add this element in your HTML

    if (searchBox) {
        searchBox.addEventListener('keyup', function() {
            let query = this.value.toLowerCase();

            // Full list of books
            let books = [
                "Dark Verse Series",
                "Grandma's Bag of Stories",
                "Do It Today",
                "A Good Girl's Guide to Murder",
                "Rich Dad Poor Dad",
                "It Ends With Us",
                "Too Good To Be True",
                "The Adventures of Sherlock Holmes",
                "The Power of Your Subconscious Mind",
                "Samsara",
                "Jungle Book",
                "Hanuman",
                "Panchatantra",
                "Jataka Tales",
                "Vikram and Betaal",
                "Akbar and Birbal",
                "The Hound of the Baskervilles",
                "Death on the Nile",
                "Sharp Objects",
                "Angels and Demons",
                "Big Little Lies",
                "The Detective",
                "Murder on the Orient Express",
                "Gone Girl",
                "The Da Vinci Code",
                "Curious Incident of the Dog in the Night",
                "A Murder in Dehradun",
                "Dune",
                "Foundation",
                "Neuromancer",
                "Hyperion",
                "Snow Crash",
                "Red Mars",
                "The Mystery of the Forgotten Forest",
                "Galactic Odyssey",
                "The Dragon's Legend",
                "Chronos Crossing",
                "The Arranged Marriage Murder",
                "Pride and Prejudice",
                "The Little Mermaid",
                "Cinderella",
                "Snow White",
                "Rapunzel",
                "Beauty and the Beast",
                "The Ramayan",
                "The Mahabharata",
                "Bhagavad Gita",
                "Shiva Purana",
                "Vishnu Purana",
                "Steve Jobs",
                "Long Walk to Freedom",
                "Becoming",
                "Einstein",
                "Mary Kom",
                "A.P.J Abdul Kalam"
            ];

            // Filter books based on the query
            let filteredBooks = books.filter(function(book) {
                return book.toLowerCase().includes(query);
            });

            // Display the results
            resultsContainer.innerHTML = '';
            if (filteredBooks.length > 0) {
                filteredBooks.forEach(function(book) {
                    resultsContainer.innerHTML += `<p>${book}</p>`;
                });
            } else {
                resultsContainer.innerHTML = '<p>No results found.</p>';
            }
        });
    }
});
