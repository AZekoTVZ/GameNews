<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .navbar {background-color: #5F81FF;}
        .navbar .navbar-brand {color: #ffffff;}
        .navbar .nav-link {color: #ffffff;}
        .table thead th {background-color: #343a40;color: #ffffff;}
        .table-striped tbody {background-color: #f2f2f2;}
        .badge-primary {background-color: #007bff;}
        .copyright {color: #ffffff;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GamerNews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="games.php">Games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="kontakt.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-5">
<h2>Top 50 games</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Release date</th>
                <th>Ratings</th>
                <th>Crossplay</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $xml = simplexml_load_file('games.xml');
            $limit = 10;
            $totalGames = count($xml->game);
            $totalPages = ceil($totalGames / $limit);
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit; 
            for ($i = $start; $i < min($start + $limit, $totalGames); $i++) {
                $game = $xml->game[$i];
                echo "<tr>";
                echo "<td>" . $game->id . "</td>";
                echo "<td>" . $game->name . "</td>";
                echo "<td>" . $game->releaseDate . "</td>";
                echo "<td>" . $game->ratings . "</td>";
                echo "<td>" . $game->crossplay . "</td>";
                echo "</tr>";}
            ?>
        </tbody>
    </table>

</div>
<nav aria-label="Page navigation">
<ul class="pagination justify-content-center">
<?php for ($i = 1; $i <= $totalPages; $i++) : ?>
<li class="page-item <?php if ($page == $i) echo 'active'; ?>">
<a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
</li>
<?php endfor; ?>
</ul>
</nav>
</div>
    

<footer class="bg-body-tertiary text-center text-lg-start fixed-bottom w-100">
  <div class="container-fluid text-center p-3" style="background-color: #5F81FF;">
    <p class="copyright" >© Antonio Zeko 2024</p>
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"></script>

</body>
</html>