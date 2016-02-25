<?php
/**
 * Transport - contact form map template part
 * 
 * @package transport
 * @subpackage transport.content
 * @since transport 1.0.0
 * 
 */
?><div class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="heading "> 
                    <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="contact-form-box ">
                    <div class="row">
                        <?php
                        $contact_form = get_post_meta(get_the_ID(), 'contact_form', true);
                        if ($contact_form != ''):
                            print(do_shortcode('[contact-form-7 id="' . $contact_form . '" title="' . get_the_title($contact_form) . '"]'));
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="map-box " id="map-box"> </div>
            </div>
        </div>
                <div class="info">
                    <h3><strong>Best Ride USA</h3>
                        <p>303 Wyman St.</p>
                        <p>Suite 300</p>
                        <p>Waltham, MA 02451</p>

                       <p> Phone: <a href="tel:(617)923-1377">(617) 923-1377</a></p>
                    </div> 
    </div>
</div>
<?php 