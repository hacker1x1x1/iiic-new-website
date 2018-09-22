<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Team IIIC</title>
    <meta name="author" content="">
    <meta property="og:Hint Team" content="static/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/css/normalize.css">
    <link rel="stylesheet" href="static/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        i{
  margin: 6px;
}
i:hover {
    color: #7FDBFF;
}
.fa-facebook  {
  color: #ffffff;
  font-size: 2.5em;
}
.fa-github  {
  color: #ffffff;
  font-size: 2.5em;
}
.fa-twitter  {
  color: #ffffff;
  font-size: 2.5em;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background: linear-gradient(330deg, #4C4491 0%, #FD5C63 100%);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #ffffff;
    display: block;
    transition: 0.3s;
    z-index: 1;
    
}

.sidenav a:hover {
    color: #f1f1f1;
    
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    
}
#mySidenav .sidenav {
    z-index: 1;
}
.container {
    transition: margin-left .5s;
    padding: 16px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/* Navbar  */
.navbar {
  min-height: 40px;
  padding-right: 20px;
  padding-left: 20px;
  margin: 20px;
  background-color: #ffffff;
 
  background-repeat: repeat-x;
 
  -webkit-border-radius: 4px;
     -moz-border-radius: 4px;
          border-radius: 4px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#fff2f2f2', GradientType=0);
  *zoom: 1;
  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
     -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
          box-shadow: 0 1px 4px rgba(0, 0, 0, 0.065);
}
/* navbar end */
#social {
    margin-left: 25px;  
}
.back {
    
    margin-top : -24px;
    margin-left : 20px;
}
.back a{
    color: #A95179;
    font-size: 22px;
}
#filters li span.active {
          background:grey;
          padding :20px;
          color:#fff;
      }
#filters li span {
          display: block;
          width: 132px; 
          height: 60px;
          padding :20px;
          margin: 8px;      
          text-decoration:none;
          cursor: pointer;
          background: #fff;
          color: #000;
          border-radius: 0;
          border: 1px solid #000;
          min-width: 6em;
          margin-bottom: 1vh;
      }
      
::-webkit-scrollbar-thumb {
    background: linear-gradient(to right, #3333ff 0%, #9933ff 100%); 
    border-radius: 10px;
}     

    </style>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>a
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="static/js/jquery.mixitup.min.js"></script>
    
    <script type="text/javascript">
    $(function () {
        
        var filterList = {
        
            init: function () {
            
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixItUp({
                selectors: {
                  target: '.portfolio',
                  filter: '.filter' 
              },
              load: {
              filter: '.all'  
            }     
                });                             
            
            }

        };

        // Run the show!
        filterList.init();
        
        
    }); 
    </script>

</head>
<body>
        <div class="back"><a href="index.html"><h1></h1></a></div>
        <div id="mySidenav" class="sidenav">
            <center>
                <div class="back-mob"><a href="index.html"><h1><i class="fa fa-home" aria-hidden="true"></i></h1></a></div>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#" class="filter active" data-filter=".all" onclick="closeNav()" >All</a>
                <a href="#" class="filter" data-filter=".finance" onclick="closeNav()">Finance</a>
                <a href="#" class="filter" data-filter=".management" onclick="closeNav()">Management</a>
                <a href="#" class="filter" data-filter=".branding" onclick="closeNav()">Branding</a>
                <a href="#" class="filter" data-filter=".technical" onclick="closeNav()">Technical</a>
                <a href="#" class="filter" data-filter=".hospitality" onclick="closeNav()">Hospitality</a>
            </center>
              </div>

<script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        </script>
        <div id="header">
                <div class="jumbotron text-center">
                    <center><a href="index.html"><img id="logo" src="iiic2.png" style="width :60%;
                    height :auto;"></a>
                   
                  <h1><font style="color : rgb(112, 112, 112) ;">Team IIIC</h1></div> 
                  </center> 
                </div>
                <div class="navbar">
                <div id="span">
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                        <center style="font-size:25px; margin-top :-38px">Team</center>
                        <a href="index.html"><img id="logo" src="static/img/logo.png" style="width :60px; height :auto; margin-top : -30px;" align="right"></a>
                    </div>
                    
                </div>
    <div class="container">
        
        <div class="table">
        <ul id="filters" class="clearfix">
            
            <li><span class="filter active" data-filter=".all">All</span></li>
            <li><span class="filter" data-filter=".finance">Overall Coordinators</span></li>
            <li><span class="filter" data-filter=".management">Corporate Relations</span></li>
            <li><span class="filter" data-filter=".branding">Public Relations and Marketing</span></li>
            <li><span class="filter" data-filter=".technical">Media Management</span></li>
            <li><span class="filter" data-filter=".hospitality">Events</span></li>
            <li><span class="filter" data-filter=".hospitality2">Web Operations</span></li>
            <li><span class="filter" data-filter=".hospitality3">Design</span></li>
        </ul>
    </div>
        <div id="portfoliolist">
                
            <div class="portfolio finance all" data-cat="finance" >
                <div class="portfolio-wrapper" id="wrapper">
                    <div class="image">
                    <img src="team/pranav.jpg" width="300px" height="450px" onclick="void(0)" alt="" />
                </div>
                    <div class="label">
                            
                        <div class="label-text">
                            <a class="text-title">Pranav Mahajan</a>
                            <span class="text-category">Overall Coordinator</span>
                            
                            <p class="text">
                                    +91-8568926858
                                    <br><br>
                                    <a href="https://www.facebook.com/pranav.mahajan.3557" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="https://www.linkedin.com/in/pranav-mahajan-012b6b126/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    
                        </p>
                        </div>
                        <div class="label-bg"></div>
                    </div>
                </div>
            </div>  
                            
                    <div class="portfolio finance all" data-cat="finance">
                            <div class="portfolio-wrapper">
                                    <div class="image">             
                                <img src="team/rakshit.jpg" onclick="void(0)" alt="" />
                                </div>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">Rakshit Sai</a>
                                        <span class="text-category">Overall Coordinator</span>
                                        <p class="text">
                                                +91-9703009493
                                                <br><br>
                                                <a href="https://www.facebook.com/rakshit.sai.5" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="https://www.linkedin.com/in/sai-rakshit-063b1a143/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                                
                                    </p>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>  
                            <div class="portfolio management all" data-cat="management">
                                    <div class="portfolio-wrapper" id="wrapper">
                                        <div class="image">
                                        <img src="team/aditi.jpg" onclick="void(0)" alt="" />
                                    </div>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Aditi Aggrawal</a>
                                                <span class="text-category">Head, Corporate Relations</span>
                                                <p class="text">
                                                        +91-7390963623
                                                        <br><br>
                                                        <a href="https://www.facebook.com/aditi.agrawal.5817" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="https://www.linkedin.com/in/aditi-agrawal-083459140/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </p>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio management all" data-cat="management">
                                    <div class="portfolio-wrapper" id="wrapper">
                                        <div class="image">
                                        <img src="team/sagar.jpg" onclick="void(0)" alt="" />
                                    </div>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Sagar Lakhani</a>
                                                <span class="text-category">Executive, Corporate Relations</span>
                                                <p class="text">
                                                        +91-9138579761
                                                        <br><br>
                                                        <a href="https://www.facebook.com/slakhani12" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="https://www.linkedin.com/in/sagar-lakhani" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </p>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio management all" data-cat="management">
                                    <div class="portfolio-wrapper" id="wrapper">
                                        <div class="image">
                                        <img src="team/madhav.jpg" onclick="void(0)" alt="" />
                                    </div>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Madhav Gupta</a>
                                                <span class="text-category">Executive, Corporate Relations</span>
                                                <p class="text">
                                                        +91-9466212275
                                                        <br><br>
                                                        <a href="https://www.facebook.com/madhav.gupta.547389" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="https://www.linkedin.com/in/madhav-gupta-393b64161/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </p>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolio management all" data-cat="management">
                                    <div class="portfolio-wrapper" id="wrapper">
                                        <div class="image">
                                        <img src="team/aadil.jpg" onclick="void(0)" alt="" />
                                    </div>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Aadil Beg</a>
                                                <span class="text-category">Executive, Corporate Relations</span>
                                                <p class="text">
                                                        +91-7007645330
                                                        <br><br>
                                                        <a href="https://www.fb.com/aadilbaeg" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="https://www.linkedin.com/in/aadilbeg/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </p>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            <div class="portfolio branding all" data-cat="branding">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/madhur.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Madhur Gupta</a>
                                    <span class="text-category">Head, Public Relations & Marketing</span>
                                    <p class="text">
                                            +91-8800846806
                                            <br><br>
                                        <a href="https://www.facebook.com/madhurguptaiiita"" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/madhurguptaiiita" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio branding all" data-cat="branding">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/ph.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Pradeep Kumar</a>
                                    <span class="text-category">Head, Public Relations & Marketing</span>
                                    <p class="text">
                                            +91-6559635443
                                            <br><br>
                                        <a href="https://www.facebook.com/madhurguptaiiita"" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/madhurguptaiiita" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio branding all" data-cat="branding">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/mohitg.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Mohit Gupta</a>
                                    <span class="text-category">Executive, Public Relations & M.</span>
                                    <p class="text">
                                            +91-9198653377
                                            <br><br>
                                        <a href="https://www.facebook.com/mohit.gupta.75491856"" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/mohit-gupta-703a7715a/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio branding all" data-cat="branding">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/pratham.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Pratham Prakash</a>
                                    <span class="text-category">Executive, Public Relations & M.</span>
                                    <p class="text">
                                            +91-7008457567
                                            <br><br>
                                        <a href="https://www.facebook.com/prathamprakash29" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/prathamprakash29" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio branding all" data-cat="branding">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/gaurav.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Gaurav Kumar</a>
                                    <span class="text-category">Executive, Public Relations & M.</span>
                                    <p class="text">
                                            +91-9565612952
                                            <br><br>
                                        <a href="https://www.facebook.com/kg674"" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/gaurav-kumar-027075159/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio branding all" data-cat="branding">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/shekhawat.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Rohan Shekhawat</a>
                                    <span class="text-category">Executive, Public Relations & M.</span>
                                    <p class="text">
                                            +91-7905532402
                                            <br><br>
                                        <a href="https://www.facebook.com/shekhawatrohan23" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/rohan-shekhawat-47a8b9159" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio technical all" data-cat="technical">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/bhanu.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Bhanu Bhandari</a>
                                    <span class="text-category">Head, Media Management</span>
                                    <p class="text">
                                            +91-9958159280
                                            <br><br>
                                        <a href="https://www.facebook.com/falafelraider" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/bhanubhandari99/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio technical all" data-cat="technical">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/animesh.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Animesh Jha</a>
                                    <span class="text-category">Executive, Media Management</span>
                                    <p class="text">
                                            +91-7004474841
                                            <br><br>
                                        <a href="https://www.facebook.com/animesh.jha0906" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/animesh-jha-789663ba" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio technical all" data-cat="technical">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/ph.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Jasmeet Kaur</a>
                                    <span class="text-category">Executive, Media Management</span>
                                    <p class="text">
                                            +91-7973872020
                                            <br><br>
                                        <a href="https://www.facebook.com/jasmeet.kaur2112" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/jasmeet-kaur-404b65161/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio technical all" data-cat="technical">
                                    <div class="portfolio-wrapper">
                                            <div class="image">             
                                    <img src="team/aadya.jpg" onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Aadya Mishra</a>
                                    <span class="text-category">Executive, Media Management</span>
                                    <p class="text">
                                            +91-8090932284
                                            <br><br>
                                        <a href="https://www.facebook.com/aadya.mishra.583" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/aadya-mishra-028b0b159" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            
                            
                            <div class="portfolio hospitality all" data-cat="hospitality">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/praphull.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Praphull Mishra</a>
                                    <span class="text-category">Head, Events</span>
                                    <p class="text">
                                            +91-9838224416
                                            <br><br>
                                        <a href="https://www.facebook.com/Pen.and.Prafull" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/praphull-mishra-471b9612a/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality all" data-cat="hospitality">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/shreyansh.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Shreyannsh Dwivedi</a>
                                    <span class="text-category">Head, Events</span>
                                    <p class="text">
                                            +91-7080397532
                                            <br><br>
                                        <a href="https://www.facebook.com/shreyansh.dwivedi.18" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/shreyansh-dwivedi" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality all" data-cat="hospitality">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/jhawar.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Pranav Jhawar</a>
                                    <span class="text-category">Executive, Events</span>
                                    <p class="text">
                                            +91-8233811917
                                            <br><br>
                                        <a href="https://www.facebook.com/pranav.jhawar.75" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/pranav-jhawar-b09729161" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality all" data-cat="hospitality">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/malu.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Tanmay Malu</a>
                                    <span class="text-category">Executive, Events</span>
                                    <p class="text">
                                            +91-9565610206
                                            <br><br>
                                        <a href="https://www.facebook.com/tanmay.malu" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://in.linkedin.com/in/tanmay-malu-a46746161" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality all" data-cat="hospitality">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/yogesh.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Yogesh Manwani</a>
                                    <span class="text-category">Executive, Events</span>
                                    <p class="text">
                                            +91-9977444901
                                            <br><br>
                                        <a href="https://www.facebook.com/yogesh.manwani1" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/yogesh-manwani-0932b6162/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality all" data-cat="hospitality">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/kush.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Kush Mishra</a>
                                    <span class="text-category">Executive, Events</span>
                                    <p class="text">
                                            +91-7376263933
                                            <br><br>
                                        <a href="https://www.facebook.com/kush.mishra.969" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/kush-mishra-433370151" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality all" data-cat="hospitality">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/adesh.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Adesh Shukla</a>
                                    <span class="text-category">Executive, Events</span>
                                    <p class="text">
                                            +91-8188858438
                                            <br><br>
                                        <a href="https://m.facebook.com/adesh.shukla.790" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/adesh-shukla-a92b20159" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality2 all" data-cat="hospitality2">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/siddhant.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Siddhant Srivastav</a>
                                    <span class="text-category">Head, Web Operations</span>
                                    <p class="text">
                                            +91-8765531793
                                            <br><br>
                                        <a href="https://www.facebook.com/siddhant.srivastav.3" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/siddhant-srivastav-347697137/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality2 all" data-cat="hospitality2">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/aka.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Aswanth K Anil</a>
                                    <span class="text-category">Head, Web Operations</span>
                                    <p class="text">
                                            +91-8075153249
                                            <br><br>
                                        <a href="https://www.facebook.com/aswanth9495" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/aswanth-k-a1b59414b/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality2 all" data-cat="hospitality2">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/ekansh.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Ekansh Bansal</a>
                                    <span class="text-category">Executive, Web Operations</span>
                                    <p class="text">
                                            +91-8791683517
                                            <br><br>
                                        <a href="https://www.facebook.com/ekansh.bansal.77" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/ekanshbansal10/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality2 all" data-cat="hospitality2">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/rudransh.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Rudransh Gupta</a>
                                    <span class="text-category">Executive, Web Operations</span>
                                    <p class="text">
                                            +91-8574523025
                                            <br><br>
                                        <a href="https://m.facebook.com/rudransh.gupta.161?refid=8" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/rudransh-gupta-2baba3161" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality2 all" data-cat="hospitality2">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/jigar.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Jigar Chavada</a>
                                    <span class="text-category">Executive, Web Operations</span>
                                    <p class="text">
                                            +91-9594881428
                                            <br><br>
                                        <a href="https://www.facebook.com/jsc3998" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://in.linkedin.com/in/jsc39/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality3 all" data-cat="hospitality3">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/vinit.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Vinit Mankar</a>
                                    <span class="text-category">Head, Design</span>
                                    <p class="text">
                                            +91-7706020707
                                            <br><br>
                                        <a href="https://www.facebook.com/vinit.mankar?ref=br_rs" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/vinman003/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality3 all" data-cat="hospitality3">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/ajay.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Ajay Kudal</a>
                                    <span class="text-category">Executive, Design</span>
                                    <p class="text">
                                            +91-9828479060
                                            <br><br>
                                        <a href="https://www.facebook.com/ajay.kudal.395" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/ajay-kudal-ba874b161/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            <div class="portfolio hospitality3 all" data-cat="hospitality3">
                                    <div class="portfolio-wrapper"> 
                                            <div class="image">         
                                    <img src="team/sahibdeep.jpg"  onclick="void(0)" alt="" />
                                    </div>
                                    <div class="label">
                                    <div class="label-text">
                                    <a class="text-title">Sahibdeep Singh</a>
                                    <span class="text-category">Executive, Design</span>
                                    <p class="text">
                                            +91-8437300281
                                            <br><br>
                                        <a href="https://www.facebook.com/sahibdeept" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/in/sahibdeep-singh-9525b1158/" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </p>
                                    </div>
                                <div class="label-bg"></div>
                                </div>
                                </div>
                            </div>
                            
                                    
                            
                            


        </div>
         
    </div><!-- container -->
    <section id="footer">
            <div class="contents text-center">
                <div id="social">
                    <center>
                    <a href="https://www.facebook.com/iiicallahabad/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company/iiicallahabad/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="mailto:iiic@iiita.ac.in" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </center>
                </div>
                <center> 
                ©2018 IIIC<br/>
                All other trademarks and logos ® their respective owners.<br />
                Made with ♥ by <a class="footer-team-link" href="#">Team IIIC</a>
            </center>
            </div>
        </section>

</body>
</html>
