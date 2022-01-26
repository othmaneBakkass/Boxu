<?php
session_start();
if (!isset($_SESSION['login']) || empty($_SESSION['userName']) || empty($_SESSION['password'])) {
    header("location:./login.php?nono7abibi");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boxu</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/cst.css">
</head>

<body>
    <header>
        <nav class="nav-tabs">
            <ul class="nav-item-group">
                <li class="nav-item "><a href="./index.php" class="nav-link nav-link-home ">home</a></li>
                <li class="nav-item"><a href="./sub.php" class="nav-link nav-link-subscription">subscription boxes</a>
                </li>
                <li class="nav-item"><a href="./order.php" class="nav-link nav-link-preset">themed boxes</a></li>
                <li class="nav-item"><a href="./cst.php" class="nav-link nav-link-custom nav-active">custom boxes</a></li>
                <li class="nav-item">
                    <form action="logout.php" method="POST"><button type="submit" class="sign-out-btn">Sign Out</button></form>
                </li>

                <li>
                    <ul class="nav-item-group-icons">
                        <li class="nav-item-icons"><a href="#">
                                <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 8.04899C16 3.60355 12.4184 0 8.001 0C3.58155 0.000999875 0 3.60355 0 8.04999C0 12.0665 2.92563 15.3961 6.74916 16V10.3757H4.71941V8.04999H6.75116V6.27521C6.75116 4.25847 7.94601 3.14461 9.77278 3.14461C10.6487 3.14461 11.5636 3.30159 11.5636 3.30159V5.28134H10.5547C9.5618 5.28134 9.25184 5.90226 9.25184 6.53918V8.04899H11.4696L11.1156 10.3747H9.25084V15.999C13.0744 15.3951 16 12.0655 16 8.04899Z" fill="black" />
                                </svg>
                            </a></li>
                        <li class="nav-item-icons"><a href="#">
                                <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.99785 5.3321C6.52888 5.3321 5.3301 6.53089 5.3301 7.99985C5.3301 9.46882 6.52888 10.6676 7.99785 10.6676C9.46681 10.6676 10.6656 9.46882 10.6656 7.99985C10.6656 6.53089 9.46681 5.3321 7.99785 5.3321ZM15.9991 7.99985C15.9991 6.89513 16.0091 5.80041 15.9471 4.69768C15.885 3.41684 15.5928 2.28009 14.6562 1.34348C13.7176 0.404861 12.5829 0.11467 11.302 0.0526294C10.1973 -0.00941132 9.10258 0.000595279 7.99985 0.000595279C6.89512 0.000595279 5.80041 -0.00941132 4.69768 0.0526294C3.41684 0.11467 2.28009 0.406862 1.34348 1.34348C0.404861 2.28209 0.11467 3.41684 0.0526294 4.69768C-0.00941132 5.80241 0.000595279 6.89713 0.000595279 7.99985C0.000595279 9.10258 -0.00941132 10.1993 0.0526294 11.302C0.11467 12.5829 0.406862 13.7196 1.34348 14.6562C2.28209 15.5948 3.41684 15.885 4.69768 15.9471C5.80241 16.0091 6.89713 15.9991 7.99985 15.9991C9.10458 15.9991 10.1993 16.0091 11.302 15.9471C12.5829 15.885 13.7196 15.5928 14.6562 14.6562C15.5948 13.7176 15.885 12.5829 15.9471 11.302C16.0111 10.1993 15.9991 9.10458 15.9991 7.99985V7.99985ZM7.99785 12.1045C5.72636 12.1045 3.89315 10.2713 3.89315 7.99985C3.89315 5.72836 5.72636 3.89515 7.99785 3.89515C10.2693 3.89515 12.1025 5.72836 12.1025 7.99985C12.1025 10.2713 10.2693 12.1045 7.99785 12.1045ZM12.2707 4.68567C11.7403 4.68567 11.312 4.25739 11.312 3.72704C11.312 3.1967 11.7403 2.76841 12.2707 2.76841C12.801 2.76841 13.2293 3.1967 13.2293 3.72704C13.2294 3.85298 13.2048 3.9777 13.1566 4.09408C13.1085 4.21046 13.0379 4.3162 12.9489 4.40525C12.8598 4.4943 12.7541 4.5649 12.6377 4.61302C12.5213 4.66114 12.3966 4.68583 12.2707 4.68567V4.68567Z" fill="black" />
                                </svg>

                            </a></li>
                        <li class="nav-item-icons"><a href="#">
                                <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.2857 0H1.71429C0.767857 0 0 0.767857 0 1.71429V14.2857C0 15.2321 0.767857 16 1.71429 16H14.2857C15.2321 16 16 15.2321 16 14.2857V1.71429C16 0.767857 15.2321 0 14.2857 0ZM12.5393 5.67143C12.5464 5.77143 12.5464 5.875 12.5464 5.975C12.5464 9.07143 10.1893 12.6393 5.88214 12.6393C4.55357 12.6393 3.32143 12.2536 2.28571 11.5893C2.475 11.6107 2.65714 11.6179 2.85 11.6179C3.94643 11.6179 4.95357 11.2464 5.75714 10.6179C4.72857 10.5964 3.86429 9.92143 3.56786 8.99286C3.92857 9.04643 4.25357 9.04643 4.625 8.95C3.55357 8.73214 2.75 7.78929 2.75 6.65V6.62143C3.06071 6.79643 3.425 6.90357 3.80714 6.91786C3.48587 6.70416 3.22249 6.41424 3.04053 6.07398C2.85856 5.73373 2.76365 5.35372 2.76429 4.96786C2.76429 4.53214 2.87857 4.13214 3.08214 3.78571C4.23571 5.20714 5.96786 6.13571 7.91071 6.23571C7.57857 4.64643 8.76786 3.35714 10.1964 3.35714C10.8714 3.35714 11.4786 3.63929 11.9071 4.09643C12.4357 3.99643 12.9429 3.8 13.3929 3.53214C13.2179 4.075 12.85 4.53214 12.3643 4.82143C12.8357 4.77143 13.2929 4.63929 13.7143 4.45714C13.3964 4.925 12.9964 5.33929 12.5393 5.67143Z" fill="black" />
                                </svg>

                            </a></li>
                    </ul>
                </li>
            </ul>

        </nav>
        <div class="navbar">
            <div class="logo"> Boxu</div>
            <div class="nav-icon-group">
                <img class="nav-icon-open" src="./imgs/icons/nav-icon-open.svg" alt="" srcset="">
                <img class="nav-icon-close nav-hidden" src="./imgs/icons/nav-icon-close.svg" alt="" srcset="">
            </div>
        </div>
    </header>
    <main>
        <div class="place-holder"></div>
        <section class="page-links">
            <ul>
                <li><a href="./index.php">Home/</a></li>
                <li><a href="./cst.php">Custom boxes</a></li>
            </ul>
        </section>
        <section class="hero">
            <img class="hero-img" src="./imgs/boxs/cst-hero.svg" alt="" srcset="">
            <h1 class="hero-title">Make It Your Own !!!</h1>
        </section>
        <section class="questions">
            <div class="questions-title">
                <h2>please answer these questions :</h2>
            </div>
            <div class="questions-content">
                <ul>
                    <li>
                        Your email ?
                    </li>
                    <li>
                        The name of the person receiving this box ?
                    </li>
                    <li>
                        Their Age?
                    </li>
                    <li>
                        The country their living in? and their address?
                    </li>
                    <li>
                        Any allergies or dislikes they have ?
                    </li>
                    <li>
                        The amount of money you willing to give ?
                    </li>
                    <li>
                        the theme of the box?
                    </li>
                </ul>
            </div>
        </section>
        <?php
        if (isset($_POST['order-submit'])) {
            $temp = $_FILES['orderImg']['tmp_name'];
            $nom = $_FILES['orderImg']['name'];
            $destination = "./cst-img/$nom";
            move_uploaded_file($temp, $destination);
        }
        ?>
        <section class="write-order">
            <form class="order-form" action="cst.php" method="POST" enctype="multipart/form-data">
                <div class="form-content">
                    <div class="order-field-1">
                        <label for="order-email" class="order-email-tag">Your Email:</label>
                        <input type="text" name="orderName" id="order-email">
                        <label class="order-email-tag">Upload an image: </label>
                        <label for="order-img" id="order-img-btn">Select a file</label>
                        <input type="file" name="orderImg" id="order-img">
                        <?php

                        if (isset($_POST['order-submit'])) {
                            echo ('<div class="img-container" ><img style="max-width : 100%;" src="./cst-img/' . $nom . '"></div>');
                        }
                        ?>
                        <label style="align-self: flex-start;">(optional)</label>
                    </div>
                    <div class="order-field-2">
                        <label for="message-box" class="message-tag">Your Message:</label>
                        <textarea name="messageBox" id="message-box"></textarea>
                    </div>
                </div>
                <div class="order-btn-container">
                    <button class="submit-order" name="order-submit" type="submit">Send</button>
                </div>
            </form>

        </section>

    </main>
    <footer>
        <img class="footer-wave" src="./imgs/waves/login-bottom-wave.svg" alt="" srcset="">
        <div class="footer-content">
            <div>
                <h4>
                    Boxu &copy; since 2022
                </h4>
            </div>
            <div>
                <h4>Made By Monochrome</h4>
            </div>
        </div>
    </footer>
    <script src="./js/script.js"></script>
</body>

</html>