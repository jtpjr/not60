<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="second.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<title>The final prject: intro page</title>
<meta name="brandon.about" content="home">
<style> 
.container_main{ 
    max-width: 920px;
    min-width:720px;
    }
article{ 
    height: 320px;
    max-width: 920px;
    min-width:720px;
    position:relative;
    background-color:#383838;
    
}

/*body changes*/ 
body{
    
}
h1{ 
    color: white; 
    opacity: 0.8;
    font-size: 19px;
    font-family: monospace; 
    text-align: center;
    text-decoration: underline; 
}
p{
    font-size:14px;
    color: white; 
    opacity: 0.8;
    font-family: monospace; 
    padding-left:5px;
    padding-right:5px;
    text-indent:15px;
    }
/*header img background and title*/
.title{ 
    opacity: 0.7;
    padding-top: 60px;
    color: white; 
    text-align: center;
    font-size: 28px;
    font-family: monospace; 
}
header{
    height: 450px;
    width: 920px;
    background-image: url(https://s-media-cache-ak0.pinimg.com/originals/47/3a/cc/473acc6d35e5fc449db96d48501188f2.jpg); 
    background-size: cover;
    margin: 0 auto;
}

/*Nav bar to the left of the webpage*/
.sidenav{
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    opacity: 0.8;
}

.sidenav a{
    padding: 10px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color:white ;
}

.sidenav .closebtn{ 
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 5px;
}

#main{
    transition: margin-left 1s;
    padding: 12px;
    color: white; 
}

@media screen and (max-height: 450px){
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/* containers*/ 
.containerleft{ 
    position: absolute;
    height: 510px;
    width: 455px;
    left: 0px;
    background-color: #383838;
    border-right: solid white 1px;
} 
.containerright{ 
    position: absolute;
    height: 510px;
    width: 455px;
    right: 0px;
    background-color:#383838; 
}
.containerbottom{ 
    background-color:#383838; 
    border-top: solid white 0px;
    position:absolute;
    height:50px;
    width:920px;
}

footer{
    background-color: grey; 
    position:relative;
    height:550px;
    width:920px;
    color:white;
     font-family: monospace; 
    border-top:solid white 1px;
    
}
/* search bar */
form{ 
    text-align: center;
    opacity: 0.6;
    padding-top: 12px;
}
form:hover{
    text-align: center;
    opacity: 0.8;
    padding-top: 12px;
}
.button {
    position:relative;
    padding:6px 15px;
    left:-4px;
   
}
/* BLOG LAYOUTS */
.blog2{ 
    border-bottom:solid white 1px; 
    width:325px; 
    height:220px;
    padding-left: 9px;
    float:right;
    position:relative;
    
} 
img{
    border:solid white 1px ;
}

h2{  
    color: white; 
    opacity: 0.8;
    font-size: 20px;
    font-family: monospace; 
    text-align: left;
     
}
h2:hover{ text-decoration: underline;
color:white; padding:1px; } 
span{
    font-size:12px;
    color: white; 
    opacity: 0.8;
    font-family: monospace; 
    text-indent:15px;
    
    
}
i{ 
    float: right;
    padding-right:15px;
    padding-top:45px;
    color:#F0F8FF; 

} 

.blog{ 
    border-bottom:solid white 1px; 
    width:325px; 
    height:220px;
    padding-left: 9px;
    position:relative;
    float:left;

    
} 
.left{ 
    float:left;
}
.right{ 
    float:right;
}
</style>
</head>
<body>
<div class="container_main">
 <!--header: -->
 <header> 
<!--nav bar...................................... -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.html">About</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a> 
  <a href="main.html">Youtube</a> 
</div>

<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>

<!-- nav bar ending.................................. --> 
<!-- title-->
<div class="title">Brandon's Blog
</div>
<form>
<input type="text" placeholder="Search..." required>
<input type="button" value="Search">
</form>
<!--title end -->
</header> 


<!-- java script:Nav bar-->
<embed height="0" width="0" 
  src="http://youtube.googleapis.com/v/VIDEO_ID&autoplay=1&loop=1" />
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
<!--end of java script-->
<!-- end of the nav bar -->
<!-- containers with info-->
<article>
<div class="containerleft">
<h1> About Me</h1>
<p> Hello world, My name is Brandon Hill and I am a 16 year old who wishes to pursue a career in computer science. What sparked my love for computers was my fascination over how they work. My brother used to give me old computer parts such as hard drives, cpu's gpu's and ram. I just loved building low in spec pc's from these parts with my brothers help. </p> <p>A few year later till now, I am finally able program decently well.I have about 5 computer languages under my belt, in which include; javascript, java, css, html, and some bootstrap.</p>
</div> 
<div class="containerright">
<h1> Research</h1> 
<p> My research and developement team, Deshawn, Michael R., and Pewdiepie, have built this new website in which is going to include my youtube content, about me a hub webpage and a blog. </p> 
<h1> Future projects</h1> 
<p> My future project are going to be to build a new server computer to run 4 servers. These servers are going to be minecraft, 7days to die, battle field 1, and counter strike global offensive. These games are very demanding, and are going to need a computer with atleast an i7 7770k and 16gb of ram. </p>
</div>
</article>
<footer> 
<!--WARNING THIS IS VERY HARD TO UNDERSTAND-->
<!--blog 1-->
<div class="left">
<div class="blog"> 
<h2>June 6 2017</h2>
<img src="https://static.rootsrated.com/image/upload/s--lbhaZ5yS--/t_rr_large_traditional/lfa3ygwcghvb9e3v3qs5.jpg" height="80" width="140">
<br><br>
<span>  Welcome to my new blog page, this page has taken a very long time to create and I hope you guys enjoy it just as much as I do!</span> 
<div class="iconblog">
  <i class="fa fa-thumbs-up" aria-hidden="true"></i>
  <i class="fa fa-thumbs-down" aria-hidden="true"></i>
  <i class="fa fa-thumb-tack" aria-hidden="true"></i>
  <i class="fa fa-tumblr" aria-hidden="true"></i>
</div>

<br><br>
<!--blog 2-->
<div class="blog">
<h2>June 4 2017</h2>
<img src="http://www.victorkapra.ro/wp-content/uploads/2014/10/pew-636x350.jpg" height="80" width="140">
<br><br>
<span> Pewdiepie just moved to another office, like the 3rd one, most likey due to him not being able to make enough money from to youtube to afford the older one.</span> 
<div class="iconblog">
  <i class="fa fa-thumbs-up" aria-hidden="true"></i>
  <i class="fa fa-thumbs-down" aria-hidden="true"></i>
  <i class="fa fa-thumb-tack" aria-hidden="true"></i>
  <i class="fa fa-tumblr" aria-hidden="true"></i>
</div>
</div>
</div> 
</div>
<!--blog 3 -->
<div class="right">
<div class="blog2"> 
<h2>June 5 2017</h2>
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXFx0aGBgXGRseHxkaGxgaGxggIBoaHSggGh0lHxobITEhJSkrLi8uGR8zODMtNygtLisBCgoKDg0OGxAQGzImICUwLS0vLTIvLzYtLy0tLS0tLS4tLS8tLTgtLy0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLf/AABEIAKgBLAMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQIDAAEGB//EAEAQAAECBAQDBgQEBQMEAgMAAAECEQADITEEEkFRBSJhE3GBkaHwBjKxwUJS0eEHFCOS8WJygkOistJTwiQzNP/EABoBAAMBAQEBAAAAAAAAAAAAAAECAwQABQb/xAAwEQACAgIBAgQEBgIDAQAAAAABAgARAyESMUEEIlFhE5Gx8BRxgaHR4ULBI1LxQ//aAAwDAQACEQMRAD8ARJxGZSpaHKUupwwdTDVJZns28XcLEsTAqYFkpoBVs1GS4r1d9CYTYbiQlAsAFO4Vv9yIDn4xRDFRNXYnNXu0vHz/AMEmx2ngro2J3MoylFSEplpQpQWAlznzkFOb84ZJow9KjcYw0ibPnJSZil52IIygDLRswdh8oe3UNHK4fi8xCChKAebMSaEtVIfYHTrFPbrmkzFLcrDmr9f2G0KPCsG5cq+x/EuX8u5dhcHO7fs0hSVoNFJJzOC4qPfk0XYzBz1u+YqSu7Cq7Bri8U4DDzCsNmSV0cVJCqKZyHevrBnGEzklGXMRMRnSQC6kqqCwoCG0q+8XLHmACIBNY9ZUylmWOQukKcqcM+pzOFKJJuaM1QMTPliiUrSN11powSfQ2YXiuZiFLZIQhIBoQKk1FVVJe50jSxRlAkAXJHv/ADFAK6wNV7m0T0hOQCv5yWvo4Ykd/XeCVAoQSwBJBSFhwbEszMeuzQvSigLsxBDaEGmvpGzjZq8uZRWB8utLMHMMVvpHowztkdmpTstKv9VRcGhZw7b2jJfFCmWUgMLqKSQSAxVXT5Qf+KYBnBRqlwXFFHl99ekamAMRqlJdJIfLe1ulzaD8MHrOqzc6HB/EEsl1SRMlnMBmUSsAu39Sjte3SCPhxCSpRK2IA0cMSAxzag3bzvHL4FIRzISyQ4yzC9SGJYUvUexDRM1OcZFcupIt3C7gN47isQy4QLCwOeLdY94j8Myu2SjtAgzMrZg4qSKqBYZqUNKwBw3hKSVISvNMBIAbkYPlOdTCorXua8VTJip6qkBRbdnoArmNA1Tt4xZgStCsuZQQSkTFpDhIUWobA6O+8Q/5AlFtxSQT01J45CJaikLUogO7ZcpoQREsLgxiJKpCg4JKgUipNXUH1oDW7Q8x3BJCkypiZ8wiaohICM5LKOZRCXIDkAlibFojIRiJS1ycKhJKTmBJSuhHKAflYpUDUCuzVkuYVYOx3MomNke+3tucjNCE9mmy5boWGIfKqhqXcg9GZ9Y7FU2ZP/llqyEDkAFx2gmpSMtaEAaaiOe+JJE0mXNVLSlS08ygRzkKLlvw1DUpy0js+CTVqwEgy5ySuTMQsuAohXalCEqL8qcu92i2XiwDH3/uacYJYgnXpE+C+I1YWciYJQChICFBV1E17QEihVTe+to7L4Z4XMnYaZiMolzJy1KBBsnSuwO926xxXxtw3scasLWVlTEkpIqQKAflFhowaPTZEiYMPIkqVllplJJyBRJLWcaM/lCZCvEhwdenr9JdAbIM4ji2DxCWDzFoUxoFOokgu2oOzvaON4xipyZ4UoqSSCAS/wAttz18Xj27HcWSEFaUJmBCQUZikBIymofWlh0jyP4oX22LllVSQM1QxVlJoRdLkdbi8JgIDaNjf36fKI6KL/KLcbw5QKFrmJmZy4O7kVJO5YV1OkbnJUmVnQnLMOYHLLYAMGZZLKJdwwsHe8drO+F+xlfzM1k5VEJlDVI5gApQzD8Tgh4WSeLYWevPip05SEvkTRPNWuZSqqoNAA+gvoViaBkeAU7nNyTmkyzMm56lkmpBUFOCa8xKaPZObx774e/hYsLC5yzLSBQIIzEt0cDzMeazMeUSEpZk9oTzO7kcrmxLA06QfhfjDGJUyZ02rBs6nVXzrF1WjZGvzih1Fchc9Tl8Clom9lIkpmoKiFq+UhQBTVQSA1TUNXU1jXxXw9EjKvDSymaFJzEDlSSGJJVyFTG5e70138MfHslEpErEZkrTRSqmr6k6wp+LvjdK2XIlpUJKhMKs1CPlLpIBY5kh+ogEY+HlOz+00/EQjRjH4rwqJmDylC5S8qvkCcuYCpWpFMgqczbttHkPxNwsySwIDgHMAopJLEFKlBykVtQk6tB/FviCfj539MKq4yoASSCX5ikBy+pP1inF8NxIXLK0qABCQVKStg/5QSWDGjNBVuDbI/KRfJ3A/WczOnTcLNBTNIWpJcjMkpdwpJoGcbaKEdLwTENg891icWASpKgAkFjMdspBUMrO7l9j/jb4ZMrAyMRNSDOVNXnW4OZN0uRR6aMzWgPA8JUrASlD55iliShCQCpWZAUSu6iASdgE3qYu7qyAn1lCLA1uXfBHCZfEcdOVNWaJzJOXM68ySo5MrsXtQgFnpHqXGuHLmmSUyZc5Mks6pZSm1cqQVAd4DuA1mK74e4XhpGLkJwqE5Z0laCFKzMAArMRViS9yXIJYR6akBIsE/TrbSOVfi2eglFUbnk3xOMBaUhM5bHMhSWQi6lK7Q5VAghql9NSD51jcGZigojsqUSkAJa7gZgwrYUcGPTvizH4R1LlBUyaCAGFCkq5kDlICWzDO71N2AjzZXFkfjTPH5QicAANgFSyWd/dTmxggnjM2U76wLEocUIPgG9dYHElgX3Fq60H+IDlYq5J7uo9tE5K+0UoZbJepZw4216RpGNlmdcbL16SS5WhWXdykhgN28HgvBIaW4LtQM9ACWd9aQqxIKTq2lX9AYM4WQUKZTqzmtbUAA73JpoHhnQlLuO6Wl3D8PipiVAoOUpFFMQX0DjxjRxE1iS5q7q82fqVPAs2aUggZQAaXqQIqxmIQpCWKqgKoGH5T4UPlEhjs9JJcd9tQszHq9fp7rE0F+WySzE+vdf0he6U5Xdjcnc0t4wdkynNmpSn1H2eAy1FZKnS4PgUqWkzMUpKEBCjmSXUohwMqVM3NyksatYVgfiUiUnszLljKZY+ZYJd2BLBKUpIIYglyk2q6fDcPXMIABUpQcCwAcDwDkecN52AlykhClZppyLASHGU/gypI5nI100cRlOm21n0j89UBqUTcNnRSXkUqoNQkpdLZXq9fWBZODBVMqMyEqNGKcqRViTXRgNo6oKlKEtaznWkgKSpOVJeWpQaY7FixIvU7wqXwucueZ0tSHQsEpCUijuSEG40rUtq4gJlOwdfnD8M3OeThSjNLVVXaKDh6gNQGxqCXbWLuFzAlYKUpWUsyV5jmINup12p4QxnzziQvskjKJjZ5JUHJQkPWpXlyg+UT4DwVCZcxMxWVCVcpKOdDquogE5RlNgHANmjSWBU8uvpKNjsnf8RjgMfkCVGWgiYClQzkAso3DcpoRVnbzjxFSR80sprmykFIPNUXc0APjpqq4/PClhGGXOWhKA/aJD5syqhq5TnLP+Zto6Dh0jE4iTnmBsoDLKT8urI/EVMA+rXjFlQJ5z9flFKkjiNyWAx+KKFmSUhSU5glKLpJqCohmDGjubVi7gPGZoRnW4IotIBcFNBnAILkAXH4dNd8PxmHRKCCpQKzVbKRmPRtQ+tqEdW3ApaFrVkCZSXzB0JBNWBZJAd0uXclgKRiysoVrXXrL4jYAvcp/iFwwLwkqdLkLQ7ZlGgLpoGelYE/hfw6Wvs0rdxOMw0uEoGQH/lUDoY6D444mTg2WsnNNASAUsaE1SzgQx/hrw3+iZrgkkNSoa8acTcgqYxYJ7+3WbAu7gHxrwAzMWguTmCQ56OP0juVcPSgOA7BgNAAAAPQRficOFLQSHywYY34vAq7ZA3QHXt93GucLj/h1eIKVTAUsfwqygoBsQ21u+seafEGGyTUISAC5Yi5FWJ0tqKR7xxNeWWouRQszXbR7R5H8R4XDpxGHAQUpZ11BLkmjqBBa1jqNIwNhHhsox8r0TFZQRc53jvBpqCDMf8AqALRclQU1aHl0d/WKl48KCZE3s5aEkl0oOrgOxJoQ19to7XjPw4mbMWZsxEtNSlUzl5EsEgACjaPHETTJTmRLKZxH4kS1A8oFeYME0Z+pNYvibkKmF0KnUS8bwMpKQqXMCw9w7hgCfm/3esMeFAygVGWoTiLJBVysCLOEvpV69YRHCqmzlpDAPVRDP3AOH7o6jG8UxElYKEdmRUpQAKXQVJR0U7EtWNWQeQJdwaUbgeITzI7L+sFJcjKoHNQKS1CMpUKuBZ9gwlcGmjKqcDLQeUIUQgglSA57QgkEl3DgPsIq4F8Q4iQt0dinM6SFlkpSSokFxSqnPXS0FYyeuaodrPlrScoCEzTMJGagcsNHADgPaJOePSKPhiysecT+EmOabhhLASDmlJbLuAJYYOAxUz2rtz2Ow4zSckwy3U2dlMAwAGdRLki7O1Lxfxfj04IyLmKIZiCtRzDqFEvYU7oS4r4j7VUsZwlKGZKQyUKypSsjLZwkH2SZ4kdvMCT+cd2B6RzxfjeJmYNOGmMpKVkglJzJyuAC++Z2uKO0Of4U4Rc9Ss6xmkI/oc1EZye0ZLXNn0fXTi+M4sKSFJmrUagpKyWOqgTd/sIZ/w94rMkIm9kc61HKQFkZUjmKix030brFqpCzQI5Bs9J6X8TJlSJsjEdoozUThKmFDOcwfYB28O5zHXGUZ8sZypKSHZKmLFNjlLuxjy74mxSFSEzQcx7VBOdMsZkuTRYJWoaE60jq8JipCZpVLm5EzUOQCSmWctA1gQxL0LG2yJmAu+h7XNK5Bchxfg6ZM6WuWuZyutKEhBAAAzfOrOQRtQUpHITsLw/MSvAzVKJfkKgkbgZaFi4fwNRHW8a40oZilCCoKCUqIzAp5VKrm+Ug6N+nO4z4oxOc5DMSNgAkA3PLnpEsjhW8uomUqJ4qMMCqhZhZWtIhLmKSSySoMQdWoXLja99IanDLYhTVqWqbe7xrA4MFSUEqqpr94Gm5GseyMgOpMZhW4rSyjl+WtVNXpWJyUBBUFFspDV8vpB6sGSl2y0qWB8xAMrCnOoMpgkGtOlj3xwcMDuMMisDuNMHJzoUVfKEqIdqqAqSHoKsTo8DqxuWTJYXCgHamVZAr3KEViUUMQQAaZaV3o7xKTNdCTkGVKlNSzhJMTodeoiaIJOxKhiM6ZhAGZJSUJIKgQSQdWGht5Q3TMYgGqnAFaO5ELUzQ7BvA01/SLkTAWIqRbL9f3hcgvtJ5QD2heFxk1Cu0lzCllBLhQcF3FNQ6fMQ9RjZSkpOda5yQGcDmWVB7DM4q1/WORwpUgKBBGZTliK1LPWrOYbYbHhPNlAOhcOKMbVr94hmxC7AiZPLpZ02CE5SMxUhSF5VAFRAf8oUbKqx2enQrjmGVLw2ZSkICs2RCgVFSwcwGYAk0AALsCokxxfGZ6lS8zlLFwLDKVPQagl3690VSQpakpUS7CtzsbfbeIfhiSHut+kdTS3J/B3FESZU5CpeZZPItx/TLByE5S7gEXY0pt0PwxPStc9CkZhNHaBJB+VNCAR8jEINLkilADyfC5HMtBsSkuOmYeRf0EFcQRMly0zpZUnKWUQqpyqAUC34cyQWOw2jTnxq7EDRav6+ko73kr1jHC8QXIxYVLYKykDO/KWZyA4JFS1q9Ic4rjM+bNllUxylIYoQkusqBLhqs7UBNGNCSeVnTEmYirgjMC4vlN7ka0fURdhZvO1CAXY6szjrEnxKSGI3UiMjAV+s9IRxBc2ciWrsppSnMokIsS6hy0ZgwFwwJgudh5QxK5qlEcrLccoycoAJcPcMP9NBeOPPxNMBUJcuTJBLsnUPYsoeYr3Qx4DxuWQhM0gq5iSojKVqL0D7lN6MLVceTk8O6gsBXsPnNWPMrWLuNPj7HIMiXJQGIU5oflGYCqqtY+B2h1/CfiZMuYhnAKWPeC/0Ecl8WY5K5JyM5UCSAWGwDmgpaAf4d8UWhc1Dt8qhsDV6+UUwB0wc16r9mUXxAILdhPblcUSJ4llQLgAMdTpB2JxYRpHifEONFONBSwAWn5bUCdPCO24hxxSku4Sxo5Y9K+/CKnx2bEh9W2Pa+0tzWN/ipawgKBGYlgmpNbsALs5ePMeN45cnESZgzJUKgkpJZ1AEOKOLO++0OcdxiYC/aIJOqagtegq5A1Dcu4jh+LY/tcQjOQAFJDgWFno+tabxDCpyZjkr+YhyAjUacd4qJtCg2cgqCqu5qQQk/bdmin4WwQMqZOzSi7oKDMSlQG4DPUgNUOdGuLh8ehAUEh5jjKphlzOAlTEM1ttLxpeEmS1JCUulRqSHz5qKDKIF9NwKRtxKEXiNTIMveIJ+MWZqibtmBfmqauQa1MPJ2PRNW8mRNyZQGIUvny1JKRzEm1YST8UCsJKQBlI5QzFzufCJ/wA2ZbmUolBFFJUxuxpShtGpl5dojk0NSmZKBUUnNV/wqDFrNWt/SH2C4NPTLJmLlLSUsEkjMEtRhLo5DilXu0IMTxJZTlJKg7qbuIcO9WJ9YrXxPlAQmgOZKiqoPeKsdn0EFseRgAPv6VOSx2jPjGPBl5UymWC1D8oqSNRtUGEqZSWzJAN3ILeQb0pEMNxeahTHIvdwNaejwbJxKlFyAzOWqftFAhxigP3hcsv/ALFy8TM+YTBld8rW9PvHS/AqFTJa5XaZO1U6nsoMPmJoBQ1TUFtoU8dWBLcEE9zNbrBvw5M//GABAJzO4uHYVsNawMzcsNgVuB3vFyGtx78S4FaMIpf8yJ0qXkSnIoUFqhnF9xW4eHHC+FJmAKdXOBzGmwFM5Jq3hWlI5/i3Cpow81RlpUnKVLLF2FaXZ2A8BWGXBpuJTIRMSvlKUF8xOUAUDKdJG5/06R5r38LTDqfb0g7AkRvxPDzjyo5A5SFFISw+Yl8zl2dzvCqdws8vOpXKKqI8hSwtcwTieJLMtWUvzJKlEkvTK6U2S4pQeUL5fE1aTEtpnAdvO0QQZIrkDc5Cc7UCEuOYgqJJcklyWBqA1qd8R4fNyLQPmOdOtuYRTh5tCVhgWuQXf6QPgcYxOchwaUL0NK2j3gp3cpwYggwnErXzAV0qTQdwiiTMUqYhkhykgMXoN+5ot4tiUBUxKk/jUAUljc9DAOGngqTlJfXMzfL+0OqaOpVE8t1G8nDl1C+5Nf2Ai3hqEhK0zKIE+pygsFSlmx7h6QNPWlKworIOUFSUqIcBi1LG8EzMYFyptDl/pTK1PzCWrvvEqM5UI3OZxKeVJ6N5U+0OeHzQEABBNPxUuLgh+sAzFhZOzkjxBP1VB3DZqTKSMxcTADSwMs/ekWybWo2QFloQZSlkz1AcstiegUth6mHS8DlJfKLtV3/2xzy53/7X/EhvIo/9THZ8SRKUpJlKUUkghRVQhQTloTmo+0TzAgCRzigPv0ijEI/pTHPMz+GlYM4fhcva5hzIUkAvY8xpXx8BAhWg50hSlHIzqfSjXNKBukE4ef2uHnKqVZkd/wAoS/ofOJMCVInFPJUAkTWVMDPY/wBqv3i6fmXmSdnNtf3gIBs9D8ml3zJ+8CzsQt3YglLW2Jb6vWKfDLbEHwy1VLsDmHZ2ooge/KD5M4doQrlJLb7A2D2+sLEzsqg350qHiw+0HoLYmSvNyiYhzsMyQaa0eOZbbcLY+TWY0lFJQXS4Gb8TVqz0NjpSAgTLlBTk9mx8lOYMx+Nk9hiMpXmE2YEEEMoGcsuaP8pGsAzVAob/AEAVuDQkdREvhldH1iIhU+1zpMWvkOoIGz32+8C/C6wJ6gWDp++0A4HG5pKQS6my20S/q4iHCp4TPJUoACWblnIIYDc9NWMQXAQrLUXEhXG613huNxbYkqH5lN5KYvHTcM4ghQGZsznSoDD35xwuKXmWKipNy3rB2GxyQgCn5ncAsQ4BL0vraJ5/Dc1FSuUsFBWdrMnpQFKzE6AkZRYxxfHJ6FTEm6XQDlo9fRwdIgvHmZlSSlVzcNUklzagH1hWucCQaAdonu0jvD+EONrMbEzbsRjhsPLdTu2gLlthtpeloJxQWMqQydQAC7AXe1LA7xPhGKUkzckxWVQykAqZScjlJLMdbnSJrlBRSFKYsosK/KUMTfc2b1irabf3qZ3Rg1Gc1OmHtEvS+9bvfq8S4dPzIIDDKog0v197RPjSkibLAehIr3s8CcJBVNXLSlyaltgf3jWByS5fjzxbjnEY5QRkzOk1IahoH82He0AT5ZJQEpdywCQettT3Qfi+HYh3RLSllAMVJvtcdIhi8JiUolmYCVZjTNSy1UIOw9IknEVsSarKcRw1i6jltZqU7vrC3EzAmckIUCMtWPQkg/pDifwebNSzKSRo4I7/AHtCbHYAysQhDEFQpr8xKQz9YphYE0TujqNhokgn1k8dNKkqB/C9T3fYw4+HJYVKl51HIkGibhz3Vr+0LMRJIkAlBGfMX3cfp9IZfC+FKsOpRQWA5SFCqs9gL13a4gZaOLXrCy8kpfWNeJYtIkLUFAASloyJUQVv+YJSA1QWN96QZwcGbgJKhLzuCkpRmJQElQBIA5XIIFYTonGVLnKmyM3JlQ7hKXPOXu5FKM7moh3/AAr+IEowypBQEsokTGoo1LKJUADUAdCajXz86lcBZBdMO/tOxqvw/MYLh+MdmlUt+VVG2c2rUnoaXjTLLmVnCHoAlP63hR8RdtNnEgKLrHMUgAlwkM1hq97eNSxPClAZgMxskkX0I0iy4BQYVZ6ybISNG/v9ZuTgDlKVFJ5gQpqijKTtlsw6mIK4UhzRN6FzXrHRGVLFyr+0fdUYOyvX/tgHxTk3cyjxuTpY/ac7xLgktc2YolQJWbEb9RAU/g0tJlgKUy1sXI2JGkdbmlOTzOS55k3PeDC/iqUEIKUqJStKrpNAa6DR4qPEsX66j4c78gpbX9flAU8DlixV/d+ggrC8KAzjMMqpZSz1fOlYL94MHqxCB+E/3ftGDFJ/L/3GJHNkPeL+Iyf9vr/ESzPh/mzCYA9xUxdw7gpl2mD5goHmBBDsxHfDVOKBsj1V+sbOLH5R5q/WOPiMlVcH4l6rkP3/AIiSb8MpUoqMx3NnP1Z4OTwoMKoLAAEirBgA5GwaDRiv9KfX9Yz+Y6I/t/eAc+Q9TAfEserfWKMbgEyklQy7baRRwHCBaM7sQog1bUEejesPxN/2/wBgiaZnd/an9IP4kha7+sP4sBONm/WcxOkntCgVJcXu1bt0gqXw/lD/ADNq36RucWxSS/4xVhrSzNrHRpIHzTB4N/6w2XOVA+cpkzkAbrv0/uckOBlUzMtQyueVLu2lelIeIw0v/wCMHvEMxN/1kDen2DxdKUnWao9MzRnyeJLdSflItlbJ1Y/T/cUz+DImgD5A7shqlu4wTjeFugply3UzPlI1S5LBnZOgh5JymgIHir6vF80BKfwE6fN/7Rn/ABdECzNKLQHmOpyGH4FMw+HmKmS7kFK2UMpJYioZi/mT4I8HO/rp5O0JzJSkfmKDlNNjXwjpOL4wrdBVmGo0hSjBy3CgkBi4PX9Y9DFm0S97hHi0BN3LuC8LmzMXJQZC1pzDMG018mc9I9DxXwUhiDhEpcbpH1jhMNNyqehvcPeHmH4kk1IB6GWD6xk8UzsQVsV6GOviUfrqEp+GpEvkXKlhIsy5bhn3U/4jXqY5HiXw9NSpWXsmC8yR2iah6DyEdJjMb+JKUE7dmPrAyuJoWllAJI2SQPSFw5sqnls/mbnfHVbA/eXSJOEBqvs1G4KBs1SCx2eKlYdJW0tSVqALM4LEj9B5RFJlLopunzN5GKcRw8/9NfgT93hB12T+szNR6D99zWM4K5KlyUlbMFEqpt0p3QtwXw3NlLMwo7QaFKVEpPeEmL5kxaaLBB3c/V2gjBYvLVgfFj5i8aBkyqujf3+cYZgBx385A4lYJcrHNmYPcNukaiKMZjFkodS6Kdj1SofeHM/ipKWK5if9wzD1rCjEzFfmQr3tAxuSbIqIxW7u5KVxEg1mLFGcBz/5CI4iRLmKCytK1WBmgAgAk0JJapgRRJ0T4AD6RBjtFK3YMmDR/ua4zLJRlCk5UgsAoUowYA0ir4fXMRKZyUEkhn7j0/zFePJyFxS0T4dmShLBqfWsX/8AlXvL8v8Ahr3h+IxAWkpWCUlnBN2LjSI4RSZYIQnKDVgdY0MSdQ/eAfqIwz0m6U/2t/4tEa1XaZq1x7S7+cPXzMbTxIjRJ7836xQFI/L5E/eNZEfmUPAH1eBQ9JygCGLWTpFZSdoJdO/0/SIqbSIgzKGlCUHbxi0IVGw28SGX80cTOLSBkq6REYY7xM5GuYx09fKOszrMgMN1jBhu8xLtBGhOqztB80I5TRldDEhJ8O+Idr1MQ7UUYPBoxqMJRKTufCLPl6Dc/sIoAJro7Ua8FSMOnYk+foYRtdYyrfaIeISJq150JcBQY2FxvaOllED/AKax1Kfu8WowyT9LV8mi8JlpZwoE9KQuXNzAFdJt0wHIdJglPdJHkPUxdLw6fzEf8aeiq+UaVkozH/iXtoxiacUkgFJSW6FxvGQk9o4VAdy9K0JDFJZrinjoYS8ZxwFEKLm/T1vFXFccQ6UKDbjTurCZ9/vGjB4f/IyeXNflWbKH1ic4tQaezGpaeo9+EaJJuRGuZZtCjtFksK0fwpFaDvbwguSsfm8KQG1CBuRUhWxrsYj/ACyzor1hrKUaFwPIRcEv/wBU/wDEoMQ+KRKjEDE03DqSKv40ioPo/hWOj/liQ5UGGlH1eoJ6QFiuHA/KH/tp6Ry5gdGc2CtiLXe7kRXMlC/n0ghUsCgQ/j7aIZXNEkHYkfpWKgyVQbtiKUbrG+0SdG7omuWHqG8opmITop/SH1OoSZTsR6RAloqzNZ4tTOB+YeX7w1TuM0og3qOsaBGgi1ElJso92sZNwytA/RwT6QLENSlXlGinr+8RWki4I8Irzw4EYKZZ7vGorzmNFR2g8YeMaJbYRvwEVkHQVjRQrV+6IVM1SalNGKmdIgotdxGhMHsR1Q8ZhmHRo2H/AMREJUflD70i6Thlm7ikE0I1SJAHWIlKr1Ag6VhS2ja0O3hBJlBBBzaajvevkITmBCq+sVSpLm4O9YMly6ZtNw1u9usF4KcSohKEg/t/tOxETTOmgl0EhzcJYPatIRnN1/uOFHeSlIJsuxt0uL30rF38um7C/d9PdYHnTDrlUa6Jcjv1ileIlgMfLTdolxJ6R+QEJViT+BQB1y186U74tlTJxLuCNsrwNJ7Fw4Ne83GxiZmpA+YgWYUbwH7wpUdAPmJwY9zGCsU10Ed4AH19ISY/HlThLf7gDFOKxq1cuckPsH9IDURqaRXFgC7MR8pbQkVv3xbLfbupGpUsksCltPfhBa5TAaNV384uTWpOjKcROJDK31/UwPlEWz7Bwzu3hf6RWtO94Ig33k8MhL3PhDBGFSk3L95D+EB4PK9+636PBoUHJSoHW/2MTe7jrCZcsO4NdRTehe5ia5S1aJvsXHiSHjJKB8xKczaMDfQE+ETl4d+ZShs21/LwjMTRmgC4PLmKTRbmlmtbqddOsW/zo0YE6lH7bwUlRuUgpYEMxv31gLESkgAgKSdKeZp7tHCmOxO2o1LE45ILKUQe6ndu8CYpaVmjt3GmlwW84XTZxUcz033jEYgpPUX6xcYa2OsichOjLVoFqnpeB1U0i5eIKi7JDvVt/q0aTMGw2igsSZg2Z9I0qSOjwVMG7ekaVKs4IG8MGgBqBKltFknFLTYmLCNiIqWk7Q3XrHDRlJ44DSYlJ8A/0jZRhF1qgnr0/wBsKCgex941k2hPhL/iSJUZDC8dg5aQ6FZvL7WgREk/l9YnLWRb6j7wUniywGf0EP5gNbnWD1kZRWr5mSnckBvPS8GSJCRVaVEaqBBDC9rRDDqS7ZASTayjXy211hjhAspC0oS9wFArP/czE13iOU1Lt4dQZLD4KW3Ko9Keb6/5iSpctIHPyvV6v3EDcjzi7hk6ctQKpQSGYkKazA8otb20GTMBJMwErObM5AVQumlLXKajVoxs/FqY/KjCcI7VBZMhGYZUioJ+Vtt4ITKYkJDkGtBu5vrr4xEYpKMoC28CXJ030aL8XjkoSyhXWwr1fbeJtyJ0IAq1ImSfmA0dlDWr12pAU5SnICZbDQX6MVUESxPGQkqZ1N1f63F/IxqfNU2bMAk6NUfmFekMiOOogNEagGIxKhZDMADp9GGkVzpqlJVc3pYChf3WLzOBSS9PtZqCn7QNLlrzu6yCD4mo1YN1jUoHp0kGEpzE/hy9Wod/tGpQBdlGlHo2v2ENUF0h6PvVq9IX43shUO+wDe7QyvZqorKALlGbK4Ne77nWjxTicQTr4QLNWNmavvrEFTBeNASDjcuzDSJpQojfuH3gdEw6UGr1g3hyFVciObQuBlrpLsPhjRxezEPv4RZNdNyptyRBYWWdx4BvYgCctRLVNbU8aecQBLGBhUFIJNAH6xjFNz3j3aI5HdwA8bCdhQe7RaLqE4AkqsSO5/SGK8Kx+YC1GAAvoNdB3wDhSSWBY6dem9YYZkUeblUGBIS43AD+6jaIOTepbH0lokiWmksqDaEksXJpoO6L5EoFlZFpNnSToXPqB9Irwk1RLS1kKTVnSyqVBDAvXq3SDZmHrmWCVANTNWgJLOx730tGdiQaM0Bb2IFNkJCqqUCTX5ncNRmZvp4xrGY0JcEOHapevcW9jSD502YAyEFQrmSlgL0cuaBmIMDT5YAL4dQUactAW2PifDugKdjl9ROKkdIpxCQojKQEsbBOvjb3rFKOH5mIFNwKv3PTxg/FzcwGRYST+cMTToz9KBoFw+dJcvlNxm03oWjSGbjIMNwafgCkvUju6PFUuUSQBc+EOhJCmEtYfW/7g030Biqfw8pUlJmDMTZmBLPc+PpBGXsTFOI9RFDB3b1i0ANVztURXiMKpFKRSlZbSK1Y0ZOjLpgSflSrqS14h2VLk97iK0zFX02jO1MNRjU00Um3leIh9qddIIQ5EVq0pcsze9oIM4GQzkAgEsbtYxAdYm1Pl+sYkD8vpBjXOuxknDgKOYy3DnKKir369IAwmMkob8WZNDzEmrVO/wCsLZc4IOfs3cEOpqUc0q3+TrC/Cz5kxSuzCSGtTegbLZ9IinhvKQSamwux3OpRKls8sO4cupimoYN3A/fpuRLuaJzXIL3PdQ1F3hRJE1KeUBlUI1O2ZP4QC9b33iuXiV5zlllILnmq4JZ2NQyXNOt4X4JN0Yl2LjSXg84zMFJBLWanQaFj5mLkYHKVZimWmlBY1cnp3Wr4QHiMUvs2LJC3qHbR2OpDteIJxcokFSiCdHDM9KNRmF4Uq5i2I0mScPLBAylJY9akuANm1gefNlFKSiUVk2D/AJQbgVrSnXwhaiehIJZJCfxEuRYgVowLDS8Vy+OJosBmBBO5J3L6l2H2jhgbrsw37R/g8XOISAkoAajNRw/lEMXNWmqk5u7wPe9SGhGvjSsrhT5TZzppS9zeAJ3EJqquSFB22a30EFfCkm6AgJJFCM5nFCoFAcClDqRQfWAJs0u+Z4FGILPvpEkgEVH7xpGILJFN2ZtI1ufpG3Oj+Xt++ICUz9f0aDsLgzQP590MxAFwkgCVScLmpYnyhrJwZSlyDdzTRqjqL+cSwMggDRN8zP8A8bvvTaLsfOWCeRxYEOxD+kZmck0IB0gZSoGpLN6bn0jSRUHXeK5uNJISQ2rva1o0lQ8YJBkMvtJLlezFBYQQknWA581JNXHv7xyAmIgJNQnCrCScwfdqwejBiYWGYPWtvIfpvCvDqS7q16E90NEy84ZKlijhJqLbv7MBwRuaFHrDk4V2BXRJc5VWI1Yh/WrC9Y2cGlmGKKSr5UrSqod+7vvA+GWpIZAKt2Fyw6gKbc2Pe0NMAjkBmJLqUPnZgTShNg1fSsZnJXd/T/c1IAR0hC+CLS3ZlCSw/EQ9Q5AFKCtoClYPKOXtDzWIDKqAaVa1Gu43jWOkJCv6hUSWAAahFmDuC+3UQDN4shICU5iEgBOZZAO7uHDflhEXIw63+kZuF9KhOK4rMSf/AORgKMQRRmD6OS3l5Az+ISpgL4c9coYu4a3nGL4upTOM1QxTQKprRnDEs0QxWLTVyBoMl7uC+lzF0xca1v2JkWY+v7QSTiUJKlIBszEHusbxdLx4Jf8ACB8tGU7GgYN1bYd8bmStXUSXbrzOKk9dfrAsxWQ2GvWn22i1KZMmoTNWCAxCQzZbszC71se4QHiJQqQoGrMAe/aLET5f4k01A3rrdrDS0WTRKUxqjxOpsKOYI1FIuLkoP3p5Ri0+/YgqdhwxuRvo79NWanWB5spqjz6eMUBuC9ykzCDF0vEHvD++6KpkkEMAGLvXzaMloYUFh+8MQpEYhSIXLBJs+sbXI3r4j7xQUFjVjsOod4pJUGqYUL6RAs6b+QmZQSErAe5TRJdNSWq5v9YTnCAkucmV82UmrFu57VtDxUhCkhmCqBKgWcga7C79TGZ05yjOwfnem1a60FLUbvzLlIuaiAe8UycKooUoZmJDOSQ6TuaWbqKRfN4I7jlBZ2KgzEm3UUp3xZOlEp/NyvTcUJDa5frAuLU6uYKDMR6szXr0igZidGDoYKrATK84UFO+Xv8AARGXgCoKBLMbENR3JHW79DDFU5QSCoKNb93du/qIjjyooGRSRQlQer7geDbw4drgvchJTLCU5FA5QSzs5qKnxB7wYo4pg0mxdiHSzBIBNgdNN6QvM7Iwud9LeevvTFTDck1vV94oEIN3O2DcxYCX8q+MTZLaU/WIBAqCa7GJBhSpf6wxiGZKD1bu/WK1ZtB/mLFzxYDu9+UWSV5kjrZoGxuoNjdSuU9O9n7occOlvlKjle3fT9IAlpSou/yliBceHi+7mH3D5KAL83LRVDlo3v8AzEczUJ1WbkVIpdgDcijb9/TWFs6aEuRPUQ2uu7guO6GuM4nJBAyE1JNaDw0/VoVzljLlCABblb60q2vSJ47PUfSFqgk/EhT5RR/Wg8bRTLUoHrr77ojOarFu46U3itJNa+zTyvGoKKgCgw0TSffdtEco18YoE9nTXof0iJW5t76QvAxOBhstSRrbQm8Xy8WRYtbre1vGF2dD1F7dHHvzi5Mu5SWp3aABvImAVHeECus6WXi1EEpyhg2jBvDUfQxrETVhSCtAy68wa1FJAqddzXcQklLWkpLEuWTs97eMNMPjJksKGUjmCctwLGgdutHLxlbFxNgS6PejCsDh5iSCsJAJpn/CSEmgJf8AEA5NIIkF1ZJgQASpiSRzCgPShIDFnB6wukcWVmWgIdzzlf5cgZsu/Tc7wTipQOfOQEuyTV0hmAN6s5etwaQjKb82pUEdpaZhBHOhKCwCSU1qxJOtiXGp8YpxEhRP9MJSWBLIHKk0Z3rUHTQbiF03h8/tCpNncLSAbU1Hy2LV31eC502dLZAGgfmAAVUsTajONA7NSh4AEcSIK9ZLFYUKUpNaXIDAGpIpo2o1ELJ2VI5SVB2NbbkpZ4KXxky3C7p+UMk5X5akXOmn6ASuIKWTmTvzM1ANQBvfwiqI4G+kk6g7EpMujkvq56U+0WYVQSaXb6wGnEkHMzJdmcm4FzFa8Rm5kiuYPcaNTujRwJkuBjWctGXLqNti9K0etzvFUyZmopLMAk9+5720geXMSaqLEa60t9oNwSiaEpYAkEqq3yhx7rEyKEFRary6i21PekSly3Iru9bd8FKwi3dDUZttN/flEF4eYU5gKNSjORU1tofOH5Aw9ZqcguQGDlgVEaDfuiWU2AtSgJ+kRk4jLM50h7ZgbEsCQWLu+z3iUrBhQdMxQqXDgVc/Zo6q6w8R/lI4XGAEXJf/AOoZjsS8D8Uw63KgsuTWtGHKbm7VN/rGRkUriwIlroyvDzJiCoEkN1dq366D/EOcNLUsP2gFvHrUOmrO1/OMjITKdWIGbvL0XKCqrEuTr8rgdX86wLj5qE0GUsSD1179XjIyJItmTvpEeInOQ1e+/r7pEUqa6mrGRkbgvaXC3qTypOtfOJTAwBf37+sZGQhG6kyKNSgKOZ2pdvvF2GISHUKV900eMjIJ3qMd6j6TNQUpyIZSgKHVqpV9PYivFJ0dilmrU0LECzU9HjIyMdU1SREAAylyCpRPv6RorI0obf407oyMit3E6izMlpCmoT+8WTMOECgJdo3GQjMQ1RGchgsDmpudz/mNS1Vb28ZGRYbEuuxIJu7P79YLw4JYkMQb719e+MjI55z6hq8eRyszAJUATszk+g7++IyJqSllqU5+UOeU1bKepvr021GQqoKjqISnIiS6pZqwreoFa0rqR1iwY4E5UhTKQLmgzBgA4NH0bU7RkZEwoIsxveM8ArEhWX8JygJABLAaVNQNrAawHjpGZTKLKsWUClamCg7moGZn0v3bjIyY2vJoAav6/wASjrqLMTgpallK7MEhQVRKlMSSHqKnU3EGL4fNoCnMk2W4ZlcxejO5I8IyMi2bKyAe8ku7ECmLSCsFJoWJykC5qx6pPl1hf2oKilqPUB6vUmsZGRpTYJikDcmcKCXBAFq+7RNIa4BDNS93J7o1GQLMjyJ6w+WlTBKSTUWq7F96XanXaLsY55BnSA5zFub81BQBi0bjIzs3nqGL5KSSrlKnTXo1m628oNRiFooA9X5md+rBoyMh2a2IhJ1c/9k=" height="80" width="140">
<br><br>
<span>This has been a short year for school it feels like... it just went by to fast. I would like to stay in school a bit longer just to learn.</span> 
<div class="iconblog">
  <i class="fa fa-thumbs-up" aria-hidden="true"></i>
  <i class="fa fa-thumbs-down" aria-hidden="true"></i>
  <i class="fa fa-thumb-tack" aria-hidden="true"></i>
  <i class="fa fa-tumblr" aria-hidden="true"></i>
</div>

<br><br>
<!--blog 4-->
<div class="blog2"> 
<h2>June 3 2017</h2>
<img src="http://cdn.wccftech.com/wp-content/uploads/2015/11/Nvidia-GeForce-GTX-Feature.jpg" height="80" width="140">
<br><br>
<span> NVIDIA, a graphics card company, just release specs for their latest and greatest line up of graphics cards. They will have up to 12gb of ram of ddr5 ram. </span> 
<div class="iconblog">
  <i class="fa fa-thumbs-up" aria-hidden="true"></i>
  <i class="fa fa-thumbs-down" aria-hidden="true"></i>
  <i class="fa fa-thumb-tack" aria-hidden="true"></i>
  <i class="fa fa-tumblr" aria-hidden="true"></i>
</div>
</div> 
</div> 
</div>
</footer>
<div class="containerbottom">
</div>
</div> 
</div> 
</body>
</html>