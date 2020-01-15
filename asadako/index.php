<?php
// konfigurasi
$adsense = false;

?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:css='false' b:defaultwidgetversion='2' b:layoutsVersion='3' b:responsive='true' b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr' xmlns:og='http://ogp.me/ns#'>
<head>
	<?php include("header.php") ?>
  <b:skin version='1.3.0'><![CDATA[
	<?php include("css.php") ?>
	<?php include("cssmobile.php") ?>

  ]]></b:skin>

<b:defaultmarkups><?php //require('defaultmarkup.php') ?></b:defaultmarkups>
<!-- JS -->
<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'/>
<?php //include('adsense') ?>
<b:if cond='data:blog.pageType == &quot;item&quot;'>
  <script async='async' src='//asadako-kun.disqus.com/blogger_item.js'/>
</b:if>

<!-- Template Tata Letak -->
<b:if cond='data:view.isLayoutMode'>
<b:template-skin>
<![CDATA[
  #layout {
    padding: 0;
  }
  #layout #wrapper {
    width: 100%;
    display: flex;
    background-color: lightblue;
  }    
  #layout main {
    padding: 0;
    flex: 0 0 65%;
  }
]]>
</b:template-skin>
</b:if>


</head>
<body>
<?php include('body.php') ?>
<script> <?php include('js.php') ?> </script>

</body>
</html>