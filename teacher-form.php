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
    <title>Instructor Form</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <!-- Content for Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">Lyceum-Aparri</a>
                </div>
                <!-- <div class="ms-4">
                    <a href="#" class="text-decoration-none text-light"><i class="fa-solid fa-circle text-success ms-1"></i> Mark Bryan Labinay</a>
                </div> -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Navigation
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard</a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-file-lines pe-2"></i>
                            Mission & Vision
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Mission</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Vision</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#courses" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-book pe-1"></i>
                            Courses Offered
                        </a>
                        <ul id="courses" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Bachelor's Courses(13)</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Master's Courses(2)</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Doctorate Courses(1)</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Certificate Courses(4)</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        Menu
                    </li>
                    <!-- Grades -->
                    <li class="sidebar-item">
                        <a class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-bars-staggered"></i>
                            Grade Level
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-1" data-bs-toggle="collapse" aria-expanded="false">Kindergarten</a>
                                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Kindergarten</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-2" data-bs-toggle="collapse" aria-expanded="false">Elementary</a>
                                <ul id="level-2" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 1</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 2</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 3</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 4</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 5</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 6</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-3" data-bs-toggle="collapse" aria-expanded="false">Junior High</a>
                                <ul id="level-3" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 7</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 8</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 9</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 10</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-4" data-bs-toggle="collapse" aria-expanded="false">Senior High</a>
                                <ul id="level-4" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 11</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>Grade 12</u></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a class="sidebar-link collapsed ms-3" data-bs-target="#level-5" data-bs-toggle="collapse" aria-expanded="false">College</a>
                                <ul id="level-5" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>1st Year</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>2nd Year</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>3rd Year</u></a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link ms-4">• <u>4th Year</u></a>
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
                                <a class="sidebar-link ms-3">• English Courses</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• School of Information</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Technology</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• School of Information</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3"><u>View All</u></a>
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
                                <a class="sidebar-link ms-3">• Morning</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Afternoon</a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link ms-3">• Evening</a>
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
            <!-- Content -->
            <?php include 'Includes/dbconn.php';

            if (isset($_POST['submit'])) {

                $fullname = $_POST['fname'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $teach = $_POST['teach'];
                $classes = $_POST['classes'];
                $achievements = $_POST['achievements'];
                $emergency = $_POST['emergency'];
                $medical = $_POST['medical'];
                $needs = $_POST['needs'];
                $certif = $_POST['certif'];
                $photo = $_POST['photo'];
                $transcripts = $_POST['transcripts'];

                $select = mysqli_query($conn, "SELECT * FROM instructor WHERE email='$email'") or die('query failed');
                if (mysqli_num_rows($select) > 0) {
                    $msg[] = '<h4 class="text-danger mb-2">Email already exists!</h4>';
                } else {
                    $insert = "INSERT INTO instructor VALUES ('','$fullname','$age','$gender','$address','$contact',
                            '$email','$teach','$classes','$achievements','$emergency','$medical','$needs','$certif','$photo','$transcripts')";
                    $query = mysqli_query($conn, $insert);

                    if ($query) {
                        $msg[] = '<h4 class="text-success mb-2">Your Information is Added! <u><a href="user-login.php">Go to Login</a></u></h4>';
                    } else {
                        echo "Error: " . mysqli_error($conn); // Output the database error for debugging
                    }
                }
            }

            ?>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mt-2">
                        <a href="user-registration.php"><i class="fa-solid fa-circle-left me-2 fs-3"></i></a>
                        <hr class="text-white">
                        <h3>Instructor Information Form</h3>
                    </div>
                    <hr class="mb-4 text-white">
                    <?php
                    if (isset($msg)) {
                        foreach ($msg as $msg) {
                            echo '<span class="error-msg text-success fw-semibold ">' . $msg . '</span>';
                        };
                    };
                    ?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Full Name:</label>
                                <input type="text" name="fname" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Age:</label>
                                <input type="text" name="age" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Gender:</label>
                                <select class="form-select" name="gender" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Address:</label>
                                <input type="text" name="address" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Contact Number:</label>
                                <input type="tel" name="contact" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Email:</label>
                                <input type="email" name="email" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Your Preferable Teaching Area:</label>
                                <input type="text" name="teach" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Classes you can teach:</label>
                                <input type="text" name="classes" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Subject you can teach:</label>
                                <input type="text" name="achievements" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Additional Information</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Emergency Contact:</label>
                                <input type="text" name="emergency" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Medical Information:</label>
                                <input type="text" name="medical" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Special Needs (If any):</label>
                                <input type="text" name="needs" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Uploads</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Birth Certificate:</label>
                                <input type="file" name="certif" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Passport-sized Photo:</label>
                                <input type="file" name="photo" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Academic Transcripts (If applicable):</label>
                                <input type="file" name="transcripts" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="mb-2">
                                <input type="submit" value="Submit" name="submit" class="btn btn-success">
                                <a href="user-registration.php">
                                    <input type="button" value="Cancel" class="btn btn-danger"></a>
                            </div>
                        </div>
                    </form>
                </div>
            </main>

            <!-- End Content -->
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