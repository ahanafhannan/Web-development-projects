# **Web Development Project Portfolio**

Welcome to a collection of my web development projects! These projects were built from scratch using **PHP for the backend** (the logic behind the scenes) and **HTML & CSS for the frontend** (what you see and interact with). I focused on core programming skills here, so you won't find any specific frameworks used.

## **Projects Overview**

Let's take a look at what each project does:

### 1. **HotelMoon (CSE370 Project)**

This project is a web application designed to handle hotel management and bookings, created as part of the CSE370 course.

* **Technologies Used:** *PHP (Backend), HTML, CSS (Frontend), MySQL (Database managed with XAMPP/phpMyAdmin)*
* **Key Features:**
    * **User Side:** Users can *browse different room types, make new bookings* with personal details and a calendar, and *view or cancel their existing reservations* from their account.
    * **Admin Side:** Administrators have the ability to *create new room listings, adjust room prices, manage and assign existing bookings, and cancel reservations*.

### 2. **Online-Study-Platform (CSE470 Project)**

Developed for the CSE470 course, this project is an online learning platform connecting students, teachers, and administrative users.

* **Technologies Used:** *PHP (Backend), HTML, CSS (Frontend), MySQL (Database managed with XAMPP/phpMyAdmin)*
* **Key Features:**
    * **For Students:** Students can *register, enroll in available classes, access lecture links*, and *participate in various assessments* including multiple-choice quizzes and short answer questions.
    * **For Teachers:** Teachers can *register, view enrolled student information, create quizzes* (with options for automatic grading by pre-selecting correct answers), and *publish new video lectures*. Short answers require manual review by teachers to publish marks.
    * **For Admins:** Administrators hold *comprehensive control*, including *creating classes, assigning teachers, and managing all system data* from the backend. Admins can also perform all teacher functionalities, such as quiz creation and management.

### 3. **Petcare System (CSE471 Project)**

This project functions as an e-commerce platform offering products and services tailored for pet owners, developed during the CSE471 course.

* **Technologies Used:** *PHP (Backend), HTML, CSS (Frontend), MySQL (Database managed with XAMPP/phpMyAdmin)*
* **Key Features:**
    * **For Users:** Users can *browse and purchase pet food and supplements* for dogs and cats. They can also *book various pet services* (like grooming) by filling out forms and adding items to a shopping cart. A dedicated section allows users to *book appointments with veterinarians*.
    * **For Admins:** Administrators can *manage product inventory, add new services, modify or cancel bookings*, and *manage doctor profiles* (adding new doctors and editing their information).

## **Technical Setup & Running Projects Locally**

Since these projects are not deployed online, here’s how you can get them running on your local machine using **XAMPP**:

1.  **Clone the Repository:**
    ```bash
    git clone [Your GitHub Repository URL]
    ```
2.  **Install XAMPP:** If you don't have it already, *download and install XAMPP*. This will provide you with an Apache web server, PHP, and MySQL.
3.  **Place Project Files:** Copy each project folder (e.g., `HotelMoon`, `Online-Study-Platform`, `Petcare System`) into the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\`).
4.  **Database Setup with phpMyAdmin:**
    * Start Apache and MySQL modules from the XAMPP control panel.
    * Open your web browser and go to `http://localhost/phpmyadmin`.
    * For each project, you'll typically find a `.sql` file within its folder. *Create a new database* in phpMyAdmin (e.g., `hotelmoon_db`, `online_study_db`, `petcare_db`) and *import the corresponding `.sql` file* into it.
    * **Important:** You'll need to *update the database connection details* (like database name, username, password) in each project's PHP configuration files. Look for files named `config.php` or `db_connect.php` within each project folder and adjust them to match your local MySQL setup (e.g., default username 'root`, no password).
5.  **Access Projects:** Open your web browser and navigate to `http://localhost/[project_folder_name]` (for example, `http://localhost/HotelMoon`) to view each project.

## **Connect**

If you have any questions or would like to connect regarding these projects, feel free to reach out via my GitHub profile.

* **GitHub Profile:** [Link to your GitHub profile]
