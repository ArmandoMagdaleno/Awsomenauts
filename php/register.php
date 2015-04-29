        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        
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
                        <nav align="center">
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
    require_once(__DIR__ . "/view/header.php");
    require_once(__DIR__ . "/view/register-form.php");
    require_once(__DIR__ . "/view/footer.php");


