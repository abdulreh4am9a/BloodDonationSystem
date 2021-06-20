<?php
    if(isset($_POST['type'])){
    require_once("connect.php");
    	$StockId = $_POST['StockId'];
    	$query="SELECT * FROM bloodstock WHERE StockId = '$StockId'";
        $result = $con->query($query);

        if($result->num_rows > 0){
            echo "<center><h3>Stock(s) Searched: </h3><br></center>";
            while($row = $result->fetch_assoc()){
                echo "<center>StockId: ".$row["StockId"]." <br> Blood Group: ".$row["BloodGroup"]." <br> Status: ".$row["Status"]." <br> Quantity: ".$row["Quantity"]." <br> Best Before: ".$row["BestBefore"]."<br></center>";
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