<!-- Footer banner STARTS -->
<div class="sfsi-footer-pointing-heading">
    <p>
        <span class="sfsi-green-heading"><?php _e( 'Like the free plugin?', 'ultimate-social-media-icons' ); ?></span>
        <span class="sfsi-black-heading"><?php _e( 'See what the Premium Plugin has to offer...', 'ultimate-social-media-icons' ); ?></span>
    </p>
</div>
<div class="sfsi-footer-container">
    <div class="sfsi-footer-pointing-to-premium-plugin">
        <div class="sfsi-footer-pointing-content clearfix">
            <div class="sfsi-footer-left-section">
                <div class="row">
                    <div class="sfsi-equal-col-md-6 sfsi-equal-col-xs-12">
                        <ul>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/more_likes_shares.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'More Likes & Shares', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/more_icon_designs.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'More icon designs', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/themed_icons.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'Themed icons', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/better_icon_placement.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'Better icon placement', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="sfsi-equal-col-md-6 sfsi-equal-col-xs-12">
                        <ul>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/mobile_optimization.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'Mobile optimization', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/faster_loading.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'Faster loading', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/friendly_support.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'Friendly support', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                            <li>
                                <span class="sfsi-left-image-section">
                                    <img src="<?php echo SFSI_PLUGURL ?>images/footer_banner/more_platforms.png" alt="" />
                                </span>
                                <span class="sfsi-li-right-content">
                                    <?php _e( 'More platforms', 'ultimate-social-media-icons' ); ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class='so-much-more'><?php 
                            printf(
                                __( '...and %1$sso much more%2$s', 'ultimate-social-media-icons' ),
                                '<a target="_blank" href="https://www.ultimatelysocial.com/usm-premium/?utm_source=usmi_settings_page&utm_campaign=new_bottom_banner_to_checkout&utm_medium=banner">',
                                '</a>'
                            );
                        ?></p>
                    </div>
                </div>
            </div>
            <div class="sfsi-footer-right-section">
                <span class="sfsi-right-video">
                    <div style="position:relative;padding-top:56.25%;">
                        <iframe src="https://video.inchev.com/videos/embed/c952d896-34be-45bc-8142-ba14694c1bd0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe>
                    </div>
                </span>
                <a target="_blank" href="https://www.ultimatelysocial.com/usm-premium/?utm_source=usmi_settings_page&utm_campaign=new_bottom_banner_to_checkout&utm_medium=banner" class="sfsi-checkout-premium-plugin-button"><?php _e( 'Check out the Premium Plugin >>', 'ultimate-social-media-icons' ); ?></a>
            </div>
        </div>
    </div>

</div>

<div class="sfsi-footer-bottom-text">
    <p><?php _e( '..only 29.98 USD (includes support and updates for six months, and after that it will not be deactivated, so you can just keep using it!)', 'ultimate-social-media-icons' ); ?></p>
</div>

<!-- Footer banner CLOSES -->
<?php /* ?>
<div style="clear:both">
    <?php $noncea = wp_create_nonce("sfsi_installDate"); ?>
    <label style="font-size: 17px;">Installed date: </label>
    <input type="text" name="sfsi_installDate" placeholder="date" value="<?php echo get_option("sfsi_installDate"); ?>">
    <button type="button" id="sfsi_installDate" data-nonce="<?php echo $noncea; ?>"> click</button>
</div>

<div style="clear:both">
    <?php $noncec = wp_create_nonce("sfsi_currentDate"); ?>
    <label style="font-size: 17px;">Current date: </label>
    <input type="text" name="sfsi_currentDate" placeholder="date" value="<?php echo get_option("sfsi_currentDate"); ?>">
    <button type="button" id="sfsi_currentDate" data-nonce="<?php echo $noncec; ?>"> click</button>
</div>
<div style="clear:both">
    <?php $noncec = wp_create_nonce("sfsi_showNextBannerDate"); ?>
    <label style="font-size: 17px;">show next banner in (ex: 1 seconds,1 minute,1 hour,1 day ): </label>
    <input type="text" name="sfsi_showNextBannerDate" placeholder="no of days" value="<?php echo get_option("sfsi_showNextBannerDate"); ?>">
    <button type="button" id="sfsi_showNextBannerDate" data-nonce="<?php echo $noncec; ?>"> click</button>
</div>
<div style="clear:both">
    <?php $noncec = wp_create_nonce("sfsi_cycleDate"); ?>
    <label style="font-size: 17px;">Cycle in (ex: 1 seconds,1 minute,1 hour,1 day ): </label>
    <input type="text" name="sfsi_cycleDate" placeholder="no of days" value="<?php echo get_option("sfsi_cycleDate"); ?>">
    <button type="button" id="sfsi_cycleDate" data-nonce="<?php echo $noncec; ?>"> click</button>
</div>
<div style="clear:both">
    <?php $noncec = wp_create_nonce("sfsi_loyaltyDate"); ?>
    <label style="font-size: 17px;">Loyalty in (ex: 1 seconds,1 minute,1 hour,1 day ): </label>
    <input type="text" name="sfsi_loyaltyDate" placeholder="no of days" value="<?php echo get_option("sfsi_loyaltyDate"); ?>">
    <button type="button" id="sfsi_loyaltyDate" data-nonce="<?php echo $noncec; ?>"> click</button>
</div>
<?php
    $sfsi_banner_global_firsttime_offer = maybe_unserialize(get_option('sfsi_banner_global_firsttime_offer', false));
    $sfsi_banner_global_pinterest = maybe_unserialize(get_option('sfsi_banner_global_pinterest', false));
    $sfsi_banner_global_social = maybe_unserialize(get_option('sfsi_banner_global_social', false));
    $sfsi_banner_global_load_faster = maybe_unserialize(get_option('sfsi_banner_global_load_faster', false));
    $sfsi_banner_global_shares = maybe_unserialize(get_option('sfsi_banner_global_shares', false));
    $sfsi_banner_global_gdpr = maybe_unserialize(get_option('sfsi_banner_global_gdpr', false));
    $sfsi_banner_global_http = maybe_unserialize(get_option('sfsi_banner_global_http', false));
    $sfsi_banner_global_upgrade = maybe_unserialize(get_option('sfsi_banner_global_upgrade', false));
?>

<div style="clear:both">
    <?php $noncef = wp_create_nonce("sfsi_banner_global_firsttime_offer"); ?>
    <label style="font-size: 17px;">Dismiss Firsttime offer time:</label>
    <input type="text" name="sfsi_banner_global_firsttime_offer" placeholder="date" value="<?php echo $sfsi_banner_global_firsttime_offer['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_firsttime_offer" data-nonce="<?php echo $noncef; ?>"style="display: <?php echo $sfsi_banner_global_firsttime_offer['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>

<div style="clear:both">
    <?php $noncep = wp_create_nonce("sfsi_banner_global_pinterest"); ?>
    <label style="font-size: 17px;">Dismiss Pinterest time: </label>
    <input type="text" name="sfsi_banner_global_pinterest" placeholder="date" value="<?php echo $sfsi_banner_global_pinterest['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_pinterest" data-nonce="<?php echo $noncep; ?>" style="display: <?php echo $sfsi_banner_global_pinterest['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>

<div style="clear:both">
    <?php $noncem = wp_create_nonce("sfsi_banner_global_social"); ?>
    <label style="font-size: 17px;">Dismiss Mobile time: </label>
    <input type="text" name="sfsi_banner_global_social" placeholder="date" value="<?php echo $sfsi_banner_global_social['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_social" data-nonce="<?php echo $noncem; ?>" style="display: <?php echo $sfsi_banner_global_social['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>

<div style="clear:both">
    <?php $noncel = wp_create_nonce("sfsi_banner_global_load_faster"); ?>
    <label style="font-size: 17px;">Dismiss Load faster time: </label>
    <input type="text" name="sfsi_banner_global_load_faster" placeholder="date" value="<?php echo $sfsi_banner_global_load_faster['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_load_faster" data-nonce="<?php echo $noncel; ?>" style="display: <?php echo $sfsi_banner_global_load_faster['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>

<div style="clear:both">
    <?php $nonces = wp_create_nonce("sfsi_banner_global_shares"); ?>
    <label style="font-size: 17px;">Dismiss Shares time: </label>
    <input type="text" name="sfsi_banner_global_shares" placeholder="date" value="<?php echo $sfsi_banner_global_shares['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_shares" data-nonce="<?php echo $nonces; ?>" style="display: <?php echo $sfsi_banner_global_shares['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>

<div style="clear:both">
    <?php $nonceg = wp_create_nonce("sfsi_banner_global_gdpr"); ?>
    <label style="font-size: 17px;">Dismiss Gdpr time: </label>
    <input type="text" name="sfsi_banner_global_gdpr" placeholder="date" value="<?php echo $sfsi_banner_global_gdpr['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_gdpr" data-nonce="<?php echo $nonceg; ?>" style="display: <?php echo $sfsi_banner_global_gdpr['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>

<div style="clear:both">
    <?php $nonceh = wp_create_nonce("sfsi_banner_global_http"); ?>
    <label style="font-size: 17px;">Dismiss Http time: </label>
    <input type="text" name="sfsi_banner_global_http" placeholder="date" value="<?php echo $sfsi_banner_global_http['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_http" data-nonce="<?php echo $nonceh; ?>" style="display: <?php echo $sfsi_banner_global_http['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>

<div style="clear:both">
    <?php $nonceu = wp_create_nonce("sfsi_banner_global_upgrade"); ?>
    <label style="font-size: 17px;">Dismiss Loyalty time: </label>
    <input type="text" name="sfsi_banner_global_upgrade" placeholder="date" value="<?php echo $sfsi_banner_global_upgrade['timestamp'] ?>">
    <button type="button" id="sfsi_banner_global_upgrade" data-nonce="<?php echo $nonceu; ?>" style="display: <?php echo $sfsi_banner_global_upgrade['is_active'] == "yes" ? "inline-block": "none" ?>;"> This banner will appear</button>
</div>
<?php */