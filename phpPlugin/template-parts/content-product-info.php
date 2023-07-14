<?php
woodmart_force_enqueue_style( 'page-my-account' );

$tabs = BLP_get_product_info_tabs();
$product_id = get_field( 'product_id' );
$active_tab = ! empty ( $_GET['tab'] ) ? esc_attr( $_GET['tab'] ) : 'general-and-technical-info' ;
?>
<div class="container">
    <div class="row content-layout-wrapper align-items-start">
        <div class="site-content col-lg-12 col-12 col-md-12" role="main">
            <article id="post-14038" class="post-14038 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="woocommerce">
                        <div class="woocommerce-my-account-wrapper">
                            <div class="wd-my-account-sidebar">

                                <h3 class="woocommerce-MyAccount-title entry-title">اطلاعات محصول</h3>

                                <nav class="woocommerce-MyAccount-navigation">
                                    <ul>
                                        <?php foreach ( $tabs as $tab_slug => $tab_data ) {
                                            $tab_name     = $tab_data[0];;
                                            $tab_access   = $tab_data[1];
                                            $custom_class = ( $active_tab == $tab_slug ) ? 'is-active' : '';
                                            if ( BLP_check_user_access( $tab_access ) ) { ?>
                                                <li class="woocommerce-MyAccount-navigation-link <?php echo $custom_class; ?>">
                                                    <a href="<?php echo BLP_get_product_info_tab_url( $tab_slug ); ?>"><?php echo $tab_name; ?></a>
                                                </li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>

                            <div class="woocommerce-MyAccount-content">
                                <?php
                                $tab_access = $tabs[$active_tab][1];
                                if ( BLP_check_user_access( $tab_access ) ) {
                                    $tab = str_replace( '-', '_', $active_tab );
                                    $product_info = get_field( $tab )['image'];
                                    $product_info = $product_info ?? get_field( $tab, $product_id );

                                    if ( $product_info  ) {
                                        echo wp_get_attachment_image( $product_info, 'full' );
                                    } elseif ( $tab == 'customer_survey_form' ) {
                                        echo BLP_gravity_form( 9 );
                                    } else {
                                        include( BLP_DIR . 'template-parts/content-none.php' );
                                    }
                                } else {
                                    include( BLP_DIR . 'template-parts/content-403.php' );
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
