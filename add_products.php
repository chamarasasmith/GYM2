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
            <h1 style="text-align: center">Add Products</h1>
            <form name="add1" action="add_products.php" method="POST" enctype="multipart/form-data">
                <select name="cat1">
                    <?php
                    $sql2 = "SELECT * FROM category";
                    $result = $con->query($sql2);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <option>
                                <?php
                                echo $row["idcategory"] . ':' . $row["cname"];
                                ?>
                            </option>
                            <?php
                        }
                    } else {
                        
                    }
                    ?>
                </select><br><br>
                
                <select name="brand1">
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
                <input type="text" name="pname1" placeholder="Product Name" /><br><br>
                <input type="file" name="img1" style="width: 100%"/>
                <input type="text" name="cp1" placeholder="Cost Price" /><br><br>
                <input type="text" name="sp1" placeholder="Sale Price" /><br><br>
                <input type="text" name="qty1" placeholder="Qty" /><br><br>
                <textarea name="des1" rows="4"  placeholder="Description"></textarea><br><br>
                <input type="submit" value="Add" name="save1" />
            </form>
            <br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['save1'])) {

                    $name = $_FILES['img1']['name'];
                    $tname = $_FILES['img1']['tmp_name'];

                    $pname = $_POST['pname1'];
                    $cp1 = $_POST['cp1'];
                    $sp1 = $_POST['sp1'];
                    $qty1 = $_POST['qty1'];
                    $cat1 = split(':', $_POST['cat1']);
                    $brand1 = split(':', $_POST['brand1']);
                    $des1 = $_POST['des1'];
                    

                    if (isset($name)) {
                        if (!empty($name)) {
                            $path1 = 'uploaded/';
                            $path2 = $path1 . $name;
                            if (move_uploaded_file($tname, $path2)) {



                                $sql = "INSERT INTO gym2.products(name,cp,sp,qty,des,img,st,brand_idbrand,category_idcategory)VALUES ('$pname','$cp1','$sp1','$qty1','$des1','$path2','1','$brand1[0]','$cat1[0]')";

                                if ($con->query($sql) === TRUE) {
                                    echo "Save Success";
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }
                            } else {
                                echo 'Uploaded Fail';
                            }
                        } else {
                            echo 'Please Select Image';
                        }
                    }
                }
            }
            $con->close();
            ?>

        </div>
        <div class="mob-12 tab-12 des-4"></div>

    </body>
</html>
