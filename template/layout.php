<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $config['app_name'] ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php if (isset($_SESSION['user'])): ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <?= $config['app_name'] ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="index.php?page=logout">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <?php endif; ?>

    <div class="container">

        <!-- for content page -->
        <?php
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
            include __DIR__ . "/../pages/$page.php";
        }
        else if (empty($_GET['page']))
        {
            include __DIR__ . '/../pages/home.php';
        }
        else if(!isset($_GET['page']))
        {
            include __DIR__ . '/../pages/home.php';
        }
        else
        {
            include __DIR__ . '/../pages/404.php';
        }
        ?>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>