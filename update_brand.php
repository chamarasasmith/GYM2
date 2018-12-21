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
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/main1.css">
        <link rel="stylesheet" href="css/cslayout.css">
    </head>
    <body>
        
        <div class="mob-12 tab-12 des-4"></div>
        <div class="mob-12 tab-12 des-4" style="text-align: center">
            <h1 style="text-align: center">Update Brand</h1>
            <form name="upd1" action="update_brand.php" method="POST">
                 
                <select name="brand2">
                    <?php
                    $sql3 = "SELECT * FROM brand";
                    $result2 = $con->query($sql3);
                    if ($result2->num_rows > 0) {
                        while ($row1 = $result2->fetch_assoc()) {
                            ?>
                            <option>
                                <?php
                                echo $row1["idbrand"] . ':' . $row1["bname"];
                                ?>
                            </option>
                            <?php
                        }
                    } else {
                        
                    }
                    ?>
                </select><br><br>
                <input type="text" name="bname2" placeholder="Brand Name" /><br><br>
                <input type="submit" value="Update" name="upd3" />
            </form>
            <br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['upd3'])) {

                    $bname2 = $_POST['bname2'];
                    $brand2 = split(':', $_POST['brand2']);
                    
                    if (isset($bname2)) {
                        if (!empty($bname2)) {
                                 $sql = "UPDATE gym2.brand SET bname='$bname2' WHERE idbrand='$brand2[0]'";

                                if ($con->query($sql) === TRUE) {
                                    echo "Update Success";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }
                            }
                    }
                }
            }
            $con->close();
            ?>

        </div>
        <div class="mob-12 tab-12 des-4"></div>

        
        <?php
       
        ?>
    </body>
</html>
