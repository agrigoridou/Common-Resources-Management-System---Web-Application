function changeLanguage(language) {
  var languageData = {
      gr: {
          title:"Τμήμα Μηχανικών Πληροφοριακών & Επικοινωνιακών Συστημάτων",

          //TOP BAR
          profile:"ΠΡΟΦΙΛ",
          login:"ΣΥΝΔΕΣΗ", logout:"ΑΠΟΣΥΝΔΕΣΗ",
          address:"ΔΙΕΥΘΥΝΣΗ: ΝΕΟ ΚΑΡΛΟΒΑΣΙ, ΣΑΜΟΣ",
          phoneNumber:"ΤΗΛΕΦΩΝΟ: 22730 - 82200",

          //PROFILE WINDOW
          userProfile:"Προφίλ Χρήστη",
          close:"ΚΛΕΙΣΕ",

          //LOGIN WINDOW
          userLogin:"ΣΥΝΔΕΣΗ ΧΡΗΣΤΗ", password:"Κωδικός", selectRole:"Επιλέξτε Ρόλο", userManager:"Διαχειριστής Χρηστών", reservationManager:"Διαχειριστής Κρατήσεων", teacher:"Διδάσκοντας", 

          //INDEX
          welcome_heading: "Σύστημα Διαχείρισης Κοινών Πόρων",
          intro_text: "Καλώς ήρθατε στο Σύστημα Διαχείρισης Κοινών Πόρων (Common Resources Management System - CRMS). Το CRMS διαχειρίζεται τους χώρους, τις αίθουσες και, γενικότερα, τους κτηριακούς πόρους του Πανεπιστημίου Αιγαίου. Εάν έχετε λογαριασμό στο Πανεπιστήμιο Αιγαίου παρακαλούμε συνδεθείτε πληκτρολογώντας το όνομα χρήστη και το συνθηματικό σας (όπως στο ηλεκτρονικό ταχυδρομείο του Πανεπιστημίου). Εάν θέλετε να ζητήσετε τη χρήση κάποιου χώρου, παρακαλώ συμπληρώστε τη σχετική αίτηση επιλέγοντας «Αίτηση διάθεσης πανεπιστημιακού χώρου».",
          
          //MENU
          menu1:"Αρχική", menu2:"Αίθουσες", menu3:"Κρατήσεις", menu4:"Διδασκαλία",

          //FOOTER
          bottomContact:"ΕΠΙΚΟΙΝΩΝΙΑ", bottomAddress:"ΔΙΕΥΘΥΝΣΗ: Κτήριο Λυμπέρη, Παλαμά 2 & Γοργύρας", postCode:"ΤΑΧΥΔΡΟΜΙΚΟΣ ΚΩΔΙΚΑΣ: 83200", bottomPhone:"ΤΗΛΕΦΩΝΟ: +30 22730 82200", email:"ΗΛΕΚΤΡΟΝΙΚΟ ΤΑΧΥΔΡΟΜΕΙΟ: dicsd@aegean.gr",

          //ROOM
          roomName:"Όνομα Αίθουσας:", addRoom:"Προσθήκη Αίθουσας", addMultipleRooms:"Προσθήκη Πολλαπλών Αιθουσών", updateRoom:"Ανανέωση Αίθουσας", deleteRoom:"Διαγραφή Αίθουσας", displayRoom:"Εμφάνιση Αίθουσας", 
          displayRooms:"Εμφάνιση Αιθουσών", filterRooms:"Φίλτρα Αιθουσών:", newReplacementRoom:"Επιλέξτε Νέα Αίθουσα Αναπλήρωσης:", displayRoomDetails:"Εμφάνισε Λεπτομέρειες Αίθουσας",

          //RESERVATION
          displayReservation:"Εμφάνιση Κράτησης", displayReservation:"Εμφάνιση Κράτησης", displayReservations:"Εμφάνιση Κρατήσεων", addReservation:"Προσθήκη Κράτησης",
          addMulReservations:"Προσθήκη Πολλαπλών Κρατήσεων", updateReservation:"Ανανέωση Κράτησης", deleteReservation:"Διαγραφή Κράτησης", selectReservationID:"Επιλέξτε ID Κράτησης:",
          selectDate:"Επιλέξτε Ημερομηνία:", reservationToRelease:"Επιλέξτε Αρχική Κράτηση για Αποδεύσμευση:", selectReservationDate:"Επιλέξτε Ημερομηνία Κράτησης",
          newReplacementDay:"Επιλέξτε Νέα Ημερομηνία Αναπλήρωσης:", newReplacementTime:"Επιλέξτε Νέα Ώρα Αναπλήρωσης:", newReplacementDuration:"Επιλέξτε Νέα Διάρκεια Αναπλήρωσης (Ώρες):",

          //TEACHING
          teachingReplacement:"Αποδοχή / Απόρριψη Αναπλήρωσης Διδασκαλίας", teachingAdministration:"Διοίκηση Διδασκαλίας", addTeaching:"Προσθήκη Διδασκαλίας", 
          updateTeaching:"Ανανέωση Διδασκαλίας", displayTeaching:"Εμφάνιση Διδασκαλίας", displayTeachings:"Εμφάνιση Διδασκαλιών", deleteTeaching:"Διαγραφή Διδασκαλίας", 
          createTeachingReplacement:"Δημιουργία Αίτησης Αναπλήρωσης Διδασκαλίας", teachingReplacementStatus:"Κατάσταση Αιτήματος Αναπλήρωσης Διδασκαλίας", teachingId:"ID Διδασκαλίας:",

          //EXTRA
          usersList:"Λίστα Χρηστών", displayUser:"Εμφάνιση Χρήστη", addUser:"Προσθήκη Χρήστη", deleteUser:"Διαγραφή Χρήστη", acceptApplication:"Αποδοχή Αίτησης", rejectApplication:"Απόρριψη Αίτησης", uploadFile:"Ανέβασε Αρχείο", replacementApplication:"Υποβολή Αίτησης Αναπλήρωσης"
        },
      en: {
          title:"Department of Information & Communication Systems Engineering",

          //TOP BAR
          profile:"PROFILE",
          login:"LOG IN", logout:"LOG OUT",
          address:"ADDRESS: NEO KARLOVASI, SAMOS",
          phoneNumber:"PHONE NUMBER: 22730 - 82200",

          //PROFILE WINDOW
          userProfile:"User Profile",
          close:"Close",

          //LOGIN WINDOW
          userLogin:"USER LOG IN", password:"Password", selectRole:"Select Role", userManager:"User Manager", reservationManager:"Reservation Manager", teacher:"Teacher",

          //INDEX
          welcome_heading: "Common Resource Management System",
          intro_text: "Welcome to the Common Resources Management System (CRMS). CRMS manages the premises, the rooms, and in general, the building resources of the University of the Aegean. If you have an account at the University of the Aegean, please log in by entering your username and password (as in the University's email). If you would like to request the use of a space, please complete the relevant application by selecting 'Application for university space availability'.",
          
          //MENU
          menu1:"Home", menu2: "Rooms", menu3:"Reservations", menu4:"Teaching",

          //FOOTER
          bottomContact:"CONTACT", bottomAddress:"ADDRESS: Limperis Building, Palamas 2 & Gorgiras", postCode:"POST CODE: 83200", bottomPhone:"PHONE NUMBER: +30 22730 82200", email:"EMAIL: dicsd@aegean.gr",

          //ROOM
          roomName:"Room Name:", addRoom:"Add Room", addMultipleRooms:"Add Multiple Rooms", updateRoom:" Update Room", deleteRoom:"Delete Room", displayRoom:"Display Room", displayRooms:"Display Rooms",
          filterRooms:"Filter Rooms:", newReplacementRoom:"Select New Replacement Room:", displayRoomDetails:"Display Room Details",

          //RESERVATION
          displayReservation:"Display Reservation", displayReservation:"Display Reservation", displayReservations:"Display Reservations",
          addReservation:"Add Reservation", addMulReservations:"Add Multiple Reservations", updateReservation:"Update Reservation", deleteReservation:"Delete Reservation",
          selectReservationID:"Select Reservation ID:", selectDate:"Select Date:", reservationToRelease:"Select Original Reservation to Release:", selectReservationDate:"Select Date Reservation:",
          newReplacementDay:"Select New Replacement Date:", newReplacementTime:"Select New Replacement Time:", newReplacementDuration:"Select New Replacement Duration:",

          //TEACHING
          teachingReplacement:"Teaching Replacement Acceptance / Rejection", teachingAdministration:"Teaching Administration", addTeaching:"Add Teaching", 
          updateTeaching:"Update Teaching", displayTeaching:"Display Teaching", displayTeachings:"Display Teachings", deleteTeaching:"Delete Teaching",  
          createTeachingReplacement:"Create Teaching Replacement Request", teachingReplacementStatus:"Teaching Replacement Request Status", teachingId:"Teaching ID:",

          //EXTRA
          usersList:"Users List", displayUser:"Display User", addUser:"Add User", deleteUser:"Delete User", acceptApplication:"Accept Application", rejectApplication:"Reject Application", uploadFile:"Upload File", replacementApplication:"Submit Replacement Application"
        }
  };

  var elements = document.querySelectorAll("[data-lang-key]");
  for (var i = 0; i < elements.length; i++) {
      var key = elements[i].getAttribute("data-lang-key");
      elements[i].textContent = languageData[language][key];
  }
}

window.onload = function() {
  var languageButtons = document.getElementsByClassName("language-button");
  for (var i = 0; i < languageButtons.length; i++) {
      languageButtons[i].addEventListener("click", function(event) {
          var language = event.target.getAttribute("data-language");
          changeLanguage(language);
      });
  }
};
