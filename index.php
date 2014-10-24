<!DOCTYPE html>
<?php
//This directory works with ec2-user
 // require_once('/var/www/html/coinbase-php/lib/Coinbase.php');
 // require_once(dirname(__FILE__) . '/../lib/Coinbase.php');
require_once('/Users/brian/programming/coinbase/php_api/coinbase-php/lib/Coinbase.php');

$coinbase = Coinbase::withApiKey($_ENV['XO19iIzFcbKwf7mr'], $_ENV['wQeD5UZxc4hXKuprVFDL40Rz9wRtdZgF']); 

//This was prior to the new code
// echo 'Buy Price: ' . $coinbase->getBuyPrice('1') . '<br>';
// echo 'Sell Price: ' . $coinbase->getSellPrice('1') . '<br>';

$currBuyPrice = $coinbase->getBuyPrice('1');  
$currSellPrice = $coinbase->getSellPrice('1');

?>
<html lang="en">  
  <head>
    <title>Brian Purcell | Analytics | Web Development</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online resume of Brian Purcell located in Irvine California">
    <!-- <meta name ="keywords" content="Brian Purcell, online resume, web analytics, Irvine, Orange County"> -->
    <meta name="author" content="Brian Purcell">    
    
    <!--bootstrap css-->
    <!-- <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css" media="screen"> -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!--my css-->
    <link rel="stylesheet" type="text/css" href="css/sitecss.css" media="screen">
    <!-- Font Awesome -->
    <!-- <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <!--scrolling-->
    <link href="css/scrolling-nav.css" rel="stylesheet" type="text/css">
    <!--hover.css-->
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    
    <!--script type="text/javascript">
      $('body').scrollspy({ target: '#mynav' });
      $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh')
      });
    </script--> 
    <!-- Google Viz API -->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["wordtree"]});
      google.load("visualization", "1.1", {packages:["timeline"]});
    </script>
    <!--script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization',
       'version':'1','packages':['timeline']}]}">
    </script-->
    <!--Google Analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46130865-1', 'brianpurcellinfo.com');
      ga('send', 'pageview');
      ga('send', 'event', {
        'eventCategory': 'click',
        'eventAction': 'button',
        'eventLabel': 'resumeBtn_Click'
    });
      
    </script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head> 
  <body data-spy="scroll" data-target="#mynav">
  <script>
    dataLayer = [(
      'resumeClick':'resumeBtn_Click'
    )]; 
  </script>
    <!--Navbar--> 
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="page-scroll navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a href="#intro">
            <button type="button" class="btn btn-default">
            <i class="fa fa-home fa-lg"></i> <!--This is from awesome font-->
              </button>
          </a>
          <div class="page-scroll btn-group navbar-btn">
            <a class="btn btn-default" href="#about">About Me</a> 
          </div>
          <div class="page-scroll btn-group">
            <a class="btn btn-default" href="#work">Work Experience</a>
          </div>
          <div class="page-scroll btn-group">
            <a class="btn btn-default" href="#education">Education</a>
          </div>
          <div class="page-scroll btn-group">
            <a class="btn btn-default" href="#projects">Projects</a>
          </div>
          <div class="page-scroll btn-group">
            <a class="btn btn-default" href="#skills">Skills</a>
          </div>
          
        </div> <!-- end of std nav   -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1"> 
          <a class="btn btn-default navbar-btn" href="http://codeocode.tumblr.com/" target="_blank">Blog</a>
          <a class="btn btn-default navbar-btn" role="menu" href="http://bit.ly/1xfQ0Bq" target="_blank" onclick="_gaq.push(['event', 'button', 'resumeBtn_Click'])">Resume</a>
          <div class="btn-group">
            <a class="btn btn-info navbar-btn dropdown-toggle" data-toggle="dropdown" role="menu" href="#">Contact Me <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="mailto:brian.purcell7@gmail.com"><i class="fa fa-envelope"></i>  Email</a></li>
              <li><a href="http://www.linkedin.com/pub/brian-purcell/51/765/8b4" target="_blank"><i class="fa fa-linkedin-square"></i>  LinkedIn</a></li> 
              <li><a href="https://github.com/teachMeCode" target="_blank"><i class="fa fa-github-square"></i>  GitHub</a></li>
              <li><a href="#"><i class="fa fa-mobile"></i> 949.933.3422</a></li>
            </ul>
          </div>
          <div class="btn-group">
            <a class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown" role="menu" href="#"><i class="fa fa-btc"></i> Bitcoin <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Coinbase Quote</a></li>
              <li class="divider"></li>
              <li><a href="#"> Buy: <i class="fa fa-dollar"></i> <span id="bprice"></span></a></li>
              <li><a href="#"> Sell: <i class="fa fa-dollar"></i> <span id="sprice"></span></a></li>
            </ul>
          </div>
        </div> <!-- end of right nav -->
      </div>  
    </div>
    <!--home-->
    <section id="intro" class="intro-section"> <!--id connects to navbar, class connects to css file-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h5>Data | Development | Marketing</h5>
            <!-- <h6 class="text-muted">Welcome to the website of</h6> -->
            <h1 id="fontsize">Brian Purcell</h1>
            <h6 class="text-muted"></h6>
            <div class=" hidden page-scroll">
              <a class="btn btn-default" href="#about">About Me</a>
            </div>
            <br>
          </div>
          <div class="page-scroll col-md-12 text-center">
            <a href="#about">
            <img src="img/me_coffee.jpg" alt="this is me, and I like coffee" class="img-circle">
            <br><br>
            </a>
          </div>

          <div class="page-scroll grow">
            <a style="color:white;" href="#about"><i class="fa fa-chevron-circle-down fa-3x"></i></a>
          </div>
        </div>
      </div>    
    </section>
    <!--About Me-->
    <section id="about" class="about-section"> <!--id connects to navbar, class connects to css file-->
      <div class="container">
        <div class="row">
          <!--div class="col-lg-12"-->
            <h1 id="fontsize">About me</h1>
            <!--div class="panel panel-default"-->
              <!--div class="panel-body" style="height:400px;"-->

                <!-- <div class="col-lg-5" style="color:#333333; padding:5px 10px 0 10px;"> -->
                <div class="col-lg-5">
                  <h3>Past <i class="fa fa-hand-o-right"></i></h3>
                  <p>Spent the last <span id="years">14</span> years at <span id="verizon">Verizon</span> developing and executing <span>marketing strategy in </span><span id="CRM">CRM</span> and <span id="cbm">customer base management</span>, <span id="social"> social business analytics</span>, <span id="email">email &amp; digital marketing solutions</span>, and <span id="kpi">KPI</span> &amp; <span id="metric">metrics</span><span id="reporting"> reporting</span> and <span id="analysis">analysis</span>.</p>
                  <!-- !!! hidden !!! -->
                  <p class="hidden">I spent many years at Verizon Wireless working in a number of different roles. My primary focus during this time was reporting and analysis as it related to CRM base management and customer insights.</p> 
                  <p>Please see my <span class="page-scroll"><a href="#work">work experience</a></span> for more details.</p>
                    <!--My day to day job functions fall somewhere between that of a web analyst, an email marketing manager, and a marketing communications manager. Some days I may need to spend time in our data warehouse to pull data and gather insight on the performance of a particular campaign as it relates to our digital communications, other days I’ll review our email deliverability metrics and identify if any major events are impacting the health of our email marketing efforts, and other days will consist of working with powerpoint and excel to develop slides and produce reporting to review upcoming campaign strategy and
                  </div>  
                          past campaign results.-->
                <!--/div-->

                <!-- <div class="col-lg-2"></div>
                <div class="hidden col-lg-4" style="color:#333333; padding:5px 10px 0 10px;">
                  <h3><i class="fa fa-space-shuttle"></i>  Transition  <i class="fa fa-space-shuttle"></i></h3>
                </div> -->
                </div>  
                <!-- <div class="col-lg-7" style="color:#333333; padding:5px 10px 0 10px;"> -->
                <div class="col-lg-1">
                </div>
                <div class="col-lg-6">
                 <h3><i class="fa fa-thumbs-o-up"></i>  Present</h3>  
                 <p>I've decided to steer my career in a new direction and completed web development bootcamp in an effort to strengthen my web dev skills set. <em>I am actively looking for roles in the following subject matter</em>:</p>
                <!--   <p>I've decided to steer my career in a different direction and enrolled and completed web development immersion boot camp at <a href="https://generalassemb.ly/education/web-development-immersive#" traget="_blank">General Assembly LA</a>.
                  </p>
                  <p>
                    I'm currently seeking opportunities as a jr. web developer, marketing analytics, and am also interested in a dev ops career path.
                  </p>
                  <p>
                    Please <a href="http://www.linkedin.com/pub/brian-purcell/51/765/8b4" targat="_blank">contact me</a> if you have questions or would like to learn more about my background and skill set.
                  </p> -->
                
                <!-- !!! Word Tree !!! -->  
                <div id="wordtree_explicit" style="width: 530px; height: 300px;"></div>
              </div>
              <!--/div--> <!-- end of panel body -->
            <!--/div--> <!-- end of panel -->
          </div>  <!-- end row -->

            <!--Add Modal--> <!--hidden-->
   
           
           </div> <!-- end container -->
               
           <!--hidden-->

        </div>
    </section>

    <section id="work" class="services-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 id="fontsize-header-work" class="text-center">Work Experience</h1>
          </div>
        </div> <!-- end first row -->
        <div id="wrk-btn-grp" class="row">
          <div class="col-lg-12 text-center">
            <button id="btn-1" class="btn btn-default" data-toggle="modal" data-target=".bs-modal-lg">
              <h5>Get all the details right here!</h5>
            </button>
            <a id="btn-2" class="btn btn-default" href="http://bit.ly/1oKzbKq" target="_blank">
              <h5>Download my resume here</h5>
            </a>
          </div>
        </div> <!-- end second row -->
        <div class="row">
          <!-- the chart -->
          <div class="col-md-1">
          </div>
          <div class="col-md-10">
            <div id="workExp" style="width: 950px; height: 500px;"></div>
          </div>
          <div class="col-md-1">
          </div>
        </div> <!-- end third row -->
          <div class="col-lg-2">  
            
            <div class="modal fade bs-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h2>Past Work Experience</h2>
                </div>
                <div class="modal-body">
                <p>
                  <h4>Sr.Consultant - Social Analytics and Insights</h4>  
                  Company: <strong>Verizon Communications</strong>
                  <br> 
                  Timeframe: <strong>January 2014 - June 2014</strong>
                  <br>
                  <ul>
                    <li>Develop and deliver analytics and collaborative insight for social intelligence within the customer business intelligence organization</li>
                    <li>Managing day-to-day project operations including resource planning, project status updates, proposal development, and project timelines as it relates to social business insights</li>  
                    <li>Provide guidance and collaborative leadership to cross functional teams on day-to-day tactical implementation of strategy and theory to achieve defined business objectives</li>
                    <li>Develop the on-going definition and creation of requirements detailing the capabilities and functionality of all social analytics programs and tools</li>
                    <li>Stay informed  and identify trends of the communications and marketing analytics industry, including new technologies, methodologies and important new vendors as well as our own technologies, products, target markets, and competitors</li>
                    <li>Drive the review and end-to-end analytic gap analysis of all social intelligence and program trending efforts to ensure program execution</li>
                  </ul> 
                  <br>
                  <h4>Strategist - Digital Marketing and CRM</h4> 
                  Company: <strong>Verizon Wireless</strong>
                  <br>
                  Timeframe: <strong>August 2012 - January 2014</strong>
                  <br>
                  <ul>
                    <li>Manage CRM campaign personalization on the VZW home page targeting specific customer segments</li>
                    <li>Support CRM campaign efforts to utilize the global id (browser cookie) web service on the VZW home page and product pages</li>
                    <li>Oversee the implementation, data collection, and insight generation of web pixels (Litmus) on VZW CRM email communications</li>
                    <li>Monitor and respond to email deliverability KPI's through data provided by ReturnPath and Responsys</li>
                    <li>Identify and secure third party data sources to create connections between known and unknown customers on digital properties </li>
                    <li>Utilize Adobe SiteCatalyst and the enterprise data warehouse to develop deeper understanding of   visitor engagement and behavior patterns as it relates to CRM campaign initiatives
                    </li>
                  </ul> 
                  <br>
                  <h4>Manager - CRM Consumer Base Marketing</h4>  
                  Company: <strong>Verizon Wireless</strong>
                  <br>
                  Timeframe: <strong>November 2010 - August 2012</strong>
                  <br>
                  <ul>
                    <li>Primary lead and point of contact regarding consumer churn, disconnects, and device upgrade reporting and forecasting for the VZW west area consumer base loyalty team</li>
                    <li>Develop, report, and maintain daily KPI metrics reporting related to consumer base loyalty including daily morning communication to leadership and stakeholders</li>
                    <li>Provide insight, analysis, and reporting regarding customer loyalty metrics and events on an ongoing, forecasted basis</li>
                    <li>Serve as the west area point of contact on reporting development and analysis of LTV (Life Time Value) customer profitability assessment </li>
                    <li>Utilize the data warehouse and script SQL to develop ad-hoc queries to mine numerous points of data on a regular and ad-hoc basis for insight and analysis</li>
                  </ul>
                  <br>
                  <h4>Manager - Equipment Marketing and Operations</h4>
                  Company: <strong>Verizon Wireless</strong>
                  <br>
                  Timeframe: <strong>December 2007 - November 2010</strong>
                  <br>
                  <ul>
                    <li>Responsible for forecasting the performance of equipment promotions and the analysis of the results</li>
                    <li>Create new reporting to track key equipment related metrics and guide leadership to improvement opportunities</li>
                    <li>Responsible for the management and facilitation of business contracts, invoicing, and accounting of OEM co-sponsorship agreements</li>
                  </ul>
                  <br>
                  <h4>Manager - Training Operations</h4>
                  Company: <strong>Verizon Wireless</strong>
                  <br>
                  Timeframe: <strong>November 2006 - December 2007</strong>
                  <br>
                  <ul>
                    <li>Managed an eight person team of analysts, coordinators and one supervisor to deliver reporting, analysis and operations support</li>
                    <li>Responsible for the development, delivery, and maintenance of reporting as it related to the west area region training organization</li>
                    <li>Managed the budgeting and operational expenses of three cost centers and provided monthly readouts to leadership</li>
                    <li>Forecasted future operating budgets for both opex and headcount of three training cost centers</li>
                  </ul>
                  <br>
                  <h4>Senior Analyst - Reporting and Analysis</h4>
                  Company: <strong>Verizon Wireless</strong>
                  <br>
                  Timeframe: <strong>August 2005 - November 2006</strong>
                  <br>
                  <ul>
                    <li>Primarily responsible for the development, delivery, and maintenance of various sales, marketing and financial reporting</li>
                    <li>Develop SQL to extract data from the enterprise data warehouse and develop ad-hoc and production scheduled sales reporting focusing on key performance metrics</l>
                    <li>Primary reporting representative to area and regional operations and sales channel</li>
                  </ul>
                  <br>
                  <h4>Various Positions</h4>
                  Company: <strong>Verizon Wireless</strong>
                  <br>
                  Timeframe: <strong>July 1999 - August 2005</strong>
                  <br>
                  <ul>
                    <li>I held a number of positions during my first five years at Verizon Wireless and can provide more detail upon request</li>
                  </ul>
                  <!-- !!! this is currently hidden !!! -->
                  <div class="hidden">
                    <a href="work.html">Strategist - Digital Marketing and CRM</a>
                    <br><br>
                    <a href="work.html">Manager - CRM Consumer Base Marketing</a>
                    <br><br>
                    <a href="work.html">Manager - Equipment Marketing and Operations</a>
                    <br><br>
                    <a href="work.html">Manager - Training Operations</a>
                    <br><br>
                    <a href="work.html">Senior Analyst - Reporting and Analysis</a>
                    <br><br>
                    <a href="work.html">Various Positions</a>
                  </div>
                  <br>
                  <p>Please feel free to <a href="mailto:brian.purcell7@gmail.com?subject=More Info:">contact me</a> with any questions or if you would like to learn more about my work experience.</p>
                  </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div> <!--content-->
            </div> <!--dialog-->
          </div> <!--modal-->
          <!-- <a id="btn-2" class="btn btn-primary border-fade" href="http://bit.ly/1oKzbKq" target="_blank">
            <h5>Download my resume here</h5>
          </a> -->

        <!-- </div> -->

        <!-- <div class="col-lg-2 text-center">
          <h1 id="services-section-or" style="padding:50px 0 0 40px"><strong>Or</strong></h1>
        </div> -->

        <!-- div class="col-lg-4">
          <a id="btn-2" class="btn btn-primary btn-lg border-fade" style="height:175px; padding:50px;" href="http://bit.ly/1oKzbKq" target="_blank">
            <h3>Download my resume here</h3>
          </a>
        </div> -->
        

        <!-- <div class="col-lg-1">
        </div> -->

        <!-- </div>
        </div> -->
      </div> <!-- end container -->
    </section>
    <!-- ===========================================================================================================-->  
    <section id="education" class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h1 id="font-header-education">I feel that learning is a lifelong endeavor.</h1>
          <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6 col-md-offset-1 text-left">
            <h3><a href="https://generalassemb.ly/education/web-development-immersive" target="_blank" data-toggle="tooltip" title="3 month programming bootcamp focusing on full stack web development."><i class="fa fa-code fa-1 x"></i>  Web Development Immersion</a></h3>
            <h3><a href="https://s3-us-west-1.amazonaws.com/awsbsptesting/GoogleIQ.pdf" target="_blank" data-toggle="tooltip" title="Certifies fundamental undestanding of Google Analytics."><i class="fa fa-certificate fa-1 x"></i> Google Analytics Qualified Individual</a></h3>
            <h3><a href="http://unex.uci.edu/areas/it/seo/" target="_blank" data-toggle="tooltip" title="Search Engine Marketing certificate awarded from UC Irvine - Extension"><i class="fa fa-certificate fa-1 x"></i> Search Engine Marketing Certificate</a></h3>
            <h3><a href="http://unex.uci.edu/areas/it/web_intel/" target="_blank" data-toggle="tooltip" title="Web Intelligence certificate awarded from UC Irvine - Extension"><i class="fa fa-certificate fa-1 x"></i> Web Intelligence Certificate</a></h3>
            <h3><a href="http://datawarehouse4u.info/Teradata-Certification-questions-answers.html" target="_blank" data-toggle="tooltip" title="Associate level award certifying fundamental understanding of the Teradata Data Warehouse."><i class="fa fa-certificate fa-1 x"></i> Teradata Certified Professional</a></h3>
            <h3><a href="http://psb.soceco.uci.edu/" target="_blank" data-toggle="tooltip" title="B.A. awarded in Psychology and Social Behavior"><i class="fa fa-university fa-1 x"></i> B.A. University of California, Irvine</a></h3>
          </div>
          <div class="col-md-3"></div>
      </div>
    </section>
    <section id="projects" class="projects-section">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <h1 id="font-header-projects" class="text-center">Projects<br><small><a href="http://bit.ly/19F19iL" target="_blank">  &#64 Web Development Immersion</a></small></h1>
            <!-- carousel
            =========================== -->
            <div id="carousel" class="carousel slide" >
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
              </ol>

            <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <!-- Project 4 -->
                <div class="item active">
                  <a href="#" data-toggle="modal" data-target="#modal-fff"><img src="img/ff.jpg" alt="fastfantasyfootball"></a>
                  <div class="carousel-caption">
                    <h2 style="color:black;">Fast Fantasy Football</h2>
                  </div>
                  <div class="modal fade" id="modal-fff" role="dialog" tabindex="-1" aria-labelledby="modal-fff-mylabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel"><h4>Final WDI Project: Fast Fantasy Football</h4>
                        </div>
                        <div class="modal-body">
                          <p>This is my final project as part of the <a href="http://bit.ly/19F19iL" target="_blank">WDI</a>  project series.<p>
                          <p>The idea behind this app was to give fantasy football players (such as myself) the ability to research and understand specific metrics of key fantasy players in a effort to make better selections when drafting and acquiring players throughout the season.</p>
                          <p>This app utilizes NFL player data made available from the <a href="https://github.com/BurntSushi/nflgame" target="_blank">nflgame api</a> and is visualized using a Google fusion table on the back end, a Google motion chart on the front end, and the Google data visualization api to bring them together.</p>
                          <p>The application runs on rails and is hosted on heroku per the requirements of the final projects. However, this could have just as easily been done without the use or rails or  heroku.</p> 
                          <p>Please see the live app <a href="http://fastfantasyfootball.herokuapp.com" target="_blank">here</a> or visit my Github repo <a href="https://github.com/teachMeCode/wdi_project_4" target="_blank">here</a>.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Project 3 -->
                <div class="item">
                  <a href="#" data-toggle="modal" data-target="#modal-cc"><img src="img/cc.jpg" alt="Congress Connection"></a>
                  <div class="carousel-caption" style="color:black;">
                    <h2>The Congress Connection</h2>
                  </div>
                  <div class="modal fade" id="modal-cc" role="dialog" tabindex="-1" aria-labelledby="modal-cc-mylabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel"><h4>Group Project: The Congress Connection</h4>
                        </div>
                          <div class="modal-body">
                            <p>This app is the result of a group project completed by a team of three. <p>
                            <p>The idea was to create a network visualization of members of the Senate (the entire congress was out of scope) and link their votes, bills voted on, and committee membership.</p>
                            <p>The work was divided into three parts: Front end, back end, data. I was responsible for the data and built much of the data model, tables, and postgreSQL database. The data for this app is sourced from the <a href="https://sunlightlabs.github.io/congress/" target="_blank">Sunlight Foundation Congress v3 API</a> and is consumed in both live calls and stored in the postgreSQL DB via .csv uploads.</p> 
                            <p>The front end was developed my <a href="https://github.com/nickmro" target="_blank">Nick Mrozowski</a> utilizing D3.js and the back end was developed by <a href="https://github.com/riachkyle" target="_blank">Kyle Riach</a> utilizing rails and some AngularJs on the front end.</p>
                            <p>Please see the live app <a href="http://bit.ly/1y8kF7C" target="_blank">here</a> or visit the Github repo <a href="http://bit.ly/ZeCin6" target="_blank">here</a>.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- Project 2 -->
                <div class="item">
                  <a href="#" data-toggle="modal" data-target="#modal-inv"><img src="img/inv.jpg" alt="inventory application"></a>
                  <div class="carousel-caption">
                    <h2 style="color:black;">Inventory Application</h2>
                  </div>
                  <div class="modal fade" id="modal-inv" role="dialog" tabindex="-1" aria-labelledby="modal-inv-mylabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel"><h4>First Rails App: An Inventory Application</h4>
                        </div>
                          <div class="modal-body">
                            <p>This was the first app I completed at WDI and was my first introduction to Ruby on Rails.</p>
                            <p>My idea for this app was to create an inventory application my girlfriend could use to keep track of her art work, thus the name, Art Tracker.</p>
                            <p>The goal here was to demonstrate basic CRUD functionality, use MongoDB as the database, and bcrypt to secure user passwords. All of these requirements are included in this project.</p>
                            <p>Please see the live application <a href="http://bit.ly/1yO6Jkq" target="_blank">here</a> or visit my Github repo <a href="http://bit.ly/19F19iL" target="_blank">here</a>.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div> <!-- end project -->
                <!-- <h3>Here are some projects</h3> -->
              </div>
  
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div> <!-- end carousel -->
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>    
    </section>
    <section id="skills" class="things-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 id="font-header-skills">Skills, straight up!</h1>
            <h4><small>Self-assessment of multidisciplinary skill set</small></h4>
          </div>
          <div class="col-md-12">
            <p class="text-muted">
              <span>  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span> = Beginner
              &nbsp 
              <span>   
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
              </span> = Expert
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-2">
            <h2>Web Dev</h2>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-2">
            <h2>Data</h2>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-2">
            <h2>Marketing</h2>
          </div>
          <div class="col-md-2">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-2">
            <div class="text-left">
              <p>HTML
              <span class="pull-right">
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>CSS
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Bootstrap
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>JavaScript
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Ruby
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Rails
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Git
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Bash
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
          </div> <!-- end of column -->
          <div class="col-md-1">
          </div>
          <div class="col-md-2">
            <div class="text-left">
              <p>SQL
            <span class="pull-right">
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
            </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>PostgreSQL
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Teradata
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>MongoDB
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Google Analytics
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div><div class="text-left"> 
              <p>Tableau Public
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Data Viz
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>MS Excel
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>MS Access
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
          </div> <!-- end of column -->
          <div class="col-md-1">
          </div>
          <div class="col-md-2">
            <div class="text-left"> 
              <p>Web Analytics
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>CRM
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Base Mgmnt.
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>KPI Analysis
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Digital Strategy
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Digital Solution
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Social Analysis
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>Email Analysis
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
            <div class="text-left"> 
              <p>A/B Testing
              <span class="pull-right">  
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle"></i>
                <i class="fa fa-circle-o"></i>
              </span>
              </p>
            </div>
          </div>
          <div class="col-md-2">
          </div>
        </div>  
            <!-- hidden -->
            <div class="hidden well" style="background-color:#dcdcdc; border:solid 2px; border-color:#c6c6c6;">
              <p class="text-center text-muted"><span class="label label-primary">This bar color</span> = On the job learning ... <span class="label label-success">  This bar color</span> = Personal learning and study</p>
              <div class="scroll-box text-left">
                <p> 
                <h3>SQL</h3>
                <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                    <strong><span class="pull-right"> 70% &nbsp </span></strong>
                  </div>
                </div>
                <h3>Excel<small> (charting, pivot tables, adv.formulas, dashboards)</small></h3>
                <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                    <strong><span class="pull-right"> 85% &nbsp </span></strong>
                  </div>
                </div>  
                <h3>Access<small> (table management, query design, forms, SQL, ODBC connections) </small></h3>
                <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                    <strong><span class="pull-right"> 65% &nbsp </span></strong>
                  </div>
                </div>  
                <h3>VBA<small> (both Excel and Access, macros, automation, data connections, recordset transfers, etc)</small>
                </h3>
                <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                    <strong><span class="pull-right"> 50% &nbsp </span></strong>
                  </div>
                </div>
                <h3>Email Marketing<small> (Responsys, ReturnPath, Litmus)</small></h3>
                <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                    <strong><span class="pull-right"> 75% &nbsp </span></strong>
                  </div>
                </div>
                <h3>Web Analytics<small> (Reporting Applications)</small></h3>
                <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                    <strong><span class="pull-right"> SiteCatalyst - 70% &nbsp </span></strong>
                    </div>
                  </div>
                  <div class="progress">  
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                      <strong><span class="pull-right"> Google Analytics - 80% &nbsp </span></strong>
                    </div>
                  </div>  
                  <h3>Data Management / Data Analysis / Big Data<small> (New tools that I've recently started to use)</small></h3>
                  <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                      <strong><span class="pull-right"> SQL Server 2008 R2 - 40% &nbsp </span></stron>
                    </div>
                  </div>
                  <div class="progress">  
                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                      <strong><span class="pull-right"> SQL Server Integration Service - 30% &nbsp </span></strong>
                    </div>
                  </div>
                  <div class="progress">  
                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                      <strong><span class="pull-right"> Hive - 40% &nbsp </span></strong>
                    </div>
                  </div>
                  <div class="progress">  
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                      <strong><span class="pull-right"> Hadoop - 20% &nbsp </span></strong>
                    </div>
                  </div>  
                  <h3>Web Development</h3>
                  <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                      <strong><span class="pull-right"> HTML - 40% &nbsp </span></strong>
                    </div>
                  </div>
                  <div class="progress">  
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
                      <strong><span class="pull-right"> CSS - 35% &nbsp </span></strong>
                    </div>
                  </div>
                  <div class="progress">  
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                      <strong><span class="pull-right"> JS - 5% &nbsp </span></strong>
                    </div>
                  </div>
                  <h3>Command Line</h3>
                  <p class="text-muted">Beginner<span class="pull-right">Expert</span></p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                      <strong><span class="pull-right"> Linux / Terminal - 40% &nbsp </span></strong>
                    </div>
                  </div>
                  <div class="progress">  
                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                      <strong><span class="pull-right"> Powershell - 30% &nbsp </span></strong>
                    </div>
                  </div>
                </p>  
              </div>
            </div>
          </div>       
        </div>
      </div>
    </section>
    <section class="contactme-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 id="font-header-contactme">Get in contact with me.</h2> 
          </div>
          <div class="col-md-12 text-center">
            <a class="grow" style="color:white;" href="mailto:brian.purcell7@gmail.com" target="_blank"><i class="fa fa-envelope-o fa-4x"></i></a>&nbsp
            <a class="grow" style="color:white;" href="http://www.linkedin.com/pub/brian-purcell/51/765/8b4" target="_blank"><i class="fa fa-linkedin-square fa-4x"></i></a>&nbsp
            <a class="grow" style="color:white;" href="https://twitter.com/BrianPurcell_" target="_blank"><i class="fa fa-twitter-square fa-4x"></i></a>&nbsp
            <a class="grow" style="color:white;" href="https://github.com/teachMeCode" target="_blank"><i class="fa fa-github-square fa-4x"></i></a>&nbsp
            <a class="grow" data-toggle="modal" data-target="#contact-number" style="color:white;" href="#"><i class="fa fa-mobile fa-4x"></i></a>
            <div class="modal fade" id="contact-number" tabindex="-1" role="dialog" aria-labelledby="myContactNumber" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body">
                    <p>Mobile: 949.933.3422</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section>  
    <!-- Core JavaScript Files -->
    <!--script src="js/jquery-1.10.2.js"></script-->
    <!--script src="js/jquery.easing.min.js"></script-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    
    <script type="text/javascript">
    
   //   $(function () {
   //       $('[data-toggle="tooltip"]').tooltip({
   //       'placement': 'top'
      // });
      // $('[data-toggle="popover"]').popover({
   //       trigger: 'hover',
   //           'placement': 'top'
      // });

      // $('#userNameField').tooltip({
   //       'show': true,
   //           'placement': 'bottom',
   //             'title': "Please remember to..."
      // });

      // $('#userNameField').tooltip('show');
   //   });
      
      $('.collapse').collapse()
      $('.carousel').carousel({
        interval: 3000
      }) 
      $('[data-toggle="tooltip"]').tooltip({'placement':'top'})
    </script>
    <!-- Google Viz Chart -->
    <script>
    google.setOnLoadCallback(drawSimpleNodeChart);
      function drawSimpleNodeChart() {
        var nodeListData = new google.visualization.DataTable();
        nodeListData.addColumn('number', 'id');
        nodeListData.addColumn('string', 'childLabel');
        nodeListData.addColumn('number', 'parent');
        nodeListData.addColumn('number', 'size');
        nodeListData.addColumn('number', 'color');

        nodeListData.addRow([0, "Brian's Interests", -1, 2, 0]);
        nodeListData.addRow([1, 'Programming', 0, 1, 2]);
        nodeListData.addRow([2, 'Data', 0, 1, 0]);
        nodeListData.addRow([3, 'Marketing', 0, 1, 0]);

        //programing node
        nodeListData.addRow([4, 'Dev Ops', 1, 1, 0]);
        nodeListData.addRow([5, 'Data Viz', 1, 1, 0]);
        nodeListData.addRow([6, 'Front End', 1, 1, 0]);
        nodeListData.addRow([7, 'Back End', 1, 1, 0]);
        nodeListData.addRow([8, 'Python Dev', 1, 1, 0]);

        nodeListData.addRow([18, 'Jr.Dev Ops', 4, 1, 0]);
        nodeListData.addRow([19, 'Jr.Sys Ops', 4, 1, 0]);

        nodeListData.addRow([20, 'D3', 5, 1, 0]);        
        nodeListData.addRow([21, 'Google Charts', 5, 1, 0]);
        
        //data node
        nodeListData.addRow([9, 'SQL', 2, 1, 0]);
        nodeListData.addRow([10, 'Database', 2, 1, 0]);
        nodeListData.addRow([22, 'Web Analytics', 2, 1, 0]);
        nodeListData.addRow([30, 'Cloud', 2, 1, 0]);        

        nodeListData.addRow([23, 'Tag Management', 22, 1, 0]);
        nodeListData.addRow([24, 'Google Analytics', 22, 1, 0]);
        nodeListData.addRow([28, 'Dashboards', 22, 1, 0]);   

        nodeListData.addRow([26, 'PostgreSQL', 10, 1, 0]);
        nodeListData.addRow([27, 'MongoDB', 10, 1, 0]);
        nodeListData.addRow([29, 'Tableau Public', 10, 1, 0]);

        nodeListData.addRow([31, 'AWS', 30, 1, 0]);                   

        //marketing node
        nodeListData.addRow([11, 'Analytics', 3, 1, 0]);
        nodeListData.addRow([12, 'CRM', 3, 1, 0]);
        
        nodeListData.addRow([13, 'Social Analytics', 11, 1, 0]);
        nodeListData.addRow([14, 'OnSite Behavior', 11, 1, 0]);
        nodeListData.addRow([25, 'Sentiment Analytics', 11, 1, 0]);

        nodeListData.addRow([15, 'Email Marketing', 12, 1, 0]);
        nodeListData.addRow([16, 'Base Management', 12, 1, 0]);
        nodeListData.addRow([17, 'Customer Insights', 12, 1, 0]);

        var options = {
          maxFontSize: 14,
          colors: ['black', 'red', 'green'],  
          wordtree: {
            format: 'explicit',
            type: 'suffix'
          }
        };

        var wordtree = new google.visualization.WordTree(document.getElementById('wordtree_explicit'));
        wordtree.draw(nodeListData, options);
      }
    </script>
    <!-- Work Experience Chart -->
  <script type="text/javascript">

  google.setOnLoadCallback(drawChart);  
    function drawChart() {

      var x = document.getElementById('workExp');
      var chart = new google.visualization.Timeline(x);

      var dataTable = new google.visualization.DataTable();
      dataTable.addColumn({ type: 'string', id: 'Position' });
      dataTable.addColumn({ type: 'string', id: 'Role' });
      dataTable.addColumn({ type: 'date', id: 'Start' });
      dataTable.addColumn({ type: 'date', id: 'End' });
      dataTable.addRows([
        [ 'Verizon Wireless',          'Various roles while at University', new Date(1999, 7, 1), new Date(2005, 8, 1) ],
        [ 'Verizon Wireless',          'Sr.Analyst - Reporting',      new Date(2005, 8, 1),  new Date(2006, 11, 1) ],
        [ 'Verizon Wireless',          'Manager - Training Ops',  new Date(2006, 11, 1),  new Date(2007, 12, 1) ],
        [ 'Verizon Wireless',          'Manager - Marketing Ops',  new Date(2007, 12, 1),  new Date(2010, 11, 1) ],
        [ 'Verizon Wireless',          'CRM Marketing Manager',  new Date(2010, 11, 1),  new Date(2012, 8, 1) ],
        [ 'Verizon Wireless',          'Strategist - Digital Marketing & CRM',  new Date(2012, 8, 1),  new Date(2014, 1, 1) ],
        [ 'Verizon Communications',          'Sr.Consultant - Social Analytics and Insights',  new Date(2014, 1, 1),  new Date(2014, 6, 1) ]]);
        // [ 'Education',     'UC Irvine - B.A.',        new Date(1999, 9, 1), new Date(2003, 6, 1)],
        // [ 'Education',     'Teradata Certification',        new Date(2005, 12, 1), new Date(2005, 12, 31)],
        // [ 'Education',     'Web Intelligence - Certification',        new Date(2011, 5, 1),  new Date(2012, 5, 31)],
        // [ 'Education',     'Search Engine Marketing - Certification',    new Date(2012, 7, 1),  new Date(2013, 7, 31)],
        // [ 'Education',     'Google Analytics Qualified Individual',    new Date(2014, 1, 1),  new Date(2014, 1, 31)],
        // [ 'Education',     'Web Development Immersion',    new Date(2014, 6, 21),  new Date(2014, 9, 26)]


        var options = {
          timeline: {groupByRowLabel: false},
          // timeline: { singleColor: '#8d8' },
          // timeline: { colorByRowLabel: true },
          backgroundColor: '#fff',
          // colors: ['#468499'],
        };
      chart.draw(dataTable, options);
    }
  </script>
  <!-- get bitcoin price -->
  <script type="text/javascript">
    window.onload = function(){
      var buyPrice = '<?php echo $currBuyPrice;?>';
      var sellPrice = '<?php echo $currSellPrice;?>';

      document.getElementById('bprice').innerHTML = buyPrice;
      document.getElementById('sprice').innerHTML = sellPrice;
    }
  </script>
  </body  
</html>