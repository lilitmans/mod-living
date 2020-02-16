<footer>
    <div class="content">
        <div id="footer_top_part" class="flexbox">
            <div id="footer_navigation_block">
                <ul class="flexbox">
                    <li>
                        <a class="" href="<?php $baseurl?>/">Home</a>
                    </li>
                    <li>
                        <a class="<?=$url[1] == 'store' ? 'active-nav':''?>" href="<?php $baseurl?>/store">Our store</a>
                    </li>
                    <li>
                        <a class="<?=$url[1] == 'returnpolicy' ? 'active-nav':''?>" href="<?php $baseurl?>/returnpolicy">Return policy</a>
                    </li>
                    <li>
                        <a class="<?=$url[1] == 'about' ? 'active-nav':''?>" href="<?php $baseurl?>/about">About us</a>
                    </li>
                    <li>
                        <a class="<?=$url[1] == 'paymentoptions' ? 'active-nav':''?>" href="<?php $baseurl?>/paymentoptions">Payment options</a>
                    </li>
                    <li>
                        <a class="<?=$url[1] == 'customerservice' ? 'active-nav':''?>" href="<?php $baseurl?>/customerservice">Customer service</a>
                    </li>
                    <li>
                        <a class="<?=$url[1] == 'shippinginformation' ? 'active-nav':''?>" href="<?php $baseurl?>/shippinginformation">Shipping information</a>
                    </li>
                    <li>
                        <a class="<?=$url[1] == 'contact' ? 'active-nav':''?>" href="<?php $baseurl?>/contact">Contact us</a>
                    </li>
                </ul>
            </div>
            <div id="media_block" class="flexbox">
                <a class="flexbox" href="#"><i class="fa fa-behance"></i></a>
                <a class="flexbox" href="#"><i class="fa fa-vk"></i></a>
                <a class="flexbox" href="#"><i class="fa fa-instagram"></i></a>
                <a class="flexbox" href="#"><i class="fa fa-facebook"></i></a>
            </div>
        </div>

        <div id="footer_bottom_part" class="flexbox">
            <p>&copy; <?= TITLE ?> <?= date('Y')?></p>
            <a href="#">Private police</a>
            <p><?= date('Y')?></p>
        </div>
    </div>
</footer>