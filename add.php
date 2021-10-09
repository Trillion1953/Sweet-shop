<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="add.php" method="POST" enctype="multipart/form-data" name="form1">

        <a href="category.php">Back</a><br><br>

      

        <label> Name :</label>
        <input type="text" name="name"><br><br>

        <label> Image :</label>
        <input type="file" name="image"/><br><br>

        <label> Status :</label>
        <input type="text" name="status"><br><br>


        <button type="submit" name="submit" value="Submit">Submit</button>


    </form>



<?php   
    include_once("config.php");
    if(isset($_POST['submit'])) 
    { 
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false){
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
    

          
            $Name = $_POST['name'];
            // $Image = $_POST['image'];
            $Status= $_POST['status'];

       
         // checking empty fields
        if(empty($Name) || empty($imgContent) || empty($Status) ) 
        {                
	       
            if(empty($Name)) 
            {
                 echo "<font color='red'>Name field is empty.</font><br/>";
            }
            if(empty($imgContent)) 
            {
                 echo "<font color='red'>Image field is empty.</font><br/>";
            }
            if(empty($Status)) 
            {
                echo "<font color='red'>Status field is empty.</font><br/>";
            }
         

            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } 
        else
        { 
            // if all the fields are filled (not empty)             
            //insert data to database
            $sql="INSERT INTO category_master(CATEGORY_NAME,CATEGORY_IMAGE,CATEGORY_STATUS) VALUES ('$Name','$imgContent','$Status')";
            $result = mysqli_query($mysqli,$sql);
 
 
         
            //display success message
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='view.php'>View Result</a>";
        }

    }
}
    

?>
</body>

</html>