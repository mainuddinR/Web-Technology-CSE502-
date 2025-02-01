<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Login</h1>
        <?php
        include("Header.php");
        ?>
    </header>
    <main>
        <section>
            <h2>Admin Login</h2>
            <form id="adminLoginForm" action="admin-login.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </section>
    </main>
    <?php
        include("footer.php");
    ?>
</body>
</html>
