<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Architects+Daughter|Cormorant+Garamond|Poiret+One|Josefin+Slab|Quicksand|Tangerine');
    </style>

<script   src="http://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

<script   src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"   integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="   crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="lightbox2-master/src/css/lightbox.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="theCSS.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        $('.discoveryOne').click(function() {
            $(".lb-image").removeAttr("style");
            // $('.lb-number').text(" ");
        });

    $(function(){
    $('[rel="popover"]').popover({
        container: '.projectsDiv',
        html: true,
        content: function () {
            var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
            return clone;
        }
    }).click(function(e) {
        e.preventDefault();
    });
});

$(".projImages").hover(function(){
    $(this).css({position : 'relative'});
    $(this).height('300px');
   	$(this).width('470px');
},
    function() {
        $(this).css({position : 'static'});
        $(this).height('300px');
       	$(this).width('450px');
});

// initialize carousel in the first input / popover
$('.foodClass, .opened').on('shown.bs.popover', function() {
  $('.carousel-inner').carousel({
    interval: 3000
  });
});
//discoveryOne
// $('.discoveryOne').lightBox({
//       'maxWidth': 700,
//       'maxHeight': 700
//   });
// $(".lb-image").removeAttr("style");
// $(".lb-image").attr("width","700");
// $(".lb-image").attr("height","700");

$('#abtMe').click( function(){
    $(this).find('span').toggleClass('glyphicon-ice-lolly').toggleClass('glyphicon-ice-lolly-tasted');
});
$('#skillGlyph').click( function(){
    $(this).find('span').toggleClass('glyphicon-ice-lolly').toggleClass('glyphicon-ice-lolly-tasted');
});
$('#projGlyph').click( function(){
    $(this).find('span').toggleClass('glyphicon-ice-lolly').toggleClass('glyphicon-ice-lolly-tasted');
});
$('#conGlyph').click( function(){
    $(this).find('span').toggleClass('glyphicon-ice-lolly').toggleClass('glyphicon-ice-lolly-tasted');
});

$('.testA').tooltip({trigger: 'manual'}).tooltip('show');

});
</script>

</head>
<body ng-app="">

<div class="bgimg-1">
  <div class="caption" id="nameDev">
      <!-- <table>
          <tr><td>Rashmee Prakash</td></tr>
          <tr><td>Web Developer</td></tr>
      </table> -->
    <!-- <span class="border">Rashmee Prakash <br /> Web Developer</span> -->
  </div>
</div>
<div class="divMenu">
    <ul class="theMenu">
        <li><h3><font color="white">Menu</font></h3></li>
        <li>
            <a class="testA" id="abtMe" href="#nameDev" data-toggle="tooltip" data-placement="right" title="About Me">
                <span class="glyphicon glyphicon-ice-lolly"></span>
            </a>
        </li>
        <li>&nbsp;</li>
        <li>
            <a class="testA" id="skillGlyph" href="#skills" data-toggle="tooltip" data-placement="right" title="Skills">
                <span class="glyphicon glyphicon-ice-lolly"></span>
            </a>
        </li>
        <li>&nbsp;</li>
        <li>
            <a class="testA" id="projGlyph" href="#projects" data-toggle="tooltip" data-placement="right" title="Projects">
                <span class="glyphicon glyphicon-ice-lolly"></span>
            </a>
        </li>
        <li>&nbsp;</li>
        <li>
            <a class="testA" href="Resume-RashmeePrakash.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="R&eacute;sum&eacute;">
                <span class="glyphicon glyphicon-ice-lolly"></span>
            </a>
        </li>
        <li>&nbsp;</li>
        <li>
            <a class="testA" id="conGlyph" href="#contact" data-toggle="tooltip" data-placement="right" title="Contact Me">
                <span class="glyphicon glyphicon-ice-lolly"></span>
            </a>
        </li>
    </ul>
</div>

<div style="text-align:center;padding:50px 80px;text-align: center;" class="aboutMeDiv">
  <h1 id="aboutMe" class="aboutMe" style="text-align:center;">About Me</h1>
  <p>
      I am a graduate of <a href="https://www2.gmu.edu/" target="_blank">George Mason University</a>. I am currently working at <a href="http://www.hurdit.com/" target="_blank">Hurd IT Communications</a> as a Web Developer. I develop web apps from both back end (Coldfusion and Microsoft SQL Server) to front end (HTML, CSS, jQuery/Javascript), user experience and visual design for clients such as <a href="http://www.ctia.org/" target="_blank">CTIA - Everything Wireless</a>.
  </p>
  <p>
       I&#39;m extremely passionate about web development and design and am constantly looking to learn new and exciting programming languages. Aside from web development, I love reading and reviewing books. I enjoy traveling to many different countries and experience their culture.
   </p>
  <p>
      This is my portfolio where I showcase my projects.
  </p>
</div>

<div class="bgimg-2" id="skills">
  <div class="skillsCap">
        <div class="form-group">
            <input type="text" ng-model="searchSkill" class="form-control" placeholder="Enter Skill">
            <br />
        </div>
        <div class="skillList">
        <div ng-init = "skills = [{theSkill: 'HTML', skillImg: 'skills/html.png'},
                                            {theSkill: 'CSS', skillImg: 'skills/css.png'},
                                            {theSkill: 'JavaScript', skillImg: 'skills/js.png'},
                                            {theSkill: 'jQuery', skillImg: 'skills/jquery.png'},
                                            {theSkill: 'jQuery UI', skillImg: 'skills/jqueryui.png'},
                                            {theSkill: 'AJAX', skillImg: 'skills/ajax.png'},
                                            {theSkill: 'Bootstrap', skillImg: 'skills/bootstrap.png'},
                                            {theSkill: 'Angular JS', skillImg: 'skills/angular.png'},
                                            {theSkill: 'Microsoft SQL Server 2012', skillImg: 'skills/sql2012.png'},
                                            {theSkill: 'Microsoft SQL Server 2014', skillImg: 'skills/sql2014.png'},
                                            {theSkill: 'Microsoft SQL Server 2016', skillImg: 'skills/sql2016.png'},
                                            {theSkill: 'Oracle Database Express Edition 11g', skillImg: 'skills/11g.png'},
                                            {theSkill: 'Tableau Software', skillImg: 'skills/tableau.png'},
                                            {theSkill: 'PL/SQL', skillImg: 'skills/PLSQL.png'},
                                            {theSkill: 'ColdFusion', skillImg: 'skills/cf.png'},
                                            {theSkill: 'ASP.Net', skillImg: 'skills/asp.png'},
                                            {theSkill: 'PHP', skillImg: 'skills/php.png'},
                                            {theSkill: 'Visual Basic', skillImg: 'skills/vb.png'},
                                            {theSkill: 'Adobe Photoshop', skillImg: 'skills/photoshop.png'},
                                            {theSkill: 'Adobe InDesign', skillImg: 'skills/inDesign.png'},
                                            {theSkill: 'Adobe Illustrator', skillImg: 'skills/illustrator.png'},
                                            {theSkill: 'Microsoft Office', skillImg: 'skills/office.png'}]">
                                        </div>
        <ul class="list-group">
            <li class="list-group-item"  ng-repeat="skill in skills | filter:searchSkill"><img ng-src="{{skill.skillImg}}" class="img-rounded" /> &nbsp;&nbsp;&nbsp; {{skill.theSkill}}</li>
        </ul>
    </div>
    <!-- <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">LESS HEIGHT</span> -->
  </div>
</div>

<div class="bgimg-3" id="projects">
    <div class="projectsCap">
          <div class="form-group">
              <input type="text" ng-model="searchProject"  class="form-control" placeholder="Enter Project">
              <br />
          </div>
          <div class="projectsDiv">
              <div class="thePopovers">
                    <div id="litPopover" class="hide myPopovers">
	                       <h3><u>Create Your Own Literary ID</u></h3>
                           <br />
                           <p>
                               This website is for all the fans of great literary works of fiction. It allows the user to create an ID card  for themselves to be a part of the fictional world of their choice. The choice varies from the world of Jane Austen to the magical world of Harry Potter to brave world of the Hunger Games.
                            </p>
                            <br />
                            The website can be viewed <a href="projects/literary/parallax.html" target="_blank">here</a>.
                    </div>
                    <div id="dhcPopover" class="hide myPopovers">

                      <h3 align="center"><u>Capstone Senior Project</u></h3>

                      <p class="pAbtMe" align="center">Our Capstone project wanted us to fine a technical solution for a business problem. My group and I worked with <a href="http://distinctivehomecare.com/home.php" target="_blank">Distinctive Home Care</a> on how we can help bettter their business process.</p>
                      <p align="center">I served as the technical lead while working with Distinctive Home Care (DHC). This project was divided between two semesters. I created Gantt Charts for the <a href="projects/DHC/slides/Gantt Chart- 492.pdf" target="_blank">first semester</a> and the <a href="projects/DHC/slides/Gantt Chart- IT493.pdf" target="_blank">second semester</a> to properly illustrate the work breakdown schedule. During the first semster we were asked to meet with DHC and analyze their business process and develop a complelling business case for change that could be solved using technology.</p>
                      <p align="center">While analyzing DHC's busniess process, we found that while scheduling appointments for current or potential clients, they had to look through files of paper based records to find a caregiver that matches the requirements of the client. Due the delay in finding the right caregiver, DHC sometimes lost clients and wanted a solution where filtering and scheduling a caregiver is no more such a laborious process.</p>
                      <p align="center">After carefully analyzing DHC's requirements, we found that it would be best if DHC would purchase <a href="http://wheniwork.com/?utm_expid=82000332-9.au63AZf0Qqy1gDY9-0DuRQ.0" target="_blank">When I Work</a>, a very simple and efficient <a href="projects/DHC/slides/Screen Shot 2014-10-28 at 6.27.38 PM.png" target="_blank">scheduling software</a> that would help simply their daily business process. With the help of this software, DHC would now be able to combine the duties of a receptionist and scheduler and in turn hire someone to help with marketing, which was one of their requirements. Another issue with an easy fix that DHC had was the need of a <a href="projects/DHC/slides/Screen Shot 2014-12-08 at 3.43.13 PM.png" target="_blank">contact form</a> on their website for clients who wanted some basic information via the internet. I suggested an simple <a href="http://distinctivehomecare.com/contact_us.php" target="_blank">PHP contact form</a> would not go amiss and would greatly benefit DHC and their clients. </p>
                      <p align="center">I helped train the super user at DHC on how to import and export contacts, create a schedule and also troubleshoot problems when working with When I Work. I also created a simple <a href="projects/DHC/slides/userManual.pdf" target="_blank">User manual</a> for their ease along with a short <a href="https://www.youtube.com/watch?v=6hinvlJ6ZYI" target="_blank">video</a> that would give them an idea on how the software would help make things easier and more efficient for them.</p>
                      <br />
                      <br />
                      <figure>
                      <img class="projImages" src="projects/DHC/slides/asis2.png" alt="asis" id="asis" height="300" width="450">
                      <figcaption>The As Is Process</figcaption>
                      </figure>
                      <br /><br />
                       <figure>
                      <img class="projImages" src="projects/DHC/slides/tobe2.png" alt="tobe" id="tobe" height="300" width="450">
                      <figcaption>The To Be Process</figcaption>
                      </figure>
                      <br /><br />
                      <figure>
                      <img class="projImages" src="projects/DHC/slides/Screen Shot 2014-10-28 at 6.27.38 PM.png" alt="scheduler"  height="300" width="450" id="theScheduler" name="theScheduler">
                      <figcaption>The Scheduler</figcaption>
                      </figure>
                      <br /><br />
                      <figure>
                      <img class="projImages" src="projects/DHC/slides/Screen Shot 2014-12-08 at 3.43.13 PM.png" alt="form"  height="300" width="450" id="theContactForm" name="theContactForm">
                      <figcaption>The PHP contact form</figcaption>
                      </figure>
                    </div>
                    <div id="foodPopover" class="hide myPopovers">
                        <h3 align="center"><u>Foodograph</u></h3>

                        <p align="center">Foodograph (combination of ‘food’ + ‘photograph’) is a native iOS application coded in Objective-C and built on Xcode. This iOS app is based on the ever-growing popularity of food photography.</p>
                       <p align="center">This app allows the user to create an account for new users and automatically login for returning users. The user then has the option to either upload their own picture of food from their device camera or from their device photo gallery. The user is also able to view and rate photos that have been submitted to the application and also see their stats. When viewing the images, the user has the option to either ‘like’ or ‘pass’ the photograph, and move on to the next image. The number of ‘likes’ a picture receives are displayed on the user's stats page. Users also allowed to save images to their image gallery and also mail and/or share the images along with a comment on social networking sites like Facebook, Twitter, Instagram.</p>
                       <p>A <a href="projects/foodograph/foodograph.pdf" target="_blank">user manual</a> describing the app along with future plan was also created when my team and I created this app.</p>

                        <br />
                        <br />

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <!-- <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                <li data-target="#myCarousel" data-slide-to="7"></li>
                            </ol> -->

                            <!-- Wrapper for slides -->
                            <div id="theCarousel" class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="projects/foodograph/appicon.png" alt="appIcon" width="375" height="250">
                                    <!-- <div class="carousel-caption">
                                        <h3>App Icon</h3>
                                    </div> -->
                                </div>

                                <div class="item">
                                  <img src="projects/foodograph/launchscreen.png" alt="appIcon" width="375" height="250">
                                  <!-- <div class="carousel-caption">
                                    <h3>Launch Screen</h3>
                                  </div> -->
                                </div>

                                <div class="item">
                                  <img src="projects/foodograph/register.png" alt="appIcon" width="375" height="250">
                                  <!-- <div class="carousel-caption">
                                    <h3>Register</h3>
                                  </div> -->
                                </div>

                                <div class="item">
                                  <img src="projects/foodograph/home.png" alt="appIcon" width="375" height="250">
                                  <!-- <div class="carousel-caption">
                                    <h3>Home Page</h3>
                                  </div> -->
                                </div>

                                <div class="item">
                                  <img src="projects/foodograph/loadpic.png" alt="appIcon" width="375" height="250">
                                  <!-- <div class="carousel-caption">
                                    <h3>Upload Image</h3>
                                  </div> -->
                                </div>

                                <div class="item">
                                  <img src="projects/foodograph/ratepic.png" alt="appIcon" width="375" height="250">
                                  <!-- <div class="carousel-caption">
                                    <h3>Like or Pass</h3>
                                  </div> -->
                                </div>

                                <div class="item">
                                  <img src="projects/foodograph/share.png" alt="appIcon" width="375" height="250">
                                  <!-- <div class="carousel-caption">
                                    <h3>Share on Social Network</h3>
                                  </div> -->
                                </div>

                                <div class="item">
                                  <img src="projects/foodograph/stats.png" alt="appIcon" width="375" height="250">
                                  <!-- <div class="carousel-caption">
                                    <h3>View Stats</h3>
                                  </div> -->
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a> -->

                            <!-- <div class="carousel-controls">
                               <a class="carousel-control left" href="#theCarousel" data-slide="prev"><span class="fa fa-angle-double-left"></span></a>
                               <a class="carousel-control right" href="#theCarousel" data-slide="next"><span class="fa fa-angle-double-right"></span></a>
                           </div> -->

                        </div>

                    </div>

                    <div id="hpPopover" class="hide myPopovers">
                        <h3 align="center"><u>Hogwarts Course Catalog</u></h3>

                        <p align="center" class="pAbtMe">This is a fun and quirky fictional website. I created a website on the world of Harry Potter. This website is a course catalog for Hogwarts School of Witchcraft and Wizardry from the world of Harry Potter. For this website I used HTML, CSS, JavaScript, jQuery, AJAX and XML.</p>

                        <p align="center">There is a registration page that makes use of jQuery field requirements. This form has to be filled out according to the requirements to go to the next page. This website also has links to <a href="projects/hp/HP/robes.html" target="_blank">Madam Malkin&#39;s Robes</a> for all Occasions for the user to browse through.</p>

                        <p align="center">The user can also create their own <a href="projects/hp/HP/profile.html" target="_blank">profile</a> and customize it as per their liking. Overall, this is a fun and interactive website for a Harry Potter fan.</p>

                        <p align="center">The website can be viewed <a href="projects/hp/HP/registration.html" target="_blank">here</a>.</p>

                        <p align="center">The documentation for the website can be viewed here:</p>

                        <p align="center"><iframe src="projects/hp/HP/Hogwarts-Documentation.pdf" height="470" width="473" scrolling="no" frameborder="0"></iframe></p>
                    </div>

                    <div id="discPopover" class="hide myPopovers">
                        <h3 align="center"><u>Discovery Car Dealership</u></h3>

                        <p class="pAbtMe" align="center">Discovery is database system that has been designed for car dealerships. I have used MySQL for this website. The user can query between used and new cars, they can query, the manufacturer, the color, features. </p>
                        <p align="center">I have used MS Visio to draw a Entity Relationship Diagram: </p>
                        <br />
                        <div>
                          <a class="example-image-link" href="projects/discovery/ERD2.png" data-lightbox="example-set"><img class="example-image" src="projects/discovery/ERD.png" alt="" width="475" height="470" /></a>
                        </div>
                        <!-- <a class="discoveryOne" href="projects/discovery/ERD2.png" data-lightbox="example-1"><img class="example-image" src="projects/discovery/ERD.png" alt="theERD" width="475" height="470" /></a> -->
                        <br />
                        <br />
                        <p align="center">This <a href="projects/discovery/Project Part 2.pdf" target="_blank">file</a> shows the database was created, populated and queried.</p>
                        <p align="center"><object height="470" width="473" data="projects/discovery/Project Part 2.pdf"></object></p>
                        <iframe src="projects/discovery/Project Part 2.pdf" height="470" width="473" scrolling="no" frameborder="0"></iframe>
                    </div>

                    <div id="horsePopover" class="hide myPopovers">
                        <h3 align="center"><u>Horseman's Gather Stables</u></h3>

                        <p align="center">Horseman's Gather Stables is a fictional website created using HTML, CSS, ASP.NET and LINQ. This website was used to mainly showcase my use and knowledge of ASP.Net. I used Visual Studio to create my project. I used HTML and CSS as my front end and MySQL as the backend for this project.</p>
                        <p align="center">Horseman's Gather Stables allows the user to add, modify and delete a new rider. This form also allows the user to add their contact information, their competency as a rider, view upcoming event and finally it allows the administrator to filter through the roster.</p>

                        <br />
                        <br />
                        <div>
                          <a class="example-image-link" href="projects/horse/homepage.png" data-lightbox="example-set" data-title="Home Page"><img class="horseImages" src="projects/horse/homepage.png" width="475" height="350" alt="homepage"/></a>
                          <br />
                          <p class=horseCaps>Home Page</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/horse/about.png" data-lightbox="example-set" data-title="About the Website"><img class="horseImages" src="projects/horse/about.png" width="475" height="350" alt="about"/></a>
                          <br />
                          <p class=horseCaps>About the Website</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/horse/register.png" data-lightbox="example-set" data-title="Registration Page"><img class="horseImages" src="projects/horse/register.png" width="475" height="350" alt="register"/></a>
                          <br />
                          <p class=horseCaps>Registration Page</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/horse/adminlogin.png" data-lightbox="example-set" data-title="Admin Login"><img class="horseImages" src="projects/horse/adminlogin.png" width="475" height="350" alt="adminLogin"/></a>
                          <br />
                          <p class=horseCaps>Admin Login</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/horse/events.png" data-lightbox="example-set" data-title="Events Page"><img class="horseImages" src="projects/horse/events.png" width="475" height="350" alt="events"/></a>
                          <br />
                          <p class=horseCaps>Events Page</p>
                          <br /><br />
                        </div>
                    </div>

                    <div id="libPopover" class="hide myPopovers">
                        <h3 align="center"><u>Reed Moore Library</u></h3>

                        <p align="center">Reed Moore Library is a fictional website created using HTML, CSS, JavaScript ASP.NET and LINQ. This website was used to mainly showcase my use and knowledge of ASP.Net. I used Visual Studio to create my project. I used HTML and CSS as my front end and MySQL as the backend for this project.</p>
                        <p align="center">Reed Moore allows the user to add, modify and delete a new rider. This form also allows the user to add their contact information, their competency as a rider, view upcoming event and finally it allows the administrator to filter through the roster.</p>

                        <br />
                        <br />
                        <div>
                          <a class="example-image-link" href="projects/library/libHomepage.png" data-lightbox="example-set" data-title="Home Page"><img class="horseImages" src="projects/library/libHomepage.png" width="475" height="350" alt="libHomepage"/></a>
                          <br />
                          <p class=horseCaps>Home Page</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/library/libUserReg.png" data-lightbox="example-set" data-title="User Registration Page"><img class="horseImages" src="projects/library/libUserReg.png" width="475" height="350" alt="libUserReg"/></a>
                          <br />
                          <p class=horseCaps>User Registration Page</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/library/libCheckout.png" data-lightbox="example-set" data-title="Book Checkout Page"><img class="horseImages" src="projects/library/libCheckout.png" width="475" height="350" alt="libCheckout"/></a>
                          <br />
                          <p class=horseCaps>Book Checkout Page</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/library/libCheckout2.png" data-lightbox="example-set" data-title="Successful Checkout"><img class="horseImages" src="projects/library/libCheckout2.png" width="475" height="350" alt="libSuccessfulCheckout"/></a>
                          <br />
                          <p class=horseCaps>Successful Checkout</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/library/libAdminLogin.png" data-lightbox="example-set" data-title="Admin Login Page"><img class="horseImages" src="projects/library/libAdminLogin.png" width="475" height="350" alt="libAdminLogin"/></a>
                          <br />
                          <p class=horseCaps>Admin Login Page</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/library/libAdminReg.png" data-lightbox="example-set" data-title="Admin Registration, Modify and Delete Page"><img class="horseImages" src="projects/library/libAdminReg.png" width="475" height="350" alt="libAdminRegistration"/></a>
                          <br />
                          <p class=horseCaps>Admin Registration, Modify and Delete Page</p>
                          <br /><br />
                          <a class="example-image-link" href="projects/library/libRoster.png" data-lightbox="example-set" data-title="Roster of registered users"><img class="horseImages" src="projects/library/libRoster.png" width="475" height="350" alt="libRoster"/></a>
                          <br />
                          <p class=horseCaps>Roster of registered users.</p>
                          <br /><br />
                        </div>
                    </div>

                    <div id="phpPopover" class="hide myPopovers">
                        <h3 align="center"><u>Guest Book</u></h3>

                        <p align="center">This <a href="projects/php/la9/addGuest.html" target="_blank">project</a> allows the user to sign in everythime they visit this page. The manager is then allowed to view the guest book which displays the list of users who have visited the page. They can be viewed alphabetically. Since the guests are numbered, they can be deleted easily by just typing in the guest number. This is a simple guest sign in application.</p>
                        <p>
                            This php website can be viewed by clicking on this <a href="projects/php/la9/addGuest.html" target="_blank">link</a>.
                        </p>
                    </div>

                    <div id="tabPopover" class="hide myPopovers">
                        <h3 align="center"><u>Tableau</u></h3>

                        <p align="center">Using <a href="https://public.tableausoftware.com" target="_blank">Tableau</a>, I created interactive visualizations to show the Life Expectancy of Females and Males from 2003-2012. I downloaded the data from the <a href="http://data.worldbank.org/topic" target="_blank">World Bank</a> website. I downloaded the data onto a <a href="projects/tableau/Tableau/rawData.xls" target="_blank">MS Excel Spreadsheet</a> and then I used that data to create interactive data charts.</p>
                        <p>
                            This Tableau project can be viewed by clicking on this <a href="projects/tableau/tableau.html" target="_blank">link</a>.
                        </p>
                    </div>

                    <div id="dvPopover" class="hide myPopovers">
                        <h3 align="center"><u>STOP Domestic Violence</u></h3>

                        <p align="center" class="pAbtMe">This is a fictional website made for a non-profit website against Domestic Violence. This is such a serious problem that needs addressing and action. This was a website created to raise awareness and educate users about the issue.</p>

                        <p align="center">This fictional website was created using HTML, CSS, Adobe Flash, Adobe Photoshop and Adobe Dreamweaver.</p>

                        <p align="center">The website can be viewed <a href="projects/stopDV/dv/index.html" target="_blank">here</a>.</p>

                        <p align="center">The storyboards for the website can be viewed here:</p>

                        <p align="center"><iframe src="projects/stopDV/dv/Revised Storyboards.pdf" height="470" width="473" scrolling="no" frameborder="0"></iframe></p>
                    </div>

                    <div id="tlPopover" class="hide myPopovers">
                        <h3 align="center"><u>Timor Leste</u></h3>

                        <p align="center" class="pAbtMe">This is a  website made on the country Timor Leste. This website gives a detailed description of its rich history, geography, government and economy, people. It also talks about its tourism, health issues and education system.</p>

                        <p align="center">This website was created using HTML and CSS.</p>

                        <p align="center">The website can be viewed <a href="projects/timorLeste/Timor Leste/index1.html" target="_blank">here</a>.</p>

                        <p align="center">The paper for the website can be viewed here:</p>

                        <p align="center"><iframe src="projects/timorLeste/Timor Leste/Research Paper.pdf" height="470" width="473" scrolling="no" frameborder="0"></iframe></p>
                    </div>

                    <div id="netPopover" class="hide myPopovers">
                        <h3 align="center"><u>Netflix- Business Process</u></h3>

                        <p align="center">My group and I analyzed the business process of <a href="http://www.netflix.com/WiHome" target="_blank">Netflix</a>. We presented the History and Background of the company and then continued on to discussing and presenting articles like <a href="https://hbr.org/2014/01/how-netflix-reinvented-hr" target="_blank">How "Netflix Reinvented HR"</a> by Patty McCord and <a href="http://www.thinkgig.com/what-netflix-can-teach-other-businesses-about-the-cloud-and-big-data/" target="_blank">"What Netflix Can Teach Other Businesses About The Cloud And Big Data"</a> by Richard Twilley. I performed and presented a SWOT analysis on Netflix and as a group we finally concluded that Netflix is a pioneer in big data.</p>
                        <p align="center">The full presentation can be viewed <a href="projects/netflix/msom/Netflix.pdf" target="_blank">here</a>.</p>
                    </div>

                </div>
              <div ng-init = "projects = [
              {theProject: 'Literary ID Card', projectImg: 'projects/literary/book.png', projectContent: 'litPopover', projectClass: 'litClass'},
              {theProject: 'DHC', projectImg: 'projects/DHC/dhcLogo.png', projectContent: 'dhcPopover', projectClass: 'dhcClass'},
              {theProject: 'Foodograph', projectImg: 'projects/foodograph/theApp.png', projectContent:'foodPopover', projectClass: 'foodClass'},
              {theProject: 'Harry Potter Course Catalog', projectImg: 'projects/hp/hp2.png', projectContent:'hpPopover', projectClass:'hpClass'},
              {theProject: 'Discovery Car Dealership', projectImg: 'projects/discovery/discovery.png', projectContent:'discPopover', projectClass:'discClass'},
              {theProject: 'Horseman Gather Stables', projectImg: 'projects/horse/horse.png', projectContent:'horsePopover', projectClass: 'horseClass'},
              {theProject: 'Reed Moore Library', projectImg: 'projects/library/books.png', projectContent:'libPopover', projectClass:'libClass'},
              {theProject: 'Guest Book', projectImg: 'projects/php/gBook.png', projectContent:'phpPopover', projectClass:'phpClass'},
              {theProject: 'Life Expectancy of Females and Males', projectImg: 'projects/tableau/tableau.png', projectContent:'tabPopover', projectClass:'tabClass'},
              {theProject: 'Stop Domestic Violence', projectImg: 'projects/stopDV/DVlogo.png', projectContent:'dvPopover', projectClass:'dvClass'},
              {theProject: 'Website on the Country Timor Leste', projectImg: 'projects/timorLeste/tL.png', projectContent:'tlPopover', projectClass:'tlClass'},
              {theProject: 'Analysis of a company like Netflix', projectImg: 'projects/netflix/netflix.png', projectContent:'netPopover', projectClass:'netClass'}
              ]">
              </div>
              <ul class="list-group">
                  <li class="list-group-item {{project.projectClass}}"  ng-repeat="project in projects | filter:searchProject"><a href="#" rel="popover" title="{{project.theProject}}" data-trigger="focus" data-popover-content="#{{project.projectContent}}"><img ng-src="{{project.projectImg}}" class="img-circle" width="195" height="195" /></a> &nbsp;&nbsp;&nbsp; <span class="projectName">{{project.theProject}}</span></li>
              </ul>
          </div>
    </div>
</div>


<div class="bgimg-4" id="contact">
  <div class="caption">
      <?php

    if (isset($_POST['fullName']) && isset($_POST['phNum']) && isset($_POST['emailAddress']) && isset($_POST['message'])) {

        $fullName = $_POST['fullName'];
        $phNum = $_POST['phNum'];
        $emailAddress = $_POST['emailAddress'];
        $message = $_POST['message'];

        if (!empty($fullName) && !empty($phNum) && !empty($emailAddress) && !empty($message) ) {

        $to = 'rashmee.prakash@gmail.com';
        $subject = 'Portfolio View';
        $body = $fullName."\n".$phNum."\n".$message;
        $headers = 'From: '.$emailAddress;

        if (@mail($to, $subject, $body, $headers)) {

            $thankYou =  'Thank you for contacting me. I will be in touch soon!';
        }
        else {
            $sorryMsg =  'Sorry, an error occurred. Please try again later.';
        }

        }
        else {
            $validate =  'All fields are required!';
        }
    }

?>

<div class="contactCap">
    <h1 id="sayHello" align="center">Say Hello!</h1>
    <br /><br />
     <p align="center" id="contactEmail">If you would like to work with me or discuss my projects, feel free to shoot me an <a href="mailto:rashmee.prakash@gmail.com?Subject=Hello!%20I%20would%20like%20to%20discuss%20your%20portfolio" target="_top"><u>email</u></a> or please click on the link below to fill out a form and I will get back to you as soon as possible.</p>
     <br /><br />
     <div class="contactList">
         <div class="contTable">
             <a href="#" class="btn btn-warning btn-lg" role="button">Contact Form</a>
             <!-- <p align="center"  id="theValidate"><i><?php echo $validate; ?></i></p>
                  <p align="center" id="theThankYou"><strong><?php echo $thankYou; ?></strong></p>
                  <p align="center" id="theSorry"><strong><?php echo $sorryMsg; ?></strong></p>
              <fieldset align="center" id="contactFieldset">
                  <form action="index.php" method="post" name="contact_form" id="theContactForm">
                  <table align="center" id="contactTable">
                      <tr>
                          <td><strong>Name:</strong></td>
                          <td><input type="text" name="fullName" id="fullName" size="35" /></td>
                      </tr>
                      <tr>
                          <td><strong>Phone Number:</strong></td>
                          <td><input type="text" name="phNum" id="phNum" size="35" /></td>
                      </tr>
                      <tr>
                          <td><strong>Email:</strong></td>
                          <td><input type="text" name="emailAddress" id="emailAddress" size="35" /></td>
                      </tr>
                      <tr>
                          <td><strong>Message:</strong></td>
                          <td><textarea name="message" rows="5" cols="35"></textarea></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td>
                              <input type="submit" name="submit" id="submit" value="Submit" />
                          &nbsp;
                              <input type="reset" name="reset" id="reset" value="Reset" />
                          </td>
                      </tr>
                  </table>
                  </form>
                  </fieldset> -->
                  <br /><br />
            <p align="center" id="thanks">Thank you for viewing my portfolio!</p>
         </div>
     </div>
</div>
  </div>
</div>

<script src="lightbox2-master/src/js/lightbox.js"></script>
</body>
</html>
