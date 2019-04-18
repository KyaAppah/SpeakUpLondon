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

p.ex4 {display: inline-block; color: white; margin-left: 4%}

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

#example2 {
  min-height: 35%;  
  background-attachment: fixed;
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
  position: relative;
  background: url({{ asset('students.png')}});
}

.centered { 

  position: absolute; 
  top: 17.5%; 
  left: 50%; 
  transform: translate(-50%, -50%); 
  text-align: center;
  font-family: helvetica;

}

.container1 {
  position: relative;
  text-align: center;
  color: white;
}

.centered1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
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


.main {
 margin-left: 30%;
 margin-right: 30%; 
}


figure {
  width: 100%;
  text-align: center;
  font-style: italic;
  font-size: smaller;
  text-indent: 0;
  margin: 0.5em;
  padding: 0.5em;
  margin-top: 30px;
}

.img {
  width: 100%;
  height: 30%;
  display: inline-block;
}

.container {
  text-align: center;
}

.text {
  text-align: left;
}

.button1 {
  border-radius: 4px;
  background-color: #FFFFFF;
  border: none;
  color: white
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


#hero-image {
  height: 50%;
  width: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('students.png')}});
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

@media only screen and (max-width: 1800px) {
  .main {
  margin-left: 5%;
  margin-right:5%;
}
}

.footer {
  background-color: white;
}
</style> 

</head>

<body>
  <div id='example1'>
  </div>

  <div class='centered'>
    <h1 style='font-size:5vw;color:white;'> Students </h1>
    <div class='txt'>
    <p class='ex4' style='font-size:15px;'> Home </p>
    <p class='ex4' style='font-size:15px;'><a href='students'> Students </p></a>
    <p class='ex4' style='font-size:15px;'> About </p>
    <p class='ex4' style='font-size:15px;'><a href='contactus'> Contact</a> </p>
    <p class='ex4' style='font-size:15px;'> Accomadations </p>
  </div>

  </div>

<!-- Downloads -->
  <div class='main'>
  <div class='row'>
      <div class='col-xl'>
     <figure>
      <p><img src="{{ asset('table.jpg')}}" class='img' align="left">
      <figcaption style='margin-top: 20px;font-size:15px;' class='ex2'><a target="_blank" href="https://www.speakuplondon.com/wp-content/uploads/2019/03/2019-timetable-27-03-19.pdf" download>Download Timetable</a></figcaption>
    </figure>
  </p></div>
      <div class='col-xl'>
     <figure>
      <p><img align="left" src="{{ asset('induct.jpg')}}" class='img'>
      <figcaption style='color:black; font-size:15px;'><a target="_blank" href="https://www.speakuplondon.com/wp-content/uploads/2018/11/student-induction-sheet-30-10-18.pdf" download>Download Student Induction</a></figcaption></p>
    </figure>
  </div>
  </div>

<!-- Visa Information -->
<div class='container'>
  <h5 style='font-size: 60px; margin-top: 70px'><a href='test'> View our Announcement Board</h5></a>
  <h3 style='font-size: 60px;'>Visas</h3>
  <h4 style='margin-top: 45px; font-size: 30px;'>Student Visas for the UK</h4>
  <p style='margin-top: 20px; font-size: 18px'><font color='white'> Many students from outside Europe will need a </font><strong>student visa for UK</strong>.<font color='white'> Speak Up London does its best to make this process easy for our students although we can only give you general guidance. The first step is to find out if you need a visa – this depends on your nationality.
    <br>
    The way you are categorized is based on your nationality. However,</font><strong>all visa nationals must apply for a student visa for UK before they arrive</strong>,<font color='white'> regardless of the length of their course.</p></font>

    <div class='text'>
      <p style='margin-top: 20px; font-size: 18px'><font color='white'> Please note that some countries have different procedures for visa applications. 
      <br><br>
      The Home Office classes non-EEA or non-Swiss students as either:
      <br><br>
      <ul>
        <li> Visa nationals </li>
        <br>
        <li> Non-Visa nationals</li>
      </ul>
      <br><br>
      If you are classed as a </font><strong>non-visa national</strong><font color='white'>, and are coming for a course of six months or less, you can apply for permission to enter and stay in the UK when you arrive - however we <em>strongly</em> recommend that you applt for entrt clearance before leaving your home country.
      <br><br>
      If you are studying for more than six months, you must apply for a </font><strong>student visa for the UK</strong><font color='white'> before leaving your home country.
      <br>
      Some of the thins you will need when applying:
      <br>
      <br>
      <ul>
        <li> An enrolment letter.</li>
        <br>
        <li> Proof of qualifications - the visa office will want to see original certificares to prove you have the necessary qualifications.</li>
        <br>
        <li> Proof that you have the funds available in your personal account to pay for the course fees and living expenses while in the UK.</li>
        <br><br>
      </ul>
    </font></p>
    </div>


    <div class='text'>
      <div class='row'>
        <div class='col-sm'>
          <h5 style='margin-top: 20px; font-size: 15px;color:white;'>Child Visitor Visa</h5>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>You can apply if you:</h4>
          <ul>
            <li style='margin-top: 20px; font-size: 15px;color:white;'>are 17 years old or under</li>
            <li style='margin-top: 20px; font-size: 15px;color:white;'>want to study in the UK for a maximum of 6 months </li>
          </ul>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>If you are accompanied by an academic visitor, you can extend your stay to 12 months</h4>
        </div>
        <div class='col-sm'>
          <h5 style='margin-top: 20px; font-size: 15px;color:white;'>Student Visitor Visa</h5>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>You can apply if you:</h4>
          <ul>
            <li style='margin-top: 20px; font-size: 15px;color:white;'>are 18 years old or under</li>
            <li style='margin-top: 20px; font-size: 15px;color:white;'>want to study in the UK for a maximum of 6 months </li>
          </ul>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>If you only want to study English langauge courses, you can apply for an Extended Student Visa for a maximum of 11 months</h4>
        </div>
        <div class='col-sm'>
          <h5 style='margin-top: 20px; font-size: 15px;color:white;'>Tier 4 (Child) Student Visa</h5>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>You can apply if you:</h4>
          <ul>
            <li style='margin-top: 20px; font-size: 15px;color:white;'>are between 4 and 17 years old</li> 
          </ul>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>If you are between 4 and 15 years old, you must be coming to the UK to be educated at an independent, fee-paying school.</h4>
        </div>
        <div class='col-sm'>
          <h5 style='margin-top: 20px; font-size: 15px;color:white;'>Tier 4 (General) Student Visa</h5>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>You can apply if you:</h4>
          <ul>
            <li style='margin-top: 20px; font-size: 15px;color:white;'>want to study in the UK after the age of 16</li>
          </ul>
          <h4 style='margin-top: 20px; font-size: 18px;color:white;'>You need to meet certain eligibilty requirements - click here for details</h4>
        </div>
      </div>
      <div class='row'>
        <div class='col-sm'>
          <a target="_blank" href='https://www.gov.uk/browse/visas-immigration'><button class="button1"><span>More Information about Visas</span></button></a>
        </div>
        <div class='col-sm'>
          <a target="_blank" href='https://www.gov.uk/check-uk-visa'><button class="button1"><span>Find Out if You Need a Visa</span></button></a>
        </div>
    </div>
</div></div></div></div></div>

    
      <div style='margin-top:100px' class='container1'>
          <div id='parallax'>
            <h1 style='font-size:5vw;color:transparent;margin-top: 70px; text-align: center;'><font style='margin-top: 20px;'>Young Leaners<br><br><br></font></h1>
          </div>
          <div class='centered1'>
            <h1 style='font-size:3vw;color:white;'>Young Learners</h1>
          </div>
        </div>

        <div class='main' style="margin-top: 2.5%;">
          <div class='row'>
            <div class='col-sm'>
              <h3 style="font-size: 30px; color:white;">Speak Up London Safeguarding and Welfare Police</h3>
            </div>
            <div class='col-sm'>
              <p style='font-size: 18px; color:white;'>In the interests of best practice, Speak Up London has a clear policy regarding the safety and welfare of under-18s who attend our school. We believe that young people have rights as individuals, and should be treated with dignity and respect. We endeavour to provide a safe environment for any young people (16/17 years old) in our care while they are studying at our school. All young people and vulnerable adults, whatever their age, culture, disability, gender, language, racial origin, socio-economic status, religious belief and/or sexual identity have the right to safeguarding from abuse.
                <br>
              It is everyone's responsibility to report any concerns about abuse to the Designated Safeguarding Officer, and the responsibilty of the Social Services Department and the Police to conduct, where appropiate, a joint investigation. All incidents of alleged poor practice, misconduct and abuse will be taken seriously and responded to swiftly and appropiately.</p>
            </div>
            <div class='col-sm'>
              <p style='font-size: 18px; color:white;'>All personal data will be processed in accordance with the requirements of the Data Protection Act 1998.
              <br>
            Group leaders are required to provide supervision at all times for students who are under 18 in closed groups.</p>
            <ul>
              <li style='font-size: 18px; color:white;'>Maximum enrolment age for juniors in closed groups is 17</li>
            </ul>
            <p style='font-size: 25px; color: black;'>Under -18s must:</p>
            <ul>
              <li style='font-size: 18px; color: white;'> wear their lanyard at at all times in the school</li>
              <li style='font-size: 18px; color: white;'> sign in when arriving and sign out when leaving the school</li>
              <li style='font-size: 18px; color: white;'> <font color="black"><strong>not</strong></font> smoke, drink, or attend events for over-18s</li>
            </ul>
            <p style='font-size: 25px; color: black;'>Under -18s will:</p>
            <ul>
              <li style='font-size: 18px; color: white;'> have the opportunity to give feedback to the DSO about classes, teachers and feelings about school</li>
              <li style='font-size: 18px; color: white;'> Under-18s may discuss any problem with the DSO at any time</li>
            </ul>
            <br>
              <h3 style="font-size: 25px; color:black;">All staff hold a valid <font color='white'>'Enhanced DBS'</font> certificate, or will have signed a delcaration form while they are in the process of obtaining a certificate</h3>
            </div>
            <br>
          </div>
          <div class='row'>
            <div class='col-sm'>
              <h3 style='font-size: 25px; color: white; margin-top: 12%'>KEEPING CHILDREN SAFE IS A TEAM EFFORT</h3>
            </div>
            <div class='col-sm'>
             <a target="_blank" href='https://www.speakuplondon.com/wp-content/uploads/2017/02/sul-welfare-policy1.pdf'><button class="    button1"><span>Safeguarding Young Adults Policy</span></button></a>
            </div>
           </div>

           <div class='row' style="margin-top: 5%">
            <div class='col-sm'>
              <img align='center' height="95" style='margin-left:auto;margin-right:auto;display: block;'src="{{ asset('sgofficer.png')}}">
              <br>
              <h4 style='font-size: 18px; color: white;'>DESIGNATED SAFEGUARDING OFFICER</h4>
              <p style='font-size: 15px; color:white;'>Varinder Unlu - varinder@speakuplondon.com
              <br>
            Emergency contact number +44 (0) 7517 477601</p>
            </div>
            <div class='col-sm'>
              <img align='center' height="90" style='margin-left:auto;margin-right:auto;display: block;'src="{{ asset('dbs.png')}}">
              <br>
              <h4 style='font-size: 18px; color: white;text-align: center'>ENHANCED DBS</h4>
              <p style='font-size: 15px; color:white;'>All staff hold a valid <strong>'Enhanced DBS'</strong> certificate, or will have signed a declaration form while they are in the process of obtaining a certificate</p>
            </div>
            <div class='col-sm'>
              <img align='center' height="90" style='margin-left:auto;margin-right:auto;display: block;'src="{{ asset('cprotect.png')}}">
              <br>
              <h4 style='font-size: 18px; color: white;text-align: center;'>INTRODUCTOIN TO CHILD PROTECTION</h4>
              <p style='font-size: 15px; color:white;'>All staff have completed an 'introduction to to child protection' training course as a minimum.</p>
            </div>
</div></div></p></div></figure></div></div></div></p></div></div>

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



