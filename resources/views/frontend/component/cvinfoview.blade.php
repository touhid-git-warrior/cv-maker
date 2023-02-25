@extends('frontend.master') @section('content') <div class="container-title">
  <h3>Add Your Cv Information</h3>
  <hr>
</div>
<form method="POST" action="{{route('cvsave')}}" enctype="multipart/form-data"> @csrf
  <!-- 1st row start -->
  <div class="row">
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Name </label>
        <input type="text" name="name" value="{{ Auth::guard('web')->user()->name }}" class="form-control">
        <input type="hidden" name="user_id" value="{{ Auth::guard('web')->user()->id }}">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Image </label>
        <input type="file" name="cv_image" class="form-control" id="cv_image" accept="image/png, image/jpeg">
      </div>
      <img style="width: 80px; height: 80px;" src="" id="cv_image_load">
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Designation </label>
        <input type="text" name="designation" class="form-control">
      </div>
    </div>
    <!-- address line -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Address1 </label>
        <input type="text" name="address1" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Address 2 <span class="text-danger">(optional) *</span>
        </label>
        <input type="text" name="address2" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group ">
        <label> Enter Your Address 3 <span class="text-danger">(optional) *</span>
        </label>
        <input type="text" name="address3" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group ">
        <label> Enter Your Address 4 <span class="text-danger">(optional) *</span>
        </label>
        <input type="text" name="address4" class="form-control">
      </div>
    </div>
    <!-- end address line -->
    <!-- phone line -->
    <div class="col-lg-4">
      <div class="form-group ">
        <label> Enter Your Phone Number 1</label>
        <input type="number" name="phone1" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group ">
        <label> Enter Your Phone Number 2 <span class="text-danger">(optional) *</span>
        </label>
        <input type="number" name="phone2" class="form-control">
      </div>
    </div>
    <!-- end phone line -->
    <div class="col-lg-4">
      <div class="form-group ">
        <label> Enter Your Email </label>
        <input type="email" name="email" value="{{ Auth::guard('web')->user()->email }}" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group ">
        <label> Enter Your Website link <span class="text-danger">(optional) *</span>
        </label>
        <input type="text" name="website_link" class="form-control">
      </div>
    </div>
  </div>
  <!-- 1st row end -->
  <hr>
  <h3> Add Your Skill </h3>
  <hr>
  <!-- 2nd row start -->
  <!-- skill line start-->
  <!-- skill row start -->
  <div class="row">
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your HTML Skill </label>
        <br>
        <input type="range" name="html" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your CSS Skill </label>
        <br>
        <input type="range" name="css" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your SASS Skill </label>
        <br>
        <input type="range" name="sass" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your JS Skill </label>
        <br>
        <input type="range" name="js" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your JQUERY Skill </label>
        <br>
        <input type="range" name="jquery" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your REACT Skill </label>
        <br>
        <input type="range" name="react" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your ANGULAR Skill </label>
        <br>
        <input type="range" name="angular" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your VUE Skill </label>
        <br>
        <input type="range" name="vue" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your PHP Skill </label>
        <br>
        <input type="range" name="php" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your AWS Skill </label>
        <br>
        <input type="range" name="aws" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your AI Skill </label>
        <br>
        <input type="range" name="ai" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your MACHINE-LEARNING Skill </label>
        <br>
        <input type="range" name="machine_learning" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your MS-WORD Skill </label>
        <br>
        <input type="range" name="ms_word" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your MS-EXCEL Skill </label>
        <br>
        <input type="range" name="ms_excel" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your ADOBE-PHOTOSHOP Skill </label>
        <br>
        <input type="range" name="adobe_photoshop" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Your ADOBE-XD Skill </label>
        <br>
        <input type="range" name="adobe_xd" min="0" max="100" value="0" oninput="this.nextElementSibling.value = this.value">
        <output></output>
      </div>
    </div>
  </div>
  <!-- skill row start -->
  <!-- skill line end -->
  <!-- end 2nd row -->
  <!-- start 3rd row -->
  <hr>
  <h3> Add Your Social Media Link </h3>
  <hr>
  <div class="row">
    <!-- social media line -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your facebook link 1 </label>
        <input type="text" name="facebook1" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your facebook link 2 <span class="text-danger">(optional) *</span>
        </label>
        <input type="text" name="facebook2" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your twitter link 1 </label>
        <input type="text" name="twitter1" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your twitter link 2 <span class="text-danger">(optional) *</span>
        </label>
        <input type="text" name="twitter2" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your youtube link </label>
        <input type="text" name="youtube" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your linkedin link </label>
        <input type="text" name="linkedin" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your pinterest link </label>
        <input type="text" name="pinterest" class="form-control">
      </div>
    </div>
    <!-- socoal media line end -->
  </div>
  <!-- end 3rd row -->
  <hr>
  <h3> More About You </h3>
  <hr>
  <!-- start 4th row -->
  <div class="row">
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Something About You </label>
        <textarea class="form-control" name="about_you" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
  </div>
  <!-- end 3rd row -->
  <hr>
  <h3> Add Your Work experience </h3>
  <hr>
  <!-- start 5th row -->
  <div class="row">
    <!-- experiance 1 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Job Experince Year <span class="text-danger">(year 1) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="exp1" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="exp2" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Company Name <span class="text-danger">(company 1) *</span>
        </label>
        <input type="text" name="company_name1" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Company <span class="text-danger">(about experience 1) *</span>
        </label>
        <textarea class="form-control" name="about_exp1" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- experiance 1 end -->
    <!-- experiance 2 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Job Experince Year <span class="text-danger">(year 2) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="exp3" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="exp4" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Company Name <span class="text-danger">(company 2) *</span>
        </label>
        <input type="text" name="company_name2" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Company <span class="text-danger">(about experience 2) *</span>
        </label>
        <textarea class="form-control" name="about_exp2" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- experiance 2 end -->
    <!-- experiance 3 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Job Experince Year <span class="text-danger">(year 3) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="exp5" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=2023 ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="exp6" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=2023 ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Company Name <span class="text-danger">(company 3) *</span>
        </label>
        <input type="text" name="company_name3" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Company <span class="text-danger">(about experience 3) *</span>
        </label>
        <textarea class="form-control" name="about_exp3" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- experiance 3 end -->
    <!-- experiance 4 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Job Experince Year <span class="text-danger">(year 4) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="exp7" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=2023 ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="exp8" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=2023 ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Company Name <span class="text-danger">(company 4) *</span>
        </label>
        <input type="text" name="company_name4" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Company <span class="text-danger">(about experience 4) *</span>
        </label>
        <textarea class="form-control" name="about_exp4" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- experiance 4 end -->
    <!-- experiance 5 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Job Experince Year <span class="text-danger">(year 5) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="exp9" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=2023 ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="exp10" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=2023 ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Company Name <span class="text-danger">(company 5) *</span>
        </label>
        <input type="text" name="company_name5" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Company <span class="text-danger">(about experience 5) *</span>
        </label>
        <textarea class="form-control" name="about_exp5" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- experiance 5 end -->
  </div>
  <!-- end 5th row -->
  <hr>
  <h3> Add Your Education </h3>
  <hr>
  <!-- start 6th row -->
  <div class="row">
    <!-- education 1 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Education Year <span class="text-danger">(year 1) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="edu1" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="edu2" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Institute Name <span class="text-danger">(institute 1) *</span>
        </label>
        <input type="text" name="inst_name1" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Institute <span class="text-danger">(about education 1) *</span>
        </label>
        <textarea class="form-control" name="about_edu1" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- education 1 end -->
    <!-- education 2 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Education Year <span class="text-danger">(year 2) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="edu3" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="edu4" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Institute Name <span class="text-danger">(institute 2) *</span>
        </label>
        <input type="text" name="inst_name2" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Institute <span class="text-danger">(about education 2) *</span>
        </label>
        <textarea class="form-control" name="about_edu2" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- education 2 end -->
    <!-- education 3 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Education Year <span class="text-danger">(year 3) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="edu5" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="edu6" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Institute Name <span class="text-danger">(institute 3) *</span>
        </label>
        <input type="text" name="inst_name3" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Institute <span class="text-danger">(about education 3) *</span>
        </label>
        <textarea class="form-control" name="about_edu3" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- education 3 end -->
    <!-- education 4 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Education Year <span class="text-danger">(year 4) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="edu7" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="edu8" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Institute Name <span class="text-danger">(institute 4) *</span>
        </label>
        <input type="text" name="inst_name4" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Institute <span class="text-danger">(about education 4) *</span>
        </label>
        <textarea class="form-control" name="about_edu4" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- education 4 end -->
    <!-- education 5 start -->
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Your Education Year <span class="text-danger">(year 5) *</span>
        </label>
        <div class="row">
          <div class="col-lg-5">
            <select name="edu9" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
          <div class="col-lg-1">
            <span>to</span>
          </div>
          <div class="col-lg-5">
            <select name="edu10" class="form-control">
              <option selected disabled> Enter Year </option> <?php 

					


					for ($i=1990; $i <=date('Y') ; $i++) { 
							
						?> <option value="{{$i}}"> {{$i}} </option> <?php

					}

					?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Institute Name <span class="text-danger">(institute 5) *</span>
        </label>
        <input type="text" name="inst_name5" class="form-control">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-group">
        <label> Enter Something About Institute <span class="text-danger">(about education 5) *</span>
        </label>
        <textarea class="form-control" name="about_edu5" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <!-- education 5 end -->
  </div>
  <!-- end 6th row -->
  <!-- start 7th row -->
  <hr>
  <h3> Add Your Hobby </h3>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <!-- hobby 1 start -->
      <div class="d-flex ml-4">
        <div class="mx-3">
          <input class="form-check-input" name="hobby1" type="checkbox" value="fas fa-book" id="defaultCheck1">
        </div>
        <div class="">
          <i title="Reading Book" style="font-size: 2.5rem; cursor: pointer;" class="fas fa-book" aria-hidden="true"></i>
        </div>
      </div>
      <!-- hobby 1 end -->
      <!-- hobby 2 start -->
      <div class="d-flex ml-4 my-4">
        <div class="mx-3">
          <input class="form-check-input" name="hobby2" type="checkbox" value="fas fa-gamepad" id="defaultCheck1">
        </div>
        <div class="">
          <i title="Gaming" style="font-size: 2.5rem; cursor: pointer;" class="fas fa-gamepad" aria-hidden="true"></i>
        </div>
      </div>
      <!-- hobby 2 end -->
      <!-- hobby 3 start -->
      <div class="d-flex ml-4">
        <div class="mx-3">
          <input class="form-check-input" name="hobby3" type="checkbox" value="fas fa-music" id="defaultCheck1">
        </div>
        <div class="">
          <i title="Music" style="font-size: 2.5rem; cursor: pointer;" class="fas fa-music" aria-hidden="true"></i>
        </div>
      </div>
      <!-- hobby 3 end -->
      <!-- hobby 4 start -->
      <div class="d-flex ml-4 my-4">
        <div class="mx-3">
          <input class="form-check-input" name="hobby4" type="checkbox" value="fab fa-pagelines" id="defaultCheck1">
        </div>
        <div class="">
          <i title="Tree Plant" style="font-size: 2.5rem; cursor: pointer;" class="fab fa-pagelines" aria-hidden="true"></i>
        </div>
      </div>
      <!-- hobby 4 end -->
    </div>
  </div>
  <!-- end 7th row -->
  <button type="submit" title="create your cv" style="margin-top: 15px;" class="btn btn-primary btn-block"> Submit </button>
</form>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script type="text/javascript">
  $('#cv_image_load').hide()
  $('#cv_image').change(function() {
    let load = new FileReader;
    load.readAsDataURL(this.files[0]);
    load.onload = (function(e) {
      $('#cv_image_load').show()
      $('#cv_image_load').attr('src', e.target.result);
    })
  })
</script> @endsection