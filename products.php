//last edited by Todd on 3/26
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="JavaScript.js"></script>
<title>Business Incorporated</title>
<style>
    
    .productCSS{
        text-align: center;
    }
    .productCSS tr td{
        padding: 10px;
    }
    
    .productCSS tr th{
        padding: 10px;
    }

	table{
background-color:white;
}
</style>
</head>
    <body>
        <div>
            <center>
                <?php
                    
                    $userName=$_GET["userName"];
                    $userPassword=$_GET["userPassword"];
                    
                    
                    
                    
                    $servername = "willy";
                    $username = "COMP305_Group1";
                    $password = "Group1";
                    $dbname = "COMP305_Group1";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    
                    $sql = "SELECT * FROM Products";
                    //echo $sql;
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<table border class='productCSS'><tr><th></th><th>Price</th><th>Description</th><th>Quantity</th></tr>";
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td><img src='image/".$row["Image"].".jpg'/></td><td>".$row["Price"]."</td><td>".$row["Description"]."</td><td>".$row["Quanity"]."</td><td><input type='button' value='Add' onclick=''></td></tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </center>
        </div>
    </body>
</html>
