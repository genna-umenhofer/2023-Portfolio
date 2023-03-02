<?php 
include("header.php");
include("functions.php");
include(".env.php");
?>


<section id="hero">
  <div class="white-background">
    <h1 class="large-text">Hello, I'm Genna! I'm a passionate <br><strong> full stack developer </strong><br>with an eye for design.</h1>
    <div class="line"></div>
    <div>
      <p class="med-text">Ready to start a new project?</p>
      <div class="flex-row-center">
        <a href="#contact" class="contact-button margin">Contact Me</a>
        <a href="assets/Umenhofer Website Resume 2023.pdf" class="contact-button margin" download>Download My Resume</a>
      </div>

    </div>
  </div>
</section>

<div id="portfolio" class="anchor"></div>
<main id="projects">
  <h2 class="center-text section-header">My Portfolio</h2>
  <div class="container">
  <article class="large-card">
      <hr>
        <div class="large-project-icon">
          <h3 class="center-text" id="project1">Inventory Management Application: <br>Simply Complex Art Shop</h3>
        </div>
      <div class="stack-icons">
        <i class="devicon-html5-plain" title="HTML5"></i>
        <i class="devicon-css3-plain" title="CSS3"></i>
        <i class="devicon-javascript-plain" title="JavaScript"></i>
        <i class="devicon-php-plain" title="PHP"></i>
        <i class="devicon-mysql-plain" title="MySQL"></i> 
        <i class="devicon-figma-plain" title="Figma"></i>
      </div>
      <div class="flex-row-center">
        <a href="https://docs.google.com/document/d/18gClgbfbypEvCDCF1qMu5Qx09Hwn9LD4YrYL_9XhJps/edit?usp=sharing" target="_blank" class="project-icon">Design Docs</a>
        <a href="https://github.com/genna-umenhofer/scas-inventory" target="_blank" class="project-icon">GitHub Code</a>
        <a href="https://simplycomplexinventory.com" target="_blank" class="project-icon">Live Site</a>
      </div>
      <h4>About the Project</h4>
      <p>This is a current project I am developing for Simply Complex Art Shop. The application will manage their inventory databases, which will, in turn, automatically update their website. The server-side code was written using PHP, and dynamic page functions were created with JavaScript, HTML, and CSS. SQL was used to create and access the relational databases.</p>
      <br>
      <div class="side-by-side">
        <div>
          <h4>Completed Features</h4>
          <p>- Log-in system</p>
          <p>- Add an inventory item</p>
          <p>- Delete an inventory item</p>
          <p>- View an inventory item</p>
          <p>- Search through inventory</p>
        </div>

        <div>
          <h4>Features In-The-Works</h4>
          <p>- Edit an inventory item</p>
          <p>- Upload photos for inventory items</p>
          <p>- Online order tracker</p>
          <p>- Expense tracker</p>
        </div>

      </div>

      <hr>
    </article>

    <article class="large-card">
      <hr>
        <div class="large-project-icon">
          <h3 class="center-text" id="project1">E-commerce Website: <br>Simply Complex Art Shop</h3>
        </div>
      <div class="stack-icons">
        <i class="devicon-html5-plain" title="HTML5"></i>
        <i class="devicon-css3-plain" title="CSS3"></i>
        <i class="devicon-javascript-plain" title="JavaScript"></i>
        <i class="devicon-php-plain" title="PHP"></i>
        <i class="devicon-mysql-plain" title="MySQL"></i>
        <i class="devicon-figma-plain" title="Figma"></i>
      </div>
      <div class="flex-row-center">
      <a href="assets/Simply Complex UX_UI Design Portfolio.pdf" class="project-icon" download>Design Docs</a>
        <a href="https://github.com/genna-umenhofer/new-simply-complex" target="_blank" class="project-icon">GitHub Code</a>
        <a href="https://simplycomplexartshop.com" target="_blank" class="project-icon">Live Site</a>
      </div>
      <h4>About the Project</h4>
      <p>I am the designer and developer. I worked with the business owners to buld an online presence that is true to the shop's vision. Through ongoing conversations with the business owners, I put together competitive analysis and user stories. The site will connect to the inventory management app (see the Inventory Manager above).</p>
      <br>
      <div class="side-by-side">
        <div>
          <h4>Completed Features</h4>
          <p>- Contact form with Google's Recaptcha</p>
          <p>- Social media links & feeds embedded in page</p>
          <p>- Event calendar linked to external event websites</p>
          <p>- Search engine optimization</p>
        </div>
        <div>
          <h4>Features In-The-Works</h4>
          <p>- Online store connected to inventory manager</p>
          <p>- Hero gallery of photos</p>
          <p>- Mailing list joining</p>
        </div>
      </div>
     
      <hr>
    </article>

    <article class="large-card">
      <hr>
      <div class="large-project-icon">
        <h3 class="center-text" id="project2">Educational Web Application: <br>GuacaMOLE</h3>
      </div>
      <div class="stack-icons">
        <i class="devicon-html5-plain" title="HTML5"></i>
        <i class="devicon-css3-plain" title="CSS3"></i>
        <i class="devicon-javascript-plain" title="JavaScript"></i>
        <i class="devicon-php-plain"  title="PHP"></i>
        <i class="devicon-mysql-plain" title="MySQL"></i>
        <i class="devicon-figma-plain" title="Figma"></i>
      </div>
      <div class="flex-row-center">
        <a href="assets/GuacaMOLE UX_UI Design Portfolio.pdf"  class="project-icon" download>Design Docs</a>
        <a href="https://github.com/genna-umenhofer/GuacaMOLE" target="_blank" class="project-icon">GitHub Code</a>
        <a href="https://guacamole.one" target="_blank" class="project-icon">Live Site</a>
      </div>
      <h4>About the Project</h4>
      <p>This is my passion project. It was inspired by the need for robust practice problems for chemistry students and teachers. The site features lesson plans that include hands-on labs and activities to allow teachers to integrate GuacaMOLE into their classrooms easily.</p>
      <br>
      <div class="side-by-side">
        <div>
          <h4>Completed Features</h4>
          <p>- Topic selection and practice problem generator</p>
          <p>- Real-world connection blog for students</p>
          <p>- Lesson plans for several topics</p>
        </div>
        <div>
          <h4>Features In-The-Works</h4>
          <p>- Additional lesson plans</p>
          <p>- Additional practice problems</p>
        </div>
      </div>

      <hr>
    </article>
</main>

<div id="about" class="anchor"></div>

<section id="about-me">
  <div class="img-container">
    <img src="./assets/headshot.jpeg" alt="photo-of-genna" id="about-photo">
  </div>
  <div>
    <h2>About Me</h2>
    <p class="about-text">Hello, I'm Genna Umenhofer. I'm a <strong>full stack developer </strong> with an eye for design. <br><br>I love this industry because it is full of <strong>complex</strong> ideas, <strong>relevant</strong> problems, and the <strong>opportunity</strong> to learn new things. My favorite part about working with clients is hearing the <strong>passion</strong> in their voice, and translating that to an <strong>impactful</strong> final product. Let's discuss your passions, and get started on your project!</p>
    <div class="flex-row-left">
        <a href="#contact" class="project-icon">Contact Me</a>
        <a href="assets/Umenhofer Website Resume 2023.pdf" class="project-icon" download>Download Resume</a>
      </div>
  </div>
</section>

<div id="contact" class="anchor"></div>
<section id="contact-form">
  <div class="white-background">
    <h1 class="center-text section-header dark-text-no-hover">Contact Me</h1>
    <div class="line"></div>

    <form id="contact-me" action="send-email.php" method="POST">
      <input type="text" id="name" name="name" placeholder="Your Name" required />
      <input type="email" id="email" name="email" placeholder="Your Email" required />
      <textarea type="textarea" rows="5" id="message" placeholder="Your Message" name="message" required></textarea>
      <div class="side-by-side">
        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey ?>"></div>
        <input type="submit" class="contact-button full-size" id="submit-form-button" />
      </div>

    </form>

  </div>

</section>


<?php include "footer.php" ?>