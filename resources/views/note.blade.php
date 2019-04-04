<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>

body {
  background-color: grey;
}

.footer {
  background-color: white;
}

.footer1{
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: blue;
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


 
<div class="footer">
  <div class='row'>
    <div class='col-sm'>
      <img src="{{ asset('logo.png')}}" class='img' width='250' align="left">
    </div>
    <div class='col-sm'>
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
      <p style='margin-top: 22px'>Speak Up London
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
        <li style='text-align: left;'>Contact</li>
        <li style='text-align: left;'>Why Us</li>
        <li style='text-align: left;'>Free Trial</li>
        <li style='text-align: left;'>Blog</li>
        <li style='text-align: left;'>Privacy Policy</li>
        <li style='text-align: left;'>Cookies Policy</li>
    </div>
    <div class='col-sm'>
    <p style='text-align: center;'>POPULAR POSTS</p>
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