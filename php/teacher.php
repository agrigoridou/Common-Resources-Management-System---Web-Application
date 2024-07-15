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
                            <h2 data-lang-key="welcome_heading">Σύστημα Διαχείρισης Κοινών Πόρων </h2>
                        </div>
                        <div class="ho-event pg-eve-main">
                            <ul>
                                <li>
                                    <h4 data-lang-key="intro_text">Καλώς ήρθατε στο Σύστημα Διαχείρισης Κοινών Πόρων (Common Resources Management System - CRMS). Το CRMS διαχειρίζεται τους χώρους, τις αίθουσες και, γενικότερα, τους κτηριακούς πόρους του Πανεπιστημίου Αιγαίου. Εάν έχετε λογαριασμό στο Πανεπιστήμιο Αιγαίου παρακαλούμε συνδεθείτε πληκτρολογώντας το όνομα χρήστη και το συνθηματικό σας (όπως στο ηλεκτρονικό ταχυδρομείο του Πανεπιστημίου). Εάν θέλετε να ζητήσετε τη χρήση κάποιου χώρου, παρακαλώ συμπληρώστε τη σχετική αίτηση επιλέγοντας «Αίτηση διάθεσης πανεπιστημιακού χώρου».</h4>
                                </li>
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