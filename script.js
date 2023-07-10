function submitForm(event) {
    event.preventDefault(); // Предотвращение перезагрузки страницы

    var form = document.getElementById("feedback");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);

    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var resultDiv = document.getElementById("result");
        resultDiv.innerHTML = xhr.responseText;

        // Проверка наличия сообщения об ошибке
        if (!resultDiv.classList.contains("error")) {
          // Скрываем кнопку "Отправить"
          document.getElementById("submitButton").style.display = "none";

          // Показываем кнопку "Перезагрузить"
          document.getElementById("reloadButton").style.display = "inline-block";
        }
      }
    };

    xhr.send(formData);
  }

  function reloadPage() {
    location.reload();
  }