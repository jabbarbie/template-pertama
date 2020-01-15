
@media (max-width: 992px){
body {font-size: 14px}    
#wrapper {width: 100%; grid-gap: 0px; padding: 0}
main {grid-column: 1 / 4; padding: 1em 0; }
aside {grid-row: 3; grid-column: 1 / 4}
.Beranda {grid-gap: 0.5em}

.PostTitle a {font-size: 0.7em; text-align: center; line-height: 1.5}
.postLabelBeranda {line-height: 1.5; font-size: 0.7em}
.PostKanan {padding: 0 5px}
.postBodyBeranda {display: none;}

.PostDetail {
  padding: 0 0.5em;
}
.PostDetailBody {
  font-size: 1.2em; 
  line-height: 2;

}

#startx {margin: 1em}
footer {grid-row: 4; height: auto}
footer:after {display: none;}
#footer {flex-direction: column; min-height: 220px}
.container {width: 100%}
.creditw {flex-direction: column}
.creditw, .menuf {text-align: center}

ol.rekomendasi {
  list-style: inside decimal;
/*    padding-left: 0em;*/
}
.rekomendasi li {
  background-color: lightblue;
  margin: 0;
  padding: 0;
}
#detail img {
  flex: 2;
  width: 100%;
  max-width: 250px !important;
  margin: auto;
}
.rekomendasi p {line-height: 1.8em}
.rekomendasi span {
  color: #000;
}
.rekomendasi img {
  width: 100%;
  height: 100%;
}

aside .widget {
  margin: 0.5em 0.5em;
  /*box-shadow: 0 2px 2px rgba(0,0,0,0.16);*/

}
.widget .title {
  background-color: $maincolor;
  border-top-left-radius: 0.4em;
  border-top-right-radius: 0.4em;
}
aside .widget h3 {
  text-align: center;
  
}

}
@media (max-width: 768px){
header {display: none;}
body {background-color: white}
#wrapper {width: 100%;}
.nav a {
  overflow-y: scroll;
}   
.nav li{
  flex: 0 0 30%;    
}
#detail {
  flex-direction: column;
}
.informasi {width: 100%}
.thumbpost {
  width: 100%
  margin: auto;
}
/*! Tablet - Pablet 
.post {flex-direction: column; max-height: 100vh;}
article {margin: 0}

.nav {display: none;}
.menuhp {display: block; background-color: #4CAF50}    
.nav {flex-wrap: wrap;}
.nav li {flex: 0 50%;}

#nav {flex-wrap: wrap; flex-direction: column;}
#nav form > input[type="text"]{
  width: 100%;
}
.wrapper {width: 100%}      

.bukasitik {
  display: flex;
}

/*! End Menu HP */
}
@media (max-width: 576px; background-color: green){
/*! HP */
}

.Manhua {background-color: var(--satu)}
.Manhwa {background-color: var(--dua)}
.Rekomendasi {background-color: var(--empat)}

