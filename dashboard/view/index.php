<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #00aeff;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php
                                                session_start();
                                                echo "Welcome, " . $_SESSION["first-name"] . " " . $_SESSION["last-name"];
                                                ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../../users/view/index.php">List</a>
                    </li>
                </ul>
            </div>
            <div class="row" style="margin: 0;"><a href="../../users/controller/LogoutController.php" class="btn btn-outline-danger">Logout</a></div>
        </div>
    </nav>

    <div class="content">
        <div class="project-title">
            <span>Your projects</span>
        </div>
        <div class="announcement-title"><span>Announcements</span></div>
        <div class="project-container">
            <div class="card-container">
                <div class="card">
                    <div class="title">Super Cool Project</div>
                    <div class="body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="status-buttons">
                        <i class="bi bi-eye"></i>
                        <i class="bi bi-bookmarks"></i>
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="title">Super Cool Project</div>
                    <div class="body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="status-buttons">
                        <i class="bi bi-eye"></i>
                        <i class="bi bi-bookmarks"></i>
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="title">Super Cool Project</div>
                    <div class="body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="status-buttons">
                        <i class="bi bi-eye"></i>
                        <i class="bi bi-bookmarks"></i>
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="title">Super Cool Project</div>
                    <div class="body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="status-buttons">
                        <i class="bi bi-eye"></i>
                        <i class="bi bi-bookmarks"></i>
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="title">Super Cool Project</div>
                    <div class="body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="status-buttons">
                        <i class="bi bi-eye"></i>
                        <i class="bi bi-bookmarks"></i>
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="title">Super Cool Project</div>
                    <div class="body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="status-buttons">
                        <i class="bi bi-eye"></i>
                        <i class="bi bi-bookmarks"></i>
                        <i class="bi bi-share"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="announcement-container">
            <div class="news">
                <span class="main-title">Site Maintenance</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                <hr>
                <span class="main-title">Site Maintenance</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
                <hr>
                <span class="main-title">Site Maintenance</span>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
            </div>
            <div class="trending">Trending</div>
            <div class="trending-container">
                <div class="social-container">
                    <div class="pfp">
                        <img src="../../assets/images/placeholder.jpg" alt="loki" class="pfp">
                    </div>
                    <div class="username" id="username-text">
                        <span>@tegan</span>
                        <span>World Peace Builder</span>
                    </div>
                </div>
                <div class="social-container">
                    <div class="pfp">
                        <img src="../../assets/images/placeholder.jpg" alt="pfp1" class="pfp">
                    </div>
                    <div class="username" id="username-text">
                        <span>@morgan</span>
                        <span>Super Cool Project</span>
                    </div>
                </div>
                <div class="social-container">
                    <div class="pfp">
                        <img src="../../assets/images/placeholder.jpg" alt="pfp2" class="pfp">
                    </div>
                    <div class="username" id="username-text">
                        <span>@kendall</span>
                        <span>Life Changing App</span>
                    </div>
                </div>
                <div class="social-container">
                    <div class="pfp">
                        <img src="../../assets/images/placeholder.jpg" alt="pfp3" class="pfp">
                    </div>
                    <div class="username" id="username-text">
                        <span>@alex</span>
                        <span>No Traffic Maker</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="../../users/app/ListUsers.js" defer></script>
</body>

</html>