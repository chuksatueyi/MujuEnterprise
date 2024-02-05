<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
</head>
<body>
    <form action="test.php" method="post">
        <input type="text" name="name">
        <button type="submit"></button>
    </form>
    <?php 
        echo $_POST["name"];
    ?>
</body>
</html>