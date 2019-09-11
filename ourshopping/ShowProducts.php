<?php
session_start();
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
  <?php require_once 'header.php';?>
      <br>
        <br>
    <a href="logout.php">Logout</a>
    
    &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="checkout.php">Proceed to check out</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
       
            <a href="clearCart.php">Clear Cart</a>
            <br>
          <br>
        
<!--      to add item to cart -->
        <?php
        if(isset($_REQUEST["action"]))
        {
            $event = $_REQUEST["action"];
            if($event=="add")
            {
                   $id = $_REQUEST["code"];
                      $name=$_REQUEST["name"];
                      $price=$_REQUEST["price"];
                      $quantity=$_POST["quantity"];
                      
                         $query ="insert into tcart (id,name,price,quantity)values"
                                 . "($id,'$name',$price,$quantity)";
                         $i = mysqli_query($link, $query);
                         if($i>0)
                         {
                             echo "<script type='text/javascript'>alert('Item Added To cart');</script>";
                         }
          
               
            }
             
        }
        ?>
        <!--      to add item to cart end-->
        
        
        <?php
           $query ="select tpid,name,price,image,description from tproduct";
          $result= mysqli_query($link, $query);
         
           while($row = mysqli_fetch_array($result))
           {
           ?>
        <div style="float: left;height:200px;
             width:200px;border:1px solid black;
             margin-left:30px;">
            <form method="post" action="ShowProducts.php?action=add&code=<?php echo $row{"tpid"};?>&name=<?php echo $row{"name"}; ?>&price=<?php echo $row{"price"} ?>">
                
            
             <img src="<?php echo $row{"image"};?> " style="height:100px;width:200px;"/>
            
             <h4>Price : <?php echo $row{"name"}?></h4>
            
             <h4>Price : <?php echo $row{"price"}?></h4>
             <input type="text" name="quantity" value="1" size="2" />
             <input type="submit" 
                   value='Add to Cart'/>
             </form>
        </div>
     
            <?php
           }
            
        ?>

     
   <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Food Adda 2017</p>
                </div>
            </div>
        </footer>
        
        </body>
</html>