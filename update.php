<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
include_once("config.php");
//getting id from url
$ID = $_GET['CATEGORY_ID'];
 
//selecting data associated with this particular rollno
$sql="SELECT * FROM category_master WHERE CATEGORY_ID=$ID";
$result = mysqli_query($mysqli,$sql);
 
while($res = mysqli_fetch_assoc($result))
{   
    // $ID=$res['CATEGORY_ID'];
    $Name=$res['CATEGORY_NAME'];
    $Status=$res['CATEGORY_STATUS'];
       
	
}
?> 
    <form name="form1" method="POST" action="update.php">
   
        <a href="category.php">Back</a><br><br>

        <label> Category ID:</label>
        <input type="number" name="id" value="<?php echo $ID;?>"><br><br>

        <label> Name :</label>
        <input type="text" name="name" value="<?php echo $Name;?>"><br><br>

       

        <label> Status:</label>
        <input type="text" name="status" value="<?php echo $Status;?>"><br><br>

        <button type="submit" name="update" value="Update"> Update </button>

    </form>




    <?php
// including the database connection file

if(isset($_POST['update']))
{    
    $ID=$_POST['id'];
    $Name=$_POST['name'];
   
    $Status=$_POST['status'];
    
    
    // checking empty fields
    if(empty($Name) || empty($Status)) {            
    //    if(empty($ID)) {
    //         echo "<font color='red'>Category ID field is empty.</font><br/>";
    //     }
		
		if(empty($Name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($Status)) {
            echo "<font color='red'>Status field is empty.</font><br/>";
        }
        
        } else {   
        // all fields are filled 
        //updating the table
		$sql="UPDATE category_master SET CATEGORY_NAME='$Name',CATEGORY_STATUS='$Status' WHERE CATEGORY_ID='$ID'";
        $result = mysqli_query($mysqli,$sql);
        
        //redirectig to the display page. In our case, it is index1.php
        header("Location: view.php");
    }
}
?>
</body>

</html>