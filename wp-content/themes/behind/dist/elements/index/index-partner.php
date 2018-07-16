<div id="mpartner" class="module">
    <div class="bgmask">
    </div>
    <div class="content layoutslider">
        <div class="header wow fw" data-wow-delay=".1s">
            <p class="title">
                合作伙伴
            </p>
            <p class="subtitle">
                OUR PARTNER
            </p>
        </div>
        <div class="module-content fw">
            <div class="wrapper">
                <ul class="content_list" data-options-ease="1" data-options-speed="0.5">
                    <li id="partneritem_0" class="wow">
                        <?php foreach ( the4('customer') as $value ):?>
                            <a title="<?php echo $value['customer_title'];?>"" target="_blank"><img src="<?php echo $value['customer_img'];?>" width="160" height="80"/></a>
                        <?php endforeach;?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>