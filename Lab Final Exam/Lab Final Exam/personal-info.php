<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Personal Info</h1>
        <?php
        include("Header.php");
        ?>
    </header>
    <main>
        <section>
            <h2>About Me</h2>
                    <p>I am passionate about coding and problem-solving. Aiming to carve a niche in the tech industry, I'm dedicated to honing my skills in web development and UI/UX design. Actively engaged in learning and applying theoretical knowledge to real-world projects. Open to collaboration, eager to contribute, and excited about the journey of continuous growth in the dynamic field of software engineering.</p>

                    <div class="container">
                        <h2>My Projects</h2>
                        <div class="project">
                            <img src="./images/project1.png" alt="Graph Algorithm Implementation" height="200" weight="300">
                            <h3>TYPING TUTOR</h3>
                            <p>This project involves edit distance algorithms using C .</p>
                        </div>
                        <div class="project">
                            <img src="./images/Project02.png" alt="Parallax Website, IITDU (Homepage)" height="200" weight="300">
                            <h3>Normal Calculator</h3>
                            <p>using raw HTML and CSS, JavaScript.</p>
                            <a href="https://mainuddinr.github.io/Normal-Calculator/" class="btn" target="_blank">Source Code</a>
                        </div>
                        <!-- <div class="project">
                            <img src="./images/Project03.png" alt="Weather App API" height="200" weight="300">
                            <h3>Weather App API</h3>
                            <p>This Weather App, connected with API allows to access weather data and forecasts, providing temperature information etc.</p>
                            <a href="https://github.com/Rafid13iit/Practise-Projects/tree/main/Weather%20Web%20App" class="btn" target="_blank">Source Code</a>
                        </div> -->
                    </div>
        </section>
    </main>
    <?php
        include("footer.php");
    ?>
</body>
</html>
