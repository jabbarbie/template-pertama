/*
  <Variable name="bgcolor1" description="Background Body" type="color" default="#fff"  value="#ff859f"/> 
  <Variable name="bgcolor2" description="Background Body" type="color" default="#fff"  value="#ff859f"/> 
  <Variable name="bgcolor3" description="Background Body" type="color" default="#fff"  value="#145374"/> 
  <Variable name="bgcolor4" description="Background Body" type="color" default="#fff"  value="#40514e"/> 


  <Variable name="maincolor" description="Warna Utama" type="color" default="#fff"  value="#006cb0"/> 
  <Variable name="hovercolor" description="Warna Hover Body" type="color" default="#fff"  value="#364f6b"/> 
  <Variable name="secondcolor" description="Warna Cadangan Body" type="color" default="#fff"  value="#00c9ca"/> 
  <Variable name="forgetcolor" description="Warna Cadangan Body" type="color" default="#fff"  value="#eeeeee"/> 

  <Variable name="font1" description="Font Body" type="font" default="400 1em Open Sans, serif" hideEditor="true"   value="400 1em Open Sans, serif"/>
  <Variable name="font2" description="Font Body" type="font" default="500 1em Merriweather, serif" hideEditor="true"   value="500 1em Merriweather, serif"/>

  */

  /*! STYLE DI SINI */
  :root {--satu: #ff2e63; --dua: #08d9d6; --tiga: #07689f; --empat: #f16821; --lebar: 76%}

  .jarakwidget {padding-left: 0.5em; padding-right: 0.5em} 
  * {margin: 0; padding:0}
  html {margin: 0; padding:0}
  body {
    background-color: #a7b9c2;
    font-size: 14px;
    font-family: 'Overpass', sans-serif;
    line-height: 1.5em;
  }
  a { text-decoration: none; color: #ddd; display: inline-block}
  a:hover {color: $secondcolor}
  ol {list-style: none}  
  ul,li {display : block}
  span {color: #999}
  b {color: #444}
  /*! Wrapper */
  .container {
    width: 80%; 
    margin: 0 auto ;
  }
  #wrapper { 
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(5px, auto);
    grid-gap: 1em;
    margin: auto;
    width: var(--lebar);
    background-color: #fff;
  }
  /*!  */
  header {
    text-align: center;
    height: 40px;
    color: #000;
    background: lightblue;
    min-height: 90px;
    max-height: 200px;
    padding: 4% 0 5% 0;
  }
  header > #headerputih {
    background-color: white;
    opacity: 0.7;
    padding: 0.6em 0;
  }
  header h1 {letter-spacing: 0.2em; vertical-align: middle; line-height: 40px; color: #000}
  header p {letter-spacing: 0.2em}
  /*! NAV */
  .atas {
    grid-column: 1 / 4 ;
    grid-row: 1;

    background-color: $maincolor;
    /*! background-image: linear-gradient(to bottom, $bgcolor1, $bgcolor2); */
    width: 100%;
    /*! position: sticky; */
    top: 0;
    z-index: 10;
  }
  #nav {
    display: flex;
    /*! position: sticky; */
    overflow: hidden;
    flex-direction: row;
    justify-content: flex-start;
    padding: 0; margin: auto;
  }
  /*! Aside */
  aside {
    grid-column: 3;
    grid-row: 2 / 4;
    padding-right: 1em;
  }
  /*! MAIN */  
  main {
    grid-column: 1 / 3;
    grid-row: 2 / 3;
    background-color: white; 
    padding: 0 1em;
    margin-bottom: 2%;
/*    box-shadow: 0 2px 2px rgba(0,0,0,0.16);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;*/
    /*box-shadow: 0 2px 2px rgba(0,0,0,0.16);*/
  }
  /*! Footer */
  
  footer {
    background-color: #002a32;
    position: relative;
    overflow: hidden;
    height: 220px;
    width: var(--lebar);
    margin: auto;
  }
  #footer {
    display: flex;
    flex-direction: flex-start;
    color: $forgetcolor;
  }
  #footer .widget {
    flex: 0 32%;
    height: 100px;
    margin: 1%;
    padding: 1%;
  }
  #footer .widget a{
    text-transform: capitalize;
  }
  #footer .widget > h2 {
    font-size: 1.1em;
    margin-bottom: 1%;
    position: relative;
  }
  #footer .widget img {
    display: none;
  }
  #footer .widget > h3::first-letter {
    color: $secondcolor;
    font-size: 150%;
    letter-spacing: 0.1em
  }
  .Profile img {
    display: inline-block;
    width: 30px;
    vertical-align: middle;
    margin-right: 1em;
  }
  .Profile .userw {
    display: flex;
    flex-direction: column;
  }
  .Profile .user {
    flex: 0 100%;
    position: relative;
    margin: 0.5% 0;
  }
  .Profile .user a {
    color: #eee;
    padding-left: 5%;
  }
  .user:before {
    position: absolute;
    content: ' ';
    top: 30%;
    width: 0.5em;
    height: 0.5em;
    background-color: $hovercolor;
    border-radius: 50%;
  }
  .creditw {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
    position: absolute;
    bottom: 0;
    background-color: #010101;
    color: #eee;
  }
  .copyright {
    flex: 0 50%
    /*border-top: 1px $forgetcolor solid;*/
    text-align: left;
    font-size: 0.5em; 
    margin-left: 1%;
  }
  .menuf {
    flex: 0 50%;
    text-align: right;
    font-size: 0.8em;
    margin-right: 1%;
  }
  .menuf a:not(:last-child):after {content: ' \002F'}
  .copyright a {
    color: $secondcolor;
  }
  .post {
    display: flex;
    overflow: hidden;
    flex-direction: column;
    background-color: $bgpost;
  }
  .post > a, article > a {
    display: block;
  }
  article {
    background-color: white;
    margin-bottom: 1%;
  }
  article:last-child {
    margin-bottom: 0;
  }
  h3.PostTitle {
    font-weight: 500;
  }
  h1.PostTitle {
    font-size: 0.6em;
  }
  .PostTitle a {
    margin-bottom: 8px;
    font-size: 0.9em;
    color: #444;
    font-weight: 600;
    text-transform: capitalize;
  }
  .PostHeader {
    font-size: 0.9em;
    color: #52616b;
    letter-spacing: 0.5px;
  }
  .postBodyBeranda {
    line-height: 1.5;
    font-size: 0.9em;
    color: #999;
    margin-bottom: 5%;
    font-weight: 300;
    height: calc(1.1em * 2);
    text-align: justify;
  }

  .nav {
    display: flex;
    overflow: hidden;
    flex-wrap: wrap;
    justify-content: center;
  }

  .nav a, .menuhp {
    display: block;
    text-decoration: none;
    color: #fff;    
    text-align: center;
    padding: 1em;
    line-height: 1;
    text-transform: uppercase;
  }
  .menuhp {display: none}

  #nav form {margin: 0; position: relative}
  #nav form > input[type="text"]{
    border: none;
    background-color: #485f78;
    color: #fff;
    transition: 1s ease-in-out;
    font-size: 1em;
    padding: 0.5em;
    line-height: 2;
    /*margin: calc(1em / 2);*/
    width: 70px;
    text-align: left;
    position: relative;
  }
  #nav form > input[type="text"]:hover,
  #nav form > input[type="text"]:focus {
    width: 200px;
    border-radius: 0;
    opacity: 1;
  }


  .nav a:hover, .active {background-color: $hovercolor; color: white;}
  /*! END NAV */
  /*! POST BERANDA */
  .Beranda {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 2em;
  }
  .PostKiri {
    flex: 1;
    position: relative;
  } 
  .PostKanan {flex: 1; line-height: 0.5}
  .PostKiri img {
    width: 100%;
  }
  .postLabelBeranda {
    position: absolute; 
    left: 0.3em;
    top: 0.3em; 
    background-color: $maincolor; 
    padding: 1px 5px; 
    color: white;
    font-size: 0.9em;
    font-weight: 550;
  }
  /* POST DETAIL */
  .PostDetail {
    overflow: hidden;
    margin: 1% 0;
    padding-bottom: 1%;
    font-size: 1em;
    margin: auto;
  }
  .thumbpost {
    width: 60%;
    margin: 0 20%;
  }
  h1.PostTitle {
    font-size: 1.5em;
    line-height: 1em;
    color: $hovercolor;
    line-height: 1.5;
    letter-spacing: 0.2px;
  }
  .PostDetailBody {
    font-size: 1em;
    line-height: 2.1;
    margin-top: 2%;
    margin-bottom: 2%;
  }
  .PostDetailBody a {
    color: $secondcolor;
    font-weight: 500;
    margin-bottom: 3%;
  }
  .PostDetailBody h2 {
    font-size: 1.5em;
    line-height: 2;
    color: $hovercolor;
  }
  .PostDetailBody img {
/*    width: 100%;
    height: 100%;*/
  }
  .PostDetailBody blockquote {
    display: block;
    background-color: skyblue;
    margin: 2% auto;
    width: 70%;
    font-size: 1.3em;
  }
  #detail {
    display: flex;
    margin: 1% 0;
    padding: 1% 0;
    font-size: 0.9em;
    width: 100%;
  }
  .detaillandscape {
    flex-direction: column;
  }

  .informasi {
    flex: 1;/*
    border-top: 2px #fc5185 dotted;
    border-bottom: 2px #fc5185 dotted;*/
  }
  .landscape .informasi {
    width: 70%;
    margin: 0 15%;
  }
  .informasi td {
    border-top: 1px #eee dotted;
  }
  .informasi td:nth-child(even){
    font-weight: 520;
  }
  #detail img {
    flex: 1;
    max-width: 150px ;
    margin-right: 1em;
  }
  .detaillandscape img {
    width: 70%;
    margin: 4% 15%;
    max-width: 600px !important;
  }
  .bordermanhua {
    /*border-right: 2px #fc5185 solid;*/
  }
  .informasi tbody{
    margin: 0 2em;
  }
  .informasi tr td:first {
    font-weight: bold;
  } 
  ol.rekomendasi {
    list-style: outside decimal;
/*    padding-left: 0em;*/
    text-align: justify;
  }
  .rekomendasi li {
    font-size: 1.3em;
    display: list-item;
    font-weight: bold;
    margin-top: 1%;
    margin-left: 0.5em;
    text-align: center;
  }
  .rekomendasi p {line-height: 1.8em}
  .rekomendasi span {
    color: #000;
  }
  .rekomendasi img {
    max-width: 100%;
    height: 100%;

  }
  /*! Block Komentar */
  #layout {
    background-color: red !important;
  }
  #comments {
    background: transparent;
  }
  .comments-content {
  }
  #top-ra {
    background-color: transparent;
    list-style: none;
  }
  #top-ra li {

  }
  #top-ra a {
    color: #ddd;
  }
  #top-ra ol {
    list-style: none;
  }
  #comment-thread ol {
    list-style: none;
    padding-left: 0;
  }
  .avatar-image-container {
    display: none;
  }

  .comment-block {
    /*! Div per komen */
    background-color: skyblue;
    padding: 1% 1% 2% 1%;
    z-index : 2;
  }
  .comment-header {
    /*! Username Komen */
    font-size: 1.1em; 
    position: relative;
    background-color: #b1e8ed;
    padding: 1%;
  }
  cite.user {
    font-style: normal;
    font-weight: bold;
  }
  cite.user > a {
    color: #5e6073 !important;
  }
  .comment-header .datetime {
    /*! Tanggal Komen */
    position: absolute;
    right: 1%;    
  }
  .comment-header .datetime > a {
    color: #5e6073 !important;
  } 
  
  .item-control {
    margin-left: 1%;
  }

  /*! Widget General */
  aside .widget {
    margin-bottom: 1em;
    padding: 0;

/*    box-shadow: 0 2px 2px rgba(0,0,0,0.16);*/
  }
  .widget .title {
    /*background-color: $maincolor;*/
    /*border-top-left-radius: 0.4em;*/
    /*border-top-right-radius: 0.4em;*/

  }
  aside .widget h3 {
    border-bottom: 1px solid #ddd;
    font-size: 1.2em; 
    /*color: #fff;*/
    font-weight: 600;
    padding: 0.5em 0.5em;
    text-transform: uppercase;
    /*letter-spacing: 0.1em;*/
  }
  /*aside .widget h3:before{
    position: absolute;
    width: 10px;
    height: 100%;
    top: 0px;
    left: 0;
    color: $secondcolor;
    display: inline-block;
    z-index: -0;
    font-family: "Font Awesome 5 Free"; font-weight: 900;content: "\f358";
  }*/
  .widget-content {
    /*padding: 1em;*/
  }

  aside ul {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: flex-start;
  }
  aside li {
    padding: 2px 5px;
    /*background-color: $hovercolor;*/
    margin: 3px;
    border: 1px solid #add8e6;
  }
  aside li a {
    color: #000;
    font-weight: 200;
  }
  /*! Popular Posts */
  .widgetputih {
    background-color: white;
/*    box-shadow: 0 2px 2px
    rgba(0,0,0,0.16);*/
    margin-bottom: 10px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
  .isi:nth-child(2n+1) {background-color: #fafafa}
  .isi:nth-last h4 {border: 0;}
  .pops .judul {}
  .pops a {color: inherit}
  .pops .isi .gambar {flex: 0 20%; margin: 0 1%; max-width: 50px}
  .pops img {width: 50px}
  .pops h4 {font-weight: 500; padding: 0.5em 0.5em; border-bottom: 1px dotted gray;}
  .pops .labelpops {font-size: 0.8em}
  .pops .labelpops span:not(last-child){}
  /*! Label */
  .bels ul {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    flex: 0 30%;
    justify-content: center;
    padding: 0.5em;
  }
  /*! Breadcrumbs */
  #breadcrumbs {
    color: #ddd;
    border-bottom: 1px solid #ccc;
    padding-bottom: 0.5%;
    font-size: 1em;
  }
  #comments {display:none;}
  .post-comment-link { visibility: hidden; }

  /* Keperluan Ads */
  .adsbygoogle{ display: block;}
  .has-vertical-ads .centered .centered-bottom{ display: inline-block; width: 100% }
  /*! Next Prev */
  .linkku {margin: 30px 0; }
  .sebelum, .sesudah {padding: 0.8% 1% !important; color: white !important; font-weight: 600}
  .sebelum {background-color: $secondcolor; float: left}
  .sesudah {background-color: $hovercolor; float: right}
  .clear {clear: both}
  aside .AdSense {
    box-shadow: none !important;
    padding: 0 0.5em;
  }

  /*! Startx */
  #startx {
    margin-right: 2%;
    margin-bottom: 5%;
    display: flex;
    font-size: 1.2em;
    height: auto;
  }
  #startx .kiri, #startx .kanan {
    flex: 0 50%;
    padding: 0.5em; 
    /*text-shadow: -1px -1px 1px #111, 2px 2px 1px #363636;   */
  }
  #startx .kiri {
    color: $hovercolor;
    text-align: right;
    border-left: 3px solid $hovercolor;
    border-top: 3px solid $hovercolor;
    border-bottom: 3px solid $hovercolor;
  }
  #startx .kanan {
    color: $secondcolor;
    border-top: 3px solid $secondcolor;
    border-right: 3px solid $secondcolor;
    border-bottom: 3px solid $secondcolor;
  }
  #startx .kiri a {color: $hovercolor;}
  #startx .kanan a {color: $secondcolor;}

  #paggination {
    clear: inherit;
    display: block;
    width: 100%;
    margin-top: 1%;
  }
  #paggination .next {
    float: right;
  }
  #paggination .prev {
    float: left;
  }
  #paggination a {  
    padding: 0.2em 0.5em;
    background-color: $secondcolor;
    color: white;
    font-size: 0.8em;
  }