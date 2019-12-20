
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container">
        <h2>Пожалуйста Введите Свои Данные</h2>
        <form action="other.php" method="POST" > 
            <div class="input-field">
                <input type="text" name="settings_name" required="">
                <label>Ваше Полное Имя</label>

                
                <span></span>
            </div>
        
            <div class="input-field">
                <input type="text" name="settings_mail" required="">
                <label>Электронный Адрес</label>
                <span></span>
            </div>
            <input type="submit" value="Показать Результат" name="insert" class="btn">
        </form>
    </div>
</body>

</html>