<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        <title>welcome - your site title</title>
        <?php include './file-php/partials/metadata.php' ?>
    </head>

    <!-- variable.php -->
    <?php include './file-php/_variables.php' ?>

    <!--body -->
    <body>
        <!-- page loader -->
        <div class="loader" style="display: none;">
            <!-- dot -->
            <div class="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
        <div id="__next" class="bg-white overflow-hidden">

            <!-- header -->
            <?php include './file-php/layouts/main-header.php' ?>

            <!-- start wrapper -->
            <div id="main-wrapper" class="main-wrapper flex flex-col">

                
            </div>
            <!-- end wrapper -->

            <!-- footer -->
            <?php include './file-php/layouts/main-footer.php' ?>
        </div>
        
        <!-- script js -->
        <?php include './file-php/partials/scripts.php' ?>

        <!-- swiper js -->
        <script>
                
            //set global variable
            var swpSwiper;
            
            //swiper full width
            function swiperCarousel() {
                
                const swSwiper      = document.querySelectorAll('.swp-full-width .swiper-container');
                const prevSwiper    = document.querySelectorAll('.swp-full-width .swp-btn-prev');
                const nextSwiper    = document.querySelectorAll('.swp-full-width .swp-btn-next');

                if(swSwiper.length > 1) {

                    for(i = 0; i < swSwiper.length; i++) {

                        swSwiper[i].classList.add('swiper-'+ i);
                        prevSwiper[i].classList.add('swiper-prev-'+ i);
                        nextSwiper[i].classList.add('swiper-next-'+ i);

                        swpSwiper = new Swiper(".swp-full-width .swiper-"+ i, {
                            spaceBetween: 0,
                            slidesPerView: 1,
                            loop: true, 
                            a11y: true,
                            breakpoints: {
                                992: {
                                    spaceBetween: 16,
                                    slidesPerView: 3,
                                    slidesPerGroup: 3,
                                },
                                1200: {
                                    spaceBetween: 16,
                                    slidesPerView: 4,
                                    slidesPerGroup: 4,
                                }
                            },
                            navigation: {
                                nextEl: ".swp-full-width .swiper-next-"+ i,
                                prevEl: ".swp-full-width .swiper-prev-"+ i
                            },
                        });
                    }
                }else {
                   
                    swpSwiper = new Swiper(".swp-full-width .swiper-container", {
                        spaceBetween: 0,
                        slidesPerView: 1,
                        loop: true,
                        a11y: true,	
                        breakpoints: {
                            992: {
                                spaceBetween: 16,
                                slidesPerView: 3,
                                slidesPerGroup: 3,
                            },
                            1200: {
                                spaceBetween: 16,
                                slidesPerView: 4,
                                slidesPerGroup: 4,
                            }
                        },
                        navigation: {
                            nextEl: ".swp-full-width .swp-btn-next",
                            prevEl: ".swp-full-width .swp-btn-prev"
                        },
                    });
                }
            }

            jQuery(document).ready(function($) {

                var swiperMd = new Swiper(".swiperMd .swiper-container", {
                    spaceBetween: 16,
                    slidesPerView: 1,
                    loop: true,
                    navigation: {
                        nextEl: ".swiperMd-next",
                        prevEl: ".swiperMd-prev"
                    },
                });

                var swiperLg = new Swiper(".swiperlg .swiper-container", {
                    spaceBetween: 16,
                    slidesPerView: 1,
                    loop: true,
                    breakpoints: {
                        992: {
                            spaceBetween: 16,
                            slidesPerView: 3,
                            slidesPerGroup: 3,
                        },
                        1200: {
                            spaceBetween: 16,
                            slidesPerView: 4,
                            slidesPerGroup: 4,
                        }
                    },
                    navigation: {
                        nextEl: ".swiperlg-next",
                        prevEl: ".swiperlg-prev"
                    },
                });

                //remove mmenu when click a href
                $('.mm-listitem__text').click(function(){
                    $('.mm-wrapper').removeClass('mm-wrapper--opened');
                    $('.mm-menu').removeClass('mm-menu--opened');
                    $('#main-wrapper').removeAttr('inert');
                });
            });
        </script> 
    </body>
    <!-- end body -->
</html>