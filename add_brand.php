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
            <h1 style="text-align: center">Add Brand</h1>
            <form name="add2" action="add_brand.php" method="POST">
                <input type="text" name="bname1" placeholder="Brand Name" /><br><br>
                <input type="submit" value="Add" name="save2" />
            </form>
            <br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['save2'])) {

                    $bname = $_POST['bname1'];

                    if (!empty($bname)) {

                        $sql3 = "SELECT * FROM brand WHERE bname='$bname'";
                        $result2 = $con->query($sql3);
                        if ($result2->num_rows > 0) {
                            echo "Aleady Exist";
                        } else {
                            $sql = "INSERT INTO gym2.brand(bname,st)VALUES ('$bname','1')";

                            if ($con->query($sql) === TRUE) {
                                echo "Save Success";
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
