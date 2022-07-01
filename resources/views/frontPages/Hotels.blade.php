@extends('layouts.layout')

@section('body')
<section id="hotel">
    <div class="layer position-relative"></div>

    <div class="intro-content position-absolute text-center ">
       <!-- Minia is a wonderful place to spend your time ...  -->

       <h2>El minya <span>Is a wonderful place </span><br>to spend your time ...</h2>
      <div>
        <!-- <button  href="#about" class="btn-get-started scrollto py-3">Get Started</button> -->
        <!-- <button href="#portfolio" class="btn-projects scrollto py-3">take your tour </button> -->
      </div>
    </div>

    <!-- <div id="intro-carousel" class="owl-carousel" >
      
    </div> -->

  </section><!-- #intro -->

  <section class=" wow fadeInUp mt-4" id="Services">
    <div class="container">
      <div class="section-header">
        <h2>The most famous hotels in Minya Governorate</h2>
        <p class="text-muted">Minya Governorate is characterized by many of the services it provides to its citizens, as it works to facilitate many of the daily 
          needs in a large and large scale within the governorate and its centers.</p>

      </div>
        <div class="row">
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/فندق لوتس.jpg" alt="" class="img-fluid p-2 ps">
               <h3 class="pro py-3 fw-bold " style="color: #081e5b;"> Horus Tourist Resort</h3>
              <p class="text-muted">Horus Tourist Resort is one of the largest hotels
                 in Minya first for the beauty of its location as it overlooks the Nile
                  and the large number of its rooms and contains many restaurants and contains
                   the best services </p>
            </div>
          </div>
          
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/فندق منيا.jpg" alt=""  class="img-fluid p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">Pioneer Hotel </h3>
              <p class="text-muted">Minya Governorate includes many tourist hotels,
                 including the Pioneer floating hotel and ship, which is one of the most
                  important tourist attractions within Minya Governorate,
                 located on the Minya Corniche</p>
            </div>
          </div>

          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/القوات المسلحه.jpg" alt=""  class="img-fluid p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">Armed Forces Hotel </h3>
              <p class="text-muted">This place is suitable for
                 those looking for simplicity 
                 in Minya, and provides a number of basic facilities and services
                  for accommodation. This place provides a restaurant,
                 a kitchenette and a refrigerator in each room</p>
            </div>
          </div> 
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/العائله المقدسه.jpg" alt="" class="img-fluid p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">Grand Aton Hotel </h3>
              <p class="text-muted">Located in El Minya, 
                "Grand Aton Hotel" has a garden and a terrace.
                 This property also has a restaurant, a bar and an indoor pool. 
                 This property offers a 24-hour front desk and room service for guests.
                 Rooms at this hotel are fitted with a balcony.</p>
            </div>
          </div> 
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/حورس المنيا.jpg" alt="" class="img-fluid p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">Queen Isis Hotel</h3>
              <p class="text-muted">Queen Isis Floating Hotel features 
                air-conditioned accommodation in Al Minya. Among the facilities
                 of this property are a restaurant, a 24-hour front desk and room service,
                 along with free WiFi. All rooms in the hotel have a seating area.</p>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/pionner.jpg" class="img-fluid p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">Akhenaten Hotel</h3>
              <p class="text-muted">King Akhenaten Hotel in Minya,
                 the hero of the Nile, the mountain, sunrise and sunset.
                  The Akhenaten Hotel is distinguished in terms of its location, 
                  as it contains many rooms. It also contains a restaurant and 
                  a cafeteria directly overlooking the Nile</p>
            </div>
          </div>
          <div class="m-auto py-4"> 
            <a class="btn text-white" style="background-color: #F76E11;"
             target="_blank"
              href="https://www.dalil140.com/category?lng=ar&n=hotels-resorts&s=el-menia">see more...</a>
          </div>
    </div>
  </section>

@endsection