# Todo Task Application

This is a Todo Task application developed using HTML, jQuery, CSS, PHP, and PostgreSQL. It allows users to efficiently manage their tasks.

## Requirements

To run this project, you will need to have the following software installed:

- Node.js
- PHP 7 or higher
- PostgreSQL 16

#### **Note**: I used the font awesome for icons

## Installation

### Step 1: Clone the repository

```bash
git clone https://github.com/pedrorosa-dev/todo-php-psql
```

### Step 2: Start the PHP server

```bash
php -S localhost:8000
```

#### **Note**: You can use XAMPP if preferred.

### Step 3: Connect to the database

##### Update the conn.php file with your database credentials to establish a connection.

```bash
<?php
$host = 'localhost';
$dbname = 'todotaskdb';
$user = 'postgres';
$password = 'your-password';
?>
```

## Project Structure

- `index.html`: Main page of the application.
- `style.css`: CSS stylesheet.
- `script.js`: jQuery script for DOM manipulation.
- `conn.php`: Database connection configuration file.
- `tasks.php`: PHP file for managing CRUD operations with the database.

## Features

- Add new tasks.
- View all tasks.
- Edit existing tasks.
- Mark tasks as completed.
- Delete tasks.

## Technologies Used

- HTML
- CSS
- jQuery
- PHP
- PostgreSQL

## License

This project is licensed under the [MIT License](LICENSE).
