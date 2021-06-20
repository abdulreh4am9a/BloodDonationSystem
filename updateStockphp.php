<?php
    if(isset($_POST['type'])){
    require_once("connect.php");
    	$StockId = $_POST['StockId'];
    	$BloodGroup = $_POST['BloodGroup'];
    	$Status = $_POST['Status'];
    	$Quantity = $_POST['Quantity'];
    	$BestBefore = $_POST['BestBefore'];
    	$query="UPDATE bloodstock SET StockId='$StockId',BloodGroup='$BloodGroup',Status='$Status',Quantity='$Quantity',BestBefore='$BestBefore' WHERE StockId = '$StockId'";
    mysqli_query($con,$query);
    echo"<div >
    		<center><p>
			<h3>Stock Updated Successfully!</h3><br>
			StockId : $StockId<br>
			BloodGroup : $BloodGroup<br>
			Status : $Status<br>
			Quantity : $Quantity<br>
			BestBefore : $BestBefore<br>
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