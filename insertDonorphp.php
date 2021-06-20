   <?php
    if(isset($_POST['type'])){
    require_once("connect.php");
    	$DonorId = $_POST['DonorId'];
    	$fName = $_POST['fName'];
    	$lName = $_POST['lName'];
    	$Gender = $_POST['Gender'];
    	$BloodGroup = $_POST['BloodGroup'];
    	$Age = $_POST['Age'];
    	$ContactNo = $_POST['ContactNo'];
    	$query="INSERT INTO donor (DonorId,fName,lName,Gender,BloodGroup,Age,ContactNo) VALUES ('$DonorId','$fName','$lName','$Gender','$BloodGroup','$Age','$ContactNo')";
    mysqli_query($con,$query);
    echo"<div >
    		<center><p>
			<h3>Donor Added Successfully!</h3><br>
			DonorId : $DonorId<br>
			Name : $fName $lName<br>
			Gender : $Gender<br>
			BloodGroup : $BloodGroup<br>
			Age : $Age<br>
			ContactNo : $ContactNo<br>
			</p></center>
    	</div>";
   }
    else
    echo "error";
	?>
	<!DOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>
        <center>
            <p><a style="text-decoration: none; color: rgb(0, 83, 156);" href="index.html"><h2>Go to Home</h2></a></p>
        </center>
    </body>
    </html>