<?php
include 'Includes/dbconn.php';
session_start();

$user_id = $_SESSION['id'];

if (!isset($user_id)) {
    header('Location: user-login.php');
}
?>
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
    <title>Enrollment Form</title>
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
                        <a href="student-dashboard.php" class="sidebar-link">
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
                            <i class="fa-solid fa-book pe-1"></i>
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
                        <a href="enrollment.php" class="sidebar-link collapsed">
                            <i class="fa-solid fa-file-pen pe-1"></i>
                            Enrollment
                        </a>
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
        <!-- PHP -->
        <?php
        $select = mysqli_query($conn, "SELECT * FROM `student_register` WHERE fullname = '$user_id'")
            or die('query failed');
        if (mysqli_num_rows($select) > 0) {
            $fetch = mysqli_fetch_assoc($select);
        }
        ?>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom ">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="Img/<?php echo $fetch['passport'] ?>" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="student-profile.php" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="logout.php" class="dropdown-item text-danger">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content -->
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3 mt-2">
                        <h4 class="text-center bg-secondary bg-opacity-50  p-2"><img src="Img/logo1.png" alt="" class="me-2" width="30" height="30">LYCEUM - APPARRI ENROLLMENT FORM</h4>
                    </div>
                    <hr class="text-light">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-2 mb-2">
                                <label for="" class="form-label">School Year:</label>
                                <input type="text" name="fname" autocomplete="off" class="form-control" required>
                            </div>
                            <hr>
                            <div class="col-lg-3 mb-2 me-5">
                                <label for="" class="form-label">Grade level to Enroll:</label>
                                <input type="text" name="bday" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label mb-3">1. With LRN?</label><br>
                                <label class="me-4">
                                    <input type="checkbox" name="choice" value="yes"> Yes
                                </label>
                                <label>
                                    <input type="checkbox" name="choice" value="no"> No
                                </label>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label mb-3">2. Return (Balik Aral)?</label><br>
                                <label class="me-4">
                                    <input type="checkbox" name="choice" value="yes"> Yes
                                </label>
                                <label>
                                    <input type="checkbox" name="choice" value="no"> No
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h4 class="text-center bg-secondary bg-opacity-50  p-2">LEARNER INFORMATION</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="row mb-2">
                                <label for="" class="col-lg-6 col-form-label">PSA Birth Certificate(If available upon registration):</label>
                                <div class="col-lg-6">
                                    <input type="text" name="pschool" autocomplete="off" class="form-control mb-2" required>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-lg-4 col-form-label">Learner Reference Number.(LRN):</label>
                                <div class="col-lg-6">
                                    <input type="text" name="pschool" autocomplete="off" class="form-control mb-2" required>
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-5 mb-2">
                                <label for="" class="form-label mt-3">Last Name:</label>
                                <input type="text" name="grade" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label for="" class="form-label mt-3">Birthdate:</label>
                                <input type="date" name="achievements" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-5 mb-2">
                                <label for="" class="form-label mt-3">Place of Birth (Municipality City):</label>
                                <input type="text" name="grade" autocomplete="off" class="form-control" required>
                            </div>
                            <hr>
                            <div class="col-lg-5 mb-2">
                                <label for="" class="form-label">First Name:</label>
                                <input type="text" name="grade" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-2 mb-2">
                                <label for="" class="form-label mb-3">Sex:</label><br>
                                <label class="me-2">
                                    <input type="checkbox" name="male" value="yes"> Male
                                </label>
                                <label>
                                    <input type="checkbox" name="female" value="no"> Female
                                </label>
                            </div>
                            <div class="col-lg-1 mb-2">
                                <label for="" class="form-label">Age:</label>
                                <input type="text" name="age" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Mother Tounge:</label>
                                <input type="text" name="tounge" autocomplete="off" class="form-control" required>
                            </div>
                            <hr>
                            <div class="col-lg-5 mb-2">
                                <label for="" class="form-label">Middle Name:</label>
                                <input type="text" name="middle" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-5 mb-2">
                                <label for="" class="form-label mb-3">Belonging to any Indigenous People (IP):</label><br>
                                <label class="me-3">
                                    <input type="checkbox" name="male" value="yes"> Yes
                                </label>
                                <label class="me-3">
                                    <input type="checkbox" name="female" value="no"> No
                                </label>
                            </div>
                            <hr>
                            <div class="col-lg-4 mb-2 me-5">
                                <label for="" class="form-label">Extension Name e.g.Jr.,III(if applicable):</label>
                                <input type="text" name="middle" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label mb-3">Is your family a beneficiary of 4ps?:</label><br>
                                <label class="me-3">
                                    <input type="checkbox" name="male" value="yes"> Yes
                                </label>
                                <label class="me-3">
                                    <input type="checkbox" name="female" value="no"> No
                                </label>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h4 class="text-center bg-secondary bg-opacity-50  p-2">CURRENT ADDRESS</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">House No/Street:</label>
                                <input type="text" name="house" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Street Name:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Barangay:</label>
                                <input type="text" name="barangay" autocomplete="off" class="form-control" required>
                            </div>
                            <hr>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Municipality City:</label>
                                <input type="text" name="city" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Province:</label>
                                <input type="text" name="province" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Country:</label>
                                <input type="text" name="country" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">ZIP CODE:</label>
                                <input type="text" name="barangay" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h4 class="text-center bg-secondary bg-opacity-50  p-2">PERMANENT ADDRESS</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">House No/Street:</label>
                                <input type="text" name="house" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Street Name:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Barangay:</label>
                                <input type="text" name="barangay" autocomplete="off" class="form-control" required>
                            </div>
                            <hr>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Municipality City:</label>
                                <input type="text" name="city" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Province:</label>
                                <input type="text" name="province" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Country:</label>
                                <input type="text" name="country" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">ZIP CODE:</label>
                                <input type="text" name="barangay" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h4 class="text-center bg-secondary bg-opacity-50  p-2">PARENT'S/GUARDIAN'S INFORMATION</h4>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h6 class="fw-semibold text-black ">Father's Name</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Last Name:</label>
                                <input type="text" name="house" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">First Name:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Middle Name:</label>
                                <input type="text" name="barangay" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Contact Number:</label>
                                <input type="text" name="city" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h6 class="fw-semibold text-black ">Mothers's Maiden Name</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Last Name:</label>
                                <input type="text" name="house" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">First Name:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Middle Name:</label>
                                <input type="text" name="barangay" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Contact Number:</label>
                                <input type="text" name="city" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h6 class="fw-semibold text-black ">Guardian's Name</h6>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Last Name:</label>
                                <input type="text" name="house" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">First Name:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Middle Name:</label>
                                <input type="text" name="barangay" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">Contact Number:</label>
                                <input type="text" name="city" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h4 class="text-center bg-secondary bg-opacity-50  p-2">For Returning Learner(Balik-Aral)and Those Who will Transfer/Move In</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Last Grade Level Completed:</label>
                                <input type="text" name="house" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Last School Year Completed:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                            <hr>
                            <div class="col-lg-6 mb-2 me-5">
                                <label for="" class="form-label">Last School Attended:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-3 mb-2">
                                <label for="" class="form-label">School ID:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-0">
                            <h4 class="text-center bg-secondary bg-opacity-50  p-2">For Learners in Senior High School</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <label for="" class="form-label mb-2 me-4">Semester:</label>
                                <label class="me-3">
                                    <input type="checkbox" name="male" value="yes"> 1st Sem
                                </label>
                                <label class="me-3">
                                    <input type="checkbox" name="female" value="no"> 2nd Sem
                                </label>
                            </div>
                            <hr>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Track:</label>
                                <input type="text" name="house" autocomplete="off" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Strand:</label>
                                <input type="text" name="street" autocomplete="off" class="form-control" required>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="mb-2">
                                <input type="submit" value="Enroll" name="submit" class="btn btn-success">
                                <a href="enrollment.php">
                                    <input type="button" value="Clear" class="btn btn-danger"></a>
                            </div>
                        </div>
                    </form>
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

    <!-- Bootstrap -->
    <script src="Js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>