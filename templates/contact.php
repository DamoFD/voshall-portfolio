<?php

  // include send-email.php
  include('send-email.php');

?>

<!-- Contact Section -->
<section id="contact" class="color-bg-2">
        <div class="contact-container">
          <div class="contact-info">
            <div class="contact-head-container">
              <p class="slide-up color-primary font-size-med font-poppins">
                Contact
              </p>
              <h2 class="slide-up color-secondary font-size-header font-sans">
                Get in <span class="color-primary">Touch</span>.
              </h2>
              <div class="slide-up color-primary-bg line-break"></div>
              <p
                class="slide-up offset-300 color-text font-roboto font-size-small contact-text"
              >
                I'd love to hear from you, whether it's new oppurtunities, talk
                about my projects, or feedback. Let's have a chat.
              </p>
            </div>
            <div class="slide-up offset-300 icon-container">
              <a href="tel:775-624-4327">
                <img class="bounce" src="./assets/svg/phone.svg" />
              </a>
              <a href="tel:775-624-4327">
                <div class="icon-text">
                  <h3 class="color-secondary font-sans">Call Me</h3>
                  <p class="color-text font-roboto">(775) 624-4327</p>
                </div>
              </a>
            </div>
            <div class="slide-up offset-300 icon-container">
              <a href="mailto: contact@damionvoshall.com">
                <img class="bounce" src="./assets/svg/email.svg" />
              </a>
              <a href="mailto: contact@damionvoshall.com">
                <div class="icon-text">
                  <h3 class="color-secondary font-sans">Email Me</h3>
                  <p class="color-text font-roboto">
                    contact@damionvoshall.com
                  </p>
                </div>
              </a>
            </div>
            <div class="slide-up offset-600 social-container">
              <a href="https://github.com/DamoFD" target="_blank">
                <img class="bounce" src="./assets/svg/github.svg" />
              </a>
              <img class="bounce" src="./assets/svg/linkedin.svg" />
            </div>
          </div>
          <form method="post" action="contact.php" class="slide-up">
            <?php echo $result; ?>
            <label for="name" class="color-primary font-poppins font-size-med"
              >Name</label
            >
            <input
              class="color-secondary font-roboto font-size-med"
              type="text"
              name="name"
              id="name"
              required
            />
            <?php echo "<p class='font-size-small font-roboto err'>$errName</p>"; ?>
            <label for="email" class="color-primary font-poppins font-size-med"
              >Email</label
            >
            <input
              class="color-secondary font-roboto font-size-med"
              type="email"
              name="email"
              id="email"
              required
            />
            <?php echo "<p class='font-size-small font-roboto err'>$errEmail</p>"; ?>
            <label
              for="message"
              class="color-primary font-poppins font-size-med"
              >Message</label
            >
            <textarea
              class="color-secondary font-roboto font-size-med"
              name="message"
              id="message"
              required
            ></textarea>
            <?php echo "<p class='font-size-small font-roboto err'>$errMessage</p>"; ?>
            <button
              class="color-black-2 color-primary-bg font-roboto font-size-med"
              type="submit"
              name="submit"
            >
              Send Message
            </button>
          </form>
        </div>
        <p class="created-by color-text font-roboto">
          @2023 Created By <span class="color-primary">D</span>amion
          <span class="color-primary">V</span>oshall
        </p>
      </section>
      <!-- !Contact Section -->