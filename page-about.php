<?php get_header(); ?>

<section>
    <div class="container">
        <div class="about-wrapper">
          <div class="section_title"><h2>О КОМПАНИИ</h2></div>
          <div class="about_text"> 
          <p>Компания «Городская служба измерений» работает
             с лучшими специалистами аккредитованной метрологической службы <a class="color_red" href="https://poverkadoma.ru">ООО «МС Ресурс»</a>.</p>
          <p>Наша компания выполняет метрологическую поверку счетчиков воды в городах: Ростов-на-Дону, Азов, Батайск по самым приемлемым ценам.
             И обладаем необходимыми сертификатами и аккредитацией.</p>
          </div>
            <?php echo do_shortcode('[water_certificates]'); ?>               
        </div>
    </div>
</section>    

<section>
    <div class="container">
        <div class="about-inf">
              <div class="about-img">
                <img loading="lazy" src="<?php echo get_template_directory_uri()?>/static/img/accred_msresurs.png" alt="Номер аккредитации МС-РЕСУРС">
              </div>
              <div class="about-href"><a class="color_red" href="https://pub.fsa.gov.ru/ral/view/29480/applicant">
              ООО «МС-Ресурс» в Государственном реестр аккредитованных лиц на сайте Росаккредитации</a>
              </div>
        </div> 
    </div>
</section>

<section class="yellow">
    <div class="yellow_bg">
      <div class="container">
          <div class="yellow_bg-wrapper acts_wrapper">
              <div class="acts-slider">
                <div class="acts_item">
                    <img src="<?php echo get_template_directory_uri()?>/static/img/act_gsi_1.jpg" alt="Акт поверки водянного счетчика от ГСИ"/>
                </div>
                <div class="acts_item">
                    <img src="<?php echo get_template_directory_uri()?>/static/img/act_msresurs_1.jpg" alt="Акт поверки водянного счетчика от МС-РЕСУРС"/>
                </div>
              </div>
              <div class="contact">
              <b>ИП Григорьянц Александр Георгиевич</b>
              <p><b>ИНН</b> 616705910066, </p>
              <b>ОГРН</b> 322619600013675,
              <p><b>ОКПО</b> 2013462964</p>
              <b>Зарегистрирован:</b> г. Ростов-на-Дону, пр-кт 40-летия Победы, 328/1, кв. 3 
              </div>
          </div>
      </div> 
    </div>
</section>    

<section>
        <div class="container">            
                <div class="section_title">
                    <h2>Оставить заявку</h2>
                </div>
                <div class="order_wrapper">
                    <div class="order_column half_column">
                        <p>Прием заявок по телефону — ежедневно с 8:00 до 20:00</p>
                        <p>Онлайн-заявки — круглосуточно</p>
                        <p>Работа метролога осуществляется с 8:00 до 18:00</p>
                        <p><a href="mailto:info@поверка-воды.рф">info@поверка-воды.рф</a></p>
                        <p><a href="tel:+79001280404">+7 (900) 128-04-04</a></p>
                        <p><a href="tel:+79001281414">+7 (900) 128-14-14</a></p>
                        <div class="social_contacts">
                            <a class="social_contacts-item" href="https://wa.clck.bar/79001281414">
                                <i aria-hidden="true" class="fab fa-whatsapp"></i>
                            </a>
                            <a class="social_contacts-item" href="https://t.me/gsi_poverka">
                                <i aria-hidden="true" class="fab fa-telegram"></i>
                            </a>
                            <a class="social_contacts-item" href="https://wa.clck.bar/79001280404">
                                <i aria-hidden="true" class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>  
                    <div class="order_column half_column">
                        <?php echo do_shortcode('[contact-form-7 id="61" title="Контактная форма 1"]'); ?>  
                    </div>      
                </div>                
            </div>           
</section>


<section class="map_section">
    <div class="map_text">
        Прием клиентов по адресу г. Ростов-на-Дону, проспект 40-летия Победы, 328/1 не ведется. Все заявки принимаются по <a href="tel:+79001281414">телефону</a>, <a href="mailto:info@поверка-воды.рф">E-mail</a>, <a href="https://wa.clck.bar/79001281414">WhatsApp</a>, <a href="https://t.me/gsi_poverka">Telegram</a> или через формы связи на сайте!
    </div>
    <div id="map_container" class="map container-fluid">  
        <script id="ymap_lazy" type="text/javascript" charset="utf-8" async data-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A66c41d9cc7dcee79558d6c1878f824fb9f46b8a7f7e652a3f7989013889c06e5&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</section>         

<?php get_footer(); ?>