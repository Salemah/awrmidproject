<html>
    <head>

        <title>Doctor page (View from patient) </title>
   <!--

   Template 2098 Health

   http://www.tooplate.com/view/2098-health

   -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Tooplate">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="css/tooplate-style.css">

   </head>
   <body>
<header>
    <div class="container">
         <div class="row">

              <div class="col-md-4 col-sm-5">
                   <p>Patient Page</p>
              </div>

              <div class="col-md-8 col-sm-7 text-align-right">
                   <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                   <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                   <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
              </div>

         </div>
    </div>
</header>


<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>

              <!-- lOGO TEXT HERE -->
              <a class="navbar-brand">E-Healthcare System</a>
         </div>

         <!-- MENU LINKS -->
         <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                   <li class="DoctorInfo-btn"><a href="/PatientDoctorInfo"> See doctor Info</a></li>
                   <li class="DoctorSchedule-btn"><a href=" "> See Doctor Schedule</a></li>
                   <li class="DoctorReview-btn"><a href="/PatientDoctorReview"> Review Doctor</a></li>
                   <li class="DoctorContact-btn"><a href="/PatientDoctorContact "> Contact Doctor</a></li>
              </ul>
         </div>

    </div>
</section>
@yield('content')
@yield('demo2')
</body>
</html>
