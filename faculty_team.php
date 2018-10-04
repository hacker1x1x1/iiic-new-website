<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Official Team</title>
    <meta name="author" content="">
    <meta property="og:Hint Team" content="static/logo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="static/css/normalize.css">
    <link rel="stylesheet" href="static/css/layout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    #footer {
    margin-top: 80px;
    background: -webkit-repeating-linear-gradient(top left, #2c2f2d 0%, #7f9097  100%);
    color: #fff;
}
    .portfolio img {
    width: 300px;
    height: 300px;
    position: relative;
    top: 0;
    -webkit-transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
    transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
}
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
        <div class="back"><a href="index.php"><h1><i class="fa fa-home" aria-hidden="true"></i></h1></a></div>
      
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
                    <center><a href="index.php"><img id="logo" src="iiic2.png" style="width :30%;
                    height :auto;"></a>
                   
                  <h1><font style="color : rgb(112, 112, 112) ;">Official Team</h1></div> 
                  </center> 
                </div>
                <div class="navbar">
                <div id="span">
                        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
                        <center style="font-size:25px; margin-top :-38px">Official Team</center>
                        <a href="index.php"><img id="logo" src="iiic2.png" style="width :60px; height :auto; margin-top : -30px;" align="right"></a>
                    </div>
                    
                </div>
    <div class="container">
        
        
        <div id="portfoliolist">
                
            <div class="portfolio finance all" data-cat="finance" >
                <div class="portfolio-wrapper" id="wrapper">
                    <div class="image">
                    <img src="assets/img/speakers/directorsir.jpg" width="300px" height="450px" onclick="void(0)" alt="" />
                </div>
                    <div class="label">
                            
                        <div class="label-text">
                            <a class="text-title">Prof. P. Nagabhushan</a>
                            <span class="text-category">Patron</span>
                            
                            <p class="text">
                                    532 2922222
                                    <br><br>
                                    
                                    
                        </p>
                        </div>
                        <div class="label-bg"></div>
                    </div>
                </div>
            </div>  
                            
                    <div class="portfolio finance all" data-cat="finance">
                            <div class="portfolio-wrapper">
                                    <div class="image">             
                                <img src="assets/img/speakers/tlahirisir.jpg" onclick="void(0)" alt="" />
                                </div>
                                <div class="label">
                                    <div class="label-text">
                                        <a class="text-title">Prof. Tapobrata Lahiri</a>
                                        <span class="text-category">Chairperson</span>
                                        <p class="text">
                                                9415648262
                                                <br><br>
                                                    
                                    </p>
                                    </div>
                                    <div class="label-bg"></div>
                                </div>
                            </div>
                        </div>  
                            <div class="portfolio management all" data-cat="management">
                                    <div class="portfolio-wrapper" id="wrapper">
                                        <div class="image">
                                        <img src="assets/img/speakers/kalasir.jpg" onclick="void(0)" alt="" />
                                    </div>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Dr. Rahul Kala</a>
                                                <span class="text-category">Faculty Advisor</span>
                                                <p class="text">
                                                        7054292063
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
                                        <img src="assets/img/speakers/ranjitSir.jpg" onclick="void(0)" alt="" />
                                    </div>
                                        <div class="label">
                                            <div class="label-text">
                                                <a class="text-title">Dr. Ranjit</a>
                                                <span class="text-category">Faculty Advisor</span>
                                                <p class="text">
                                                        532 2922180
                                                        <br><br>
                                                        <a href="https://www.facebook.com/slakhani12" target = "_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                        <a href="https://www.linkedin.com/in/sagar-lakhani" target = "_blank"><i style="color:white; font-size:2.5em;" class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </p>
                                            </div>
                                            <div class="label-bg"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="portfolio management all" data-cat="management">
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
                                </div>-->
                                
                            
                                    
                            
                            


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
