<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5c14b0052b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Styles/css.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <!-- Content for Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Lyceum-Aparri</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Pages
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled-collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Page 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Page 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Posts
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled-collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Posts 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Posts 2</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Posts 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar">
                <button class="btn">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="Js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>