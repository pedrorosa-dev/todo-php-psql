document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".edit-button").forEach(function (button) {
    button.addEventListener("click", function (event) {
      event.preventDefault(); // Previne o comportamento padrão

      var task = button.closest(".task");
      task.querySelector(".progress").classList.add("hidden");
      task.querySelector(".task-description").classList.add("hidden");
      task.querySelector(".task-actions").classList.add("hidden");
      task.querySelector(".edit-task").classList.remove("hidden");
    });
  });

  document.querySelectorAll(".progress").forEach(function (progress) {
    progress.addEventListener("click", function () {
      if (progress.checked) {
        progress.classList.add("done");
      } else {
        progress.classList.remove("done");
      }
    });

    progress.addEventListener("change", function () {
      const id = progress.getAttribute("data-task-id");
      const completed = progress.checked ? "true" : "false";

      const xhr = new XMLHttpRequest();
      xhr.open("POST", "../../actions/update-progress.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (!response.success) {
              alert("Error editing task");
            }
          } else {
            alert("An error has occurred");
          }
        }
      };
      xhr.send(`id=${id}&completed=${completed}`);
    });
  });
});
