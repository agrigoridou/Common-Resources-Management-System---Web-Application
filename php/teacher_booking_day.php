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
                            <h2 data-lang-key="menu3">Κρατήσεις</h2>
                            <br><br>
                        </div>
                        <div>
                            <div id="show-bookings">
                                <h2 data-lang-key="displayReservation">Εμφάνιση Κράτησης</h2>
                                <form method="post">
                                    <label for="reservation_id" data-lang-key="selectReservationID">Επιλέξτε ID Κράτησης:</label>
                                    <select id="reservation_id" name="reservation_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT reservation_id FROM reservation");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $reservationId = $row['reservation_id'];
                                            echo "<option value='$reservationId'>$reservationId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <button type="submit" name="booking-details" class="green-button" data-lang-key="displayReservation">Εμφάνιση Κράτησης</button>
                                </form>
                            </div>
                            <div id="booking-details-container">

                                <!-- Booking details will be displayed here -->

                                <?php

                                include 'database_connection.php'; // Include the correct file name



                                // PHP code to display reservation details

                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking-details'])) {



                                    // Retrieve reservation ID from the form submission

                                    if (isset($_POST['reservation_id'])) {

                                        $reservationId = $_POST['reservation_id'];



                                        // Retrieve reservation details from the database

                                        try {

                                            $stmt = $pdo->prepare("SELECT * FROM reservation WHERE reservation_id = :reservationId");

                                            $stmt->bindParam(':reservationId', $reservationId, PDO::PARAM_INT);

                                            $stmt->execute();

                                            $reservation = $stmt->fetch(PDO::FETCH_ASSOC);



                                            // Display reservation details

                                            if ($reservation) {

                                                echo "Reservation ID: " . $reservation['reservation_id'] . "<br>";

                                                echo "teaching_id: " . $reservation['teaching_id'] . "<br>";

                                                echo "room_id: " . $reservation['room_id'] . "<br>";

                                                echo "reservation_entry_date: " . $reservation['reservation_entry_date'] . "<br>";

                                                echo "start_date: " . $reservation['start_date'] . "<br>";

                                                echo "end_date: " . $reservation['end_date'] . "<br>";

                                                echo "reservation_day: " . $reservation['reservation_day'] . "<br>";

                                                echo "reservation_date: " . $reservation['reservation_date'] . "<br>";

                                                echo "reservation_time: " . $reservation['reservation_time'] . "<br>";

                                                echo "reservation_duration: " . $reservation['reservation_duration'] . "<br>";

                                                // Display other reservation details

                                                echo "<br>";
                                            } else {

                                                echo "Reservation not found.";
                                            }
                                        } catch (PDOException $e) {

                                            echo "Error retrieving reservation details: " . $e->getMessage();
                                        }
                                    } else {

                                        echo "Please select a reservation ID.";
                                    }
                                }

                                ?>

                            </div>

                            <br><br>
                            <!-- Display Teaching Replacement Request Status -->
                            <div id="show-bookings">
                                <h2>Εμφάνιση Κρατήσεων</h2>
                                <form method="post">
                                    <label for="reservation_date">Επιλέξτε Ημερομηνία Κράτησης:</label>
                                    <input type="date" id="reservation_date" name="reservation_date">
                                    <br>
                                    <label for="room_name">Επιλέξτε Δωμάτιο:</label>
                                    <select id="room_name" name="room_name">
                                        <!-- Populate the dropdown with room names from the database -->
                                        <?php
                                        include 'database_connection.php';
                                        $stmt = $pdo->prepare("SELECT DISTINCT room_name FROM room");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $roomName = $row['room_name'];
                                            echo "<option value='$roomName'>$roomName</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="start_time">Start Time:</label>
                                    <input type="time" id="start_time" name="start_time">
                                    <br>
                                    <label for="end_time">End Time:</label>
                                    <input type="time" id="end_time" name="end_time">
                                    <br>
                                    <button type="submit" name="show-bookings" class="green-button">Εμφάνιση Κρατήσεων</button>
                                </form>

                                <!-- Booking details will be displayed here -->
                                <div id="booking-details-container">
                                    <?php
                                    // Include the database connection file
                                    include 'database_connection.php';

                                    // Handle form submission
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['show-bookings'])) {
                                        // Get user inputs
                                        $selectedDate = $_POST['reservation_date'];
                                        $selectedRoom = $_POST['room_name'];
                                        $start_time = $_POST['start_time'];
                                        $end_time = $_POST['end_time'];

                                        // Validate start_time and end_time
                                        if ($start_time >= $end_time) {
                                            echo "Start time must be before end time.";
                                        } else {
                                            // Retrieve hourly availability for the selected room
                                            $availabilitySql = "SELECT hourly_availability FROM room WHERE room_name = :selectedRoom";
                                            $stmt = $pdo->prepare($availabilitySql);
                                            $stmt->bindParam(':selectedRoom', $selectedRoom);
                                            $stmt->execute();
                                            $availabilityRow = $stmt->fetch(PDO::FETCH_ASSOC);

                                            if ($availabilityRow && isset($availabilityRow['hourly_availability'])) {
                                                // Parse hourly availability to determine available hours
                                                $availabilityString = $availabilityRow['hourly_availability'];
                                                $availableSlots = array_map('trim', explode(',', $availabilityString));

                                                // Prepare the table header
                                                echo "<table>";
                                                echo "<tr><th>Time Slot</th>";
                                                echo "<th>$selectedRoom</th>";
                                                echo "</tr>";

                                                // Loop through each time slot within the selected time range
                                                $currentHour = intval(substr($start_time, 0, 2));
                                                $endHour = intval(substr($end_time, 0, 2));

                                                while ($currentHour < $endHour || ($currentHour === $endHour && intval(substr($end_time, 3, 2)) > 0)) {
                                                    $startTime = sprintf("%02d:00", $currentHour);
                                                    $endHourSlot = $currentHour + 1;
                                                    $endTime = sprintf("%02d:00", $endHourSlot);
                                                    $currentTime = "$startTime - $endTime";

                                                    // Check if the current time slot falls within any available slot
                                                    $slotAvailable = false;
                                                    foreach ($availableSlots as $slot) {
                                                        list($slotStart, $slotEnd) = explode('-', $slot);
                                                        $slotStart = trim($slotStart);
                                                        $slotEnd = trim($slotEnd);

                                                        if ($startTime >= $slotStart && $endTime <= $slotEnd) {
                                                            $slotAvailable = true;
                                                            break;
                                                        }
                                                    }

                                                    if ($slotAvailable) {
                                                        echo "<tr><td>$currentTime</td>";

                                                        // Fetch reservations for the current time slot
                                                        $sql = "SELECT reservation.*, teaching.course_name, teaching.semester, user_c.fname AS teacher_fname, user_c.lname AS teacher_lname  
                    FROM reservation
                    LEFT JOIN room ON reservation.room_id = room.room_id
                    LEFT JOIN teaching ON reservation.teaching_id = teaching.teaching_id
                    LEFT JOIN teacher ON teaching.user_id = teacher.user_id
                    LEFT JOIN user_c ON teacher.user_id = user_c.user_id
                    WHERE room.room_name = :selectedRoom
                    AND reservation_date = :selectedDate
                    AND (
                        (reservation_time >= :startTime AND reservation_time < :endTime)
                        OR
                        (ADDTIME(reservation_time, CONCAT(reservation_duration, ' HOUR')) > :startTime AND reservation_time < :endTime)
                    )";

                                                        try {
                                                            // Prepare and execute the query
                                                            $stmt = $pdo->prepare($sql);
                                                            $stmt->bindParam(':selectedRoom', $selectedRoom);
                                                            $stmt->bindParam(':selectedDate', $selectedDate);
                                                            $stmt->bindParam(':startTime', $startTime);
                                                            $stmt->bindParam(':endTime', $endTime);
                                                            $stmt->execute();

                                                            // Check if there are reservations
                                                            $reservationFound = false;

                                                            while ($reservation = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                $reservationDuration = $reservation['reservation_duration'];

                                                                // Calculate the new end time based on reservation duration
                                                                if ($reservationDuration > 1) {
                                                                    $endHourSlot = $currentHour + $reservationDuration;
                                                                    $reservationDuration--;

                                                                    $endTime = sprintf("%02d:00", $endHourSlot);
                                                                }

                                                                // Display reservation details
                                                                echo "<td class='expandable' data-id='{$reservation['reservation_id']}'>";
                                                                echo "Reservation: {$reservation['reservation_id']}<br>";
                                                                echo "<div class='reservation-details'>";
                                                                echo "Course: {$reservation['course_name']}<br>";
                                                                echo "Semester: {$reservation['semester']}<br>";
                                                                echo "Teacher: {$reservation['teacher_fname']} {$reservation['teacher_lname']}<br>";
                                                                echo "</div>";
                                                                echo "</td>";

                                                                $reservationFound = true;
                                                            }

                                                            // If no reservation, display an empty cell
                                                            if (!$reservationFound) {
                                                                echo "<td></td>";
                                                            }
                                                        } catch (PDOException $e) {
                                                            echo "Error retrieving reservation details: " . $e->getMessage();
                                                        }

                                                        echo "</tr>";
                                                    }

                                                    // Move to the next time slot based on the new end time
                                                    $currentHour = $endHourSlot;
                                                }

                                                echo "</table>";
                                            } else {
                                                echo "Room not found or hourly availability not defined.";
                                            }
                                        }
                                    }
                                    ?>

                                </div>
                            </div>



                            <br><br><br><br><br><br>

                            <!-- Tuition Replacement -->
                            <div id="tuition-replacement-form">
                                <h1 data-lang-key="createTeachingReplacement">Δημιουργία Αίτησης Αναπλήρωσης Διδασκαλίας</h1>
                                <br><br>
                                <form method="post">
                                    <label for="reservation_id" data-lang-key="reservationToRelease">Επιλέξτε Αρχική Κράτηση για Αποδεύσμευση:</label>
                                    <select id="reservation_id" name="reservation_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT reservation_id FROM replenishmentrequest");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $reservationId = $row['reservation_id'];
                                            echo "<option value='$reservationId'>$reservationId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br><br>
                                    <label for="date_to_refill" data-lang-key="selectReservationDate">Επιλέξτε Ημερομηνία Κράτησης:</label>
                                    <select id="date_to_refill" name="date_to_refill">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT date_to_refill FROM replenishmentrequest");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $dateToRefill = $row['date_to_refill'];
                                            echo "<option value='$dateToRefill'>$dateToRefill</option>";
                                        }
                                        ?>
                                    </select>
                                    <br><br>
                                    <label for="refill_date" data-lang-key="newReplacementDay">Επιλέξτε Νέα Ημερομηνία Αναπλήρωσης:</label>
                                    <input type="date" id="refill_date" name="refill_date" required>
                                    <br><br>
                                    <label for="refill_room" data-lang-key="newReplacementRoom">Επιλέξτε Νέα Αίθουσα Αναπλήρωσης:</label>
                                    <select id="refill_room" name="refill_room">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT refill_room FROM replenishmentrequest");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $refillRoom = $row['refill_room'];
                                            echo "<option value='$refillRoom'>$refillRoom</option>";
                                        }
                                        ?>
                                    </select>
                                    <br><br>
                                    <label for="refill_time" data-lang-key="newReplacementTime">Επιλέξτε Νέα Ώρα Αναπλήρωσης:</label>
                                    <input type="time" id="refill_time" name="refill_time" required>
                                    <br><br>
                                    <label for="refill_duration" data-lang-key="newReplacementDuration">Επιλέξτε Νέα Διάρκεια Αναπλήρωσης (Ώρες):</label>
                                    <input type="number" id="refill_duration" name="refill_duration" min="1" required>
                                    <br>
                                    <button type="submit" name="submit-application" class="green-button" data-lang-key="replacementApplication">Υποβολή Αίτησης Αναπλήρωσης</button>
                                </form>

                                <?php
                                include 'database_connection.php'; // Include the correct file name

                                // Initialize variables to store form data
                                $selectedOriginalReservation = $selectedDateToRefill = $selectedRefillDate = $selectedRefillRoom = $selectedRefillTime = $selectedRefillDuration = '';

                                // Check if the form is submitted
                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit-application'])) {
                                    // Retrieve form data
                                    $selectedOriginalReservation = $_POST['reservation_id'];
                                    $selectedDateToRefill = $_POST['date_to_refill'];
                                    $selectedRefillDate = $_POST['refill_date'];
                                    $selectedRefillRoom = $_POST['refill_room'];
                                    $selectedRefillTime = $_POST['refill_time'];
                                    $selectedRefillDuration = $_POST['refill_duration'];

                                    // Validate input and ensure instructor is eligible to apply for the replacement
                                    $isValidInput = true;
                                    $errorMessage = '';

                                    // Check if required fields are not empty
                                    if (empty($selectedOriginalReservation) || empty($selectedDateToRefill) || empty($selectedRefillDate) || empty($selectedRefillRoom) || empty($selectedRefillTime) || empty($selectedRefillDuration)) {
                                        $isValidInput = false;
                                        $errorMessage = "All fields are required.";
                                    }

                                    // Check if the selected duration is within acceptable limits
                                    if ($selectedRefillDuration < 1) {
                                        $isValidInput = false;
                                        $errorMessage = "Invalid duration selected.";
                                    }

                                    // Check instructor eligibility (replace this with your actual logic)
                                    $instructorEligible = true; // Replace with your eligibility check

                                    if (!$instructorEligible) {
                                        $isValidInput = false;
                                        $errorMessage = "You are not eligible to make a replacement request.";
                                    }

                                    if ($isValidInput) {
                                        try {
                                            // Begin a database transaction
                                            $pdo->beginTransaction();

                                            // Update the original reservation to mark it as released for the selected day
                                            $updateQuery = "UPDATE reservation 
                            SET reservation_date = :selectedRefillDate 
                            WHERE reservation_id = :selectedOriginalReservation";
                                            $updateStmt = $pdo->prepare($updateQuery);
                                            $updateStmt->bindParam(':selectedRefillDate', $selectedRefillDate);
                                            $updateStmt->bindParam(':selectedOriginalReservation', $selectedOriginalReservation);
                                            $updateStmt->execute();

                                            // Insert a new replacement request
                                            $insertQuery = "INSERT INTO replenishmentrequest 
                            (request_date, reservation_id, date_to_refill, refill_date, refill_room, refill_time, refill_duration) 
                            VALUES (:requestDate, :reservationId, :dateToRefill, :refillDate, :refillRoom, :refillTime, :refillDuration)";
                                            $insertStmt = $pdo->prepare($insertQuery);
                                            $requestDate = date('Y-m-d'); // Get the current date
                                            $insertStmt->bindParam(':requestDate', $requestDate);
                                            $insertStmt->bindParam(':reservationId', $selectedOriginalReservation);
                                            $insertStmt->bindParam(':dateToRefill', $selectedDateToRefill);
                                            $insertStmt->bindParam(':refillDate', $selectedRefillDate);
                                            $insertStmt->bindParam(':refillRoom', $selectedRefillRoom);
                                            $insertStmt->bindParam(':refillTime', $selectedRefillTime);
                                            $insertStmt->bindParam(':refillDuration', $selectedRefillDuration);
                                            $insertStmt->execute();

                                            $pdo->commit();

                                            // Display success message
                                            echo  "Request submitted successfully!!";
                                        } catch (PDOException $e) {
                                            // Rollback the transaction in case of any errors
                                            $pdo->rollBack();

                                            // Handle errors (log or display an error message)
                                            $errorMessage = "Error: " . $e->getMessage();
                                        }
                                    }
                                }
                                ?>
                            </div>

                            <br><br><br><br><br><br>

                            <!-- Display Teaching Replacement Request Status -->
                            <div id="request-status">
                                <h1 data-lang-key="teachingReplacementStatus">Κατάσταση Αιτήματος Αναπλήρωσης Διδασκαλίας</h1>
                                <br><br>
                                <div id="request-list-container">
                                    <?php
                                    // Include the correct file name for database connection
                                    include 'database_connection.php';

                                    // Get the logged-in teacher's user ID (assuming you have stored it in a session after login)
                                    $teacherUserId = $_SESSION['user_id']; // Replace with the actual session variable name

                                    // Fetch and display the status of the teacher's teaching replacement requests
                                    $fetchStatusQuery = "SELECT rr.request_id, rr.date_to_refill, rr.request_status, rr.rejection_reason 
                             FROM replenishmentrequest rr
                             JOIN reservation r ON rr.reservation_id = r.reservation_id
                             JOIN teaching t ON r.teaching_id = t.teaching_id
                             WHERE t.user_id = :teacherUserId";
                                    $fetchStatusStmt = $pdo->prepare($fetchStatusQuery);
                                    $fetchStatusStmt->bindParam(':teacherUserId', $teacherUserId);
                                    $fetchStatusStmt->execute();

                                    while ($row = $fetchStatusStmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<p>Request ID: {$row['request_id']}</p>";
                                        echo "<p>Date to Refill: {$row['date_to_refill']}</p>";
                                        echo "<p>Status: {$row['request_status']}</p>";
                                        if ($row['request_status'] === 'Rejected') {
                                            echo "<p>Rejection Reason: {$row['rejection_reason']}</p>";
                                        }
                                        echo "<hr>";
                                    }
                                    ?>
                                </div>
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