# Student Management System

This is a simple web-based Student Management System built using PHP, MySQL, HTML, CSS, and Bootstrap. It allows users to manage student records, including adding, viewing, and updating student information.


## Features

- Add new student records with details such as name, email, age, phone number, course, and 10th-grade percentage.
- View and manage student records in a user-friendly interface.
- Responsive design using Bootstrap for mobile and desktop devices.
- Simple and intuitive UI with a dark theme.

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](https://www.wampserver.com/en/) installed on your machine.
- Basic knowledge of PHP and MySQL.
- First copy this database in your xamp->mysql->data folder for proper functioning or create a table in the command prompt in SQL with this query 
#### Query : 
create database stu_data;
<Press Enter>
use stu_data;
<Press Enter>
CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    stu_name VARCHAR(100) NOT NULL,
    stu_email VARCHAR(100) NOT NULL,
    stu_age INT NOT NULL,
    stu_mob VARCHAR(15) NOT NULL,
    stu_course VARCHAR(50) NOT NULL,
    stu_10_per FLOAT NOT NULL,
    img_link VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
<Press Enter>




