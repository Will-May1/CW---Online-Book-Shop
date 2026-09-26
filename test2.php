<!DOCTYPE html>

<head>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndiePages</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--All Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

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
                <a href="basket.php" class="nav-action position-relative">
                    <i class="bi bi-cart3"></i>
                    <span>Basket</span>

                    <span class="basket-count">0</span>
                </a>
            </div>
        </div>
    </div>
</nav>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
<script>
    function addToBasket(bookTitle) {
        // Later send the item to a basket with SQL database
        alert(bookTitle + " has been added to your basket.");
    }
</script>

</body>
</html>