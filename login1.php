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
            <h1 style="text-align: center">Login</h1>
            <form name="login1" action="login1.php" method="POST">
                <input type="text" name="un2" placeholder="Username" /><br><br>
                <input type="password" name="pw2" placeholder="Password" /><br><br>
                <input type="submit" value="Login" name="log1" />
            </form>
            <br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['log1'])) {

                    $un2 = $_POST['un2'];
                    $pw2 = $_POST['pw2'];

                    $sql = "SELECT * FROM user1 WHERE un='$un2' && pw='$pw2'";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        echo 's';
                        header('Location:index.php');
                    } else {
                        echo '<h1>Try Again !!</h1>';
                    }
                }
            }
            $con->close();
            ?>


        </div>
        <div class="mob-12 tab-12 des-4"></div>




        <?php
// put your code here
        ?>
    </body>
</html>
