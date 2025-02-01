<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Contact List</h1>
        <?php
        include("Header.php");
        ?>
    </header>
    <main>
        <section>
            <h2>Contact List</h2>
            <!-- Table to display contact information -->
            <table id="contactTable" border='1' cellspacing=0>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        <?php include("fetch-contact.php"); ?>
                    </div>
                </tbody>
            </table>
            <button style="background: blue; color: white; padding: 10px; margin-top: 100px;">
                <a href="admin-logout.php" style="color: white; text-decoration: none; display: block;">Logout</a>
            </button>



        </section>
    </main>
    <?php
    include("footer.php");
    ?>
</body>
</html>