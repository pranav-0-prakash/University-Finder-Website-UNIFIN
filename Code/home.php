<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8ss">
<link rel="website icon" type="https://lh3.googleusercontent.com/6wJg_cv2iz2QYkeq6EIr1uvfOXEZ0-MGRPyd-39X0uNyi03UfZt4UVBAyjCpJdMIL-GMpOk3FQ2Bk1MjUkEZdNISsdxp_JntoX3I4sYTZA" />
    <title>Unifin</title>
    <style>
nav .navbar{
 display: flex;
 align-items: center;
 justify-content: space-between;
 height: 100%;
 max-width: 90%;
 background: #090552;
 margin: auto;
}
nav .navbar .logo a{
  color: #fff;
  font-size: 27px;
  font-weight: 600;
  text-decoration: none;
}
nav .navbar .menu{
  display: flex;
}

.button {
  margin: 0;
  height: auto;
  background: transparent;
  padding: 0;
  border: none;
}

/* button styling */
.button {
  --border-right: 6px;
  --text-stroke-color: rgba(255,255,255,0.6);
  --animation-color: #37FF8B;
  --fs-size: 2em;
  letter-spacing: 3px;
  text-decoration: none;
  font-size: var(--fs-size);
  font-family: "Arial";
  position: relative;
  text-transform: uppercase;
  color: transparent;
  -webkit-text-stroke: 1px var(--text-stroke-color);
}
/* this is the text, when you hover on button */
.hover-text {
  position: absolute;
  box-sizing: border-box;
  content: attr(data-text);
  color: var(--animation-color);
  width: 0%;
  inset: 0;
  border-right: var(--border-right) solid var(--animation-color);
  overflow: hidden;
  transition: 0.5s;
  -webkit-text-stroke: 1px var(--animation-color);
}
/* hover */
.button:hover .hover-text {
  width: 100%;
  filter: drop-shadow(0 0 23px var(--animation-color))
}
button {
  /* Variables */
 --button_radius: 0.75em;
 --button_color: #e8e8e8;
 --button_outline_color: #000000;
 font-size: 17px;
 font-weight: bold;
 border: none;
 border-radius: var(--button_radius);
 background: var(--button_outline_color);
}

.button_top {
 display: block;
 box-sizing: border-box;
 border: 2px solid var(--button_outline_color);
 border-radius: var(--button_radius);
 padding: 0.75em 1.5em;
 background: var(--button_color);
 color: var(--button_outline_color);
 transform: translateY(-0.2em);
 transition: transform 0.1s ease;
}

button:hover .button_top {
  /* Pull the button upwards when hovered */
 transform: translateY(-0.35em);
}

button:active .button_top {
  /* Push the button downwards when pressed */
 transform: translateY(0);
}
#SS{
  margin-right: 50px; 
}
#GG{
  margin-left: 70px; 
}
#GF{
  text-decoration: none;
  color:teal;
}
 #GFG {
            text-decoration: none;
	color:paleturquoise;
        }
      header {
        background-color: cadetblue;
        color: paleturquoise;
        display: flex;
        justify-content: center;
        padding-bottom: px;
       height: 18vh;
      }

      header a {
        color: white;
        margin-right: 20px;
        text-decoration: none;
      }
td {
justify-contents:center;
  padding-top:px;
  padding-bottom:200px;
  padding-left: 200px;
  padding-right: 200px;
}

      #welcome-section {
        font-color:blue;
        text-align: center;
        width: 100%;
justify-content: flex-end;
position : absolute;
      }
      #img-section{
top:0;
height=90px;
}

      #degree-section {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 10vh;
      }

      select {
        height: 30px;
        margin: 10px;
        padding: 0 10px;
        width: 200px;
      }

footer {
  background-color: cadetblue;
  color: paleturquoise;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 10vh;
}

body {
  font-family: sans-serif;
  height: 100vh;
  background-repeat:no-repeat;
  background-size:1500px 1500px;
}

      footer a {
        color: cadetblue;
        margin-right: 50px;
        text-decoration: none;
      }

    </style>
  </head>

  <header >
  <table>
    <tr>
      <td>
  <div class="navbar">
      <div class="logo"><button data-text="Awesome" class="button">
      <span class="actual-text">&nbsp;Unifin&nbsp;</span>
      <span class="hover-text" aria-hidden="true">&nbsp;Unifin&nbsp;</span>
    </button><br>
    <br></td>
    <td>
      <h1>Welcome</h1></td>
      <td>
      <ul class="menu">
        <li><a href="about.html">About</a></li><br>
        <li><a href="developer.html">Developers</a></li><br>
        <li><a href="contactus.html">Contact Us</a></li><br>
    </td>
    </tr>
    </table>
    </header>
<body background="data:image/jpeg;base64,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">
<br>
<br>
<img src = "https://lh3.googleusercontent.com/Hwu_nBOWJlj7TkDu8-HsxCct7zS3637y2dpDTmrxc3YuykaUEItrfXpKM9nNGiXCKHLlEAiW8bbY8M-MyDdl-gi4itHDfNvyTCyr7C8" align="left" width="400px" height="300px">
<i><h1 ><p align = "right" style="font-family:'Dancing-Script'">Want to compare universities around the world? </p></h1>

<p style="font-family:'sans-serif' size:30px" align="right" >Seeking international study options to match your own interests and resources?<br> 
<br>Make life easier for yourself with our new University Finder tool – a searchable database of universities <br>
<br>worldwide, with options to customize results based on your own preferences.
This new university search platform <br>includes details of many universities around the world. Information provided includes data on university <br>
<br>rankings, available courses, fees, institution size, location and more.</p><br>
<img src = "https://lh3.googleusercontent.com/V55_RcSsWDdZzx69MLrqi6EHIruaoxsMqtNrtir1HXof7Zpr_RrPqRm8xynMq8mIpcVrJA2WY4_a6V54Xh5uniGYfqPicMjEjz_bJtNwUA" align="right" width="400px" height="300px">
<br><i><h1><p align = "left" style="font-family:'Dancing-Script'">How does the University Finder work?</p></h1>
<p style="font-family:'sans-serif' size:30px" align="left" >
To get started, visit the <b>Unifin</b> landing page. <br>From here, you can either search for information about a specific university, or create your own personalized <br>university search, to identify institutions that match your requirements.<br><br>Once you have your set of results, you can then click on each institution <br>profile to access more information and compare universities on a range of criteria.</p>
<br><br>
<img src = "https://lh3.googleusercontent.com/_bIgvDg1VwiqGA_ZoYpbyCe_B_e5eX7VrKmN4zF4-TTD4eRE-DfHv_rOdlhxh13WHzZEt7TYzdNzP8HTgeNibClsxdAkEHDulYWnI8lMRw" align="left" width="400px" height="300px">
<br>
<br>
    
<h3><p align="center"> Select The Best Universities From The Following Degrees </h3></p>
<a id="GF" href ="bca.html"><h4><p align="center">Bachelor's in Computer Application</h4></a></p>
<a id="GF" href ="bcom.html"><h4><p align="center">Bachelor's in Commerce</h4></a></p>
<a id="GF" href ="bba.html"><h4><p align="center">Bachelor's in Business Administration</h4></a></p>
<a id="GF" href ="BA.html"><h4><p align="center">Bachelor's in Arts</h4></a></p>
<a id="GF" href ="prj_mba.html"><h4><p align="center">Master's in Business Administration</h4></a></p>
<img src = "uni.gif" align="right" width="400px" height="300px">
<br><i><h1><p align = "center" style="font-family:'Dancing-Script'">Why Unifin ?</p></h1>

   
      
      <p style="font-family:'sans-serif' size:30px" align="left" >Our platform is designed to provide accurate and up-to-date information about universities and colleges,<br> including program offerings, admission requirements, tuition fees, and student life, among others.<br><br> By doing so, we aim to equip students with the knowledge and tools they need to make informed decisions about their education and future.<br>

<br>
We believe that higher education is not just a means to an end but also a<br> transformative experience that can shape an individual's personal and professional growth.</p>
<br>
<br>
<br><br>

<footer>
<p align="left"> All rights are reserved by Unifin. For further queries, Contact : <a href= "developer.html" id="GFG"> Developers. </a>
    </footer>
  </body>
</html>
