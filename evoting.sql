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
-- Database: `voting`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `cm_votes`
-- 

CREATE TABLE `cm_votes` (
  `cand_name` varchar(22) NOT NULL,
  `party` varchar(22) NOT NULL,
  `position` varchar(22) NOT NULL,
  `cm_count` varchar(9) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `cm_votes`
-- 

INSERT INTO `cm_votes` (`cand_name`, `party`,`position` ,`cm_count`) VALUES 
('Yogi Adityanath ', 'BJP','CM', '6'),
('Dr.Manmohan Singh', 'CONGRESS','CM', '2'),
('Manish Sisodia', 'AAP','CM', '2');

-- --------------------------------------------------------

-- 
-- Table structure for table `pm_votes`
-- 

CREATE TABLE `pm_votes` (
  `cand_name` varchar(29) NOT NULL,
  `party` varchar(10) NOT NULL,
  `position` varchar(22) NOT NULL,
  `pm_count` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `pm_votes`
-- 

INSERT INTO `pm_votes` (`cand_name`, `party`,`position`, `pm_count`) VALUES 
('Narendra Modi ', 'BJP','PM', '19'),
('Rahul Gandhi', 'CONGRESS','PM', '34'),
('Arvind Kejriwal', 'AAP','PM', '14');

-- --------------------------------------------------------
-- 
-- Table structure for table `mla_votes`
-- 

CREATE TABLE `mla_votes` (
  `cand_name` varchar(29) NOT NULL,
  `party` varchar(10) NOT NULL,
  `position` varchar(22) NOT NULL,
  `mla_count` varchar(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `mla_votes`
-- 

INSERT INTO `mla_votes` (`cand_name`, `party`,`position`, `mla_count`) VALUES 
('Amit Shah ', 'BJP','MLA', '19'),
('Ghulam Nabi Azad', 'CONGRESS','MLA', '34'),
('Dr. Kumar Vishwas', 'AAP','MLA', '14');

-- --------------------------------------------------------

-- 
-- Table structure for table `voter`
-- 

CREATE TABLE `voter` (
  `firstname` varchar(19) NOT NULL,
  `lastname` varchar(19) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(23) NOT NULL,
  `city` varchar(19) NOT NULL,
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

INSERT INTO `voter` (`firstname`, `lastname`, `sex`, `age`, `address`, `city`, `state`, `country`, `phone`, `email`, `election_district`, `occupation`, `username`, `election_id`) VALUES 
('paramjeet', 'kaur', 'Female', '22', 'Kulwant colony,patiala', 'patiala', 'punjab', 'india', '08067361023', 'param11@Ggmail.com', 'WARD 3', 'Engg.', 'param', '340');
-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` ( `username`, `password`) VALUES 
('admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `candidate`
-- 

CREATE TABLE `candidate` (
  `firstname` varchar(19) NOT NULL,
  `lastname` varchar(19) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(23) NOT NULL,
  `city` varchar(19) NOT NULL,
  `state` varchar(19) NOT NULL,
  `country` varchar(19) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `email` varchar(19) NOT NULL,
  `occupation` varchar(19) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,  
  `position` varchar(6) NOT NULL, 
  `party` varchar(10) NOT NULL,
    PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `candidate`
-- 

INSERT INTO `candidate` (`firstname`, `lastname`, `sex`, `age`, `address`, `city`, `state`, `country`, `phone`, `email`,`occupation`, `username`, `password`,`position`,`party`) VALUES 
('mohandeep', 'bawa', 'male', '20', 'vill.shamla', 'nabha', 'punjab', 'india', '8872812145', 'mohan11@Ggmail.com', 'Engg.', 'mohan', 'mohan123','PM','CONGRESS');

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `name` varchar(19) NOT NULL,
  `mobile` varchar(18) NOT NULL,
  `email` varchar(19) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `candidate`
-- 

INSERT INTO `contact` (`name`, `mobile`, `email`,`message`) VALUES 
('mohandeep', '8872812145', 'mohan11@Ggmail.com', 'Hlo');