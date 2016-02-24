<?php

/**
 * Transport - Location Filter 
 * 
 * This page has location filter functinality
 *  
 * @package transport
 * @subpackage transport.inc
 * @since transport 1.0.0
 */

function transport_location_list_map(){

$locations= transport_locations();
$locations_filetr = transport_locations_filter();

$map_postion = (!empty($locations_filetr['map'])) ? $locations_filetr['map'] : array();
$map_list = (!empty($locations_filetr['list'])) ? $locations_filetr['list'] : array();

wp_enqueue_script( 'transport.custom.map');
wp_localize_script('transport.custom.map', 'TRANSPORT_LOCATIONS' , array("map" => $map_postion, "country" => $locations, "theme_url"=>  get_template_directory_uri()));
?>
<div class="our-office">
    <div class="search-office">
        <div class="office-search-box">
            <form action="" method="post">
                <?php $country = (!empty($_POST['country'])) ? $_POST['country'] : ""; ?>
                <input id="search" data-provide="typeahead" value="<?php echo esc_attr($country); ?>" class="transport-location-search" name="country" type="text"   placeholder="Search Country" />
                <input type="submit" value="" />
            </form>
        </div>
        <div id="countries" class="countries">
            <?php
            $flagCount = 0;
            $flag_total = count($map_list) - 1;
            foreach ($map_list as $key => $countries):
                echo ($flagCount % 6 == 0) ? '<!-- slide start -->'
                        . '<div class="countries-slides">' : '';

                transport_address_list($key, $countries, $flagCount);

                echo ($flagCount % 6 == 5 || $flagCount == $flag_total ) ? '</div>'
                        . '<!-- /slide end -->' : '';
                $flagCount++;
            endforeach;

            ?>
        </div>
    </div>
    <div>
        <div id="dvMap" class="mapping"></div>
    </div>
</div>
<?php 
}


add_action("transport_location_list", "transport_location_list_map" );


function transport_address_list($key, $countries, $flagCount) {
    ?>
    <div class="countries-wrap <?php echo ($flagCount % 2 == 0) ? 'class-A' : ''; ?>">
        <span class="alphabet"><?php echo esc_html($key); ?></span>
        <ul class="country-names">
            <?php
            foreach ($countries as $country):
                ?>
                <li><a data-lat="<?php echo esc_attr($country['lat']); ?>" data-lng="<?php echo esc_attr($country['lng']); ?>" href="javascript: void(0);"><?php echo ucwords($country['title']); ?></a></li>
                <?php
            endforeach;
            ?>
        </ul>
    </div>
    <?php
}

function transport_locations() {

    $args = array(
        'post_type' => 'location',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
        'orderby' => 'title',
        'order' => 'ASC'
    );


    $location_query = new WP_Query($args);

    $locations = array(); 
    
    if ($location_query->have_posts()) {
        while ($location_query->have_posts()) {
            $location_query->the_post();
            $locations[] = ucwords(get_the_title());
        }
    }

    wp_reset_postdata();
    
    return $locations;
}


function transport_locations_filter() {

    $args = array(
        'post_type' => 'location',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
        'orderby' => 'title',
        'order' => 'ASC'
    );

    if(!empty($_POST['country'])){
        $args['s'] = $_POST['country'] ; 
    }

    $location_query = new WP_Query($args);

    $total_location_index = 0;  //total index

    $locations = array(); // locations under index
    $map_location = array();
    //$serach_elements=array();
    if ($location_query->have_posts()) {
        $current_letter = '';

        while ($location_query->have_posts()) {
            $location_query->the_post();

            $first_letter = substr(get_the_title(), 0, 1);

            if ($first_letter !== $current_letter) {

                $current_letter = $first_letter;
                $total_location_index++;
            }

            $address = array(
                'title' => ucwords(get_the_title()),
                'lat' => get_post_meta(get_the_ID(), 'latitude', true),
                'lng' => get_post_meta(get_the_ID(), 'longitude', true)
            );

            $map_location[] = $address;
            $locations[$current_letter][] = $address;
        }
    }


    wp_reset_postdata();
    return array("map" => $map_location, "list" => $locations );
}


