<?php
/**
 * @var $DOCUMENT_ROOT
 * @var $modeMoscow - флаг для вывода информации по округам
 **/
?>
</div>

<footer class="gen-footer">
    <div class="map-phone">
        <div class="container">
            <div class="contacts">

                <?php if($modeMoscow){ ?>
                    <h2 class="contacts-h2">Контактная информация</h2>

                    <div class="contacts-activity">
                        <div class="contacts-phone"><i class="icon-phone"></i><a href="tel:83516632460">8 (35166) 3-24-60</a>, <a href="tel:83516632492">8 (35166) 3-24-92</a></div>
                        <div class="contacts-email"><i class="icon-email"></i><a href="mailto:office@energy-21.ru">office@energy-21.ru</a></div>
                    </div>
                    <div class="contacts-info">
					<p><b>Производство:</b></p>
                        <p>457000 Челябинская обл., п. Увельский ул. Сафонова, 10</p>
                        <p>
                        Генеральный директор Иванисенко Анатолий Александрович<br />
                        тел.: <a href="tel:83512116010">8 (351) 211-60-10</a><br />
                        </p>
						<p><b>По вопросам комплексных поставок продукции:</b></p>
                        <p>г. Москва, ул. Лазо, д.9, ООО «Форэнерго-трейд» <br />
						тел.: <a href="tel:84957805165">8 (495) 780-51-65</a><br />
						<a href="mailto:zakaz@forenergo-trade.ru">zakaz@forenergo-trade.ru</a></p>
                        
                    </div>
                <?php } else { ?>
                    <h2 class="contacts-h2">Контактная информация</h2>

                    <div class="contacts-activity">
                        <div class="contacts-phone"><i class="icon-phone"></i><a href="tel:83512116010">+7 (351) 211-60-10</a>, Отдел продаж: <a href="tel:83512116020">+7 (351) 211-60-20</a></div>
                        <div class="contacts-email"><i class="icon-email"></i><a href="mailto:office@energy-21.ru">office@energy-21.ru</a></div>
                    </div>
                    <div class="contacts-info">
					<p><b>Производство:</b></p>
                        <p>457000 Челябинская обл., п. Увельский ул. Сафонова, 10</p>
                        <p>
                        Генеральный директор Иванисенко Анатолий Александрович<br />
                        тел.: <a href="tel:83512116010">8 (351) 211-60-10</a><br />
                        </p>
						<p><b>По вопросам комплексных поставок продукции:</b></p>
                        <p>г. Южноуральск, ул. Заводская-3, к.30  <br />
						тел.: <a href="tel:83513442244">8 (351) 344-22-44</a><br />
						<a href="mailto:uik@uik.ru">uik@uik.ru</a></p>
                        
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="fotter-bottom">
        <div class="container">
            <div class="footer-year">2021</div>
            <a class="footer-logo" href="/"><img src="/img/logo-e21.png" alt="Логотип" /></a>
        </div>
    </div>
</footer>

<?php require_once $DOCUMENT_ROOT.'/parts/form.php';?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



<script src="/js/fancybox/jquery.fancybox.min.js"></script>
<script src="/js/util.js"></script>
<script src="/js/modal.js"></script>
<script src="/js/script.js"></script>

</body>
