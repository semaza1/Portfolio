<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Emmanuel's Portfolio</title>
    <meta name="description" content="My portfolio" />

    <link rel="stylesheet" href="styles.css" />
    <link rel="icon" href="./Assets/emmanuel.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont">
            <img
              src="./Assets/emmanuel.jpg"
              alt="Emmanuel SEMAZA logo image"
              class="header__logo-img"
            />
          </div>
          <span class="header__logo-sub">Emmanuel SEMAZA</span>
        </div>
        <div class="header__main">
          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="./index.php" class="header__link"> Home </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./index.php#about" class="header__link"> About </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./index.php#projects" class="header__link">
                Projects
              </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./index.php#contact" class="header__link"> Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <section class="home-hero">
      <div class="home-hero__content">
        <h1 class="heading-primary">Hey👋, I'm Emmanuel</h1>
        <div class="home-hero__info">
          <p class="text-primary">
            I am  a skilled front-end developer and UI/UX designer proficient in using HTML, CSS, JavaScript, PHP, and Figma to create productive and effective user interfaces and experience. 
          </p>
        </div>
        <div class="home-hero__cta">
          <a href="./#projects" class="btn btn--bg">Projects</a>
        </div>
        <div class="scroll_down">
          <img src="./Assets/bi--arrow-down-circle-fill.png" alt="scroll down" height="50px" width="50px" class="down">
        </div>
      </div>
      <div class="home-hero__socials">
        <div class="home-hero__social">
          <a href="https://www.linkedin.com/in/emmanuel-semaza-2643b5267/" target="_blank"
          class="home-hero__social-icon-link">
            <img
              src="./assets/bi--linkedin.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=app&pli=1" target="_blank"
          class="home-hero__social-icon-link">
            <img
              src="./assets/bi--google.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="https://github.com/semaza1" target="_blank"
          class="home-hero__social-icon-link">
            <img
              src="./assets/bi--github.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="https://www.facebook.com/semaza.emmanuel" target="_blank"
          class="home-hero__social-icon-link">
            <img
              src="./assets/bi--facebook.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a
            href="https://www.instagram.com/emm_nyaxo/" target="_blank"
            class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
          >
            <img
              src="./assets/bi--instagram.png"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
      </div>
    </section>
    <section id="about" class="about sec-pad">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main">About Me</span>
          <span class="heading-sec__sub">
            Here you will find more information about me, what I do, and my current skills mostly in terms of programming and technology. Feel free to explore!
          </span>
        </h2>
        <div class="about__content">
          <div class="about__content-main">
            <h3 class="about__content-title">Get to know me!</h3>
            <div class="about__content-details">
              <p class="about__content-details-para">
                Hey! It's
                <strong>Emmanuel SEMAZA</strong>.
                I'm a <strong>Frontend Web Developer </strong>and  <strong>UI/UX designer</strong> located in
                Rwanda. I use different materials to make productive and effective projects. I look forward to <strong>collaborate</strong> with you and <strong> explore</strong> more together.
              </p>
              <p class="about__content-details-para">
                Feel free to
                <strong>contact</strong> me here.
              </p>
            </div>
            <a href="./#contact" class="btn btn--med btn--theme dynamicBgClr"
              >Contact</a
            >
          </div>
          <div class="about__content-skills">
            <h3 class="about__content-title">My Skills</h3>
            <div class="skills">
              <div class="skills__skill">HTML</div>
              <div class="skills__skill">CSS(Cascading Style Sheets)</div>
              <div class="skills__skill">JavaScript</div>
              <div class="skills__skill">React Js</div>
              <div class="skills__skill">GitHub</div>
              <div class="skills__skill">Figma</div>
              <div class="skills__skill">PHP</div>
              <div class="skills__skill">Python</div>
              <div class="skills__skill">Django</div>
              <div class="skills__skill">MySQL</div>
              <div class="skills__skill">CMU Python Programming</div>
              <div class="skills__skill">IOS</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="projects" class="projects sec-pad">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-bg">
          <span class="heading-sec__main">Projects</span>
          <span class="heading-sec__sub">
            Here you will find some of the personal and clients projects that I created with each project containing its own case study.
          </span>
        </h2>

        <div class="projects__content">
          <div class="projects__row">
            <div class="projects__row-img-cont">
              <img
                src="./Assets/projects/Screenshot__3_-removebg-preview.png"
                alt="Software Screenshot"
                class="projects__row-img"
                loading="lazy"
              />
            </div>
            <div class="projects__row-content">
              <h3 class="projects__row-content-title">Pharmacy Management System</h3>
              <p class="projects__row-content-desc">
                This project came up to help doctors and Pharmacist to manage a stock of Pharmacy. It counts how many drugs in stock and how many are outstored. It cheack if the drug request has been approved or not.
              </p>
              <a
                href="#"
                class="btn btn--med btn--theme dynamicBgClr"
                target="_blank"
                >Case Study</a
              >
            </div>
          </div>
          <div class="projects__row">
            <div class="projects__row-img-cont">
              <img
                src="./Assets/projects/_ HP Elite Dragonfly (1).png"
                alt="Software Screenshot"
                class="projects__row-img"
                loading="lazy"
              />
            </div>
            <div class="projects__row-content">
              <h3 class="projects__row-content-title">Voting System</h3>
              <p class="projects__row-content-desc">
                This is Voting System which help people to inhance democracy among themselves. It allows the admin to register the candidate then users vote for the registered candidate.
              </p>
              <a
                href="#"
                class="btn btn--med btn--theme dynamicBgClr"
                target="_blank"
                >Case Study</a
              >
            </div>
          </div>
          <div class="projects__row">
            <div class="projects__row-img-cont">
              <img
                src="./assets/projects/_ HP Elite Dragonfly.png"
                alt="Software Screenshot"
                class="projects__row-img"
                loading="lazy"
              />
            </div>
            <div class="projects__row-content">
              <h3 class="projects__row-content-title">Me - Portfolio</h3>
              <p class="projects__row-content-desc">
                I successfully created my Portfolio which allows me to connect with my clients and employers. It shows all my abilities and strength in programming.
              </p>
              <a
                href="#"
                class="btn btn--med btn--theme dynamicBgClr"
                target="_blank"
                >Case Study</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact sec-pad dynamicBg">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main heading-sec__main--lt">Contact</span>
          <span class="heading-sec__sub heading-sec__sub--lt">
            Feel free to Contact me by submitting the form below and I will get back to you as soon as possible
          </span>
        </h2>
        <p style="color: green; font-weight: 600; text-align: center; font-size: 1.5rem;">
                    <?php  if (isset($_GET['error'])){
                        $error = $_GET['error'];
                        echo $error;
                    }?>
                </p>
        <div class="contact__form-container">
          <form action="adminConn.php" class="contact__form" method="post">
            <div class="contact__form-field">
              <label class="contact__form-label" for="name">Name</label>
              <input
                required
                placeholder="Enter Your Name"
                type="text"
                class="contact__form-input"
                name="name"
                id="name"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input
                required
                placeholder="Enter Your Email"
                type="text"
                class="contact__form-input"
                name="email"
                id="email"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea
                required
                cols="30"
                rows="10"
                class="contact__form-input"
                placeholder="Enter Your Message"
                name="message"
                id="message"
              ></textarea>
            </div>
            <button type="submit" class="btn btn--theme contact__btn" name="sub">
              Submit
            </button>
          </form>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="main-container">
        <div class="main-footer__upper">
          <div class="main-footer__row main-footer__row-1">
            <h2 class="heading heading-sm main-footer__heading-sm">
              <span>Social media</span>
            </h2>
            <div class="main-footer__social-cont">
              <a target="_blank" rel="noreferrer" href="#">
                <img
                  class="main-footer__icon"
                  src="./assets/bi--linkedin.png"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://myaccount.google.com/?utm_source=OGB&utm_medium=app&pli=1">
                <img
                  class="main-footer__icon"
                  src="./assets/bi--google.png"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://github.com/semaza1">
                <img
                  class="main-footer__icon"
                  src="./assets/bi--github.png"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://facebook.com/semaza.emmanuel">
                <img
                  class="main-footer__icon"
                  src="./assets/bi--facebook.png"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://instagram.com/emm_nyaxo">
                <img
                  class="main-footer__icon main-footer__icon--mr-none"
                  src="./assets/bi--instagram.png"
                  alt="icon"
                />
              </a>
            </div>
          </div>
          <div class="main-footer__row main-footer__row-2">
            <h4 class="heading heading-sm text-lt">Emmanuel SEMAZA</h4>
            <p class="main-footer__short-desc">
              I'm a <strong> Frontend Web Developer </strong> and <strong>UI/UX designer</strong> located in
                Rwanda. Do not hesitate to <strong>connect</strong> and <strong>collaborate</strong> with me. Feel free to contact me here.
            </p>
          </div>
        </div>

        <!-- If you give me some credit or shoutout here by linking to my website, then it will be a big thing for me and will help me a lot :) -->
        <div class="main-footer__lower">
          &copy; Copyright 2024. Made by
          <a rel="noreferrer" target="_blank" href="index.html"
            >Emmanuel SEMAZA</a
          >
        </div>
      </div>
    </footer>

    <script src="./index.js"></script>
  </body>
</html>