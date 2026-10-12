<?php
session_start();
$_SESSION['showconnect'] = 0;
include_once("connection.php");

try {
    $books          = [];
    $allowedAge     = 12; // Start with books posted up to 12 months (1 year) ago
    $maxAgeLimit    = 60; // Safeguard limit at 5 years
    
    while (count($books) < 5 && $allowedAge <= $maxAgeLimit) {
        // 1. Fetch raw product data along with the data queue metrics
        $query = "SELECT ProductID, Title, Author, Cover, date_posted, Rating, RevCount, PRICE, sales_queue, queue_pointer 
                  FROM tblproducts 
                  WHERE date_posted >= NOW() - INTERVAL ? MONTH";
                  
        $stmt = $conn->prepare($query);
        $stmt->execute([$allowedAge]);
        $rawProducts = $stmt->fetchAll();
        
        $processedBooks = [];
        
        foreach ($rawProducts as $product) {
            // 2. Explode your comma-separated string into a clean PHP numerical array
            $queue = explode(',', $product['sales_queue']);
            $pointer = (int)$product['queue_pointer'];
            
            $weeklySalesSum = 0;
            
            // 3. Loop backwards exactly 7 times from our current pointer slot to sum up the week's sales velocity
            for ($d = 0; $i < 7; $i++) {
                // Modulo math keeps our index wraps locked inside your circular queue array constraints (0-29)
                $targetIndex = ($pointer - $d + 30) % 30;
                $weeklySalesSum += (int)($queue[$targetIndex] ?? 0);
            }
            
            // Map the calculated dynamic week total onto a tracking property key for frontend rendering
            $product['sales_this_week'] = $weeklySalesSum;
            $processedBooks[] = $product;
        }
        
        // 4. Sort the compiled results array by the highest weekly calculation total
        usort($processedBooks, function($a, $b) {
            return $b['sales_this_week'] <=> $a['sales_this_week'];
        });
        
        // 5. Slice off the first 5 records to fulfill your layout limit constraint
        $books = array_slice($processedBooks, 0, 5);
        
        // If there are less than 5 books in the database, loop back 6 more months
        if (count($books) < 5) {
            $allowedAge += 6;
        } else {
            break; // Stop execution loops cleanly if requirements are met
        }
    }
} catch (PDOException $e) {
    die("Query Execution Failure: " . htmlspecialchars($e->getMessage()));
}
?>

/*
try {
    // 3. Initialize variables for our search fallback logic loop
    $books          = [];
    $allowedAge     = 12; // Start with books posted up to 12 months (1 year) ago
    $maxAgeLimit    = 60; // Safeguard: Stop stretching if it goes back over 5 years (60 months)

    // 4. Loop runs until we find exactly 5 books, or we hit our safeguard limit
    while (count($books) < 5 && $allowedAge <= $maxAgeLimit) {
        // This query filters the launch age window dynamically while sorting strictly by recent monthly velocity
        $query = "SELECT Title,Author,Cover,date_posted,Rating,RevCount,sales_past_30_days,PRICE
                  FROM tblproducts
                  WHERE date_posted >= NOW() - INTERVAL ? MONTH 
                  ORDER BY sales_past_30_days DESC 
                  LIMIT 5";
                  
        $stmt = $conn->prepare($query);
        $stmt->execute([$allowedAge]);
        $books = $stmt->fetchAll();

        // If we found less than 5 books matching this era, extend the age criteria by 6 months and try again
        if (count($books) < 5) {
            $allowedAge += 6;
        }
    }
} catch (PDOException $e) {
    die("Query Execution Failure: " . htmlspecialchars($e->getMessage()));
}
*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IndiePages</title>
  <!-- Bootstrap 5-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

  <!-- All Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


  <link href="sheet.css" rel="stylesheet">
</head>
<body>
<!-- Navigation Bar-->
<div id="result" class="sticky-top style-override">
  <?php include_once("navbar.php"); ?>
</div>


<!--Main Homepage Intro-->
<section class="hero">
    <div class="container mt-5">
        <div class="row mt-4">
            <div class="col-lg-0">
                <h1>Own Your Story</h1>
                <div class="hero-subtitle mt-3">Self-publish. Reach readers.<br> Build your audience.</div>
                <p class="hero-text mt-3">
                    IndiePages is a platform for independent authors
                    to share their work with the world. Discover new
                    voices, unique stories and fresh perspectives.
                </p>
                <a href="books.php" class="btn btn-light-sage mt-3">Explore Books<i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- +ve Reasons to use the site-->
<section class="features">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-6 col-lg">
                <div class="feature-icon">
                    <i class="bi bi-feather"></i>
                </div>
                <div class="feature-title">Support Indie Authors</div>
                <div class="feature-text">Help independent writers reach a wider audience.</div>
            </div>

            <div class="col-6 col-lg">
                <div class="feature-icon">
                    <i class="bi bi-book"></i>
                </div>
                <div class="feature-title">Discover New Stories</div>
                <div class="feature-text">Explore diverse genres and voices.</div>
            </div>

            <div class="col-6 col-lg">
                <div class="feature-icon">
                    <i class="bi bi-shield-check"></i>
                </div>
                <div class="feature-title">Safe & Secure</div>
                <div class="feature-text">Your purchases and data are protected.</div>
            </div>

            <div class="col-6 col-lg">
                <div class="feature-icon">
                    <i class="bi bi-people"></i>
                </div>
                <div class="feature-title">Fair Royalties</div>
                <div class="feature-text">Authors earn upwards of 90% of what they earn.</div>
            </div>

            <div class="col-12 col-lg">
                <div class="feature-icon">
                    <i class="bi bi-heart"></i>
                </div>
                <div class="feature-title">A Community of Readers</div>
                <div class="feature-text">Real people. Real support. Real stories.</div>
            </div>
        </div>
    </div>
</section>


<!--Popular books at the moment-->
<section class="py-5">
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <div class="section-label">Featured Books</div>
                <h2 class="section-title mb-0">Popular This Week</h2>
            </div>
            <a href="books.php" class="text-dark-green fw-semibold">
                View All Books<i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
        
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
            <?php foreach ($books as $book): ?>
                <div class="col">
                    <div class="book-card">
                        <div class="book-cover-wrapper">
                            <img src="<?= htmlspecialchars($book['Cover']) ?>" 
                                 alt="<?= htmlspecialchars($book['Title']) ?>" class="book-cover">
                        </div>
                        <div class="book-title"><?= htmlspecialchars($book['Title']) ?></div>
                        <div class="book-author"><?= htmlspecialchars($book['Author']) ?></div>
                        
                        <div class="book-rating mt-2">
                            <?php
                            $rating = (float) $book['Rating'];
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
                                <?= htmlspecialchars($book['Rating']) ?>
                                (<?= htmlspecialchars($book['RevCount']) ?>)
                            </span>
                        </div>

                        <div class="book-price">
                            £<?= htmlspecialchars($book['PRICE']) ?>
                        </div>
                        
                        <button class="add-basket"
                                onclick="addToBasket('<?= htmlspecialchars($book['Title'], ENT_QUOTES) ?>')">
                            <i class="bi bi-cart3 me-1"></i>
                            Add to Basket
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</body>
</html>
