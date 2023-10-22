
  <html>
 <head>
 <style>
body{
	padding:0px;
	margin:0px; 
	
}
 #outer
{
height:50%;
width:100%;
border:0px solid;
background-color:#003153;
}
#menu
{
height:200px;
width:100%;
border:0px solid;

}
#menu1
{
height:148px;
width:9%;
border:.01px solid;
//margin-left:50px;
float:left;
}
#write
{
height:148px;
width:89.50%;
//border:1px solid ;
float:right;
}
#write2
{
height:150px;
width:1000px;
//border:1px solid;
color:blue;
}
#menu2
{
height:70px;
width:100%;
background-color:#003153;
border:none;
margin-top:0px;
}
 #menu2 ul
 {
 list-style-type:none;
 }
 #menu2 ul li
 {
 display:inline;
padding:10px;
margin-left:5px;
border-radius:10px;
//border:1px solid;
 }
 #menu2 ul li a
 {padding:35px;
 font-size:1.2em;
 height:70px;line-height:70px;
 color:white;
 text-decoration:none;
 }
 #menu2 ul li:hover
 {
 background:linear-gradient(0deg,yellow,orange,blue);
 }
 #slider
 {
height:500px;
width:100%;
border:none;
margin-top:-10px;
background-size:100% 100%;
 }
 #menu4
 {
height:400px;
width:100%;
border:none;
 }
 #left5
 {
//height:400px;
//width:60%;
//border:1px solid green;
 }
 #right5
 {
height:400px;
width:40%;
//border:1px solid;
float:right;
margin-top:-400px;
 }
#menu3
{
height:350px;
width:auto;
//border:1px solid;
}
#left
{
height:350px;
width:25%;
//border:1px solid red;
float:left;
}
#left1
{
height:350px;
width:25%;
//border:1px solid red;
float:left;

}
#left2
{
height:350px;
width:24%;
border:0px solid red;
float:right;

}
#right
{
height:350px;
width:25%;
//border:1px solid red;
float:left;
}
#menu4
 {
height:400px;
width:100%;
background-color:black;
 }
 #left0
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
 #left6
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
  #left7
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
 #left8
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
color:blue;
margin-left:40px;
 }
 #vinod1
 {
 height:500px;
 width:100%;
 //border:1px solid;
 }
 #vinod
 {
height:680px;
width:100%;
//border:1px solid;
 }
 #left11
 {
height:680px;
width:100%px;
border:1px solid;
float:left;
color:blue;
 }
 #menu4
 {
height:400px;
width:100%;
background-color:#bad8eb;
 }
 #left0
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
 #left6
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
  #left7
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
 }
 #left8
 {
height:400px;
width:300px;
//border:1px solid;
float:left;
color:blue;
margin-left:40px;
 }
#v1
{
height:90px;
width:500px;
//border:1px solid;
float:right;
color:blue;
}
</style>
 <script>
 var img=["AA.jpg","b.jpg","l.jpg","e.jpg","a.jpg"];
var i=0;
function slide()
{
//alert("hii");
var div=document.getElementById("slider");
div.style.backgroundImage="url('images/"+img[i]+"')";
i++;
if(img.length==i)
{
i=0;
}
window.setTimeout("slide()",2000);
}



 </script>
 </head>
 <body onload="slide()">
 <div id="outer">
 <div id="menu">
 <div id="menu1"><img src="b.jpg " height="230px" width="350px"/></div>
  <div id="write">
 
<div id="write2">
<center style ="color:white;font-size:3.5em;"><h1>Hotel</h1></center>
</div>
 </div>
 </div>
   <div id="menu2">
 <ul> 
 <li><a li href="index.php">HOME&nbsp;&nbsp;</li></a>  
 <li><a li href="Agents.php">Agents</li></a>
   <li><a li href="bilings.php">Bilings</li></a>
    <li><a li href="Booking.php">Booking</li></a>
	<li> <a li href="Geusts.php">Geusts</li></a>
	  <li><a li href="Lookup.php">Lookup</li></a>
	  <li><a li href="Report.php">Report</li></a>
	  <li><a li href="Reservation.php">Reservation</li></a>
	  
 </ul>
 </div>

 <div id="slider"></div>
 <div id="menu4">
 <div id="left5">
 <marquee behavior="alternate" scrollamount="5" onmouseover="stop();" onmouseout="start();"><img src="AA.jpg" height="400px" width="400px">
 <img src="l.jpg" height="400px" width="400px">
 <img src="HHH.jpg" height="400px" width="400px">
 <img src="e.jpg" height="400px" width="400px">
 <img src="LLL.jpg" height="400px" width="400px">
 </marquee>
 </div>
 <div id="right5">
       <img src="AA.jpg" height="300px" width="400px">
 </div>
 <div id="menu3">
 <div id="left">
 <img src="d.jpg" height="355px" width="345px">
        </div>
		
 <div id="left1">
 
      <img src="c.jpg" height="355px" width="345Px">
       </div>
	   
 <div id="left2">
 <img src="b.jpg" height="355px" width="325px">
      </div>
	  
 <div id="right">
 <img src="a.jpg" height="355px" width="350px">
 </div>
 </div>
 <div id="menu4">
 <div id="left0">
 
           <ul><h1 style="color:white">coustemr</h1></ul>
		   <ul>
		   <a l1 href="#">Cnters &Departments</li></a>
		   </br> </br> </br>
		   <a l1 href="#">Diseases & Conditions</li></a>
		   </br> </br> </br>
		   <a l1 href="#">Get a second Opinion in hotal</li></a>
		   </br> </br> </br>
		   <a l1 href="#">International hotal Patients</li></a>
		   </br> </br> </br>
		   <a l1 href="#">goodness in hotal</li></a>
		   </br> </br> </br>
		   </ul>
		  </div>
		  <div id="left6">
		  <ul><h1 style="color:white">vip</h1></ul>
		  <ul>
		  <a l1 href="#">hotal</li></a>
		  </br> </br> </br>
		  <a l1 href="#">hotal faclti</li></a>
		  </br> </br> </br>
		  <a l1 href="#">hotal and resturent/li></a>
		  </br> </br> </br>
		  <a l1 href="#">About the hotal</li></a>
		  </br> </br> </br>
		  <a l1 href="#">hotal dilbag</li></a>
		  </br> </br> </br>
		 </ul>
		  </div>
		 <div id="left7">
		 <ul><h1 style="color:white">Researchers</h1></ul>
		  <ul>
		  <a l1 href="#">Find Research Topics</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Find Research Facaulty</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Find a research lab</li></a>
		  </br> </br> </br>
		  <a l1 href="#">Advancements in research articals</li></a>
		  </br> </br> </br>
		 
		 </ul>

		 </div>
		 <div id="left8">
		<h1 style="color:green"> Contactus</h1>
		 <img src="a.jpg" height="50px" width="70px">
<h3>location</h3>dilbag,Lucknow-226 006</br></br>
<img src="l.jpg" height="50px" width="50px">
<h3>Mobile No</h3>
8787006508  ,7390936983

 </div>
 </div>
 <h3>
 copyright &copy;2020 Hotal dilbag&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Design & CSK all fan
 </h3>
 </body>
 </html>