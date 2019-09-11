<?php
require_once 'dbconfig.php';
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
                    <h2>Pizza</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/b2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Burger</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/b3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Combo</h2>
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
    
                <div class="row">
                    

                    
                    
                    <?php
if(isset($_POST["add"]))
{
    echo "hello";
    $pname=$_POST["txtpname"];
    
    $price = $_POST["txtpprice"];
   
     echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
    echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
    echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
    echo "Stored in: " . $_FILES["photo"]["tmp_name"];
    $p= rand();
    $path1= "up/".$p . $_FILES["photo"]["name"];
    
    
   move_uploaded_file($_FILES["photo"]["tmp_name"],$path1);
     echo "<br> file uploaded successfully";
    $image=$path1;
    $description = $_POST["txtpdescription"];
   
    $query="insert into tproduct(name,price,image,description)VALUES('$pname',$price,'$image','$description')";
    echo $query;
        mysqli_query($link, $query);
            $i=mysqli_affected_rows($link);
    if($i>0)
    {
        echo "Product Added Successfully";
    }
    else
    {
        echo "product not Added";
    }

}
?>
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Products <small>new entry</small>
                        </h1>
                     
                    </div>
                </div>
        <form action='Addproduct.php' method="post" enctype="multipart/form-data">
                <div class="row"> 
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <label>
                                Product Name:
                            </label>
                            <input required="" type='text' name='txtpname' class="form-control"/>
                        </div>
                        
                    </div>
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <label>
                                Category :
                            </label>
                            
                        </div>
                        
                    </div>
                    
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <label>
                                Price:
                            </label>
                            <input required="" type='text' name='txtpprice' class="form-control"/>
                        </div>
                        
                    </div>
                  
                    
                
                    
                    
                    
                       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <label>
                                Image
                            </label>
                            <input required="" type='file' class="form-control" name='photo'/>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="form-group">
                            <label>
                                Description
                            </label>
                            <textarea required="" class='form-control' name='txtpdescription'>
                                
                            </textarea>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <input type='submit' value="Add" name='add' class='btn btn-success form-control'/>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <input type='reset' value='cancel' class="btn btn-danger form-control"/>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
</form>


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
