   <?php
    if(isset($_POST['type'])){
    require_once("connect.php");
    	$RequestId = $_POST['RequestId'];
    	$DonorId = $_POST['DonorId'];
    	$AcceptorId = $_POST['AcceptorId'];
    	$EmployeeId = $_POST['EmployeeId'];
    	$Date = $_POST['Date'];
    	$Status = $_POST['Status'];
    	$BloodGroup = $_POST['BloodGroup'];
    	$query="INSERT INTO request (RequestId,DonorId,AcceptorId,EmployeeId,Date,Status,BloodGroup) VALUES ('$RequestId','$DonorId','$AcceptorId','$EmployeeId','$Date','$Status','$BloodGroup')";
    mysqli_query($con,$query);
    echo"<div >
    		<center><p>
			<h3>Request Made Successfully!</h3><br>
			RequestId : $RequestId<br>
			DonorId : $DonorId<br>
			AcceptorId : $AcceptorId<br>
			EmployeeId : $EmployeeId<br>
			Date : $Date<br>
			Status : $Status<br>
			BloodGroup : $BloodGroup<br>
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