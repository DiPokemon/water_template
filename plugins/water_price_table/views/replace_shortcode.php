
        <?php foreach ( self::$model->get_list() as $item ): ?>
            
         
          
          <div class="main_price-city">
            <div class="city-title">
                <h3><?= $item->city ?></h3>
            </div>
            <div class="main_price-table-slider">

                <div class="price_slider-item apparts">
                    <div class="price_slider-item-top">
                        <div class="price_item-header">
                            <div class="price_item-title">Квартира</div>
                            <div class="price_item-subtitle subtitle">Поверка счетчика</div>
                        </div>

                        <div class="price_item-body">
                            <div class="price_item-price">
                                <div class="ruble_symbol">₽</div>
                                <div class="price"><?= $item->price_apparts?></div>
                            </div>
                            <div class="price_item-advantages">
                                <div class="advantages_icon"></div>
                                <div class="advantages_text">Льгота <?= $item->benefit_apparts ?> руб.</div>
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
                            <div class="price_item-title">Дом</div>
                            <div class="price_item-subtitle subtitle">Поверка счетчика</div>
                        </div>

                        <div class="price_item-body">
                            <div class="price_item-price">
                                <div class="ruble_symbol">₽</div>
                                <div class="price"><?= $item->price_house ?></div>
                            </div>
                            <div class="price_item-advantages">
                                <div class="advantages_icon"></div>
                                <div class="advantages_text">Льгота <?= $item->benefit_house ?> руб.</div>
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
                            <div class="price_item-title">Колодец</div>
                            <div class="price_item-subtitle subtitle">Поверка счетчика</div>
                        </div>

                        <div class="price_item-body">
                            <div class="price_item-price">
                                <div class="ruble_symbol">₽</div>
                                <div class="price"><?= $item->price_well?></div>
                            </div>
                            <div class="price_item-advantages">
                                <div class="advantages_icon"></div>
                                <div class="advantages_text">Льгота <?= $item->benefit_well ?> руб.</div>
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
        <?php endforeach ?> 
