

<?php

if(isset($_POST["save"]))
{
           ;
            $email=$_POST["txtemail"];
            
            $password=$_POST["txtpassword"];
           
           if($email=="admin" && $password==123456)
           {
             header("location:addproduct.php");
         }
         else
         {
             echo "<script type='text/javascript'>alert('Invalid Email or password');</script>";
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
  <?php include_once 'header.php';?>

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
                    <h2>Pizza</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/b2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Sandwich</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/b3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>icecream</h2>
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
    </header>>

    <!-- Page Content -->
    <div class="container">

      

        <!-- Portfolio Section -->
        <div class="row ">
            
            <h2 class="text-info">Admin Login</h2>
            <form method='post' action='admin.php'>
                <div class='col-md-6'>
                    
                    
                  
                    <div class="form-group">
                        User Name:
                        <input type='text' name='txtemail' class="form-control"/>
                    </div>
                    
                    <div class="form-group">
                         Password:
                         <input type='password' name='txtpassword' required="" class="form-control"/>
                    </div>
                    
                   
                    
                    <div>
                        <input type='submit' value="Login" name='save' class='btn btn-primary' />
                        <input type='reset' value="cancel" class="btn btn-cancel"/>
                        </div>
                 
                </div>
                    
                
            </form>
            
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
