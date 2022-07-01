@extends('layouts.layout')

@section('body')

<section class=" wow fadeInUp mt-4" id="Services">
    <div class="container">
      <div class="section-header">
        <h2>Our Services</h2>
        <p class="text-muted">Minya Governorate is characterized by many of the services it provides to its citizens, as it works to facilitate many of the daily 
          needs in a large and large scale within the governorate and its centers.</p>

      </div>
        <div class="row">
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/careem2.jpg" alt="" class="img-fluid rounded-circle border p-2 ps">
               <h3 class="pro py-3 fw-bold " style="color: #081e5b;"> careem</h3>
              <p class="text-muted">One of the governorate’s services, as it works on providing and facilitating private transportation within the governorate, its centers, and the governorate’s villages as well.
                 It is based in Adnan Al-Maliki Street <br><a target="_blank" href="https://www.facebook.com/CareemEG/">see more..</a></p>
                 <button data-toggle="modal" data-target="#myModal"  id="modalBtn-1" href="#about" class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">book it</button>
            </div>
          </div>
          
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/swvl.jpg" alt="" class="img-fluid rounded-circle border p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">swvl </h3>
              <p class="text-muted">Swvl is a parallel mass transit system that serves<br> as a semi-private alternative to public transportation
                 for individuals who cannot afford or access private options.<br><a target="_blank" href="https://www.facebook.com/swvlapp/">see more..</a></p>
                 <button data-toggle="modal" data-target="#myModal1"  href="#about" class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">book it</button>
            </div>
          </div>

          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/taslema.png" alt="" class="img-fluid rounded-circle border p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">Taslima </h3>
              <p class="text-muted">It is an express delivery service within Minya <br>and New Minya governorates,
                 as it works to cover all Minya restaurants,
                 offices and universities for a small fee.<br><a target="_blank" href="https://www.facebook.com/TaslemaOfficial/">see more..</a></p>
                 <button data-toggle="modal" data-target="#myModal2"  href="#about" class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">book it</button>
            </div>
          </div> 
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/gobus.jpg" alt="" class="img-fluid rounded-circle border p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">gobus </h3>
              <p class="text-muted">There are many travel services,
                 the most important of which is the bus inside Minya Governorate,<br> 
                where there are many companies, the most important of which is gobus for Tourism <br><a target="_blank" href="https://www.facebook.com/GoBus.AlMinya/">see more..</a></p>
                <button data-toggle="modal" data-target="#myModal3"  href="#about" class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">book it</button>
            </div>
          </div> 
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/amwag.jpg" alt="" class="img-fluid rounded-circle border p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;"> amwaj </h3>
              <p class="text-muted">There are many travel services, 
                the most important of which is the bus inside Minya Governorate,
                 where there are many companies,
                 the most important and oldest of which is Amwaj Tourism <br><a target="_blank" href="https://www.facebook.com/M.SAADAFWAG/">see more..</a></p>
                 <button data-toggle="modal" data-target="#myModal4"  href="#about" class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">book it</button>
            </div>
          </div>
          <div class="col-md-4 p-3">
            <div class="Services-item text-center border p-4">
              <img src="img/7aln.jpg" class="img-fluid rounded-circle border p-2 ps">
              <h3 class="pro py-3" style="color: #081e5b;">7alan</h3>
              <p class="text-muted">A service through which you can transport from and
                 to anywhere in Minya at the lowest cost and the fastest time,
                 choose the motorcycle and a driver will deliver you from immediately within seconds <br><a target="_blank" href="https://www.facebook.com/Halanapp/">see more..</a></p>
                 <button data-toggle="modal" data-target="#myModal5" href="#about" class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">book it</button>
            </div>
          </div>
    </div>
  </section>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <p style="color: #F76E11;">book now</p>
          <button type="button" style="color: #F76E11;" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form class=" m-auto" method="post" action="{{route('careem.store')}}" role="form" class="contactForm  container" enctype="multipart/form-data">
              @csrf
              <div data-aos="fade-down" class="">
                    <!-- <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1> -->
            </div>
                <div class="form-row ">
                  <div class="form-group col-lg-12  col-md-12 col-sm-12">
                    <!-- <label class="main "> your full name:</label> -->
                    <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="Your Name (ex:Nour Ramadan)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                    Please Enter At Least 4 Chars, First Char must be capital
                  </div>
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <!-- <label class="main "> your e-mail:</label> -->
                    <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="Your E-mail(ex:nour12@hotmail.com)" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                      Email is valid ,Please Enter A Valid Email , like nour12@hotmail.com
                  </div>
                  </div>
                </div>
                <div class="form-row ">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <!-- <label class="main "> your number:</label> -->
                  <input id="phoneNumInput" type="number" class="form-control rounded" name="phone_number" placeholder="your number (ex: 010..)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                    phone number is valid , please enter you number
                </div>
                </div>
                </div>
                
                <div class="form-row ">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <p class="main ">Order Status:</p>
                            <!-- <label class="main " for="male">from :</label> -->
                              <input class="form-control rounded w-50" placeholder="From:" type="text" id="Attendee" name="from"><br>
                              <!-- <label class="main  " for="female">TO :</label> -->
                              <input class=" form-control rounded w-50" placeholder="To:" type="text" id="Partner" name="to">
                              
                              <input type="radio" id="Attendee" name="order" value="Student">
                                <label class="main " for="male">AM order</label><br>
                                <input type="radio" id="Partner" name="order" value="Bachelor">
                                <label class="main " for="female">PM order</label><br>
                              
                  </div>
                  </div>
                  <button  class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">submit</button>              </form>
    
    
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p style="color: #F76E11;">book now</p>
        <button type="button" style="color: #F76E11;" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class=" m-auto" method="post" action="{{route('swvl.store')}}" role="form" class="contactForm  container" enctype="multipart/form-data">
            @csrf
            <div data-aos="fade-down" class="">
                  <!-- <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1> -->
          </div>
              <div class="form-row ">
                <div class="form-group col-lg-12  col-md-12 col-sm-12">
                  <!-- <label class="main "> your full name:</label> -->
                  <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="Your Name (ex:Nour Ramadan)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                  Please Enter At Least 4 Chars, First Char must be capital
                </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <!-- <label class="main "> your e-mail:</label> -->
                  <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="Your E-mail(ex:nour12@hotmail.com)" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                    Email is valid ,Please Enter A Valid Email , like nour12@hotmail.com
                </div>
                </div>
              </div>
              <div class="form-row ">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <!-- <label class="main "> your number:</label> -->
                <input id="phoneNumInput" type="number" class="form-control rounded" name="phone_number" placeholder="your number (ex: 010..)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                  phone number is valid , please enter you number
              </div>
              </div>
              </div>
              
              <div class="form-row ">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <p class="main ">Order Status:</p>
                          <!-- <label class="main " for="male">from :</label> -->
                            <input class="form-control rounded w-50" placeholder="From:" type="text" id="Attendee" name="from"><br>
                            <!-- <label class="main  " for="female">TO :</label> -->
                            <input class=" form-control rounded w-50" placeholder="To:" type="text" id="Partner" name="to">
                            
                </div>
                </div>
                        <button  class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">submit</button>              </form>
  
  
      </div>
    </div>
    
  </div>
</div>

</div>


  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <p style="color: #F76E11;">book now</p>
          <button type="button" style="color: #F76E11;" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form class=" m-auto" method="post" action="{{route('taslema.store')}}" role="form" class="contactForm  container" enctype="multipart/form-data">
              @csrf
              <div data-aos="fade-down" class="">
                    <!-- <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1> -->
            </div>
                <div class="form-row ">
                  <div class="form-group col-lg-12  col-md-12 col-sm-12">
                    <!-- <label class="main "> your full name:</label> -->
                    <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="Your Name (ex:Nour Ramadan)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                    Please Enter At Least 4 Chars, First Char must be capital
                  </div>
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12">
                    <!-- <label class="main "> your e-mail:</label> -->
                    <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="Your E-mail(ex:nour12@hotmail.com)" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                      Email is valid ,Please Enter A Valid Email , like nour12@hotmail.com
                  </div>
                  </div>
                </div>
                <div class="form-row ">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <!-- <label class="main "> your number:</label> -->
                  <input id="phoneNumInput" type="number" class="form-control rounded" name="phone_number" placeholder="your number (ex: 010..)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                    phone number is valid , please enter you number
                </div>
                </div>
                </div>
                
                <div class="form-row ">
                  <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <p class="main ">Order Status:</p>
                              <input type="radio" id="mornning" name="order" value="mornning">
                              <label class="main " for="male">AM order</label><br>
                              <input type="radio" id="evening" name="order" value="evening">
                              <label class="main " for="female">PM order</label><br>
                  </div>
                  </div>
    
                  <div class="form-row ">
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <!-- <label class="main"> what is your order:</label> -->
                      <textarea class="form-control rounded" name="comment" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="what is your order:"></textarea>
                      <div class="validation"></div>
                    </div>
                    </div>
                          <button  class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">submit</button>              </form>
    
    
        </div>
      </div>
      
    </div>
  </div>
  
</div>



<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p style="color: #F76E11;">book now</p>
        <button type="button" style="color: #F76E11;" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class=" m-auto" method="post" action="{{route('gobus.store')}}" role="form" class="contactForm  container" enctype="multipart/form-data">
            @csrf
            <div data-aos="fade-down" class="">
                  <!-- <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1> -->
          </div>
              <div class="form-row ">
                <div class="form-group col-lg-12  col-md-12 col-sm-12">
                  <!-- <label class="main "> your full name:</label> -->
                  <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="Your Name (ex:Nour Ramadan)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                  Please Enter At Least 4 Chars, First Char must be capital
                </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <!-- <label class="main "> your e-mail:</label> -->
                  <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="Your E-mail(ex:nour12@hotmail.com)" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                    Email is valid ,Please Enter A Valid Email , like nour12@hotmail.com
                </div>
                </div>
              </div>
              <div class="form-row ">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <!-- <label class="main "> your number:</label> -->
                <input id="phoneNumInput" type="number" class="form-control rounded" name="phone_number" placeholder="your number (ex: 010..)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                  phone number is valid , please enter you number
              </div>
              </div>
              </div>
              
           
  
              <div class="form-row ">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <p class="main ">Order Status:</p>
                          <!-- <label class="main " for="male">from :</label> -->
                            <input class="form-control rounded w-50" placeholder="From:" type="text" id="Attendee" name="from"><br>
                            <!-- <label class="main  " for="female">TO :</label> -->
                            <input class=" form-control rounded w-50" placeholder="To:" type="text" id="Partner" name="to">
                            
                </div>
                </div>
                        <button  class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">submit</button>              </form>
  
  
      </div>
    </div>
    
  </div>
</div>

</div>





<div class="modal fade" id="myModal4" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p style="color: #F76E11;">book now</p>
        <button type="button" style="color: #F76E11;" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class=" m-auto" method="post" action="{{route('amwaj.store')}}" role="form" class="contactForm  container" enctype="multipart/form-data">
            @csrf
            <div data-aos="fade-down" class="">
                  <!-- <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1> -->
          </div>
              <div class="form-row ">
                <div class="form-group col-lg-12  col-md-12 col-sm-12">
                  <!-- <label class="main "> your full name:</label> -->
                  <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="Your Name (ex:Nour Ramadan)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                  Please Enter At Least 4 Chars, First Char must be capital
                </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <!-- <label class="main "> your e-mail:</label> -->
                  <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="Your E-mail(ex:nour12@hotmail.com)" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                    Email is valid ,Please Enter A Valid Email , like nour12@hotmail.com
                </div>
                </div>
              </div>
              <div class="form-row ">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <!-- <label class="main "> your number:</label> -->
                <input id="phoneNumInput" type="number" class="form-control rounded" name="phone_number" placeholder="your number (ex: 010..)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                  phone number is valid , please enter you number
              </div>
              </div>
              </div>
              <div class="form-row ">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <p class="main ">Order Status:</p>
                          <!-- <label class="main " for="male">from :</label> -->
                            <input class="form-control rounded w-50" placeholder="From:" type="text" id="Attendee" name="from"><br>
                            <!-- <label class="main  " for="female">TO :</label> -->
                            <input class=" form-control rounded w-50" placeholder="To:" type="text" id="Partner" name="to">
                            
                </div>
                </div>
                        <button  class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">submit</button>              </form>
  
  
      </div>
    </div>
    
  </div>
</div>

</div>

<div class="modal fade" id="myModal5" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p style="color: #F76E11;">book now</p>
        <button type="button" style="color: #F76E11;" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form class=" m-auto" method="post" action="{{route('halan.store')}}" role="form" class="contactForm  container" enctype="multipart/form-data">
            @csrf
            <div data-aos="fade-down" class="">
                  <!-- <h1  style="color: #f1f1f1;">workshops <span style="color: #e8465a"> form</h1> -->
          </div>
              <div class="form-row ">
                <div class="form-group col-lg-12  col-md-12 col-sm-12">
                  <!-- <label class="main "> your full name:</label> -->
                  <input id="nameInput" type="name" name="name" class="form-control rounded"  placeholder="Your Name (ex:Nour Ramadan)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="text-danger d-none alert alert-danger" id="inputNameAlert">
                  Please Enter At Least 4 Chars, First Char must be capital
                </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <!-- <label class="main "> your e-mail:</label> -->
                  <input id="emailInput" type="email"  class="form-control rounded" name="email" placeholder="Your E-mail(ex:nour12@hotmail.com)" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="text-danger d-none alert alert-danger" id="inputEmailAlert">
                    Email is valid ,Please Enter A Valid Email , like nour12@hotmail.com
                </div>
                </div>
              </div>
              <div class="form-row ">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <!-- <label class="main "> your number:</label> -->
                <input id="phoneNumInput" type="number" class="form-control rounded" name="phone_number" placeholder="your number (ex: 010..)" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="text-danger d-none alert alert-danger" id="inputNumAlert">
                  phone number is valid , please enter you number
              </div>
              </div>
              </div>
              
              <div class="form-row ">
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <p class="main ">Order Status:</p>
                            <input type="radio" id="Attendee" name="order" value="cars">
                            <label class="main " for="male">Cars</label><br>
                            <input type="radio" id="Partner" name="order" value="Mini bus">
                            <label class="main " for="female">Mini Bus</label><br>
                            <input type="radio" id="Attendee" name="order" value="Tok tok">
                            <label class="main " for="male">Tok tok</label><br>
                            <input type="radio" id="Partner" name="order" value="Motos">
                            <label class="main " for="female">Motos</label><br>
                            
                </div>
                </div>
                        <button  class="btn-get-started scrollto btn btn-warning text-white" style="background-color: #F76E11;">submit</button>              </form>
  
  
      </div>
    </div>
    
  </div>
</div>

</div>

@endsection