<?php

    $restaurant_zone_theme_css= "";

    /*--------------------------- Scroll To Top Positions -------------------*/

    $restaurant_zone_scroll_position = get_theme_mod( 'restaurant_zone_scroll_top_position','Right');
    if($restaurant_zone_scroll_position == 'Right'){
        $restaurant_zone_theme_css .='#button{';
            $restaurant_zone_theme_css .='right: 20px;';
        $restaurant_zone_theme_css .='}';
    }else if($restaurant_zone_scroll_position == 'Left'){
        $restaurant_zone_theme_css .='#button{';
            $restaurant_zone_theme_css .='left: 20px;';
        $restaurant_zone_theme_css .='}';
    }else if($restaurant_zone_scroll_position == 'Center'){
        $restaurant_zone_theme_css .='#button{';
            $restaurant_zone_theme_css .='right: 50%;left: 50%;';
        $restaurant_zone_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $restaurant_zone_slider_img_opacity = get_theme_mod( 'restaurant_zone_slider_opacity_color','');
    if($restaurant_zone_slider_img_opacity == '0'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.1'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.1';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.2'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.2';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.3'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.3';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.4'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.4';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.5'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.5';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.6'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.6';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.7'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.7';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.8'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.8';
        $restaurant_zone_theme_css .='}';
        }else if($restaurant_zone_slider_img_opacity == '0.9'){
        $restaurant_zone_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $restaurant_zone_theme_css .='opacity:0.9';
        $restaurant_zone_theme_css .='}';
        }