<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="adminfood.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fried Rice Admin</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" language="javascript" src="home.js"></script>



</head>

<body>

	<div id="mai">                 <!--main div start-->
            
			<div id="logo"><!--logo div start-->
             <img src="Backgrounds/478d7088-b22f-49a9-96ae-3f4aa470643a.jpeg" class="lg">
            </div> <!--logo div end-->  
			<div id="mainh">
            
            	   <div class="mainhsub">
                   
					<p ><h2 id="topic">Meal Runner Food Delivery and Takeout</h2><br><h3 id="subtop">Deliciousness Delivered with a 					Smile</h3></p>
				
				  </div>
			</div><!--End of main topic part-->
            
			<!--start of carsoul-->
       <div class="slideshow-container2">

            <div class="mySlides2 fade2">
              
              <img class="im" src="user home photo/a69dd445cc32cc3ad5184861561c1559.jpg" >
             
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="user home photo/chicken-wings-barbecue-sweetly-sour-sauce-picnic-summer-menu-tasty-food-top-view-flat-lay_2829-6470.avif" >
              
            </div>
            
            <div class="mySlides2 fade2">
              
              <img class="im" src="user home photo/unnamed.jpg" >
             
            </div>

	</div>
<br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    <script>
			let slideIndex = 0;
			showSlides();
			
			function showSlides() {
			  let i;
			  let slides = document.getElementsByClassName("mySlides2");
			  let dots = document.getElementsByClassName("dot");
			  for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			  }
			  slideIndex++;
			  if (slideIndex > slides.length) {slideIndex = 1}    
			  for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			  setTimeout(showSlides, 5000); 
			}
        </script>

		

            <!--end of carsoul-->
            
    
			
            
            <div id="contl">   <!--cont div left start-->  
            	 <div id="bodytop">
     <div id="bodytopL">
     </div>
     
    <div id="bodytopR">
    <form action="">
    <table>
    <tr>
    <td>
      <input type="text" placeholder="Search.." name="search" class="srch">
      </td>
      
      <td>
      <button type="submit"><img src="Backgrounds/3031293.png" class="sim"></button>
      </td>
    </tr>
     </table>
    </form>
    </div>
    <div>
    	<?php
	include"connect.php";
	
	$sql="SELECT * FROM fried_rice";
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{ echo'<table border="6" cellspacing="20" cellpadding="20" align="center" bordercolor="#009900">
	<tr>
		<td><b>Fried Rice ID</b></td>
		<td><b>Fried Rice Name</b></td>
		<td><b>Fried Rice Large Price</b></td>
		<td><b>Fried Rice Small Price</b></td>
		<td><b>Modify</b></td>
	</tr>';
		while($row=mysqli_fetch_assoc($result))
		{
			
			 echo'<tr>'.'<td>'.$row['R_id'].'</td>'.'<td>'.$row['R_name'].'</td>'.'<td>'.$row['Lprice'].'</td><td>'.$row['Sprice'].'</td>'.'<td>'.'<button onclick="location.href='."'editrice.php ? Id=".$row['R_id']."'".'">Edit</button>'.'</td>'.'</tr>';
			 
		}
		
		echo'</table>';
	}
?>  


                  	
            
		<div id="ftr">
        	
        </div> 
        
                
        </div><!--main div end-->
          
       
</body>
</html>