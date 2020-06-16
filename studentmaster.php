<?php session_start();
    if(isset($_SESSION['uname']))
    {
        
    }
 else {
     echo "<script type='text/javascript'> window.location.href='index.php' </script>";
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="#"><img src="img/bmiit.png" height="50" width="50" />&nbsp;&nbsp;<b>BMIIT</b> |<samp style="color: #28166F;font-family: sans-serif; font-style: initial;font-size: 22px;"> Campus Recruitment System</samp></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 18px;">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="studenthome.php"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="studentevent.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> View Events </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-cog" aria-hidden="true"></i> Setting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <form  method="post">
                                <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>logout</a>
                            </form>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="notification.php"><i class="fa fa-sticky-note" aria-hidden="true"></i> Notification  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i><?php echo $_SESSION['uname'] ?>  </a>
                    </li> 
                </ul>

            </div>
            
        </nav>
        <?php
        // put your code here
        ?>
        
        
        
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
