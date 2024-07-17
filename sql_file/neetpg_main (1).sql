-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2022 at 12:42 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neetpg_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_indias`
--

CREATE TABLE `all_indias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `andhra_pradeshes`
--

CREATE TABLE `andhra_pradeshes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assams`
--

CREATE TABLE `assams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bihars`
--

CREATE TABLE `bihars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chandigarhs`
--

CREATE TABLE `chandigarhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chhattisgarhs`
--

CREATE TABLE `chhattisgarhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neet_score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gujarats`
--

CREATE TABLE `gujarats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `haryanas`
--

CREATE TABLE `haryanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `himachal_pradeshes`
--

CREATE TABLE `himachal_pradeshes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jammu_and_kashmirs`
--

CREATE TABLE `jammu_and_kashmirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jharkhands`
--

CREATE TABLE `jharkhands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karnatakas`
--

CREATE TABLE `karnatakas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keralas`
--

CREATE TABLE `keralas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `madhya_pradeshes`
--

CREATE TABLE `madhya_pradeshes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maharashtras`
--

CREATE TABLE `maharashtras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manipurs`
--

CREATE TABLE `manipurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meghalayas`
--

CREATE TABLE `meghalayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `odishas`
--

CREATE TABLE `odishas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pondicherries`
--

CREATE TABLE `pondicherries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `punjabs`
--

CREATE TABLE `punjabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rajasthans`
--

CREATE TABLE `rajasthans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_notices`
--

CREATE TABLE `school_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_previous_events`
--

CREATE TABLE `school_previous_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `previos_events` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_upcoming_events`
--

CREATE TABLE `school_upcoming_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upcoming_events` text COLLATE utf8mb4_unicode_ci,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state_documents`
--

CREATE TABLE `state_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_desc` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tamil_nadus`
--

CREATE TABLE `tamil_nadus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telanganas`
--

CREATE TABLE `telanganas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tripuras`
--

CREATE TABLE `tripuras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_original_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `extension` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uttarakhands`
--

CREATE TABLE `uttarakhands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uttar_pradeshes`
--

CREATE TABLE `uttar_pradeshes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_site_setups`
--

CREATE TABLE `web_site_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternate_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `west_bengals`
--

CREATE TABLE `west_bengals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `counseling_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quota` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `private_mgmt_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nri_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_years` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bond_penalty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripend_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `round` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_indias`
--
ALTER TABLE `all_indias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `andhra_pradeshes`
--
ALTER TABLE `andhra_pradeshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assams`
--
ALTER TABLE `assams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bihars`
--
ALTER TABLE `bihars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chandigarhs`
--
ALTER TABLE `chandigarhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chhattisgarhs`
--
ALTER TABLE `chhattisgarhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gujarats`
--
ALTER TABLE `gujarats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `haryanas`
--
ALTER TABLE `haryanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `himachal_pradeshes`
--
ALTER TABLE `himachal_pradeshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jammu_and_kashmirs`
--
ALTER TABLE `jammu_and_kashmirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jharkhands`
--
ALTER TABLE `jharkhands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karnatakas`
--
ALTER TABLE `karnatakas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keralas`
--
ALTER TABLE `keralas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madhya_pradeshes`
--
ALTER TABLE `madhya_pradeshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maharashtras`
--
ALTER TABLE `maharashtras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manipurs`
--
ALTER TABLE `manipurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meghalayas`
--
ALTER TABLE `meghalayas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `odishas`
--
ALTER TABLE `odishas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pondicherries`
--
ALTER TABLE `pondicherries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punjabs`
--
ALTER TABLE `punjabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rajasthans`
--
ALTER TABLE `rajasthans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `school_notices`
--
ALTER TABLE `school_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_previous_events`
--
ALTER TABLE `school_previous_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_upcoming_events`
--
ALTER TABLE `school_upcoming_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_documents`
--
ALTER TABLE `state_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamil_nadus`
--
ALTER TABLE `tamil_nadus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telanganas`
--
ALTER TABLE `telanganas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tripuras`
--
ALTER TABLE `tripuras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uttarakhands`
--
ALTER TABLE `uttarakhands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uttar_pradeshes`
--
ALTER TABLE `uttar_pradeshes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_site_setups`
--
ALTER TABLE `web_site_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `west_bengals`
--
ALTER TABLE `west_bengals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_indias`
--
ALTER TABLE `all_indias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `andhra_pradeshes`
--
ALTER TABLE `andhra_pradeshes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assams`
--
ALTER TABLE `assams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bihars`
--
ALTER TABLE `bihars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chandigarhs`
--
ALTER TABLE `chandigarhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chhattisgarhs`
--
ALTER TABLE `chhattisgarhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gujarats`
--
ALTER TABLE `gujarats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `haryanas`
--
ALTER TABLE `haryanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `himachal_pradeshes`
--
ALTER TABLE `himachal_pradeshes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jammu_and_kashmirs`
--
ALTER TABLE `jammu_and_kashmirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jharkhands`
--
ALTER TABLE `jharkhands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karnatakas`
--
ALTER TABLE `karnatakas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keralas`
--
ALTER TABLE `keralas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `madhya_pradeshes`
--
ALTER TABLE `madhya_pradeshes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maharashtras`
--
ALTER TABLE `maharashtras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manipurs`
--
ALTER TABLE `manipurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meghalayas`
--
ALTER TABLE `meghalayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `odishas`
--
ALTER TABLE `odishas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pondicherries`
--
ALTER TABLE `pondicherries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `punjabs`
--
ALTER TABLE `punjabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rajasthans`
--
ALTER TABLE `rajasthans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_notices`
--
ALTER TABLE `school_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_previous_events`
--
ALTER TABLE `school_previous_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_upcoming_events`
--
ALTER TABLE `school_upcoming_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state_documents`
--
ALTER TABLE `state_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tamil_nadus`
--
ALTER TABLE `tamil_nadus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telanganas`
--
ALTER TABLE `telanganas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tripuras`
--
ALTER TABLE `tripuras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uttarakhands`
--
ALTER TABLE `uttarakhands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uttar_pradeshes`
--
ALTER TABLE `uttar_pradeshes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_site_setups`
--
ALTER TABLE `web_site_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `west_bengals`
--
ALTER TABLE `west_bengals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
