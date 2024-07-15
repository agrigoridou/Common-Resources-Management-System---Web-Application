<!DOCTYPE html>
<html lang="en">

<?php
// Start the session
session_start();

// Check if the user is logged in and has the teacher role
if (isset($_SESSION['role_id']) && $_SESSION['role_id'] === 2002) {
    // Display teacher functionality and content
} else {
    // Redirect to login page or show an error message
    header("Location: login.php");
    exit;
}
?>

<head>
    <title data-lang-key="title">Τμήμα Μηχανικών Πληροφοριακών & Επικοινωνιακών Συστημάτων</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <title>
        Σύστημα διαχείρισης κοινών πόρων</title>
</head>

<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.html"><img src="images/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <a href="booking_manager.php">
                                <h4 data-lang-key="menu1">Αρχική</h4>
                            </a><br>
                            <a href="booking_manager_rooms.php">
                                <h4 data-lang-key="menu2">Αίθουσες</h4>
                            </a><br>
                            <a href="booking_manager_booking_day.php">
                                <h4 data-lang-key="menu3">Κρατήσεις</h4>
                            </a><br>
                            <a href="booking_manager_teaching.php">
                                <h4 data-lang-key="menu4">Διδασκαλία</h4>
                            </a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#" data-lang-key="address">ΔΙΕΥΘΥΝΣΗ: ΝΕΟ ΚΑΡΛΟΒΑΣΙ, ΣΑΜΟΣ</a></li>
                                <li><a href="#" data-lang-key="phoneNumber">ΤΗΛΕΦΩΝΟ: 22730 - 82200</a></li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#" id="profile-link" data-target="profile-popup" data-lang-key="profile">ΠΡΟΦΙΛ</a></li>
                            </ul>

                            <!-- Add this at the end of your HTML body -->
                            <div class="profile-popup" id="profile-popup">
                                <h2 data-lang-key="userProfile">Προφίλ Χρήστη</h2>
                                <p id="email"></p>
                                <p id="fname"></p>
                                <p id="lname"></p>
                                <p id="role_name"></p>
                                <p id="department"></p>
                                <!-- Add more user details as needed -->
                                <button onclick="togglePopup()" data-lang-key="close">ΚΛΕΙΣΕ</button>
                                <a href="logout.php"><button data-lang-key="logout">ΑΠΟΣΥΝΔΕΣΗ</button></a>
                            </div>

                            <script>
                                // Function to show/hide the popup
                                function togglePopup() {
                                    var popup = document.getElementById('profile-popup');
                                    if (popup.style.display === 'block') {
                                        popup.style.display = 'none';
                                    } else {
                                        popup.style.display = 'block';
                                    }
                                }

                                // Add an event listener to the profile link
                                document.getElementById('profile-link').addEventListener('click', function() {
                                    // Fetch user details using AJAX
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('GET', 'get_user_details.php', true);
                                    xhr.onload = function() {
                                        if (xhr.status === 200) {
                                            var user = JSON.parse(xhr.responseText);

                                            // Update profile popup with user details
                                            document.getElementById('email').textContent = 'Email: ' + user.email;
                                            document.getElementById('fname').textContent = 'First Name: ' + user.fname;
                                            document.getElementById('lname').textContent = 'Last Name: ' + user.lname;
                                            document.getElementById('role_name').textContent = 'Role: ' + user.role_name;
                                            document.getElementById('department').textContent = 'Department: ' + user.department;

                                            // Open the popup
                                            togglePopup();
                                        }
                                    };
                                    xhr.send();
                                });
                            </script>

                        </div>
                        <div id="language-switcher">
                            <button class="language-button" data-language="gr">ΕΛΛΗΝΙΚΑ</button>
                            <button class="language-button" data-language="en">ENGLISH</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index.html"><img src="images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="booking_manager.php" data-lang-key="menu1">Αρχική</a></li>
                                <li><a href="booking_manager_rooms.php" data-lang-key="menu2">Αίθουσες</a></li>
                                <li><a href="booking_manager_booking_day.php" data-lang-key="menu3">Κρατήσεις</a></li>
                                <li><a href="booking_manager_teaching.php" data-lang-key="menu4">Διδασκαλία</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-top"></div>
    </section>
    <!--END HEADER SECTION-->

    <!-- Section -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2 data-lang-key="teachingAdministration">Διοίκηση Διδασκαλίας</h2>
                        </div>
                        <div>
                            <!-- Add New Teaching -->
                            <div id="add-teaching-form">
                                <h2 data-lang-key="addTeaching">Προσθήκη Διδασκαλίας</h2>
                                <?php
                                include 'database_connection.php';
                                // Add New Teaching PHP code
                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-teaching'])) {
                                    $teachingIdentifier = $_POST['teaching_identifier'];
                                    $courseCode = $_POST['course_code'];
                                    $courseName = $_POST['course_name'];
                                    $userId = $_POST['user_id'];
                                    $teachingType = $_POST['teaching_type'];
                                    $semester = $_POST['semester'];
                                    $department = $_POST['department'];
                                    $numberOfHoursTeaching = $_POST['number-of-hours-teaching'];
                                    // Retrieve form data and perform necessary validation

                                    // Validate required fields
                                    if (empty($teachingIdentifier) || empty($courseCode) || empty($courseName) || empty($userId) || empty($teachingType) || empty($semester) || empty($department) || empty($numberOfHoursTeaching)) {
                                        echo "Error: All fields are required.";
                                    } else {
                                        // Insert the new teaching into the database
                                        try {
                                            $stmt = $pdo->prepare("INSERT INTO teaching ( teaching_identifier, course_code, course_name, user_id, teaching_type, semester, department, number_of_hours_teaching) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
                                            $stmt->execute([$teachingIdentifier, $courseCode, $courseName, $userId, $teachingType, $semester, $department, $numberOfHoursTeaching]);
                                            echo "Teaching added successfully";
                                        } catch (PDOException $e) {
                                            echo "Error adding teaching: " . $e->getMessage();
                                        }
                                    }
                                }
                                ?>
                                <form method="POST">
                                    <label for="teaching_identifier">Teaching Identifier:</label>
                                    <input type="text" id="teaching_identifier" name="teaching_identifier" required>
                                    <br>
                                    <label for="course_code">Course Code:</label>
                                    <input type="text" id="course_code" name="course_code" required>
                                    <br>
                                    <label for="course_name">Course Name:</label>
                                    <input type="text" id="course_name" name="course_name" required>
                                    <br>
                                    <label for="user_id">User ID:</label>
                                    <select id="user_id" name="user_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT user_id FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $userId  = $row['user_id'];
                                            echo "<option value='$userId'>$userId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="teaching_type">Teaching Type:</label>
                                    <select id="teaching_type" name="teaching_type">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_type FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingType  = $row['teaching_type'];
                                            echo "<option value='$teachingType'>$teachingType</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="semester">Semester:</label>
                                    <input type="text" id="semester" name="semester" required>
                                    <br>
                                    <label for="department">Department:</label>
                                    <select id="department" name="department">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT department FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $department  = $row['department'];
                                            echo "<option value='$department'>$department</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="number-of-hours-teaching">Number Of Hours Teaching:</label>
                                    <input type="text" id="number-of-hours-teaching" name="number-of-hours-teaching" required>
                                    <br><br>
                                    <button type="submit" name="add-teaching" class="green-button" data-lang-key="addTeaching">Προσθήκη Διδασκαλίας</button>
                                </form>
                            </div>

                            <br><br><br>

                            <!-- Update Teaching -->
                            <div id="update-teaching-form">
                                <h2 data-lang-key="updateTeaching">Ανανέωση Διδασκαλίας</h2>
                                <?php
                                include 'database_connection.php';
                                // Update Teaching PHP code
                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update-teaching'])) {
                                    $teachingId = $_POST['teaching_id'];
                                    $teachingIdentifier = $_POST['teaching_identifier'];
                                    $courseCode = $_POST['course_code'];
                                    $courseName = $_POST['course_name'];
                                    $userId = $_POST['user_id'];
                                    $teachingType = $_POST['teaching_type'];
                                    $semester = $_POST['semester'];
                                    $department = $_POST['department'];
                                    $numberOfHoursTeaching = $_POST['number_of_hours_teaching'];
                                    // Retrieve form data and perform necessary validation

                                    // Update the teaching in the database
                                    try {
                                        $stmt = $pdo->prepare("UPDATE teaching SET teaching_id = ?, teaching_identifier = ?, course_code = ?, course_name = ?, user_id = ?, teaching_type = ?, semester = ?, department = ?, number_of_hours_teaching = ? WHERE teaching_id = ?");
                                        $stmt->execute([$teachingId, $teachingIdentifier, $courseCode, $courseName, $userId, $teachingType, $semester, $department, $numberOfHoursTeaching, $teachingId]);
                                        // Show success message or perform other actions
                                        echo "Teaching updated successfully";
                                    } catch (PDOException $e) {
                                        echo "Error updating teaching: " . $e->getMessage();
                                    }
                                }
                                ?>
                                <form method="POST">
                                    <label for="teaching_id">Teaching ID:</label>
                                    <select id="teaching_id" name="teaching_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_id FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingId = $row['teaching_id'];
                                            echo "<option value='$teachingId'>$teachingId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="teaching_identifier">Teaching Identifier:</label>
                                    <select id="teaching_identifier" name="teaching_identifier">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_identifier FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingIdentifier = $row['teaching_identifier'];
                                            echo "<option value='$teachingIdentifier'>$teachingIdentifier</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="course_code">Course Code:</label>
                                    <select id="course_code" name="course_code">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT course_code FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $courseCode = $row['course_code'];
                                            echo "<option value='$courseCode'>$courseCode</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="course_name">Course Name:</label>
                                    <select id="course_name" name="course_name">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT course_name FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $courseName = $row['course_name'];
                                            echo "<option value='$courseName'>$courseName</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="user_id">User ID:</label>
                                    <select id="user_id" name="user_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT user_id FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $userId = $row['user_id'];
                                            echo "<option value='$userId'>$userId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="teaching_type">Teaching Type:</label>
                                    <select id="teaching_type" name="teaching_type">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_type FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingType = $row['teaching_type'];
                                            echo "<option value='$teachingType'>$teachingType</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="semester">Semester:</label>
                                    <select id="semester" name="semester">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT semester FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $semester = $row['semester'];
                                            echo "<option value='$semester'>$semester</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="department">Department:</label>
                                    <select id="department" name="department">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT department FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $department = $row['department'];
                                            echo "<option value='$department'>$department</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="number_of_hours_teaching">Number Of Hours Teaching:</label>
                                    <select id="number_of_hours_teaching" name="number_of_hours_teaching">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT number_of_hours_teaching FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $numberOfHoursTeaching = $row['number_of_hours_teaching'];
                                            echo "<option value='$numberOfHoursTeaching'>$numberOfHoursTeaching</option>";
                                        }
                                        ?>
                                    </select>
                                    <!-- Teacher selection and other fields for updating teaching -->
                                    <br><br>
                                    <button type="submit" name="update-teaching" class="green-button" data-lang-key="updateTeaching">Ανανέωση Διδασκαλίας</button>
                                </form>
                            </div>

                            <br><br><br>

                            <!-- Show Teaching Details -->
                            <div id="teaching-details">
                                <h2 data-lang-key="displayTeaching">Εμφάνιση Διδασκαλίας</h2>
                                <form method="POST">
                                    <label for="teaching_id">Teaching ID:</label>
                                    <select id="teaching_id" name="teaching_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct teaching names from the teaching table
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_id FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingId = $row['teaching_id'];
                                            echo "<option value='$teachingId'>$teachingId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <button type="submit" name="teaching-details" class="green-button" data-lang-key="displayTeaching">Εμφάνιση Διδασκαλίας</button>
                                </form>
                                <div id="teaching-details-container">
                                    <!-- Teaching details will be displayed here -->
                                    <?php
                                    include 'database_connection.php';

                                    // Show Teaching Details PHP code
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                        // Retrieve teaching ID from the form submission
                                        $teachingId = $_POST['teaching_id'];

                                        try {
                                            // Retrieve teaching details from the database
                                            $stmt = $pdo->prepare("SELECT * FROM teaching WHERE teaching_id = ?");
                                            $stmt->execute([$teachingId]);
                                            $teaching = $stmt->fetch(PDO::FETCH_ASSOC);

                                            if ($teaching) {
                                                // Display teaching details
                                                echo "Teaching ID: " . $teaching['teaching_id'] . "<br>";
                                                echo "Teaching Identifier: " . $teaching['teaching_identifier'] . "<br>";
                                                echo "Course Code: " . $teaching['course_code'] . "<br>";
                                                echo "Course Name: " . $teaching['course_name'] . "<br>";
                                                echo "User ID: " . $teaching['user_id'] . "<br>";
                                                echo "Teaching Type: " . $teaching['teaching_type'] . "<br>";
                                                echo "Semester: " . $teaching['semester'] . "<br>";
                                                echo "Department: " . $teaching['department'] . "<br>";
                                                echo "Number of Hours Teaching: " . $teaching['number_of_hours_teaching'] . "<br>";
                                            } else {
                                                echo "Teaching not found.";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Error retrieving teaching details: " . $e->getMessage();
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <br><br><br>
                            <!-- Delete Teaching -->
                            <div id="delete-teaching-form">
                                <h2 data-lang-key="deleteTeaching">Διαγραφή διδασκαλίας</h2>
                                <form method="POST">
                                    <label for="teaching_id">Teaching ID:</label>
                                    <select id="teaching_id" name="teaching_id">
                                        <!-- Populate the dropdown with teaching IDs -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct teaching IDs from the teaching table
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_id FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingId = $row['teaching_id'];
                                            echo "<option value='$teachingId'>$teachingId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <button type="submit" name="delete-teaching" class="green-button" data-lang-key="deleteTeaching">Διαγραφή Διδασκαλίας</button>
                                </form>
                                <?php
                                include 'database_connection.php';

                                // Delete Teaching PHP code
                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete-teaching'])) {
                                    $teachingId = $_POST['teaching_id'];

                                    // Delete the teaching from the teaching table
                                    try {
                                        $stmt = $pdo->prepare("DELETE FROM teaching WHERE teaching_id = ?");
                                        $stmt->execute([$teachingId]);

                                        // Check if there are related reservations and delete them
                                        $stmt = $pdo->prepare("DELETE FROM reservation WHERE teaching_id = ?");
                                        $stmt->execute([$teachingId]);

                                        // Show success message or perform other actions
                                        echo "Teaching and related reservations deleted successfully";
                                    } catch (PDOException $e) {
                                        echo "Error deleting teaching and related reservations: " . $e->getMessage();
                                    }
                                }
                                ?>
                            </div>



                            <br><br><br>

                            <!-- Show List of Lessons -->
                            <div id="lessons-list">
                                <h2 data-lang-key="displayTeachings">Εμφάνιση Διδασκαλιών</h2>
                                <div id="lessons-list-container">
                                    <!-- List of lessons for a section will be displayed here -->
                                    <?php
                                    include 'database_connection.php';
                                    // Show Teaching Details PHP code
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                                        // Retrieve teaching details from the database
                                        try {
                                            $stmt = $pdo->prepare("SELECT * FROM teaching");
                                            $stmt->execute();
                                            $teachings = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                            // Display teaching details
                                            // Modify the code below based on your desired display format
                                            foreach ($teachings as $teaching) {
                                                echo "Teaching ID: " . $teaching['teaching_id'] . "<br>";
                                                echo "Teaching Identifier: " . $teaching['teaching_identifier'] . "<br>";
                                                echo "Course Code: " . $teaching['course_code'] . "<br>";
                                                echo "Course Name: " . $teaching['course_name'] . "<br>";
                                                echo "User ID: " . $teaching['user_id'] . "<br>";
                                                echo "Teaching Type: " . $teaching['teaching_type'] . "<br>";
                                                echo "Semester: " . $teaching['semester'] . "<br>";
                                                echo "Department: " . $teaching['department'] . "<br>";
                                                echo "Number of Hours Teaching: " . $teaching['number_of_hours_teaching'] . "<br>";
                                                //Display other teaching details
                                                echo "<br>";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Error retrieving teaching details: " . $e->getMessage();
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            <div class="col-md-4 foot-tc-mar-t-o">
                <h4 data-lang-key="bottomContact">ΕΠΙΚΟΙΝΩΝΙΑ</h4>
                <p data-lang-key="bottomAddress">ΔΙΕΥΘΥΝΣΗ: Κτήριο Λυμπέρη, Παλαμά 2 & Γοργύρας</p>
                <p data-lang-key="postCode">ΤΑΧΥΔΡΟΜΙΚΟΣ ΚΩΔΙΚΑΣ: 83200</p>
                <p data-lang-key="bottomPhone">ΤΗΛΕΦΩΝΟ: <a href="#">+30 22730 82200</a></p>
                <p data-lang-key="email">ΗΛΕΚΤΡΟΝΙΚΟ ΤΑΧΥΔΡΟΜΕΙΟ: <a href="#">dicsd@aegean.gr</a></p>
            </div>
            <div class="row wed-foot-link-1">
                <div class="col-md-4">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/language.js"></script>
</body>

</html>