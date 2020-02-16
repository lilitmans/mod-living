<section id="card_section">
    <div class="content">
        <p class="navigation-path dark-grey">Home/<span class="dark-violet">Card</span></p>
        <p class="dark-violet main-title">Card</p>
        <div id="main_card_block"  class="flexbox">
            <div id="card_block" class="box-shadow">
                <?php for($i=0; $i < 2; $i++) {?>
                <div class="card-item-block">
                    <div class="close box-shadow brightest-violet flexbox-inline _close_"><i class="fa fa-close"></i></div>
                    <div class="card-item-main-info-block">
                        <div class="card-item-img-block">
                            <img src="<?php $baseurl?>/assets/img/cromwell.png" alt="Image">
                        </div>
                        <div class="card-item-description-block">
                            <p class="card-item-title">CROMWELL HUTCH BUFFET</p>
                            <div class="card-item-count-block">
                                <span>Count</span>
                                <span>1 pc.</span>
                            </div>
                            <p class="card-item-code">SKU: VK3103HB</p>
                        </div>
                    </div>

                    <div class="card-item-price-main-block">
                        <p class="card-item-price-title">Price</p>
                        <div class="card-item-price-block flexbox">
                            <span class="_card-item-price_">32 USD</span>
                            <div class="price-counter-block flexbox">
                                <span id="_sub" class="counter-sign brightest-violet _counter-sign_">-</span>
                                <input class="price-counter _price-counter_" value="1">
                                <span id="_add" class="counter-sign brightest-violet _counter-sign_">+</span>
                            </div>
                            <span class="card-item-total-price _card-item-total-price_">32 USD</span>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>

            <div id="total_price_block" class="box-shadow">
                <p class="total-price">Total: <span>32 653 USD</span></p>
                <input class="brightest-violet-btn" type="button" value="Buy">
            </div>
        </div>
    </div>
</section>