//last edited by Todd on 3/26
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<link rel="stylesheet" type="text/css" href="css/General.css" media="screen" />
<script type="text/javascript" src="js/JavaScript.js"></script>
    <title>Business Incorporated</title>
</head>
    <body>
        <div>
            <center>
                <?php
                    
                    $userName=$_POST["userName"];
                    $userPassword=$_POST["userPassword"];
                    
                    
                    
                    
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
                    
                    $sql = "SELECT Username, pass_word FROM Customer where Username='{$userName}' and pass_word='{$userPassword}'";
                    //echo $sql;
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        header( "Location: products.php" );
                    } else {
                        echo "Username or Password incorrect";
                    }
                    $conn->close();
                ?>
            </center>
        </div>
    </body>
</html>
