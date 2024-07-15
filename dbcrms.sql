-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 11 Ιουλ 2023 στις 18:07:49
-- Έκδοση διακομιστή: 10.4.28-MariaDB
-- Έκδοση PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `dbcrms`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_identifier` varchar(255) DEFAULT NULL,
  `room_name` varchar(255) DEFAULT NULL,
  `room_building` varchar(255) DEFAULT NULL,
  `room_address` varchar(255) DEFAULT NULL,
  `room_capacity` int(11) NOT NULL,
  `hourly_availability` varchar(255) DEFAULT NULL,
  `weekly_availability` varchar(255) DEFAULT NULL,
  `room_type` varchar(255) DEFAULT NULL,
  `number_of_computers` int(11) DEFAULT NULL,
  `has_projector` tinyint(1) NOT NULL,
  `is_locked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `room`
--

INSERT INTO `room` (`room_id`, `room_identifier`, `room_name`, `room_building`, `room_address`, `room_capacity`, `hourly_availability`, `weekly_availability`, `room_type`, `number_of_computers`, `has_projector`, `is_locked`) VALUES
(5001, 'A1', 'Ilektra', 'Limperis', 'Gorgiras', 40, '09:00 - 12:00, 17:00 - 21:00', 'Monday 09 / 03 / 2023, Wendesday 11 / 03 / 2023', 'Laboratory', 40, 1, 0),
(5002, 'A2', 'Alkmini', 'Limperis', 'Gorgiras', 40, '09:00 - 15:00, 17:00 - 19:00', 'Thursday 28 / 09 / 2023, Friday 26 / 04 / 2023', 'Laboratory', 40, 1, 0),
(5003, 'A3', 'No. 1', 'Sxoliko', 'Ploutarxou', 300, '11:00 - 15:00, 18:00 - 21:00', 'Tuesday 29 / 05 / 2023, Tuesday 30 / 05 / 2023', 'Theory', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `teaching`
--

CREATE TABLE `teaching` (
  `teaching_id` int(11) NOT NULL,
  `teaching_identifier` varchar(255) DEFAULT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `teaching_type` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `number_of_hours_teaching` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `teaching`
--

INSERT INTO `teaching` (`teaching_id`, `teaching_identifier`, `course_code`, `course_name`, `user_id`, `teaching_type`, `semester`, `department`, `number_of_hours_teaching`) VALUES
(8001, 'B1', '345', 'Robotics', '1002', 'Laboratory', '7', 'MPES', 2),
(8002, 'B2', '150', 'Java Programming', '1002', 'Theory', '3', 'MPES', 3),
(8003, 'B3', '625', 'Statistics', '1003', 'Theory', '2', 'SAXM', 3),
(8004, 'B4', '430', 'Artificial Intelligence', '1002', 'Laboratory', '6', 'MPES', 2);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `teaching_id` int(11) DEFAULT NULL,
  `reservation_entry_date` date NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `reservation_day` varchar(255) DEFAULT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_time` time DEFAULT NULL,
  `reservation_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `room_id`, `teaching_id`, `reservation_entry_date`, `start_date`, `end_date`, `reservation_day`, `reservation_date`, `reservation_time`, `reservation_duration`) VALUES
(7001, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL),
(7002, 5002, 8002, '2023-04-22', NULL, NULL, 'Thursday', '2023-09-28', '09:00:00', 2),
(7003, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL),
(7004, 5003, 8001, '2023-05-23', NULL, NULL, 'Wednesday', '2023-05-31', '18:00:00', 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `replenishmentrequest`
--

CREATE TABLE `replenishmentrequest` (
  `request_id` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `request_status` varchar(255) DEFAULT NULL,
  `rejection_reason` varchar(255) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `date_to_refill` date DEFAULT NULL,
  `refill_date` date DEFAULT NULL,
  `refill_room` varchar(255) DEFAULT NULL,
  `refill_time` time DEFAULT NULL,
  `refill_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `replenishmentrequest`
--

INSERT INTO `replenishmentrequest` (`request_id`, `request_date`, `request_status`, `rejection_reason`, `reservation_id`, `date_to_refill`, `refill_date`, `refill_room`, `refill_time`, `refill_duration`) VALUES
(6001, '2023-03-27', 'Denied',  NULL, NULL, '2023-03-30', NULL, NULL, NULL, NULL),
(6002, '2023-04-18', 'Accepted', NULL, 7002, '2023-04-26', '2023-09-28', 'Alkmini', '09:00:00', 2),
(6003, '2023-05-07', 'Pending', NULL, NULL, '2023-05-14', NULL, NULL, NULL, NULL),
(6004, '2023-05-21', 'Accepted', NULL, 7004, '2023-05-31', '2023-05-31', 'No. 1', '18:00:00', 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `role_c`
--

CREATE TABLE `role_c` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `role_c`
--

INSERT INTO `role_c` (`role_id`, `role_name`) VALUES
(2001, 'Diaxeiristis Xriston'),
(2002, 'Diaxeiristis Kratiseon'),
(2003, 'Didaskon');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_c`
--

CREATE TABLE `user_c` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password_e` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `user_c`
--

INSERT INTO `user_c` (`user_id`, `email`, `password_e`, `fname`, `lname`, `department`) VALUES
(1001, 'parios@gmail.com', 'jh123', 'Giannhs', 'Parios', 'MPES'),
(1002, 'gkalhs@gmail.com', 'lh3jjj', 'Nikos', 'Gkalhs', 'MPES'),
(1003, 'penta@gmail.com', 'h126gj', 'Katerina', 'Pentagiwtissa', 'SAXM'),
(1004, 'maria@gmail.com', '643gj', 'Maria', 'pappa', 'MATH');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `user_id`, `teacher_type`) VALUES
(3001, 1002, 'DEP'),
(3002, 1003, 'ETEP');

-- --------------------------------------------------------


--
-- Δομή πίνακα για τον πίνακα `user_role`
--

CREATE TABLE `user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1001, 2001),
(1001, 2002),
(1002, 2003),
(1003, 2003),
(1004, 2002);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `replenishmentrequest`
--
ALTER TABLE `replenishmentrequest`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `fk_replenishmentrequest_reservation` (`reservation_id`);

--
-- Ευρετήρια για πίνακα `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `fk_reservation_room` (`room_id`),
  ADD KEY `fk_reservation_teaching` (`teaching_id`);

--
-- Ευρετήρια για πίνακα `role_c`
--
ALTER TABLE `role_c`
  ADD PRIMARY KEY (`role_id`);

--
-- Ευρετήρια για πίνακα `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Ευρετήρια για πίνακα `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `fk_teacher_user` (`user_id`);

--
-- Ευρετήρια για πίνακα `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`teaching_id`),
  ADD KEY `fk_teaching_user` (`user_id`);

--
-- Ευρετήρια για πίνακα `user_c`
--
ALTER TABLE `user_c`
  ADD PRIMARY KEY (`user_id`);

--
-- Ευρετήρια για πίνακα `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `fk_user_role_role` (`role_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `replenishmentrequest`
--
ALTER TABLE `replenishmentrequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6005;

--
-- AUTO_INCREMENT για πίνακα `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7005;

--
-- AUTO_INCREMENT για πίνακα `role_c`
--
ALTER TABLE `role_c`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2004;

--
-- AUTO_INCREMENT για πίνακα `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5004;

--
-- AUTO_INCREMENT για πίνακα `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;

--
-- AUTO_INCREMENT για πίνακα `teaching`
--
ALTER TABLE `teaching`
  MODIFY `teaching_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8005;

--
-- AUTO_INCREMENT για πίνακα `user_c`
--
ALTER TABLE `user_c`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `replenishmentrequest`
--
ALTER TABLE `replenishmentrequest`
  ADD CONSTRAINT `fk_replenishmentrequest_reservation` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reservation_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservation_teaching` FOREIGN KEY (`teaching_id`) REFERENCES `teaching` (`teaching_id`) ON DELETE CASCADE ON UPDATE CASCADE;
 

--
-- Περιορισμοί για πίνακα `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk_teacher_user` FOREIGN KEY (`user_id`) REFERENCES `user_c` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `fk_teaching_user` FOREIGN KEY (`user_id`) REFERENCES `user_c` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Περιορισμοί για πίνακα `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `fk_user_role_role` FOREIGN KEY (`role_id`) REFERENCES `role_c` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_role_user` FOREIGN KEY (`user_id`) REFERENCES `user_c` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
