<p align="center"><a href="#" target="_blank"><img src="https://images.vexels.com/media/users/3/224234/isolated/preview/ff7c525c1c3e1bef640644542001e1fd-online-school-logo.png" width="400" alt="School Management System Logo"></a></p>

<p align="center">
<a href="#"><img src="https://img.shields.io/badge/build-passing-brightgreen" alt="Build Status"></a>
<a href="#"><img src="https://img.shields.io/badge/license-MIT-blue" alt="License"></a>
</p>

# School Management System

The **School Management System** is a web-based application designed to simplify and automate the management of schools. It provides an intuitive interface for administrators, teachers, students, and parents to interact with academic records, attendance, grading, and more.

## Features
- **Student Management** – Register, update, and manage student profiles.
- **Teacher Management** – Assign subjects, manage schedules, and track teacher details.
- **Attendance Tracking** – Monitor daily attendance for students and teachers.
- **Grading System** – Record, calculate, and analyze student performance.
- **Parent Portal** – Provide access for parents to monitor their child’s progress.
- **User Authentication** – Secure login for students, teachers, and administrators.
- **Event Management** – Schedule and notify users about school events.

## Technologies Used
- **Backend:** Laravel (PHP Framework)
- **Database:** MySQL
- **Frontend:** Blade Templates (No Bootstrap)
- **Authentication:** Laravel Breeze
- **Server:** Apache (via XAMPP)

## Installation

### Prerequisites
Ensure you have the following installed on your system:
- PHP 8+
- Composer
- MySQL
- XAMPP
- Node.js (Optional for frontend assets)

### Steps to Install

1. **Clone the Repository**
   ```sh
   git clone https://github.com/winnie20-sam/School-management-system.git
   cd School-management-system
   ```

2. **Next step**

3. **Install Dependencies**
   ```sh
   composer install
   ```

4. **Set Up Environment File**
   ```sh
   cp .env.example .env
   ```
   Configure database settings in `.env` file:
   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=school_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Run Migrations**
   ```sh
   php artisan migrate
   ```

6. **Install Laravel Breeze for Authentication**
   ```sh
   composer require laravel/breeze --dev
   php artisan breeze:install
   ```

7. **Serve the Application**
   ```sh
   php artisan serve
   ```
   The system will be available at `http://127.0.0.1:8000`.

## Contribution
We welcome contributions to improve the system. Feel free to fork the repository and submit a pull request.

## License
This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

