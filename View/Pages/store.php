<section>
    <div class="content">
        <p class="navigation-path dark-grey">Home/ Catalog/ <span class="dark-violet">Product Categories</span></p>
        <p class="dark-violet main-title">Product Categories</p>
        <div id="_filter-main-container"class="flexbox">
            <div class="filter-container">
                <p class="filter-title">Sort by price</p>
                <div class="price-range-block">
                    <div id="slider-range"></div>

                    <div id="_amount-block" class="flexbox">
                        <input type="text" id="min" value="0" readonly>
                        <span id="_dash"></span>
                        <input type="text" id="max" value="3000" readonly>
                        <span>$</span>
                    </div>
                </div>
                <div class="filter-category-main-block">
                    <?php for($i=0; $i< 4; $i++) {?>
                    <div class="filter-category">
                        <p class="filter-title _filter-title_">Accent decor</p>
                        <div class="toggle-filter-category-items _toggle-filter_ flexbox">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="filter-category-items">
                            <a href="">Charger plates</a>
                            <a href="">Decorative Accessories</a>
                            <a href="">Charger plates</a>
                            <a href="">Decorative Accessories</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>

            <div class="filtered-items-container">
                <p class="dark-violet category-item-title">Charger Plates</p>
                <p class="category-item-description">
                    There’s no need to wait for a special event to decorate with some candles and candle holders.
                    Create a cozy aura with your favorite candle scent and favorite candle holder design. Choose
                    from different materials like glass, crystal or wood and find a variety of colors, such as white
                    candle holders for a picture perfect wedding or a purple candlestick to complete your bathroom.
                    No matter what style or color you choose, candles are a great way to turn any gathering space
                    into a magical space!When deciding what type of candle holders you want, keep in mind the size
                    and type of candles you plan to use. Certain styles require a specially designed candle holder,
                    and you’ll want to make sure your final choice fits without looking awkwardly over or undersized.
                    Don’t forget to consider where you’ll place your new holder — unique locations such as on the wall
                    in candle wall sconces or even from the ceiling in a hanging style can really add another dimension to your interior.
                </p>

                <div id="_sorting-info-block">
                    <p class="dark-violet sorting-info">Showing 1-9 by 18</p>
                    <div class="dark-violet sorting-info">Sort by:
                        <div class="select _select_">
                            <span id="_selected">Default sorting</span>
                            <div class="select-chevron _select-chevron_">
                                <div class="chevron"></div>
                            </div>
                            <div class="select-options box-shadow _select-options_">
                                <div class="select-option _select-option_">Default sorting</div>
                                <div class="select-option _select-option_">Popularity</div>
                                <div class="select-option _select-option_">Average rating</div>
                                <div class="select-option _select-option_">Latest</div>
                                <div class="select-option _select-option_">Price: low to high</div>
                                <div class="select-option _select-option_">Price: high to low</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-list product-list-3-item flexbox">
                    <?php for($i=0; $i<9; $i++){?>
                        <div class="item-wrapper">
                            <a href="<?php $baseurl?>/product">
                                <div class="item">
                                    <div class="sell-block">sell -20%</div>
                                    <div class="rate-block">
                                        <i class="fa fa-star active-star"></i>
                                        <i class="fa fa-star active-star"></i>
                                        <i class="fa fa-star active-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="item-img-block">
                                        <img src="<?= $baseurl ?>/assets/img/sofa.png" alt="Image" />
                                    </div>
                                    <p class="item-title dark-violet">Valerio sofa chair </p>
                                    <div class="price-block">
                                        <span class="price-txt dark-grey">price: </span><span class="price dark-violet">$218.00</span>
                                    </div>
                                    <div class="todo-with-item-block flexbox">
                                        <div class="todo-with-item add-to-basket">
                                            <img src="<?= $baseurl ?>/assets/i/bag.png" alt="Basket" />
                                        </div>
                                        <div class="todo-with-item like-item">
                                            <img src="<?= $baseurl ?>/assets/i/favorite.png" alt="Favorite" />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
        </div>
        </div>
    </div>
</section>