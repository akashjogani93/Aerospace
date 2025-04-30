<?php include("header.php"); ?>
    <style>
        #career .nav-link{
            color: #F53B40 !important;
        }
    </style>
<section class="contact-hero">
    <div class="about-content">
        <h1 class="about-title">Career</h1>
        <p class="about-text">We’re always looking for creative, talented self-starters, to join Aani AeroSpace</p>
    </div>
</section>

<div class="container-fluid">
    <div class="careerbox">
            <div class="row text-center mb-3">
                <div class="col-md-12">
                    <h2>Career Opening at <span style="color:#F53B40">Aani AeroSpace</span></h2>
                    <p>We’re always looking for creative, talented self-starters, to join Aani AeroSpace</p>
                </div>
            </div>
            <!-- </br> -->
            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <input id="Fullname" name="Full Name" placeholder="ENTER FIRST NAME" class="form-control inputcareer" type="text">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                    <input type="text" class="form-control inputcareer" id="inputEmail4" placeholder="ENTER LAST NAME">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <input id="email" name="Full Name" placeholder="ENTER YOUR EMAIL" class="form-control inputcareer" type="email">
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                    <input type="text" class="form-control inputcareer" id="mobile" placeholder="ENTER YOUR MOBILE NUMBER">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <select id="selectRole" name="role" class="form-control inputcareer">
                        <option value="" disabled selected>SELECT YOUR ROLE</option>
                        <option value="developer">Developer</option>
                        <option value="designer">Designer</option>
                        <option value="manager">Project Manager</option>
                        <option value="qa">QA Engineer</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                    <input type="file" class="form-control inputcareer" id="inputEmail4" placeholder="Upload Resume">
                </div>
            </div>
            <div class="row button-row">
                <div class="col-md-12">
                    <button type="reset" class="btn">Reset</button>
                    <button type="submit" class="btn">Submit</button>
                </div>
            </div>
        </form> 
    </div>
</div>



<?php include('footer.php'); ?>
</body>
</html>