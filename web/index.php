<!-- Bootstrap 4 Tutorial von www.bootstrapworld.de -->
<!-- ============================================== -->
<html lang="de">
<head>
    <title>Stolpersteine in Hannover</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS laden -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
<?php // Include der richtigen Datei

if (isset($_GET['link']) && !empty($_GET['link'])) {
    switch ($_GET['link']) {
        case "story" :
            $root = "Geschichte.html";
            break;
        case "gunter" :
            $root = "gunter.html";
            break;
        case "download" :
            $root = "link.html";
            break;
        case "cart" :
            $root = "Stadtkarte.html";
            break;
        case "hannover" :
            $root = "Stolpersteine_Hannover.html";
            break;
        case "contact" :
            $root = "mail.php";
            break;
        default:
            $root = "startup";
            break;

    }
} else {
    $root = "startup.html";
}


?>
<header>
    <h2 class="Display-2">STOLPERSTEINE</h2>
    <h4>Ein Mahnmal für die Opfer des 3. Reichs</h4>
</header>
<nav class="navbar navbar-expand-md navbar-dark bg-secondary nav-justified">
    <a class="navbar-brand" href="?link"> MEMORY STONES</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-left" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-5 ml-5">
                <a class="nav-link" href="#"> &nbsp; </a>
            </li>

            <li class="dropdown mr-5">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false"><i class="fa fa-info" aria-hidden="true"></i>
                    &nbsp;About
                    <span class="caret"></span></a>
                <ul class="dropdown-menu bg-secondary">
                    <li class="nav-item">
                        <a class="nav-link" href="?link=story"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;Das Projekt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?link=gunter"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Gunter Demnig</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown mr-5">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false"><i class="fa fa-archive" aria-hidden="true"></i>
                    &nbsp;Stolpersteine
                    <span class="caret"></span></a>
                <ul class="dropdown-menu bg-secondary">
                    <li class="nav-item">
                        <a class="nav-link" href="?link=hannover"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp;Hannover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?link=cart"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Guide</a>
                    <li class="nav-item">
                        <a class="nav-link" href="?link=download"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Download</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item mr-5"><a class="nav-link" href="?link=contact"><i class="fa fa-pencil" style="display:inline;" aria-hidden="true"></i>&nbsp;Kontakt</a></li>
        </ul>
        <span class="navbar-text">&copy; 2019</span>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 right">

            <div class="row p-4">

                <div class="col-md-12">
                    <!-- Content -->
                    <div class="container-fluid">
                        <?php
                        include $root;
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <footer> School Project for the MMBBS IT Course</footer>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="js/bootstrap/bootstrap.js"></script>
</body>
</html>