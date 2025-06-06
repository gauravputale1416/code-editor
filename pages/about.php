<?php session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/about.css">
    <link rel="icon" href="./../imges/navlogo.png">
      <!--footer-->
   <style>
    .footer {
  background:rgb(0, 0, 0);
  padding: 40px;
  display: flex;
  justify-content: space-between;
  align-items: start;
  color: white;
  flex-wrap: wrap;
}
.newsletter {
  max-width: 400px;
  color: white;
}
.newsletter form {
  display: flex;
  gap: 10px;
  align-items: center;
}
.newsletter input {
  flex: 1;
  padding: 10px;
  border-radius: 20px;
  border: none;
}
.subscribe-btn {
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  background-color: rgb(255, 61, 0);
    color: black;
    font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
.subscribe-btn:hover {
  background-color: #e65c00;
}
.social-icons {
  display: flex;
  gap: 18px;
  margin-top: 18px;
}
.social-icons a {
  width: 30px;
  height: 30px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background: white;
  color: white;
  text-decoration: none;

}
.links, .contact, .support {
  max-width: 300px;
  color: white;
  text-decoration: none;
}
.contact a, .support a {
  color: white;
  text-decoration: none;
  color: white;
}
.support p {
  margin: 5px 0;
  color: white;
  color: white;
}
.copyright {
  text-align: center;
  padding: 20px;
  color: white;
  background:rgb(0, 0, 0);
  font-size: 14px;
  
}
.home-link{
  text-decoration: none;
  color: white;
}
</style>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="./../index.php"><img src="./../imges/logo.png" alt=""></a></label>

        <!-- <input type="text" class="search_box" placeholder="Search...">
        <img src="/imges/search.png" alt="" class="search_icon"> -->

        <div class="search-container">
            <input type="text" class="search-box" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
          </div>
          

        <ul>
            <li><a class="active" href="./../index.php">Home</a></li>
            <li><a href="./codezone.php">CodeZone</a></li>
            <li><a href="./tutorials.php">Tutorials</a></li>
            <li><a href="./about.php"><b>About</b></a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
        <div class="auth-area">
            <?php if ($username): ?>

                <a href="./../pages/logout.php" class="signup_btn">Sign Out</a>
            <?php else: ?>
                <button class="signup_btn" onclick="window.location.href='./../pages/signin.php'">Sign In</button>
            <?php endif; ?>
        </div>
    </nav>
    <div class="content block">
        <h1 class="heading">About Us</h1>
        <div class="containerpara">
            <h2 class="subheading">About CodeVerse</h2> <hr>
        <p class="aboutcodeversapara">Welcome to CodeVerse, CodeVerse is an open-source, cloud-based coding platform that enables developers to write, execute, and test code in multiple programming languages—all within a powerful and user-friendly interface. Built for learners, hobbyists, and professionals, CodeVersa serves as a comprehensive hub for coding, debugging, and collaboration.the ultimate open-source coding platform where you can write, execute, and explore code seamlessly. Whether you're a beginner learning the basics or an experienced developer working on advanced projects, CodeVersa provides a robust environment to bring your ideas to life.</p></div>

        
       <div class="containerpara"><h2 class="subheading" >Why CodeVerse?</h2> <hr><li class="para-content" style="color:rgb(64, 224, 109)">Write & Execute Code Instantly: Run your code in multiple programming languages without any setup.</li>

        <li class="para-content" style="color:violet">Open-Source & Community-Driven: Contribute, collaborate, and improve CodeVersa with the power of open-source development.</li>

        <li class="para-content" style="color:tomato">Interactive Tutorials & Learning Hub: Access high-quality tutorials and coding guides to level up your skills.</li>

        <li class="para-content" style="color:tan">Seamless Collaboration: Share your code, work on projects together, and build innovative solutions.</li></div>


       
        <div class="containerpara">
            <h2 class="subheading">🚀 Key Features</h2> <hr>
        <p style="font-size: 20px; color: white; margin-left: 50px;">🖥️ Multi-Language Support</p>
        <p class="para-content">CodeVerse provides an execution environment for multiple programming languages, including:</p>

        <li class="para-content"> <img src="./../imges/python.png" alt="pythonimg" height="20px"> Python (for data science, automation, AI/ML)</li>

        <li class="para-content"><img src="./../imges/java-script.png" alt="jsimg" height="20px">
            JavaScript & 
            <img src="./../imges/typescript.png" alt="tsimg" height="20px">
            TypeScript (for web development and Node.js applications)</li>

        <li class="para-content"><img src="./../imges/c-.png" alt="pythonimg" height="20px">
             C,<img src="./../imges/c-sharp.png" alt="pythonimg" height="20px">C++,
             <img src="./../imges/java.png" alt="pythonimg" height="20px">
             Java (for competitive programming and software development)</li>

        <li class="para-content"><img src="./../imges/swift.png" alt="pythonimg" height="20px">
            Swift,<img src="./../imges/rust.png" alt="pythonimg" height="20px">
             Rust (for high-performance applications)</li>

        <li class="para-content"><img src="./../imges/sql-server.png" alt="pythonimg" height="20px">
            SQL (for database management and queries)</li>

        <li class="para-content"><img src="./../imges/shellscripting.png" alt="" height="20px">Shell Scripting &<img src="./../imges/devops.png" alt="pythonimg" height="20px"> DevOps Tools (for automation and cloud computing)</li></div>

        
        <div class="containerpara">
            <h2 class="subheading">🔥 Our Mission</h2> <hr>
        <p class="para-content">At CodeVerse, we aim to democratize coding by providing an open, scalable, and efficient coding environment for everyone—from students to professionals. <br> Our mission is to:</p>
        <p class="para-content">✅ Make coding accessible and barrier-free <br> ✅ Provide an all-in-one development and learning ecosystem <br> ✅ Empower developers with cutting-edge tools for innovation</p></div>
    </div>

    

  


<div class="line-container block">
        <div class="line "></div>
    </div>
    <footer class="footer">
        <div class="newsletter">
            <h3>Subscribe to our newsletter to stay in touch with the latest.</h3>
            <form>
                <input type="email" placeholder="Your email address">
                <button class="subscribe-btn">Subscribe</button>
            </form>
            <div class="social-icons">
                <a href="#"><img src="./../imges/facebook.png" alt="facebook" style="height: 30px;"></a>
                <a href="#"><img src="./../imges/instagram.png" alt="instagram" style="height: 35px;"></a>
                <a href="#"><img src="./../imges/linkedin.png" alt="linkedin" style="height: 30px;"></a>
                <a href="#"><img src="./../imges/twitter.png" alt="twitter" style="height: 30px;"></a>
                <a href="#"><img src="./../imges/github.png" alt="github" style="height: 30px;"></a>
            </div>
        </div>
        <div class="links">
            <h4>Pages</h4>
             <a href="./../index.php" class="home-link"><p>Home</p></a>
            <a href="./tutorials.php" class="home-link"><p>Toturials</p></a>
            <a href="./codezone.php" class="home-link"> <p>CodeZone</p></a>
            <a href="./about.php" class="home-link"> <p>About Us</p></a>
           
        </div>
        <div class="contact">
            <h4>Drop Us a Line</h4>
            <p><a href="mailto:inquiry@halo-lab.com">inquiry@halo-lab.com</a></p>
            <h4>Call Us</h4>
            <p><a href="tel:+12133378573">+1 (213) 337-8573</a></p>
        </div>
        <div class="support">
            <h4>Support</h4>
            <p>Help Center</p>
            <p>Community Forum</p>
            <p>Report a Problem</p>
        </div>
    </footer>
    <div class="copyright">© 2025 Your Company. All rights reserved.</div>
</body>
</html>