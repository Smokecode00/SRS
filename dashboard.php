<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CdN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> -->
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
                    <a href="dashboard.php">Lyceum-Aparri</a>
                </div>
                <!-- <div class="ms-4">
                    <a href="#" class="text-decoration-none text-light">Mark Bryan Labinay</a>
                </div> -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Admin
                    </li>
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Mission & Vision
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Mission</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Vision</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#courses" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-file-pen pe-1"></i>
                            Courses
                        </a>
                        <ul id="courses" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• BSHM</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• BSIT</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• BSAIS</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• BEED</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-regular fa-user pe-2"></i>
                            Auth
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">Register</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-share-nodes pe-2"></i>
                            Menu
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed ms-3" data-bs-target="#level-1" data-bs-toggle="collapse" aria-expanded="false">Grade Level</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Kindergarten</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Elementary (Grade 1-6)</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Junior High (Grade 7-10)</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Senior High (Grade 11-12)</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>College (Year 1-4)</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed ms-3" data-bs-target="#level-2" data-bs-toggle="collapse" aria-expanded="false">Programs or Streams</a>
                                <ul id="level-2" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Nursing</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Criminology</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Accountancy</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Education</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Information Technology</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed ms-3" data-bs-target="#level-3" data-bs-toggle="collapse" aria-expanded="false">Session/Shift</a>
                                <ul id="level-3" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Morning</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Afternoon</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Evening</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom ">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="Img/user.png" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="user-registration.php" class="dropdown-item">Register</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="#" class="dropdown-item text-danger">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Content -->
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4>Welcome Back, Admin</h4>
                                                <p class="mb-0">Mark Bryan Labinay</p>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-end text-end">
                                            <img src="Img/user.png" class="img-fluid illustration-img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2">
                                                Lyceum-Aparri Website
                                            </h4>
                                            <p class="mb-2">
                                                Total Online
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2" style="font-size:15px;">
                                                    • 6
                                                </span>
                                                <span id="dynamicDate" class="text-muted">
                                                    <!-- The date will be dynamically updated here -->
                                                </span>

                                                <script>
                                                    function updateDate() {
                                                        var currentDate = new Date();
                                                        var options = {
                                                            year: 'numeric',
                                                            month: 'long',
                                                            day: 'numeric'
                                                        };
                                                        var formattedDate = currentDate.toLocaleDateString('en-US', options);

                                                        document.getElementById('dynamicDate').textContent = formattedDate;
                                                    }

                                                    // Call the function initially
                                                    updateDate();

                                                    // Set up an interval to update the date every day
                                                    setInterval(updateDate, 86400000); // 86400000 milliseconds = 1 day
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table Content -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title text-black">
                                Active User
                            </h5>
                            <h6 class="card-subtitle text-dark">
                                Student User Information
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead class="text-center table-danger">
                                    <tr>
                                        <th scope="col">Online</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Year & Section</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <th scope="row" class="text-success">•</th>
                                        <td>Bryan</td>
                                        <td>Labinay</td>
                                        <td>BSIT</td>
                                        <td>3-A</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-success">•</th>
                                        <td>Roceldi</td>
                                        <td>Doniego</td>
                                        <td>BSIT</td>
                                        <td>3-A</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-success">•</th>
                                        <td>Goldwin</td>
                                        <td>Doniego</td>
                                        <td>BSIT</td>
                                        <td>3-A</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-success">•</th>
                                        <td>Ella</td>
                                        <td>Cortez</td>
                                        <td>BSIT</td>
                                        <td>3-A</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-success">•</th>
                                        <td>Jam</td>
                                        <td>Raposas</td>
                                        <td>BSIT</td>
                                        <td>3-A</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-success">•</th>
                                        <td>Marjorie</td>
                                        <td>Gumarang</td>
                                        <td>BSIT</td>
                                        <td>3-A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <p>Lyceum-Aparri</p>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="Js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>