<?php include('title.php') ?>
<?php 
	$thumbnail = "https://2.bp.blogspot.com/-jzRScNk43hE/XRBW-4eV12I/AAAAAAAAPwU/fkL4AWCq0jUxEhCOnyxxgz16GGKCEJTFACLcBGAs/s1600/Thumbnail_Logo.jpg";
?>
<!-- Otomatis -->
<!-- <b:include data='blog' name='all-head-content'/> -->
<!-- end otomatis-->

<meta content='width=device-width, initial-scale=1, shrink-to-fit=yes' name='viewport'/>



<!-- Index halaman -->
<b:if cond='data:view:isSingleItem or data:view:isHomePage'>
	<meta content='index, follow' name='robots' />
</b:if>

<b:if cond='data:blog.postImageThumbnailUrl'>
	<meta expr:content='data:blog.postImageThumbnailUrl' property='og:image'/>
<b:else/>
	<meta content='https://2.bp.blogspot.com/-jzRScNk43hE/XRBW-4eV12I/AAAAAAAAPwU/fkL4AWCq0jUxEhCOnyxxgz16GGKCEJTFACLcBGAs/s1600/Thumbnail_Logo.jpg' property='og:image'/>
</b:if>

<!-- Jika Posisi Halaman -->
<!-- single post -->
<b:if cond='data:blog.metaDescription and data:view.isSingleItem'>
	<meta expr:content='data:blog.metaDescription' property='og:description'/>  
</b:if>


<!-- Handle Thumbnail-->
<!-- View Beranda -->
<b:if cond='data:view.isMultipleItems'>
	<link href='<?= $thumbnail?>' rel='image_src'/>
	<link expr:href='data:view.featuredImage' rel='image_src' />
	<meta expr:content='data:view.featuredImage' property='og:image' />
	
	<meta content='200' property='og:image:width'/>
  <meta content='200' property='og:image:height'/>
<!-- View Post -->
<b:elseif cond='data:view.isSingleItem'/>
	<!-- with thumbnail -->
	<b:if cond='data:view.featuredImage'>
		<link expr:href='data:view.featuredImage' rel='image_src' />
		<meta expr:content='data:view.featuredImage' property='og:image' />
	
	<b:else/>
	<!-- no thumbnail -->
		<link expr:href='<?= $thumbnail?>' rel='image_src' />
		<meta expr:content='<?= $thumbnail?>' property='og:image' />
	</b:if>

	<meta content='200' property='og:image:width'/>
  <meta content='200' property='og:image:height'/>
</b:if>
<!-- end of handle thumbnail -->

<!-- Facebook selain thumbnail -->
<meta expr:content='data:blog.canonicalUrl' property='og:url'/>
<meta content='article' property='og:type'/>
<meta expr:content='data:blog.title' property='og:title'/>
<meta expr:content='data:blog.title' property='og:site_name'/>
<b:if cond='data:view.isMultipleItems'>
	<meta content='website' property='og:type'/>
<b:else/>
  <meta content='article' property='og:type'/>
</b:if>
<!-- end Facebook -->


<!-- Meta generator -->
<meta content='blogger' name='generator'/>
<!-- end Meta generator -->
<meta content="Jabbar Bie" name="author" />
<link href="Jabbar Bie" ref="author" />

<!-- dns-prefetch -->
<link href="//www.blogger.com/" rel="dns-prefetch"/>
<link href='https://1.bp.blogspot.com/' rel='dns-prefetch'/>
<link href='https://2.bp.blogspot.com/' rel='dns-prefetch'/>
<link href='https://3.bp.blogspot.com/' rel='dns-prefetch'/>
<link href='https://4.bp.blogspot.com/' rel='dns-prefetch'/>

<link href='//cdn.statically.io/' rel='dns-prefetch'/>

<link href='//disqus.com' rel='dns-prefetch'/>
<link href='//c.disquscdn.com' rel='dns-prefetch'/>

<!-- end of dns-prefetch-->


<link href='https://fonts.googleapis.com/css?family=Overpass' rel='stylesheet'/> 

<!-- Bootstrap CSS -->
