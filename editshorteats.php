<?php
	include'connect.php';
	$id=$_GET['Id'];
	$Sename="";
	$Seprice="";
	
	
	$sql="SELECT * FROM shorteats WHERE SeID='$id'";
	
	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$id=$row['seID'];
			$Sename=$row['se_name'];
			$Seprice=$row['se_price'];
			
			
		}
	}
		
?>


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><link rel="stylesheet" type="text/css" href="foodupdate.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin | Koththu update</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            
			
			
            
 <div id="contl">   <!--cont div left start-->  
           
            <div class="tpcon">
            	<form action="renewshorteats.php" method="post">
                	<table>
                    <tr>
                        	<td>
                            	<p>Shorteats ID</p>
                            </td>
                            <td>
                            	<input type="text" name="kid" id="kid" class="kup" value="<?php echo $id;?>" readonly="readonly"/>
                            </td>
                        </tr>
                    	<tr>
                        	<td>
                            	<p>Enter shorteats Name</p>
                            </td>
                            <td>
                            	<input type="text" name="kname" id="kname" class="kup" value="<?php echo $Sename;?>"/>
                            </td>
                        </tr>
                        
                        <tr>
                        	<td>
                            	<p>Enter Price</p>
                            </td>
                            <td>
                            	<input type="number" name="Lprice" id="Lprice" class="kup" value="<?php echo $Seprice;?>"/>
                            </td>
                        </tr>
                        
                       
                    </table>
                    
                    <input type="submit" name="sub" id="sub" class="btnsub" value="Edit">
                </form>
            </div>
  </div> <!--cont div left end--> 
            	     	
            
		<div id="ftr">
        	<div id="lftftr">
            	<p class="tp">Meal Runner Food Deilivery and Takeout</p>
               <p align="left" class="sb"> 
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest"></a>
                <a href="#" class="fa fa-google"></a>
                </p>
                
            </div>
            <div id="rtftr">
				<table id="tbl">
                	<tr>
                    	<td>Email:</td>
                        <td>mealrunner@gmail.com</td>
                    </tr>
                    <tr>

                    	<td>Contact Number:</td>
                        <td>0769899882</td>
                    </tr>
                     <tr>
                    	<td>Fax:</td>
                        <td>037-3974569</td>
                    </tr>
                    <tr>
                    	<td>Whatsapp:</td>
                        <td>0769899882</td>
                    </tr>
                    <tr>
                    	<td>Adress:</td>
                        <td>Kurunegala</td>
                    </tr>
                    
                </table>
                
            </div>
        </div> 
        
                
        </div><!--main div end-->
        </body>
        </html>
          
       
