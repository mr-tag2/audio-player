<?php
echo '<ul>';

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();

            $agent_id       = get_the_id();
            $img_id         = get_post_thumbnail_id( $agent_id );
            $src            = wp_get_attachment_image_src( $img_id, 'thumbnail' )[0];
            $src            = $src ?? BLP_ASSETS . 'img/urr_icon.png';
            $code           = get_field( 'agent_code', $agent_id );
            $address        = get_field( 'agent_address', $agent_id );
            $mobile         = get_field( 'agent_mobile', $agent_id );
            $tel            = get_field( 'agent_tel', $agent_id );
            $products       = get_field( 'agent_products', $agent_id );
            $working_hour   = get_field( 'agent_working_hour', $agent_id );
            $admission_type = get_field( 'agent_admission_type', $agent_id );
            ?>
            <li>
<!--                <div class="thumb_box">-->
<!--                    <a href="#"><img src="--><?php //echo $src; ?><!--" alt="--><?php //echo get_the_title();?><!--"></a>-->
<!--                </div>-->
                <div class="info_box">
                    <a href="tel:<?php echo $mobile; ?>">
                        <strong class="title">
                            <?php echo get_the_title();?>
                        </strong>
                        <?php if ( $code ){ ?>
                            <span class="code">
                                <i class="fa fa-address-card"></i>
                                <strong>کد نمایندگی:</strong>
                                <?php echo $code; ?>
                            </span>
                        <?php } if ( $address ) { ?>
                            <span class="address">
                                <i class="fa fa-map-marker-alt"></i>
                                <strong>آدرس:</strong>
                                <?php echo $address; ?>
                            </span>
                        <?php } if ( $mobile ){ ?>
                            <span class="phone">
                                <i class="fa fa-mobile"></i>
                                <strong>تلفن همراه:</strong>
                                <?php echo $mobile; ?>
                            </span>
                        <?php } if ( $tel ){ ?>
                            <span class="phone">
                                <i class="fa fa-phone"></i>
                                <strong>تلفن ثابت:</strong>
                                <?php echo $tel; ?>
                            </span>
                        <?php } if ( $products ){ ?>
                            <span class="phone">
                                <i class="fa fa-motorcycle"></i>
                                <strong>محصولات تحت پوشش:</strong>
                                <?php echo $products; ?>
                            </span>
                        <?php } if ( $working_hour ){ ?>
                            <span class="phone">
                                <i class="fa fa-clock"></i>
                                <strong>ساعت کار:</strong>
                                <?php echo $working_hour; ?>
                            </span>
                        <?php } if ( $admission_type ){ ?>
                            <span class="phone">
                                <i class="fa fa-user"></i>
                                <strong>نوع پذیرش:</strong>
                                <?php echo $admission_type; ?>
                            </span>
                        <?php } ?>
                    </a>
                </div>
            </li>
        <?php
        }
    } else {
        ?>
        <li>
            <h5>متاسفانه موردی یافت نشد.</h5>
        </li>
        <?php
    }

echo '</ul>';

wp_reset_postdata();