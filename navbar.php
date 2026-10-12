<nav class="navbar navbar-expand-lg bg-custom-dark navbar-dark sticky-top shadow-sm">
    <div class="container-fluid px-lg-5">
      
      <!-- BRAND LOGO ZONE -->
      <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
        <i class="bi bi-book brand-icon"></i>
        <div>
          <span class="brand-heading">IndiePages</span>
          <small class="brand-subtext">REAL AUTHORS. REAL STORIES.</small>
        </div>
      </a>

      <!-- COLLAPSIBLE NAVBAR CONTENT -->
      <div class="collapse navbar-collapse" id="mainNavigation">
        
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.php">Browse Books</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">For Authors</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="publish.php">Publish Your Book</a></li>
              <li><a class="dropdown-item" href="author-dashboard.php">Author Dashboard</a></li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

        <!-- RHS Utility item container -->
        <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0">
          
          <!-- Search Button -->
          <button class="search-button d-flex align-items-center justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#searchOffcanvas" aria-label="Search">
            <i class="bi bi-search"></i>
          </button>
        
          <!-- Account//Sign In -->
          <a href="account.php" class="nav-action d-flex align-items-center gap-1">
            <i class="bi bi-person"></i>
            <span class="d-none d-xl-inline">Sign In / Account</span>
          </a>

          <!-- Prev. Orders -->
          <a href="orders.php" class="nav-action d-flex align-items-center gap-1">
            <i class="bi bi-clock-history"></i>
            <span class="d-none d-xl-inline">Previous Orders</span>
          </a>

          <!-- Basket w//counter -->
          <a href="basket.php" class="nav-action position-relative d-flex align-items-center gap-1">
            <i class="bi bi-cart3"></i>
            <span class="d-none d-xl-inline">Basket</span>
            <span class="basket-count-badge d-flex align-items-center justify-content-center">0</span>
          </a>
        </div>
      </div>
    
    </div>
  </nav>

  <!-- Search button functions-->
  <div class="collapse bg-white shadow-sm" id="searchOffcanvas">
    <div class="offcanvas-header pt-3 px-3 py-3">

        <button type="button" class="btn-close" data-bs-toggle="collapse" data-bs-target="#searchOffcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body search-panel" data-bs-backdrop="false" data-bs-scroll="true">
        <div class="container">
            <!-- BASIC SEARCH -->
            <form action="search.php" method="GET">
                <div class="input-group py-3 mb-3">
                    <input type="text" name="q" class="form-control search-input" placeholder="Search for books, authors or keywords...">

                    <button class="btn btn-bookshop" type="submit">
                        <i class="bi bi-search"></i>Search</button>
                </div>
            </form>

<!-- ADVANCED SEARCH -->
            <div class="accordion mb-3" id="advancedSearch">
                <div class="accordion-item border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed advanced-search" type="button" data-bs-toggle="collapse" data-bs-target="#advancedSearchFields">
                            <i class="bi bi-sliders me-2"></i>Advanced Search</button>
                    </h2>

                    <div id="advancedSearchFields" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <form action="search.php" method="GET">
                                <div class="row g-3">

                                    <!-- GENRE -->
                                    <div class="col-md-4">
                                        <label class="form-label">Genre</label>
                                        <select name="genre" class="form-select">
                                            <option value="">All Genres</option>
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
                                        <label class="form-label">Tags</label>
                                        <input type="text" name="tags" class="form-control" placeholder="e.g. magic, adventure, mystery">
                                    </div>

                                    <!-- KEYWORDS -->
                                    <div class="col-md-4">
                                        <label class="form-label">Keywords </label>
                                        <input type="text" name="keywords" class="form-control" placeholder="Search keywords...">
                                    </div>

                                    <!-- PUBLICATION DATE -->
                                    <div class="col-md-4">
                                        <label class="form-label">Publication Date</label>
                                        <select name="publication_date" class="form-select">
                                            <option value="">Any Date</option>
                                            <option>Published this year</option>
                                            <option>
                                                Published in the last 2 years</option>
                                            <option>Published in the last 5 years</option>
                                            <option>Older books</option>
                                        </select>
                                    </div>

                                    <!-- TOTAL SALES -->
                                    <div class="col-md-4">
                                        <label class="form-label">Total Sales</label>
                                        <select name="sales" class="form-select">
                                            <option value="">Any</option>
                                            <option>Most sold</option>
                                            <option> Over 100 copies</option>
                                            <option>Over 500 copies</option>
                                            <option>Over 1,000 copies</option>
                                        </select>
                                    </div>

                                    <!-- RATING -->
                                    <div class="col-md-4">
                                        <label class="form-label">Average Rating</label>
                                        <select name="rating" class="form-select">
                                            <option value="">Any Rating</option>
                                            <option>4+ stars</option>
                                            <option>4.5+ stars</option>
                                            <option>4.8+ stars</option>
                                        </select>
                                    </div>

                                    <!-- SORT -->
                                    <div class="col-md-4">
                                        <label class="form-label">Sort By</label>

                                        <select name="sort" class="form-select">
                                            <option>Relevance</option>
                                            <option>Newest</option>
                                            <option>Most Sold</option>
                                            <option>Highest Rated</option>
                                            <option>Price: Low to High</option>
                                            <option>Price: High to Low</option>
                                        </select>
                                    </div>

                                    <!-- BUTTON -->
                                    <div class="col-md-8 d-flex align-items-end">
                                        <buttontype="submit" class="btn btn-bookshop"><i class="bi bi-search me-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>