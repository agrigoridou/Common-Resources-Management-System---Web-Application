<!DOCTYPE html>
<html lang="en">

<?php
// Start the session
session_start();

// Check if the user is logged in and has the teacher role
if (isset($_SESSION['role_id']) && $_SESSION['role_id'] === 2003) {
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
                            <a href="teacher.php">
                                <h4 data-lang-key="menu1">Αρχική</h4>
                            </a><br>
                            <a href="teacher_rooms.php">
                                <h4 data-lang-key="menu2">Αίθουσες</h4>
                            </a><br>
                            <a href="teacher_booking_day.php">
                                <h4 data-lang-key="menu3">Κρατήσεις</h4>
                            </a><br>
                            <a href="teacher_teaching.php">
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
                                <li><a href="teacher.php" data-lang-key="menu1">Αρχική</a></li>
                                <li><a href="teacher_rooms.php" data-lang-key="menu2">Αίθουσες</a></li>
                                <li><a href="teacher_booking_day.php" data-lang-key="menu3">Κρατήσεις</a></li>
                                <li><a href="teacher_teaching.php" data-lang-key="menu4">Διδασκαλία</a></li>
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
                            <h2 data-lang-key="menu2">Αίθουσες</h2>
                        </div>
                        <div>
                            <!-- Show Room Search -->
                            <div id="room-details">
                                <h2 data-lang-key="displayRoom">Εμφάνιση Αίθουσας</h2>
                                <br>
                                <form method="POST">
                                    <label for="room_name" data-lang-key="roomName">Όνομα Αίθουσας:</label>
                                    <select id="room_name" name="room_name">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT room_name FROM room");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $roomName = $row['room_name'];
                                            echo "<option value='$roomName'>$roomName</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <button type="submit" name="room-details" class="green-button" data-lang-key="displayRoom">Εμφάνιση Αίθουσας</button>
                                </form>

                                <div id="room-details-container">
                                    <!-- Room details will be displayed here -->
                                    <?php
                                    include 'database_connection.php';

                                    // Show Room Details PHP code
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['room-details'])) {
                                        // Retrieve room ID from the form submission
                                        $roomName = $_POST['room_name'];

                                        try {
                                            // Retrieve room details from the database
                                            $stmt = $pdo->prepare("SELECT * FROM room WHERE room_name = ?");
                                            $stmt->execute([$roomName]);
                                            $room = $stmt->fetch(PDO::FETCH_ASSOC);

                                            if ($room) {
                                                // Display room details
                                                echo "Room ID: " . $room['room_id'] . "<br>";
                                                echo "Identifier: " . $room['room_identifier'] . "<br>";
                                                echo "Room Name: " . $room['room_name'] . "<br>";
                                                echo "Room Building: " . $room['room_building'] . "<br>";
                                                echo "Room Address: " . $room['room_address'] . "<br>";
                                                echo "Room Capacity: " . $room['room_capacity'] . "<br>";
                                                echo "Hourly Availability: " . $room['hourly_availability'] . "<br>";
                                                echo "Weekly Availability: " . $room['weekly_availability'] . "<br>";
                                                echo "Room Type: " . $room['room_type'] . "<br>";
                                            } else {
                                                echo "Room not found.";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Error retrieving room details: " . $e->getMessage();
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                            <br><br><br>

                            <div id="room-search">
                                <h2 data-lang-key="searchRoom">Αναζήτηση αίθουσας</h2>
                                <form method="POST">
                                    <label for="room_keywords">Keywords:</label>
                                    <input type="text" id="room_keywords" name="room_keywords" placeholder="Enter keywords">
                                    <br>
                                    <label for="room_capacity">Room Capacity:</label>
                                    <input type="number" id="room_capacity" name="room_capacity" min="1">
                                    <br>
                                    <label for="hourly_availability">Hourly Availability:</label>
                                    <input type="text" id="hourly_availability" name="hourly_availability" placeholder="e.g., 09:00 - 12:00">
                                    <br>
                                    <label for="weekly_availability">Weekly Availability:</label>
                                    <input type="text" id="weekly_availability" name="weekly_availability" placeholder="e.g., Monday 09 / 03 / 2023">
                                    <br>
                                    <button type="submit" name="room-search" class="green-button" data-lang-key="displayRoom">Αναζήτηση αίθουσας</button>
                                </form>

                                <!-- Room details will be displayed here -->
                                <?php
                                include 'database_connection.php';

                                // Function to sanitize and validate user input
                                function sanitizeSearchRoom($input)
                                {
                                    // Remove illegal characters
                                    $sanitizeSearchRoom = filter_var($input, FILTER_SANITIZE_STRING);

                                    // Validate the input
                                    if ($sanitizeSearchRoom === false) {
                                        // Invalid input, return an empty string or handle the error as needed
                                        return '';
                                    }

                                    return $sanitizeSearchRoom;
                                }

                                // Show Room Details PHP code
                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['room-search'])) {
                                    // Retrieve and sanitize search parameters from the form submission
                                    $keywords = sanitizeSearchRoom($_POST['room_keywords']);
                                    $roomCapacity = $_POST['room_capacity'];
                                    $hourlyAvailability = sanitizeSearchRoom($_POST['hourly_availability']);
                                    $weeklyAvailability = sanitizeSearchRoom($_POST['weekly_availability']);

                                    try {
                                        // Build a dynamic SQL query based on the provided filters and keywords
                                        $query = "SELECT * FROM room WHERE (room_name LIKE ? OR room_building LIKE ? OR room_address LIKE ?  OR room_type LIKE ?) or (room_capacity = ?) or (hourly_availability LIKE ?) or (weekly_availability LIKE ?)";

                                        // Add '%' to keywords for a partial match
                                        $keywords = '%' . $keywords . '%';

                                        $params = [$keywords, $keywords, $keywords, $keywords, $roomCapacity, $hourlyAvailability, $weeklyAvailability];

                                        $stmt = $pdo->prepare($query);
                                        $stmt->execute($params);

                                        $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        if ($rooms) {
                                            // Display the list of matching rooms
                                            echo "<br><h3>Matching Rooms:</h3><br>";
                                            foreach ($rooms as $room) {
                                                echo "Room ID: " . htmlspecialchars($room['room_id']) . "<br>";
                                                echo "Identifier: " . htmlspecialchars($room['room_identifier']) . "<br>";
                                                echo "Room Name: " . htmlspecialchars($room['room_name']) . "<br>";
                                                echo "Room Building: " . htmlspecialchars($room['room_building']) . "<br>";
                                                echo "Room Address: " . htmlspecialchars($room['room_address']) . "<br>";
                                                echo "Room Capacity: " . htmlspecialchars($room['room_capacity']) . "<br>";
                                                echo "Hourly Availability: " . htmlspecialchars($room['hourly_availability']) . "<br>";
                                                echo "Weekly Availability: " . htmlspecialchars($room['weekly_availability']) . "<br>";
                                                echo "Room Type: " . htmlspecialchars($room['room_type']) . "<br>";
                                                echo "<hr>";
                                            }
                                        } else {
                                            echo "No matching rooms found.";
                                        }
                                    } catch (PDOException $e) {
                                        echo "Error retrieving room details: " . $e->getMessage();
                                    }
                                }
                                ?>
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