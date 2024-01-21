<?php
include("connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helpia - Multilingual Learning for Kids</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
              <p>  HELPIA: &nbsp;
                 Welcome to helpia teachers platform </p>
           
            </div>
            <h3><ul>
                <li><a href="#features">Features</a></li>
                <li><a href="teacherdata.php">Database</a></li>
                <li><a href="#download">Download</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="helpia.php">Logout</a></li>
            </ul></h3>
        </nav>
    </header>

    <section class="mission">
        <div class="mission-content">
            <h2>Our Mission</h2>
            <p>At Helpia, our mission is to empower young learners with a fun and accessible platform that bridges language barriers, promotes interactive learning, and nurtures the joy of knowledge.</p>
        </div>
    </section>

    <section id="features" class="features">
        <h2>Key Features</h2>
        <div class="feature" onclick="displayContent('content1')">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrcV8CPt2JQPbxODNwNH-zqpIOJI-zLmwy23Do6pdwutdu7qj_q0CGq8pCp0MQ3Pq25Zs&usqp=CAU" alt="Feature 1"height="140">
            <h3>Content for bignner student</h3>
            <p>Learn in Kinyarwanda and English.</p>
        </div>

        <div class="feature" onclick="displayContent('content2')">
            <img src="https://instructionpartners.org/wp-content/uploads/2023/03/Blog-Featured-Photos-1-2.jpg" alt="Feature 1">
            <h3>Content for intermediate students</h3>
            <p>Engage with images and words.</p>
        </div>
        <div class="feature" onclick="displayContent('content3')">
            <img src="untitled.jpeg" alt="Feature 1">
            <h3>Content for advanced student</h3>
            <p>Monitor your child's learning journey.</p>
        </div>
        <div class="feature" onclick="displayContent('content4')">
            <img src="imag.jpeg" alt="Feature 1" height="130" width="150">
                    <h3>All teachers guide both languages</h3>
            <p>Enjoy learning with colorful images.</p>
        </div>
       <div id="container-element" class="container-element">
       <!--content are displayed here-->
  <h1 align="center">More information</h1>
       </div>
    </section>
    <section id="download" class="download">
        <div class="download-content">
            <h2>Download "Helpia" Today</h2>
            <p>Get started on your child's educational adventure with Helpia. Join us in creating a world of knowledge and fun learning.</p>
            <a href="#" class="cta-button">Download Now</a>
        </div>
    </section>

   <!-- ... (previous HTML code) ... -->

<section id="contact" class="contact">
    <div class="contact-content">
        <h2>Contact Us</h2>
        <p>Have questions or suggestions? We'd love to hear from you!</p>
        <form action="message.php" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email" required>Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="role">Role:</label>
            <input type="text" id="role" name="role" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit" class="cta-button" name="submit">Send</button>
        </form>
    </div>
</section>

<!-- ... (remaining HTML code) ... -->


   <!-- ... (previous HTML code) ... -->

<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2023 Helpia</p>
        <p>Developed by Paradise Shema</p>
    </div>
</footer>


    <script src="script.js"></script>
</body>
</html>
