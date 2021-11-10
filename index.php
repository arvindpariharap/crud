<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form class="fm">
  <div class="cantainer">
  <label for="name">Name</label><br>
  <input type="text" name="name" placeholder="Enter Your Name"><br>
  <label for="email">Email</label><br>
  <input type="text" name="email" placeholder="Enter Your Email"><br><br>
  <label for="dob">Date Of Birth</label><br>
  <select name="month">
  <option value="month">month</option>
  <option value="month">jan</option>
  <option value="month">feb</option>
  </select>
  <select name="month">
  <option value="month">days</option>
  <option value="month">1</option>
  <option value="month">2</option>
  </select>
  <select name="month">
  <option value="month">years</option>
  <option value="month">1995</option>
  <option value="month">1996</option>
  </select><br>
  <label for="dob"> About yourself</label><br>
  <textarea id="yoursef" name="yoursef" >
  </textarea>
  <div id="captchaBackground">
 <canvas id="captcha">captcha text</canvas>
 <input id="textBox" type="text" name="text">
 <div id="buttons">
 <input id="submitButton" type="submit">
 <button id="refreshButton" type="submit">Refresh</button>
 </div>
 <span id="output"></span>
 </div>
</div>
 </form>
 <p id ="countdown">3:00</p>
 <script src="script.js"></script>
</body>
</html>