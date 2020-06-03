<!DOCTYPE HTML>
 <html lang = "en">
  <head>
    <!-- Required meta tags -->
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" href = "action.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> WebLab </title>
  </head>
  <body>
      <!--Navbar-->
      <div class = "header"> 
          <nav class = "navbar-fixed-top" style="background-color:white; padding:10px 0 10px 0">
              <div class="container"> 
           <!-- Navbar brand -->
                <a class = "navbar-brand" href = "index.html">
                    <img src = "images/logo.png">
                </a>
           <!-- Collapse button -->
                <button style = "float:right" class = "navbar-toggler toggler-example" type="button" data-toggle ="collapse" data-target = "#navbarSupportedContent1"
                    aria-controls = "navbarSupportedContent1" aria-expanded = "false" aria-label = "Toggle navigation">
                    <img src = "images/Burger_menu.png">
                </button> 
           <!-- Collapsible content -->
                <div class = "collapse navbar-collapse" id = "navbarSupportedContent1">
                    <!-- Links -->
                        <ul class = "navbar-nav mr-auto menu-list">
                            <li class = "nav-item">
                                <a class = "menu_item" href = "About.html"> О нас </a>
                            </li>
                            <li class = "nav-item">
                                <a class = "menu_item" href = "portfolio.html">Портфолио</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "menu_item" href = "Services.html">Услуги</a>
                            </li>
                            <li class = "nav-item">
                                <a class = "menu_item" href = "Contacts.html">Контакты</a>
                            </li>
                        </ul>
                    <p> 454112, Челябинск, <br/> ул. Комсомольский проспект, 33Д, оф. 16 </p>
                    <a href="tel:+73517502048" style="color: #292929;">+7 351 750-20-48</a><br/>
                    <a href = "#" style = "background-color: #B5B5B5; color: #525050;"> info@weblab74.ru </a> 
                </div>        
            </div>
            <!-- Collapsible content -->
        </nav>
        <!--end of navbar-->
    </div>
<div class="container" style="margin-top:15%;z-index:1000;background-color:yellow">    
  <div class="row d-flex justify-content-center" > 
      <div class="col-lg-6 col-md-6 col-sm-4" style="position: absolute;z-index:1000"> 
        <div class="window"> 
            <?php
                echo "<div class='row justify-content-center'>
                        <div class='col-lg-6' style='text-align:center; background-color:red'> 
                            <img src='images/sign.jpg' style='max-width:20%'> 
                        </div>
                     </div>";
            // Получаем значения переменных из пришедших данных
                $name = $_POST['name'];
                $email = $_POST['email'];
                $header = "Заявка с сайта weblab";
                $message = $_POST['message'];
                // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме 
                $mes = "Пользователь заполнил форму на сайте weblab:\n\nИмя: $name \nE-mail: $email \nТема: $header \nТекст сообщения: $message";
                // Пытаемся отправить письмо по заданному адресу
                // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
                $send = mail ("vilkova_viktoria2000@mail.ru",$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
                // Если отправка прошла успешно — так и пишем
                if ($send == 'true')
                {
                    echo "<div class='row justify-content-center'>
                        <div class='col-lg-12 col-md-6 col-sm-6' style='text-align:center; background-color:green'> 
                            <h1 style = 'text-align:center;'>Ваши данные успешно отправлены!</h1>
                        </div>
                     </div>";
                    
                     
                }
                // Если письмо не ушло — выводим сообщение об ошибке
                else 
                {
                    echo "<h1>Ой, что-то пошло не так..</h1>";
                        
                }
            ?>
        </div>
    </div>
 </div>
</div>
<div class = "backgr" style = "position: fixed;
    background: rgba(0,0,0,.7);
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 99;
    "></div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>