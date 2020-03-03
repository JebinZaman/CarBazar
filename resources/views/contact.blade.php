
	@include('layouts.header')


<header class="banner-con text-center">
    <div class="banner-content">
        <div class="container">
            <h1 class="bannercon-heading mb-0">Contact</h1>
            <h2 class="bannercon-subheading mb-0">This is our website</h2>
            
        </div>
    </div>
</header>

<section>
    <div class="our-products text-center">
        <div class="row ">
            <div class="col-lg-12">
                <div class="products">
                    <h4>OUR INFORMATION</h4>
                    <h2>Call Us</h2>
                <div class="contact-text">    
            <i class="fas fa-phone"></i> 02-58051564
            <i class="fas fa-envelope"></i>info@baseit.com.bd
        </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
 
<section>
    <div class="contacat-section bg-light">
        <h3>CONTACT FORM</h3>
        <h1>Get In Touch</h1>
        <div class="row">
            <div class="col-lg-6 contact-design">
               <h2>Contact Form</h2>
               <div class="row input-one">
               <div class="col-lg-5">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName">
                </div>
                </div>
                </div>
                <div class="form-group row input-one">
                    
                        <div class="col-lg-10">
                            <label>Email</label>
                            <input type="email" class="form-control">
                            
                        </div>
                    
                </div>
                <div class="form-group row input-one">
                    
                        <div class="col-lg-10">
                            <label>Subject</label>
                            <input type="text" class="form-control">
                            
                        </div>
                    
                </div>
                
                <div class="form-group row input-one">
                    
                        <div class="col-lg-10">
                            <label for="emailAddress">Message</label>
                            <textarea class="form-control" rows="10" id="address" placeholder="Write your notes or questions here..."></textarea>
                            
                        </div>
                    
                </div>
                
                <div class="form-group">
                    <button type="button" class="btn input-btn">SEND MESSAGE</button>
                </div>
                
                
                
            </div>
            <div class="col-lg-6 contact-design1">

                <h2>Find Us</h2>


    <!--Card-->
    <div class="card card-cascade narrower">

   
      <!--Card content-->
      <div class="card-body card-body-cascade text-center">

        <!--Google map-->
        <div id="map-container-google-8" class="z-depth-1-half map-container-5" style="height: 600px">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22196.736169630924!2d90.34541656339856!3d23.799461886480984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7351bb65ab7%3A0x3f13e745c52685b8!2sBASE%20IT!5e0!3m2!1sen!2sbd!4v1577083461793!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card-->

  </div>

            </div>
        </div>
    
</section>	

@include('layouts.footer')

</body>
</html>