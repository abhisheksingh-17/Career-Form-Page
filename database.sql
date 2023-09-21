-- Create a database named 'form' (if it doesn't already exist)
CREATE DATABASE IF NOT EXISTS form;

-- Use the 'form' database
USE form;

-- Create a table to store job applications
CREATE TABLE IF NOT EXISTS application (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    FName VARCHAR(255) NOT NULL,
    LName VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Contact VARCHAR(10) NOT NULL,
    Gender VARCHAR(20) NOT NULL,
    Graduation DATE NOT NULL,
    Skill VARCHAR(255) NOT NULL,
    LinkedIn VARCHAR(255) NOT NULL,
    Experience VARCHAR(20) NOT NULL,
    Employer VARCHAR(255) NOT NULL,
    CTC VARCHAR(20) NOT NULL,
    Notice VARCHAR(20) NOT NULL,
    Role VARCHAR(255) NOT NULL,
    Medium VARCHAR(255) NOT NULL,
    Address TEXT NOT NULL,
    CV VARCHAR(255) NOT NULL
);
