<html>
<head>
    <link rel="icon" type="image/icon" href="Image/imageod1.jpg" />
    <title>Odbest.com</title>
    <link rel="stylesheet" href="View/public/style.css"/>
    <link rel="stylesheet" href="drop.css"/>
</head>
<body>
        <div class="div1">
          
          <ul style="display: flex; justify-content: space-between;" type="none">
            <li style="margin-top: 6%;"><span class="" style="font-size: xxx-large;">Odbestcheapdata</span></li>
            <li style="margin-top: 3%;">
            <fieldset style="outline: none; border: none; z-index: 100;">
              <legend style="float: right;">
              <button onclick="display()" style="display: block;" id="but" class="" style="">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
                  <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                </svg>

              </button>
              </legend>
              <div style="text-align: right; background-color: white;">
                <button id="can" style="display: none; background-color: red;" onclick="back()">X</button>
                <ul style="color: white; text-align: left;">
              <p><li id="no1" style="display: none; "><a href="#about" style="text-decoration: none; color: navy;">About us</a></li> </p>
              <p><li id="no2" style="display: none;"><a href="#contact" style="text-decoration: none; color: navy;">Contact us</a></li></p>
              <p><li id="no3" style="display: none;"><button><a href="registration.php" style="text-decoration: none; color: navy;">Register</a></button></li></P>
              <li id="no4" style="display: none;"><button><a href="login.php" style="text-decoration: none; color: navy;">Login</a></button></li>
              </ul>
              </div>
            </fieldset>
          </li>
            
             
          </ul>
          
          
        </div>
        
    <div align="center" style="margin-top: 30px;">
    <img src="Image/imageod1.jpg" alt="image here" style="width: 80px; height: 80px; border-radius: 50px;"/>
        <h1 style="color:navy; font-size: xxx-large;">REGISTRATION PAGE</h1>
        <div style="text-align: center;">
        <?php
        if(isset($_GET['error']))
        {
          echo '<font style="color: red;">';
            echo "Fill all box";
            echo "</font>";
        }
        ?>

<?php
        if(isset($_GET['Errorgg']))
        {
          echo '<font style="color: red;">';
            echo "This email has already been registered";
            echo "</font>";
        }
        ?>
        </div>
        <fieldset class="divr" style="height: 50%;">
<form action="regpage.php" method="POST" enctype="multipart/form-data" >
   <P><tr><label>FULLNAME:</label><br/>
    <input type="text" name="fname" style="width: 80%; height: 30px;border-radius: 10px;" placeholder="type your fullname"/><br/></P>
   <P><label>USERNAME:</label><br/>
    <input type="text" name="uname" style="width: 300px; height: 30px;border-radius: 10px;" placeholder="type your username"/><br/></P>
    <P><label>EMAIL:</label><br/>
        <input type="email" name="semail" style="width: 300px; height: 30px;border-radius: 10px;" placeholder="insert your email" value=""/><br/></P>
    <P><label>DATE OF BIRTH:</label><br/>
    <input type="date" name="dob" style="width: 300px; height: 30px;border-radius: 10px;" placeholer="type your DOB"/><br/></P>
    <P><label>NATIONALITY:</label><br/>
    <select name="country" style="width: 300px; height: 30px;border-radius: 10px;" >
        <option value="">Choose One</option>
        <option value="Algeria">Algeria</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Ghana">Ghana</option>
        <option value="Nigeria">Nigeria</option>
        <option value="South Africa">South Africa</option>
    </select><br/></P>
<P><label>PASSWORD:</label><br/>
<input type="password" name="ypass" style="width: 300px; height: 30px;border-radius: 10px;" placeholder="insert your password" value=""/><br/></P>
<P><label>RE-PASSWORD:</label><br/>
<input type="password" name="yypass" style="width: 300px; height: 30px;border-radius: 10px;" placeholder="Confirm your password"/><br/></P></tr>
<button type="submit" style="background-color: navy; color:aliceblue;"><!--<a href="login.html" style="text-decoration: none; color: aliceblue;">submit</a>-->Submit</button>
</form>
</fieldset>
<P>Have you registered before? <a href="login.php" style="text-decoration: none;">LOGIN</a></P>
<p>Register with your google account.<a href="" style="text-decoration: none;">&nbsp GOOGLE</a></p>
<p>Register with your facebook account.<a href="" style="text-decoration: none;">&nbsp FACEBOOK</a></p>
    </div>
    <footer>
        <div style="background-color: navy; position: fixed; color: aliceblue; height: 100px; padding-left: 370px; margin-top: 200px; padding-top: 10px;"></div>
    </footer>
    <script src="oludav.js"></script>
</body>
</html>