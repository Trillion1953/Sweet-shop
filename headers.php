<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Document</title>


    <!-- CSS link -->

    <link rel="stylesheet" href="./css/headers.css">
   

</head>

<body>

<!-- Create one row  -->
    
    <div class="row" >

        <!-- create 1st column on row -->


        <div id="column1">

           
           Samarth Sweets

        </div>

        <!-- create 2st column on row -->
        

        
        <div id="column2">

            <ul id="subcolumn2">
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                

                <li class="search"><form size="10px">
                        <input type="text" name="search" placeholder="Search..">
                </form> </li>

            <a href="cart.php"><li class="cart"><img src="img/cart logo 2.png" alt="cart img" height="50px" width="50px"></li></a>


            
            <li class="login"> <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Login </button></li>

            
            </ul>  
            
        </div>
        







        
    
    </div>



   
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span><br>
     
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

        
      <button type="submit" name="sub">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>

  </form>

  
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<?php   
        include_once("config.php");
        
        if(isset($_POST['sub']))
        {
            $U_NAME = $_POST['uname'];
            $PSW = $_POST['psw'];
              

            $sql="SELECT * FROM admin_login where USERNAME='$U_NAME' and PASSWORD= '$PSW'" ;
            $result = mysqli_query($mysqli,$sql); // using mysqli_query instead
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
              header("Location: category.php");  
            }  
            else{  
                echo "<h1> Login failed. Invalid username or password.</h1>";  
            }     

        }

    ?>












    



</body>

</html>






