// jQuery(function (){
//   jQuery(".p-slideIn-Out__button").click(function(){
//     jQuery(".l-sidebar, .l-fixed, .l-fixed__background").toggleClass("is-active");
//     jQuery(".l-sidebar").css("transition","0.5s")
//   })
// });

jQuery(".p-slideIn-Out__button").click(function(){
  jQuery(".l-sidebar, .l-fixed, .l-fixed__background").toggleClass("is-active");
  jQuery(".l-sidebar").css("transition","0.5s")
  });

  const windowWidth = jQuery(window).width();
  jQuery(window).resize(function(){
    const ww = jQuery(window).width();
    if(windowWidth !== ww){
      jQuery(".l-sidebar, .l-fixed, .l-fixed__background").removeClass("is-active");
      jQuery(".l-sidebar").css("transition","none");
    }
  });

  !(function () {
    const viewport = document.querySelector('meta[name="viewport"]');
    function switchViewport() {
      const value =
        window.outerWidth > 360
          ? 'width=device-width,initial-scale=1'
          : 'width=360';
      if (viewport.getAttribute('content') !== value) {
        viewport.setAttribute('content', value);
      }
    }
    addEventListener('resize', switchViewport, false);
    switchViewport();
  })();

