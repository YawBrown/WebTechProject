<?php 
include 'connection.php';
if(isset($_POST['Edit'])){ 

    $ProductID = $_POST['ProductID']; 
    $Change = $_POST['Change'];
    $NewInput = $_POST['NewValue'];  


     if(empty($ProductID)){
         echo "<script>alert(' Incomplete Form ');</script>"; 
     }
     elseif(empty($Change)){
         echo "<script>alert(' Incomplete Form ');</script>"; 
     }
     elseif(empty($NewInput)){
         echo "<script>alert(' Incomplete Form ');</script>"; 
     }

    else {
       
    



    $edit_query = "UPDATE PRODUCT_PROJECT SET $Change='$NewInput' WHERE ProductID= '$ProductID' ";
    $result = mysqli_query($connection,$edit_query); 

     if($result){ 
         echo "<script>alert('Successfully Updated Product Project'); location.href='EditProductProject.php';</script> "; 
     }else{ 
         echo "<script>alert('Unable to Update');</script>"; 
     }

    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Product Project</title>
	<link rel="stylesheet" type="text/css" href="EditProductProjectStyle.css">
</head>
<body>
	<div class="ProductForm">
		<h1> Edit Product Project</h1>
	</div>
	<div class="main">
		<form method="POST">
			<div id="ProductID">
				<h2 class="name">ProductID</h2>
				<input class= "PID" type="text" name="ProductID" >
			</div>



	<h2 class="name">Where to edit</h2>
	<select class="TM" name="Change">
		<option value='Function_'>Function</option>
		<option value='ProjectedLength'>Projected Length</option>
		<option value='Number_on_project'>Number of people assigned to Project</option>
		<option value='Target_market'>Target Market</option>
		

	</select>


    <h2 class="name">New Input</h2>
	<input class="Fu"type="text" name="NewValue">


	<input type="submit" name="Edit" value="Update">
		</form>
	</div>

<div class=floatt>
<a href="MajorPage.php">HOME</a>
</div>


</body>
</html>