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
                /* width: 100%; */
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
              /* box-shadow: 15px 15px 40px rgba(0,0,0,0.15) */
            }
            .test{
              margin: auto;
              background-color: white;
              color: #000;
            }

            .gallery{
              margin-top: 0;
              margin-bottom: 0.3rem;
              padding-top: 10px;
              height: 100vh;
              width: 100%;
              background-color: #000;
              display: flex;
              position: absolute;
              top:0px;
              overflow: hidden;
              overflow-y: scroll;
              mask-image: linear-gradient(to right);
              z-index: 4;
              /* flex-wrap: wrap; */
              /* overflow-y: scroll; */
            }

            @keyframes scrollleft{
              to{
                left:-600px;
              }
            }
            .list{
              width: 500px;
              height: 500px;
              position: absolute;
              top: 50px;
              left: max(calc(690px * 39),100%);
              animation-name: scrollleft;
              animation-duration: 480s;
              animation-timing-function: linear;
              animation-iteration-count: infinite;
            }
            h3{
              display: flex;
              align-items: center;
              justify-content: center;
              margin-top: 30px;
              margin-bottom: 30px;
              padding-top: 70px;
              
            }
            nav{
              margin-bottom: 10rem;
            }

            .view_slide{
            margin-left: 45%;
            margin-right: 50%;
            margin-top: 5px;
            margin-bottom: 5px;
            padding: 3px;

            width: 135px;
            background-color: #E4A11B;
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

            .view_slide{
           
            /* margin-right: 40%; */
            margin-left: 25%;
            
            
          }
            

          }
          .grid{
            display: flex;
            width:80%;
            /* height: 100vh; */
            flex-wrap: wrap;
            /* background-color: #000; */
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            /* flex-direction: row; */
          }

          .disp{
            width: 30%;
            margin: 3px;
            cursor: pointer;
          }
          .button-cont{
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            justify-content: center;
            align-items: center;
            flex-direction: row;
          }
         

          .close{
            color: white;
            position: absolute;
            right: 5px;
            cursor: pointer;
            z-index: 20;
          }
          .stop-scrolling {
  height: 100%;
  overflow: hidden;
}
.single-img{
  display: flex;
  width: 100%;
  position: absolute;
  top:0px;
  height: 100vh;
  overflow: hidden;
  overflow-y: scroll;
  overflow-x: scroll;
  background-color: #000;
}

@media only screen and (max-width: 767px){

}

        </style>
         @vite(['resources/js/app.js', 'resources/css/app.scss'])
    </head>
<body class="body">
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
          <a class="nav-link" href="{{url('/#home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/#about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/#clergy')}}">Clergy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/#Services')}}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/#donate')}}">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/#location')}}">Location</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/ministries')}}">Ministries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/#contact')}}">Contact</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav> 

<h3>welcome to our picture gallery</h3>

<div class="button-cont">
   <button class="view_slide">view slide show</button> 

  
</div>

<div class="grid">

@foreach ($arr[0] as $pic)
<img src= "{{url($pic)}}"  alt="" class="disp" onclick="enlarge(this)">
@endforeach

</div>
<div class="single-img">
<div class="close">close</div>
<img src= ""  alt="" style="margin: auto;" >
</div>

<!-- <?=$i = 1?> -->
  <div class="gallery">
    <div class="close">close</div>
  @foreach ($arr[0] as $pic)
  <img src= "{{url($pic)}}"  alt="" class="list" style="animation-delay: calc(480s/39 * (39 - <?=$i?>) * -1);">
  <!-- <?=$i++?> -->
    @endforeach

  </div>
 

<footer class="bg-dark p-2 text-center">
  <div class="container">
    <p class="text-white">All Rights Reserved @All Souls Anglican Church</p>
  </div>
</footer>

       

<!-- <img style="display: block;-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="http://127.0.0.1:8000/galleries/Photo%20from%20Uche(19).jpg" width="211" height="158"> -->
        
       
    </body>
    <script>
      
let but =  document.getElementsByClassName('button-cont');
let body = document.getElementsByClassName('body');
let nav = document.getElementsByClassName('navbar');
let gallery = document.getElementsByClassName('gallery');
let close = document.getElementsByClassName('close')
let container = document.getElementsByClassName('single-img')
let list = document.getElementsByClassName('list')



     
let scrolle;

// window.onload(()=>{
//   gallery[0].setAttribute("style","display:none")
// container[0].setAttribute("style","display:none");
// })
   
    
gallery[0].setAttribute("style","display:none")
container[0].setAttribute("style","display:none");
      // let test = document.getElementsByTagName('h3')
         but[0].addEventListener('click',()=>{
          nav[0].setAttribute("style","display:none");
          gallery[0].setAttribute("style","display:flex")
          body[0].setAttribute("style","overflow:hidden")
          
          scrolle = window.scrollY;
          
          
       })

       for (const it of close) {
           
            it.addEventListener('click',()=>{
        console.log('abeg')
        nav[0].setAttribute("style","display:flex");
        gallery[0].setAttribute("style","display:none");
        body[0].setAttribute("style","overflow-y:scroll");
        container[0].setAttribute("style","display:none");
        console.log(scrolle)
        window.scrollTo({top: scrolle, behavior: 'smooth' })
       })
          }

       
      // console.log(gallery);
          
      gallery[0].setAttribute("style","display:none")
      container[0].setAttribute("style","display:none");

      function enlarge (e){
        // console.log(e.getAttribute('src'))
        let src = e.getAttribute('src');
        let arr = src.split(' ')
        src = arr.join('%20');

       container[0].lastElementChild.setAttribute("src",src)
       
       scrolle = window.scrollY;

       console.log(container[0].lastElementChild);
       let y = container[0].lastElementChild.naturalHeight;
       let x = container[0].lastElementChild.naturalWidth;

       container[0].lastElementChild.setAttribute("width",x/4)
       container[0].lastElementChild.setAttribute("height",y/4)

       console.log(window.innerWidth,'y');


        nav[0].setAttribute("style","display:none");
          container[0].setAttribute("style",`display:flex;top:${scrolle}`)
          body[0].setAttribute("style","overflow:hidden")
          window.scrollTo({top: 0, behavior: 'smooth' })
        
       // width: 500px;
      //  height: 500px;
      }
      
    </script>
</html>
