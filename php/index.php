        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <body>       
            <div class="container">    
                <div class="row"> 
                    <div class="col-xs-2">
                        <nav align="center">
                            <a class="list-group-item" href="index.php">HOME</a> 
                        </nav>
                    </div>
                    <div class="col-xs-2"> 
                        <nav align="center">
                            <a class="list-group-item" href="login.php">LOGIN</a>
                        </nav>
                    </div>
                    <div class="col-xs-2">
                        <nav align="center">
                            <a class="list-group-item" href="register.php">REGISTER</a>
                        </nav>
                    </div>    
                    <div class="col-xs-2">  
                        <nav align="center" >
                            <a class="list-group-item" href="Post.php">POST</a> 
                        </nav>
                    </div>
                    <div class="col-xs-2">  
                        <nav align="center" >
                            <a class="list-group-item" href="html/public_html/index.html">ABOUT ME</a> 
                        </nav>
                    </div>
                </div>
            </div>
        </body>

<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
        require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php");
?>

