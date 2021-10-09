<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="delete.php">

        <a href="category.php">Back</a><br><br>
 
        <label> Category ID :</label>
        <input type="number" name="id"><br><br>


        <button type="submit" name="delete">Delete</button>

    </form>

    <?php   
    include_once("config.php");
    if(isset($_POST['delete'])) { 
     
        $ID = $_POST['id'];
       
       
         //insert data to database
         $sql="DELETE FROM category_master WHERE CATEGORY_ID=$ID";
         $result = mysqli_query($mysqli,$sql);
 
 
         
         //display success message
         echo "<font color='green'>Data deleted successfully.";
         echo "<br/><a href='view.php'>View Result</a>";
     


    }

    ?>


</body>

</html>