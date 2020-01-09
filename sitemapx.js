<script src="https://raw.githubusercontent.com/xsate/template-pertama/master/sitemapx.js"></script>

<script src="http://asadako-kun.blogspot.com/feeds/posts/default?max-results=9999&amp;alt=json-in-script&amp;callback=loadtoc">
</script>



<script src="https://cdn.rawgit.com/D-dig/js/gh-pages/sitemap3.js"></script>

<br />
<h3>Review Anime</h3>
<ul>
<script src="http://asadako-kun.blogspot.com/feeds/posts/default/-/Review?orderby=published&amp;alt=json-in-script&amp;callback=startpost&amp;max-results=999"></script></ul>
<br />

<h3>Feng ni tian xia</h3>
<ul>
<script src="http://asadako-kun.blogspot.com/feeds/posts/default/-/Feng ni tian xia?orderby=published&amp;alt=json-in-script&amp;callback=startpost&amp;max-results=999"></script></ul>
<br />

<h3>King Of Apocalypse</h3>
<ul>
<script src="http://asadako-kun.blogspot.com/feeds/posts/default/-/King Of Apocalypse?orderby=published&amp;alt=json-in-script&amp;callback=startpost&amp;max-results=999"></script></ul>
<br />

<h3>Rekomendasi</h3>
<ul>
<script src="http://asadako-kun.blogspot.com/feeds/posts/default/-/Rekomendasi?orderby=published&amp;alt=json-in-script&amp;callback=startpost&amp;max-results=999"></script></ul>
<br />


var numposts = 100;
var standardstyling = true;


function startpost(json){
  for (var i = 0; i < numposts; i++){
    var entry = json.feed.entry[i];
    var posttitle = entry.title.$t;
    var posturl;
    
    if (i == json.feed.entry.length) break;
    
    for (var k = 0; k < entry.link.length; k++){
      if (entry.link[k].rel == 'alternate'){
        posturl = entry.link[k].href;break;
      }
    }
        
    posttitle = posttitle.link(posturl);
    if (standardstyling) document.write('<li>');
    
    document.write(posttitle);
  }
  
  if (standardstyling) document.write('</li>');
}
