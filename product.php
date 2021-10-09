<!DOCTYPE html>

<html lang="en">

<head>
    <style>
        .footers{
        position: bottom;
        bottom: 10px;
    }
    </style>

    <?php include 'headers.php';?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS link -->

  <link rel="stylesheet" href="./css/product.css">
   
    
    <title>Document</title>

</head>




<body>
    
<!-- slider using javascript -->

<div class="sideright2">
  
  <script>

       var i=0;
       var images=[];
       var time=3000;

       images[0]="img/2.jpg";
       images[1]="img/6.jpg";
       images[2]="img/15.jpg";
       images[3]="img/28.jpg";
       images[4]="img/30.jpg";
       images[5]="img/40.jpg";
       
      function changeImg()
      {
           document.slide.src=images[i];
           if(i < images.length - 1)
            {
                i++; 
            }
            else
             {
               i=0;  
             }
              setTimeout("changeImg()",time);
      }
      window.onload=changeImg;
   </script>

  <img name="slide" width="1691" height="600">

</div>

  



    <!--Category heading  -->
   
      <div class="cat">

               <h1>Categories</h1>

      </div> 
 

<!-- dispaly data of category from category_master table -->


      <div class="cap">


         <?php 

            include_once("config.php");
            $sql="SELECT * FROM category_master ORDER BY CATEGORY_ID LIMIT 5 OFFSET 0";
            $result = mysqli_query($mysqli,$sql); // using mysqli_query instead

            while($res = mysqli_fetch_assoc($result))
              {         
               echo'<div class="gallery1">';
              
                  echo '<img src="data:image/jpeg;base64,'.base64_encode($res['CATEGORY_IMAGE'] ).
                  '" height="200" width="300" class="img-thumnail" />';
                  
                  echo'<div class="gallery2">';
                  echo "<td>".$res['CATEGORY_NAME']."</td>";
                 
                  echo'</div>'; 
                  echo'</div>'; 
                 
               
              }
          

           ?>
       

       
      </div>
 



    











      
















<br><br><br>
<div class="footers"><?php include 'footers.php';?></div>

</body>

</html>