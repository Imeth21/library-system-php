<html>
  <?php
     $Username=$_POST['Uname'];
     $password=sha1(($_POST['psw']));

     
     $fp=fopen("data.txt", "a");
fwrite($fp,$Username."/n");
fwrite($fp,$password."/n");
fclose($fp);


     ?>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="web project.css">
    
    </head>
    <style>
      body {
        background-image:url(nsbm-slider-0-1.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
      </style>
    <body>
       <div class="dd">
           <div class="slide"  style="background-image: url('nb.jpg');"></div>
           <div class="slide"  style="background-image: url('j.jpg');"></div>          
           <div class="slide"  style="background-image: url('l2.jpg');"></div>
           <div class="slide"  style="background-image: url('l3.jpg');"></div>
           <div class="text-block">
           <h1>NSBM LIBRARY SYSTEM</h1>


        </div>
        <script>
          var myIndex = 0;
          carousel();
          
          function carousel() {
            var i;
            var x = document.getElementsByClassName("slide");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 3000); 
          }
          </script>
        <ul>
           <li><a class="active" href="">Home</a></li>
            <li><a class="" href="myaccount.html">My Account</a></li>
            <li><a href="help.html">Contact Us</a></li> 
            <li><a href="about us.html">About</a></li>
          </ul>

          <div class="din">
            
               <div class="dropdown">
                <button class="dropbtn">SELECT CATEGORY</button>
                <div class="dropdown-content">
                <a href="accounting.html">Accounting</a>
                <a href="business.html">Bussiness</a>
                <a href="ict.html">Information & Communication Technology</a>
                <a href="novels.html">Novels</a>
                <a href="SE.html">Software Engneering</a>
                </div>
              </div>
              
            </form>
            <h3>Latest Books</h3>
            <div class="row">
              <div class="column">
                <img src="b1.jpg" width="230" >
              </div>
              <div class="column">
                <img src="b3.jpg" width="220" >
              </div>
              <div class="column">
                <img src="b4.jpg" width="230">
              </div>
              <div class="column">
                <img src="pic22.jpg" width="200" >
              </div>
              <div class="column">
                <img src="pic6.jpg" width="250" height="300">
              </div>
            </div>
          
          
          <script>
          filterSelection("all")
          function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
              w3RemoveClass(x[i], "show");
              if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
          }
          
          function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
            }
          }
          
          function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);     
              }
            }
            element.className = arr1.join(" ");
          }
         
          var btnContainer = document.getElementById("myBtnContainer");
          var btns = btnContainer.getElementsByClassName("btn");
          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function(){
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
            });
          }
          </script>
    </body>
</html>
