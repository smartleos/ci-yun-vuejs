console.log("%c ✦  Made By ES design studio ✦ ", "background:#C89862;padding:5px 15px;border-radius:5px; color:#FFFFFF;");
// ------------------------
// global
// ------------------------
$(function() {
    console.log('HTML Ready')

    // esNotification('success', 'Success', 'This is a success message')

    $('.footer__back').on('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        })
    })

    const createPopup = (url) => {
        const popup = document.createElement('div')
        popup.classList.add('popup', 'container')
        popup.innerHTML = `
            <div class="grid">
                <figure class="col-2-12-medium">
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
    }
    // ------------- products -------------

    // ------------- products-categories -------------
    if ($('.page-products-categories').length) {
        $('select[name="products_categories"]').on('change', function() {
            // redirect to products page
            window.location.href = `/products-categories/${$(this).val()}`
        })
    }
    // ------------- products-categories -------------
});