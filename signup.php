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
       <div class="mob-12 tab-12 des-4"></div>
        <div class="mob-12 tab-12 des-4" style="text-align: center">
            <h1 style="text-align: center">Sign Up</h1>
            <form name="add3" action="signup.php" method="POST" enctype="multipart/form-data">
                <img src="" id="imgv2" style="width: 200px; height: 200px">
                <input type="file" name="img2" style="width: 100%" onchange="setImg1()" />
                <input type="text" name="un1" placeholder="Username" /><br><br>
                <input type="password" name="pw1" placeholder="Password" /><br><br>
                <input type="text" name="fn1" placeholder="First Name" /><br><br>
                <input type="text" name="ln1" placeholder="Last Name" /><br><br>
                <input type="text" name="email1" placeholder="Email" /><br><br>
                <input type="text" name="tel1" placeholder="Telephone" /><br><br>
                <input type="text" name="street1" placeholder="Street" /><br><br>
                <input type="text" name="city1" placeholder="City" /><br><br>
                <input type="text" name="country1" placeholder="Country" /><br><br>
                <input type="submit" value="Sign Up" name="signup1" />
            </form>
            <br>
  
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['signup1'])) {

                    $name = $_FILES['img2']['name'];
                    $tname = $_FILES['img2']['tmp_name'];

                    $un1 = $_POST['un1'];
                    $pw1 = $_POST['pw1'];
                    $fn1 = $_POST['fn1'];
                    $ln1 = $_POST['ln1'];
                    $email1 = $_POST['email1'];
                    $tel1 = $_POST['tel1'];
                    $street1 = $_POST['street1'];
                    $city1 = $_POST['city1'];
                    $country1 = $_POST['country1'];

                    if (isset($name)) {
                        if (!empty($name)) {
                            $path1 = 'uploaded/';
                            $path2 = $path1 . $name;
                            if (move_uploaded_file($tname, $path2)) {



                                $sql = "INSERT INTO gym2.user1(un,pw,img1,email,fname,lname,tel,street,city,country,st)VALUES ('$un1','$pw1','$path2','$email1','$fn1','$ln1','$tel1','$street1','$city1','$country1','1')";

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
