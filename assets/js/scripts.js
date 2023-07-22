console.log("%c ✦  Made By ES design studio ✦ ", "background:#C89862;padding:5px 15px;border-radius:5px; color:#FFFFFF;");

// ------------------------
// 轉場動畫
// ------------------------
window.onpageshow = function() {
    setTimeout(() => {
        $('.page').addClass('show');
        $('.header').addClass('show');
        $('.footer').addClass('show');
        $('.carousel_con').addClass('show');
        $('.productmenu').addClass('show');
        $('.add_to_cart_btn').addClass('show');
        $('.cart_info').addClass('show');
    }, 500);
};
