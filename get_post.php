<?php 
    
    if (isset($_GET['name'])) {
        $name = htmlentities($_GET['name']);  
        echo $name;

        print_r($_GET);

    }
/*
    if (isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);
        echo $name;

        print_r($_POST);
    }

    if (isset($_REQUEST['name'])) {
        $name = htmlentities($_REQUEST['name']);
        echo $name;
    }
    */

    // just make sure u're using a GET method for the query string  
    if (isset($_SERVER['QUERY_STRING'])) {
        $queryString = htmlentities($_SERVER['QUERY_STRING']);
        echo $queryString;
    }
    // echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some Website</title>
</head>
<body>
    <form action="get_post.php" method="GET">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=thando">Thando</a>
        </li>
        <li>
            <a href="get_post.php?name=mncedi">Mncedi</a>
        </li>
    </ul>

    <h1><?php echo ucfirst("{$name}")."'s profile"; ?></h1>

</body>
</html>