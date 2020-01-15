<b:defaultmarkup type='Common'>
  <b:includable id='title' var='x'>
    <div class='title'>
      <h3><data:x/></h3>        
    </div>
  </b:includable>
  
</b:defaultmarkup>

<b:defaultmarkup type='Blog'>
  <!-- B CONSTRUCTOR -->
  <b:includable id='main'>
    <div>
      <b:class cond='data:view.isMultipleItems' name='Beranda'/>
      <b:loop index='i' values='data:posts' var='x'>
        <b:include data='x' name='PostMain'/>
        <b:if cond='data:x.includeAd'>
          <b:include cond='data:view.isMultipleItems and data:view.isHomepage and data:x.includeAd' data='x' name='postIklan'/>  
        </b:if>
      </b:loop>
    </div>
      <b:include cond='data:view.isMultipleItems and !data:view.isLabelSearch' name='Paggination'/>


  </b:includable>

  <!-- B CEK POSISI HALAMAN -->
  <b:includable id='PostMain' var='x'>
    <b:switch var='data:blog.pageType'>
      <b:case value='index'/>
        <b:include data='x' name='Beranda'/>
      <b:case value='item'/>
        <b:include data='x' name='PostDetail'/>
      <b:case value='static_page'/>
        <b:include data='x' name='PostDetail'/>

    </b:switch>
  </b:includable>

  <!-- B HALAMAN INDEX -->
  <b:includable id='Beranda' var='x'>
    <article>
    <a expr:href='data:x.url'>
      <div class='post'>
        <!-- ThumbnailPost Index-->
        <div class='PostKiri'>
          <h2 expr:class='&quot;postLabelBeranda &quot; + data:x.labels.first.name'><data:x.labels.first.name/></h2>
          <b:if cond='data:x.featuredImage'>
            <b:include data='data:x.featuredImage' name='FungsiGambar'/>     
          <b:else/>
            Kosong
          </b:if>
        </div>
        <!-- Snippet Body Post Index-->
        <div class='PostKanan'>
          <b:include data='data:x' name='PostTitle'/>
          <b:include data='data:x' name='FungsiPost'/>
          <b:comment>
              <b:include data='data:x' name='PostFooter'/>                    
          </b:comment>
        </div>          
      </div>
      </a>
    </article>
  </b:includable>

  <!-- B Detail Post-->      
  <b:includable id='PostDetail' var='x'>
    <div class='PostDetail'>
      <b:include data='x' name='postMeta'/>
      <b:include data='data:x' name='PostTitle'/>
      <b:include data='data:x' name='Breadcrumbs'/>

      <div class='PostDetailBody'>
        <data:x.body/>           
      </div>
      <div class='clear'>
      
      </div>
      <b:include cond='data:view.isPost' name='postIklan'/>
      <b:include data='x' name='disqusx'/>

      <b:comment>
        <b:include cond='data:view.isPost' data='x' name='postDetailFooter'/>
          
      </b:comment>
    </div>
  </b:includable>

  <!-- B Post Footer  -->
  <b:includable id='PostFooter' var='x'>
    <div class='PostHeader'>
      <b:class name='PostHeader'/>
      <span>
        <i class='far fa-user'/><b><data:x.author.name/> </b> |
        <i class='far fa-clock'/> <data:x.date/>
      </span>
    </div>
  </b:includable>

  <!-- B Post Detail Footer -->
  <b:includable id='postDetailFooter' var='x'>
    <div class='post-footer'>
      <b:include data='x' name='postTerkait'/>         
    </div> 
  </b:includable>

  <!-- B Paggination -->
  <b:includable id='Paggination'>
    <div id='paggination'>
      <b:include cond='data:newerPageUrl' name='previousPageLink'/>
      <b:include cond='data:olderPageUrl' name='nextPageLink'/>
      <b:include cond='data:view.url != data:blog.homepageUrl' name='homePageLink'/>
    </div>
  </b:includable>
  <b:includable id='previousPageLink'>
    <a class='prev' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:messages.newerPosts'>
     <i class='fas fa-arrow-alt-circle-left'/> Sebelumnya
    </a>
  </b:includable>
  <b:includable id='nextPageLink'>
    <a class='next' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:messages.olderPosts'>
      Selanjutnya <i class='fas fa-arrow-alt-circle-right'/>
    </a>
  </b:includable>
  <b:includable id='homePageLink'>
    <b:comment>Disabled</b:comment> 
  </b:includable>

  <!-- B Post Terkait -->
  <b:includable id='postTerkait' var='x'>
    <h1>Related Post</h1>
    <div id='related-wrap'>
      <div class='title-wrap'>
        <h3><data:messages.youMayLikeThesePosts/></h3>
      </div>
      <div class='related-ready'>
        <data:x.title/>
        <b:if cond='data:x.labels'>
          <div class='related-tag' expr:data-label='data:x.labels.first.name'/>
        <b:else/>
          <div class='related-tag' data-label='random'/>
        </b:if>
      </div> 
    </div>  
  </b:includable>
  <!-- B Post Label / Kategori -->
  <b:includable id='PostLabel' var='x'>
    <div class='label'>
      <b:loop values='data:x' var='label'>
        <span><a expr:href='data:label.url'><data:label.name/></a> / </span>
      </b:loop>  
    </div>
  </b:includable>

  <!-- B FUNGSI CEK GAMBAR -->
  <b:includable id='FungsiGambar' var='pic'>
    <b:if cond='data:view.isMultipleItems or data:view.isHomepage'>
      <img expr:src='resizeImage(data:pic, 330, &quot;330:220&quot;)'/>
    </b:if>
  </b:includable>

  <!-- B FUNGSI POST -->
  <b:includable id='FungsiPost' var='x'>
    <div>
      <b:if cond='data:view.isHomepage or data:view.isMultipleItems'>
        <b:eval cond='data:view.isHomepage' expr='data:x.snippets.long snippet {length: 100, links: false, linebreaks: false, ellipsis: true}'/>
        <b:class name='postBodyBeranda'/>
      </b:if>
    </div>
  </b:includable>
  <!-- B Meta Post-->
  <b:includable id='postMeta' var='post'>
    <b:include data='post' name='postMetadataJSON'/>
  </b:includable>

  <!-- Iklan / Adsense -->
  <b:includable id='postIklan' var='x'>
    <b:if cond='!data:view.isPreview'>
      <div class='postIklan'>          
      <!-- Jika bukan dalam mode preview -->
      <b:if cond='data:this.adCode or data:this.adClientId or data:blog.adsenseClientId'>
        <!-- Jika Iklan tersedia / siap untuk ditayangkan -->
        <b:if cond='data:this.adCode != &quot;&quot; '>
          <!-- Jika code adsense tidak kosong -->
          <data:this.adCode/>
        <b:else/>
          <b:include name='defaultAdUnit'/>
          <!-- defaultAdUnit fungsi bawaan -->
        </b:if>
        
      <b:else/>
        <!-- Jika iklan 404 -->
        <div class='postIklan404'>
          <span><b:message name='messages.adsGoHere'/></span>
        </div>
      </b:if>
      </div>
    </b:if>

  </b:includable>
  <!-- Breadcrumbs -->
  <b:includable id='Breadcrumbs' var='post'>
  <!-- Post Breadcrumbs -->
    <nav id='breadcrumbs'>
      <a expr:href='data:blog.homepageUrl'><data:messages.home/></a>
      <b:if cond='data:post.labels'>
        /
        <a class='b-label' expr:href='data:post.labels.first.url'> <data:post.labels.first.name/></a>
      </b:if>
      /
      <span class='current'><data:post.title/></span>
    </nav>
    <script type='application/ld+json'>
    {
      &quot;@context&quot;: &quot;http://schema.org&quot;,
      &quot;@type&quot;: &quot;BreadcrumbList&quot;,
      &quot;@id&quot;: &quot;#Breadcrumb&quot;,
      &quot;itemListElement&quot;: [{
        &quot;@type&quot;: &quot;ListItem&quot;,
        &quot;position&quot;: 1,
        &quot;item&quot;: {
          &quot;name&quot;: &quot;<data:messages.home/>&quot;,
          &quot;@id&quot;: &quot;<data:blog.homepageUrl.jsonEscaped/>&quot;
        }
      },{
        &quot;@type&quot;: &quot;ListItem&quot;,
        &quot;position&quot;: 2,
        &quot;item&quot;: {
          &quot;name&quot;: &quot;<b:if cond='data:post.labels'><data:post.labels.first.name/></b:if>&quot;,
          &quot;@id&quot;: &quot;<data:post.labels.first.url.jsonEscaped/>&quot;
        }
      },{
        &quot;@type&quot;: &quot;ListItem&quot;,
        &quot;position&quot;: 3,
        &quot;item&quot;: {
          &quot;name&quot;: &quot;<data:post.title/>&quot;,
          &quot;@id&quot;: &quot;<data:post.url.jsonEscaped/>&quot;
        }
      }]
    }
  </script>
</b:includable>

  <!-- W Disquss -->
  <b:includable id='disqusx'>
    <script type='text/javascript'>
      var disqus_shortname = &#39;asadako-kun&#39;;
      var disqus_blogger_current_url = &quot;<data:blog.canonicalUrl/>&quot;;
      if (!disqus_blogger_current_url.length) {
      disqus_blogger_current_url = &quot;<data:blog.url/>&quot;;
      }
      var disqus_blogger_homepage_url = &quot;<data:blog.homepageUrl/>&quot;;
      var disqus_blogger_canonical_homepage_url = &quot;<data:blog.canonicalHomepageUrl/>&quot;;
    </script>
    <div id='comments'>
    
    </div>
  </b:includable>
</b:defaultmarkup>    

<!-- K Fungsi Komen -->

<!-- Komentar Judul -->

<!-- /K Fungsi Komen-->
<b:defaultmarkup type='Blog, PopularPosts'>
  <!-- B Judul Post-->
  <b:includable id='PostTitle' var='x'>
    <b:if cond='data:view.isMultipleItems'>
      <h3 class='PostTitle entry-title'><a expr:href='data:x.url'><data:x.title/></a></h3>
    <b:else/>
      <h1 class='PostTitle entry-title'><data:x.title/></h1>
    </b:if>

  </b:includable>

</b:defaultmarkup>
<!-- WIDGET -->
<b:defaultmarkup type='PopularPosts'>
  <b:includable id='main' var='x'>
    <b:class name='widgetputih'/>
    <b:include data='data:title' name='title'/>
    <div class='widget-content'> 
      <div class='pops'>
        <b:loop index='i' values='data:posts' var='x'>
          <div class='isi'>
            <div expr:class='data:x.labels.first.name'/>
            
            <div class='judul'>
            
              <h4>
                <a expr:href='data:x.url'>
                  <b:eval expr='data:x.title'/>                  
                </a>
              </h4>

              <b:comment>
              <div class='labelpops'>
                <b:loop index='id' values='data:x.labels' var='y'>
                  <span><b:evaldata.id/> <b:evaldata:y.name/> /</span>
                </b:loop>
              </div>
              </b:comment>
            </div>

          </div>
        </b:loop>
      </div>
   </div>
  </b:includable>
</b:defaultmarkup>

<!-- W Labels -->
<b:defaultmarkup type='Label'>
  <b:includable id='main'>
    <b:include data='data:title' name='title'/>
    <b:class name='bels'/>
    <b:class name='widgetputih'/>

    <ul>
      <b:loop index='i' values='data:labels' var='l'>
        <li expr:class='data:l.name'><a expr:href='data:l.url'>
          <data:l.name/></a></li>
      </b:loop> 
    </ul>
  </b:includable>
</b:defaultmarkup>

<!-- W AdSense Sidebar -->
<b:defaultmarkup type='AdSense'>
  <b:includable id='main'>
    <div class='widget-content'>
    <b:if cond='data:adCode'>
      <data:adCode/>
    <b:else/>
      <b:include name='defaultAdUnit'/>
    </b:if>
    </div>
  </b:includable>
</b:defaultmarkup>
<!-- W Profil -->

<b:defaultmarkup type='Profile'>
  <b:includable id='main'>
    <h3><data:title/></h3>
      <b:if cond='data:team'>
        <div class='userw'>
          <b:loop index='m' values='data:authors' var='u'>
            <div class='user'>            
              <img cond='data:u.profileLogo' expr:src='resizeImage(data:u.authorPhoto.image, 30, &quot;1:1&quot;)'/>
              <a expr:href='data:u.userUrl'><data:u.display-name/></a>
            </div>

          </b:loop>
        </div>

      </b:if>
  </b:includable>
</b:defaultmarkup>

<b:defaultmarkup type='LinkList'>
  <b:includable id='main' var='x'>
  <h3>Rekomendasi</h3>
  <ul>
    <b:loop values='data:links' var='link'>
      <li><a expr:href='data:link.target'><data:link.name/></a></li>
    </b:loop>
  </ul>
  </b:includable>
</b:defaultmarkup>

