<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Your Cv</title>
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        list-style: none;
        font-family: "Montserrat", sans-serif;
      }

      body {
        background: #585c68;
        font-size: 14px;
        line-height: 22px;
        color: #555555;
        page-break-inside: avoid;
      }

      .bold {
        font-weight: 700;
        font-size: 20px;
        text-transform: uppercase;
      }

      .semi-bold {
        font-weight: 500;
        font-size: 16px;
      }

      .resume {
        width: 800px;
        height: auto;
        display: flex;
        margin: 50px auto;
      }

      .resume .resume_left {
        width: 280px;
        background: #0bb5f4;
      }

      .resume .resume_left .resume_profile {
        width: 100%;
        height: 280px;
      }

      .resume .resume_left .resume_profile img {
        width: 100%;
        height: 100%;
      }

      .resume .resume_left .resume_content {
        padding: 0 25px;
      }

      .resume .title {
        margin-bottom: 20px;
      }

      .resume .resume_left .bold {
        color: #fff;
      }

      .resume .resume_left .regular {
        color: #b1eaff;
      }

      .resume .resume_item {
        padding: 25px 0;
        border-bottom: 2px solid #b1eaff;
      }

      .resume .resume_left .resume_item:last-child,
      .resume .resume_right .resume_item:last-child {
        border-bottom: 0px;
      }

      .resume .resume_left ul li {
        display: flex;
        margin-bottom: 10px;
        align-items: center;
      }

      .resume .resume_left ul li:last-child {
        margin-bottom: 0;
      }

      .resume .resume_left ul li .icon {
        width: 35px;
        height: 35px;
        background: #fff;
        color: #0bb5f4;
        border-radius: 50%;
        margin-right: 15px;
        font-size: 16px;
        position: relative;
      }

      .resume .icon i,
      .resume .resume_right .resume_hobby ul li i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      .resume .resume_left ul li .data {
        color: #b1eaff;
      }

      .resume .resume_left .resume_skills ul li {
        display: flex;
        margin-bottom: 10px;
        color: #b1eaff;
        justify-content: space-between;
        align-items: center;
      }

      .resume .resume_left .resume_skills ul li .skill_name {
        width: 25%;
      }

      .resume .resume_left .resume_skills ul li .skill_progress {
        width: 60%;
        margin: 0 5px;
        height: 5px;
        background: #009fd9;
        position: relative;
      }

      .resume .resume_left .resume_skills ul li .skill_per {
        width: 15%;
      }

      .resume .resume_left .resume_skills ul li .skill_progress span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: #fff;
      }

      .resume .resume_left .resume_social .semi-bold {
        color: #fff;
        margin-bottom: 3px;
      }

      .resume .resume_right {
        width: 520px;
        background: #fff;
        padding: 25px;
      }

      .resume .resume_right .bold {
        color: #0bb5f4;
      }

      .resume .resume_right .resume_work ul,
      .resume .resume_right .resume_education ul {
        padding-left: 40px;
        overflow: hidden;
      }

      .resume .resume_right ul li {
        position: relative;
      }

      .resume .resume_right ul li .date {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 15px;
      }

      .resume .resume_right ul li .info {
        margin-bottom: 20px;
      }

      .resume .resume_right ul li:last-child .info {
        margin-bottom: 0;
      }

      .resume .resume_right .resume_work ul li:before,
      .resume .resume_right .resume_education ul li:before {
        content: "";
        position: absolute;
        top: 5px;
        left: -25px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        border: 2px solid #0bb5f4;
      }

      .resume .resume_right .resume_work ul li:after,
      .resume .resume_right .resume_education ul li:after {
        content: "";
        position: absolute;
        top: 14px;
        left: -21px;
        width: 2px;
        height: 115px;
        background: #0bb5f4;
      }

      .resume .resume_right .resume_hobby ul {
        display: flex;
        /*  justify-content: space-between;*/
      }

      .resume .resume_right .resume_hobby ul li {
        margin: 0 10px;
        width: 80px;
        height: 80px;
        border: 2px solid #0bb5f4;
        border-radius: 50%;
        position: relative;
        color: #0bb5f4;
      }

      .resume .resume_right .resume_hobby ul li i {
        font-size: 30px;
      }

      /*.resume .resume_right .resume_hobby ul li:before {
  content: "";
  position: absolute;
  top: 40px;
  right: -52px;
  width: 50px;
  height: 2px;
  background: #0bb5f4;
}*/
      .resume .resume_right .resume_hobby ul li:last-child:before {
        display: none;
      }

      .glow-on-hover {
        width: 220px;
        height: 50px;
        border: none;
        outline: none;
        color: #fff;
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
      }

      .glow-on-hover:before {
        content: '';
        background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing 20s linear infinite;
        opacity: 0;
        transition: opacity .3s ease-in-out;
        border-radius: 10px;
      }

      .glow-on-hover:active {
        color: #000
      }

      .glow-on-hover:active:after {
        background: transparent;
      }

      .glow-on-hover:hover:before {
        opacity: 1;
      }

      .glow-on-hover:after {
        z-index: -1;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: #111;
        left: 0;
        top: 0;
        border-radius: 10px;
      }

      @keyframes glowing {
        0% {
          background-position: 0 0;
        }

        50% {
          background-position: 400% 0;
        }

        100% {
          background-position: 0 0;
        }
      }
    </style>
  </head>
  <body>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <button class="glow-on-hover" id="download"> download pdf</button>
    <button class="glow-on-hover" onclick="GoBack()" id="gohome"> Back To Home</button>
    <div class="resume" id="resume">
      <div class="resume_left">
        <div class="resume_profile"> @if($CvInfo->cv_image != null) <img src="{{asset($CvInfo->cv_image)}}" alt="profile_pic"> @else <img src="https://www.w3schools.com/css/img_5terre.jpg" alt="profile_pic"> @endif </div>
        <div class="resume_content">
          <div class="resume_item resume_info">
            <div class="title">
              <p class="bold">{{$CvInfo->name}}</p> @if($CvInfo->designation != null) <p class="regular">{{$CvInfo->designation}}</p> @endif
            </div>
            <ul> @if($CvInfo->address1 != null) <li>
                <div class="icon">
                  <i class="fas fa-map-signs"></i>
                </div>
                <div class="data">
                  {{$CvInfo->address1}}
                </div>
              </li> @endif @if($CvInfo->address2 != null) <li>
                <div class="icon">
                  <i class="fas fa-map-signs"></i>
                </div>
                <div class="data">
                  {{$CvInfo->address2}}
                </div>
              </li> @endif @if($CvInfo->address3 != null) <li>
                <div class="icon">
                  <i class="fas fa-map-signs"></i>
                </div>
                <div class="data">
                  {{$CvInfo->address3}}
                </div>
              </li> @endif @if($CvInfo->address4 != null) <li>
                <div class="icon">
                  <i class="fas fa-map-signs"></i>
                </div>
                <div class="data">
                  {{$CvInfo->address4}}
                </div>
              </li> @endif @if($CvInfo->phone1 != null) <li>
                <div class="icon">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="data">
                  {{$CvInfo->phone1}}
                </div>
              </li> @endif @if($CvInfo->phone2 != null) <li>
                <div class="icon">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="data">
                  {{$CvInfo->phone2}}
                </div>
              </li> @endif @if($CvInfo->email != null) <li>
                <div class="icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <div class="data">
                  {{$CvInfo->email}}
                </div>
              </li> @endif @if($CvInfo->website_link != null) <li>
                <div class="icon">
                  <i class="fab fa-weebly"></i>
                </div>
                <div class="data">
                  {{$CvInfo->website_link}}
                </div>
              </li> @endif </ul>
          </div>
          <div class="resume_item resume_skills">
            <div class="title">
              <p class="bold">skill's</p>
            </div>
            <ul> @if($CvInfo->html != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> HTML </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->html}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->html}}%</div>
              </li> @endif @if($CvInfo->css != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> CSS </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->css}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->css}}%</div>
              </li> @endif @if($CvInfo->sass != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> SASS </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->sass}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->sass}}%</div>
              </li> @endif @if($CvInfo->js != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> JS </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->js}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->js}}%</div>
              </li> @endif @if($CvInfo->jquery != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> JQUERY </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->jquery}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->jquery}}%</div>
              </li> @endif @if($CvInfo->react != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> REACT </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->react}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->react}}%</div>
              </li> @endif @if($CvInfo->angular != 0) <li>
                <div style="font-size: 11.9px;" style="font-size: 11.9px;" class="skill_name"> ANGULAR </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->angular}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->angular}}%</div>
              </li> @endif @if($CvInfo->vue != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> VUE </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->vue}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->vue}}%</div>
              </li> @endif @if($CvInfo->php != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> PHP </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->php}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->php}}%</div>
              </li> @endif @if($CvInfo->aws != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> AWS </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->aws}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->aws}}%</div>
              </li> @endif @if($CvInfo->ai != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> AI </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->ai}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->ai}}%</div>
              </li> @endif @if($CvInfo->machine_learning != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> AI </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->machine_learning}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->machine_learning}}%</div>
              </li> @endif @if($CvInfo->ms_word != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> MS-WORD </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->ms_word}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->ms_word}}%</div>
              </li> @endif @if($CvInfo->ms_excel != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> MS-EXCEL </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->ms_excel}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->ms_excel}}%</div>
              </li> @endif @if($CvInfo->adobe_photoshop != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> ADOBE-PHOTOSHOP </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->adobe_photoshop}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->adobe_photoshop}}%</div>
              </li> @endif @if($CvInfo->adobe_xd != 0) <li>
                <div style="font-size: 11.9px;" class="skill_name"> ADOBE-XD </div>
                <div class="skill_progress">
                  <span style="width: {{$CvInfo->adobe_xd}}%;"></span>
                </div>
                <div class="skill_per">{{$CvInfo->adobe_xd}}%</div>
              </li> @endif </ul>
          </div>
          <div class="resume_item resume_social">
            <div class="title">
              <p class="bold">Social</p>
            </div>
            <ul> @if($CvInfo->facebook1 != 0) <li>
                <div class="icon">
                  <i class="fab fa-facebook-square"></i>
                </div>
                <div class="data">
                  <p class="semi-bold">Facebook</p>
                  <p>{{$CvInfo->facebook1}}</p>
                </div>
              </li> @endif @if($CvInfo->facebook2 != 0) <li>
                <div class="icon">
                  <i class="fab fa-facebook-square"></i>
                </div>
                <div class="data">
                  <p class="semi-bold">Facebook</p>
                  <p>{{$CvInfo->facebook2}}</p>
                </div>
              </li> @endif @if($CvInfo->twitter1 != 0) <li>
                <div class="icon">
                  <i class="fab fa-twitter-square" aria-hidden="true"></i>
                </div>
                <div class="data">
                  <p class="semi-bold">Twitter</p>
                  <p>{{$CvInfo->twitter1}}</p>
                </div>
              </li> @endif @if($CvInfo->twitter2 != 0) <li>
                <div class="icon">
                  <i class="fab fa-twitter-square" aria-hidden="true"></i>
                </div>
                <div class="data">
                  <p class="semi-bold">Twitter</p>
                  <p>{{$CvInfo->twitter2}}</p>
                </div>
              </li> @endif @if($CvInfo->youtube != 0) <li>
                <div class="icon">
                  <i class="fab fa-youtube"></i>
                </div>
                <div class="data">
                  <p class="semi-bold">Youtube</p>
                  <p>{{$CvInfo->youtube}}</p>
                </div>
              </li> @endif @if($CvInfo->linkedin != 0) <li>
                <div class="icon">
                  <i class="fab fa-linkedin"></i>
                </div>
                <div class="data">
                  <p class="semi-bold">Linkedin</p>
                  <p>{{$CvInfo->linkedin}}</p>
                </div>
              </li> @endif
              <!--  <li><div class="icon"><i class="fab fa-linkedin"></i></div><div class="data"><p class="semi-bold">Linkedin</p><p>Stephen@linkedin</p></div></li> -->
            </ul>
          </div>
        </div>
      </div>
      <div class="resume_right"> @if($CvInfo->about_you != null) <div class="resume_item resume_about">
          <div class="title">
            <p class="bold">About us</p>
          </div>
          <p>{{$CvInfo->about_you}}</p>
        </div> @endif <div class="resume_item resume_work">
          <div class="title">
            <p class="bold">Work Experience</p>
          </div>
          <ul> @if($CvMoreInfo->exp_year1 != 0) <li>
              <div class="date">{{$CvMoreInfo->exp_year1}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->company_name1}}</p>
                <p>{{$CvMoreInfo->about_exp1}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->exp_year2 != 0) <li>
              <div class="date">{{$CvMoreInfo->exp_year2}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->company_name2}}</p>
                <p>{{$CvMoreInfo->about_exp2}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->exp_year3 != 0) <li>
              <div class="date">{{$CvMoreInfo->exp_year3}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->company_name3}}</p>
                <p>{{$CvMoreInfo->about_exp2}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->exp_year4 != 0) <li>
              <div class="date">{{$CvMoreInfo->exp_year4}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->company_name4}}</p>
                <p>{{$CvMoreInfo->about_exp4}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->exp_year5 != 0) <li>
              <div class="date">{{$CvMoreInfo->exp_year5}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->company_name5}}</p>
                <p>{{$CvMoreInfo->about_exp5}}</p>
              </div>
            </li> @endif </ul>
        </div>
        <div class="resume_item resume_education">
          <div class="title">
            <p class="bold">Education</p>
          </div>
          <ul> @if($CvMoreInfo->edu_year1 != 0) <li>
              <div class="date">{{$CvMoreInfo->edu_year1}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->inst_name1}}</p>
                <p>{{$CvMoreInfo->about_edu1}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->edu_year2 != 0) <li>
              <div class="date">{{$CvMoreInfo->edu_year2}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->inst_name2}}</p>
                <p>{{$CvMoreInfo->about_edu2}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->edu_year3 != 0) <li>
              <div class="date">{{$CvMoreInfo->edu_year3}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->inst_name3}}</p>
                <p>{{$CvMoreInfo->about_edu3}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->edu_year4 != 0) <li>
              <div class="date">{{$CvMoreInfo->edu_year4}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->inst_name4}}</p>
                <p>{{$CvMoreInfo->about_edu4}}</p>
              </div>
            </li> @endif @if($CvMoreInfo->edu_year5 != 0) <li>
              <div class="date">{{$CvMoreInfo->edu_year5}}</div>
              <div class="info">
                <p class="semi-bold">{{$CvMoreInfo->inst_name5}}</p>
                <p>{{$CvMoreInfo->about_edu5}}</p>
              </div>
            </li> @endif </ul>
        </div>
        <div class="resume_item resume_hobby">
          <div class="title">
            <p class="bold">Hobby</p>
          </div>
          <ul> @if($CvMoreInfo->hobby1 != null) <li>
              <i class="{{$CvMoreInfo->hobby1}}"></i>
            </li> @endif @if($CvMoreInfo->hobby2 != null) <li>
              <i class="{{$CvMoreInfo->hobby2}}"></i>
            </li> @endif @if($CvMoreInfo->hobby3 != null) <li>
              <i class="{{$CvMoreInfo->hobby3}}"></i>
            </li> @endif @if($CvMoreInfo->hobby4 != null) <li>
              <i class="{{$CvMoreInfo->hobby4}}"></i>
            </li> @endif </ul>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script type="text/javascript">
      window.onload = function() {
        document.getElementById("download").addEventListener("click", () => {
          const invoice = this.document.getElementById("resume");
          console.log(invoice);
          console.log(window);
          var opt = {
            margin: 0,
            filename: 'mycv.pdf',
            image: {
              type: 'jpeg',
              quality: 0.98
            },
            html2canvas: {
              scale: 2
            },
            jsPDF: {
              unit: 'in',
              format: 'tabloid',
              orientation: 'portrait'
            }
          };
          html2pdf().from(invoice).set(opt).save();
        })
      }
    </script>
    <script type="text/javascript">
      @if(Session::get('key') == 200)
      Swal.fire({
        icon: 'success',
        title: 'Yes...',
        text: 'Your CV Sussfully Create',
      })
      @endif
      @if(Session::get('key') == 300)
      Swal.fire({
        icon: 'success',
        title: 'Yes...',
        text: 'Your CV Sussfully Updated',
      })
      @endif
    </script>
    <script type="text/javascript">
      function GoBack() {
        window.location.href = "dashboard";
      }
    </script>
  </body>
</html>