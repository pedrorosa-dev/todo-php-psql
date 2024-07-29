<img src="/assets/images/homeScreen.png" alt="home screen" width="">

# Todo Task Application

This is a Todo Task application developed using HTML, JS, CSS, PHP, and PostgreSQL. It allows users to efficiently manage their tasks.

## IMPORTANT: ONLY DESKTOP

## Requirements

To run this project, you will need to have the following software installed:

- Node.js
- PHP 7 or higher
- PostgreSQL 16

#### **Note**: I used the [Font Awesome](https://fontawesome.com/) for icons

## Installation

### Step 1: Clone the repository

```bash
git clone https://github.com/pedrorosa-dev/todo-php-psql
```

### Step 2: Start the PHP server

```bash
php -S localhost:8000
```

#### **Note**: You can use [XAMPP](https://www.apachefriends.org/pt_br/index.html) if preferred.

### Step 3: Connect to the database

##### Update the conn.php file with your database credentials to establish a connection.

- First, create a conn.php file in the database folder with your database credentials.
- To make it easier, you can use the conn-example.php file as a template. It should look like this:

```bash
<?php
$host = '#';
$dbname = '#';
$user = '#';
$password = '#';

try {
  $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
  echo "Error" . $e->getMessage();
}
?>
```

- Copy the example file:

- In your terminal or file explorer, navigate to the database folder.
- Copy the conn-example.php file and rename it to conn.php.

## Project Structure

- `index.php`: Main page of the application.
- `style.css`: CSS stylesheet.
- `script.js`: jQuery script for DOM manipulation.
- `conn.php`: Database connection configuration file.
- `./actions`: PHP file for managing CRUD operations with the database.

## Features

- Add new tasks.
- View all tasks.
- Edit existing tasks.
- Mark tasks as completed.
- Delete tasks.

## Technologies Used

- HTML
- CSS
- JS
- PHP
- PostgreSQL

## License

This project is licensed under the [MIT License](LICENSE).
