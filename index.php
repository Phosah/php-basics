<?php
session_start();

$_SESSION["username"] = "phosah";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php practice with Dani Krossing</title>
</head>

<body>
    <main>

        <form class="searchform" action="search.php" method="post">
            <label for="search">Search for user:</label>
            <input id='search' type="text" name='usersearch' placeholder="Search...">
            <button>Search</button>
        </form>

        <!-- <h3>Change account</h3>

        <form action="includes/userupdate.inc.php" method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="pwd" placeholder="Password" />
            <input type="email" name="email" placeholder="Email" />
            <button>Update</button>
        </form>

        <h3>Delete account</h3>

        <form action="includes/userdelete.inc.php" method="post">
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="pwd" placeholder="Password" />
            <button>Delete</button>
        </form> -->


        <form action="includes/formhandler.inc.php" method="post">
            <input type="text" name="username" placeholder="Username..." />
            <input type="password" name="pwd" placeholder="Password" />
            <input type="email" name="email" placeholder="Email" />
            <button>Signup</button>
        </form>

        <!-- <form action='includes/formhandler.php' method='post'>
        <label for='firstname'>Firstname</label>
        <input id='firstname' type='text' name='firstname' placeholder="Firstname...">

        <label for='lastname'>Lastname</label>
        <input id='lastname' type='text' name='lastname' placeholder="lastname...">

        <label for='favoritepet'>Favorite Pet</label>
        <select id='favoritepet' name='favoritepet'>
            <option value='none'>None</option>
            <option value='dog'>Dog</option>
            <option value='cat'>Cat</option>
            <option value='bird'>Bird</option>
        </select>

        <button type='submit' name='submit'>Submit</button>
    </form> -->
    </main>

    <?php
    echo $_SESSION["username"];
    ?>
</body>


</html>