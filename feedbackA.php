<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include 'headersA.php';?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    


</head>
<body>


<br><br>
<table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
		    <td>Feedback ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone No</td>
            <td>Date</td>
            <td>Feedback Description</td>
        </tr>

        <?php 

        include_once("config.php");
        $sql="SELECT * FROM feedback ORDER BY FEEDBACK_ID DESC";
        $result = mysqli_query($mysqli,$sql); // using mysqli_query instead

	 while($res = mysqli_fetch_assoc($result)) {         
            echo "<tr>";
	        echo "<td>".$res['FEEDBACK_ID']."</td>";
            echo "<td>".$res['FNAME']."</td>";
            echo "<td>".$res['EMAIL']."</td>";
            echo "<td>".$res['PHO_NO']."</td>";
            echo "<td>".$res['FDATE']."</td>";
            echo "<td>".$res['FDESCRIPTION']."</td>";
            echo "</tr>";
			 
          
        }
        ?>
    </table>
   
    <br><br>



    <div class="footers"><?php include 'footersA.php';?></div>
</body>
</html>




