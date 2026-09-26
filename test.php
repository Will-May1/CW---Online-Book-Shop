<?php
// =====================================================
// IndiePages - Homepage
// =====================================================

$pageTitle = "IndiePages | Discover Independent Authors";

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
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!--All Bootstrap Icons-->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        /*Colour Palate*/

        :root {
            --sage-light: #BEC5AD;
            --sage: #A4B494;
            --green: #519872;
            --dark-green: #3B5249;
            --plum: #34252F;
            --cream: #F7F6EF;
            --white: #FFFFFF;
        }


        /*Irrelevant stuff*/

        body {
            font-family: "DM Sans", sans-serif;
            background-color: var(--cream);
            color: var(--dark-green);
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Playfair Display", serif;
        }

        a {
            text-decoration: none;
        }

        .text-green {
            color: var(--green);
        }

        .text-dark-green {
            color: var(--dark-green);
        }


        /*nav bar*/

        .main-navbar {
            background-color: var(--dark-green);
            min-height: 74px;
            z-index: 1050;
        }

        .navbar-brand {
            color: var(--cream) !important;
            font-family: "Playfair Display", serif;
            font-size: 1.55rem;
            line-height: 1;
        }

        .navbar-brand small {
            display: block;
            font-family: "DM Sans", sans-serif;
            font-size: 0.55rem;
            letter-spacing: 2px;
            margin-top: 5px;
            color: var(--sage-light);
        }

        .brand-icon {
            font-size: 2.3rem;
            color: var(--sage-light);
        }

        .navbar-nav .nav-link {
            color: var(--sage-light) !important;
            margin: 0 8px;
            font-size: 0.92rem;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: white !important;
        }

        .navbar-nav .nav-link.active::after {
            content: "";
            position: absolute;
            bottom: -8px;
            left: 10px;
            right: 10px;
            height: 2px;
            background-color: var(--sage-light);
        }

        .nav-action {
            color: var(--cream);
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.82rem;
            white-space: nowrap;
        }

        .nav-action:hover {
            color: var(--sage-light);
        }

        .nav-action i {
            font-size: 1.2rem;
        }

        .search-button {
            width: 42px;
            height: 42px;
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 50%;
            color: white;
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: var(--green);
        }

        .basket-count {
            background-color: var(--sage-light);
            color: var(--dark-green);
            font-size: 0.65rem;
            min-width: 17px;
            height: 17px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: -7px;
            right: -9px;
        }


        /* =====================================================
           SEARCH PANEL
           ===================================================== */

        .search-panel {
            background-color: var(--cream);
            border: none;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 12px 30px rgba(52,37,47,0.2);
        }

        .search-input {
            border: 1px solid var(--sage);
            border-radius: 7px;
            padding: 12px 45px 12px 15px;
            background-color: white;
        }

        .search-input:focus {
            border-color: var(--green);
            box-shadow: 0 0 0 3px rgba(81,152,114,0.15);
        }

        .advanced-search {
            color: var(--dark-green);
            cursor: pointer;
            font-size: 0.85rem;
        }

        .advanced-search:hover {
            color: var(--green);
        }


        /* =====================================================
           BUTTONS
           ===================================================== */

        .btn-bookshop {
            background-color: var(--dark-green);
            border-color: var(--dark-green);
            color: white;
            border-radius: 30px;
            padding: 11px 23px;
        }

        .btn-bookshop:hover {
            background-color: var(--green);
            border-color: var(--green);
            color: white;
        }

        .btn-light-sage {
            background-color: var(--sage-light);
            color: var(--dark-green);
            border: none;
            border-radius: 30px;
            padding: 12px 24px;
        }

        .btn-light-sage:hover {
            background-color: white;
            color: var(--dark-green);
        }


        /* =====================================================
           HERO
           ===================================================== */

        .hero {
            min-height: 530px;
            background:
                linear-gradient(
                    90deg,
                    rgba(59,82,73,0.97) 0%,
                    rgba(59,82,73,0.92) 48%,
                    rgba(59,82,73,0.25) 100%
                ),
                url("images/hero-books.jpg") center/cover no-repeat;

            display: flex;
            align-items: center;
            color: white;
        }

        .hero h1 {
            font-size: clamp(3rem, 6vw, 5rem);
            line-height: 1.05;
        }

        .hero-subtitle {
            font-family: "Playfair Display", serif;
            font-size: 1.7rem;
        }

        .hero-text {
            max-width: 570px;
            color: var(--cream);
            font-size: 1.05rem;
            line-height: 1.7;
        }


        /* =====================================================
           FEATURES
           ===================================================== */

        .features {
            background-color: var(--sage-light);
            padding: 40px 0;
        }

        .feature-icon {
            width: 52px;
            height: 52px;
            border: 2px solid var(--green);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: var(--dark-green);
            font-size: 1.4rem;
            margin-bottom: 15px;
        }

        .feature-title {
            font-family: "Playfair Display", serif;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .feature-text {
            font-size: 0.82rem;
            color: var(--dark-green);
            opacity: 0.8;
        }


        /* =====================================================
           SECTION HEADINGS
           ===================================================== */

        .section-label {
            color: var(--green);
            letter-spacing: 2px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .section-title {
            font-size: 2.5rem;
            color: var(--dark-green);
        }

        .section-title::after {
            content: "";
            display: block;
            width: 45px;
            height: 2px;
            background-color: var(--green);
            margin-top: 10px;
        }


        /* =====================================================
           BOOK CARDS
           ===================================================== */

        .book-card {
            background: transparent;
            border: none;
            height: 100%;
        }

        .book-cover-wrapper {
            background-color: #e8e9df;
            padding: 8px;
            border-radius: 5px;
            aspect-ratio: 3 / 4.3;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .book-cover {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 2px;
            box-shadow: 0 4px 12px rgba(52,37,47,0.15);
        }

        .book-title {
            font-family: "DM Sans", sans-serif;
            font-weight: 700;
            font-size: 0.92rem;
            color: var(--dark-green);
            margin-top: 13px;
        }

        .book-author {
            font-size: 0.78rem;
            color: #68776f;
        }

        .book-rating {
            font-size: 0.75rem;
            color: var(--green);
        }

        .book-price {
            font-weight: 700;
            color: var(--plum);
            margin-top: 7px;
        }

        .add-basket {
            width: 100%;
            margin-top: 10px;
            padding: 8px 12px;
            border-radius: 30px;
            border: none;
            background-color: var(--dark-green);
            color: white;
            font-size: 0.78rem;
        }

        .add-basket:hover {
            background-color: var(--green);
        }


        /* =====================================================
           GENRES
           ===================================================== */

        .genres-section {
            background-color: var(--sage-light);
            position: relative;
            overflow: hidden;
        }

        .genre-card {
            background-color: var(--green);
            color: white;
            border-radius: 5px;
            padding: 25px 12px;
            text-align: center;
            transition: 0.2s;
        }

        .genre-card:hover {
            background-color: var(--dark-green);
            transform: translateY(-3px);
        }

        .genre-card i {
            display: block;
            font-size: 1.7rem;
            margin-bottom: 10px;
        }

        .genre-card span {
            font-size: 0.8rem;
        }


        /* =====================================================
           AUTHOR BANNER
           ===================================================== */

        .author-banner {
            min-height: 180px;
            border-radius: 8px;
            overflow: hidden;

            background:
                linear-gradient(
                    90deg,
                    rgba(52,37,47,0.15),
                    rgba(59,82,73,0.96)
                ),
                url("images/open-book.jpg") left center/cover no-repeat;

            color: white;
        }

        .author-banner h2 {
            font-size: 2rem;
        }


        /* =====================================================
           FOOTER
           ===================================================== */

        footer {
            background-color: var(--plum);
            color: var(--cream);
        }

        footer h5 {
            font-family: "DM Sans", sans-serif;
            font-size: 0.9rem;
            font-weight: 700;
        }

        footer a {
            color: var(--sage-light);
            font-size: 0.8rem;
        }

        footer a:hover {
            color: white;
        }

        .footer-brand {
            font-family: "Playfair Display", serif;
            font-size: 1.5rem;
        }

        .footer-tagline {
            color: var(--sage-light);
            font-size: 0.6rem;
            letter-spacing: 2px;
        }

        .newsletter-input {
            background-color: transparent;
            border: 1px solid var(--sage-light);
            color: white;
            border-radius: 5px 0 0 5px;
        }

        .newsletter-input::placeholder {
            color: var(--sage-light);
        }

        .newsletter-button {
            background-color: var(--sage-light);
            color: var(--dark-green);
            border: none;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.2);
            color: var(--sage-light);
            font-size: 0.75rem;
        }


        /* =====================================================
           MOBILE
           ===================================================== */

        @media (max-width: 991px) {

            .nav-action span {
                display: none;
            }

            .hero {
                min-height: 470px;
            }

            .navbar-nav {
                padding: 15px 0;
            }

        }

        @media (max-width: 767px) {

            .hero h1 {
                font-size: 3rem;
            }

            .hero-subtitle {
                font-size: 1.35rem;
            }

            .section-title {
                font-size: 2rem;
            }

        }

    </style>

</head>


<body>


<!-- =========================================================
     FIXED / ALWAYS VISIBLE TOP BAR
     ========================================================= -->

<nav class="navbar navbar-expand-lg main-navbar sticky-top">

    <div class="container-fluid px-lg-5">

        <!-- BRAND -->

        <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">

            <i class="bi bi-book brand-icon"></i>

            <div>
                IndiePages
                <small>REAL AUTHORS. REAL STORIES.</small>
            </div>

        </a>


        <!-- MOBILE MENU -->

        <button
            class="navbar-toggler border-0 text-white"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavigation"
        >
            <i class="bi bi-list fs-2"></i>
        </button>


        <!-- NAVIGATION -->

        <div
            class="collapse navbar-collapse"
            id="mainNavigation"
        >

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a
                        class="nav-link active"
                        href="index.php"
                    >
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="books.php"
                    >
                        Browse Books
                    </a>
                </li>

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        data-bs-toggle="dropdown"
                    >
                        For Authors
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a
                                class="dropdown-item"
                                href="publish.php"
                            >
                                Publish Your Book
                            </a>
                        </li>

                        <li>
                            <a
                                class="dropdown-item"
                                href="author-dashboard.php"
                            >
                                Author Dashboard
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="about.php"
                    >
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="contact.php"
                    >
                        Contact
                    </a>
                </li>

            </ul>


            <!-- RIGHT SIDE ACTIONS -->

            <div class="d-flex align-items-center gap-3">

                <!-- SEARCH -->

                <button
                    class="search-button"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#searchOffcanvas"
                    aria-label="Search"
                >
                    <i class="bi bi-search"></i>
                </button>


                <!-- ACCOUNT -->

                <a
                    href="account.php"
                    class="nav-action"
                >
                    <i class="bi bi-person"></i>
                    <span>Sign In / Account</span>
                </a>


                <!-- ORDERS -->

                <a
                    href="orders.php"
                    class="nav-action"
                >
                    <i class="bi bi-clock-history"></i>
                    <span>Previous Orders</span>
                </a>


                <!-- BASKET -->

                <a
                    href="basket.php"
                    class="nav-action position-relative"
                >
                    <i class="bi bi-cart3"></i>
                    <span>Basket</span>

                    <span class="basket-count">
                        0
                    </span>

                </a>

            </div>

        </div>

    </div>

</nav>



<!-- =========================================================
     SEARCH OFFCANVAS
     ========================================================= -->

<div
    class="offcanvas offcanvas-top"
    tabindex="-1"
    id="searchOffcanvas"
    style="height:auto;"
>

    <div class="offcanvas-header">

        <h5 class="offcanvas-title">
            Search IndiePages
        </h5>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
        ></button>

    </div>


    <div class="offcanvas-body search-panel">

        <div class="container">

            <!-- BASIC SEARCH -->

            <form
                action="search.php"
                method="GET"
            >

                <div class="input-group mb-3">

                    <input
                        type="text"
                        name="q"
                        class="form-control search-input"
                        placeholder="Search for books, authors or keywords..."
                    >

                    <button
                        class="btn btn-bookshop"
                        type="submit"
                    >
                        <i class="bi bi-search"></i>
                        Search
                    </button>

                </div>

            </form>


            <!-- ADVANCED SEARCH -->

            <div class="accordion" id="advancedSearch">

                <div class="accordion-item border-0">

                    <h2 class="accordion-header">

                        <button
                            class="accordion-button collapsed advanced-search"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#advancedSearchFields"
                        >
                            <i class="bi bi-sliders me-2"></i>
                            Advanced Search
                        </button>

                    </h2>


                    <div
                        id="advancedSearchFields"
                        class="accordion-collapse collapse"
                    >

                        <div class="accordion-body">

                            <form action="search.php" method="GET">

                                <div class="row g-3">

                                    <!-- GENRE -->

                                    <div class="col-md-4">

                                        <label class="form-label">
                                            Genre
                                        </label>

                                        <select
                                            name="genre"
                                            class="form-select"
                                        >

                                            <option value="">
                                                All Genres
                                            </option>

                                            <option>Fantasy</option>
                                            <option>Romance</option>
                                            <option>Thriller</option>
                                            <option>Mystery</option>
                                            <option>Science Fiction</option>
                                            <option>Horror</option>
                                            <option>Non-Fiction</option>
                                            <option>Young Adult</option>

                                        </select>

                                    </div>


                                    <!-- TAGS -->

                                    <div class="col-md-4">

                                        <label class="form-label">
                                            Tags
                                        </label>

                                        <input
                                            type="text"
                                            name="tags"
                                            class="form-control"
                                            placeholder="e.g. magic, adventure, mystery"
                                        >

                                    </div>


                                    <!-- KEYWORDS -->

                                    <div class="col-md-4">

                                        <label class="form-label">
                                            Keywords
                                        </label>

                                        <input
                                            type="text"
                                            name="keywords"
                                            class="form-control"
                                            placeholder="Search keywords..."
                                        >

                                    </div>


                                    <!-- PUBLICATION DATE -->

                                    <div class="col-md-4">

                                        <label class="form-label">
                                            Publication Date
                                        </label>

                                        <select
                                            name="publication_date"
                                            class="form-select"
                                        >

                                            <option value="">
                                                Any Date
                                            </option>

                                            <option>
                                                Published this year
                                            </option>

                                            <option>
                                                Published in the last 2 years
                                            </option>

                                            <option>
                                                Published in the last 5 years
                                            </option>

                                            <option>
                                                Older books
                                            </option>

                                        </select>

                                    </div>


                                    <!-- TOTAL SALES -->

                                    <div class="col-md-4">

                                        <label class="form-label">
                                            Total Sales
                                        </label>

                                        <select
                                            name="sales"
                                            class="form-select"
                                        >

                                            <option value="">
                                                Any
                                            </option>

                                            <option>
                                                Most sold
                                            </option>

                                            <option>
                                                Over 100 copies
                                            </option>

                                            <option>
                                                Over 500 copies
                                            </option>

                                            <option>
                                                Over 1,000 copies
                                            </option>

                                        </select>

                                    </div>


                                    <!-- RATING -->

                                    <div class="col-md-4">

                                        <label class="form-label">
                                            Average Rating
                                        </label>

                                        <select
                                            name="rating"
                                            class="form-select"
                                        >

                                            <option value="">
                                                Any Rating
                                            </option>

                                            <option>
                                                4+ stars
                                            </option>

                                            <option>
                                                4.5+ stars
                                            </option>

                                            <option>
                                                4.8+ stars
                                            </option>

                                        </select>

                                    </div>


                                    <!-- SORT -->

                                    <div class="col-md-4">

                                        <label class="form-label">
                                            Sort By
                                        </label>

                                        <select
                                            name="sort"
                                            class="form-select"
                                        >

                                            <option>
                                                Relevance
                                            </option>

                                            <option>
                                                Newest
                                            </option>

                                            <option>
                                                Most Sold
                                            </option>

                                            <option>
                                                Highest Rated
                                            </option>

                                            <option>
                                                Price: Low to High
                                            </option>

                                            <option>
                                                Price: High to Low
                                            </option>

                                        </select>

                                    </div>


                                    <!-- BUTTON -->

                                    <div class="col-md-8 d-flex align-items-end">

                                        <button
                                            type="submit"
                                            class="btn btn-bookshop"
                                        >
                                            <i class="bi bi-search me-1"></i>
                                            Advanced Search
                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- =========================================================
     HERO
     ========================================================= -->

<section class="hero">

    <div class="container">

        <div class="row">

            <div class="col-lg-7">

                <h1>
                    Own Your Story
                </h1>

                <div class="hero-subtitle mt-3">
                    Self-publish. Reach readers.<br>
                    Build your audience.
                </div>

                <p class="hero-text mt-3">

                    IndiePages is a platform for independent authors
                    to share their work with the world. Discover new
                    voices, unique stories and fresh perspectives.

                </p>

                <a
                    href="books.php"
                    class="btn btn-light-sage mt-3"
                >
                    Explore Books
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FEATURES
     ========================================================= -->

<section class="features">

    <div class="container">

        <div class="row g-4 text-center">

            <div class="col-6 col-lg">

                <div class="feature-icon">
                    <i class="bi bi-feather"></i>
                </div>

                <div class="feature-title">
                    Support Indie Authors
                </div>

                <div class="feature-text">
                    Help independent writers reach a wider audience.
                </div>

            </div>


            <div class="col-6 col-lg">

                <div class="feature-icon">
                    <i class="bi bi-book"></i>
                </div>

                <div class="feature-title">
                    Discover New Stories
                </div>

                <div class="feature-text">
                    Explore diverse genres and voices.
                </div>

            </div>


            <div class="col-6 col-lg">

                <div class="feature-icon">
                    <i class="bi bi-shield-check"></i>
                </div>

                <div class="feature-title">
                    Safe & Secure
                </div>

                <div class="feature-text">
                    Your purchases and data are protected.
                </div>

            </div>


            <div class="col-6 col-lg">

                <div class="feature-icon">
                    <i class="bi bi-people"></i>
                </div>

                <div class="feature-title">
                    Fair Royalties
                </div>

                <div class="feature-text">
                    Authors keep more of what they earn.
                </div>

            </div>


            <div class="col-12 col-lg">

                <div class="feature-icon">
                    <i class="bi bi-heart"></i>
                </div>

                <div class="feature-title">
                    A Community of Readers
                </div>

                <div class="feature-text">
                    Real people. Real support. Real stories.
                </div>

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     POPULAR BOOKS
     ========================================================= -->

<section class="py-5">

    <div class="container py-4">

        <div class="d-flex justify-content-between align-items-end mb-4">

            <div>

                <div class="section-label">
                    Featured Books
                </div>

                <h2 class="section-title mb-0">
                    Popular This Week
                </h2>

            </div>

            <a
                href="books.php"
                class="text-dark-green fw-semibold"
            >
                View All Books
                <i class="bi bi-arrow-right ms-1"></i>
            </a>

        </div>


        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">

            <?php foreach ($books as $book): ?>

                <div class="col">

                    <div class="book-card">

                        <div class="book-cover-wrapper">

                            <img
                                src="<?= htmlspecialchars($book['cover']) ?>"
                                alt="<?= htmlspecialchars($book['title']) ?>"
                                class="book-cover"
                            >

                        </div>


                        <div class="book-title">
                            <?= htmlspecialchars($book['title']) ?>
                        </div>

                        <div class="book-author">
                            <?= htmlspecialchars($book['author']) ?>
                        </div>


                        <div class="book-rating mt-2">

                            <?php
                            $rating = (float) $book['rating'];
                            $fullStars = floor($rating);
                            ?>

                            <?php for ($i = 1; $i <= 5; $i++): ?>

                                <?php if ($i <= $fullStars): ?>

                                    <i class="bi bi-star-fill"></i>

                                <?php else: ?>

                                    <i class="bi bi-star"></i>

                                <?php endif; ?>

                            <?php endfor; ?>

                            <span class="ms-1">
                                <?= $book['rating'] ?>
                                (<?= $book['reviews'] ?>)
                            </span>

                        </div>


                        <div class="book-price">
                            £<?= htmlspecialchars($book['price']) ?>
                        </div>


                        <button
                            class="add-basket"
                            onclick="addToBasket('<?= htmlspecialchars($book['title'], ENT_QUOTES) ?>')"
                        >

                            <i class="bi bi-cart3 me-1"></i>

                            Add to Basket

                        </button>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>



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