<?php
    if(isset($_POST['type'])){
    require_once("connect.php");
    	$RequestId = $_POST['RequestId'];
    	$query="SELECT * FROM request WHERE RequestId = '$RequestId'";
        $result = $con->query($query);

        if($result->num_rows > 0){
            echo "<center><h3>Request(s) Searched: </h3><br></center>";
            while($row = $result->fetch_assoc()){
                echo "<center>Request Id: ".$row["RequestId"]." <br> Donor Id: ".$row["DonorId"]." <br> Acceptor Id: ".$row["AcceptorId"]." <br> Employee Id: ".$row["EmployeeId"]." <br> Date: ".$row["Date"]." <br> Status: ".$row["Status"]." <br> BloodGroup: ".$row["BloodGroup"]."<br></center>";
            }
        }
        else{
            echo "<center><h3>No Result Found</h3></center>";
        }
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