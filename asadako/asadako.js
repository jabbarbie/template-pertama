document.addEventListener(&quot;DOMContentLoaded&quot;, function() {
  let lazyImages = [].slice.call(document.querySelectorAll(&quot;img.lazy&quot;));
  let active = false;

  const lazyLoad = function() {
    if (active === false) {
      active = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          if ((lazyImage.getBoundingClientRect().top &lt;= window.innerHeight &amp;&amp; lazyImage.getBoundingClientRect().bottom   &gt;= 0) &amp;&amp; getComputedStyle(lazyImage).display !== &quot;none&quot;) {
            
            lazyImage.src = lazyImage.dataset.src;


            lazyImage.srcset = lazyImage;
            lazyImage.classList.remove(&quot;lazy&quot;);

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener(&quot;scroll&quot;, lazyLoad);
              window.removeEventListener(&quot;resize&quot;, lazyLoad);
              window.removeEventListener(&quot;orientationchange&quot;, lazyLoad);
            }
          }
        });

        active = false;
      }, 200);
    }
  };

  document.addEventListener(&quot;scroll&quot;, lazyLoad);
  window.addEventListener(&quot;resize&quot;, lazyLoad);
  window.addEventListener(&quot;orientationchange&quot;, lazyLoad);
});
