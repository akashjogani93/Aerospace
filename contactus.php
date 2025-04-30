<?php include("header.php"); ?>
	<style>
        #contact .nav-link{
            color: #F53B40 !important;
        }
    </style>
<section class="contact-hero">
    <div class="about-content">
        <h1 class="about-title">Contact Us</h1>
        <p class="about-text">We are committed to delivering excellence through innovation and technology.</p>
        <!-- <a href="#services" class="about-btn">Our Services</a> -->
    </div>
</section>
<section class="contact py-5 bg-light" id="contact">
<div class="container">
	<div class="row">
	    <div class="col-md-12">
	        <h4>Get in touch</h4>
		    <hr>
	    </div>
		<div class="col-md-6">
		    <div class="address">
		        
		    <h5>Address:</h5>
		    <ul class="list-unstyled">
		        <li> Survey No. 6/11,</li>
		        <li> Bamanwadi Village,</li>
		        <li> Belgavi - 590014</li>
		    </ul>
		    <p>Please don't send anything to this address.</p>
		    </div>
		    <div class="email">
		    <h5>Email:</h5>
		    <ul class="list-unstyled">
		        <li> Enquiry@aaniaerospace.com</li>
		        <li> satish.p@aaniaerospace.com</li>
		    </ul>
		    </div>
		    <div class="phone">
		        <h5>Phone:</h5>
		        <ul class="list-unstyled">
		        <li> +91- 8994805560</li>
		        <li> +91- 9737320177</li>
		    </ul>
		    </div>
		    <hr>
		    <div class="social">
	        <ul class="list-inline list-unstyled">
	            <li class="list-inline-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </li>
	            <li class="list-inline-item">
                    <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
	            </li>
	            <li class="list-inline-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span></a>
	            </li>
	        </ul>
	    </div>
		</div>
		<div class="col-md-6">
		    <div class="card">
		        <div class="card-body">
		             <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-6">
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                          </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                      
                                      <select id="inputState" class="form-control">
                                        <option selected>Choose ...</option>
                                        <option> New Buyer</option>
                                        <option> Auction</option>
                                        <option> Complaint</option>
                                        <option> Feedback</option>
                                      </select>
                            </div>
                            <div class="form-group col-md-12">
                                      <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Your Message"class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <button type="button" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
		        </div>
		    </div>
		</div>
	</div>
</div>
</section>

<div class="map-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.198033400999!2d74.4408421!3d15.793508599999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf6500500d8595%3A0x5300ba47828ccb06!2sAANI%20Aerospace%20Manufacturing%20Private%20Limited!5e0!3m2!1sen!2sin!4v1743485245374!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

<?php include('footer.php'); ?>
</body>
</html>