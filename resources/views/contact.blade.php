<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
body, html {
  height: 100%; font-family: helvetica; background-color: #f63b3b; margin: 0;
}

#parallax { 

  min-height: 35%;  
  background-attachment: fixed;
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
  position: relative;
  background-image: url({{ asset('bg.png')}});

} 

#example1 {
  min-height: 35%;  
  background-attachment: fixed;
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
  position: relative;
  background-image: url({{ asset('bg.png')}});
}

.centered { 

  position: absolute; 
  top: 17.5%; 
  left: 50%; 
  transform: translate(-50%, -50%); 
  text-align: center;
  font-family: helvetica;

}

p.ex4 {display: inline-block; color: white; margin-left: 4%}

.button1 {
  border-radius: 4px;
  background-color: #FFFFFF;
  border: none;
  color: black;
  text-align: center;
  font-size: 25px;
  padding: 20px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top: 45px;
  width: 100%
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  left: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-left: 25px;
}

.button1:hover span:after {
  opacity: 1;
  left: 0;
}

.main {
  margin-left: 30%;
  margin-right: 30%;
  font-family: helvetica;
  text-align: center;
}

.faq{ 
  margin-left: 34%;
  margin-right: 34%;
  font-family: helvetica;
  color:#A8A8A8
}

.accordion { /*controls colour, pointer, font size etc*/ 

  background-color: #eee; 
  color: #444; 
  cursor: pointer; 
  padding: 18px; 
  width: 100%; 
  border: none; 
  text-align: left; 
  outline: none; 
  font-family: helvetica;
  font-size: 15px; 
  transition: 0.4s; 

} 

.active, .accordion:hover { /*controls hover colour*/ 

  background-color: #ccc; 

} 

.accordion:after { /*controls how accordion looks after*/ 

  content: '\002B'; 
  color: #777; 
  font-weight: bold; 
  float: right; 
  margin-left: 5px; 

} 

.active:after { 
  content: "\2212"; 

} 

.panel { /*controls panel colour, size etc*/ 

  padding: 0 18px; 
  background-color: white; 
  max-height: 0; 
  overflow: hidden; 
  transition: max-height 0.2s ease-out; 

}


a.ex1:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
} 

a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color:  #ff5858;
  background-color: transparent;
  text-decoration: underline;
}


.map-responsive{
    overflow:hidden;
    padding-bottom:20%;
    position:relative;
    height:0;
    margin-top: 30px;
}
.map-responsive iframe{
    left:0;
    top:0;
    width:100%;
    position:absolute;
}

/*Mobile design*/
@media only screen and (max-width: 819px) {
  .main {
  margin-left: 5%;
  margin-right:5%;
}
}

.footer {

  background-color: white;
  text-align: center;
}

ul {
    margin: 0.75em 0;
    padding: 0 1em;
    list-style: none;
}
li:before { 
    content: "";
    border-color: transparent #111;
    border-style: solid;
    border-width: 0.35em 0 0.35em 0.45em;
    display: block;
    height: 0;
    width: 0;
    left: -1em;
    top: 0.9em;
    position: relative;
}
</style>

</head>

<body>
  <div id='example1'>
  </div>


  <div class='centered'>
    <h1 style='font-size:5vw;color:white;'> Contact Us </h1>
    <div class='txt'>
    <p class='ex4' style='font-size:15px;'> Home </p>
    <p class='ex4' style='font-size:15px;'><a href='students'> Students </a></p>
    <p class='ex4' style='font-size:15px;'> About </p>
    <p class='ex4' style='font-size:15px;'><a href='contact'> Contact</a> </p>
    <p class='ex4' style='font-size:15px;'> Accomadations </p>
  </div>

  </div>
   
    <div class='main' style='margin-top: 3.5%'> 
      <h1 style='font-family: helvetica;'> WE ARE NOW ON WHATSAPP! +447957942785</h1>
      <h3 style='color:black'> Speak Up London<br><br>139 Oxford Street<br><br>London, W1D 2JA<br><br>Email: info@speakuplondon.com<br><br>Phone: +44 (0) 2077340444<br><br>Emergency Phone: +44 (0) 7517 477601</h3>
    </div>
      <br><br>
      <div class='main'>
      <div class='row'>
        <div class='col-sm'>
          <a href='#directions'><button class="button1"><span>DIRECTIONS</span></button></a>
        </div>
        <div class='col-sm'>
          <a href='#msg'><button class="button1"><span>MESSAGE US</span></button></a>
        </div>
       </div>
     </div>

<div class='main'>
  <h2 style='margin-top: 15%;'>SEND US A MESSAGE</h2>
  <br><br>
  <h5 style='color:white'>If you need more information about our English courses, please contact Admissions at any time.
    <br><br>
     We speak English, Spanish, Catalan, Italian, German, French, Portuguese, Polish and Urdu!</h5>
     <br>

 <div id='msg'>
 <form>
  <textarea name='name' style="width:55%">Your Name</textarea>
  <br><br>
  <textarea name='email' style="width: 55%"> Your Email</textarea>
  <br><br>
  <textarea name="message" style="width:55%; height:200px;">Your Message</textarea>
  <br><br>
  <input type="submit" >
</form> 
</div>
</center>
</div>

</div>
<div class='main'>
<div class='faq'>
<h2 style='margin-top: 10%;color: black;'><center>FAQ</h2> 
</div>

<button class="accordion">Can I start my course on dd.mm.yy?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>We have availability for all courses and you can starty your class any Monday</p> 

</div> 

 

<button class="accordion">Can I start my course on a day other than Monday</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>Yes, but wherever possible, you should try to start your English course on a Monday. However, it is possible to start in the middle of the week when you are not able to arrive on a Monday.</p> 

</div> 

 

<button class="accordion">How early do I have to book</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>For the biggest choice of accomadation options please book as early as possible but, in general, it is also possible to enrol on a coursse at short notice</p> 

</div> 

<button class="accordion">Where is the school located?</button> 

<div class="panel"> 

  <p style='margin-top:20px'>The school is on Oxford Streer near Tottenham Court Road Tube Station. Oxford Street is a mjor road in the City of Westminister in the West End of London. It is Europe's busiest shopping street.</p> 
  
</div> 

<button class="accordion">Is the school accredited?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>We are accredited by the British Council for the teaching of English</p> 
  
</div> 

<button class="accordion">What is British Council accreditatoin?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>The British Council is an official organisation that, in addition to other activities, offers a voluntary scheme for monitoring and assessing English language schools in the UK. ‘Accreditation’ by the British Council means that a school has passed the tests of quality set by the British Council’s English in Britain Accreditation Scheme.  This accreditation is an indication of the quality of the lessons offered by the school. See the British Council website for more information.</p> 
  
</div> 

<button class="accordion">What qualificatoins do the teachers have?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>All of the teachers have a degree or equivalent and a recognised certificate in teaching English to foreign students.</p> 
  
</div> 


<button class="accordion">What teaching methods does your school use?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>Our school uses a variety of teaching methods depending on the needs of the students. All teachers are selected for their teaching skills.</p> 
  
</div> 


<button class="accordion">Will I get a certificate at the end of my course?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>Every student receives a statement of attendance at the end of their course. It states the duration of the course as well as the student’s level of English.</p> 
  
</div> 


<button class="accordion">How close is the homestay accommodation to the school?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>Most of the homestay accommodation is not within walking distance from the school but is typically located in one of the lovely suburbs around London. You can choose to stay in zone 1, 2, 3 or 4; the price of accommodation depends on which zone you choose. We always try to arrange accommodation close to public transport and, on average, it might take 30 minutes to travel to the school depending on the zone you choose.</p> 
  
</div>

<button class="accordion">What happens if I don't like my accommodatoin?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>Should there be any problems with the host family, we will help you to solve them and if necessary, you can change
your accommodation.</p> 

</div>

<button class="accordion">How do I register for a course?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>Please complete the online registration form. You will normally receive a confirmation by email within a few hours.</p> 

</div>

<button class="accordion">How close are the host families to the school?</button> 

<div class="panel"> 

  <p style='margin-top: 20px;'>Most of our host families do not live within walking distance from the school but in one of the lovely suburbs in South London. You can choose if you want to stay with a family in zone 1, 2, or 3. All our host families are close to public transport. You will travel up to 60 minutes to school depending on the travel zone you choose.</p> 

</div>
</div>
</div>



<div class='map-responsive main' id='directions'>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4965.675456734045!2d-0.14093902816282533!3d51.516192997651466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b2d21c6e609%3A0x36798e762c2eb5da!2sSpeak+Up+London!5e0!3m2!1sen!2suk!4v1554126375927!5m2!1sen!2suk" frameborder="0" style="border:0" height="500" allowfullscreen></iframe></div>
</div>


<div class="footer">
  <div class='row'>
    <div class='col-sm'>
      <img src="{{ asset('logo.png')}}" class='img' style='width: 50%;height:180px;margin-left: 10px' align="left">
    </div>
    <div class='col-sm' style="margin-bottom: 10px">
      <p style="text-align: left;margin-top: 22px;">Registered Company address 45 Oxford Street - London W1D2DZ - United Kingdom. Company registration NO. 08177068 SPEAK UP LONDON LTD. Principal Farhan Quaraishi</p>
      <br>
        <div class='row'>
        <div class='col-sm'>
          <img src="{{ asset('fb.png')}}" width='60' align="left">
        </div>
        <div class='col-sm'>
          <img src="{{ asset('google.png')}}" width='60' align="left">
        </div>
        <div class='col-sm'>
          <img src="{{ asset('link.png')}}" width='60' align="left">
        </div>
        <div class='col-sm'>
          <img src="{{ asset('ig.png')}}" width='60' align="left">
        </div>
        <div class='col-sm'>
          <img src="{{ asset('twitter.png')}}" width='60' align="left">

        </div>
      </div>
    </div>

    <div class='col-sm'>
      <p style='margin-top: 22px;margin-left: 40%'>Speak Up London
        <br>
        139 Oxford Street
        <br>
        London W1D 2JA
        <br>
        +44 020-7734-0444
      </p>



    </div>
    <div class='col-sm'>
      <ul>
        <li style='text-align: left;margin-top: 22px'>Contact</li>
        <li style='text-align: left;'>Why Us</li>
        <li style='text-align: left;'>Free Trial</li>
        <li style='text-align: left;'>Blog</li>
        <li style='text-align: left;'>Privacy Policy</li>
        <li style='text-align: left;'>Cookies Policy</li>
    </div>
    <div class='col-sm'>
    <p style='text-align: center;margin-top: 22px'>POPULAR POSTS</p>
    <ul>
      <li style='text-align: left;'> Cambridge First and Advanced</li>
      <li style='text-align: left;'> Think Piece: Happy Holidays vs Merry Christmas</li>
      <li style='text-align: left;'> How to imrpove your pronounciatoin in 5 steps</li>
      <li style='text-align: left;'> Cultural Beliefs in Britain: Strange Superstitoins</li>
    </ul>
    </div>

</div>

</body>
</html>
<script> //JavaScript 
var acc = document.getElementsByClassName("accordion"); 

var i; 

 

for (i = 0; i < acc.length; i++) { 

  acc[i].addEventListener("click", function() { 

    this.classList.toggle("active"); 

    var panel = this.nextElementSibling; 

    if (panel.style.maxHeight){ 

      panel.style.maxHeight = null; 

    } else { 

      panel.style.maxHeight = panel.scrollHeight + "px"; 

    }  

  }); 

} 

</script> 




































