<!DOCTYPE html>
<html lang="en" style="background-color: rgb(181, 136, 158);">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <title>Players</title>
</head>
<body>

<?php
    $user = 'root';
        $password = "";
        $db = "albums";

        $db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");

        // echo "database connected";
    $query = mysqli_real_escape_string($db, $_GET['query']);
    $sql = "SELECT * FROM sales WHERE name LIKE '%$query%'";
    $result = $db->query($sql); ?>


    <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
        
        <p style="font-family: Trebuchet MS; position: relative; top: 50px; left: 100px"> <?php echo $row["name"]. "<br>". "Sales: ".$row['Sales'] . "<br>". "Certifications: ".$row['Certifications'] . "<br>"; ?> </p>
        
    <?php }
    
    } else {
    echo "0 results";
    }
    $db->close(); ?>
    


</body>
</html>