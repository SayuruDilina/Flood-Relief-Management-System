-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306:4306
-- Generation Time: Mar 18, 2026 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flood_relief_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency_alerts`
--

CREATE TABLE `emergency_alerts` (
  `id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','inactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emergency_alerts`
--

INSERT INTO `emergency_alerts` (`id`, `message`, `createDate`, `status`) VALUES
(4, 'Heavy rainfall may cause sudden flooding in your area. Be alert for rapidly rising water Do NOT attempt to walk or drive through floodwaters Move valuables to higher ground Stay tuned for updates.', '2026-03-18 14:28:48', 'active'),
(5, 'Severe flooding detected in low-lying areas of Colombo and Gampaha. Water levels in Kelani River are rising rapidly. Immediate evacuation required. Move to nearest safe shelter. Avoid flooded roads and bridges. Emergency Hotline: 117 / 011-2505488', '2026-03-18 14:30:18', 'active'),
(6, 'High risk of landslides in Kandy, Badulla, and Nuwara Eliya districts.\n\n➡ Evacuate immediately if cracks appear in soil/walls\n➡ Avoid slopes and unstable areas\n➡ Follow local authority instructions', '2026-03-18 14:32:05', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `relief_requests`
--

CREATE TABLE `relief_requests` (
  `relief_id` int(11) NOT NULL,
  `type_of_relief` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `divisional_secretariat` varchar(100) NOT NULL,
  `gn_division` varchar(100) NOT NULL,
  `contact_person_name` varchar(150) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `num_of_family_members` int(11) NOT NULL,
  `flood_level` enum('Low','Medium','High') DEFAULT NULL,
  `description` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `current_status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relief_requests`
--

INSERT INTO `relief_requests` (`relief_id`, `type_of_relief`, `district`, `divisional_secretariat`, `gn_division`, `contact_person_name`, `contact_number`, `address`, `num_of_family_members`, `flood_level`, `description`, `user_id`, `created_at`, `updated_at`, `current_status`) VALUES
(1, 'Food', 'Galle', 'Baddegama', 'Halphathota', 'Upul', '0778337589', 'halphathtotabaddegama', 1, 'Medium', 'food needed', 2, '2026-03-16 05:08:50', '2026-03-18 14:44:40', 'approved'),
(2, 'Food', 'Colombo', 'Homagama', 'Pitipana South', 'Hiruni Kumarathunge', '0710525810', 'No 392/5 Janasetha MW Pitipana South', 5, 'Medium', '', 3, '2026-03-18 08:31:26', '2026-03-18 08:31:44', 'approved'),
(3, 'Food', 'Colombo', 'Colombo', 'Pettah', 'Nimal Perera', '0771234567', 'No. 45, 2nd Cross Street, Pettah, Colombo 11', 5, 'High', 'House flooded, no clean water or cooking access.', 4, '2026-03-18 08:35:09', '2026-03-18 08:35:09', 'pending'),
(4, 'Medicine', 'Gampaha', 'Kelaniya', 'Peliyagoda', 'Nishan Athapaththu', '0723456789', 'No. 12, Temple Road, Peliyagoda', 6, 'High', 'Area submerged, elderly and children need medicine.', 5, '2026-03-18 08:38:56', '2026-03-18 09:08:16', 'approved'),
(5, 'Shelter', 'Kalutara', 'Panadura', 'Wadduwa', 'Ruwan Fernando', '0759876543', 'No. 88, Galle Road, Wadduwa', 4, 'Low', 'House partially damaged, need shelter.', 6, '2026-03-18 08:46:42', '2026-03-18 08:46:42', 'pending'),
(6, 'Medicine', 'Kandy', 'Udunuwara', 'Peradeniya', 'Ranil Jayasingha', '0704567891', 'No. 22, Peradeniya Road, Kandy', 5, 'High', 'Landslide risk, house unsafe', 7, '2026-03-18 08:53:44', '2026-03-18 09:08:12', 'approved'),
(7, 'Food', 'Matale', 'Matale', 'Ukuwela', 'Sunil Bandara', '0723456789', 'No. 14, Main Street, Ukuwela', 3, 'Medium', 'Access to food limited.', 8, '2026-03-18 09:01:11', '2026-03-18 09:01:11', 'pending'),
(8, 'Shelter', 'Nuwara Eliya', 'Nallathanniya', 'Maskeliya', 'Nataraja Sivaraj', '0751231234', 'Estate Line Rooms, Maskeliya', 6, 'High', 'House damaged due to heavy rain.', 9, '2026-03-18 09:05:58', '2026-03-18 09:08:08', 'approved'),
(9, 'Water', 'Puttalam', 'Puttalam', 'Mundel', 'Fathima Nazeer', '0763344556', 'No. 55, Coastal Road, Mundel', 7, 'Low', '', 10, '2026-03-18 09:16:39', '2026-03-18 09:16:39', 'pending'),
(10, 'Food', 'Kurunegala', 'Kuliyapitiya', 'Narammala', 'Saman Kumara', '0789988776', 'No. 90, Narammala Town', 5, 'Medium', 'Roads blocked, food shortage.', 11, '2026-03-18 09:20:03', '2026-03-18 09:20:03', 'pending'),
(11, 'Shelter', 'Ratnapura', 'Eheliyagoda', 'Kuruwita', 'N Ekanayake', '0712233445', 'No. 18, Kuruwita Road, Rathnapura', 6, 'High', 'Landslide threat.', 12, '2026-03-18 09:24:35', '2026-03-18 09:24:35', 'pending'),
(12, 'Water', 'Kegalle', 'Mawanella', 'Aranayaka', 'Ajith Peries', '0778899001', 'No 21, Aranayaka', 4, 'Low', 'Water Access limited', 13, '2026-03-18 09:30:07', '2026-03-18 09:30:07', 'pending'),
(13, 'Food', 'Batticaloa', 'Kattankudy', 'Eravur', 'Suresh Kumar', '0754433221', 'No. 11, Kattankudy', 5, 'High', 'Severe flooding.', 14, '2026-03-18 10:03:49', '2026-03-18 10:03:49', 'pending'),
(14, 'Water', 'Trincomalee', 'Kinniya', 'Muthur', 'Tharshini Raj', '0786655443', 'No 2, Kinniya', 4, 'High', '', 15, '2026-03-18 10:28:38', '2026-03-18 10:28:38', 'pending'),
(15, 'Medicine', 'Badulla', 'Haldummulla', 'Passara', 'Nadeesha Kumari', '0772233445', 'No 11 , Passara', 5, 'Low', '', 16, '2026-03-18 10:31:45', '2026-03-18 10:31:45', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `status` enum('active','blocked') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `NIC` varchar(15) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `contact_number`, `email`, `role`, `status`, `created_at`, `NIC`, `gender`, `street_address`, `city`, `district`, `province`, `DOB`) VALUES
(1, 'Aquaadmin', '$2y$10$uiG5sFerX5wUf9sjL.N5cemVP9qXurkHy3z4YeCRxr1GMD./hmzeG', 'AQUA ADMIN', '0702786812', 'aquarelief@gmail.com', 'admin', 'active', '2026-03-16 04:41:44', '2003288112463', 'Male', '123 Admin Street', 'Colombo', 'Colombo', 'Western', '2003-10-07'),
(2, 'sayuru', '$2y$10$Q3r218V711tnyGtR1EFzSO6GflmaJh88PPohXaa2va2k0Td4ouLE6', 'Sayuru Dilina', '0769732519', 'sayurudilina@gmail.com', 'user', 'active', '2026-03-16 05:07:15', '20032895463', 'Male', 'No.115,NewCity,Halphathota', 'Baddegama', 'Galle', 'Southern', '2003-06-07'),
(3, 'nawokumarathunge', '$2y$10$1w/0aaebCRClW9nf/myyjOFtoS4gT9NbI649J/D1XjtY6d3RdnXsK', 'Hiruni Kumarathunge', '0710525810', 'hiruni@gmail.com', 'user', 'active', '2026-03-18 08:30:12', '200371010267', 'Female', 'No 392/5 Janasetha MW Pitipana South', 'Homagama', 'Colombo', 'Western', '2003-07-28'),
(4, 'nperera', '$2y$10$Xbp6r4YR2QWjn7bxk6g4nuHXHeUXSgi6S4v70tZfTs9HzbS9BA9AW', 'Nimal Perera', '0771234567', 'nperera1990@gmail.com', 'user', 'active', '2026-03-18 08:33:54', '901234567V', 'Male', 'No. 45, 2nd Cross Street, Pettah, Colombo 11', 'Pettah', 'Colombo', 'Western', '1990-10-25'),
(5, 'csilva', '$2y$10$EAeqWpkZzqXZqILnHHAI1OThK9iVX0OquiplcBko23ufnwkdqn8Ja', 'Chamiri Silva', '0712345678', 'chamirisilva@gmail.com', 'user', 'active', '2026-03-18 08:37:14', '925678123V', 'Female', 'No. 12, Temple Road', 'Peliyagoda', 'Gampaha', 'Western', '1992-02-08'),
(6, 'ruwan', '$2y$10$hfKJA3hE0KNHxSU6NTG5CeP/m3qCpfRvBzEE4rkf/kRhMV90yBziG', 'Ruwan Fernando', '0759876543', 'ruwanfernando@gmail.com', 'user', 'active', '2026-03-18 08:44:21', '880123456V', 'Male', 'No. 88, Galle Road', 'Wadduwa', 'Kalutara', 'Western', '1988-11-22'),
(7, 'sanduni', '$2y$10$xhmXo96k8xb82OWvBfhI4uTufDfRjdrMNZjBIIukAExzUer0SmZ96', 'Sanduni Jayasinghe', '0704567891', 'sanduniw@gmail.com', 'user', 'active', '2026-03-18 08:51:06', '945612378V', 'Female', 'No. 22, Peradeniya Road', 'Kandy', 'Kandy', 'Central', '1994-04-25'),
(8, 'sunil', '$2y$10$Ge0swGfgVIfdgVQ3cDKbZuBwdxqhf0cQhSlLJ.3QcHp5.HdS/ywie', 'Sunil Bandara', '0723456789', 'sunilb@gmail.com', 'user', 'active', '2026-03-18 08:59:55', '860987654V', 'Male', 'No. 14, Main Street', 'Ukuwela', 'Matale', 'Central', '1986-02-17'),
(9, 'lakshmidevi', '$2y$10$B8jEDao84Gkdw5dZbHiba.rtAVbKLCf1LW/8dFHa3SZB1c741HxKm', 'Lakshmi Devi', '0767890123', 'nataraja@gmail.com', 'user', 'active', '2026-03-18 09:04:25', '935678912V', 'Female', 'Estate Line Rooms', 'Maskeliya', 'Nuwara Eliya', 'Central', '1993-05-01'),
(10, 'fathima', '$2y$10$qhSRVWg0EOSst.VyWpSAtuozNM9Okotl0LUtRhYFIkJy7gy45iOrC', 'Fathima Nazeer', '0763344556', 'fathima123@gmail.com', 'user', 'active', '2026-03-18 09:15:28', '926789123V', 'Female', 'No. 55, Coastal Road', 'Mundel', 'Puttalam', 'North Western', '1992-07-07'),
(11, 'samankumara', '$2y$10$sqC2nX/dgDneSbqF7NCWHOMJScJCb7gqQ1OqSGSORg2KHnycI46DS', 'Saman Kumara', '0789988776', 'samankumara@gmail.com', 'user', 'active', '2026-03-18 09:18:50', '901112223V', 'Male', 'No. 90, Narammala Town', 'Narammala', 'Kurunegala', 'North Western', '1990-11-26'),
(12, 'nirosha', '$2y$10$eTHELTLknOi0TQp33SpBaOG.Pug12QT2HfkKHhlPqKVGzYfv.pfDu', 'Nirosha Ekanayake', '0712233445', 'nrekanayaka@gmail.com', 'user', 'active', '2026-03-18 09:22:35', '945667788V', 'Male', 'No. 18, Kuruwita Road', 'Kuruwita', 'Ratnapura', 'Sabaragamuwa', '1994-03-18'),
(13, 'ajith', '$2y$10$vVaNao4/NFOUBP0nO3zkAOMu7pslESjTVpMd0JNKpgL9c3mqnbrpS', 'Ajith Peris', '0778899001', 'aperies @gmail.com', 'user', 'active', '2026-03-18 09:26:48', '890123789V', 'Male', 'No. 21, Aranayaka', 'Aranayaka', 'Kegalle', 'Sabaragamuwa', '1989-09-10'),
(14, 'suresh', '$2y$10$FYSElw4D9jujshxtV0il.ORj0LRzImJ3.jR4bzUDbbRV5kxSzuFHu', 'Suresh Kumar', '0754433221', 'suresh@gmail.com', 'user', 'active', '2026-03-18 10:02:39', '912345678V', 'Male', 'No. 11, Kattankudy', 'Kattankudy', 'Batticaloa', 'Eastern', '1991-12-12'),
(15, 'tharishini', '$2y$10$0Dlmqu1dALSvlUiRO.s8k.hstXOUQz2oNBO3s5bpos2AMr7ZwLD3e', 'Tharshini Raj', '0786655443', 'tharshini@gmail.com', 'user', 'active', '2026-03-18 10:25:51', '920001234V', 'Female', 'No. 2, Kinniya', 'Kinniya', 'Trincomalee', 'Eastern', '1992-05-11'),
(16, 'nadeesha', '$2y$10$zQLZPLhjPiCD3gkez6f4he/Cxg9FU6nqBETPgPHn8Ru7zWRzinooW', 'Nadeesha Kumari', '0772233445', 'nadeeshak@gmail.com', 'user', 'active', '2026-03-18 10:30:44', '945667123V', 'Female', 'No. 11, Passara', 'Passara', 'Badulla', 'Uva', '1994-08-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency_alerts`
--
ALTER TABLE `emergency_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relief_requests`
--
ALTER TABLE `relief_requests`
  ADD PRIMARY KEY (`relief_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `NIC` (`NIC`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emergency_alerts`
--
ALTER TABLE `emergency_alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `relief_requests`
--
ALTER TABLE `relief_requests`
  MODIFY `relief_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relief_requests`
--
ALTER TABLE `relief_requests`
  ADD CONSTRAINT `relief_requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
