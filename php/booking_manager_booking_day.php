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
                            <h2 data-lang-key="menu3">Κρατήσεις</h2>
                        </div>
                        <div>
                            <!-- Add New Reservation -->
                            <div id="add-reservation-form">
                                <h2 data-lang-key="addReservation">Προσθήκη Κράτησης</h2>
                                <?php
                                // Include the database connection file
                                include 'database_connection.php';

                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-reservation'])) {
                                    // Validate and sanitize input data
                                    $roomId = filter_input(INPUT_POST, 'room_id', FILTER_VALIDATE_INT);
                                    $teachingId = filter_input(INPUT_POST, 'teaching_id', FILTER_VALIDATE_INT);
                                    $startDate = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_STRING);
                                    $endDate = filter_input(INPUT_POST, 'end_date', FILTER_SANITIZE_STRING);

                                    // Check if all fields are provided and valid
                                    if ($roomId === false || $teachingId === false || empty($startDate) || empty($endDate)) {
                                        echo "Error: All fields are required and must be valid.";
                                    } else {
                                        // Convert date and time inputs to a valid datetime format
                                        $startDateTime = date('Y-m-d H:i:s', strtotime($startDate));
                                        $endDateTime = date('Y-m-d H:i:s', strtotime($endDate));

                                        try {
                                            // Retrieve room availability information from the room table
                                            $stmt = $pdo->prepare("SELECT hourly_availability, weekly_availability FROM room WHERE room_id = ?");
                                            $stmt->execute([$roomId]);
                                            $roomAvailability = $stmt->fetch();

                                            // Extract hourly availability start and end times
                                            list($startTime, $endTime) = explode(' - ', $roomAvailability['hourly_availability']);

                                            // Extract weekly availability days
                                            $weeklyAvailability = $roomAvailability['weekly_availability'];

                                            // Check if the room is available for the given time slot
                                            $stmt = $pdo->prepare("SELECT COUNT(*) FROM reservation WHERE room_id = ? 
                AND (end_date <= ? OR start_date >= ?) 
                AND TIME(reservation_time) >= TIME(?) 
                AND TIME(reservation_time) <= TIME(?) 
                AND FIND_IN_SET(DAYNAME(reservation_date), ?)");
                                            $stmt->execute([
                                                $roomId, $endDateTime, $startDateTime,
                                                $startTime, $endTime, $weeklyAvailability
                                            ]);
                                            $existingReservationsCount = $stmt->fetchColumn();

                                            if ($existingReservationsCount == '0') {
                                                // Check if the teaching ID exists in the teaching table
                                                $stmt = $pdo->prepare("SELECT teaching_id FROM teaching WHERE teaching_id = ?");
                                                $stmt->execute([$teachingId]);
                                                $teachingExists = $stmt->fetch();

                                                if ($teachingExists) {
                                                    // Insert the reservation
                                                    $stmt = $pdo->prepare("INSERT INTO reservation (room_id, teaching_id, reservation_entry_date, start_date, end_date) VALUES (?, ?, ?, ?, ?)");
                                                    $stmt->execute([$roomId, $teachingId, date('Y-m-d'), $startDateTime, $endDateTime]);
                                                    echo "Reservation inserted successfully.";
                                                } else {
                                                    echo "Error: Teaching ID does not exist.";
                                                }
                                            } else {
                                                echo "Error: The room is not available for the selected time slot due to overlapping reservations from other course teachings.";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Error inserting reservation: " . $e->getMessage();
                                        }
                                    }
                                }
                                ?>



                                <form method="POST">
                                    <label for="room_id">Room Name:</label>
                                    <select id="room_id" name="room_id">
                                        <!-- Populate the dropdown with room names from the database -->
                                        <?php
                                        $stmt = $pdo->prepare("SELECT DISTINCT room_id, room_name FROM room");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $roomId = $row['room_id'];
                                            $roomName = $row['room_name'];
                                            echo "<option value='$roomId'>$roomName</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="teaching_id">Teaching Name:</label>
                                    <select id="teaching_id" name="teaching_id">
                                        <!-- Populate the dropdown with teaching IDs from the database -->
                                        <?php
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_id, course_name FROM teaching");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingId = $row['teaching_id'];
                                            $courseName = $row['course_name'];
                                            echo "<option value='$teachingId'>$courseName</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="start_date">Start Date:</label>
                                    <input type="datetime-local" id="start_date" name="start_date" required>
                                    <br>
                                    <label for="end_date">End Date:</label>
                                    <input type="datetime-local" id="end_date" name="end_date" required>
                                    <br>
                                    <!-- Add other fields for the reservation details -->
                                    <button type="submit" name="add-reservation" class="green-button" data-lang-key="addReservation">Προσθήκη Κράτησης</button>
                                </form>
                            </div>



                            <br><br><br>

                            <!-- multiple New Bookings -->
                            <div id="multiple-bookings-form">
                                <h2 data-lang-key="addMulReservations">Προσθήκη Πολλαπλών Κρατήσεων</h2>
                                <form method="POST" enctype="multipart/form-data">
                                    <input type="file" name="bookings-file" required accept=".csv">
                                    <br>
                                    <button type="submit" name="multiple-bookings" class="green-button" data-lang-key="uploadFile">Ανέβασε Αρχείο</button>
                                </form>

                                <?php
                                include 'database_connection.php';

                                // Function to validate date format
                                function validateDateFormat($date)
                                {
                                    $dateParts = explode('-', $date);
                                    return count($dateParts) == 3 && checkdate($dateParts[1], $dateParts[2], $dateParts[0]);
                                }

                                // Create an array to store unique error messages
                                $errors = [];

                                // Check if the form is submitted
                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['multiple-bookings'])) {
                                    if (isset($_FILES['bookings-file'])) {
                                        $file = $_FILES['bookings-file'];
                                        $filename = $file['name'];
                                        $tmpFilePath = $file['tmp_name'];

                                        // Check for any errors during file upload
                                        if ($file['error'] !== UPLOAD_ERR_OK) {
                                            $errors[] = 'Error uploading the file.';
                                        } else {
                                            // Specify the upload directory
                                            $uploadDir = 'uploads/';

                                            // Check if the directory exists or create it
                                            if (!is_dir($uploadDir)) {
                                                mkdir($uploadDir, 0777, true); // Set proper permissions (0777 for testing purposes)
                                            }

                                            // Move the uploaded file to the destination directory
                                            $destinationFilePath = $uploadDir . $filename;
                                            if (!move_uploaded_file($tmpFilePath, $destinationFilePath)) {
                                                $errors[] = 'Error moving the uploaded file.';
                                            } else {
                                                // Process the CSV file and insert reservations into the database
                                                if (($handle = fopen($destinationFilePath, "r")) !== FALSE) {
                                                    $importSuccess = true; // Assume import success initially
                                                    $reservationsToInsert = [];

                                                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                                        // Ensure that each row has the required number of columns
                                                        if (count($data) !== 9) {
                                                            $errors[] = 'Invalid CSV format. Each row must have 9 columns.';
                                                            $importSuccess = false; // Import failed
                                                            break; // Exit the loop on error
                                                        }

                                                        // Retrieve data from the CSV
                                                        $roomId = $data[0];
                                                        $teachingId = $data[1];
                                                        $reservationEntryDate = $data[2];
                                                        $startDate = $data[3];
                                                        $endDate = $data[4];
                                                        $reservationDay = $data[5];
                                                        $reservationDate = $data[6];
                                                        $reservationTime = $data[7];
                                                        $reservationDuration = $data[8];

                                                        // Perform necessary validation on the data
                                                        // Validate date formats (reservation_entry_date, start_date, end_date)
                                                        if (!validateDateFormat($reservationEntryDate) || !validateDateFormat($startDate) || !validateDateFormat($endDate)) {
                                                            $errors[] = 'Invalid date format. Dates must be in "YYYY-MM-DD" format.';
                                                            $importSuccess = false; // Import failed
                                                            continue; // Skip this reservation
                                                        }

                                                        // Check if the room_id from the CSV exists in the room table
                                                        $stmt = $pdo->prepare("SELECT COUNT(*) FROM room WHERE room_id = ?");
                                                        $stmt->execute([$roomId]);
                                                        $roomExists = $stmt->fetchColumn();

                                                        if (!$roomExists) {
                                                            $errors[] = 'Room with room_id ' . $roomId . ' does not exist.';
                                                            $importSuccess = false; // Import failed
                                                        } else {
                                                            // Check if the room is available for the given time slot
                                                            $stmt = $pdo->prepare("SELECT COUNT(*) FROM reservation WHERE room_id = ? 
                                AND (
                                    (end_date >= ? AND start_date <= ?) OR 
                                    (start_date <= ? AND end_date >= ?)
                                ) 
                                AND TIME(reservation_time) = TIME(?) 
                                AND DAYNAME(reservation_date) = ?
                                AND reservation_date = ?");
                                                            $stmt->execute([
                                                                $roomId, $endDate, $startDate, $startDate, $endDate, $reservationTime, $reservationDay, $reservationDate
                                                            ]);

                                                            $existingReservationsCount = $stmt->fetchColumn();

                                                            if ($existingReservationsCount != '0') {
                                                                $errors[] = 'The room is not available for the selected time slot due to overlapping reservations.';
                                                                $importSuccess = false; // Import failed
                                                            } else {
                                                                // Add the reservation data to the array
                                                                $reservationsToInsert[] = [
                                                                    $roomId, $teachingId, $reservationEntryDate, $startDate, $endDate, $reservationDay, $reservationDate, $reservationTime, $reservationDuration
                                                                ];
                                                            }
                                                        }
                                                    }
                                                    fclose($handle);

                                                    if ($importSuccess && !empty($reservationsToInsert)) {
                                                        // Insert all the reservations into the database
                                                        $sql = "INSERT INTO reservation (room_id, teaching_id, reservation_entry_date, start_date, end_date, reservation_day, reservation_date, reservation_time, reservation_duration) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                                                        $stmt = $pdo->prepare($sql);

                                                        foreach ($reservationsToInsert as $reservationData) {
                                                            $stmt->execute($reservationData);
                                                        }

                                                        echo 'Reservations imported successfully!';
                                                    }
                                                }
                                            }
                                        }
                                    }

                                    // Display error message summary
                                    if (!empty($errors)) {
                                        echo 'Errors occurred during import. Please review the errors below:<br>';
                                        // Remove duplicates and display unique error messages
                                        $uniqueErrors = array_unique($errors);
                                        foreach ($uniqueErrors as $error) {
                                            echo $error . '<br>';
                                        }
                                    }
                                }
                                ?>




                            </div>

                            <br><br><br>
                            <div id="reservation-renewal-form">
                                <h2 data-lang-key="updateReservation">Ανανέωση Κράτησης</h2>

                                <?php
                                // Include the database connection file
                                include 'database_connection.php';

                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reservation-renewal'])) {
                                    // Retrieve POST data
                                    $reservationId = $_POST['reservation_id'];
                                    $roomId = $_POST['room_id'];
                                    $teachingId = $_POST['teaching_id'];
                                    $startDate = $_POST['start_date'];
                                    $endDate = $_POST['end_date'];

                                    // Validate data (check if fields are not empty, and validate date formats)
                                    if (empty($reservationId) || empty($roomId) || empty($teachingId) || empty($startDate) || empty($endDate) || !strtotime($startDate) || !strtotime($endDate)) {
                                        echo "Error: All fields are required, and date formats must be valid.";
                                    } else {
                                        // Convert dates to appropriate formats
                                        $startDateTime = date('Y-m-d H:i:s', strtotime($startDate));
                                        $endDateTime = date('Y-m-d H:i:s', strtotime($endDate));

                                        try {
                                            // Retrieve room availability information from the room table
                                            $stmt = $pdo->prepare("SELECT hourly_availability, weekly_availability FROM room WHERE room_id = ?");
                                            $stmt->execute([$roomId]);
                                            $roomAvailability = $stmt->fetch();

                                            // Extract hourly availability start and end times
                                            list($startTime, $endTime) = explode(' - ', $roomAvailability['hourly_availability']);

                                            // Extract weekly availability days
                                            $weeklyAvailability = $roomAvailability['weekly_availability'];

                                            // Check if the room is available for the given time slot
                                            $stmt = $pdo->prepare("SELECT COUNT(*) FROM reservation WHERE room_id = ? 
                AND (end_date <= ? OR start_date >= ?) 
                AND TIME(reservation_time) >= TIME(?) 
                AND TIME(reservation_time) <= TIME(?) 
                AND FIND_IN_SET(DAYNAME(reservation_date), ?)");
                                            $stmt->execute([
                                                $roomId, $endDateTime, $startDateTime,
                                                $startTime, $endTime, $weeklyAvailability
                                            ]);
                                            $existingReservationsCount = $stmt->fetchColumn();

                                            // Check if the teaching ID exists in the teaching table
                                            $stmt = $pdo->prepare("SELECT teaching_id FROM teaching WHERE teaching_id = ?");
                                            $stmt->execute([$teachingId]);
                                            $teachingExists = $stmt->fetch();

                                            if ($existingReservationsCount == '0') {
                                                // Update the reservation
                                                $stmt = $pdo->prepare("UPDATE reservation SET room_id = ?, teaching_id = ?, start_date = ?, end_date = ? WHERE reservation_id = ?");
                                                $stmt->execute([$roomId, $teachingId, $startDateTime, $endDateTime, $reservationId]);
                                                echo "Reservation updated successfully.";
                                            } else {
                                                echo "Error: The room is not available for the selected time slot due to overlapping reservations or availability restrictions.";
                                            }
                                        } catch (PDOException $e) {
                                            echo "Error updating reservation: " . $e->getMessage();
                                        }
                                    }
                                }
                                ?>



                                <form method="POST">
                                    <label for="reservation_id">Reservation ID:</label>
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
                                    <label for="teaching_id">Teaching ID:</label>
                                    <select id="teaching_id" name="teaching_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT teaching_id FROM reservation");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $teachingId = $row['teaching_id'];
                                            echo "<option value='$teachingId'>$teachingId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="room_id">Room ID:</label>
                                    <select id="room_id" name="room_id">
                                        <!-- Populate the dropdown with room names -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct room names from the room table
                                        $stmt = $pdo->prepare("SELECT DISTINCT room_id FROM reservation");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $roomId = $row['room_id'];
                                            echo "<option value='$roomId'>$roomId</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="start_date">New Start Date:</label>
                                    <input type="datetime-local" id="start_date" name="start_date" required>
                                    <br>
                                    <label for="end_date">New End Date:</label>
                                    <input type="datetime-local" id="end_date" name="end_date" required>
                                    <br><br>
                                    <button type="submit" name="reservation-renewal" class="green-button" data-lang-key="updateReservation">Ανανέωση Κράτησης</button>
                                </form>
                            </div>

                            <br><br><br>

                            <div id="reservation-cancellation">
                                <h2 data-lang-key="deleteReservation">Διαγραφή Κράτησης</h2>
                                <form method="POST">
                                    <!-- Dropdown for selecting reservation ID -->
                                    <label for="select_reservation_id">Select Reservation ID:</label>
                                    <select id="select_reservation_id" name="select_reservation_id">
                                        <!-- Populate the dropdown with reservation IDs -->
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name

                                        // Retrieve distinct reservation IDs from the reservation table
                                        $stmt = $pdo->prepare("SELECT DISTINCT reservation_id FROM reservation");
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $reservationId = $row['reservation_id'];
                                            echo "<option value='$reservationId'>$reservationId</option>";
                                        }
                                        ?>
                                    </select>

                                    <!-- Manual input for reservation ID -->
                                    <label for="manual_reservation_id">Or Enter Reservation ID:</label>
                                    <input type="text" id="manual_reservation_id" name="manual_reservation_id">

                                    <br>
                                    <button type="submit" name="reservation-cancellation" class="green-button" data-lang-key="deleteReservation">Διαγραφή Κράτησης</button>
                                </form>
                                <?php
                                include 'database_connection.php';

                                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reservation-cancellation'])) {
                                    // Check if a reservation ID is provided through either the dropdown or manual input
                                    if (!empty($_POST['select_reservation_id'])) {
                                        $reservationId = $_POST['select_reservation_id'];
                                    } elseif (!empty($_POST['manual_reservation_id'])) {
                                        $reservationId = $_POST['manual_reservation_id'];
                                    } else {
                                        echo "Please select or enter a Reservation ID.";
                                        return; // Exit without processing if no ID is provided
                                    }

                                    // Delete the reservation from the database
                                    try {
                                        $stmt = $pdo->prepare("DELETE FROM reservation WHERE reservation_id = ?");
                                        $stmt->execute([$reservationId]);
                                        // Show success message or perform any other actions
                                        echo "Reservation deleted successfully";
                                    } catch (PDOException $e) {
                                        echo "Error deleting reservation: " . $e->getMessage();
                                    }
                                }
                                ?>
                            </div>


                            <br><br><br>

                            <div id="show-bookings">
                                <h2 data-lang-key="displayReservation">Εμφάνιση Κράτησης</h2>
                                <form method="post">
                                    <label for="reservation_id">Select Reservation ID:</label>
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
                                                echo "room_id: " . $reservation['room_id'] . "<br>";
                                                echo "teaching_id: " . $reservation['teaching_id'] . "<br>";
                                                echo "reservation_entry_date: " . $reservation['reservation_entry_date'] . "<br>";
                                                echo "reservation_start_date: " . $reservation['start_date'] . "<br>";
                                                echo "end_date: " . $reservation['end_date'] . "<br>";
                                                echo "reservation_day: " . $reservation['reservation_day'] . "<br>";
                                                echo "reservation_date: " . $reservation['reservation_date'] . "<br>";
                                                echo "reservation_time: " . $reservation['reservation_time'] . "<br>";
                                                echo "reservation_duration: " . $reservation['reservation_duration'] . "<br>";
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

                            <br><br><br>

                            <!-- Display Teaching Replacement Request Status -->
                            <div id="show-bookings">
                                <h2 data-lang-key="displayReservations">Εμφάνιση Κρατήσεων</h2>
                                <form method="post">
                                    <!-- Date Picker -->
                                    <label for="reservation_date" data-lang-key="selectReservationDate">Επιλέξτε Ημερομηνία Κράτησης:</label>
                                    <input type="date" id="reservation_date" name="reservation_date">
                                    <br>
                                    <!-- Room Dropdown -->
                                    <label for="room_name">Filter Rooms:</label>
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
                                    <!-- Optional Time Period Filters -->
                                    <label for="start_time">Start Time:</label>
                                    <input type="time" id="start_time" name="start_time">
                                    <br>
                                    <label for="end_time">End Time:</label>
                                    <input type="time" id="end_time" name="end_time">
                                    <br>
                                    <!-- Submit Button -->
                                    <button type="submit" name="show-bookings" class="green-button" data-lang-key="displayReservations">Εμφάνιση Κρατήσεων</button>
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


                            <!-- <br><br><br> -->

                            <!-- Production of Department Timetable -->

                            <br><br><br><br><br><br><br><br>
                            <!-- Teaching Replacement Acceptance/Rejection -->
                            <div id="acceptance-rejection-form">
                                <h1 data-lang-key="teachingReplacement">Αποδοχή / Απόρριψη Αναπλήρωσης Διδασκαλίας</h1>
                                <br>
                                <form method="post">
                                    <!-- Add a dropdown list of available replacement requests -->
                                    <label for="selected_request">Select Replacement Request:</label>
                                    <select id="selected_request" name="selected_request">
                                        <?php
                                        include 'database_connection.php'; // Include the correct file name for database connection

                                        // Fetch and populate the dropdown list with available replacement requests
                                        $fetchRequestsQuery = "SELECT request_id, date_to_refill, refill_room, refill_time, refill_duration FROM replenishmentrequest WHERE request_status = 'Pending'";
                                        $fetchRequestsStmt = $pdo->query($fetchRequestsQuery);
                                        while ($row = $fetchRequestsStmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<option value='{$row['request_id']}'>Request ID: {$row['request_id']} - Refill Date: {$row['date_to_refill']} - Refill Room: {$row['refill_room']} - Refill Time: {$row['refill_time']} - Duration: {$row['refill_duration']} hours</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <!-- Add Accept and Reject buttons -->
                                    <button type="submit" name="accept_application" class="green-button" data-lang-key="acceptApplication">Αποδοχή Αίτησης</button>
                                    <button type="submit" name="reject_application" class="green-button" data-lang-key="rejectApplication">Απόρριψη Αίτησης</button>
                                    <br><br>
                                    <!-- Input field for rejection reason -->
                                    <label for="rejection_reason">Rejection Reason:</label>
                                    <input type="text" id="rejection_reason" name="rejection_reason">
                                </form>

                                <?php
                                include 'database_connection.php'; // Include the correct file name for database connection

                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    if (isset($_POST['accept_application'])) {
                                        $selectedRequest = $_POST['selected_request'];

                                        // Fetch the details of the selected replacement request
                                        $fetchSelectedRequestQuery = "SELECT * FROM replenishmentrequest WHERE request_id = :selectedRequest";
                                        $fetchSelectedRequestStmt = $pdo->prepare($fetchSelectedRequestQuery);
                                        $fetchSelectedRequestStmt->bindParam(':selectedRequest', $selectedRequest);
                                        $fetchSelectedRequestStmt->execute();
                                        $selectedRequestData = $fetchSelectedRequestStmt->fetch(PDO::FETCH_ASSOC);

                                        if ($selectedRequestData) {
                                            // Extract data from selected request
                                            $reservationDate = $selectedRequestData['date_to_refill'];
                                            $reservationRoom = $selectedRequestData['refill_room'];
                                            $reservationTime = $selectedRequestData['refill_time'];
                                            $reservationDuration = $selectedRequestData['refill_duration'];

                                            // Create new individual room reservation
                                            // Create an SQL INSERT statement for the reservation
                                            $insertReservationQuery = "INSERT INTO reservation (room_id, teaching_id, start_date, end_date) VALUES (:room_id, :teaching_id, :start_date, :end_date)";

                                            // Prepare the SQL statement
                                            $insertReservationStmt = $pdo->prepare($insertReservationQuery);

                                            // Bind parameters
                                            $insertReservationStmt->bindParam(':room_id', $reservationRoom); // Replace with the actual variable name for the room ID
                                            $insertReservationStmt->bindParam(':teaching_id', $teachingId);   // Replace with the actual variable name for the teaching ID
                                            $insertReservationStmt->bindParam(':start_date', $reservationDate); // Replace with the actual variable name for the start date
                                            $insertReservationStmt->bindParam(':end_date', $endDate);          // Replace with the actual variable name for the end date

                                            // Execute the INSERT statement
                                            if ($insertReservationStmt->execute()) {
                                                echo "Reservation created successfully.";
                                            } else {
                                                echo "Error creating reservation.";
                                            }



                                            // Update the request status to 'Accepted'
                                            $updateRequestQuery = "UPDATE replenishmentrequest SET request_status = 'Accepted' WHERE request_id = :selectedRequest";
                                            $updateRequestStmt = $pdo->prepare($updateRequestQuery);
                                            $updateRequestStmt->bindParam(':selectedRequest', $selectedRequest);
                                            $updateRequestStmt->execute();


                                            echo "Application accepted. New reservation created.";
                                        } else {
                                            echo "Selected request not found.";
                                        }
                                    } elseif (isset($_POST['reject_application'])) {
                                        $selectedRequest = $_POST['selected_request'];
                                        $rejectionReason = $_POST['rejection_reason'];

                                        // Update the request status to 'Rejected' and store the rejection reason
                                        $updateRequestQuery = "UPDATE replenishmentrequest SET request_status = 'Rejected', rejection_reason = :rejectionReason WHERE request_id = :selectedRequest";
                                        $updateRequestStmt = $pdo->prepare($updateRequestQuery);
                                        $updateRequestStmt->bindParam(':rejectionReason', $rejectionReason);
                                        $updateRequestStmt->bindParam(':selectedRequest', $selectedRequest);
                                        $updateRequestStmt->execute();

                                        echo "Application rejected. Reason: $rejectionReason";
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