


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Food Adda</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Online Food Adda</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Pizza</a>
                            </li>
                            <li>
                                <a href="#">Burger</a>
                            </li>
                            <li>
                                <a href="#">ColdDrink</a>
                            </li>
                            <li>
                                <a href="#">Combo</a>
                            </li>
                            <li>
                                <a href="#">Noodels</a>
                            </li>
                            
                        </ul>
                    </li>
                      <li>
                        <a href="Register.php">Registration</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel"  data-slide-to="0" class="active">
                
            </li>
            
            <li data-target="#myCarousel" data-slide-to="1" >
                
            </li>
            <li data-target="#myCarousel" data-slide-to="2">
                
            </li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/b1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Laptops</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/b2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Mobiles</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/b3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>camera</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

      

        <!-- Portfolio Section -->
        <div class="row ">
            
            <h2>Register Here</h2>
            <form method='post' action='register.php'>
                <div class='col-md-6'>
                    
                    
                    <div class="form-group">
                        Name:
                        <input type='text' name='txtname' required="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        Email:
                        <input type='email' name='txtemail' class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                         Password:
                         <input type='password' name='txtpassword' required="" class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                        contact No:
                        <input type='text' name='txtcontactno' required="" class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                        Address:
                        <input type='text' name='txtaddress' required="" class="form-control"/>
                    </div>
                    
                    <div>
                        <input type='submit' value="register" name='save' class='btn btn-primary' />
                        <input type='reset' value="cancel" class="btn btn-cancel"/>
                        </div>
                </div>
                    
                
            </form>
            <?php

require_once 'dbconfig.php';
if(isset($_POST["save"]))
{
            $name=$_POST["txtname"];
            $email=$_POST["txtemail"];
            $contact =$_POST["txtcontactno"];
            $password=$_POST["txtpassword"];
            $address=$_POST["txtaddress"];
            $query="insert into tuser(name,email,address,password,contactno) values('$name','$email','$address','$password','$contact')";
            mysqli_query($link, $query);
            $i=mysqli_affected_rows($link);
            if($i>0)
            {
                echo "Registered Successfully";
            }
            else
            {
                echo "registration Fail";
            }
            
}
?>

        </div>
        <!-- /.row -->

      
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Food Adda 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

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
