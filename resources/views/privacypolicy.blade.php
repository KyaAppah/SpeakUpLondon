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

.footer {
  background-color: white;
  left: 0;
  bottom: 0;
  width: 100%
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
    <h1 style='font-size:5vw;color:white;'> Privacy Policy </h1>
    <div class='txt'>
    <p class='ex4' style='font-size:15px;'> Home </p>
    <p class='ex4' style='font-size:15px;'><a href='students'> Students </p></a>
    <p class='ex4' style='font-size:15px;'> About </p>
    <p class='ex4' style='font-size:15px;'><a href='contact'> Contact</a> </p>
    <p class='ex4' style='font-size:15px;'> Accomadations </p>
  </div>

  </div>

<div class='main'>
  <h3 style='margin-top: 50px;'>OUR COMMITMENT</h3>
  <ul>
    <li>To comply with our obligations under the upcoming General Data Protection Regulation (GDPR), coming into effect on May 25th 2018 and any other relevant legislation;</li>
    <li>To keep your personal information and the business you do with us in strict confidence;</li>
    <li>To obtain your personal information lawfully, fairly, and without bias, in a secure fashion;</li>
    <li>To maintain our records to the best of our ability while adhering to standards of privacy;</li>
    <li>We pledge not to use your data for any other purpose than our core business practices. We also pledge not to sell your data to any outside agency without your written consent.</li>
    </ul>
    <br>
    <br>
    <h3>PRIVACY POLICY</h3>
    <ul>
      <p> This is the privacy policy (“Privacy Policy”) for Speak up London. This Privacy Policy describes how we treat personal data received about you when you visit the Speak Up London website or otherwise. Please read this Privacy Policy carefully, because by visiting or using this site or contracting with us, you agree to its terms.
        <br>
      This Privacy Policy applies only to this website and associated mobile applications. We may revise this Privacy Policy from time to time. We will notify you of any important changes by posting a notice on all Privacy Policy links. If you see a notice of change, please check the Privacy Policy, because your continued use of the site after we post the change means you have agreed to the new terms. </p>  
    </ul>
    <br>
    <br>
    <h3>COLLECTION OF YOUR DATA</h3>
    <br>
    <h2>ENQUIRIES</h2>
    <ul>
    <p>When you make enquiries about any of our services or programmes, Speak Up London may use the personal data you provide in order to fulfil your request or respond to your enquiry. It is in our legitimate interests to use your personal data in this way so that you, in order to enable you to receive the information you have requested.</p>
    </ul>
    <br>
    <h2>APPLICATIONS FOR COURSES AND ACCOMMODATION</h2>
    <ul>
      <p>If you make an application for a course and/or accommodation with us, we may collect the following personal data from you, in order to consider and process your application:</p>
      <li>Personal contact details (i.e. name, title, addresses, telephone numbers, and personal email addresses)</li>
      <li>Date of birth</li>
      <li>Nationality</li>
      <li>Gender</li>
      <li>Passport Numbwe</li>
      <li>Visa information</li>
    </ul>
    <ul>
      <p>In order to finalize your course and/or accommodation booking, we may collect additional personal data relating to you including:</p>
      <li>Bank account details</li>
      <li>Billing address</li>
      <li>Credit card or other payment</li>
    </ul>
    <ul>
      <p>This information will be used by us to perform the contract we have entered into with you.</p>
      <br>
      <p>During your studies we may collect information about your academic experience and progression. This is in order to fulfil our contract with you but it is also in our legitimate interests to use this personal data in order to monitor the provision of our service to you.</p>
      <br>
      <p>We may also collect personal data about your health in order to make appropriate arrangements and reasonable adjustments for you regarding your welfare, attendance or accommodation. We use this information in order to perform our contract with you but also in order to fulfil our legal obligations.</p>
      <br>
      <p>We may also collect personal data about you if you are named as an emergency contact for an individual. We use this information as it is in the vital interests of such individual.</p>
      <br>
      <p>If you use an agent to arrange your application and study with us, we may collect the categories of personal data described above from your agent.</p>
    </ul>
    <br><br>
    <h2> MARKETING </h2>
    <ul>
      <p>Where you have explicitly consented to do so, we may use your personal data to inform you of special offers and new or existing services that we believe may be of interest to you or to send surveys or questionnaires so that we can learn more about your needs and interests.
        <br>
        If you do not wish us to send you this additional information, you can let us know by following the opt-out instructions that we include in every email, or by sending us notice of your preferences to <u>info@speakuplondon.com</u></p>
    </ul>
    <br><br>
    <h2>AUTOMATED TECHNOLOGIES OR INTERACTONS</h2>
    <p>As you interact with our website, we may automatically collect technical data about your equipment, browsing actions and patterns. We collect this personal data by using cookies and other similar technologies. Please see our cookie policy on our website for further details.</p>
   <br><br>
    <h2>IF YOU FAIL TO PROVIDE PERSONAL DATA</h2>
    <ul> 
      Where we need to collect personal data by law, or under the terms of a contract we have with you and you fail to provide that data when requested, we may not be able to perform the contract we have or are trying to enter into with you (for example, to provide you with goods or services). In this case, we may have to cancel a product or service you have with us but we will notify you if this is the case at the time
    </ul><br><br>
  <h3>COLLECTION OF CHILDREN'S PERSONAL DATA</h3>
  <ul>
  <p>Speak Up London does not knowingly collect or solicit any information from anyone under the age of 16, unless this information comes from an adult who is responsible for the under 16.
    <br>
  In the event that we learn that we have collected Personal Information from a child under age 16 without verification of parental or legal representative consent, we will delete that information as quickly as possible.
  <br>
  If you believe that we might have any information from or about a child under 16, please contact us at info@speakuplondon.com</p>
</ul>
<br><br>
    <h3>PURPOSES FOR SHARING YOUR DATA</h3>
    <ul>
      <p>We may use and disclose Personal Information only for the following purposes:</p>
      <li>Promotional use of our Services: If you use any of our Services and we think you might benefit from using another (new) Service we offer, we may send you an email about that. You can stop receiving our promotional emails by following the unsubscribe instructions included in every email we send.</li>
      <li>Billing purposes and collection of money for Services provided by us: This includes payment details, sending you emails, invoices, notices, payment reminders, receipts and credit card information. In case of services requiring payment, we request credit card or other payment account information, which will be used solely for processing payments. We will not store your financial information.</li>
      <p>Subject to your prior consent and where necessary for processing future payments, your financial information will be stored in encrypted form on secure servers of PayPal or Stripe, who are beholden to treating your Personal Information in accordance with this Privacy Policy.</p>
      <p><strong>Newsletters:</strong> We may send you newsletters to inform you about temporary or permanent changes to our system and/or Services such as version updates, releases, new features, promotions, campaign notifications and changes to our Terms. You can unsubscribe at anytime by following the instructions present in every email.
        <br>
      To enforce compliance with our Terms and applicable law: We may disclose Personal Information where we, in good faith, deem it appropriate or necessary to prevent violation of our Terms, or our other agreements; take precautions against liability; protect our rights, property, or safety, or those of a partner, any individual or the general public; maintain and protect the security and integrity of our Website and/or Services or infrastructure; protect ourselves and our Website and/or Services from fraudulent, abusive, or unlawful uses; investigate and defend ourselves against third party claims or allegations; or assist government regulatory agencies.
      <br>
      This may include developing tools and algorithms that help us prevent violations. To protect the rights and safety of our Users and third parties, as well as our own. To meet legal and regulatory requirements: We may disclose Personal Information if we have a good-faith belief that doing so is required by a subpoena, warrant, or other judicial or administrative order or otherwise required by law. Including responding to lawful requests by public authorities, such as national security or law enforcement requirements.
      <br>
      To prosecute and defend a court, arbitration, or similar legal proceeding. We may exchange your Personal Information with our representatives and with our service providers that assist us with archival, auditing, accounting, User contact, legal, business consulting, banking, payment, delivery, data processing, data analysis, information broking, research, investigation, website or technology services to help us comply with legal, accounting, or security requirements.
      <br>
      Combined Information: We may combine Personal Information with other information we collect or obtain about you (such as information we source from our third party partners), to serve you specifically, such as to deliver a product or service according to your preferences or restrictions, or for advertising or targeting purposes in accordance with this Privacy Policy.
      <br>
      When we combine Personal Information with other information in this way, we treat it as, and apply all of the precautions in this Privacy Policy applicable to, Personal Information</p></ul>
      <br><br>
      <h2>WAYS OF SHARING YOUR DATA</h2>
      <h4>Promotional Bundles</h4>
      <p>We may, from time to time, offer bundles or other promotions on our Websites or through social media. Participation in Our Promotions is completely voluntary. Information requested for entry may include personal contact information such as your name, address, date of birth, phone number, email address, username, and similar details.
      <br>
      We use the information you provide to administer Our Promotions. We may also, unless prohibited by the Promotion’s rules or law, use the information provided to communicate with you, or other people you select, about our Services.
      <br>
      We may share this information with our Service Providers in line with this Privacy Policy and the terms posted for the promotion.</p>
      <h4>Newsletter</h4>
      <p>If you wish to subscribe to our newsletter, we ask for contact information such as name and email address. You will occasionally receive information about the Services, promotions and updates. We provide a way to opt-out of these communications via the unsubscribe mechanism at the bottom of each email.
      <br>
      From time to time we may make material changes to our Terms and we notify our Users about these changes by email. Users may not opt-out of these communications, though they can unsubscribe at any time. However, these communications are not promotional in any nature.
      </p>
      <h4>User Support</h4>
      <p>We communicate with Users on a regular basis to provide requested Services. We reply via email or social media, in accordance with the User’s wishes.</p>
      <br>
      <br>
      <h4> SHARING YOUR DATA WITH THIRD PARTIES</h4>
      <p> Speak Up London may share your data with:</p>
      <ul>
        <li><strong>Our service providers: </strong>We may share your personal data with other companies that perform certain services on our behalf. These services may include processing payments, accommodation and transfer bookings, providing customer service and marketing assistance, performing business and sales analysis and supporting our website and IT functionality. These service providers may be supplied with or have access to your personal data solely for the purpose of providing these services to us or on our behalf. Speak Up London is the data controller and will remain accountable for your personal data.</li>
        <li><strong>Agents: </strong>If you use an agent to arrange your application or study with us, we may share your personal data with them.</li>
        <li><strong>Parents and guardians: </strong> If you are under 18, we may share your personal data with your parents or guardians in order to perform our contract, comply with our legal obligations and if it is in your vital interests.</li>
        <li><strong>Regulations</strong>We may need to share your personal data if required by a regulator or to otherwise comply with law.</li>
        <li><strong>Others</strong>We may share your personal information with other third parties such as in the context of the possible sale of our business. We may also need to share your personal data in order to permit us to pursue available remedies or limit damages we may sustain.</li>
        <br>
        <br>
        <h2> SECURITY</h2>
        <br>
        <h4> Maintaining Security</h4>
        <p><ul>Speak Up London takes reasonable and appropriate efforts to protect Personal Information from loss, misuse and unauthorized access, disclosure, alteration and destruction, taking into account the risks involved in the processing and the nature of the Personal Information.</ul></p>
        <br>
        <h4> Accuracy and Retention of Data</h4>
        <p><ul>We do our best to keep your data accurate and up to date, to the extent that you provide us with the information we need to do so. If your data changes (for example, if you have a new email address), then you are responsible for notifying us of those changes. Upon request, we will provide you with information about whether we hold, or process on behalf of a third party, any of your Personal Information. We will retain your information for as long as needed to provide you with our Services. We may also retain and use your information in order to comply with our legal obligations, resolve disputes, prevent abuse, and enforce our Terms.</ul></p>
        <br>
        <h4>Review and Retention of Data</h4>
        <p><ul>You may review and update the personal data you have provided to us by emailing us at <u>info@speakuplondon.com</u>, or sending your request by post to:</ul></p>

        <br><br>
        <p>Attention: Privacu Inquiry</p>
        <p>Speak Up London LTD</p>
        <p>139 Oxford Street</p>
        <p>London, W1D 2JA</p>

  </div></ul></div></p></div></div>

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