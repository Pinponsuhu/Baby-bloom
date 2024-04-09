<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby Bloom | Login Page</title>
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header id="desktop-menu">
        <h1>Baby Bloom</h1>
        <nav>
            <a href="">Home</a>
            <a href="">Products</a>
            <a href="">About</a>
            <a href="">Blogs</a>
            <a href="./login.html" id="login">Login</a>
        </nav>
    </header>
    <header id="mobile-nav">
        <div id="mobile-wrap">
            <h1>Baby Bloom</h1>
            <i class="fa fa-bars" id="menu-btn"></i>
        </div>
        <nav id="mobile-list">
            <a href="">Home</a>
            <a href="">Products</a>
            <a href="">About</a>
            <a href="">Blogs</a>
            <a href="./login.html" id="login">Login</a>
        </nav>
    </header>
    <main>
        <section id="hero">
            <section id="text-section">
                <h1>Nurturing little ones <br>with love and care</h1>
                <p>Introducing the softest and most absorbent <br>diapers for your little ones ultimate comfort.</p>
                <a href="">Pregnancy Tools</a>
            </section>
            <img src="./assets/hero-img.png" alt="Hero Image of mother and child" srcset="">
        </section>
        <section id="login">
            <form action="./include/handle_login.php" method="post">
                <h1>Welcome back</h1>
                <p>Don't have an account? <a href="./register.html">Register</a></p>
                <label for="">Email address</label>
                <input type="email" name="email" id="">
                <label for="">Password</label>
                <input type="password" name="password" id="">
                <button name="login">Login</button>
            </form>
        </section>
    </main>
    <footer>
        <section id="socials">
            <h3>We would love to here from you</h3>
            <div>
                <a href=""><i class="fa fa-facebook-official"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-youtube-play"></i></a>
                <a href=""><i class="fa fa-envelope"></i></a>
            </div>
        </section>
        <section id="footer-section">
            <section id="location">
                <h4>BabyBloom</h4>
                <p>
                    Discover a world of tips, tricks, and community support at Baby Bloom. Your go-to resource for all things baby. Join us on this incredible journey of parenthood!</p>
            </section>
                <section id="quicklinks">
                    <section id="one">
                        <h4>QuickLinks</h4>
                        <a href="">Home</a>
                        <a href="">Products</a>
                        <a href="">About</a>
                        <a href="">Blogs</a>
                        <a href="">Login</a>
                    </section>
                    <section id="two">
                        <h4>Blogs</h4>
                        <a href="">Home</a>
                        <a href="">Products</a>
                        <a href="">About</a>
                        <a href="">Blogs</a>
                    </section>
                    <section id="three">
                        <h4>Newsletter</h4>
                        <form action="" method="post">
                            <input type="email" name="" placeholder="Subscribe to our newsletter" id="">
                            <button>Submit</button>
                        </form>
                    </section>
                </section>
        </section>
        <section id="footer">
            <p>&copy; 2024 Baby Bloom. All Rights Reserved.</p>
        </section>
    </footer>
    <script src="./js/main.js"></script>

</body>
</html>