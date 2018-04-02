-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 13, 2012 at 03:58 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `evoting`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `governorship_votes`
-- 

CREATE TABLE `governorship_votes` (
  `cand_name` varchar(22) NOT NULL,
  `party` varchar(22) NOT NULL,
  `gov_count` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `governorship_votes`
-- 

INSERT INTO `governorship_votes` (`cand_name`, `party`, `gov_count`) VALUES 
('PHARM. KUFRE EKPO M. ', 'ANPP', '6'),
('REV. DR JOHN DUKE', 'PDP', '2'),
('ALAHJI MUSA SHOLA', 'ACN', '2');

-- --------------------------------------------------------

-- 
-- Table structure for table `presidential_votes`
-- 

CREATE TABLE `presidential_votes` (
  `cand_name` varchar(29) NOT NULL,
  `party` varchar(6) NOT NULL,
  `pres_count` varchar(19) NOT NULL,
  `vote_date` timestamp NOT NULL default CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `presidential_votes`
-- 

INSERT INTO `presidential_votes` (`cand_name`, `party`, `pres_count`, `vote_date`) VALUES 
('DECONESS SALOME SEUN (JP.) ', 'ACN', '19', '0000-00-00 00:00:00'),
('MRS CYNTHIA ALABA ', 'ANPP', '34', '0000-00-00 00:00:00'),
('PROF. ELIJAH AMINU', 'PDP', '14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `voter`
-- 

CREATE TABLE `voter` (
  `firstname` varchar(19) NOT NULL,
  `lastname` varchar(19) NOT NULL,
  `sex` varchar(5) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(23) NOT NULL,
  `lga` varchar(19) NOT NULL,
  `state` varchar(19) NOT NULL,
  `country` varchar(19) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `email` varchar(19) NOT NULL,
  `election_district` varchar(18) NOT NULL,
  `occupation` varchar(19) NOT NULL,
  `username` varchar(22) NOT NULL,
  `election_id` varchar(22) NOT NULL,
  PRIMARY KEY  (`election_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `voter`
-- 

INSERT INTO `voter` (`firstname`, `lastname`, `sex`, `age`, `address`, `lga`, `state`, `country`, `phone`, `email`, `election_district`, `occupation`, `username`, `election_id`) VALUES 
('IDARA', 'UKANA', 'Femal', '24', '14 EBONG UMOITONG STR.', 'UYO', 'AKWA IBOM', 'NIGERIA', '08067361023', 'WALTERJNR1@YAHOO.CO', 'WARD 3', 'NURSE', 'idara', '340');
