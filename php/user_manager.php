<!DOCTYPE html>
<html lang="en">

<?php
// Start the session
session_start();

// Check if the user is logged in and has the visitor role
if (isset($_SESSION['role_id']) && $_SESSION['role_id'] === 2001) {
    // Display visitor functionality and content
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

                            <a href="user_manager.php">
                                <h4>Αρχική</h4>
                            </a><br>
                            <a href="#">
                                <h4>Αίθουσες</h4>
                            </a><br>
                            <a href="#">
                                <h4>Κρατήσεις</h4>
                            </a><br>
                            <a href="#">
                                <h4>Διδασκαλία</h4>
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
                                <h2>User Profile</h2>
                                <p id="email"></p>
                                <p id="fname"></p>
                                <p id="lname"></p>
                                <p id="role_name"></p>
                                <p id="department"></p>
                                <!-- Add more user details as needed -->
                                <button onclick="togglePopup()">Close</button>
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
                                <li><a href="user_manager.php" data-lang-key="menu1">Αρχική</a></li>
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
                        <div id="user-management-form">
                            <?php
                            include 'database_connection.php';

                            // Fetch user information from the session
                            $user_id = $_SESSION['user_id'];
                            $user_role = $_SESSION['role_id'];
                            $user_department = $_SESSION['department']; // Assuming you store department ID in the session

                            // Check if the user is a User Administrator
                            if ($user_role === 2001) { // Assuming 2001 is the role ID for User Administrator
                                // Display user management functionality for the logged-in department
                                echo "<h1>Καλώς ορίσατε, διαχειριστής χρήστη του τμήματος $user_department!</h1><br>";

                                // Fetch and display users from the same department as $user_department
                                $sql = "SELECT * FROM user_c WHERE department = :user_department";
                                $stmt = $pdo->prepare($sql);
                                $stmt->bindParam(':user_department', $user_department);
                                $stmt->execute();
                            } else {
                                // Display other content or restrict access
                                echo "<p>You do not have the necessary privileges.</p>";
                            }
                            ?>

                            <br><br><br>

                            <!-- Display user management options -->
                            <form method='POST'>
                                <h1 data-lang-key="usersList">Λίστα Χρηστών</h1>

                                <br><br>

                                <select id='userList' name='userList'>
                                    <?php
                                    // Populate the dropdown with user options
                                    $stmt->execute(); // Execute the same query again to fetch user data
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $username = $row['fname'] . ' ' . $row['lname'];
                                        echo "<option value='{$row['user_id']}'>$username</option>";
                                    }
                                    ?>
                                </select>
                                <br>
                                <button type="submit" name="getUserDetails" class="green-button" data-lang-key="displayUser">Εμφάνιση Χρήστη</button>
                            </form>

                            <?php
                            if (isset($_POST['getUserDetails'])) {
                                $selectedUserId = $_POST['userList'];
                                $userDetailsSql = "SELECT * FROM user_c WHERE user_id = :user_id";
                                $userDetailsStmt = $pdo->prepare($userDetailsSql);
                                $userDetailsStmt->bindParam(':user_id', $selectedUserId);
                                $userDetailsStmt->execute();

                                if ($userDetailsStmt->rowCount() > 0) {
                                    $selectedUser = $userDetailsStmt->fetch(PDO::FETCH_ASSOC);
                                    echo "<h1>Επιλεγμένα στοιχεία χρήστη</h1>";
                                    echo "<div style='border: 2px solid #ccc; padding: 10px; width: 200px; margin-top: 20px;'>";
                                    echo "<p>First Name: {$selectedUser['fname']}</p>";
                                    echo "<p>Last Name: {$selectedUser['lname']}</p>";
                                    echo "<p>Email: {$selectedUser['email']}</p>";
                                    echo "<p>Password: {$selectedUser['password_e']}</p>";
                                } else {
                                    echo "<p>No user details found for the selected user.</p>";
                                }
                            }
                            ?>
                        </div>

                        <br><br><br>

                        <div id="add-management-form">
                            <?php
                            include 'database_connection.php';

                            // Check if the user is a User Administrator
                            if ($user_role === 2001) { // Assuming 2001 is the role ID for User Administrator
                                // Display user management functionality for the logged-in department
                                echo "<h1>Προσθήκη Νέου Χρήστη</h1>";
                                if (isset($_POST['addUser'])) {
                                    $newFirstName = $_POST['newFirstName'];
                                    $newLastName = $_POST['newLastName'];
                                    $newEmail = $_POST['newEmail'];
                                    $newPassword = $_POST['newPassword'];
                                    $newDepartment = $_POST['newDepartment'];

                                    // Insert new user into the database
                                    $insertSql = "INSERT INTO user_c (email, password_e, fname, lname, department) VALUES (:email, :password, :fname, :lname, :department)";
                                    $insertStmt = $pdo->prepare($insertSql);
                                    $insertStmt->bindParam(':email', $newEmail);
                                    $insertStmt->bindParam(':password', $newPassword);
                                    $insertStmt->bindParam(':fname', $newFirstName);
                                    $insertStmt->bindParam(':lname', $newLastName);
                                    $insertStmt->bindParam(':department', $newDepartment);

                                    if ($insertStmt->execute()) {
                                        echo "<p>New user added successfully!</p>";
                                    } else {
                                        echo "<p>Error adding new user.</p>";
                                    }
                                }
                            } else {
                                // Display other content or restrict access
                                echo "<p>You do not have the necessary privileges.</p>";
                            }
                            ?>

                            <br>

                            <!-- Add new user form -->
                            <form method='POST'>
                                <label for='newFirstName'>First Name:</label>
                                <input type='text' id='newFirstName' name='newFirstName' required><br>
                                <label for='newLastName'>Last Name:</label>
                                <input type='text' id='newLastName' name='newLastName' required><br>
                                <label for='newEmail'>Email:</label>
                                <input type='email' id='newEmail' name='newEmail' required><br>
                                <label for='newPassword'>Password:</label>
                                <input type='password' id='newPassword' name='newPassword' required><br>
                                <label for='newDepartment'>Department:</label>
                                <input type='text' id='newDepartment' name='newDepartment' required><br>
                                <br>
                                <button type="submit" name="addUser" class="green-button" data-lang-key="addUser">Προσθήκη Χρήστη</button>
                            </form>
                        </div>

                        <br><br><br>

                        <div id="delete-management-form">
                            <?php
                            include 'database_connection.php';

                            // Check if the user is a User Administrator
                            if ($user_role === 2001) { // Assuming 2001 is the role ID for User Administrator
                                // Display user management functionality for the logged-in department
                                echo "<h1>Διαγραφή Χρήστη</h1>";

                                if (isset($_POST['deleteUser'])) {
                                    $selectedUserId = $_POST['user_id'];

                                    // Delete user from the database
                                    $deleteSql = "DELETE FROM user_c WHERE user_id = :user_id";
                                    $deleteStmt = $pdo->prepare($deleteSql);
                                    $deleteStmt->bindParam(':user_id', $selectedUserId);

                                    if ($deleteStmt->execute()) {
                                        echo "<p>User deleted successfully!</p>";
                                    } else {
                                        echo "<p>Error deleting user.</p>";
                                    }
                                }
                            } else {
                                // Display other content or restrict access
                                echo "<p>You do not have the necessary privileges.</p>";
                            }
                            ?>

                            <!-- Delete user form -->
                            <form method='POST'>
                                <label for='user_id'>Select User:</label>
                                <select id="user_id" name="user_id">
                                    <?php
                                    include 'database_connection.php'; // Include the correct file name

                                    // Retrieve user IDs and names from the user_c table
                                    $stmt = $pdo->prepare("SELECT user_id, fname, lname FROM user_c");
                                    $stmt->execute();
                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        $userId = $row['user_id'];
                                        $fname = $row['fname'];
                                        $lname = $row['lname'];
                                        echo "<option value='$userId'>$userId - $fname - $lname</option>"; // Display both ID and Name
                                    }
                                    ?>
                                </select>
                                <br>
                                <button type="submit" name="deleteUser" class="green-button" data-lang-key="deleteUser">Διαγραφή Χρήστη</button>
                            </form>
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