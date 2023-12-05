<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PALMTOP.lk</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet" />
    <link href="Style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="LAP.php">&nbsp;</a
        ><a href="LAP.php"
          ><img
            src="images/logonew.jpg"
            alt=""
            width="202"
            height="91"
            class="img-fluid"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent1"
          aria-controls="navbarSupportedContent1"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="LAP.php"
                ><b>Home</b> <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html"><b>About</b>&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promo.html"><b>Promo</b>&nbsp;</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="location.html"><b>Location</b>&nbsp;</a>
            </li>

            <li class="nav-item">
              <a onclick="checker()" class="nav-link" href="contact.html"
                ><b>Contact</b>&nbsp;</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown1"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <b>Brands</b>&nbsp;
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="brandsAndCateg.html">Dell</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html">HP</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html">MSI</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html">Asus</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html">Macbooks</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html">Lenovo</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown2"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><b>Categories</b> <b></b>&nbsp;
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="brandsAndCateg.html">
                  Speakers
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html">
                  Projectors</a
                >
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html">UBS HUB</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="brandsAndCateg.html"
                  >Printers and Scanners</a
                >
              </div>
            </li>
          </ul>
          <form>
            <a href="signup.html"><strong>Sign Up&nbsp;</strong> </a>|
            <a href="login.html"> <strong> &nbsp;Login</strong></a>
          </form>
        </div>
      </nav>
      <br />
      <div class="container">
        <form>
          <center>
            <input
              type="text"
              id="searchInput"
              placeholder="Search your Laptop"
            />
            <button>Search</button>
          </center>
        </form>
        <br />

        <div
          id="carouselExampleIndicators1"
          class="carousel slide"
          data-ride="carousel"
          style="background-color: grey"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators1"
              data-slide-to="0"
              class="active"
            ></li>
            <li
              data-target="#carouselExampleIndicators1"
              data-slide-to="1"
            ></li>
            <li
              data-target="#carouselExampleIndicators1"
              data-slide-to="2"
            ></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img
                class="d-block mx-auto img-fluid"
                src="images/hero_intro_endframe__e6khcva4hkeq_large.jpg"
                alt="First slide"
                width="1150"
                height="550"
                <class="d-block mx-auto"
              />
              <div class="carousel-caption">
                <h5>F O R W O R K !</h5>
                <p>Dream, work, achieve – repeat</p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                class="d-block mx-auto img-fluid"
                src="images/gotreal.jpg"
                alt="Second slide"
                width="1150"
                height="550"
              />
              <div class="carousel-caption">
                <h5>G A M I N G E X P E R I E N C E!</h5>
                <p>Ctrl+Alt+Defeat the ordinary.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img
                class="d-block mx-auto img-fluid"
                src="images/c.jpg"
                alt="Third slide"
                width="1150"
                height="550"
              />
              <div class="carousel-caption">
                <h5>L I V E E X P E R I E N C E!</h5>
                <p>Coding: where the magic happens, one line at a time.</p>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators1"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleIndicators1"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <br />
        <hr />
        <h1 class="text-center text-uppercase">
          <strong>leave your desktop behind !!!&nbsp; &nbsp; &nbsp;</strong>
        </h1>
        <br />
        <div class="row">
        <?php include './server/view_card_devices.php';?>
          
          <div class="col-4">
            <div class="card col-md-4 col-lg-12">
              <img
                class="card-img-top"
                src="images/1.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  <strong>HP Pavillion&nbsp;&nbsp;</strong>
                </h5>
                <p class="card-text">
                  HP Pavilion laptops are ideal for gamers because of their
                  cutting-edge hardware and various options. This laptop lineup
                  is built to last and can handle high performance.
                  Additionally, it has a brand-new design projected to be better
                  than ever and resist lags and halts to your gaming
                  experience.&nbsp;Windows 11 Home13th Generation Intel® Core™
                  i7 processorIntel® Iris® Xᵉ Graphics16 GB memory; 512 GB SSD
                  storage15.6" diagonal FHD display.&nbsp;Increased thermal
                  cooling and etc.&nbsp;
                </p>
                <center>
                  <a href="orderplace.html" class="btn btn-primary">Buy</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card col-md-4 col-lg-12">
              <img
                class="card-img-top"
                src="images/2.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  <strong>Vivo Book Pro&nbsp;&nbsp;</strong>
                </h5>
                <p class="card-text">
                  The uncompromising powerhouse for discovering your potential
                  and exploring the future. Vivobook Pro 16X OLED brings you the
                  speed and accuracy you need to realize your vision, with a
                  16-inch NanoEdge 4K OLED1 display, 11th Generation Intel® H
                  Series CPU, and NVIDIA® GeForce RTX™ 3050 graphics. The
                  exclusive ASUS DialPad gives you precise and intuitive control
                  of your creative tools, and the dual-fan cooling design lets
                  you work in undisturbed peace.
                </p>
                <center>
                  <a href="orderplace.html" class="btn btn-primary">Buy</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card col-md-4 col-lg-12">
              <img
                class="card-img-top"
                src="images/3.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  <strong>New worlds of color - ASUS&nbsp; &nbsp;</strong>
                </h5>
                <p class="card-text">
                  At a gray-level brightness of 16 G, LCD laptops only have an
                  11% DCI-P3 color gamut, while ASUS OLED laptops maintain a
                  100% DCI-P3 color gamut.&nbsp;The consensus is that the
                  "non-colours", white and black, and the colours yellow, green,
                  and orange are generally most acceptable. These colours
                  (yellow, green, orange) are in the middle of the visible
                  spectrum (the range of colours that our eyes can detect) and
                  are the easiest for the eye to see.&nbsp;
                </p>
                <center>
                  <a href="orderplace.html" class="btn btn-primary">Buy</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card col-md-4 col-lg-12">
              <img
                class="card-img-top"
                src="images/mac.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  <strong>&nbsp;Macbook Pro</strong>
                </h5>
                <p class="card-text">
                  The Mac Pro is designed for professionals who work with
                  applications that use as many processing cores as
                  possible—video-editing applications, image-editing software,
                  3D programs, audio editing, software developers, and the
                  like.The MacBook is a brand of Mac notebook computers designed
                  and marketed by Apple Inc.MacBook Pro is available in 14- and
                  16‑inch models. Each can be configured with the M2 Pro or M2
                  Max chip and offers pro performance in a laptop.
                </p>
                <center>
                  <a href="orderplace.html" class="btn btn-primary">Buy</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card col-md-4 col-lg-12">
              <img
                class="card-img-top"
                src="images/dell.jpeg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  <strong>Dell Inspiron</strong>
                </h5>
                <p class="card-text">
                  The Dell Inspiron 16 2-in-1 (2023) and the HP ENVY x360 15
                  (2023) are both very good Windows convertible laptops that
                  provide a similar user experience. The Dell feels sturdier but
                  isn't quite as portable since it's a larger device.Dell
                  Inspiron is a Windows 10 laptop with a 15.60-inch display that
                  has a resolution of 1920x1080 pixels. It is powered by a APU
                  Quad Core A6 processor and it comes with 8GB of RAM. The Dell
                  Inspiron packs 1TB of HDD storage.Dell Inspiron Laptops - Dell
                  Laptops.
                </p>
                <center>
                  <a href="orderplace.html" class="btn btn-primary">Buy</a>
                </center>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card col-md-4 col-lg-12">
              <img
                class="card-img-top"
                src="images/lenovo.jpg"
                alt="Card image cap"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  <strong>Lenovo Ideapad</strong>
                </h5>
                <p class="card-text">
                  Some of the features that defined these first three models
                  were widescreens, VeriFace facial recognition, frameless
                  screens, touch controls, and Dolby speaker systems. The
                  IdeaPad design marked a deviation from the business-oriented
                  ThinkPad laptops, towards a more consumer-oriented look and
                  feel.Working and playing with excellent performance. The
                  Lenovo IdeaPad 5i is an excellent all-around performer, a
                  crisp and bright display and impressive battery life.
                </p>
                <center>
                  <a href="orderplace.html" class="btn btn-primary">Buy</a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <br />
        <hr />
        <h4 class="text-center">
          <b
            >| We are ready to find the Laptop you need. After filling out the
            form below we can arrange your order asap and we’ll let you know via
            email or sms. |</b
          >
        </h4>
        <br />
        <a href="PlaceUrOrHOME.html"
          ><img
            src="images/LaptopOrderNew.JPEG.jpg"
            alt=""
            width="1150"
            height="363"
            class="img-fluid"
        /></a>
        <br />

        <div id="accordion1" role="tablist">
          <br />

          <div class="card">
            <div class="card-header" role="tab" id="headingOne1">
              <h5 class="mb-0">
                <a
                  data-toggle="collapse"
                  href="#collapseOne1"
                  role="button"
                  aria-expanded="true"
                  aria-controls="collapseOne1"
                  ><b>Explore All Laptops</b> &nbsp;
                </a>
              </h5>
            </div>
            <div
              id="collapseOne1"
              class="collapse"
              role="tabpanel"
              aria-labelledby="headingOne1"
              data-parent="#accordion1"
            >
              <div class="card-body">
                Asus VivoBook <br />Asus Tuf Gaming <br />Apple MacBook Pro
                <br />
                Apple MacBook M1 <br />
                Lenovo ideapad <br />
                Dell XPS 13-9350 <br />
                Dell Inspiron &nbsp; &nbsp;
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo1">
              <h5 class="mb-0">
                <a
                  class="collapsed"
                  data-toggle="collapse"
                  href="#collapseTwo1"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapseTwo1"
                  ><b>Shop and Learn</b> &nbsp;
                </a>
              </h5>
            </div>
            <div
              id="collapseTwo1"
              class="collapse"
              role="tabpanel"
              aria-labelledby="headingTwo1"
              data-parent="#accordion1"
            >
              <div class="card-body">
                For Home <br />
                For Work <br />
                For creators <br />
                For Students <br />
                For Gaming
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree1">
              <h5 class="mb-0">
                <a
                  class="collapsed"
                  data-toggle="collapse"
                  href="#collapseThree1"
                  role="button"
                  aria-expanded="false"
                  aria-controls="collapseThree1"
                  ><b> Learn More</b>&nbsp;
                </a>
              </h5>
            </div>
            <div
              id="collapseThree1"
              class="collapse"
              role="tabpanel"
              aria-labelledby="headingThree1"
              data-parent="#accordion1"
            >
              <div class="card-body">
                Asus Design Center <br />
                ASUSPRO <br />Automotive Solutions<br />HP Design Center<br />HP
                Pavillion<br />Dell Design Center<br />Dell inspiron<br />Mac
                Design Center<br />
                MacBook Air <br />
                MacBook Pro<br />
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingFour1">
                <h5 class="mb-0">
                  <a
                    class="collapsed"
                    data-toggle="collapse"
                    href="#collapseFour1"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseFour1"
                  >
                    <b>Accessories</b> &nbsp;
                  </a>
                </h5>
              </div>
              <div
                id="collapseFour1"
                class="collapse"
                role="tabpanel"
                aria-labelledby="headingFour1"
                data-parent="#accordion1"
              >
                <div class="card-body">
                  Keyboards <br />
                  Headsets and Audio <br />
                  Mouse <br />
                  Chargers
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingFive1">
                <h5 class="mb-0">
                  <a
                    class="collapsed"
                    data-toggle="collapse"
                    href="#collapseFive1"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseFive1"
                  >
                    <b>Terms and Conditions</b>&nbsp;
                  </a>
                </h5>
              </div>
              <div
                id="collapseFive1"
                class="collapse"
                role="tabpanel"
                aria-labelledby="headingFive1"
                data-parent="#accordion1"
              >
                <div class="card-body">
                  These terms and conditions outline the rules and regulations
                  for the use of DellShop Website.By accessing this website we
                  assume you accept these terms and conditions. Do not continue
                  to use dellshop.lk if you do not agree to take all of the
                  terms and conditions stated on this page. <br />
                  The following terminology applies to these Terms and
                  Conditions, Privacy Statement and Disclaimer Notice, and all
                  Agreements: “Client”, “You” and “Your” refers to you, the
                  person who logs on this website and is compliant with the
                  Company’s terms and conditions. “The Company”, “Ourselves”,
                  “We”, “Our” and “Us”, refers to our Company. “Party”,
                  “Parties”, or “Us”, refers to both the Client and ourselves.
                  All terms refer to the offer, acceptance, and consideration of
                  payment necessary to undertake the process of our assistance
                  to the Client in the most appropriate manner for the express
                  purpose of meeting the Client’s needs in respect of the
                  provision of the Company’s stated services, in accordance with
                  and subject to, prevailing law of Netherlands. Any use of the
                  above terminology or other words in the singular, plural,
                  capitalization, and/or he/she or they, are taken as
                  interchangeable and therefore as referring to the same. <br />
                  <b>Shipping Policy</b> <br />
                  Our dedicated team at shop along with our courier partners are
                  committed to fulfilling the delivery of your orders in a
                  smooth and timely manner. Your orders are processed and
                  dispatched from our warehouse within 24 hours of placing the
                  order and while we deliver to every corner in Sri Lanka, the
                  delivery may take 3-5 working days based on the shipping
                  address provided by the customer.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br />
      <hr />
      <div class="card">
        <footer>
          <center>
            <b
              >We are Here! 24/7 Customer Support. <br />
              <a href="hr.com">+947312345678</a> /
              <a href="hr.com">+947912345678</a> <br />
              <a href="laptopsforsale123@gmail.com">PALMTOPlk@gmail.com</a>
              <br />
              <a href="Youtube.html"
                ><img src="images/whtsap.png" width="45" height="43" alt=""
              /></a>
              <a href="Youtube.html"
                ><img src="images/insta.png" width="40" height="40" alt=""
              /></a>
              <a href="Youtube.html"
                ><img src="images/Fb1.png" width="38" height="35" alt="" /></a
            ></b>
          </center>
        </footer>
        <br />
        <p>
          <center>
            <b
              ><a href="LAP.php">Home</a> | <a href="about.html">About</a> |
              <a href="promo.html">Promo</a> |
              <a href="contact.html">Contact</a> |
              <a href="location.html">Location</a> |
              <a href="brandsAndCateg.html">Brands & Categories</a></b
            >
          </center>
        </p>
        <div class="row">
          <div class="col-lg-5">
            <b
              >&nbsp;<img
                src="images/newlogo.jpg"
                alt=""
                width="3365"
                height="1450"
                class="img-fluid"
            /></b>
          </div>
          <div class="col-lg-6">
            &nbsp;<b
              >&nbsp;<br />
              &nbsp; Laptops for sale.<br /><br />
              &nbsp; #21/A, Weliwatta road, Colombo 09.<br /><br />
              &nbsp; Copyright © 2023 PALMTOP.lk | All rights reserved.</b
            >
          </div>

          <div class="col-log-7">
            <b
              ><center>
                <br />
                <p><u>Top Brands</u></p>
                <a href="brandsAndCateg.html">Apple</a><br />
                <a href="brandsAndCateg.html">Asus</a><br />
                <a href="brandsAndCateg.html">Dell</a><br />
                <a href="brandsAndCateg.html">HP</a><br />
                <a href="brandsAndCateg.html">MSI</a><br />
                <a href="brandsAndCateg.html">Lenovo</a>
              </center></b
            >
          </div>
        </div>

        <style>
          /* Add some styles for the button */
          #fixedButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            background-color: #0096ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-color: #ffffff;
          }
          #fixedButton:hover {
            background-color: #00008b;
          }
        </style>

        <!-- Fixed button -->
        <button id="fixedButton" onclick="scrollToTop()">Sign Up</button>

        <script>
          // JavaScript function to scroll to the top of the page
          function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
        </script>

        <!-- body code goes here -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.4.1.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-4.4.1.js"></script>
        <script>
          function checker() {
            var result = confirm("Are You Sure?");
            if (result == false) {
              event.preventDefault();
            }
          }
        </script>
      </div>
    </div>
  </body>
</html>
