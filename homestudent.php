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
              <p>  HELPIA: &nbsp; Welcome to helpia Students platform </p>
           
            </div>
            <h3><ul>
                <li><a href="#features">Features</a></li>
                <li><a href="studentdata.php">Database</a></li>
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
        <div class="feature" onclick="displayContent('Content1')">
           <a href="content.php" ><img src="https://instructionpartners.org/wp-content/uploads/2023/03/Blog-Featured-Photos-1-2.jpg" alt="Feature 1" height="130">
            <h3><h3>BIGNNER STUDENTS NURSERY OR PRIMARY SCHOOL</h3></h3></a>
            <p>Kwiga ururimi rw'IKINYARWANDA k'umunyeshuri ugitangira.</p>
        </div>

        <div class="feature" onclick="displayContent('Content2')">
          <a href="content.php">
            <img src="inter.jpeg" alt="Feature 1" height="150">
            <h3>INTERMEDIATE STUDENTS</h3> </a>
            <p>Kwiga uririmi rw'IKINYARWANDA ku munyeshuri ufite ubumenti bw'ibanze.</p>
        </div>
        <div class="feature" onclick="displayContent('Content3')">
        <a href="content.php"> <img src="advanced.jpeg" alt="Feature 1">
            <h3>ADVANCED STUDENTS</h3></a>
            <p>Kwiga uririmi rw'IKINYARWANDA ku munyeshuri ushaka kubyinjiramo cyane.</p>
        </div>
        <div class="feature" onclick="displayContent('Content4')">
            <img src="teache.jpeg" alt="Feature 1">
                    <h3>TEACHERS AVAILABLE</h3>
            <p>Abarimu bashobora gufasha umunyeshuri aho yaba ari hose.</p>
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


    <script >
        function displayContent(ContentId) {
    var containerele = document.getElementById('container-element');
    containerele.innerHTML = '';

    switch (ContentId) {
        case 'Content1':
            containerele.innerHTML = '<h2> BEGINNER STUDENTS:</h2><p>this is where kids who are a beginner to learn english language</p><p>Aha naho abana bashaka gutangira kwiga ururimi rwi kinyarwanda.</p>';
            break;
        case 'Content2':
            containerele.innerHTML = '<h2> INTERMEDIATE STUDENTS:</h2><p> This is where student who have already started to learn some english language. </p><p>Gukomeza kwiga ururimi rwi kinyarwanda ku munyeshuri usanzwe ufite ubumenyi bwi banze mu kinyarwanda.</p>';
            break;
        case 'Content3':
            containerele.innerHTML = '<h2>ADVANCED STUDENTS:</h2><p>This where the kids who have basic knowledge can access advanced skills to kids.</p><p>Aha naho abana bafite ubumenyi kururimi rwi kinyarwanda bashobora kongera ubumenyi kuri urwo rurimi.';
            break;
        case 'Content4':
            containerele.innerHTML = '';
            break;
        // Add more cases as needed
        default:
            containerele.innerHTML = '';
            break;
    }

}
    </script>
</body>
</html>
