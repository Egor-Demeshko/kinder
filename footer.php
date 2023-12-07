<footer class="footer">
    <div class="footer__wrapper">
        <?php 
            if(is_dynamic_sidebar()) {
                dynamic_sidebar('footer_sidebar');
            }
        ?>

        <?php 
            if(has_nav_menu('footer_menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu',
                        'container' => '<div>',
                        'container_class' => 'footer__menu_wrapper',
                        'menu_class' => 'footer__menu',
                        'walker' => new Footer_Menu()
                    )
                );
            }
        ?>

        <svg class="footer__icon" width="100" height="63" viewBox="0 0 100 63" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M86.8323 11.3292C83.4534 17.3913 79.4534 26.6584 77.6646 38.3851C76.7453 35.2795 75.6522 31.9255 74.4348 28.4969C78.2857 21.0683 82.4348 15.3292 86.8323 11.3292ZM73.3168 1.91304C71.7516 5.11801 70.0124 9.19255 68.3975 14.0373C67.8261 12.8696 67.2547 11.7516 66.6584 10.6832C68.795 7.22981 71.0311 4.29814 73.3168 1.91304ZM32.5963 1.86335C34.2112 3.52795 35.7764 5.46584 37.3168 7.65217C36.795 8.09938 36.2733 8.57143 35.7516 9.06832C34.6832 6.3354 33.6149 3.92547 32.5963 1.86335ZM13.1429 11.3043C16.9193 14.7081 20.4969 19.4286 23.8509 25.3665C22.8075 27.3292 21.8137 29.3168 20.8944 31.3043C18.8323 22.9068 15.7764 16.0994 13.1429 11.3043ZM8.64596 62.087C11.528 44.5466 5.26708 30.8075 0 22.7826C7.13043 28.1988 12.4472 36.4224 16.0248 43.4037C13.0683 51.8012 11.3292 58.9814 10.6335 62.087H8.64596ZM26.1366 62.087H20.1739H14.7081C16.7205 53.6149 24.4472 24.6708 39.0807 11.3789C33.6646 21.118 26.559 38.9814 29.7888 62.087H26.1366ZM33.8137 62.087C33.0186 56.6211 32.8447 51.4286 33.118 46.5839C35.3789 53.2671 36.8447 59.0062 37.5652 62.087H33.8137ZM39.1056 52.323C37.8634 48.0994 36.2236 43.0559 34.1118 37.7391C34.8075 33.7143 35.7764 30.0124 36.8696 26.6335C38.6584 35.0807 39.4286 43.6522 39.1056 52.323ZM42.3354 62.087C44.0745 47.8012 43.0807 33.6894 39.3789 20.0497C40.1739 18.1863 40.9938 16.472 41.7888 14.9565C45.0683 20.9938 48.1242 28.323 50.9068 36.7453C47.2547 48.0994 45.1429 58.236 44.3975 62.087H42.3354ZM60.9689 52.2981C60.8447 55.5031 60.5466 58.7826 60.1491 62.087H59.9255H48.4224C49.2671 57.7888 51.3789 48.0745 54.8571 37.3416C56.1242 33.441 57.4658 29.764 58.882 26.2857C59.2547 28.1491 59.5776 30.0373 59.8509 31.9255C60.8447 38.559 61.2174 45.4161 60.9689 52.2981ZM65.8882 62.087H64.1739C64.5714 58.8323 64.8199 55.6025 64.9441 52.4472C65.2174 45.3168 64.8199 38.2112 63.8012 31.354C63.2298 27.354 62.4099 23.3789 61.4161 19.5279C61.4161 19.4783 61.3913 19.4286 61.3913 19.3789C59.3043 11.2547 56.646 4.7205 54.4099 0C57.2422 3.00621 59.9752 6.85714 62.6087 11.5776C64.0745 14.1863 65.5155 17.0932 66.882 20.2236C66.9068 20.2733 66.9068 20.323 66.9317 20.3727V20.3975C68.1491 23.1304 69.3168 26.0373 70.4099 29.0435C73.2671 36.9938 75.3789 44.5714 76.646 49.7143C74.3851 55.2298 72.9689 59.8012 72.323 62.087H65.8882ZM91.3292 62.087H81.7888H79.8012H76.4721C78.6832 54.7826 86.1615 33.2174 100 22.7578C94.7081 30.7578 88.4472 44.5217 91.3292 62.087Z"/>
        </svg>
    </div>
</footer>

<?php wp_footer(); ?>
</body>