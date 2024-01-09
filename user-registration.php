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
    <title>Register</title>
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
                    <a href="#" class="text-decoration-none text-light"><i class="fa-solid fa-circle text-success ms-1"></i> Mark Bryan Labinay</a>
                </div> -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Navigation
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
                            Courses Offered
                        </a>
                        <ul id="courses" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Bachelor's Courses(13)</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Master's Courses(2)</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Doctorate Courses(1)</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Certificate Courses(4)</a>
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
                                <a href="user-login.php" class="sidebar-link ms-3"><i class="fa-solid fa-arrow-right-to-bracket me-1"></i> Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="user-registration.php" class="sidebar-link ms-3"><i class="fa-solid fa-file-pen me-1"></i> Register</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <!-- Grades -->
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-bars-staggered"></i>
                            Grade Level
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-1" data-bs-toggle="collapse" aria-expanded="false">Kindergarten</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Kindergarten</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-2" data-bs-toggle="collapse" aria-expanded="false">Elementary</a>
                                <ul id="level-2" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 1</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 2</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 3</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 4</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 5</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 6</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-3" data-bs-toggle="collapse" aria-expanded="false">Junior High</a>
                                <ul id="level-3" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 7</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 8</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 9</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 10</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-4" data-bs-toggle="collapse" aria-expanded="false">Senior High</a>
                                <ul id="level-4" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 11</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>Grade 12</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-5" data-bs-toggle="collapse" aria-expanded="false">College</a>
                                <ul id="level-5" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>1st Year</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>2nd Year</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>3rd Year</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link ms-4">• <u>4th Year</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Program -->
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#program" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Programs Offered
                        </a>
                        <ul id="program" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• English Courses</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• School of Information</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Technology</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• School of Information</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3"><u>View All</u></a>
                            </li>
                        </ul>
                    </li>
                    <!-- Session/Shift -->
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#session" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-user-clock"></i>
                            Session/Shift
                        </a>
                        <ul id="session" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Morning</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Afternoon</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">• Evening</a>
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
                                <i class="fa-solid fa-gear fs-3 text-dark"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Setting</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- PHP -->
            <?php
            include 'Includes/dbconn.php';

            if (isset($_POST['submit'])) {
                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $pass = md5($_POST['password']);
                $cpass = md5($_POST['cpassword']);
                $user_type = ($_POST['user_type']);

                $select = "SELECT * FROM registertbl WHERE email = '$email' && password = '$pass'";
                $result = mysqli_query($conn, $select);

                if (mysqli_num_rows($result) > 0) {

                    $error[] = 'User already exists!';
                } else {
                    if ($pass != $cpass) {
                        $error[] = 'Password not match!';
                    } else {
                        $insert = "INSERT INTO registertbl(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
                        mysqli_query($conn, $insert);
                        $msg[] = 'Register successfully';
                    }
                }
            }
            ?>
            <!-- Content -->
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-xl-10">
                                <div class="card bg-secondary " style="border-radius: 1rem;">
                                    <div class="row g-0">
                                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                                            <img src="Img/logo1.png" alt="login form" class="img-fluid mt-5 ms-5 border-2" width="300" height="250" />
                                        </div>
                                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                            <div class="card-body p-4 p-lg-5 text-black">

                                                <form action="" method="post">
                                                    <div class="d-flex align-items-center mb-3 pb-1">
                                                        <img src="Img/logo1.png" alt="logo" width="50" height="50">
                                                        <span class="h1 fw-bold mb-0 ms-1">Lyceum-Aparri</span>
                                                    </div>

                                                    <h5 class="fw-semibold mb-3 pb-3" style="letter-spacing: 1px;">Register your account</h5>
                                                    <?php
                                                    if (isset($error)) {
                                                        foreach ($error as $error) {
                                                            echo '<span class="error-msg text-danger fw-semibold ">' . $error . '</span>';
                                                        };
                                                    };
                                                    ?>
                                                    <?php
                                                    if (isset($msg)) {
                                                        foreach ($msg as $msg) {
                                                            echo '<span class="error-msg text-warning fw-semibold">' . $msg . '</span>';
                                                        };
                                                    };
                                                    ?>
                                                    <div class="form-outline mb-3">
                                                        <input type="text" id="" name="name" class="form-control form-control text-black" placeholder="Full Name" autocomplete="off" required />

                                                    </div>

                                                    <div class="form-outline mb-3">
                                                        <input type="email" id="" name="email" placeholder="Email Address" class="form-control form-control text-black" autocomplete="off" required />
                                                    </div>

                                                    <div class="form-outline mb-3">
                                                        <input type="password" id="" name="password" placeholder="Password" class="form-control form-control text-black" autocomplete="off" required />
                                                    </div>

                                                    <div class="form-outline mb-3">
                                                        <input type="password" id="form2Example27" name="cpassword" placeholder="Confirm Password" class="form-control form-control text-black" autocomplete="off" required />
                                                    </div>
                                                    <select class="form-select form-select text-muted mb-1" name="user_type">
                                                        <option selected>Who's User?</option>
                                                        <option value="admin" class="text-black">Admin</option>
                                                        <option value="user" class="text-black">Student</option>
                                                    </select>

                                                    <div class="mt-4">
                                                        <input type="submit" name="submit" value="Register" class="btn btn-primary btn-sm btn-block rounded-5" style="font-size:20px; font-weight:500; letter-spacing: 2px;">
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="Js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>