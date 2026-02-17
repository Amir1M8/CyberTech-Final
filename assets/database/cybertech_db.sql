-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2026 at 04:20 AM
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
-- Database: `cybertech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `laboratories_table`
--

CREATE TABLE `laboratories_table` (
  `id` int(15) NOT NULL,
  `lab_name` varchar(60) NOT NULL,
  `lab_point` int(3) NOT NULL,
  `lab_level` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `laboratories_table`
--

INSERT INTO `laboratories_table` (`id`, `lab_name`, `lab_point`, `lab_level`, `image`, `url`) VALUES
(1, 'Command Injection', 4, 'Easy', '../../assets/images/laboratories/ci.jpeg', '#CommandInjection'),
(2, 'Open Redirect', 15, 'Medium', '../../assets/images/laboratories/redirect.jpeg', '#OpenRedirect'),
(3, 'Authentication Vulnerabilities', 28, 'Hard', '../../assets/images/laboratories/auth.png', '#Auth'),
(4, 'Server-Side Template Injection', 28, 'Hard', '../../assets/images/laboratories/ssti.png', '#SSTI'),
(5, 'Server-Side Request Forgery', 28, 'Hard', '../../assets/images/laboratories/ssrf.png', '#SSRF'),
(6, 'Remote Code Execution', 28, 'Medium', '../../assets/images/laboratories/rce.png', '#RCE'),
(7, 'Cross-Site Request Forgery', 30, 'Medium', '../../assets/images/laboratories/csrf.png', '#CSRF'),
(8, 'Cross-Origin Resourse Sharing', 15, 'Easy', '../../assets/images/laboratories/cors.png', '#CORS'),
(9, 'Cache Vulnerabilities', 50, 'Hard', '../../assets/images/laboratories/cache.png', '#Cache'),
(10, 'Broken Access Controls', 100, 'Hard', '../../assets/images/laboratories/bac.png', '#BAC'),
(11, 'XML External Entity', 25, 'Hard', '../../assets/images/laboratories/xxe.png', '#XXE'),
(12, 'Cross-Site Scripting', 30, 'Medium', '../../assets/images/laboratories/xss.png', '#XSS'),
(13, 'SQL Injection', 50, 'Medium', '../../assets/images/laboratories/sqli.png', '#SQLi'),
(14, 'Cryptography', 15, 'Easy', '../../assets/images/laboratories/crypto.png', '#Crypto'),
(15, 'API Penetration Testing', 40, 'Medium', '../../assets/images/laboratories/api.png', '#API'),
(16, 'OAuth Authentication Vulnerabilities', 60, 'Hard', '../../assets/images/laboratories/oauth.png', '#OAuth');

-- --------------------------------------------------------

--
-- Table structure for table `machines_db`
--

CREATE TABLE `machines_db` (
  `id` int(15) NOT NULL,
  `machine_name` varchar(30) NOT NULL,
  `description` varchar(400) NOT NULL,
  `fields` varchar(100) NOT NULL,
  `level` varchar(60) NOT NULL,
  `image` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `machines_db`
--

INSERT INTO `machines_db` (`id`, `machine_name`, `description`, `fields`, `level`, `image`, `url`) VALUES
(1, 'Zodd Machine', 'A challenge-focused machine targeting web application and authentication weaknesses — practice brute-force scenarios, session management flaws, and misconfigured auth. Great for learning how to detect insecure login patterns.', 'Authentication, Session Management', 'Intermediate', '../../assets/images/machines/zodd.jpeg', '#Zodd'),
(2, 'Arrival Machine', 'Simulates a multi-service server where port discovery, service fingerprinting, and misconfigured services are the main challenges. Ideal for network scanning and hardening practice.', 'Network, Services, Misconfiguration', 'Intermediate–Advanced', '../../assets/images/machines/arrival.jpeg', '#Arrival'),
(3, 'Escape the BlackHole', 'A web app with improper data handling and multiple reflected/stored input points — designed to practice input validation and safe testing of XSS/CSRF scenarios.', 'Web App, XSS, CSRF, Input Validation', 'Beginner–Intermediate', '../../assets/images/machines/blackhole.jpeg', '#BlackHole'),
(4, 'Escape the Matrix', 'An internal administration system with complex access controls and information disclosure issues. Emphasizes privilege escalation and in-depth access auditing.', 'Access Control, Information Disclosure, Privilege Escalation', 'Intermediate–Advanced', '../../assets/images/machines/matrix.jpeg', '#Matrix'),
(5, 'Pgnix Machine', 'A machine for binary analysis and exploit development practice (includes challenges like hardened buffer overflows). Built for those starting with reverse engineering and safe exploitation techniques.', 'Binary Analysis, RE, Memory Exploitation', 'Advanced (intro to RE)', '../../assets/images/machines/pgnix.jpeg', '#Pgnix'),
(6, 'rAndom Machine', 'Emulates a small router/firewall with flawed rules and misconfigured NAT/ACLs — a chance to learn about network misconfigs and traffic sniffing in an isolated environment.', 'Networking, Firewall, Router Configuration', 'Intermediate', '../../assets/images/machines/rAndom.jpeg', '#rAndom'),
(7, 'ReconMe Machine', 'A test database containing examples of complex SQL injection and faulty transaction handling; focuses on identifying injection types and mitigation strategies.\r\n', 'Databases, SQLi, Transaction Safety', 'Beginner–Intermediate', '../../assets/images/machines/ReconMe.png', '#ReconMe'),
(8, 'Zodiac Machine', 'A controlled machine for capturing malicious behavior; ideal for log analysis, attacker behavior profiling, and building IDS/IPS scenarios.\r\n', 'Intrusion Detection, Log Analysis, Honeypot', 'All levels (analysis-focused)', '../../assets/images/machines/Zodiac.jpeg', '#Zodiac');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `user_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `description`, `user_status`) VALUES
(1, 'admin', 'admin123', 'admin@gmail.com', 'CyberTech Admin - Professional VIP USER', 'isAdmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laboratories_table`
--
ALTER TABLE `laboratories_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines_db`
--
ALTER TABLE `machines_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laboratories_table`
--
ALTER TABLE `laboratories_table`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `machines_db`
--
ALTER TABLE `machines_db`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
