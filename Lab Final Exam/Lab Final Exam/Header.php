<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <style>
        /* Basic Navbar Styles */
        nav {
            background: #333;
            padding: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            display: block;
            transition: background 0.3s;
        }

        nav ul li a:hover {
            background: #555;
        }

        /* Dropdown Menu */
        nav ul li ul {
            position: absolute;
            top: 100%;
            left: 0;
            background: #444;
            min-width: 180px;
            display: none;
            padding: 0;
        }

        nav ul li ul li {
            display: block;
            width: 100%;
        }

        nav ul li ul li a {
            padding: 10px;
            display: block;
            color: white;
            text-align: left;
        }

        nav ul li ul li a:hover {
            background: #666;
        }

        /* Show dropdown on hover for desktop */
        nav ul li:hover ul {
            display: block;
        }

        /* Mobile Menu */
        .menu-toggle {
            display: none;
            font-size: 24px;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            padding: 10px;
        }

        @media (max-width: 600px) {
            nav ul {
                display: none;
                flex-direction: column;
                width: 100%;
                background: #333;
                position: absolute;
                top: 50px;
                left: 0;
                z-index: 10;
            }

            nav ul li {
                text-align: center;
            }

            .menu-toggle {
                display: block;
            }

            /* Show dropdown on click in mobile */
            nav ul.active {
                display: flex;
            }

            nav ul li ul {
                position: static;
                background: #444;
                display: none;
            }

            nav ul li ul.active {
                display: block;
            }
        }
    </style>
</head>
<body>

    <nav>
        <button class="menu-toggle">☰</button>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="personal-info.php" class="dropdown-toggle">About Me</a>
                <ul>
                    <li><a href="personal-info.php">Personal Info</a></li>
                    <li><a href="educational-info.php">Educational Info</a></li>
                    <li><a href="work-info.php">Work Info</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact Me</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </nav>

    <script>
        document.querySelector(".menu-toggle").addEventListener("click", function() {
            document.querySelector("nav ul").classList.toggle("active");
        });

        document.querySelector(".dropdown-toggle").addEventListener("click", function(event) {
            event.preventDefault();
            this.nextElementSibling.classList.toggle("active");
        });
    </script>

</body>
</html>
