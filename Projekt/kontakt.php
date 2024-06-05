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
    <h1>Where to find us!</h1>
    <p>Ovdje nas možete naći!</p>
    <div class="card w-50 p-3">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
  </div>
  <div class="ratio ratio-1x1">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.7943439421774!2d15.967225577426769!3d45.795347711281245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d71944949203%3A0x7493c811b44c4bd9!2sVrbik%208%2C%2010000%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1717591135114!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
</div>

<div class="container mt-5">
<h2>Staff</h2>
<p>Slobodno nam se javite putem maila.</p>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $json_data = file_get_contents('users.json');
            $users = json_decode($json_data, true)['users'];
            foreach ($users as $user) {
                echo "<tr>";
                echo "<td>" . $user['name'] . "</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td><span class='badge badge-primary'>" . $user['role'] . "</span></td>";
                echo "</tr>";}
            ?>
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha3/js/bootstrap.min.js"></script>
<footer class="bg-body-tertiary text-center text-lg-start fixed-bottom w-100">
  <div class="container-fluid text-center p-3" style="background-color: #5F81FF;">
    <p class="copyright" >© Antonio Zeko 2024</p>
</footer>

</body>


</html>
