-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 04:53 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_fee_structure`
--

DROP TABLE IF EXISTS `account_fee_structure`;
CREATE TABLE IF NOT EXISTS `account_fee_structure` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timespan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `admins_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clerks`
--

DROP TABLE IF EXISTS `clerks`;
CREATE TABLE IF NOT EXISTS `clerks` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dept` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clerks_id_user_foreign` (`id_user`),
  KEY `clerks_id_dept_foreign` (`id_dept`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_applicants`
--

DROP TABLE IF EXISTS `college_applicants`;
CREATE TABLE IF NOT EXISTS `college_applicants` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `number_of_inspections` int(10) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `college_applicants_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deans`
--

DROP TABLE IF EXISTS `deans`;
CREATE TABLE IF NOT EXISTS `deans` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dept` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `deans_id_user_foreign` (`id_user`),
  KEY `deans_id_dept_foreign` (`id_dept`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discrepancy_applications`
--

DROP TABLE IF EXISTS `discrepancy_applications`;
CREATE TABLE IF NOT EXISTS `discrepancy_applications` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_discrepancy_list` int(10) UNSIGNED NOT NULL,
  `id_college` int(10) UNSIGNED NOT NULL,
  `is_discrepancy` tinyint(1) NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batch_no` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discrepancy_applications_id_discrepancy_list_foreign` (`id_discrepancy_list`),
  KEY `discrepancy_applications_id_college_foreign` (`id_college`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discrepancy_list`
--

DROP TABLE IF EXISTS `discrepancy_list`;
CREATE TABLE IF NOT EXISTS `discrepancy_list` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_payments`
--

DROP TABLE IF EXISTS `fee_payments`;
CREATE TABLE IF NOT EXISTS `fee_payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_college` int(10) UNSIGNED NOT NULL,
  `id_fee_structure` int(10) UNSIGNED NOT NULL,
  `draftdetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `verified_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fee_payments_id_college_foreign` (`id_college`),
  KEY `fee_payments_id_fee_structure_foreign` (`id_fee_structure`),
  KEY `fee_payments_verified_by_foreign` (`verified_by`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms_fee_payments`
--

DROP TABLE IF EXISTS `forms_fee_payments`;
CREATE TABLE IF NOT EXISTS `forms_fee_payments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_college` int(10) UNSIGNED NOT NULL,
  `id_form_fee_requirement` int(10) UNSIGNED NOT NULL,
  `id_fee_payment` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `forms_fee_payments_id_college_foreign` (`id_college`),
  KEY `forms_fee_payments_id_form_fee_requirement_foreign` (`id_form_fee_requirement`),
  KEY `forms_fee_payments_id_fee_payment_foreign` (`id_fee_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms_fee_requirements`
--

DROP TABLE IF EXISTS `forms_fee_requirements`;
CREATE TABLE IF NOT EXISTS `forms_fee_requirements` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_form_list` int(10) UNSIGNED NOT NULL,
  `id_fee_structure` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `forms_fee_requirements_id_form_list_foreign` (`id_form_list`),
  KEY `forms_fee_requirements_id_fee_structure_foreign` (`id_fee_structure`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forms_list`
--

DROP TABLE IF EXISTS `forms_list`;
CREATE TABLE IF NOT EXISTS `forms_list` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inspection_reports`
--

DROP TABLE IF EXISTS `inspection_reports`;
CREATE TABLE IF NOT EXISTS `inspection_reports` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_college` int(10) UNSIGNED NOT NULL,
  `id_teacher` int(10) UNSIGNED NOT NULL,
  `final_remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_no` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inspection_reports_id_college_foreign` (`id_college`),
  KEY `inspection_reports_id_teacher_foreign` (`id_teacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_departments_clerk`
--

DROP TABLE IF EXISTS `list_of_departments_clerk`;
CREATE TABLE IF NOT EXISTS `list_of_departments_clerk` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_departments_dean`
--

DROP TABLE IF EXISTS `list_of_departments_dean`;
CREATE TABLE IF NOT EXISTS `list_of_departments_dean` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_departments_teacher`
--

DROP TABLE IF EXISTS `list_of_departments_teacher`;
CREATE TABLE IF NOT EXISTS `list_of_departments_teacher` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dept` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teachers_id_user_foreign` (`id_user`),
  KEY `teachers_id_dept_foreign` (`id_dept`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

DROP TABLE IF EXISTS `user_activations`;
CREATE TABLE IF NOT EXISTS `user_activations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_activations_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clerks`
--
ALTER TABLE `clerks`
  ADD CONSTRAINT `clerks_id_dept_foreign` FOREIGN KEY (`id_dept`) REFERENCES `list_of_departments_clerk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clerks_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `college_applicants`
--
ALTER TABLE `college_applicants`
  ADD CONSTRAINT `college_applicants_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deans`
--
ALTER TABLE `deans`
  ADD CONSTRAINT `deans_id_dept_foreign` FOREIGN KEY (`id_dept`) REFERENCES `list_of_departments_dean` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discrepancy_applications`
--
ALTER TABLE `discrepancy_applications`
  ADD CONSTRAINT `discrepancy_applications_id_college_foreign` FOREIGN KEY (`id_college`) REFERENCES `college_applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discrepancy_applications_id_discrepancy_list_foreign` FOREIGN KEY (`id_discrepancy_list`) REFERENCES `discrepancy_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_payments`
--
ALTER TABLE `fee_payments`
  ADD CONSTRAINT `fee_payments_id_college_foreign` FOREIGN KEY (`id_college`) REFERENCES `college_applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_payments_id_fee_structure_foreign` FOREIGN KEY (`id_fee_structure`) REFERENCES `account_fee_structure` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fee_payments_verified_by_foreign` FOREIGN KEY (`verified_by`) REFERENCES `clerks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forms_fee_payments`
--
ALTER TABLE `forms_fee_payments`
  ADD CONSTRAINT `forms_fee_payments_id_college_foreign` FOREIGN KEY (`id_college`) REFERENCES `college_applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forms_fee_payments_id_fee_payment_foreign` FOREIGN KEY (`id_fee_payment`) REFERENCES `fee_payments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forms_fee_payments_id_form_fee_requirement_foreign` FOREIGN KEY (`id_form_fee_requirement`) REFERENCES `forms_fee_requirements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forms_fee_requirements`
--
ALTER TABLE `forms_fee_requirements`
  ADD CONSTRAINT `forms_fee_requirements_id_fee_structure_foreign` FOREIGN KEY (`id_fee_structure`) REFERENCES `account_fee_structure` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forms_fee_requirements_id_form_list_foreign` FOREIGN KEY (`id_form_list`) REFERENCES `forms_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inspection_reports`
--
ALTER TABLE `inspection_reports`
  ADD CONSTRAINT `inspection_reports_id_college_foreign` FOREIGN KEY (`id_college`) REFERENCES `college_applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inspection_reports_id_teacher_foreign` FOREIGN KEY (`id_teacher`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_id_dept_foreign` FOREIGN KEY (`id_dept`) REFERENCES `list_of_departments_teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teachers_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD CONSTRAINT `user_activations_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
