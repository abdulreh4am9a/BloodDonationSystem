<?php
    if(isset($_POST['type'])){
    require_once("connect.php");
    	$EmployeeId = $_POST['EmployeeId'];
    	$fName = $_POST['fName'];
    	$lName = $_POST['lName'];
    	$Gender = $_POST['Gender'];
    	$Age = $_POST['Age'];
    	$ContactNo = $_POST['ContactNo'];
    	$query="UPDATE receptionist SET EmployeeId='$EmployeeId',fName='$fName',lName='$lName',Gender='$Gender',Age='$Age',ContactNo='$ContactNo' WHERE EmployeeId = '$EmployeeId'";
    mysqli_query($con,$query);
    echo"<div >
    		<center><p>
			<h3>Receptionist Updated Successfully!</h3><br>
			Employee Id : $EmployeeId<br>
			Name : $fName $lName<br>
			Gender : $Gender<br>
			Age : $Age<br>
			ContactNo : $ContactNo<br>
			</p><center>
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