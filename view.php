

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   


    <title>Document</title>
</head>

<body>
    <a href="category.php">Back</a><br><br>
    <h1>View</h1>

    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
		    <td>Category ID</td>
            <td>Name</td>
            <td>Image</td>
            <td>Status</td>
        </tr>

        <?php 

        include_once("config.php");
        $sql="SELECT * FROM category_master ORDER BY CATEGORY_ID DESC";
        $result = mysqli_query($mysqli,$sql); // using mysqli_query instead

	 while($res = mysqli_fetch_assoc($result)) {         
            echo "<tr>";
	        echo "<td>".$res['CATEGORY_ID']."</td>";
            echo "<td>".$res['CATEGORY_NAME']."</td>";
            echo ' 
        
            <td>  
			     
                <img src="data:image/jpeg;base64,'.base64_encode($res['CATEGORY_IMAGE'] ).'" height="200" width="300" class="img-thumnail" />  
            
			</td>  
         
         ';
            echo "<td>".$res['CATEGORY_STATUS']."</td>";

            echo "<td><a href=\"update.php?CATEGORY_ID=$res[CATEGORY_ID]\">Update</a>";   
            
            echo "</tr>";
			 
          
        }
        ?>
    </table>

    
      </div>  
</body>

</html>