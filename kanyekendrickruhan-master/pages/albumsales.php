<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="bear.jpg" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kanye</title>
    <style>
        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }
        
        .row {
            text-align: center;
            float: center;
            margin-left: 25%;
        }
        
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        body {
            background-color: #8177dd;
        }
        
        p {
            background-color: #e4dcc9;
            box-shadow: 6px 10px #a8a495;
            border-radius: 15px;
            font-size: 20px;
            position: sticky;
            text-align: center;
        }
        
        img {
            position: sticky;
            z-index: -1;
        }
        
        .mainpoint {
            text-align: center;
            margin-left: 20%;
            margin-right: 20%;
        }
        
        .albtitle {
            font-family: fantasy, copperplate;
            font-weight: lighter;

        }
    </style>
    <script src="../scripts/homepage.js"></script>
    <link rel="stylesheet" href="../styles/home.css" />
</head>`

<body>
    <br />
    <button onclick="goBack()" class="arrow">Go Back</button>

    <div class="topalign">
        <div class="topnav">
            <br />
            <a href="#title" class="top">Figures of Inspiration</a>
            <br />
            <br />
            <a href="index.html" class="active">Home</a>
            <a href="kendrick.html" class="kenny">Kendrick</a>
            <a href="kanye.html" class="yeezy">Kanye</a>
            <a href="ruhan.html" class="glow">Ruhan</a>
            <a href="albumsales.php" class="database">Album Sales</a>
            <br>
            <br>
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br>
    <br>

    <h1 class="albtitle" style="text-align: center">Album Sales Database</h1>
    <form action="search.php" method="GET">.
        <input name="query" id="search" type="text" placeholder="Search Albums.." style="
        float: left;
        display: block;
    width: 150px;
    height: 50px;
    border-radius: 25px;
    background: #DEA5A4;
    font-family: fantasy, copperplate;
    color: black;
    font-size: 25px;
    line-height: auto;
    text-align: center;
    width: 500px;">

        <input id="Search" type="submit" value="Search" style="
        float: left;
        height: 50px;
        padding: 6px;
        border-radius: 25px;
    background: #DEA5A4;
    font-family: fantasy, copperplate;
    color: black;
    font-size: 25px;
    line-height: auto;
    text-align: center;">
      </form>  
    <?php
        $user = 'root';
        $password = "";
        $db = "albums";

        $db = new mysqli('localhost', $user, $password, $db) or die("unable to connect");

        // echo "database connected";

        $sql = "SELECT * FROM `sales`;";
        $result = mysqli_query($db, $sql);



?>

        <table style="height:50vh;width:97vw; position: relative; top: 0; bottom: 0; left: 0; right: 0;border:6px double black; border-radius: 10px">
            <tr style="font-size: 25px; text-align: left; outline: 3px groove; font-family: fantasy, copperplate;">
                <th>name</th>
                <th>year</th>
                <th>Chart Position</th>
                <th>Sales</th>
                <th>Certifications</th>

            </tr>
            <?php 
                if($result -> num_rows > 0){
                    while($row = $result->fetch_assoc()) { ?>
                    <tr class="data" style="outline: 1px solid black; font-family: fantasy, copperplate;">
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['year'];?></td>
                        <td><?php echo $row['US'];?></td>
                        <td><?php echo $row['Sales'];?></td>
                        <td><?php echo $row['Certifications'];?></td>

                    </tr>
                 <?php   }
                } ?>
        </table>
</body>

</html>