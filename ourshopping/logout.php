

 <?php
           require_once 'dbconfig.php';
           $query="delete from tcart ";
            mysqli_query($link, $query);
            $i= mysqli_affected_rows($link);
            header("location:login.php");
            ?>
