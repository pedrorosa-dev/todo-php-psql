<?php
require_once ('database/conn.php');

$tasks = [];

$sql = $pdo->query("SELECT * FROM task ORDER BY id ASC");

if ($sql->rowCount() > 0) {
  $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/icons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/icons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/icons/favicon-16x16.png" />
  <link rel="stylesheet" href="./assets/styles/styles.css" />
  <link rel="stylesheet" href="./assets/styles/navbar.css" />
  <link rel="stylesheet" href="./assets/styles/home.css" />
  <link rel="stylesheet" href="./assets/styles/footer.css" />
  <link rel="stylesheet" href="./assets/styles/tasks.css" />
  <script src="./assets/src/script.js" defer></script>
  <title>ToDoTasks</title>
</head>

<body>
  <header class="navegate-bar">
    <h1 class="logo"><span class="todo">T</span>T</h1>
    <ul class="navbar-container">
      <li class="navbar-content">
        <a href="#" class="items-menu"> <i class="fa-solid fa-plus"></i></a>
      </li>
      <li class="navbar-content">
        <a href="#" class="items-menu"><i class="fa-solid fa-magnifying-glass"></i></a>
      </li>
      <li class="navbar-content">
        <a href="#" class="profile items-menu"><i class="fa-solid fa-user"></i></a>
      </li>
    </ul>
  </header>
  <section class="home-screen">
    <div class="container-home">
      <div class="text-home">
        <div class="title-home"><span class="todo-home">ToDo</span>Tasks</div>
        <div class="text-principal-home">
          Write your tasks in a <span class="simples">simple way</span>
        </div>
        <div class="text-secondary-home">Fast, effective e functional</div>
      </div>
    </div>
    <div id="to-do">
      <h3>Write yours tasks</h3>
      <form action="./actions/create.php" method="post" class="to-do-form">
        <input type="text" name="description" id="description" placeholder="Write your task here" required />
        <button type="submit" class="form-button">
          <i class="fa-solid fa-plus"></i>
        </button>
      </form>
      <div id="tasks">
        <?php foreach ($tasks as $task): ?>
        <div class="task">
          <input type="checkbox" name="progress" data-task-id="<?= $task['id'] ?>" class="progress
          <?= $task['completed'] ? 'done' : '' ?>" <?= $task['completed'] ? 'checked' : '' ?> />
          <p class=" task-description">
            <?= $task['description'] ?>
          </p>
          <div class="task-actions">
            <a href="" class="action-button edit-button">
              <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <a href="./actions/delete.php?id=<?= $task['id'] ?>" class="action-button delete-button">
              <i class="fa-solid fa-trash-can"></i>
            </a>
          </div>
          <form action="./actions/update.php" method="post" class="to-do-form edit-task hidden">
            <input type="text" name="id" id="id" class="hidden" value="<?= $task['id'] ?>">
            <input type="text" name="description" id="description" placeholder="Edit your task here"
              value="<?= $task['description'] ?>" />
            <button type=" submit" class="form-button confirm-button">
              <i class="fa-solid fa-check"></i>
            </button>
          </form>
        </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <footer class="container-footer">
    <div class="container-footer-menu">
      <div class="logo-footer"><span class="todo-footer">T</span>T</div>
      <div class="container-creator">
        <span class="title-footer">Creator</span>
        <p class="distancia">
          <a href="https://www.linkedin.com/in/devpedrorosa/" class="items-footer" target="_blank">Pedro Rosa</a>
        </p>
        <p class="distancia">
          <a href="https://github.com/pedrorosa-dev" class="items-footer" target="_blank">GitHub</a>
        </p>
      </div>
      <div class="contact-container">
        <div class="contact-content">
          <span class="title-footer">More Projects</span>
          <p class="distancia">
            <a href="https://github.com/pedrorosa-dev/rosa-nvim" class="items-footer" target="_blank">Rosa Nvim</a>
          </p>
          <p class="distancia">
            <a href="https://github.com/pedrorosa-dev/bmi-web" class="items-footer" target="_blank">Bmi-web</a>
          </p>
        </div>
      </div>
      <div class="contact-container">
        <div class="contact-content">
          <span class="title-footer">Contact</span>
          <p class="distancia">
            <a href="#" class="items-footer">devpedrorosa@gmail.com</a>
          </p>
          <p class="distancia">
            <a href="#" class="items-footer">+55 9 9999-9999</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <div class="direitos">Created in <span class="ano"> 2024</span></div>
</body>

</html>