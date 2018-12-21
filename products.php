<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include './connection1.php';
    ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="overflow: auto; height: 1000px">
            <div><h1 style="text-align: center">Top 10 Best Bodybuilders</h1></div>
            <?php
                    $sql4 = "SELECT * FROM products";
                    $result4 = $con->query($sql4);
                    if ($result4->num_rows > 0) {
                        while ($row = $result4->fetch_assoc()) {
                            ?>
                            
            <div class="mob-12 tab-4 des-3" style="text-align: center">
                <h3 style="text-align: center"><?=$row["name"]?></h3>
                <img src="img/sup/hyde.jpg" style="width: 70%; margin-left: 15%; margin-right: 15%">
                <h3>LKR <?=$row["sp"]?></h3>
                <p style="color: red; height: 40px"><?=$row["des"]?></p>
                <!--<button class="">Add Cart</button>-->
                <!--<button>Buy Now</button>-->
                <hr>
                <br>
                <br>
            </div>
              <?php
                        }
                    } else {
                        
                    }
                    ?>
        
        </div>
        <br>
        <br>
    </body>
</html>
