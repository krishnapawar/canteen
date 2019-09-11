  <?php
        if(isset($_POST["delete"]))
        {
            $id= $_REQUEST["code"];
            require_once 'dbconfig.php';
            $query="delete from tcart where id =$id";
            mysqli_query($link, $query);
            $i= mysqli_affected_rows($link);
            if($i>0)
            {
                  echo "<script type='text/javascript'>alert('Entry Deleted From Cart');</script>";
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php require_once 'header.php';?>
    <a href="logout.php">Logout</a>
        <?php
        require_once 'dbconfig.php';
          $query="select id,name,price,quantity from tcart";
          $result=  mysqli_query($link, $query);
          ?>
    <table border="1" style="margin-left:30%;margin-top:13%;">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>quantity</th>
                <th>Total</th>
                <th>Delete</th>
            </tr>
            
     
        <?php
        $b =1;
          while($row=  mysqli_fetch_array($result))
          {
              ?>
            <tr>
            <form method="post" action="checkout.php?code=<?php echo $row{"id"};?>">
            
                <td><?php echo $row{"name"};?></td>
                <td><?php echo $row{"price"};?></td>
                  <td><?php echo $row{"quantity"};?></td>
                  
                  <?php
                  $total = $row{"price"} * $row{"quantity"};
                  $b=$b+$total;
                  ?>
                <td><?php echo $total;?></td>
                <td> 
                    <input type="submit" value="delete" name="delete"/>
                </td>
                 </form>
            </tr>
            <?php
          }
        ?>
               </table>
        <h1>your bill is : <?php
         if($b==1)
        {
            $b=0;
        }
        
        echo  $b?>&nbsp; Rs</h1>
        <a href="placeorder.php?bill=<?php
       
        echo $b;
        
        ?>" >
            place Order
        </a>
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