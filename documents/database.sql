-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jan 10, 2017 at 01:54 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `scenario3`
--

-- --------------------------------------------------------

--
-- Table structure for table `snippets`
--

CREATE TABLE `snippets` (
  `snippet` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
