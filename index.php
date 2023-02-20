<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Telegram</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="css/detect.js"></script>

    <meta property="al:ios:app_store_id" content="686449807">
    <meta property="al:ios:app_name" content="Telegram Messenger">
    <meta property="al:ios:url" content="tg://join?invite=3ACvvJnbD71iNWUy">

    <meta property="al:android:url" content="tg://join?invite=3ACvvJnbD71iNWUy">
    <meta property="al:android:app_name" content="Telegram">
    <meta property="al:android:package" content="org.telegram.messenger">

    <meta name="apple-itunes-app" content="app-id=686449807, app-argument: tg://join?invite=3ACvvJnbD71iNWUy">
	
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '<?=$_GET['p']?>');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?=$_GET['p']?>&ev=Lead&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

  </head>

<style>
.header{padding: 10px;}
.avatar{width: 110px;height: 110px;border-radius: 61px;}
h1{font-size: 30px;margin-top: 10px;font-weight: 900;}
.lead{max-width: 340px;margin: 0px auto 20px auto;font-size: 19px;font-weight: 500;}
.jumbotron{padding: 20px 10px 10px 10px;}
</style>

  <body>

<!--

  Функционал:
  - 2 кнопки - открыть телеграм и скачать телеграм
  - Ссылка на скачивание динамичная в зависимости от ОС, чтобы не было лишних кликов
  - Ссылка на скачивание открывается в новой вкладке
  - При клике на открыть телеграм срабатывает событие в метрику и в ФБ
  - При клике на скачать телеграм срабатывает событие в метрику (для анализа)
  - Можно задавать кастомный текст и аватарку

  Что заменить:
  - Аватарка
  - Название
  - Описание
  - Deeplink на канал

  - Пиксель ФБ
  - Событие на синюю кнопку
  - Метрика
  - Цели метрики на 2 кнопки
  
  - Если ваш канал с ссылкой приглашения, то она должна выглядеть следующим образом: tg://join?invite=AAAAAFGSLJ-U-
  - Если вам нужна ссылка просто на Telegram домен, то ссылка вида: tg://resolve?domain=piratecpa
  
 


-->

  <div class="header">
    <img src="img/LogoBig_1x.png" alt="">
  </div>
  
      <section class="jumbotron text-center">
        <div class="container">
          <img class="avatar" src="img/piratecpa.jpg">
          <!-- Заголовок канала -->
          <h1 class="jumbotron-heading">Темщик.KZ</h1>
          <!-- Описание, укажите здесь то, что замотивирует человека подписаться -->
          <p style="display:block" class="lead text-muted">❌Проиграл 15.000.000 ₸ и отыгрался❌</p>
          <p style="display:block" class="lead text-muted">🎰Делюсь опытом и обзорами🎰</p>
          <p style="display:block" class="lead text-muted">☑️Разоблачаю схемщиков и капперов☑️</p>
          <p style="display:block" class="lead text-muted">Подписывайся, тут весело👇</p>
          <p>
            <a href="tg://join?invite=3ACvvJnbD71iNWUy" class="btn btn-primary my-2">
              Telegram
            </a>
          </p>
        </div>
      </section>


<script type="text/javascript">
  var user = detect.parse(navigator.userAgent);
  dlink = "https://telegram.org/";
  if (user.os.family == "iOS") {dlink = 'https://itunes.apple.com/ru/app/telegram-messenger/id686449807?mt=8'}             
  if (user.os.family == "Android") {dlink = 'market://details?id=org.telegram.messenger'}
  document.getElementById("dlink").setAttribute("href", dlink);
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
  $(function() {
    $('.btn-primary').on('click', function() {
      fbq('track', 'Lead');
    });
  });
</script>

  </body>
</html>