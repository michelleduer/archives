<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/lookup.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Your Neighborhood: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Your Neighborhood</title>
        <?php endif ?>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
        <script src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}""></script>
        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/parseXML.js"></script>
        <script src="/js/lookup.js"></script>



    </head>

    <body onload="initialize">
    
    <!----navbar---->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">Your Neighborhood</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/login.php">Log In</a></li>
                    <li><a href="/register.php">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
