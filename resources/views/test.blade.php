<!DOCTYPE html>
  <html>
    <head>
    
    <meta http-equiv="refresh" content="900">  <!-- Refeshes the page every 15 minutes. The '900' is in seconds -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style> 
    /* Controls font */
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Nunito", sans-serif;
    background-color: #f63b3b; margin: 20px;}


    /*  First row: */
    .carousel-inner{
      position: relative;
      height: 500px;
      vertical-align: middle;
    }
    .carousel-item{
      margin: 0;
      position: absolute;
      top: 50%;
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    .carousel-img{
      width: 80%;
      max-height: 450px;
      margin-left: auto;
      margin-right: auto;
      display: block;
      object-fit: contain;
    }

    #youtube{
      width: 100%;
      height: 100%;

    }
    /*Size on smaller screens*/
    @media(max-width: 1999px) and (min-width: 1400px){
      /*.carousel-img{

        max-width: 700px;
        max-height: 250px;
        margin-left: auto;
        margin-right: auto;
        display: block;
        object-fit: contain;
      }
      .carousel-inner{
        position: relative;
        height: 350px;
        vertical-align: middle;
      }*/

      .carousel-img{
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        object-fit: contain;
      }
    }
    @media(max-width: 1399px) and (min-width: 1200px){
     /* .carousel-img{

        max-width: 700px;
        max-height: 175px;
        margin-left: auto;
        margin-right: auto;
        display: block;
        object-fit: contain;
      }
      .carousel-inner{
        position: relative;
        height: 225px;
        vertical-align: middle;
      }*/
      .carousel-inner{
        position: relative;
        height: 300px;
        vertical-align: middle;
      }
      #youtube{
        width: 100%;
        height: 300px;

      }
      .carousel-img{
        width: 80%;
        max-height: 250px;
        margin-left: auto;
        margin-right: auto;
        display: block;
        object-fit: contain;
      }
    }

    @media (max-width: 1199px) and (min-width: 992px){
      .carousel-img{

        max-width: 700px;
        max-height: 250px;
        margin-left: auto;
        margin-right: auto;
        display: block;
        object-fit: contain;
      }
      .carousel-inner{
        position: relative;
        height: 300px;
        vertical-align: middle;
      }
      #youtube{
        width: 100%;
        height: 400px;

      }


    }

    @media (max-width: 991px) and (min-width: 768px){
      .carousel-img{

        max-width: 600px;
        max-height: 200px;
        margin-left: auto;
        margin-right: auto;
        display: block;

      }
      .carousel-inner{
        position: relative;
        height: 250px;
        vertical-align: middle;
      }
      #youtube{
        width: 100%;
        height: 300px;

      }
    }

    @media ( max-width: 767px){
      .carousel-img{

        max-width: 400px;
        max-height: 150px;
        margin-left: auto;
        margin-right: auto;
        display: block;
        object-fit: contain;
      }
      .carousel-inner{
        position: relative;
        height: 200px;
        vertical-align: middle;
      }
    }

    .notices {
      margin-left: 8%;
      font-size: 24px;
      padding-top: 5px;
    }

  </style>

    <body>
      
      <div class='container-fluid'>
        <br>    <!-- logo -->     
        <img align='right' style='width:5%' src={{ asset('logo.png')}}>
        <!-- Title -->
        <div >
           <h1 class="display-4 text-light"><center>Speak Up London Announcement Board</center></h1>
        </div>
       
        
        <!-- TimeTable and Carousel -->
        <div class="row">

          <div class="col-xl-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="carousel-img" src={{ asset('time.png')}}>

                      

                    </div>
                  <div class="carousel-item">
                    <img class="carousel-img " src={{ asset('afternoon.png')}}>


                  </div>
                  <div class="carousel-item">
                    <img class="carousel-img " src={{ asset('evening.png')}}>


                  </div>


              </div> 
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <!-- YouTube Video -->
          <div class='col-xl-6'>
             <iframe  id="youtube" src="https://www.youtube.com/embed/videoseries?list=PLovPuINmPBQWWEAQDpSWTvC4Y20CydodW&autoplay=1&loop=1&controls=1&rel=0" allow="autoplay;"></iframe>
          </div>

        </div>

        <div class="row">

          <!-- Notice Board -->
          <div class='col-xl-6'>

            <div class='notices'>
            <h1> IMPORTANT NOTICES </h1>
            <br>
            <ul>
              <li> Remember there is a test on the 29<sup>th</sup> of March</li>
              <br>
              <li> Don't forget to wear your lanyard around the school!!</li>
              <br>
              <li> HAPPY 28<sup>th</sup> BIRTHDAY FRANK </li>
              <br>
              <li> Ms ____ is not in today and will be replaced by xxx for this week </li>
              <br>
              <li> Class 7 has been moved to Classroom 9 </li>
              <br>
              <li> Congratualtions to Anonymous for passing their oral exam </li>
            </ul>
          </div>

          </div>


          <!-- All the events -->
          <div class="col-xl-6">
            <div class="row">
              <div class="col-xl-12 col-md-12 ">
                <img style="width:100%; height:100%; margin-top: 40px;"src={{ asset('splogo.png')}}>
              </div>

            
            </div>

          </div>
          </div>
          <!-- Weather widget -->
              <div style='margin-top: 70px'>
               <a class="weatherwidget-io" href="https://forecast7.com/en/51d51n0d13/london/" data-label_1="LONDON" data-label_2="WEATHER" data-theme="pure" >LONDON WEATHER</a>
            <script>
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script></div>


<br>
<br>

      </div>
</div>



    </body>



    <!-- <script>  

      function drawClock(ctx, radius) {
        drawFace(ctx, radius);
        drawNumbers(ctx, radius);
        drawTime(ctx, radius);
      }

      function drawFace(ctx, radius) {
        var grad;

        ctx.beginPath();
        ctx.arc(0, 0, radius, 0, 2 * Math.PI);
        ctx.fillStyle = 'white';
        ctx.fill();

        grad = ctx.createRadialGradient(0, 0 ,radius * 0.95, 0, 0, radius * 1);
        grad.addColorStop(0, '#333');
        ctx.strokeStyle = grad;
        ctx.lineWidth = radius*0.05;
        ctx.stroke();

        ctx.beginPath();
        ctx.arc(0, 0, radius * 0.075, 0, 2 * Math.PI);
        ctx.fillStyle = '#333';
        ctx.fill();
      }

      function drawNumbers(ctx, radius) {
        var ang;
        var num;
        ctx.font = radius * 0.15 + "px arial";
        ctx.textBaseline = "middle";
        ctx.textAlign = "center";

        for(num = 1; num < 13; num++){
          ang = num * Math.PI / 6;
          ctx.rotate(ang);
          ctx.translate(0, -radius * 0.85);
          ctx.rotate(-ang);
          ctx.fillText(num.toString(), 0, 0);
          ctx.rotate(ang);
          ctx.translate(0, radius * 0.85);
          ctx.rotate(-ang);
        }
      }

      function drawTime(ctx, radius){
        var now = new Date();
        var hour = now.getHours();
        var minute = now.getMinutes();
        var second = now.getSeconds();
          //hour
          hour = hour%12;
          hour = (hour*Math.PI/6)+(minute*Math.PI/(6*60))+(second*Math.PI/(360*60));
          drawHand(ctx, hour, radius*0.5, radius*0.07);
          //minute
          minute = (minute*Math.PI/30)+(second*Math.PI/(30*60));
          drawHand(ctx, minute, radius*0.8, radius*0.07);
          // second
          second = (second*Math.PI/30);
          drawHand(ctx, second, radius*0.9, radius*0.02);
      }

        function drawHand(ctx, pos, length, width) {
          ctx.beginPath();
          ctx.lineWidth = width;
          ctx.lineCap = "round";
          ctx.moveTo(0,0);
          ctx.rotate(pos);
          ctx.lineTo(0, -length);
          ctx.stroke();
          ctx.rotate(-pos);
        }   

        var clocks = document.getElementsByTagName("canvas");

        for (let i = 0; i < clocks.length; i++) {      
          var ctx = clocks[i].getContext("2d");
          var radius = clocks[i].height / 2;
          ctx.translate(radius , radius);
          radius = radius * 0.90;

          (function(currentCtx, currentRadius){
            setInterval(function(){ drawClock(currentCtx, currentRadius);}, 1000); 
          })(ctx, radius);

        }

      </script> -->



