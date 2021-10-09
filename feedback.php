<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include 'headers.php';?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap links -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--CSS link  -->

    
    <link rel="stylesheet" href="./css/feedback.css">



    <title>Document</title>

   
</head>
<body>

<form class="mandar" action="feedback.php" method="POST" > <br>

    <h1>Feedback form</h1>

  <div class="form-group">
    <label for="exampleInputEmail1"> Name :</label>
    <input type="text" name="cname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
   </div><br><br>

  <div class="form-group">
    <label for="exampleInputPassword1"> Email :</label>
    <input type="email" name="cemail" class="form-control" id="exampleInputPassword1" placeholder="Enter email">
  </div><br><br>

  <div class="form-group">
    <label for="exampleInputPassword1"> Phone No :</label>
    <input type="number" name="cphno" class="form-control" id="exampleInputPassword1" placeholder="Enter phone no">
  </div><br><br>

  <div class="form-group">
    <label for="exampleInputPassword1"> Date :</label>
    <input type="date" name="cdate" class="form-control" id="exampleInputPassword1" placeholder="Enter date">
  </div><br><br>

  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Description :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cdescription" placeholder="Enter your feedback here" ></textarea>
  </div><br><br>


  <button type="submit" name="subm" value="Submit">Submit</button> <br>

</form><br>



<?php   
    include_once("config.php");
    if(isset($_POST['subm'])) 
    { 
      
          
            $Cname = $_POST['cname'];
            $Cemail = $_POST['cemail'];
            $Cpho_no = $_POST['cphno'];
            $Cdate = $_POST['cdate'];
            $Cfeedback = $_POST['cdescription'];
    
        
            // checking empty fields
        if(empty($Cname) || empty($Cemail) || empty($Cpho_no) || empty($Cdate) || empty($Cfeedback)) 
        {                
	        if(empty($Cname)) 
            {
                 echo "<font color='red'>Name ID field is empty.</font><br/>";
            }
            if(empty($Cemail)) 
            {
                 echo "<font color='red'>Email field is empty.</font><br/>";
            }
            if(empty($Cpho_no)) 
            {
                 echo "<font color='red'>Phone no field is empty.</font><br/>";
            }
            if(empty($Cdate)) 
            {
                echo "<font color='red'>Date field is empty.</font><br/>";
            }
            if(empty($Cfeedback)) 
            {
                echo "<font color='red'>Description field is empty.</font><br/>";
            }
         

            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } 
        else
        { 
            // if all the fields are filled (not empty)             
            //insert data to database
            $sql="INSERT INTO feedback(FNAME,EMAIL,PHO_NO,FDATE,FDESCRIPTION) VALUES ('$Cname','$Cemail','$Cpho_no','$Cdate','$Cfeedback')";
            $result = mysqli_query($mysqli,$sql);
 
 
         
            //display success message
            echo "<font color='green'>Data added successfully.";
           
        }

    }

    

?>





    <div class="footers"><?php include 'footers.php';?></div>
</body>
</html>