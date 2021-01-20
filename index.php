<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Coding-wars</title>
  <script type="text/javascript" href="bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 

<!-- header -->

<div class="row header">

     <div id="logo">
      <div style="color: white;">Здесь будет логотип</div>
      <!-- <img src="logotype.png">-->
    </div> 

    <div class="social_media_icons">
      <nav class="social_media_icons">
        <a href="#"><img src="instagram.png" alt="instagram" class="icon"></a>
        <a href="#"><img src="facebook.png" alt="facebook" class="icon"></a>
        <a href="#"><img src="github.png" alt="github" class="icon"></a>
        <a href="https://t.me/joinchat/I5L55Bh9BiEOOc2MQnxQRw"><img src="telegram.png" alt="telegram" class="icon"></a>
      </nav>
    </div>

  </div>
<div>
<!--header-->

<!-- content -->
  
<div class="about_us">
    
    <div class="descriptions col-md-6"> 
      <h3>Про проект</h3>
      Наш проект не очень обычен. Мы хотим вас научить программированию прямо по дороге на роботу, в школу, к делам и т. д.
     В нашем приложении вы найдете единомышленников, которые также хотят учиться, 
     и много приключений на вашу голову =)<br>
     поэтому скачивайте наше предложение и учитесь кодить...<br>
     <button id="show_window">Дочитать</button> 
    </div>

    <div class="modal_window" id="if_progect_modal_window"><div class="exit" id="show_window1">&#215</div>
     <h3>Продолжение описания нашего проекта</h3> Lorem ipsum dolor sit amet, 
    </div>

<script>
  let content = document.getElementById("if_progect_modal_window")
  let show = document.getElementById("show_window")
  let show1 = document.getElementById("show_window1")

  show.addEventListener("click", () => {
    if (content.style.display === "block") {
      content.style.display = "none"
    } else {
      content.style.display = "block"
    } } )

  show1.addEventListener("click", ()=> {
    if (content.style.display) {
      if (content.style.display === "block") {
      content.style.display = "none"
    } else {
      content.style.display = "block"
    }}
  }) 
</script>

  <div class="logine col-md-6">
      <form action="check.php" method="post">
          <h2>Log In or Registration</h2>
          <h5>Войти или Зарегестрироваться</h5>
          <input type="text" name="login" placeholder="Логин"><br>
          <input type="text" name="name" placeholder="Имя"><br>
          <input type="password" name="pass" placeholder="Секретный код"><br>
          <input type="button" class="Log_in btn-success" id="open_entrance" value ="Войти">
          <input type="submit" class="Registration btn-success" value="Зарегестрироваться">
      </form>
    </div>
            <div class="modal_window logine" id="entrance">
              <div class="exit" id="show_entrance">&#215</div>
              <form action="auth.php" method="post">
          <h2>Log In</h2>
          <h5>Войти</h5>
          <input type="text" name="login" placeholder="Логин"><br>
          <input type="password" name="pass" placeholder="Секретный код"><br>
          <input type="submit" class="Log_in btn-success" value ="Войти">
      </form>
            </div>
<script>
  let entrance = document.getElementById("entrance")
  let open_entrance = document.getElementById("open_entrance")
  let show_entrance = document.getElementById("show_entrance")

  open_entrance.addEventListener("click", () => {
    if (entrance.style.display === "block") {
      entrance.style.display = "none"
    } else {
      entrance.style.display = "block"
    } } )

  show_entrance.addEventListener("click", ()=> {   
      if (entrance.style.display === "block") {
      entrance.style.display = "none"
    } else {
      entrance.style.display = "block"
    }}
  ) 
</script>

  </div>
</div>

    <div class="between">
      <p class="razdel">
        <span class="razdel2">
        Новости нашего проекта
        </span>
      </p>
    </div>

<div class="clearfix"></div>

    

<div class="news">

  <div class="img container">
    <image class="img_new" src="storefront-bundle-hero.png">
  </div>

  <div class="text col-sm-7">
      <div class="data-new">Дата публикации: 12.01.2021</div><br>
      <div class="excerpt-new">Это тут будет новость. сегодня Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat ... </div><br>
      <div class="autor-new">Автор: Ячuтоли</div><br>
     <button id="see_new_12_01_2021">Посмотреть</button> 
      </div>

      <div class="modal_window" id="totally_new_12_01_2021"><div class="exit" id="show_window2">&#215</div>
     <h3>Продолжение Новостьи 12.01.2021 </h3>
      <p>Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости  Продолжение новости </p>
    </div>

<script>
  let content1 = document.getElementById("totally_new_12_01_2021")
  let show2 = document.getElementById("see_new_12_01_2021")

  show2.addEventListener("click", () => {
      if (content1.style.display === "block") {
      content1.style.display = "none"
    } else {
      content1.style.display = "block"
    }}
  )
  let show3 = document.getElementById("show_window2")
 show3.addEventListener("click", ()=> {
    if (content1.style.display) {
      if (content1.style.display === "block") {
      content1.style.display = "none"
    } else {
      content1.style.display = "block"
    }}
  })
</script>

</div>
<div class="news">

  <div class="img container">
    <image class="img_new" src="storefront-bundle-hero.png">
  </div>

  <div class="text col-sm-7">
      <div class="data-new">Дата публикации: 15.01.2021</div><br>
      <div class="excerpt-new">Это тут будет новость. сегодня Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat ...
      </div><br>
      <div class="autor-new">Автор: Ячuтоли</div><br>
      <button id="see_new_15_01_2021">Посмотреть</button>
  </div> 

  <div class="modal_window" id="totally_new_15_01_2021">
    <div class="exit" id="show_window3">&#215</div>
     <h3>Продолжение Новостьи 12.01.2021 </h3>
      <p>Продолжение новости  gjkexbkjcm dhjlt </p>
    </div>

    <script>
      let content2 = document.getElementById("totally_new_15_01_2021")
      let show4 = document.getElementById("see_new_15_01_2021")

      show4.addEventListener("click", () => {
        if (content2.style.display === "block") {
          content2.style.display = "none"
        } else {
          content2.style.display = "block"
        }
      })
      let show5 = document.getElementById("show_window3")
     show5.addEventListener("click", ()=> {
        if (content2.style.display) {
          if (content2.style.display === "block") {
          content2.style.display = "none"
        } else {
          content2.style.display = "block"
        }}
      })
    </script>
</div>

<!-- /content -->

<div class="download"></div>

<!--footer-->
<footer class="footer">
    
    <div class="footer__inner">
      
      <div class="footer__info">© 2020 Все Права Защищены</div>

      <nav class="footer__links">
        
        <a href="#privacy_policy" class="footer__link">Политика Конфиденциальности</a>
        <a href="#terms_of_use" class="footer__link">Условия Пользования</a>

      </nav>
    </div>
  </footer>

</body>
</html>