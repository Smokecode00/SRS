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
                        User
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
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-regular fa-user pe-2"></i>
                            Auth
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link ms-3">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="user-registration.php" class="sidebar-link ms-3">Register</a>
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
                                <img src="Img/user.png" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
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
                    <div class="mb-4">
                        <h4>User Registration</h4>
                    </div>
                    <div class="row">
                        <label for="" class="form-label">Choose who is User:</label>
                        <div class="col-lg-1 p-2">
                            <button class="btn btn-primary" onclick="toggleForm('adminForm')">Admin</button>
                        </div>
                        <div class="col-lg-1 p-2">
                            <button class="btn btn-danger" onclick="toggleForm('studentForm')">Student</button>
                        </div>
                    </div>
                    <hr>
                    <form id="adminForm" action="process_admin.php" method="post" style="display: none;">
                        <!-- Admin form fields go here -->
                        <div class="row">
                            <div class="mb-2">
                                <h3 class="text-primary"><i class="fa-sharp fa-solid fa-bars text-black"></i> Admin Registration</h3>
                            </div>
                            <div class="mb-2">
                                <input type="button" value="Register" class="btn btn-success">
                                <input type="button" value="Clear" class="btn btn-danger">
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Admin Information</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Full Name:</label>
                                <input type="text" name="fname" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Position/Role:</label>
                                <input type="text" name="role" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Contact Information:</label>
                                <input type="text" name="contact" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Access Credentials</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Username:</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Documents</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Emergency Contact:</label>
                                <input type="text" name="emergency" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Medical Information:</label>
                                <input type="text" name="medical" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Special Needs (If any):</label>
                                <input type="text" name="needs" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                    </form>









                    <form id="studentForm" action="process_student.php" method="post" style="display: none;">
                        <!-- Student form fields go here -->
                        <div class="row">
                            <div class="mb-2">
                                <h3 class="text-danger"><i class="fa-sharp fa-solid fa-bars text-black"></i> Student Registration</h3>
                            </div>
                            <div class="mb-2">
                                <input type="button" value="Register" class="btn btn-success">
                                <input type="button" value="Clear" class="btn btn-danger">
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Student Information</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Full Name:</label>
                                <input type="text" name="fname" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Date of Birth:</label>
                                <input type="date" name="bday" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <label for="" class="form-label">Gender:</label>
                                <select class="form-select" class="gender" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Address:</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Contact Number:</label>
                                <input type="tel" name="contact" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Previous Education</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Name of Previous School:</label>
                                <input type="text" name="pschool" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Grade/ Class Last Attend:</label>
                                <input type="text" name="grade" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Academic Achievements:</label>
                                <input type="text" name="achievements" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Additional Information</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Emergency Contact:</label>
                                <input type="text" name="emergency" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Medical Information:</label>
                                <input type="text" name="medical" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Special Needs (If any):</label>
                                <input type="text" name="needs" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-4">
                            <h4>Parents or Guardian Information</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Name of Parents or Guardians:</label>
                                <input type="text" name="guardians" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Contact Details:</label>
                                <input type="text" name="parents-contact" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Occupation:</label>
                                <input type="text" name="occupation" class="form-control" required>
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
                        <div class="mb-4">
                            <h4>Student Credentials</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Username:</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-lg-4 mb-2">
                                <label for="" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <hr>
                    </form>
                </div>
                <script>
                    function toggleForm(formId) {
                        var form = document.getElementById(formId);
                        var otherFormId = (formId === 'studentForm') ? 'adminForm' : 'studentForm';
                        var otherForm = document.getElementById(otherFormId);

                        // Close the other form
                        otherForm.style.display = 'none';

                        if (form.style.display === 'none') {
                            form.style.display = 'block';
                        } else {
                            form.style.display = 'none';
                        }
                    }
                </script>
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