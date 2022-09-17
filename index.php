<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="name" placeholder ="Name"><br><br>
            <input type="submit" name="submit" value="submit"><br><br>
        </form>
        <h1>check data type</h1>
        <?php
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
        }
        echo "$name"
        ?>
    </div>
</body>
</html>