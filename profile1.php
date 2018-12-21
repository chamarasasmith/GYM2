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
        
           <div class="mob-12 tab-12 des-3"></div>
        <div class="mob-12 tab-12 des-6" style="text-align: center">
            <h1 style="text-align: center">Profile</h1>
            <form name="update1" action="profile1.php" method="POST" enctype="multipart/form-data">
                <img src="" id="imgv2" style="width: 200px; height: 200px"><br><br>
                <input type="file" name="img2" style="width: 60%" onchange="setImg1()" />
                <input type="text" name="un1" placeholder="Username" id="un1" disabled style="width: 60%"/> 
                <button type="button" onclick="setEnable1('#un1')">Edit</button>
                <button type="button" onclick="setSave1('#un1')">Save</button><br><br>
                <input type="password" name="pw1" placeholder="Password" id="pw1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#pw1')">Edit</button>
                <button type="button" onclick="setSave1('#pw1')">Save</button><br><br>
                <input type="text" name="fn1" placeholder="First Name" id="fn1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#fn1')">Edit</button>
                <button type="button" onclick="setSave1('#fn1')">Save</button><br><br>
                <input type="text" name="ln1" placeholder="Last Name" id="ln1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#ln1')">Edit</button>
                <button type="button" onclick="setSave1('#ln1')">Save</button><br><br>
                <input type="text" name="email1" placeholder="Email" id="email1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#email1')">Edit</button>
                <button type="button" onclick="setSave1('#email1')">Save</button><br><br>
                <input type="text" name="tel1" placeholder="Telephone" id="tel1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#tel1')">Edit</button>
                <button type="button" onclick="setSave1('#tel1')">Save</button><br><br>
                <input type="text" name="street1" placeholder="Street" id="street1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#street1')">Edit</button>
                <button type="button" onclick="setSave1('#street1')">Save</button><br><br>
                <input type="text" name="city1" placeholder="City" id="city1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#city1')">Edit</button>
                <button type="button" onclick="setSave1('#city1')">Save</button><br><br>
                <input type="text" name="country1" placeholder="Country" id="country1" disabled style="width: 60%"/>
                <button type="button" onclick="setEnable1('#country1')">Edit</button>
                <button type="button" onclick="setSave1('#country1')">Save</button><br><br>
                
                <!--<input type="submit" value="Update" name="up1" disabled style="width: 80%"/>-->
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
        <div class="mob-12 tab-12 des-3"></div>

        
        <?php
        // put your code here
        ?>
    </body>
</html>
