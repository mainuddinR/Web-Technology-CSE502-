<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <h1>Contact Me</h1>
        <?php
        include("Header.php");
        ?>
    </header>
    <main>
        <section>
            <h2>Contact Me</h2>
            <form id="contactForm" action="submit-contact.php" method="post">

                <input type="text" name="name" id="name" placeholder="Your Name" required>
                <input type="email" name="email" id="email" placeholder="Your Email" required>
                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                <textarea name="message" id="message" placeholder="Your Message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>
    <?php
        include("footer.php");
    ?>
</body>

</html>