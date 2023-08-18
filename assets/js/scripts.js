console.log("%c ✦  Made By ES design studio ✦ ", "background:#C89862;padding:5px 15px;border-radius:5px; color:#FFFFFF;");
// ------------------------
// global
// ------------------------
$(function() {
    console.log('HTML Ready')

    // esNotification(
    //     'success',
    //     '成功',
    //     '您已成功登入',
    //     '取消',
    //     '確認',
    //     () => {console.log('cancel')},
    //     () => {console.log('confirm')}
    // )

    $('.footer__back').on('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    })

    if ($('#cart-bottom').length) {
        $('.header__service').addClass('-cart')
    }

    const createPopup = (url) => {
        const popup = document.createElement('div')
        popup.classList.add('popup', 'container')
        popup.innerHTML = `
            <div class="grid">
                <figure class="col-2-12-tablet col-1-5-mobile">
                    <svg class="pop__close" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18"><path d="M15.364 17.485 9 11.121l-6.364 6.364-2.121-2.121L6.879 9 .515 2.636 2.636.515 9 6.879 15.364.515l2.121 2.121L11.121 9l6.364 6.364-2.121 2.121Z" fill="#000"/></svg>
                    <img src="${url}" alt="">
                </figure>
            </div>
        `
        document.body.appendChild(popup)
        document.body.style.overflow = 'hidden'

        setTimeout(() => {
            popup.classList.add('-active')
        }, 1);

        $('.pop__close').on('click', function() {
            popup.classList.remove('-active')
            setTimeout(() => {
                $('.popup').remove()
                document.body.style.overflow = 'auto'
            }, 301);
        })
    }

    // ------------- header -------------
    $('.header__membcart-search').on('click', function() {
        $('.header__search').toggleClass('-active')
    })
    $('.header__mobile-search').on('click', function() {
        $('.header__search').toggleClass('-active')
    })
    $('#cancel_search').on('click', function(event) {
        event.preventDefault()
        $('.header__search').removeClass('-active')
    })
    $('.header__mobile-hamburger').on('click', function() {
        $('.header__nav').toggleClass('-active')
        $('.header').toggleClass('-active')
    })
    // ------------- header -------------

    // ------------- form -------------
    if ($('.show-password').length) {
        $('.show-password').each(function() {
            $(this).on('click', function() {
                const password = $(this).siblings('input')
                if (password.attr('type') === 'password') {
                    password.attr('type', 'text')
                } else {
                    password.attr('type', 'password')
                }
            })
        })
    }
    // ------------- form -------------

    // ------------- search -------------
    if ($('.page-search').length) {
        $noResult = false;
        if ($noResult) {
            $('#products').hide()
            $('#news').hide()
            $('#no_result').show()
        } else {
            $('#products').show()
            $('#news').show()
            $('#no_result').hide()
        }
    }
    // ------------- search -------------

    // ------------- index -------------
    if ($('.page-index').length) {
        new Swiper('.page-index__kv-swiper-clip', {
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.page-index__kv-swiper-pagination',
                clickable: true,
            },
        })

        new Swiper('.page-index__navigation', {
            slidesPerView: 'auto',
            spaceBetween: 24,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.page-index__navigation-bottom-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.page-index__navigation-bottom-control-next',
                prevEl: '.page-index__navigation-bottom-control-prev',
            },
        })

        new Plyr('#index-player')
    
        $('.announcement-card__btn').each(function() {
            $(this).on('click', function() {
                const url = $(this).attr('data-url')
                createPopup(url)
            })
        })
    }
    // ------------- index -------------

    // ------------- about -------------
    if ($('.page-about').length) {
        new Swiper('.page-about__navigation', {
            slidesPerView: 'auto',
            spaceBetween: 24,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.page-about__navigation-bottom-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.page-about__navigation-bottom-control-next',
                prevEl: '.page-about__navigation-bottom-control-prev',
            },
        })

        $('#scenery_tab').on('click', function() {
            if (!$('#scenery').hasClass('-show')) {
                $('#environment').removeClass('-show')
                $('#scenery').addClass('-show')
                $('#scenery_tab .button').removeClass('-transparent').removeClass('-outline')
                $('#environment_tab .button').addClass('-transparent').addClass('-outline')
            }
        })

        $('#environment_tab').on('click', function() {
            if (!$('#environment').hasClass('-show')) {
                $('#scenery').removeClass('-show')
                $('#environment').addClass('-show')
                $('#environment_tab .button').removeClass('-transparent').removeClass('-outline')
                $('#scenery_tab .button').addClass('-transparent').addClass('-outline')
            }
        })

        $('.about-card__btn').each(function() {
            $(this).on('click', function() {
                const url = $(this).attr('data-url')
                createPopup(url)
            })
        })
    }
    // ------------- about -------------

    // ------------- charity -------------
    if ($('.page-charity').length) {
        $('.page-charity__wrapper-content-list > li').each(function() {
            $(this).on('click', function() {
                if ($(this).hasClass('-active')) {
                    $(this).removeClass('-active')
                    $(this).children('.page-charity__wrapper-content-list-accordion').removeClass('-active')
                    $(this).children('.page-charity__wrapper-content-list-accordion').css('max-height', 0)
                } else {
                    $(this).addClass('-active')
                    const height = $(this).children('.page-charity__wrapper-content-list-accordion').prop('scrollHeight')
                    $(this).children('.page-charity__wrapper-content-list-accordion').toggleClass('-active')
                    $(this).children('.page-charity__wrapper-content-list-accordion').css('max-height', height)
                }
            })
        })

        new Plyr('#charity-player')
    }
    // ------------- charity -------------

    // ------------- service -------------
    if ($('.page-service').length) {
        $('.page-service__content-qna > li').each(function() {
            $(this).on('click', function() {
                if ($(this).hasClass('-active')) {
                    $(this).removeClass('-active')
                    $(this).children('.page-service__content-qna > li > ul').removeClass('-active')
                    $(this).children('.page-service__content-qna > li > ul').css('max-height', 0)
                } else {
                    $(this).addClass('-active')
                    const height = $(this).children('.page-service__content-qna > li > ul').prop('scrollHeight')
                    $(this).children('.page-service__content-qna > li > ul').toggleClass('-active')
                    $(this).children('.page-service__content-qna > li > ul').css('max-height', height)
                }
            })
        })
    }
    // ------------- service -------------

    // ------------- products -------------
    if ($('.page-products').length) {
        $('select[name="products_categories"]').on('change', function() {
            switch ($(this).val()) {
                case 'all':
                    $('[data-category]').each(function() {
                        $(this).addClass('-show')
                    })
                    break;
                case '精緻代拜組':
                    $('[data-category]').each(function() {
                        $(this).removeClass('-show')
                        if ($(this).attr('data-category') === '精緻代拜組') {
                            $(this).addClass('-show')
                        }
                    })
                    break;
                case '精緻代拜組2':
                    $('[data-category]').each(function() {
                        $(this).removeClass('-show')
                        if ($(this).attr('data-category') === '精緻代拜組2') {
                            $(this).addClass('-show')
                        }
                    })
                    break;
            }
        })

        if (window.innerWidth < 768) {
            $('.swiper').each(function() {
                new Swiper($(this)[0], {
                    slidesPerView: 'auto',
                    spaceBetween: 16,
                    navigation: {
                        nextEl: $(this).find('.-next')[0],
                        prevEl: $(this).find('.-prev')[0],
                    },
                })
            })
        }
    }
    // ------------- products -------------

    // ------------- products-categories -------------
    if ($('.page-products-categories').length) {
        $('select[name="products_categories"]').on('change', function() {
            window.location.href = `/products-categories/${$(this).val()}`
        })
    }
    // ------------- products-categories -------------

    // ------------- products-single -------------
    if ($('.products-single').length) {
        new Swiper('.products-single__swiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 24,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.products-single__swiper-bottom-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.products-single__swiper-bottom-next',
                prevEl: '.products-single__swiper-bottom-prev',
            },
        })

        new Swiper('.products-single__recommend-swiper', {
            loop: true,
            slidesPerView: 2,
            spaceBetween: 16,
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
            navigation: {
                nextEl: '.products-single__recommend-swiper-navigation-next',
                prevEl: '.products-single__recommend-swiper-navigation-prev',
            },
        })

        new Plyr('#products-player')

        $('.products-single__information-btns-item:first-child').on('click', function() {
            $('.products-add-cart').addClass('-active')
            $('.products-add-cart__bottom-item:last-child > a > p')[0].innerText = '加入購物車'
        })

        $('.products-single__information-btns-item:last-child').on('click', function() {
            $('.products-add-cart').addClass('-active')
            $('.products-add-cart__bottom-item:last-child > a > p')[0].innerText = '立即結帳'
        })

        $('.products-add-cart__close').on('click', function() {
            $('.products-add-cart').removeClass('-active')
        })

        $('.products-add-cart__bottom-item > svg:first-child').on('click', function() {
            let num = parseInt($(this).siblings('input').val())
            if (num > 1) {
                num--
                $(this).siblings('input').val(num)
            }
        })

        $('.products-add-cart__bottom-item > svg:last-child').on('click', function() {
            let num = parseInt($(this).siblings('input').val())
            num++
            $(this).siblings('input').val(num)
        })
    }
    // ------------- products-single -------------

    // ------------- news-single -------------
    if ($('.news-single').length) {
        $('#news_facebook').on('click', function() {
            const url = window.location.href
            esShareTo(url, 'Facebook')
        })
        $('#news_line').on('click', function() {
            const url = window.location.href
            esShareTo(url, 'Line')
        })
        $('#news_twitter').on('click', function() {
            const url = window.location.href
            esShareTo(url, 'Twitter')
        })
    }
    // ------------- news-single -------------

    // ------------- cart-confirm -------------
    if ($('.page-cart-confirm').length) {
        $('.page-cart-confirm__cart-shipment-btn').on('click', function() {
            $('.page-cart-confirm__popup').addClass('-active')
            $(this).find('p').text('重選取貨門市')
        })
        $('.page-cart-confirm__popup-wrapper-close').on('click', function() {
            $('.page-cart-confirm__popup').removeClass('-active')
        })
        $('#shipment_confirm').on('click', function() {
            $('.page-cart-confirm__popup').removeClass('-active')
        })
    }
    // ------------- cart-confirm -------------

    // ------------- cart-information -------------
    if ($('.page-cart-information').length) {
        $('input[name="same"]').on('change', function() {
            if (this.checked) {
                const buyerName = $('#buyer_name').val();
                const buyerGender = $('input[name="buyer_gender"]:checked').val();
                const buyerPhone = $('#buyer_phone').val();
                const buyerAddress = $('#buyer_address').val();

                $('#receiver_name').val(buyerName);
                $(`input[name="receiver_gender"][value="${buyerGender}"]`).prop('checked', true);
                $('#receiver_phone').val(buyerPhone);
                $('#receiver_address').val(buyerAddress);
            } else {
                // clear
                $('#receiver_name').val('');
                $(`input[name="receiver_gender"]`).prop('checked', false);
                $('#receiver_phone').val('');
                $('#receiver_address').val('');
            }
        })
    }
    // ------------- cart-information -------------

    // ------------- cart-completed -------------
    if ($('.page-cart-completed').length) {
        // fail
        const fail = false
        if (fail) {
            $('.page-cart-completed__wrapper').addClass('-hide')
            $('.page-cart-completed__bottom').addClass('-hide')
        } else {
            $('.page-cart-completed__fail').addClass('-hide')

            // popup
            $('.page-cart-completed__popup').addClass('-active')
            $('.page-cart-completed__popup-wrapper-close').on('click', function() {
                $('.page-cart-completed__popup').removeClass('-active')
            })
            $('.page-cart-completed__popup-wrapper-btn').on('click', function() {
                $('.page-cart-completed__popup').removeClass('-active')
            })
        }
    }
    // ------------- cart-completed -------------

    // ------------- member-coupon -------------
    if ($('.page-member-coupon').length) {
        $('#my_btn').on('click', function() {
            $(this).find('button')[0].classList.remove('-transparent')
            $(this).find('button')[0].classList.remove('-outline')
            $('#get_btn').find('button')[0].classList.add('-transparent')
            $('#get_btn').find('button')[0].classList.add('-outline')
            $('.page-member-coupon__my').addClass('-active')
            $('.page-member-coupon__get').removeClass('-active')
        })

        $('#get_btn').on('click', function() {
            $(this).find('button')[0].classList.remove('-transparent')
            $(this).find('button')[0].classList.remove('-outline')
            $('#my_btn').find('button')[0].classList.add('-transparent')
            $('#my_btn').find('button')[0].classList.add('-outline')
            $('.page-member-coupon__my').removeClass('-active')
            $('.page-member-coupon__get').addClass('-active')
        })
    }
    // ------------- member-order-information -------------

    // ------------- member-order-information -------------
    if ($('.page-member-order-information').length) {
        $('.page-member-order-information__card-item-btn').each(function() {
            $(this).on('click', function() {
                if ($(this).hasClass('-active')) {
                    $(this).removeClass('-active')
                    $(this).siblings('.page-member-order-information__card-item-list').css('max-height', 0)
                    $(this).find('p')[0].innerHTML = '查看祈福人資訊'
                } else {
                    $(this).addClass('-active')
                    const height = $(this).siblings('.page-member-order-information__card-item-list').prop('scrollHeight')
                    $(this).siblings('.page-member-order-information__card-item-list').css('max-height', height)
                    $(this).find('p')[0].innerHTML = '收合祈福人資訊'
                }
            })
        })
    }
    // ------------- member-order-information -------------

    // ------------- member-common -------------
    if ($('.page-member-common').length) {
        $('.page-member-common__list-btn').each(function() {
            $(this).on('click', function() {
                $('.page-member-common__list').removeClass('-active')
                $('.page-member-common__form').addClass('-active')
            })
        })
        $('.form__btns-item').each(function() {
            $(this).on('click', function() {
                $('.page-member-common__list').addClass('-active')
                $('.page-member-common__form').removeClass('-active')
            })
        })
    }
    // ------------- member-common -------------
});