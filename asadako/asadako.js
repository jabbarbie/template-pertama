document.addEventListener('DOMContentLoaded', function() {
  let lazyImages = [].slice.call(document.querySelectorAll('img.lazy'));
  let active = false;

  const lazyLoad = function() {
    if (active === false) {
      active = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          if ((lazyImage.getBoundingClientRect().top &lt;= window.innerHeight &amp;&amp; lazyImage.getBoundingClientRect().bottom   &gt;= 0) &amp;&amp; getComputedStyle(lazyImage).display !== 'none') {
            
            lazyImage.src = lazyImage.dataset.src;


            lazyImage.srcset = lazyImage;
            lazyImage.classList.remove('lazy');

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener('scroll', lazyLoad);
              window.removeEventListener('resize', lazyLoad);
              window.removeEventListener('orientationchange', lazyLoad);
            }
          }
        });

        active = false;
      }, 200);
    }
  };

  document.addEventListener('scroll', lazyLoad);
  window.addEventListener('resize', lazyLoad);
  window.addEventListener('orientationchange', lazyLoad);
});
