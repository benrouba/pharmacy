 const swiper = new Swiper(".swiper", {
//     // Optional parameters
     direction: "horizontal",
     loop: true,
     slidesPerView: 4,
     spaceBetween: 20,
     autoplay: {
         delay: 2000,
     },
     breakpoints: {
//         // when window width is >= 320px
         320: {
             slidesPerView: 1,
         },
         // when window width is >= 480px
         480: {
             slidesPerView: 2,
         },
         // when window width is >= 640px
         640: {
             slidesPerView: 4,
         },
     },
 });
$(document).ready(function () {
    // console.log($(".form-check-input:checkbox"));
    $(".form-check-input:checkbox").bind("change", function (e) {
        if ($(this).is(":checked")) {
          window.location.href = "/products?category=" + $(this).attr('id');
        } else {
            console.log("unchecked");
            window.location.href = "/products";
        }
    });
});

$(document).ready(function () {
    var $easyzoom = $('.easyzoom').easyZoom();
    var api1 = $easyzoom.filter('.easyzoom--with-thumbnails').data('easyZoom');

});
