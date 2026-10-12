<?php

// Example book data.
// Later, this can come from your MySQL database.
$books = [
    [
        "title" => "The Last Trail",
        "author" => "J. R. Whitmore",
        "price" => "8.99",
        "rating" => "1.7",
        "reviews" => 128,
        "cover" => "images/books/last-trail.jpg"
    ],
    [
        "title" => "A Quiet Heart",
        "author" => "E. L. Brooks",
        "price" => "7.99",
        "rating" => "4.5",
        "reviews" => 96,
        "cover" => "images/books/quiet-heart.jpg"
    ],
    [
        "title" => "The Hidden Coast",
        "author" => "S. M. Ellison",
        "price" => "9.99",
        "rating" => "4.8",
        "reviews" => 203,
        "cover" => "images/books/hidden-coast.jpg"
    ],
    [
        "title" => "The Ashen Throne",
        "author" => "K. D. Vance",
        "price" => "10.99",
        "rating" => "4.6",
        "reviews" => 141,
        "cover" => "images/books/ashen-throne.jpg"
    ],
    [
        "title" => "Letters to a Younger Me",
        "author" => "T. L. Harper",
        "price" => "6.99",
        "rating" => "4.3",
        "reviews" => 72,
        "cover" => "images/books/letters.jpg"
    ]
];
?>

<!DOCTYPE html>
<head>
  <link href="sheet.css" rel="stylesheet"> 
</head>
<body>












<!-- =========================================================
     GENRES
     ========================================================= -->

<section class="genres-section py-5">

    <div class="container py-3">

        <div class="row align-items-center g-4">

            <div class="col-lg-4">

                <div class="section-label">
                    Browse By Genre
                </div>

                <h2 class="section-title">
                    Find Your Next Read
                </h2>

                <p>
                    From fantasy to memoirs, romance to thrillers,
                    there's something for every reader.
                </p>

                <a
                    href="genres.php"
                    class="btn btn-bookshop"
                >
                    Browse All Genres
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>

            </div>


            <div class="col-lg-8">

                <div class="row g-3">

                    <div class="col-4 col-md-2">

                        <a href="books.php?genre=fantasy">

                            <div class="genre-card">

                                <i class="bi bi-stars"></i>

                                <span>
                                    Fantasy
                                </span>

                            </div>

                        </a>

                    </div>


                    <div class="col-4 col-md-2">

                        <a href="books.php?genre=romance">

                            <div class="genre-card">

                                <i class="bi bi-heart"></i>

                                <span>
                                    Romance
                                </span>

                            </div>

                        </a>

                    </div>


                    <div class="col-4 col-md-2">

                        <a href="books.php?genre=thriller">

                            <div class="genre-card">

                                <i class="bi bi-mask"></i>

                                <span>
                                    Thriller
                                </span>

                            </div>

                        </a>

                    </div>


                    <div class="col-4 col-md-2">

                        <a href="books.php?genre=scifi">

                            <div class="genre-card">

                                <i class="bi bi-stars"></i>

                                <span>
                                    Sci-Fi
                                </span>

                            </div>

                        </a>

                    </div>


                    <div class="col-4 col-md-2">

                        <a href="books.php?genre=mystery">

                            <div class="genre-card">

                                <i class="bi bi-search"></i>

                                <span>
                                    Mystery
                                </span>

                            </div>

                        </a>

                    </div>


                    <div class="col-4 col-md-2">

                        <a href="books.php?genre=nonfiction">

                            <div class="genre-card">

                                <i class="bi bi-book"></i>

                                <span>
                                    Non-Fiction
                                </span>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     AUTHOR CTA
     ========================================================= -->

<section class="py-5">

    <div class="container">

        <div class="author-banner">

            <div class="row h-100 align-items-center">

                <div class="col-md-5">
                    <!-- Image area -->
                </div>

                <div class="col-md-7 p-4 p-lg-5">

                    <h2>
                        Are You an Author?
                    </h2>

                    <p>
                        Join IndiePages and get your work in front
                        of thousands of readers. It's free, easy,
                        and built for independent creators.
                    </p>

                    <a
                        href="publish.php"
                        class="btn btn-light-sage"
                    >
                        Start Publishing
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FOOTER
     ========================================================= -->

<footer class="pt-5 pb-3">

    <div class="container">

        <div class="row g-5">

            <!-- BRAND -->

            <div class="col-lg-4">

                <div class="d-flex align-items-center gap-2">

                    <i class="bi bi-book fs-1"></i>

                    <div>

                        <div class="footer-brand">
                            IndiePages
                        </div>

                        <div class="footer-tagline">
                            REAL AUTHORS. REAL STORIES.
                        </div>

                    </div>

                </div>

            </div>


            <!-- QUICK LINKS -->

            <div class="col-6 col-lg-2">

                <h5>
                    Quick Links
                </h5>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="index.php">Home</a>
                    </li>

                    <li class="mb-2">
                        <a href="books.php">Browse Books</a>
                    </li>

                    <li class="mb-2">
                        <a href="publish.php">For Authors</a>
                    </li>

                    <li class="mb-2">
                        <a href="about.php">About</a>
                    </li>

                    <li class="mb-2">
                        <a href="contact.php">Contact</a>
                    </li>

                </ul>

            </div>


            <!-- ACCOUNT -->

            <div class="col-6 col-lg-2">

                <h5>
                    Account
                </h5>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="account.php">
                            Sign In
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="register.php">
                            Create Account
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="orders.php">
                            Previous Orders
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="basket.php">
                            Basket
                        </a>
                    </li>

                </ul>

            </div>


            <!-- NEWSLETTER -->

            <div class="col-lg-4">

                <h5>
                    Stay in Touch
                </h5>

                <form
                    action="newsletter.php"
                    method="POST"
                >

                    <div class="input-group">

                        <input
                            type="email"
                            name="email"
                            class="form-control newsletter-input"
                            placeholder="Your email address"
                            required
                        >

                        <button
                            class="btn newsletter-button"
                            type="submit"
                        >
                            <i class="bi bi-arrow-right"></i>
                        </button>

                    </div>

                </form>


                <div class="d-flex gap-3 mt-3">

                    <a href="#">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-twitter-x fs-5"></i>
                    </a>

                    <a href="#">
                        <i class="bi bi-youtube fs-5"></i>
                    </a>

                </div>

            </div>

        </div>


        <!-- FOOTER BOTTOM -->

        <div class="footer-bottom mt-5 pt-3">

            <div class="row">

                <div class="col-md-6">

                    &copy; <?= date("Y") ?>
                    IndiePages&reg;. All rights reserved.

                </div>

                <div class="col-md-6 text-md-end">

                    <a href="terms.php" class="me-3">
                        Terms & Conditions
                    </a>

                    <a href="privacy.php" class="me-3">
                        Privacy Policy
                    </a>

                    <a href="help.php">
                        Help
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>



<!-- =========================================================
     JAVASCRIPT
     ========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<script>

    function addToBasket(bookTitle) {

        // Temporary behaviour.
        // Later this can send the book ID to a PHP basket system.

        alert(bookTitle + " has been added to your basket.");

    }

</script>


</body>
</html>