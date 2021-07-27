<?php require('onepage.php') ?> 
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=1170">
    <link rel="stylesheet" href="files/w/wow-bra/wow-bra.leadvertex.info/files/css/main.css">
    <link rel="stylesheet" type="text/css" href="css/form.min.css" />
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<title>WowBra - бесшовный бюстгальтер </title>
    <link rel="icon" href="files/w/wow-bra/wow-bra.leadvertex.info/files/img/fav.ico" type="image/vnd.microsoft.icon">
  </head>
  <body>

    <header>
      <div class="header__first-line">
        <div class="first-line__cont">
          <div class="header__logo"><a href="#"><img src="files/w/wow-bra/wow-bra.leadvertex.info/files/img/logo-1.png" alt="">
              <p>Бесшовный бюстгальтер</p></a></div>
          <p class="header__features"><b>24/7</b> принимаем<br>ваши заявки</p>
          <p class="header__features">Более <b>1145</b> счастливых<br>обладателей набора</p><a class="header__buy-button" href="#center-link">Купить в один клик!</a><a class="header__reviev-button" href="#link-sec-9">38 отзывов</a>
        </div>
      </div>
      <div class="header__second-line">
        <nav>
          <ul>
            <li><a href="#link-sec-2">О бренде</a></li>
            <li><a href="#link-sec-4">Выбрать размер</a></li>
            <li><a href="#center-link">Как заказать?</a></li>
            <li><a href="#link-sec-7">Характеристики</a></li>
            <li><a href="#link-sec-9">Отзывы</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <section class="section wellcome" id="link-sec-1">
        <div class="wellcome__cont"> 
          <h2 class="wellcome__title">Набор<br>бесшовных<br>бюстгальтеров</h2>
          <p class="wellcome__desc">Скроют недостатки фигуры - push-up эффект!          </p>
          <ul class="wellcome__ul">
            <li>Очень удобный, не натирает, нигде не давит</li>
            <li>Поддерживает грудь, делая ее привлекательной</li>
            <li>Не ограничивает движения и не сдавливает грудь</li>
          </ul>
          <p class="upper-btn-desc">Цена за 3 штуки</p><a class="link-button" id="link-1" href="#center-link" style="font-weight:400">Оформить заказ!</a>
          <p class="wellcome__button-desc">Наличие наборов по акции: <b>7шт</b></p>
          <p class="wellcome-prise">23980тг<br><b>11990тг</b></p>
        </div>
      </section>
      <section class="wow-bra">
        <div class="wow-bra__cont">
          <div class="slick"></div>
          <div class="deliver"></div>
          <div class="oleg"></div>
          <div class="old-prise" id="old-prise-1"><?= $oldPriceHtml ?> <?= $currencyDisplayHtml ?> </div>
          <div class="new-prise" id="new-prise-1"><?= $newPriceHtml ?> <?= $currencyDisplayHtml ?></div>
          <div class="old-prise" id="old-prise-2"><?= $oldPriceHtml ?> <?= $currencyDisplayHtml ?> </div>
          <div class="new-prise" id="new-prise-2"><?= $newPriceHtml ?> <?= $currencyDisplayHtml ?></div><a class="header__reviev-button" href="#link-sec-9" id="star-2">38 отзывов</a><a class="header__reviev-button" href="#link-sec-9" id="star-3">38 отзывов</a>
          <div id="link-sec-2"></div>
          <div id="link-sec-4"></div>
          <div id="link-sec-6"></div>
          <div id="link-sec-9"></div>
          <div id="link-sec-7"></div><a class="link-button" id="link-2" href="#center-link" style="font-weight:400">Оформить заказ!</a>
        <form id="mid-link" class="form__input-block lv2-form lv2-form1 lv2-form-validation-by-alert" action="" method="post">

            <h2>Заполните форму</h2>
            <p class="form__desc">и мы свяжемся с Вами<br>в течении 10 минут</p>
            <div style="display: block; margin: 0 auto;"><?= countrySelect() ?></div>
                
            <label for="username-1">Как к Вам обращаться? </label>
            <div class="ico-cont-name">

        <input required class="form__input" placeholder="Введите Ваше Имя" id="lv-formLanding1-fio" name="name" type="text"  />
        <div class="error lv2-form-error" style="color: red;display:none" id="lv-formLanding1-fio_em_"></div>

            </div>
            <label for="tel-number-1">Куда Вам перезвонить?</label>
            <div class="ico-cont-tel">

        <input required class="form__input" placeholder="Введите Ваш номер телефона" id="lv-formLanding1-phone" name="phone" type="tel"  />
        <div style="color: red;display:none" id="lv-formLanding1-phone_em_" class=" lv2-form-error"></div>

            </div><button class="order order-sub" type="submit">Оформить заказ!</button>
            <p class="timer-desc" id="timer-desc">До конца акции осталось:</p><script src="//megatimer.ru/s/12506cd4acd278456bdc8d8feb0573c4.js"></script>
        </form>


        <form id="center-link" class="form__input-block lv2-form lv2-form2 lv2-form-validation-by-alert" action="" method="post">
            <h2>Заполните форму</h2>
            <p class="form__desc">и мы свяжемся с Вами<br>в течении 10 минут</p>
            <div style="display: block; margin: 0 auto;"><?= countrySelect() ?></div>   
            <label for="username-2">Как к Вам обращаться? </label>
            <div class="ico-cont-name">
        <input required class="form__input" placeholder="Введите Ваше Имя" id="lv-formLanding2-fio" name="name" type="text"  />
        <div class="error lv2-form-error" style="color: red;display:none" id="lv-formLanding2-fio_em_"></div>
            </div>
            <label for="tel-number-2">Куда Вам перезвонить?</label>
            <div class="ico-cont-tel">
        <input required class="form__input" placeholder="Введите Ваш номер телефона" id="lv-formLanding2-phone" name="phone" type="tel"  />
        <div style="color: red;display:none" id="lv-formLanding2-phone_em_" class=" lv2-form-error"></div>
            </div><button class="order order-sub" type="submit" id="main-link">Оформить заказ!</button>
            <p class="timer-desc" id="timer-desc">До конца акции осталось:</p>
            <script src="//megatimer.ru/s/12506cd4acd278456bdc8d8feb0573c4.js"></script>
        </form>
        </div>
      </section>
    </main>
    <footer id="footer-link">

      <center> <?= footer() ?>	</center>
    </footer>

    <script src="files/w/wow-bra/wow-bra.leadvertex.info/files/js/slick.min.js"></script>
    <script src="files/w/wow-bra/wow-bra.leadvertex.info/files/js/main.js"></script>


<div id="details-wrapper"></div>


</body>
</html>