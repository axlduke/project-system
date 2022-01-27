<?php
include 'dbconnection.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <title>Sidebar sub menus</title>
    </head>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="index.php" class="nav__logo">Tabaco Library</a>
                    </div>
                    <div class="nav__list">
                        <a href="index.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Dashboard</span>
                        </a>
                        <a href="#" class="nav__link">
                            <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Messenger</span>
                        </a>

                        <div  class="nav__link collapse">
                            <ion-icon name="book-outline"></ion-icon>
                            <span class="nav__name">Books</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="book.php" class="collapse__sublink">Books</a>
                                <a href="https://neoread.neovel.io/" class="collapse__sublink">Ebooks</a>
                            </ul>

                        </div>

                        <div class="nav__link collapse">
                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Users</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="#" class="collapse__sublink">UsersData</a>
                            </ul>
                        </div>
                        <div class="nav__link collapse">
                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">DataBase</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="database.php" class="collapse__sublink">Data</a>
                            </ul>
                        </div>
                        <a href="setting.php" class="nav__link">
                            <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Settings</span>
                        </a>
                    </div>
                </div>

                <a href="signin.php" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <h1>Setting</h1>


        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!-- ===== MAIN JS ===== -->
        <script src="assets/js/main.js"></script>

    </body>
</html>
