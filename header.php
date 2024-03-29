<?php 
    /**
     * Retrieves the background image URL for the Kinder theme.
     *
     * This function checks if the "kinder_background_image" custom field is set using the
     * `get_field` function. If it is not set, the function falls back to the default
     * background image URL using the `get_template_directory_uri` function.
     *
     * @return string The URL of the background image.
     */
    function kinder_get_background_image(){
        $image = get_field("kinder_background_image");
        $url = $image && $image !== ""  ? $image : "";
        return $url;
    }
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset = "<?php bloginfo('charset') ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
            font-family: "SeoulHangangCondensed-Medium";
            src: url(<?php echo get_template_directory_uri() . "/assets/fonts/SeoulHangangCondensed-Medium.ttf"?>) format("truetype");
            font-display: swap;
        }

        @font-face{
            font-family: "Trykker-Regular";
            src: url(<?php echo get_template_directory_uri() . "/assets/fonts/Trykker-Regular.ttf"?>) format("truetype");
            font-display: swap;
        }

        @font-face{
            font-family: 'icomoon';
            src: url(<?php echo get_template_directory_uri() . '/assets/fonts/IcoMoon-Free.ttf'?>) format('truetype');
        }
        <?php
            $args = array(
                'post_type' => COLORS,
                'posts_per_page' => 1,
                'order' => 'DESC',
                'orderby' => 'date'
            );
            
            $query = new WP_Query($args);
            $kinder_background = null;
            $main_dark = null;
            $kinder_main = null;
            $kinder_semi_main = null;
            $kinder_second_menu_gradient = null;
            $kinder_light = null;
            $kinder_grey = null;
            $kinder_grey_dark = null;
            $kinder_accent = null;
            $kinder_black = null;
            $kinder_black_80 = null;
            $kinder_white = null;
            $kinder_slide_background = null;
            $kinder_shadow = null;
            $kinder_active_menu = null;
            $kinder_first_green_gradient = null;
            $kinder_secondary_green_gradient = null;
            $kinder_first_slide_background = null;
            $kinder_second_slide_background = null;
            $kinder_search_gradient_first = null;
            $kinder_search_gradient_second = null;

            
            if($query->have_posts()) {
                while($query->have_posts()) {
                    $query->the_post();
                    $kinder_background = get_field("kinder_background");
                    $main_dark = get_field("main-dark");
                    $kinder_main = get_field("kinder_main");
                    $kinder_semi_main = get_field("kinder_semi-main");
                    $kinder_second_menu_gradient = get_field("kinder_second_menu_gradient");
                    $kinder_light = get_field("kinder_light");
                    $kinder_grey = get_field("kinder_grey");
                    $kinder_grey_dark = get_field("kinder_grey_dark");
                    $kinder_accent = get_field("kinder_accent");
                    $kinder_black = get_field("kinder_black");
                    $kinder_black_80 = get_field("kinder_black-80");
                    $kinder_white = get_field("kinder_white");
                    $kinder_slide_background = get_field("kinder_slide-background");
                    $kinder_shadow = get_field("kinder_shadow");
                    $kinder_active_menu = get_field("kinder_active-menu");
                    $kinder_first_green_gradient = get_field("kinder_first-green-gradient");
                    $kinder_secondary_green_gradient = get_field("kinder-secondary-green-gradient");
                    $kinder_first_slide_background = get_field("kinder_first-slide-background");
                    $kinder_second_slide_background = get_field("kinder_second-slide-background");
                    $kinder_search_gradient_first = get_field("kinder_search-gradient-first");
                    $kinder_search_gradient_second = get_field("kinder_search-gradient-second");
                }
                wp_reset_postdata(); // Reset the global post
            }
            ?>
        :root {
            --background: <?php echo $kinder_background ?: "#F6F6F6"?>;
            --main-dark: <?php echo  $main_dark ?: "#36AA00"?>;
            --main: <?php echo  $kinder_main ?: "#97E572"?>;
            --semi-main: <?php echo  $kinder_semi_main ?: "#99E675"?>;
            --second_menu_gradient: <?php echo  $kinder_second_menu_gradient ?: '#73B156' ?>; 
            --light: <?php echo  $kinder_light ?: "#E7FCDB" ?>;
            --grey: <?php echo $kinder_grey ?: "#D9D9D9"?>;
            --grey-dark: <?php echo  $kinder_grey_dark ?: "#919191"?>;
            --accent: <?php echo  $kinder_accent ?: "#77003e"?>;
            --black: <?php echo  $kinder_black ?: "#000000"?>;
            --black-80: <?php echo  $kinder_black_80 ?: "#201F1FCC"?>;
            --white: <?php echo  $kinder_white ?: "#FFFFFF"?>;
            --slide-background: <?php echo  $kinder_slide_background ?: "#36AA0033"?>;
            --shadow: <?php echo  $kinder_shadow ?: "#000000A1"?>;
            --active-menu: <?php echo  $kinder_active_menu ?: "#CC8821"?>;

            
            --first-green-gradient: <?php echo $kinder_first_green_gradient ?: "#97E572B3"?>; /*70%*/
            --secondary-green-gradient: <?php echo $kinder_secondary_green_gradient ?: "#97E5724D"?>;
            
            
            --background-dark: #0D0D0D;
            /**Цвет  сообщения слайдера */
            --first-slide-background: <?php echo $kinder_first_slide_background ?: "#8F8F8FE6"?>;
            --second-slide-background: <?php echo  $kinder_second_slide_background ?: "#DAD9D9CC"?>;
            /**два градиентных цвета, заднего фона сообщения, слайдера */
            --search-gradient-first: <?php echo  $kinder_search_gradient_first ?: "#8F8F8F" ?>;
            --search-gradient-second: <?php echo  $kinder_search_gradient_second ?: "#C1C1C173" ?>;
            
            --message-gradient: linear-gradient(-45deg, var(--first-slide-background), var(--second-slide-background));
            --main-green-gradient: linear-gradient(-90deg, var(--first-green-gradient), var(--secondary-green-gradient));
            --grey-gradient: linear-gradient(-90deg, var(--search-gradient-first), var(--search-gradient-second));
            --menu-gradient: linear-gradient(-90deg, var(--main), var(--second_menu_gradient));

            --step: clamp(3rem, 20vw, 6.26rem);
            --bottombar-height: 4.375rem;
        }

        *{
            box-sizing: border-box;
        }

        body{
            background-color: var(--background);
        }

        .header-post{
            display: flex;
            padding: clamp( 1.125rem, 1.7vw, 1.5rem);
            background-color: var(--black-80);
            width: clamp(min(100%, 56rem), 66vw, 66vw);
            color: var(--background);
            position: fixed;
            top: 0;
            left: 50%;
            transform: translate(-50%);
        }.header-post>span{
            max-width: 600px;
        }
        .header-post__menu{
            display: flex;
        }.header-post__list{
            display: flex;  
        }


        .banner{
            width: 100%;
            height: 19.875rem;
            position: relative;
        }

        .banner__title{
            font-size: 2rem;
            padding: clamp(.875rem, 2.2vw, 1.375rem);
            width: 45%;
            border-radius: 10px;
            color: var(--background);
        }
        .banner__title_wrapper{
            display: flex;
            justify-content: end;
            position: absolute;
            width: clamp(min(72%, 56rem), 66vw, 66vw);
            left: 50%;
            bottom: 0;
            transform: translate(-50%, 50%);
        }

        .main__header{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .main__wrapper{
            max-width: 63.75rem;
        }

        .main__breadcrumbs{
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        .main__home{
            padding: .875rem;
        }

        .main__rubrics{
            padding: .5rem 1.375rem;
        }

        @media screen and (max-width: 800px){
            header.header-post{
                background-color: var(--main-dark);
                left: 0;
                transform: translate(0);
                width: 100%;
                z-index: 100;
                border-radius: 0;
            }
            .header-post__menu nav{
                display: none;
            }
        }

        @media screen and (max-width: 500px){
            div.main_flow{
                display: flex;
                flex-direction: column;
            }
            aside.main_flow__aside{
                width: 100%;
                position: fixed;
                top: 0;
                left: 50%;
                transform: translate(-150%);
                z-index: 101;
            }

            .banner{
                max-height: 16.8rem;
            }
            h1.banner__title{
                width: 100%;
                text-align: center;
            }
            .banner__title_wrapper{
                transform: translate(-50%, -2.8rem);
            }

            div.main__wrapper{
                padding: 0 1.125rem 4.375rem;
            }

            /*BREADCRUMBS block*/
            header.main__header{
                position: relative;
                transform: translateY(-50%);
                justify-content: center;
            }
            div.main__author_info{
                position: absolute;
                bottom: -3rem;
                flex-direction: row;
            }
            /* -- END of BREADCRUMBS -- */

            
        }
    </style>
    <?php 
        $page_description = get_field("kinder_seo_description");
        $page_description = ( $page_description && $page_description !=='') ? $page_description : get_the_excerpt();
    ?>
    <meta name="description" content="<?php echo ($page_description) ?>"/>
    <?php 

        $page_title = get_the_title();
        
        $url = get_the_permalink();
        ?>
        
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "WebPage",
                "name": "<?php echo $page_title ?>",
                "description": "<?php echo $page_description ?>",
                "url": "<?php echo $url?>",
                "mainEntity": {
                    "@type": "CreativeWork",
                    "name": "<?php echo $page_title ?>",
                    "description": "<?php echo $page_description ?>",
                    "text": "<?php the_content(); ?>"
                }
            }
        </script>
        <?php get_template_part("template-parts/seo", "header", [ 
            "page_description" => $page_description, 
            "page_title" => $page_title, 
            "url" => $url])?>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?> style="background-image: url( <?php echo kinder_get_background_image(); ?>);">