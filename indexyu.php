
<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>e-Voting system</title>
    <link rel="stylesheet" href="../include/css/indexcss.css">
   
</head>

<body>

    <div class="log">

    <h1 align="center">e-Voting login page</h1> 

        <form action="index_function.php" method="POST" enctype="multipart/form-data">

           Username<input type="text" name="reg_no" placeholder="Enter username" class="D1" required><br>

            Password<input type="password" name="password" placeholder="Enter your Password" class="Dpassword1" required><br>

            <div class="bt1">
                <button type="submit" name="submit" class="bt">login</button><br>
</div>
        </form>
    </div>
</body>
</html>
