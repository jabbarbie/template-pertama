<!DOCTYPE html>
<html b:version='2'  b:defaultwidgetversion='2' b:responsive='true' class='v2' b:layoutsVersion='3' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>
  <b:include data='blog' name='all-head-content'/>
  <title><data:blog.pageTitle/></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <b:skin version='1.3.0'> <![CDATA[
  /* Definisi Variable nya Disini  
    
    */
  *, .section, .hfeed{
  	padding: 0;
  	margin:0;
	}
	ul, ol {
		list-style-type: none;
	}
	h1,h2,h3,h4,h5,h6{
		padding: 0;
		margin:0;
	}
  body {
  	background-color: #F4F5F6;
  	font-size: 12px;
  	font-family: 'Open Sans', sans-serif;
	}
  .wrapper {
  	width: 80%;
  	margin: 0 auto;
  	background-color: #fff;
	}
  main {
    width: 60%;
    float: left;
  }
  .post-outer-container {
  	background-color: #fff;
  	padding: 1% 3%;
  	margin: 2% 0;
  	border: 1px solid #DDD;
	}
  main .post-title {
  	margin: 1% 0;
  	overflow: hidden;
  	max-height: 40px;
	}
  main h3 a{
  	color: #666 !important;
  	font-size: 1em;
  	line-height: 1em;
  	text-decoration: none;
  	text-transform: capitalize;

  	font-family: "Chilanka";
	}
	.post-body p {
		text-align: justify;
		line-height: 1.6em;
		margin: 1% 0;
	}
  aside {
  	width: 35%;
  	float: right;

  	font-family: 'Open Sans', sans-serif;
	}
	/* Pendukungnya */
	aside {
		margin-top: 1%;
	}
	aside .widget {
  	background-color: #fff;
  	padding: 5%;
  	border: 1px #ddd solid;
	}
  .hfeed {
  }
  .post-outer-container {
  }
  .PopularPosts {
  	background-color: lime;
	}
	.PopularPosts ul {
		padding: 0;
	}
	.PopularPosts ul li{
		border-bottom: 1px #ddd dotted;

	}
	.PopularPosts ul li a{
		line-height: 30px;
		width: 100%;
		color: purple;
		text-transform: capitalize;
		font-size: 1em; 
	}
  .labelx span{
  	position: absolute;
  	top: 5%;
  	width: auto;
  	height: auto;
  	padding: 5px 20px;
  	color: #666;
  	background-color: skyblue;
 
  	opacity: 0.6;

  	font-size: 1.2em;
	}
	.labels-outer {
		position: relative;
	}
  /* Popular Posts */


  ]]></b:skin>

  <b:defaultmarkups>  
    <b:defaultmarkup type="Common">
      <b:includable id="cekHalaman">
        <b:comment>Disable Dulu</b:comment>
      </b:includable>
    </b:defaultmarkup>

    <b:defaultmarkup type="Blog">

      <b:includable id="main" var="this" >
        <b:tag name='div'>
        <b:class name='blog-posts hfeed container' cond='data:view.isMultipleItems'/>
            <b:include name="cekHalaman" />      
            
            <b:loop values="data:posts" var="x">

              <b:tag name='article'>
                  <b:class name='post-outer-container' />
                      <div class='post-outer'>
                        <div class="post">
                          <b:include name="isiPost" data="x" />                         
                        </div>
                      </div>
              </b:tag>

            </b:loop>
        </b:tag>
      </b:includable>
    
      <b:includable id="isiPost" var="x">
        <b:tag name='h3'>
          <b:class name='post-title entry-title' />
          <a expr:href='data:x.url' >
          	<!-- <b:eval expr='data:x.title.size gt 10? "kecil" : "besar" ' /> -->
          	<data:x.title />
          </a>
        </b:tag>
        <b:tag name="div">
          <b:include name="LabelDiBeranda" data="x" />

        	<b:class name="labels-outer" />
        	<img expr:src='resizeImage(data:x.featuredImage,700,"4:2")' width="100%"/>
        </b:tag>
        <b:tag name='div'>
          <b:class name='post-body entry-content float-container' />
          <b:attr name='id' value='postid' />
  
          <p><b:eval  expr='data:view.isMultipleItems ? data:x.body snippet { length: 300, linebreaks: false} : data:x.snippets.long' /></p>
        </b:tag>

      </b:includable>
      <b:includable id="LabelDiBeranda" var="x">
      <div class="labelx">
      	<span><data:x.labels.last.name /></span>      	
      </div>
      </b:includable>
    </b:defaultmarkup>
    
     <b:defaultmarkup type="PopularPosts">
    	<b:includable id="main" var="this">
    		<b:tag name="ul">
	    		<b:loop values="data:posts" var="x" index="i">
	    			<li>
	    				<a expr:href="data:x.url">
	    					<data:x.i /> <data:x.title />
	    				</a>
	    			</li>
	    		</b:loop>
	    	</b:tag>
    	</b:includable>
    </b:defaultmarkup>
  </b:defaultmarkups>

</head>
<body>
  <div class="wrapper">
<!--   	<header>
  		<b:section id="Header" showaddelement="yes" name="Header">
  			<b:widget id="Header1" type="Header" />
  		</b:section>
  	</header> -->
    <main>
      <b:section id="NamaID" showaddelement="yes" name="Tempat Menambahkan Widget">
        <b:widget id="Blog1" type="Blog" title="Tempat Post Main"/>

      </b:section>    
    </main>
    <aside>
      <b:section id="aside" showaddelement="yes" name="Sidebar" >
      	<b:widget id="PopularPosts1" type="PopularPosts" title="PopularPosts" />
      </b:section>

    </aside>
    <footer>
      
    </footer>  
  
  </div>

</body>
</html>

