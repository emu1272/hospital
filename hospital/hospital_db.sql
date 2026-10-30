-- =============================================
-- Minilik Hospital Management System Database
-- Run this file in phpMyAdmin or MySQL CLI
-- =============================================

CREATE DATABASE IF NOT EXISTS hospital_db;
USE hospital_db;

-- Doctors table
CREATE TABLE IF NOT EXISTS doctors (
    id             INT AUTO_INCREMENT PRIMARY KEY,
    doctor_id      VARCHAR(20)  NOT NULL UNIQUE,
    doctor_name    VARCHAR(100) NOT NULL,
    age            INT,
    gender         VARCHAR(10),
    specialization VARCHAR(100),
    phone          VARCHAR(20),
    created_at     TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Patients table
CREATE TABLE IF NOT EXISTS patients (
    id             INT AUTO_INCREMENT PRIMARY KEY,
    patient_id     VARCHAR(20)  NOT NULL UNIQUE,
    patient_name   VARCHAR(100) NOT NULL,
    age            INT,
    gender         VARCHAR(10),
    insurance      VARCHAR(100),
    admission_date DATE,
    checkout_date  DATE,
    created_at     TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Medical Tests table
CREATE TABLE IF NOT EXISTS medical_tests (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    test_id     VARCHAR(20)  NOT NULL UNIQUE,
    test_name   VARCHAR(100) NOT NULL,
    test_date   DATE,
    test_time   TIME,
    test_result TEXT,
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
