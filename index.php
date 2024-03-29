<?php get_header(); ?>

<section class="main_slider-block">
    <?php echo do_shortcode('[water_main_slider]'); ?>
</section>

<section class="yellow">
    <div class="yellow_bg">
        <div class="container action_container">
            <div class="yellow_bg-wrapper">
                <div class="blur_layout">
                
                </div>
                <div class="section_title">
                    <h2 id="action_title">Акция!</h2>
                </div>
                <div class="subtitle_action">
                    <div class="subtitle_text">
                        <?php
                            $_monthsList = array(
                            "1"=>"Января","2"=>"Февраля","3"=>"Марта",
                            "4"=>"Апреля","5"=>"Мая", "6"=>"Июня",
                            "7"=>"Июля","8"=>"Августа","9"=>"Сентября",
                            "10"=>"Октября","11"=>"Ноября","12"=>"Декабря");
                            
                            $month = $_monthsList[date("n")];
                        ?>  
                        Только до конца <?= $month; ?>
                    </div>
                    <div class="subtitle_desc subtitle">
                        *при оставлении заявки на сайте
                    </div>
                </div>
                <div class="text_block-wrapper">
                    <div class="text_block">
                        <h4 class="action_city">
                            Ростов-на-Дону
                        </h4>
                        <div class="action_item">
                            <div class="action_place">Квартира</div>
                            <div class="action_prices">
                                <span class="action_old-price">550/500</span>
                                <span class="action_new-price">450/400</span>
                            </div>
                        </div>
                        <div class="action_item">
                            <div class="action_place">Ч/Д Дом</div>
                            <div class="action_prices">
                                <span class="action_old-price">700/650</span>
                                <span class="action_new-price">600/550</span>
                            </div>
                        </div>
                        <div class="action_item">
                            <div class="action_place">Ч/Д Колодец</div>
                            <div class="action_prices">
                                <span class="action_old-price">1100/1000</span>
                                <span class="action_new-price">950/850</span>
                            </div>
                        </div>
                    </div>
                    <div class="text_block">
                        <h4 class="action_city">
                            Аксай, Батайск
                        </h4>
                        <div class="action_item">
                            <div class="action_place">Квартира</div>
                            <div class="action_prices">
                                <span class="action_old-price">650/600</span>
                                <span class="action_new-price">550/500</span>
                            </div>
                        </div>
                        <div class="action_item">
                            <div class="action_place">Ч/Д Дом</div>
                            <div class="action_prices">
                                <span class="action_old-price">700/650</span>
                                <span class="action_new-price">600/550</span>
                            </div>
                        </div>
                        <div class="action_item">
                            <div class="action_place">Ч/Д Колодец</div>
                            <div class="action_prices">
                                <span class="action_old-price">1100/1000</span>
                                <span class="action_new-price">950/850</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div> 
    </div>    
</section>

<section>
    <div class="container">
        <div class="section_title">
            <h2>Отзывы</h2>
        </div>
        <?php echo do_shortcode('[water_reviews]'); ?>        
    </div>
</section>

<section>
    <div class="container">
        <div class="section_title">
            <h2>Наши цены</h2>
        </div>  

        <?php echo do_shortcode('[water_price]'); ?>

        <div class="text_block">
            <p>Замена счетчика в квартире от 1300₽ (2000₽ со счетчиком)</p>
            <p>Замена счетчика в частном доме от 1500₽ + стоимость счетчика</p>
            <p>Замена счетчика в колодце от 2000₽ + стоимость счетчика</p>
        </div>
        <div class="main_price-city">
            <div class="city-title">
                <h3>Коллективная заявка</h3>
            </div>
            <div class="main_price-collect-slider">

                <div class="price_slider-item apparts">
                    <div class="price_slider-item-top">
                        <div class="price_item-header">
                            <div class="price_item-title">Ростов-на-Дону</div>
                            <div class="price_item-subtitle subtitle">От 10 квартир</div>
                        </div>

                        <div class="price_item-body">
                            <div class="price_item-price">
                                <div class="ruble_symbol">₽</div>
                                <div class="price">450</div>
                            </div>                                                    
                        </div>
                    </div>
                    <div class="price_slider-item-bottom">
                        <div class="price_item-btn">
                            <a class="btn" href="#">Оставить заявку</a>
                        </div>
                    </div>
                </div> 

                <div class="price_slider-item house">
                    <div class="price_slider-item-top">
                        <div class="price_item-header">
                            <div class="price_item-title">Батайск</div>
                            <div class="price_item-subtitle subtitle">От 10 квартир</div>
                        </div>

                        <div class="price_item-body">
                            <div class="price_item-price">
                                <div class="ruble_symbol">₽</div>
                                <div class="price">450</div>
                            </div>                      
                        </div>
                    </div>
                    <div class="price_slider-item-bottom">
                        <div class="price_item-btn">
                            <a class="btn" href="#">Оставить заявку</a>
                        </div>
                    </div>
                </div> 

                <div class="price_slider-item well">
                    <div class="price_slider-item-top">
                        <div class="price_item-header">
                            <div class="price_item-title">Аксай</div>
                            <div class="price_item-subtitle subtitle">От 10 квартир</div>
                        </div>

                        <div class="price_item-body">
                            <div class="price_item-price">
                                <div class="ruble_symbol">₽</div>
                                <div class="price">450</div>
                            </div>                       
                        </div>
                    </div>
                    <div class="price_slider-item-bottom">
                        <div class="price_item-btn">
                            <a class="btn" href="#">Оставить заявку</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text_block-wrapper">
            <div class="text_block">
                <p><b>Замена счетчика в квартире</b> от 1800₽ (с нашим счетчиком)</p>
                <p><b>Замена счетчика в частном доме</b> от 1000₽ + стоимость счетчика</p>
                <p><b>Замена счетчика в колодце</b> от 1500₽ + стоимость счетчика</p>
                <hr>
                <p><b>Установка счетчика в квартире</b> от 2500₽ (с нашим счетчиком)</p>
                <p><b>Установка счетчика в частном доме</b> рассчитывается индивидуально</p>
                <p><b>Установка счетчика в колодце</b> рассчитывается индивидуально</p>
                <hr>
                <p><b>Вызов мастера</b> — 200₽ (если все счетчики не прошли поверку)</p>
            </div>
            <div class="text_block">
                <p class="color_red">Установка и замена ПОД КЛЮЧ</p>
                <p><b>Замена в квартире</b> от 3500₽</p>
                <p><b>Замена в доме</b> от 4000₽</p>
                <p><b>Замена в колодце</b> от 6500₽</p>
                <p><b>Установка в квартире</b> от 4000₽</p>
                <p><b>Установка в доме</b> от 7000₽</p>
                <p><b>Установка в колодце</b> от 10000₽</p>
                <p>Цены указаны с учётом стоимости счетчика, пломбы, проекта и оформления документов.</p>
            </div>
        </div>
        <p class="color_gray align-center">Льготные цены действительны для пенсионеров, инвалидов и ветеранов труда, предъявивших удостоверение.</p>
    </div>
</section>

<section class="warning_info">
    <div class="container">
        <div class="text_block-wrapper">
            <div class="text_block">
                <p class="text_block-header color_red">Важно!</p>
                <p><b>С 1 января 2021 года вступил в силу Приказ Минпромторга России № 2510 от 31.07.2020 г.</b></p>
                <p>Этот приказ устанавливает новые правила проведения поверки. Согласно новым правилам, а также в 
                    соответствии с частью 4 статьи 13 Федерального закона №102 ФЗ результатом поверки является запись 
                    в электронном реестре Росстандарта <b>ФГИС «АРШИН»</b> и только она подтверждает , что Ваш счетчик поверен! 
                    Результаты поверки передаются в <b>ФГИС «АРШИН»</b> <span class="color_red">в течение сорока рабочих дней 
                    начиная со дня проведения измерений!</span></p>
                    <hr>
                    <p>Узнать информацию о проведенной поверке Вы можете на сайте <a rel="nofollow" href="https://fgis.gost.ru">fgis.gost.ru</a>. Перейдите на сайт, выберите 
                        пункт <b>Метрология</b>, затем <b>«Публичный портал»</b>. В открывшемся окне найдите пункт <b>«Сведения о результатах 
                        поверки средств измерений»</b>. В строке поиска введите <b>серийный номер Вашего счетчика воды</b> и нажмите «Найти».</p>
                    <p>Если все сделано верно и данные о поверке уже внесены в базу данных, то Вы получите запись о Вашем счетчике.</p>
            </div>
            <div class="text_block">
                <p class="text_block-header color_green">Полезно</p>
                <p>Для Вашего удобства есть возможность посмотреть фотографии счетчиков воды в момент поверки, а также перейти по прямой 
                    ссылке на сайт Росстандарта для проверки внесенной информации о Вашем счетчике.</p>
                <p>Для этого отсканируйте QR-код.</p>
                <hr>
                <p>Также по Вашему запросу на электронную почту <a href="mailto:zapros@poverkadoma.ru">zapros@poverkadoma.ru</a> организация 
                может выдать Вам свидетельство о поверке, оформленное в виде электронного документа. Свидетельство может быть выдано только 
                после включения информации в ФГИС «АРШИН».</p>
                <p><b>Эта услуга является платной. Стоимость составляет 100 рублей за один поверенный счетчик.</b></p>
            </div>
        </div>
    </div>

</section>

<section class="yellow">
    <div class="yellow_bg">
        <div class="container">
            <div class="yellow_bg-wrapper">
                <div class="section_title">
                    <h2>О компании</h2>
                </div>
                <div class="about_text">
                    <p>Компания «Городская служба измерений» сотрудничает с лучшими специалистами 
                        аккредитованной метрологической службы <a class="color_red" href="https://poverkadoma.ru">ООО «МС Ресурс»</a>, обеспечивая тем самым своевременное оказание 
                        услуг гражданам РФ.</p>
                    <p>Личный штат техников и отдел контроля качества ежедневно заботятся о наших 
                        клиентах за счет большого количества партнеров по всей стране мы «держим» приемлемый чек.</p>                
                </div>
                <?php echo do_shortcode('[water_certificates]'); ?>               
            </div>
        </div>
    </div> 
</section>

<section>
    <div class="container">
        <div class="section_title">
            <h2>Преимущества</h2>
        </div> 
        <div class="benefits_grid">
            <div class="benefits_item">
                <div class="benefits_icon">
                    <i aria-hidden="true" class="far fa-check-square"></i>
                </div>
                <div class="benefits_text">
                    Аккредитация
                </div>
            </div>
            <div class="benefits_item">
                <div class="benefits_icon">
                    <i aria-hidden="true" class="fas fa-scroll"></i>
                </div>
                <div class="benefits_text">
                    Гарантия
                </div>
            </div>
            <div class="benefits_item">
                <div class="benefits_icon">
                    <i aria-hidden="true" class="far fa-thumbs-up"></i>
                </div>
                <div class="benefits_text">
                    Качество
                </div>
            </div>
            <div class="benefits_item">
                <div class="benefits_icon">
                    <i aria-hidden="true" class="far fa-handshake"></i>
                </div>
                <div class="benefits_text">
                    Поддержка
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="yellow">
    <div class="yellow_bg">
        <div class="container">
            <div class="yellow_bg-wrapper">
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
        </div>
    </div> 
</section>


<section>
    <div class="container">
        <div class="section_title">
            <h2>Этапы проверки</h2>
        </div>
        <?php echo do_shortcode('[water_steps]'); ?>        
    </div>
</section>

<section class="yellow">
    <div class="yellow_bg">
        <div class="container">
            <div class="yellow_bg-wrapper">
                <div class="section_title">
                    <h2>Наши услуги</h2>
                </div>
                <?php echo do_shortcode('[water_services]'); ?>                
            </div>
        </div>
    </div> 
</section>

<section>
    <div class="container">
        <div class="section_title">
            <h2>Частые вопросы</h2>
        </div>
        <div class="faq_wrapper" itemscope itemtype="https://schema.org/FAQPage">
                <div class="faq_item-sizer"></div>
                <div class="faq_item text_block">
                    <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><p itemprop="name">Для чего нужна поверка счетчиков воды?</p>
                        <span itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> 
                            <span itemprop="text">
                                <p><b>«Городская служба измерений»</b> проводит поверку счетчиков воды в Ростове-на-Дону, Аксае и Батайске. Процесс необходим для выполнения. Владельцу помещения следует уделить ему особое внимание. Согласно 13 ст. Федеральным законом от 26 июня 2008 г. № 102 от 26.06.2008 и ст. 34 «Правил предоставления коммунальных услуг», метрологическая поверка счетчиков холодной воды в Ростове-на-Дону должна производиться один раз в 6 лет, а горячей один раз в 4 года. Также можно узнать сроки поверки счетчиков на воду в:</p>
                                <ul>
                                    <li>на квитанции об оплате жилищно-коммунальных услуг</li>
                                    <li>в Водоканале</li>
                                    <li>в управляющей компании</li>
                                </ul>
                                <p>При обнаружении неисправностей при работе измерительного прибора, он должен быть заменен на новый. Вы можете заказать поверку счетчика на воду у нашей организации, по выгодной цене по сравнению с конкурентами в Ростове-на-Дону.</p>
                                <p>Для оформления заявки достаточно заполнить форму обратной связи. С вами свяжутся наши специалисты и обсудят все детали и вопросы. Имеем все необходимые сертификаты.</p>
                            </span>
                        </span>     
                    </span>   
                </div>

                <div class="faq_item text_block">
                    <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><p itemprop="name"><b>Почему поверка происходит без демонтажа счетчика?</b></p>
                        <span itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> 
                            <span itemprop="text">
                                <p>Для метрологической проверки воды наша компания применяет портативную поверочную установку. Она подключается к крану, производит контрольный замер и обнаруживает ошибки счетчика воды. Если ошибка находится в допустимых пределах — выдается Акт о проведении метрологической проверки воды необходимого образца, составленный с помощью OB-кода, в противном случае потребуется замена устройства. Замена счетчика, вы сможете заказать в нашей компании по телефону или оставив онлайн-заявку на сайте.
                                <p>Для того чтобы заказать поверку счетчика у нашей компании, достаточно просто заполнить форму для обратной связи. С вами свяжутся специалисты и обсудят все детали и вопросы. Имеем все необходимые сертификаты.</p>
                            </span>
                        </span>
                    </span>
                </div>

                <div class="faq_item text_block">
                    <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><p itemprop="name"><b>Что собой представляет поверка счетчика воды:</b></p> 
                        <span itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> 
                            <span itemprop="text">
                                <p><b>Метрологическая поверка счетчика воды в Ростове-на-Дону</b> – это процесс, в ходе которого специалист метрологической службы определяет, насколько точно работает счетчик. Затем данные проверки сравниваются с данными, указанными в паспорте. Если погрешность устройства учета воды выше нормы, дальнейшая эксплуатация будет невозможна. Когда счетчик на воду работает в пределах нормы — это означает, что прибор проверен и может быть использован до следующего срока. Как работает процесс проверки в нашей организации. Поверку воды выполняют в домашних условиях без демонтажа – этот процесс проще, удобнее и быстрее.</p>
                                <p>Для того чтобы заказать поверку счетчика у нашей компании, достаточно просто заполнить форму для обратной связи. С вами свяжутся наши специалисты и обсудят все детали и вопросы. Имеем все необходимые сертификаты.</p>
                            </span>
                        </span>
                    </span>
                </div>

                <div class="faq_item text_block">
                    <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><p itemprop="name"><b>Почему счетчик воды стоит заказать у нас?</b></p>
                        <span itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> 
                            <span itemprop="text">
                                <p>Основные преимущества обращения в «Городскую измерительную службу»:</p>
                                <ul>
                                    <li>Наличие аккредитации, которая позволит нам оказывать метрологические услуги;</li>
                                    <li>Проведение работ без демонтажа;</li>
                                    <li>Разумные цены в отличие от других компаний и скидки для льготных категорий граждан;</li>
                                    <li>Поверка счетчика воды занимает до 20 минут;</li>
                                    <li>Мы выполняем свою работу семь дней в неделю;</li>
                                    <li>Вы можете оставить заявку для заказа метрологической поверки счетчика воды в Ростове-на-Дону на сайте в любое время.</li>
                                </ul>
                                <p>Для того чтобы заказать поверку счетчика на воду у нашей компании, достаточно просто заполнить форму для обратной связи. С вами свяжутся наши специалисты и обсудят все детали и вопросы. Имеем все необходимые сертификаты.</p>
                            </span>
                        </span>
                    </span>
                </div>

                <div class="faq_item text_block">
                    <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><p itemprop="name"><b>Что происходит после поверки счетчика?</b></p>
                        <span itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> 
                            <span itemprop="text">
                                <p>После того, как мастер выполнит процесс поверки вашего счетчика Вам будут выданы нужные документы для УК, ТСЖ и Водоканала, а также поверочная информация вносится в госреестр (ФГИС «АРШИН»). Без ввода результатов поверки воды в Аршине, она считается недействительной. Мы обязательно предоставим результаты выполненной метрологической поверки в течение 40 дней в ФГИС «АРШИН». Вы сможете проверить это самостоятельно на сайте fgis.gost.ru</p>
                            </span>
                        </span> 
                    </span>
                </div>            
        </div>
    </div>
</section>
<?php get_footer(); ?>