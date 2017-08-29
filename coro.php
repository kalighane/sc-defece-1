

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
var uid = '151910';
var wid = '322081';
</script>
<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
 <link rel="shortcut icon" type="image/x-icon" href="http://ujare.com/wp-content/uploads/2017/06/HUT-RI-72-A.png" />

<meta content='HAPPY HUT RI KE 72'/>
<meta content='17 AGUSTUS 1945'/>
<meta content='HaCkeD By KaliGhanE'/>
<meta name="title" content="HaCkeD BY KaliGhanE">
<meta name="description" content="Coro Terbang Team">
<meta name="keywords" content="HaCkeD BY KaliGhanE">

<!-- /deskripsi site -->

<!-- Title -->
<script type="text/javascript">
function tb8_makeArray(n){
this.length = n;
return this.length;
}
tb8_messages = new tb8_makeArray(4);
tb8_messages[0] = "HAPPY HUT RI KE 72";
tb8_messages[1] = "KaliGhanE";
tb8_messages[2] = "17 AGUSTUS 1945";
tb8_messages[3] = "Hecked.??";
tb8_rptType = 'infinite';
tb8_rptNbr = 5;
tb8_speed = 100;
tb8_delay = 200;
var tb8_counter=1;
var tb8_currMsg=0;
var tb8_tekst ="";
var tb8_i=0;
var tb8_TID = null;
function tb8_pisi(){
tb8_tekst = tb8_tekst + tb8_messages[tb8_currMsg].substring(tb8_i, tb8_i+1);
document.title = tb8_tekst;
tb8_sp=tb8_speed;
tb8_i++;
if (tb8_i==tb8_messages[tb8_currMsg].length){
tb8_currMsg++; tb8_i=0; tb8_tekst="";tb8_sp=tb8_delay;
}
if (tb8_currMsg == tb8_messages.length){
if ((tb8_rptType == 'finite') && (tb8_counter==tb8_rptNbr)){
clearTimeout(tb8_TID);
return;
}
tb8_counter++;
tb8_currMsg = 0;
}
tb8_TID = setTimeout("tb8_pisi()", tb8_sp);
}
tb8_pisi()
</script>

<!-- /title -->

<style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/nature/nat-1/nat30.ani), url(http://cur.cursors-4u.net/nature/nat-1/nat30.png), progress;}</style><a href="http://www.cursors-4u.com/cursor/2005/05/08/nat30-11.html" target="_blank" title="Finding Nemo"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Cursor Coro" style="position:absolute; top: 0px; right: 0px;" /></a>

<!-- Ketik -->
<style type="text/css">
body{
  background-color: black;
	background-image: url('');
	background-size: cover;
	
}
b{
	font-size: 20px;
	color: white;
	text-shadow:red 2px 2px 10px;
}

#message font strong {
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        color:white;
        text-shadow:blue 0px 0px 1px;
}
#message font {
        font-size: 15px;
        
}

img
{ 
-moz-transition:all .4s ease-in-out;
-ms-transition:all .4s ease-in-out;
-o-transition:all .4s ease-in-out;
-webkit-transition:all .8s ease-in-out
;transition:all .8s ease-in-out;
}
#img:hover
{
 -o-transform: scale(1.5) rotate(360deg);
 -moz-transform: scale(1.5) rotate(360deg);
 -webkit-transform: scale(1.5) rotate(360deg);
}

-->
</style>

 <script type="text/javascript">
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined")/ (typeof element.innerHTML == "undefined")) {
    this.running = true;
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
 if(this.running) return;
 if(typeof this.origText == "undefined") {
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
   return;
 }
 if(this.currentText == "") this.element.innerHTML = "";
 if(this.currentChar < this.origText.length) {
   if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
     this.tagBuffer = "<";
     this.inTag = true;
     this.currentChar++;
     this.run();
     return;
   } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
     this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
     this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
     this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursorx == "function" ? this.cursor(this.currentText) : this.cursor) : "");
   this.currentChar++;
   setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
 } else {
        this.currentText = "";
        this.currentChar = 0;
       this.running = false;
       this.finishedCallback();
 }
}
</script>



</head>
<body>
</br>
<center>
<b><img id="img" src="https://cdn.yukepo.com/content-images/main-images/2017/05/21/main_image_8675.jpg" /></b>
</br>
<font style="color: white ; text-shadow: red 2px 2px 10px "><h1>Powned By KaliGhanE </h1></font>
<p id="message" align="center"><font color="white"> <strong>
<br><b>Jayalah Indonesiaku merdeka ke 72 </b> <br><br>
Merah darahku merupakan ungkapan jika semangat <br>
yang berkorbarTak akan padam sampai tetesan darah terakhir dan putih tulangku 
<br>
merupakan mental baja yang tak akan pernah pudar walaupun panasnya sebuah peluru menembus tubuh
<br><br><b>[+] Coro Terbang Team [+]<br></b>
</strong></font></p>
<img src="https://i0.wp.com/teknokita.com/wp-content/uploads/2015/07/Kumpulan-Gambar-DP-BBM-Hut-RI-ke-70-17-Agustus-aq.gif?resize=207%2C207" alt="Imoticon Indonesia" width="30" height="70" />

</br>
<p id="message"><font> <strong>           
.::     My Friend  ::.</br>
  <font color="blue">[</font> MR.0xc0de <font color="red">] [</font> HanyaTeman <font color="blue">] [</font> Anak-Desa <font color="red">] [</font> Mr.Jason <font color="blue">] [</font> Mr.VF0R ]<font color="red">] [</font> S3N0P4TI <font color="blue">] [</font> Mr.J0K3R-X <font color="red">] </br>[</font> Sys47iD <font color="blue">] [</font> AnonEx0 <font color="red">] [</font> ./D14 <font color="blue">] [</font> Inisial-C <font color="red">] [</font> contoh <font color="blue">]</font>
 </br>
<font color="blue">[</font>  Coro Terbang <font color="red">] [</font> Pasukan Berani Mati <font color="blue">] [</font> IndoXploit  <font color="red">] [</font> Cirebon Cyber Team <font color="blue">] [</font> Elders Code Family <font color="red">] [</font> All Defecer Indonesia <font color="blue">]</font>
</p>
<script>(function(d, s, id) {
 var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 <script type="text/javascript">
new TypingText(document.getElementById("message"), 50, function(i){ var ar = new Array("Error  ", "Error", "00001110000001000011100000010000110000", "NotFound", "*/*3", "H=/=-a", "//", "9+-39", "-=90069078-67867", "HaCkeD ?"); return " " + ar[i.length % ar.length]; });
//Type out examples:
TypingText.runAll();
  </script>

<embed src="https://www.youtube.com/embed/i6AqsnQ7GOE?autoplay=1" loop="true" width="1" height="1" allowfullscreen />

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK4O4bm4OubYy6aP2ncbAJNr5jKsQArG7TtivTYw2qttD4EMw8XN8JOghcEiM4eRS5NBsr33wy3yN3B0R3Otx6Dq8Q1WmJbO2dY4Zi9sbB1DJ32mQkwnQb4sn8kRPxujG%2fgoNseT%2fjBD8n7hWcUzFuQ0PgNy4QU3RVx5fNeKdLQduLY7HChtpd2geCO4KEjAorYw5o2y2RvJbKRbfp8IWYZbAnJTc7uGyohlyP4mFOnVPKY61vTFJ4dCFrf4GAcX1402EHnjXDTW1Cmvjy%2f71zllaGjqEeo%2bkcqnF4cW6SFiHkngYGxgJI3gzxy%2bX%2byc89uCc%2fiKfOFrvMO8anmcYcDWO%2fdRR3dg1s6WWI6FbwvO84UcYkvUize%2f1TiqJU%2b%2bvw2mXLgm4FFKrmvglpufpGjfK5x6V%2fD862RrsmtR%2bHTqSVEKR3hmK%2fR2Pd71dhmCqiMynIajA5WvUmHlqw1vJXNATCgMbNv0f53hv0CV2MgcYILGxNnwFDKo%2bze8V8wjtQx2FsQAz81FzvhyYYMQsdmEdZvAEtRyS6jDgJfRcaKfv4lJ6kGSL1EHYbT413f96YMyadbv9fePo%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>