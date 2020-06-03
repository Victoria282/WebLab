<style type="text/css">
    .backgr {
        position: fixed;
        background: rgba(0,0,0,.7);
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 99;
    }
</style>
<div class="block"> 
    <div class="backgr">  </div>
    <div class="row  d-flex justify-content-center" id = "window" style="background-color:red; ">
        <div class="col-lg-6 col-md-6 col-sm-12" style="text-align:center;position:absolute; top:40%; background-color: white;padding: 4% 4% 4% 4%;z-index:1000">
                <img src="images/sign.jpg" style="max-width:10%">
            <?php
                $name = $_GET['name'];
                $email = $_GET['email'];
                $header = "Заявка с сайта weblab";
                $message = $_GET['message'];
                // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме 
                $mes = "Пользователь заполнил форму на сайте weblab:\n\nИмя: $name \nE-mail: $email \nТема: $header \nТекст сообщения: $message";
                // Пытаемся отправить письмо по заданному адресу
                // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
                $send = mail ("vilkova_viktoria2000@mail.ru",$header,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
                // Если отправка прошла успешно — так и пишем
                if ($send == 'true')
                {
                    echo "<h2>Ваши данные успешно<br/> отправлены!</h2>";
                }
                else {
                    echo "<h2>Ой, что-то пошло не так..</h2>";
                }
            ?>    	   
            <button id = "hider" onclick='location.href = "Form.html"' style="padding:1% 6% 1% 6%; margin-top: 6%"> ок </button>
        </div>
    </div>  
</div>
 