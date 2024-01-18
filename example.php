<?php
session_start();

// unset($_SESSION['username']);
// session_unset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example </title>
</head>

<body>
    <main>
        <!-- <form class="searchform" action="search.php" method="post">
            <label for="search">Search for user:</label>
            <input id='search' type="text" name='usersearch' placeholder="Search...">
            <button>Search</button>
        </form> -->

        <div>The session remembers!!!</div>

    </main>

    <?php
    echo $_SESSION["username"];
    ?>
</body>

</html>