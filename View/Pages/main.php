<section id="catalog_section">
    <div class="content">
        <div class="flexbox">
            <div class="carousel-block main-carousel-block">
                <?php for($i=0; $i<8; $i++){?>
                <div class="carousel-item">
                    <img src="<?= $baseurl ?>/assets/img/image.png" alt="Image" />
                    <div class="img-title-block">
                        <p class="brightest-violet">Buffalo queen headboard (eco-pkg)</p>
                    </div>
                </div>
               <?php }?>
            </div>
            <div id="pop_products_block">
                <p class="pop-products-title dark-violet flexbox-inline">
                    <span><img src="<?= $baseurl ?>/assets/i/top.png" alt="Pocket"/></span>
                    Popular products
                </p>
                <div class="carousel-block products-carousel-block">
                    <?php for($i=0; $i<8; $i++){?>
                    <div class="carousel-item">
                        <a href="<?php $baseurl?>/product">
                            <div class="item">
                                <div class="item-img-block">
                                    <img src="<?= $baseurl ?>/assets/img/sofa.png" alt="Image" />
                                </div>
                                <p class="item-title dark-violet">Valerio sofa chair </p>
                                <div class="price-block">
                                    <span class="price-txt dark-grey">price: </span><span class="price dark-violet">$218.00</span>
                                </div>
                                <div class="todo-with-item-block carousel-todo-with-item-block flexbox">
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

        <div class="products-list flexbox">
            <p class="section-subtitle dark-violet flexbox">
                <span><img src="<?= $baseurl ?>/assets/i/pocket.png" alt="Pocket"/></span>
                Sell products
            </p>
            <?php for($i=0; $i<8; $i++){?>
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

        <p class="section-subtitle dark-violet flexbox">
            <span><img src="<?= $baseurl ?>/assets/i/pocket.png" alt="Pocket"/></span>
            Categories
        </p>
        <div class="categories-block flexbox">

            <?php for($i=0; $i<4; $i++){?>
                <div class="cat-item-wrapper">
                    <a href="#">
                        <div class="cat-item">
                            <img src="<?= $baseurl ?>/assets/img/vase.png" alt="Image"/>
                            <div class="img-title-block">
                                <p class="brightest-violet">Accent Decor</p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php }?>
        </div>

        <div class="products-list flexbox">
            <p class="section-subtitle dark-violet flexbox">
                <span><img src="<?= $baseurl ?>/assets/i/pocket.png" alt="Pocket"/></span>
                Sell products
            </p>
            <?php for($i=0; $i<8; $i++){?>
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

</section>