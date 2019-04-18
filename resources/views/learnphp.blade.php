<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale =1.0">
        <meta http-equiv = "X-UA-Compatible" content = "ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
<!--         <link rel="stylesheet" href="{{ asset('css/template.css') }}" > --> <!-- link to css stylesheet -->
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

        <title>Natours | Exciting Tours for Adventorous People </title>


    </head>
    <body>
            <header class="header">
                <div class='header__logobox'>
                    <img src ="/images/logo-white.png" alt='logo' class='header__logo'>
                </div>

                <div class='header__textbox'>
                     <h1 class='heading-primary'>
                        <span class='heading-primary--main'>Outdoors</span>
                        <span class='heading-primary--sub'>is where life happens</span>
                    </h1>
                    <a href='#' class='btn btn--white btn--animated'>Discover our Tours</a>
                </div>

            </header>

            <main>
                <section class="section-about">
                    <div class="u-center-text u-margin-bottom-big">
                        <h2 class="heading-secondary">
                            Exciting tours for adventorous people
                        </h2>
                    </div>
                    <div class='row'>
                        <div class='col-1-of-2'>
                            <h3 class="heading-tertiary u-margin-bottom-small">
                                You're going to fall in love with nature
                            </h3>
                            <p class='paragraph'>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, iure fugit autem a fuga laboriosam soluta saepe consectetur dolores minus quos commodi ducimus, corrupti sunt, laborum repellendus reprehenderit voluptatum exercitationem.
                            </p>
                            <h3 class="heading-tertiary u-margin-bottom-small">
                                Live adventures like you never have before
                            </h3>
                            <p class='paragraph'>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, iure fugit autem a fuga laboriosam soluta saepe consectetur dolores minus quos commodi ducimus, corrupti sunt, laborum repellendus reprehenderit voluptatum exercitationem.
                            </p>
                            <a href="#" class="btn-text">
                                Learn more &rarr;
                            </a>
                        </div>
                        
                        <div class="col-1-of-1">
                        <div class="composition">
                            <img src="/images/nat-1.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                            <img src="/images/nat-2.jpg" alt="Photo 2" class="composition__photo composition__photo--p2">
                            <img src="/images/nat-3.jpg" alt="Photo 3" class="composition__photo composition__photo--p3">
                        </div> 
                        </div>
                    </div>

                </section>
            </main>
        
    </body>
</html>
