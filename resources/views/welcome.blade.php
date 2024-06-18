<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>All Souls Anglican Church</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/bootstrap/">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            /* html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}} */
        </style>

        <style>

            body {
                font-family: 'Nunito', sans-serif;
                background: f1fbff;
            }
            .section-padding{
              padding: 100px 0;
            }
            .carousel-item{
              height: 100vh;
              min-height: 300px;
            }
            .carousel-caption{
              bottom: 200px;
              z-index: 2;
            }
            .carousel-caption h5{
              font-size: 45px;
              text-transform: uppercase;
              letter-spacing: 2px;
              margin-top: 25px;
            }
            .carousel-caption p{
              width: 60%;
              margin: auto;
              font-size: 18px;
              line-height: 1.9;
            }
            .carousel-inner::before{
              content: '';
              position: absolute;
              width: 100%;
              height: 100%;
              top: 0;
              left: 0;
              background: rgba(0,0,0,0.5);
              z-index: 1;
            }
            .navbar-light .navbar-brand{
              color: #000;
              font-size: 20px;
              text-transform: uppercase;
              font-weight: 700;
              letter-spacing: 2px;
            }
            .navbar-light .navbar-brand:focus,
            .navbar-light .navbar-brand:hover{
              color: #000;
              
            }
            .navbar-light .navbar-nav .navbar-link{
              color: #000;
              
            }
            .w-100{
              height: 100vh;
            }

            .service.card-body i{
              font-size: 50px;
            }
            .portfolio .card{
              box-shadow: 15px 15px 40px rgba(0,0,0,0.15)
            }



            /* responsive */


            
            @media only screen and (min-width: 768px) and (max-width: 991px){
             
            .carousel-caption{
              bottom: 370px;
            }
            .carousel-caption p{
              width: 100%;
              /* margin: auto; */
              
            }
            .card{
              margin-bottom: 30px;
            }
            .img-area img{
              width:100%;
            }
          }

            @media only screen and (max-width: 767px){
              .navbar-nav{
                text-align: center;
              }

              .navbar-light .navbar-brand span{
              /* color: #000;
              font-size: 15px;
              text-transform: uppercase;
              font-weight: 500;
              letter-spacing: 1px; */
              display: none;
            }
            .carousel-caption{
              bottom: 125px;
            }
            .carousel-caption h5{
              font-size: 17px;
            }
            .carousel-caption a{
              padding: 10px 15px;
            }
            .carousel-caption p{
              width: 100%;
              /* margin: auto; */
              font-size: 16px;
              line-height: 1.6;
            }
            .about-text{
              padding-top: 50px;
            }
            .card{
              margin-bottom: 30px;
            }

          }

        </style>
         @vite(['resources/js/app.js', 'resources/css/app.scss'])
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
    <img src="{{url('/allsoulslogo.png')}}" alt="" width="40" height="40" class="d-inline-block align-text-center">
     <span><span class="text-warning">All Souls </span>Anglican Church </span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#clergy">Clergy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#donate">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#location">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{url('/uncleDele2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>clergy</h5>
        <p>Meet our Clergy</p>
        <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>

      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('/prayer.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Worship with us</h5>
        <p> Join us for uplifting worship services filled with heartfelt music, meaningful prayers, and insightful sermons that connect the timeless truths of the Bible to our everyday lives.
        </p>
        <p><a href="#Services" class="btn btn-warning mt-3">Learn More</a></p>

      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('/bible.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>Location</h5>
        <p>Worship with us on sundays at 1818 Wooddale Blvd, Baton Rouge, LA 70806, USA</p>
        <p><a href="#location" class="btn btn-warning mt-3">Learn More</a></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('/easter.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>Easter</h5>
        <p>Holy Easter Saturday Vigil</p>
        <p><a href="#Services" class="btn btn-warning mt-3">Learn More</a></p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


        <section id="about" class="about section-padding">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                  <img src="{{url('/about.jpg')}}" alt="" class="img-fluid">
                </div>

              </div>
              <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                  <h2>Come As You Are</h2>
                  <p>
                  We are delighted to welcome you to All Souls Anglican Church, a place where faith, hope, and love come together. Whether you are visiting for the first time, searching for a new church home,
                   or returning to worship with us, we are honored to have you here.
                  </p>
                  <!-- <a href="#" class="btn btn-warning">Learn More</a> -->
                </div>
              </div>
            </div>
          </div>

        </section>

        <section id="Services" class="services section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h2>Join Us</h2>
                  <p>
                  We are dedicated to spreading the love of Jesus Christ through worship, service, and fellowship. Our mission is to inspire and empower individuals to live out their faith in meaningful ways, making a positive impact in our community and beyond.
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Sunday Service</h3>
                    <p class="lead text-warning">
                      10:00 am promptly <br><br>
                      1818 Wooddale Blvd <br>
                      Baton Rouge,LA 70806
                    </p>

                  </div>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Sunday Night Prayers</h3>
                    <p class="lead text-warning">
                      6:00 pm promptly <br><br>
                      (605) 313-5737 <br>
                      code: 7938287
                      
                    </p>

                  </div>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Wednesday Bible Study</h3>
                    <p class="lead text-warning">
                      7:00 pm promptly <br><br>
                      (605) 313-5737 <br>
                      code: 7938287
                    </p>

                  </div>
                </div>
               </div>

               
            </div>
            <div class="row"  style="margin-top: 3px;">
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Holy Easter Saturday Vigil</h3>
                    <p class="lead text-warning">
                      10:00 pm promptly <br>
                      <a href="https://zoom.us/j/97367034771?pwd=Mm9ZY0E5dlZCb0FBaWJIbThvSkRUQT09"><img src="{{url('/zoomus-ar21.svg')}}" alt=""></a> <br>
                      Meeting ID: 973 6703 4771 | Passcode: 546733
                    </p>

                  </div>
                </div>
               </div>
            </div>

          </div>
        </section>

        <section id="clergy" class="portfolio section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h2>The Clergy</h2>
                  <p>we are blessed to have a dedicated and compassionate team of clergy who are committed to guiding our community in faith, service, and spiritual growth. Their diverse backgrounds and experiences enrich our church and help us to serve our congregation and community with love and care.</p>
                </div>
              </div>
            </div>

            <div class="row justify-content-around">
              <div class="col-md-12 col-lg-6">
                <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{url('/bishop.jpg')}}" alt="" class="img-fluid" style="max-height:350px;width:100%;">
                    </div>
                    <h4 class="card-title">Bishop</h4>
                    <p class="lead text-center">THE RT.REV.DR.COL.FELIX ORJI (OSB)<br>
                    &<br>
                    MRS LILLIAN ORJI 
                   </p>

                    <button class="btn bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1">Learn More</button>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reverend Dele Adebamiji</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="img-area mb-4">
                      <img src="{{url('/bishop.jpg')}}" alt="" class="img-fluid" style="max-height:350px;width:100%;">
                    </div>
                    <p>Bishop Felix Orji is the Diocesan Bishop of the Anglican Diocese of All Nations (ADAN).The Anglican Diocese of All Nations is home to parishes in the United States and Canada. 

​

Early in his life, Bishop Felix Orji made a decision to follow and serve Christ as the Savior and Lord of his life. The result of this decision as a teenager was a commitment to the call of God on his life to serve Christ as a minister of the gospel of God's grace. This led him to ordained ministry in the Anglican Church in Canada and the USA as a priest and now as a Bishop of the Anglican Church in North America (ACNA). He completed a BA degree with honors at the University of Ife in Ile-Ife, Nigeria, and received a Master’s degree at the University of Lagos, Nigeria. He earned a Diploma in Christian Studies from Regent College, Vancouver, BC, and a Master of Divinity from Vancouver School of Theology in Canada. Dr. Orji also earned a Doctorate in Leadership and Evangelism from Gordon-Conwell Theological Seminary at the Charlotte, North Carolina.

​

Bishop Orji who is currently the Bishop Protector of the Order of St. Benedict, was ordained in 1996 in the Diocese of New Westminster, Anglican Church of Canada. He served his curacy at All Saints Anglican Church in Burnaby, BC and afterwards as Associate rector at St. Johns Shaughnessy in Vancouver, BC, the largest evangelical Anglican parish in Canada. In 2004, he moved to the Diocese of the Rio Grande in the USA where he served a parish for a year. He was also the Coordinator of the Anglican Fellowship of the Southwest till 2010 which finally became the Diocese of the Southwest. 

​

In 2005, Dr. Orji became associate rector of St. Francis on the Hill in El Paso, and Rector from 2008 to August 2015. In September 2011, he was consecrated Bishop by the Anglican Church of Nigeria (Anglican Communion) to serve in the USA and Canada.

​

Our Bishop's vision and prayer is that the Holy Spirit will make it possible for us to go DEEPER with God, get CLOSER to one another, and go FURTHER in our impact in our community and the world.

​

The Right Reverend Dr. Felix Orji and his wife Lilian have four children, Cara, John, Jadon, and Justin. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-6">
              <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{url('/uncleDele.jpg')}}" alt="" class="img-fluid" style="max-height:350px;width:100%;">
                    </div>
                    <h4 class="card-title">Rector</h4>
                    <p class="lead">REVEREND DELE ADEBAMIJI <br>
                    &<br>
                    MRS FELICIA ADEBAMIJI
                   </p>
                    </p>
                    <button class="btn bg-warning text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Learn More</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reverend Dele Adebamiji</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="img-area mb-4">
                      <img src="{{url('/uncledele2.jpg')}}" alt="" class="img-fluid" style="max-height:350px;width:100%;">
                    </div>
                    <p>Reverend Dele Akintade Adebamiji is a Mediator and a practicing attorney in Baton Rouge, Louisiana .
He was ordained into priesthood on November  19 2023 by the  Right Revert Doctor Felix C. Orji under the Anglican Diocese of All Nations, a diocese of the Anglican Church of North America(ACNA).
He was born and raised in a stunch Anglican Family . His passion is to win souls to Christ and guide people in the way of righteousness to end in eternal rest. He loves to teach and discuss the word of God.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </section>

        <section id="location" class="section-padding">
          <div class="container">
          <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h2>Location</h2>
                  <p>worship with us on Sunday's at </p>
                  <p class="text-warning">
                  1818 Wooddale Blvd, Baton Rouge, LA 70806, USA
                  </p>
                </div>
              </div>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3438.9816312775433!2d-91.11495482547659!3d30.464958374714556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8626a3b9e7cb74af%3A0x13451f50dfe3e97c!2s1818%20Wooddale%20Blvd%2C%20Baton%20Rouge%2C%20LA%2070806%2C%20USA!5e0!3m2!1sen!2sng!4v1710916149784!5m2!1sen!2sng"  style="min-height:600px;width:100%;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


          </div>
        </section>


        <section id="donate" class="donation section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h2>Donate</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas architecto magni assumenda suscipit 
                    voluptatum nobis libero possimus iure neque vero quasi ad, quo animi reiciendis, similique dignissimos ex magnam molestiae?</p>
                </div>
              </div>
            </div>

            <div class="row justify-content-around">
              <div class="col-md-12 col-lg-6">
                <div class="card text-center bg-white pb-2">
                  <div class="card-body text-dark">
                  <h4 class="card-title">Cash App</h4>
                    <div class="img-area mb-4">
                      <img src="{{url('/cashapp.png')}}" alt=""  style="max-height:200px;width:200px;border:1px solid white;">
                    </div>
                  
                    <h5>$allsoulsangchurch6</h5>
                    <a href="https://cash.app/$allsoulsangchurch6"><button class="btn bg-warning text-dark"> Donate </button></a>
                  </div>
                </div>
              </div>

              <div class="col-md-12 col-lg-6">
              <div class="card text-center bg-white pb-2">
                <h4 class="card-title">Zelle</h4>
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{url('/zelle.svg')}}" alt="" class="img-fluid">
                    </div>
                   
                    <h5>allsoulsanglicanchurch6@yahoo.com</h5>
                    <a href=""><button class="btn bg-warning text-dark"> Donate </button></a>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </section>


        <section id="contact" class="contact section-padding">
          <div class="container">
            <div class="row">
              <div class="section-header text-center pb-5">
                <h2>Contact Us</h2>
                <p class="text-warning"> Send us a message we will love to hear from you</p>
              </div>

            </div>
          </div>

          <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 p-4">
              <form action="https://formsubmit.co/allsoulsanglicanchurch6@yahoo.com" class="bg-light p-4.m-auto" >
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <input type="text"  class="form-control" required placeholder="Full name">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <input type="email"name="email"  class="form-control" required placeholder="email">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <textarea  rows="3" required name="message" class="form-control" placeholder="Your Message Here"></textarea>
                  </div>
                </div>
                <button class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>


              </form>
           
              </div>
            </div>
          </div>
        </section>

        <footer class="bg-dark p-2 text-center">
          <div class="container">
            <p class="text-white">All Rigts Reserved @All Souls Anglican Church</p>
          </div>
        </footer>

       


        
       
    </body>
</html>
