<?php

    include_once 'include/class.user.php';
    $user = new User();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $user->reg_user($fullname, $uname,$upass, $uemail);
        if ($register) {
            // Registration Success
            header("location:login.php");
        } else {
            // Registration Failed
              header("location:registration.php");
        }
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rifa</title>
    <link rel="shortcut icon" href="img/favicon.png">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="top_bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-8 col-sm-4">
                    <ul class="list-unstyled pull-right">
                        <li><a href="login.php">Sign in</a></li>
                        <li><a href="registration.php">Sign up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="brand">Rifa Enterprise</div>
    <div class="address-bar">....... Your Laboratory Partner</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Rifa Enterprise</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    
                    <li>
                        <a href="product.php">Products</a>
                    </li>
                    
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="career.php">Career</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                    
                    <li>
                        <a href="faq.php">FAQ</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-sm-offset-2 col-sm-8 clearfix">
            	   <div class="sign_in clearfix">
                    <div class="sign_in_text">
                        <h3><b>Sign up for Rifa!</b></h3><br>
                        <h3>Opportunities are waiting for you</h3>
                    </div>
                    <br>





                    <form class="form-horizontal clearfix" action="" method="post" name="reg">
                      <div class="form-group">
                        <label for="firstname" class="col-sm-4 control-label">Full Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="fullname" id="firstname" placeholder="Full Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="lastname" class="col-sm-4 control-label">User Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="uname" id="lastname" placeholder="User Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" name="uemail" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                          <input type="password" class="form-control" name="upass" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      
                      
                      <div class="form-group clearfix">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" name="submit" value="Register">
                        </div>
                      </div>
                    </form>





                </div> 
            </div>

            </div>
        </div>
    </div>


        <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                   <p class="navbar-text">&copy;<?php echo date('Y'); ?> Online Shopping,  <a href="adminlogin.php"><u>Site Admin</u></a> </p>
                </div>
                <div class="col-lg-6 text-center">
                    <p>Developed by <a href="www.bingostudiobd.com"><span style="color:orange">Bingo</span></a> studio!</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
