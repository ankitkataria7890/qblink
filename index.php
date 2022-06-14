<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {box-sizing: border-box;}

      .openBtn {
        display: flex;
        justify-content: left;
      }
      .openButton {
        border: none;
        border-radius: 5px;
        background-color: #1c87c9;
        color: white;
        padding: 14px 20px;
        cursor: pointer;
        position: fixed;
      }
      .loginPopup {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        max-width: 300px;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      }

 .row {
  margin-left:5px;
  margin-right:5px;
}


.col {
  float:left;
  width: 30%;
  padding: 0px;
}

.btn {
  color:white;
  border: none;
  background-color: #07090a;
  padding: 8px 16px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  border-radius:5px;
}
.btn1 {
  color:white;
  border: none;
  background-color: #87898b;
  padding: 8px 16px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  border-radius:5px;
}
.btn2 {
  color:white;
  border: none;
  background-color: #b46b18;
  padding: 8px 16px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  border-radius:5px;
}
.btn3 {
  background: url(dwld.jpg) no-repeat;
  height:200px;
  width:200px;
  color:transparent;
  border: none;
  /* background-color: #07090a; */
  padding: 8px 16px;
  font-size: 40px;
  cursor: pointer;
  display: inline-block;
  /* text-indent: 100%;
  white-space: nowrap;
  overflow: hidden; */
  /* border-radius:6%; */
}
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #5CEADD;
  padding: 5px 5px;
  

}

.header a {
  float: left;
  color: Black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
 
}

.header a.logo {
  font-size: 20px;
  font-weight: bold;
  
}
.header a.logo1 {
  color:blue;
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body style="background-color:#E5E4E2">

<div class="header">
  <a href="#default" class="logo">Meerkat</a>
  
  <a href="#home" class="logo">   </a>
    <a href="#home" class="logo">QB Guide</a>
    <a href="#home" class="logo">   </a>
    <a href="#contact" class="logo">QD</a>
    <a href="#home" class="logo">   </a>
    <a href="#about" class="logo">Request</a>
    <a href="#home" class="logo">   </a>
	<a href="#about" class="logo">F&Q</a>
    <a href="#home" class="logo">   </a>
    <a href="#about" class="logo">Q&A</a>
    <a href="#home" class="logo">   </a>
	<a href="#about" class="logo"> Useful featues</a>
    <a href="#home" class="logo">   </a>
    <a href="#about" class="logo">Basic Builds:10</a>
    <a href="#home" class="logo">   </a>
	<a href="#about" class="logo">Running builds:1023</a>
	
	
  
</div>

<div style="padding-left:20px">
  
  <p style="text-align:right">Welcome Xyz | Sign Out </p>
  <button class="btn">Dashboard</button>
  <button class="btn1">Statistics</button>
  <button class="btn2">My</button>
  <input name="n1" type="text" style="float: right;" cellpadding="20" required autofocus></input><button style="float: right;" >Search Builds</button>
</div>
<hr style="height:3px;border-width:2;color:rgb(34, 72, 196);background-color:rgb(54, 17, 122)">

    QBTS > S > <p style="color: blue;">RBS</p>

    <center>
      <br>
      <br>
      <br>
        <!-- <textarea id="text-val" rows="10">This is demo text file for download purpose.</textarea><br/> -->
        <input type="button" class="btn3" id="dwn-btn" value='https://www.w3.org/TR/PNG/iso_8859-1.txt'/>
    </center>
</body>
<script>

function download(filename, text) {
   var element = document.createElement('a');
   element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
   element.setAttribute('download', filename);
 
   element.style.display = 'none';
   document.body.appendChild(element);
 
   element.click();
 
   document.body.removeChild(element);
 }
 
 // Start file download.
 document.getElementById("dwn-btn").addEventListener("click", function() {
   // Generate download of hello.txt file with some content
   //var text = document.getElementById("text-val").value;
   var filename = "hello.txt";
  // var text1;
    const URL = 'https://www.w3.org/TR/PNG/iso_8859-1.txt';
    fetch(URL)
    .then(res => res.text())
    .then(text => {
        download(filename, text);
        console.log(text);
    })
    .catch(err => console.log(err));
   //download(filename, text);
 }, false);
 </script>
  

</html>

