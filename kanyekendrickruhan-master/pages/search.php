<!DOCTYPE html>
<html lang="en" style="background-color: #8177dd;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles/styles.css">
    <title>Players</title>
    <script src="../scripts/homepage.js"></script>
    <link rel="stylesheet" href="../styles/home.css" />
</head>
<body>
    <button onclick="goBack()" class="arrow">Go Back</button>
<style>

</style>
<?php
    $user = 'root';
        $password = "";
        $db = "albums";

        $db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");

        // echo "database connected";
    $query = mysqli_real_escape_string($db, $_GET['query']);
    $sql = "SELECT * FROM sales WHERE name LIKE '%$query%'";
    $result = $db->query($sql); ?>







        <table style="height: wrap;width:97vw; position: relative; top: 0; bottom: 0; left: 0; right: 0;border:6px double black; border-radius: 10px">
            <tr style="font-size: 25px; text-align: left; outline: 3px groove; font-family: fantasy, copperplate;">
                <th>name</th>
                <th>year</th>
                <th>Chart Position</th>
                <th>Sales</th>
                <th>Certifications</th>

            </tr>

    <?php if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
        
        <tr class="data" style="outline: 1px black; font-family: fantasy, copperplate;">
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['year'];?></td>
                        <td><?php echo $row['US'];?></td>
                        <td><?php echo $row['Sales'];?></td>
                        <td><?php echo $row['Certifications'];?></td>

                    </tr>
    <?php }
    
    } else {
    echo "0 results";
    }
    $db->close(); ?>
    
    </table>

</body>
</html>