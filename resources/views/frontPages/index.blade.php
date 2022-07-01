@extends('layouts.layout')
@section('nav')
<a href="register">register</a>
          <a href="login">login</a>
          @endsection
@section('body')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="layer position-relative"></div>

    <div class="intro-content position-absolute text-center">
       <!-- Minia is a wonderful place to spend your time ...  -->

       <h2>El minya <span>Is a wonderful place </span><br>to spend your time ...</h2>
      <div>
        <button  href="#about" class="btn-get-started scrollto py-3">Get Started</button>
        <button href="#portfolio" class="btn-projects scrollto py-3">take your tour </button>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img mt-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/about 3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/about4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/about6.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/about5.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 content">
            <h2>Minya Governorate</h2>
            <p>
              Minya Governorate is one of the governorates of Egypt. It is located between
               the governorates of Beni Suef in the north and Assiut in the south.
                Its capital is the city of Minya. It is one of the most important governorates
                 of Upper Egypt, due to its middle location and the unique archaeological sites
                 it contains. It has a large university.<br> <a href="about.html">see more...</a></p>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Minya is called the bride of Upper Egypt</li>
              <li><i class="ion-android-checkmark-circle"></i> Minya Governorate is one of the industrial governorates in Egypt. It has black and white cement factories in Samalout, iron and steel quarries, sand quarries, marble quarries,
                 limestone quarries, natural gas filling stations...</li>
              <li><i class="ion-android-checkmark-circle"></i> The governorate is divided administratively into 9 administrative centers comprising 9 cities, 57 rural local units, 346 villages, 1,429 farms and villages,
                 in addition to the new city of Minya.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      categories Section
    ============================-->
    <section id="categories" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>categories</h2>
          <p>Dear user, here is a distinct division of
             the most famous places within Minya Governorate, 
             and this is your guide to your trip/stay within Minya Governorate <a href="categories.html">see more...</a></p>
        </div>

        <div class="row">
  
          <div class="col-lg-6">
            <div class="box wow fadeInUp">
              <!-- <div class="icon"><i class="fa-solid fa-location-pin"></i></div> -->
              <h4 class="title"><a href="">Restaurants :</a></h4>
              <p class="description">There are many restaurants in Minya Governorate, 
                some of us are local and what is international...
                Among the local restaurants (Syrian food restaurants, Set al-Sham,
                 Beit Laila restaurant, Orchid Grill restaurant...) There are also international
                 restaurants such as (KFC and McDonald's...)<br><a href="categories.html">see more..</a></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInDown">
              <!-- <div class="icon"><i class="fa fa-picture-o"></i></div> -->
              <h4 class="title"><a href="">picnic places :</a></h4>
              <p class="description">Minya Governorate is characterized by many
                 places of entertainment, where the Minya Governorate is famous for
                  the longest Nile Corniche at the level of the Republic, and there 
                  are many private and public clubs as well,
                 and there are many cafes, cinemas and parks <br><a href="categories.html">see more...</a></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInUp" data-wow-delay="0.2s">
              <!-- <div class="icon"><i class="fa fa-shopping-bag"></i></div> -->
              <h4 class="title"><a href="">Hospitals :</a></h4>
              <p class="description">Minya Governorate contains many public hospitals such as
                 (Al-Amiri, Minya University and
                 Health Insurance Hospital), and there are many new
                  and old private hospitals such as (Al-Hayat Hospital, Dar Misr Hospital,
                 Dar Abu Al-Saud Hospital and Minya National Hospital)<br><a href="categories.html">see more..</a></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInDown" data-wow-delay="0.2s">
              <!-- <div class="icon"><i class="fa fa-map"></i></div> -->
              <h4 class="title"><a href="">Hotels :</a></h4>
              <p class="description">There are many hotels and resorts within Minya governorate, where there is what
                 is tourist and what is local. In all of Minya governorate,
                  there are hotels and resorts that are suitable for all visitors.
                Including (Horus Tourist Resort, Grand Aton and Etab Hotel),
                 where these hotels are considered as tourist and recreational places within Minya Governorate
                There are also many medium hotels and you have a list for that <br><a href="categories.html">see more...</a></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInUp" data-wow-delay="0.2s">
              <!-- <div class="icon"><i class="fa fa-shopping-bag"></i></div> -->
              <h4 class="title"><a href="">mosques :</a></h4>
              <p class="description">In Minya Governorate, there are many mosques, 
                which are among the most important tourist attractions, and they are
                 also considered an archaeological heritage, as these mosques are hundreds of years old ...
                 including Salah El-Din Mosque, Sultan Muhammad Al-Habashi Mosque, and Al-Foli Mosque,
                 which is one of the most famous mosques in Minya Governorate <br><a href="categories.html">see more...</a></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInDown" data-wow-delay="0.2s">
              <!-- <div class="icon"><i class="fa fa-shopping-bag"></i></div> -->
              <h4 class="title"><a href="">schools :</a></h4>
              <p class="description">Within Minya Governorate, there are many local,
                 languages ​​and international schools, some of which are local government,
                  some of which are government languages, and some are also completely international,
                   where all of the Minya Governorate schools are distinguished by their
                    distinguished educational nature, modern buildings and excellent teachers,
                 here is a guide to these schools <br> <a href="categories.html">see more...</a></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInUp" data-wow-delay="0.2s">
              <!-- <div class="icon"><i class="fa fa-shopping-bag"></i></div> -->
              <h4 class="title"><a href="">Universities :</a></h4>
              <p class="description">Minya Governorate is characterized by the 
                fact that it contains most of the faculties within its public university,
                 as it includes many faculties of all specializations.
                There are also universities, institutes and private academies,
                 in order to reduce the proportion of alienation of their children,
                  and open the doors of Minya Governorate to study all students from other
                 than the governorates of the Republic, as well as all Arab countries <br> <a href="categories.html">see more...</a></p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInDown" data-wow-delay="0.2s">
              <!-- <div class="icon"><i class="fa fa-shopping-bag"></i></div> -->
              <h4 class="title"><a href="https://www.dalil140.com/category?lng=ar&n=churches-monasteries&s=el-menia">churches :</a></h4>
              <p class="description">Minya Governorate contains many churches
                 of different denominations, and these churches are one of the most
                  important tourist attractions within Minya Governorate, where many visitors 
                  come to it from different parts of the governorate, where there are 
                  old monasteries and churches in various parts of Minya, including
                   (the Coptic Catholic Diocese and the Archdiocese of St.
                 George and Church of the Virgin Mary) and here are many <br><a href="categories.html">see more</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #services -->
    

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Clients</h2>
          <p>There are many brands, whether local or international, which in turn are an official sponsor of (Check minia) website, as they provide many services, discounts and care for subscribers and users of that site</p>
        </div>

        <div class="owl-carousel clients-carousel">
          
          <img class="img-fluid mt-3 " src="img/Talabat_logo.svg.png" alt="">
          <img class="img-fluid mt-3 ml-3" src="img/clients/oppo2png.png" alt="">
          <img class="img-fluid mt-3" src="img/clients/client-7.png" alt="">
          <img class="img-fluid mt-2" src="img/clients/vivo.png" alt="">
          <img class="img-fluid mt-3" src="img/clients/client-1.png" alt="">
          <img class="img-fluid mt-3" src="img/Careem_logo.png" alt="">
          <img class="img-fluid mt-3" src="img/clients/client-8.png" alt="">
          <img class="img-fluid" src="img/clients/mac3.png" alt="">
          <img class="img-fluid mt-3" src="img/clients/client-2.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>The famous places</h2>
          <p>There are many famous places
             in Minya governorate, which are
             
             in turn places for picnics, places to buy and recreational places within the governorate</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/about 3.jpg" class="portfolio-popup">
                <img src="img/about 3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">picnic places</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/hotel.jpg" class="portfolio-popup">
                <img src="img/hotel.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Hotels</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/about6.jpg" class="portfolio-popup">
                <img src="img/about6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Hospitals</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/school.jpg" class="portfolio-popup">
                <img src="img/school.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">schools</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/char1.jpg" class="portfolio-popup">
                <img src="img/char1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">churches</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/university.jpg" class="portfolio-popup">
                <img src="img/university.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Universities</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/resturant2.jpg" class="portfolio-popup">
                <img src="img/resturant2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">Restaurants</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/mosque2.jpg" class="portfolio-popup">
                <img src="img/mosque2.jpg" alt="" >
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">mosques</h2></div>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> You can join the team of marketers and technical support to set up your site with ease and ease by joining the team of developers.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Our Team Section
    ============================-->
     {{-- <section id="team" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-1.jpg" alt=""></div>
              <div class="details">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-2.jpg" alt=""></div>
              <div class="details">
                <h4>Sarah Jhinson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-3.jpg" alt=""></div>
              <div class="details">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="img/team-4.jpg" alt=""></div>
              <div class="details">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> --> --}}
    <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>You can contact us through e-mail and call the developers number, and you can also visit us inside the main headquarters of the following address...</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112688.81754554086!2d30.74591469144724!3d28.03897356299382!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b25d2df19644b%3A0x680d5d31a286cc11!2sCasa%20bella%20Restaurant!5e0!3m2!1sen!2seg!4v1645624220087!5m2!1sen!2seg" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>      </div>

      <div class="container">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Your Feedback"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
@endsection