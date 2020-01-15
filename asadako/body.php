<b:class cond='data:view.isMobile' name='mobilex' />
<div itemscope='itemscope' itemtype='http://schema.org/Blog'>
  
  <div id="wrapper">
    <div class="atas">

    <header>
      <div id="headerputih">
        <h1>ASADAKO-KUN</h1>
        <p>Review - Translate Manga Manhwa Manhua</p>
      </div>

    </header>
  
    	<nav id="nav">
        <a onclick="bukasitik()" class='menuhp'><i class="fa fa-home"></i> Menu</a>
        <ul class="nav" >
          <li><a expr:href="data:blog.homepageUrl" class='active'>Home</a></li>
          <li><a href="/p/blog-page.html">About Us</a></li>
          <li><a href="/search/label/Manhwa">Manhwa</a></li>
          <li><a href="/search/label/Manhua">Manhua</a></li>
          <li><a href="/search/label/Rekomendasi" >Rekomendasi</a></li>
        </ul>
        <div class="pencarian menuhp">
          <form action="/search"><input type="text" placeholder="Pencarian..." name="q" /></form>
        </div>
      </nav>
    </div>

		<main>
			<b:section id='main' showaddelement='yes'>
      	<b:widget id='Blog1' type='Blog'/>
    	</b:section>
		</main>
		
    <aside>
      <b:if cond='data:view.isHomepage'>
        <div id="startx">
          <div class="kiri">
            <a href='/search/label/Manhwa'><h2>Manhwa</h2></a>
            <h4>Korea</h4>
          </div>
          <div class="kanan">
            <a href='/search/label/Manhua'><h2>Manhua</h2></a>
            <h4>China</h4>
          </div>
        </div>
      </b:if>
			<b:section id='aside' showaddelement='yes'>
				<b:widget id='PopularPosts1' type='PopularPosts' title='Artikel Teratas' />
				<b:widget id='Label1' type='Label' title="Kategori" />

		<?php if ($adsense): ?>  
        <b:widget id='AdSense1' type='AdSense' title="Iklan Sidebar">
          <b:widget-settings>          
            <b:widget-setting name='style.layout'>300x1050</b:widget-setting>
            <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
          </b:widget-settings>
        </b:widget>
    	<?php endif;?>
			</b:section>

		</aside>
    
  </div>  
</div> <!-- End of Wrapper -->
  <footer>
    <div class='container'>
      <b:section id='footer' showaddelement='yes'>
        <b:widget id='Profile1' type='Profile' title='Penulis' />
        <b:widget id='LinkList1' type='LinkList' title='Rekomendasi'>
          <b:widget-settings>
            <b:widget-setting name='text-0'>Rekomendasi Anime Yuri</b:widget-setting>
            <b:widget-setting name='link-0'>https://asadako-kun.blogspot.com/2016/01/rekomendasi-anime-yuri.html</b:widget-setting>
          </b:widget-settings>
        </b:widget>
      </b:section> 
    </div>
    
    <div class="creditw">
      <div class="copyright">
        <h2>Copyright 2019 <a href="mailto:krotopal@gmail.com">ASADAKO-KUN</a> All Right Reserved - Powered by <a href='https://blogger.com'>BLOGGER</a></h2>  
      </div>
      <div class="menuf">
        <a href="/p/blog-page.html">About Me</a>
        <a href="/p/contact-form.html">Contact </a>
        <a href="/p/privacy-policy.html">Privacy Policy</a>
        <a href="/p/disclaimer.html">Disclaimer</a>
        <a href="/p/sitemap.html">Sitemap</a>
      </div>
    </div>
  </footer>

<!-- JS -->
