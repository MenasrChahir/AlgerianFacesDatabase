# AlgerianFacesDatabase

This repository contains the source code for a web application designed for collecting and preparing image data to construct a database of Algerian faces. The project serves as a platform for users to upload their facial images with associated metadata, such as age, gender, and expressions, which are then validated by experts and administrators. This database aims to support research in facial recognition, expression analysis, and other computer vision applications.

# Features

User Interface: Allows users to register, upload facial images, and provide associated metadata.
Expert Interface: Enables experts to validate and annotate uploaded images.
Admin Panel: Provides administrators with tools to manage users, experts, and images effectively.
Database Management: Stores validated facial data for further research.
Installation Instructions

# Requirements

Ensure you have the following installed:

PHP (>= 7.4)
MySQL
Apache (or any equivalent web server)
Composer (optional, for dependency management)
# Steps
# Clone this repository:

git clone https://github.com/MenasrChahir/AlgerianFacesDatabase.git

cd AlgerianFacesDatabase

# Start a local PHP server:

php -S localhost:8000
Create and configure the MySQL database:

Import the database schema from the schema.sql file.
Update the database credentials in the config.php file.

# Access the application in your web browser:

http://localhost:8000
Usage
Roles
User:

Register and log in.
Upload images or capture images via webcam.
Annotate metadata like age, gender, and expressions.
Expert:

Review and validate user-uploaded images.
Provide ratings or feedback on images.
Administrator:

Manage user and expert accounts.
Approve or reject uploaded images.
Assign images to experts for validation.

Contributions are welcome! Please follow these steps:

Fork this repository.
Create a new branch (git checkout -b feature-name).
Commit your changes (git commit -m 'Add a new feature').
Push to your branch (git push origin feature-name).
Open a pull request.
