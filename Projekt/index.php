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
<div class="container mt-1">
        <div class="text-center">
        <h1>Welcome to GamerNews</h1>
        <h3>Home to news about games and such from all around the world</h3>
        </div>
        <hr>
        <div class="col-lg-12 text-start">
            <img src="images/s1.jpg" class="img-fluid" alt="Game Image 1">
            <h2>Coming This Summer: A New Brand of Vigilante Justice</h2>
            <p>This summer, it’s time for some (high-value) target practice to clean up the roving reprobates of Southern San Andreas with your very own bail enforcement and bounty hunting business in the next major update for GTA Online. Meanwhile, back in town, Vincent needs help enforcing his authority without official oversight — get behind the wheel of your souped-up Cruiser and conduct a range of off-the-books enforcement activities across Los Santos. Plus, utilize new tools and props to create custom, high-octane Drift and Drag Races in the Creator, and much more beginning next month.</p>
        </div>
        <hr>
        <div class="col-lg-12 text-start">
            <img src="images/s2.jpg" class="img-fluid" alt="Game Image 2">
            <h2>Riders Are Rewarded With 4X RDO$, XP, And Additional Bonuses</h2>
            <p>There’s no truer bond than the one between an outlaw and their horse. Races are a top-notch way to strengthen your equestrian skills, turn a nice profit, and climb the ranks with 4X RDO$ and XP bonuses for participating through July 1.</p>
        </div>
        <hr>
        <div class="col-lg-7 text-start">
            <h2>Test out our new XML validation</h2>
            <div class="container mt-5 col-4">

<form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="xmlFile" class="form-label">XML File</label>
    <input class="form-control" type="file" id="xmlFile" name="xml_file">
  </div>
  <div class="mb-3">
    <label for="xsdFile" class="form-label">XSD File</label>
    <input class="form-control" type="file" id="xsdFile" name="schema_file">
  </div>
  <button type="submit" class="btn btn-primary">Check for validity</button>
</form>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<footer class="bg-body-tertiary text-center text-lg-start fixed-bottom w-100">
  <div class="container-fluid text-center p-3" style="background-color: #5F81FF;">
    <p class="copyright" >© Antonio Zeko 2024</p>
</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"></script>
</body>
</html>
