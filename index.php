<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality Performance test</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <main>

        <div class="form-block">
            
                <form class="form-block__form" action="" method="POST">
                    <div class="form-block__title">Связаться с Qupe</div>
                    <input name="username" type="text" placeholder="Имя">
                    <input name="phone" id="phone" type="text" placeholder="+7(000) 000-00-00" required>
                    <input name="email" type="email" placeholder="Email">
                    <input name="sub" type="submit" value="Отправить">
                </form>

        </div>
        <!-- modal -->
        <div class="popup-success">
             <div class="popup-success__text">Данные успешно отправлены</div>
        </div>
        
        </main>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>