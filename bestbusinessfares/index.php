<!DOCTYPE html>
<!-- 
@author Venkatesh Javaji
-->
<html lang="en-us">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/bbf_02.png" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css"/>
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
        <!--to access global variable-->
        <script type="text/javascript" src="js/airportList.js"></script>
        <script type="text/javascript" src="js/basescript.js"></script>
        <link type="text/css" rel="stylesheet" href="css/mainTemplate.css"/>
        <title>Home | BestBusinessFares</title>
        <style>
            .carousel-caption{
                /* color:#e9ebed;*/
                float: right;
                right: 10%;
                left: 65%;
                top: 10%;
                width: 30%;
            }
            .table-borderless{
                border: none;
            }

            .table-borderless > th, td{
                padding: 10px;
            }
            .carind{
                width: 4%;
                background-color: transparent;
                background-image: none !important;
                top:300px;height:4%;opacity: 1;
            }
            label{
                font-weight: 100;
            }
            .checkvalid{
                border: 1px solid red;
            }
            .wardiv{
                color: #fff;
                background: #FF5722;
                padding-left: 5px;
                font-weight: bold;
                height: 20px;
                top: 45px;
                position: absolute;
                display: none;
            }
            .emaildiv{
                color: #fff;
                background: #398439;
                padding-left: 5px;
                font-weight: bold;
                height: 20px;
                top: 45px;
                position: absolute;
            }
            textarea{
                font-size: 15px !important;
            }
            .navbar {
                background-color: rgb(41, 35, 35);    
                margin-bottom: 0;
                border: none;
                border-radius: 0;
                height:70px;
            }
            .navbar-brand {
                color: #fff !important;
                font-family: cursive;
                display: block;
                position: absolute;
                top: -15px;
                left: 60px;
            }

            /* .nav-col>li>a {
                 font-weight: bold;
                 color:gold !important;
             }*/
            .navbar-nav>li>a{
                line-height: 40px !important;
                font-size: 16px !important;
                color:#fff !important;
            }
            .navbar-nav>.active>a{
                color:#0070ff  !important;
                line-height: 40px !important;
                font-size: 20px !important;
                font-weight: bold !important;
                background: none !important;

            }
            #quotation>td{
                width: 260px;
            }
            select.input-sm{
                color: #999999;
            }
        </style>
    </head>


    <?php
    if (isset($_GET["mail"]) && trim($_GET["mail"]) == "sent") {
        echo '<script language="javascript">';
        echo 'alert("mail has successfully sent")';
        echo 'document.location = "index.php"';
        echo '</script>';
    }
    ?>


    <body>
        <div class="body_wrap">

            <!--                        Header  Section Start                                          -->
            <div id="header">
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container-fluid" id="home">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand logo" href="index.php"><img src='img/bbf_logo_m.png' height="80px" width="285px" alt="BestBusinessFares"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-right nav-col" style="margin-right:0px !important;background-color:#292323">
                                <li class="active"><a href="#headertop">Home</a></li>
                                <li><a href="#samplefare">Sample Fare</a></li>
                                <li><a href="#howit">How it works</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contactus">Contact</a></li>
                                <li><a><img  width="50px" height="20px" src="img/us.svg" alt="USA"/>1-888-627-9403</a></li>
                                <li><a><img  width="50px" height="20px" src="img/au.svg" alt="AUS"/>1-628-666-0017</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--                        Header  Section End                                          -->

            <!--                        Carousel Form Section Start                                          -->
            <div class="body-out">
                <div id="headertop" class="">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators" style="display: none;">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src='img/ww-1.jpg' alt="Image">

                            </div>

                            <div class="item">
                                <img src='img/et.jpg' alt="Image">

                            </div>
                            <div class="item">
                                <img src='img/bk.jpg' alt="Image">

                            </div>  
                            <div class="item">
                                <img src='img/wy-1.jpg' alt="Image">

                            </div>  

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control carind"  href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control carind"  href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!--                        Carousel Form Section End                                          -->
                    <!--                        Quotation Form Section Start                                          -->
                    <div class="form-div" >
                        <div class="table-responsive form-table container">
                            <div class="col-xs-12 hidden-xs hidden-stb">
                                <!-- <h3 class="heading_delta heading RobotoLight"> Book <span class="hidden-xs">Domestic &amp; International</span> 
                                     Flight Tickets </h3>-->
                                <h3 class="heading_delta heading RobotoLight">Get a travel quote</h3>
                            </div>
                            <div class="wardiv">
                                <strong>Warning!</strong> please fill all the required fields before you click submit!!
                            </div>

                            <form name="quotation" id="quotation" class="form-group" action="email_handler.php"  method="post">
                                <table class="table-borderless">
                                    <tr>
                                        <td>
                                            <label class="radio-inline"><input type="radio" name="optradio" id="oneway" value="one" checked="checked"/><span>One way</span></label>
                                        </td> 
                                        <td>
                                            <label class="radio-inline"><input type="radio" name="optradio" id="twoway" value="round" /><span>Round trip</span></label>
                                        </td>
                                        <td>
                                            <label class="radio-inline"><input type="radio" name="optradio" id="multiway" value="multitrip" /><span>Multi City</span></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="firstname">First Name:</label>
                                            <input type="text" name="firstname" id="firstname" class="form-control input-sm" placeholder="Enter Firstname">
                                        </td>
                                        <td><label for="lastname">Last Name:</label>
                                            <input type="text" name="lastname"  id="lastname" class="form-control input-sm" placeholder="Enter Lastname"/></td>

                                        <td> <label for="email">Email:</label>
                                            <input type="email"  name="email"  id="email" class="form-control input-sm" placeholder="Enter Email"/></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="phoneCode">Country Code:</label>
                                            <select name="phonecode" id="phoneCode" class="form-control input-sm">	
                                                <option value="(+1)">United States &nbsp;(+1)</option>			  
                                                <option value="(+93)">Afghanistan &nbsp;(+93)</option>
                                                <option value="(+355)">Albania &nbsp;(+355)</option>
                                                <option value="(+213)">Algeria &nbsp;(+213)</option>
                                                <option value="(+376)">Andorra &nbsp;(+376)</option>
                                                <option value="(+244)">Angola &nbsp;(+244)</option>
                                                <option value="(+1-268)">Antigua and Barbuda &nbsp;(+1-268)</option>
                                                <option value="(+54)">Argentina &nbsp;(+54)</option>
                                                <option value="(+374)">Armenia &nbsp;(+374)</option>
                                                <option value="(+61)">Australia &nbsp;(+61)</option>
                                                <option value="(+43)">Austria &nbsp;(+43)</option>
                                                <option value="(+994)">Azerbaijan &nbsp;(+994)</option>
                                                <option value="(+1-242)">Bahamas &nbsp;(+1-242)</option>
                                                <option value="(+973)">Bahrain &nbsp;(+973)</option>
                                                <option value="(+880)">Bangladesh &nbsp;(+880)</option>
                                                <option value="(+1-246)">Barbados &nbsp;(+1-246)</option>
                                                <option value="(+375)">Belarus &nbsp;(+375)</option>
                                                <option value="(+32)">Belgium &nbsp;(+32)</option>
                                                <option value="(+501)">Belize &nbsp;(+501)</option>
                                                <option value="(+229)">Benin &nbsp;(+229)</option>
                                                <option value="(+975)">Bhutan &nbsp;(+975)</option>
                                                <option value="(+591)">Bolivia &nbsp;(+591)</option>
                                                <option value="(+387)">Bosnia and Herzegovina &nbsp;(+387)</option>
                                                <option value="(+267)">Botswana &nbsp;(+267)</option>
                                                <option value="(+55)">Brazil &nbsp;(+55)</option>
                                                <option value="(+673)">Brunei &nbsp;(+673)</option>
                                                <option value="(+359)">Bulgaria &nbsp;(+359)</option>
                                                <option value="(+226)">Burkina Faso &nbsp;(+226)</option>
                                                <option value="(+257)">Burundi &nbsp;(+257)</option>
                                                <option value="(+855)">Cambodia &nbsp;(+855)</option>
                                                <option value="(+237)">Cameroon &nbsp;(+237)</option>
                                                <option value="(+1)">Canada &nbsp;(+1)</option>
                                                <option value="(+238)">Cape Verde &nbsp;(+238)</option>
                                                <option value="(+236)">Central African Republic &nbsp;(+236)</option>
                                                <option value="(+235)">Chad &nbsp;(+235)</option>
                                                <option value="(+56)">Chile &nbsp;(+56)</option>
                                                <option value="(+86)">China, People's Republic of &nbsp;(+86)</option>
                                                <option value="(+57)">Colombia &nbsp;(+57)</option>
                                                <option value="(+269)">Comoros &nbsp;(+269)</option>
                                                <option value="(+243)">Congo, (Congo A? Kinshasa) &nbsp;(+243)</option>
                                                <option value="(+242)">Congo, (Congo A? Brazzaville) &nbsp;(+242)</option>
                                                <option value="(+506)">Costa Rica &nbsp;(+506)</option>
                                                <option value="(+225)">Cote d'Ivoire (Ivory Coast) &nbsp;(+225)</option>
                                                <option value="(+385)">Croatia &nbsp;(+385)</option>
                                                <option value="(+53)">Cuba &nbsp;(+53)</option>
                                                <option value="(+357)">Cyprus &nbsp;(+357)</option>
                                                <option value="(+420)">Czech Republic &nbsp;(+420)</option>
                                                <option value="(+45)">Denmark &nbsp;(+45)</option>
                                                <option value="(+253)">Djibouti &nbsp;(+253)</option>
                                                <option value="(+1-767)">Dominica &nbsp;(+1-767)</option>
                                                <option value="(+593)">Ecuador &nbsp;(+593)</option>
                                                <option value="(+20)">Egypt &nbsp;(+20)</option>
                                                <option value="(+503)">El Salvador &nbsp;(+503)</option>
                                                <option value="(+240)">Equatorial Guinea &nbsp;(+240)</option>
                                                <option value="(+291)">Eritrea &nbsp;(+291)</option>
                                                <option value="(+372)">Estonia &nbsp;(+372)</option>
                                                <option value="(+251)">Ethiopia &nbsp;(+251)</option>
                                                <option value="(+679)">Fiji &nbsp;(+679)</option>
                                                <option value="(+358)">Finland &nbsp;(+358)</option>
                                                <option value="(+33)">France &nbsp;(+33)</option>
                                                <option value="(+241)">Gabon &nbsp;(+241)</option>
                                                <option value="(+220)">Gambia, The &nbsp;(+220)</option>
                                                <option value="(+995)">Georgia &nbsp;(+995)</option>
                                                <option value="(+49)">Germany &nbsp;(+49)</option>
                                                <option value="(+233)">Ghana &nbsp;(+233)</option>
                                                <option value="(+30)">Greece &nbsp;(+30)</option>
                                                <option value="(+1-473)">Grenada &nbsp;(+1-473)</option>
                                                <option value="(+502)">Guatemala &nbsp;(+502)</option>
                                                <option value="(+224)">Guinea &nbsp;(+224)</option>
                                                <option value="(+245)">Guinea-Bissau &nbsp;(+245)</option>
                                                <option value="(+592)">Guyana &nbsp;(+592)</option>
                                                <option value="(+509)">Haiti &nbsp;(+509)</option>
                                                <option value="(+504)">Honduras &nbsp;(+504)</option>
                                                <option value="(+36)">Hungary &nbsp;(+36)</option>
                                                <option value="(+354)">Iceland &nbsp;(+354)</option>
                                                <option value="(+91)">India &nbsp;(+91)</option>
                                                <option value="(+62)">Indonesia &nbsp;(+62)</option>
                                                <option value="(+98)">Iran &nbsp;(+98)</option>
                                                <option value="(+964)">Iraq &nbsp;(+964)</option>
                                                <option value="(+353)">Ireland &nbsp;(+353)</option>
                                                <option value="(+972)">Israel &nbsp;(+972)</option>
                                                <option value="(+39)">Italy &nbsp;(+39)</option>
                                                <option value="(+1-876)">Jamaica &nbsp;(+1-876)</option>
                                                <option value="(+81)">Japan &nbsp;(+81)</option>
                                                <option value="(+962)">Jordan &nbsp;(+962)</option>
                                                <option value="(+7)">Kazakhstan &nbsp;(+7)</option>
                                                <option value="(+254)">Kenya &nbsp;(+254)</option>
                                                <option value="(+686)">Kiribati &nbsp;(+686)</option>
                                                <option value="(+850)">Korea, North &nbsp;(+850)</option>
                                                <option value="(+82)">Korea, South &nbsp;(+82)</option>
                                                <option value="(+965)">Kuwait &nbsp;(+965)</option>
                                                <option value="(+996)">Kyrgyzstan &nbsp;(+996)</option>
                                                <option value="(+856)">Laos &nbsp;(+856)</option>
                                                <option value="(+371)">Latvia &nbsp;(+371)</option>
                                                <option value="(+961)">Lebanon &nbsp;(+961)</option>
                                                <option value="(+266)">Lesotho &nbsp;(+266)</option>
                                                <option value="(+231)">Liberia &nbsp;(+231)</option>
                                                <option value="(+218)">Libya &nbsp;(+218)</option>
                                                <option value="(+423)">Liechtenstein &nbsp;(+423)</option>
                                                <option value="(+370)">Lithuania &nbsp;(+370)</option>
                                                <option value="(+352)">Luxembourg &nbsp;(+352)</option>
                                                <option value="(+389)">Macedonia &nbsp;(+389)</option>
                                                <option value="(+261)">Madagascar &nbsp;(+261)</option>
                                                <option value="(+265)">Malawi &nbsp;(+265)</option>
                                                <option value="(+60)">Malaysia &nbsp;(+60)</option>
                                                <option value="(+960)">Maldives &nbsp;(+960)</option>
                                                <option value="(+223)">Mali &nbsp;(+223)</option>
                                                <option value="(+356)">Malta &nbsp;(+356)</option>
                                                <option value="(+692)">Marshall Islands &nbsp;(+692)</option>
                                                <option value="(+222)">Mauritania &nbsp;(+222)</option>
                                                <option value="(+230)">Mauritius &nbsp;(+230)</option>
                                                <option value="(+52)">Mexico &nbsp;(+52)</option>
                                                <option value="(+691)">Micronesia &nbsp;(+691)</option>
                                                <option value="(+373)">Moldova &nbsp;(+373)</option>
                                                <option value="(+377)">Monaco &nbsp;(+377)</option>
                                                <option value="(+976)">Mongolia &nbsp;(+976)</option>
                                                <option value="(+382)">Montenegro &nbsp;(+382)</option>
                                                <option value="(+212)">Morocco &nbsp;(+212)</option>
                                                <option value="(+258)">Mozambique &nbsp;(+258)</option>
                                                <option value="(+95)">Myanmar (Burma) &nbsp;(+95)</option>
                                                <option value="(+264)">Namibia &nbsp;(+264)</option>
                                                <option value="(+674)">Nauru &nbsp;(+674)</option>
                                                <option value="(+977)">Nepal &nbsp;(+977)</option>
                                                <option value="(+31)">Netherlands &nbsp;(+31)</option>
                                                <option value="(+64)">New Zealand &nbsp;(+64)</option>
                                                <option value="(+505)">Nicaragua &nbsp;(+505)</option>
                                                <option value="(+227)">Niger &nbsp;(+227)</option>
                                                <option value="(+234)">Nigeria &nbsp;(+234)</option>
                                                <option value="(+47)">Norway &nbsp;(+47)</option>
                                                <option value="(+968)">Oman &nbsp;(+968)</option>
                                                <option value="(+92)">Pakistan &nbsp;(+92)</option>
                                                <option value="(+680)">Palau &nbsp;(+680)</option>
                                                <option value="(+507)">Panama &nbsp;(+507)</option>
                                                <option value="(+675)">Papua New Guinea &nbsp;(+675)</option>
                                                <option value="(+595)">Paraguay &nbsp;(+595)</option>
                                                <option value="(+51)">Peru &nbsp;(+51)</option>
                                                <option value="(+63)">Philippines &nbsp;(+63)</option>
                                                <option value="(+48)">Poland &nbsp;(+48)</option>
                                                <option value="(+351)">Portugal &nbsp;(+351)</option>
                                                <option value="(+974)">Qatar &nbsp;(+974)</option>
                                                <option value="(+40)">Romania &nbsp;(+40)</option>
                                                <option value="(+7)">Russia &nbsp;(+7)</option>
                                                <option value="(+250)">Rwanda &nbsp;(+250)</option>
                                                <option value="(+1-869)">Saint Kitts and Nevis &nbsp;(+1-869)</option>
                                                <option value="(+1-758)">Saint Lucia &nbsp;(+1-758)</option>
                                                <option value="(+1-784)">Saint Vincent and the Grenadines &nbsp;(+1-784)</option>
                                                <option value="(+685)">Samoa &nbsp;(+685)</option>
                                                <option value="(+378)">San Marino &nbsp;(+378)</option>
                                                <option value="(+239)">Sao Tome and Principe &nbsp;(+239)</option>
                                                <option value="(+966)">Saudi Arabia &nbsp;(+966)</option>
                                                <option value="(+221)">Senegal &nbsp;(+221)</option>
                                                <option value="(+381)">Serbia &nbsp;(+381)</option>
                                                <option value="(+248)">Seychelles &nbsp;(+248)</option>
                                                <option value="(+232)">Sierra Leone &nbsp;(+232)</option>
                                                <option value="(+65)">Singapore &nbsp;(+65)</option>
                                                <option value="(+421)">Slovakia &nbsp;(+421)</option>
                                                <option value="(+386)">Slovenia &nbsp;(+386)</option>
                                                <option value="(+677)">Solomon Islands &nbsp;(+677)</option>
                                                <option value="(+252)">Somalia &nbsp;(+252)</option>
                                                <option value="(+27)">South Africa &nbsp;(+27)</option>
                                                <option value="(+34)">Spain &nbsp;(+34)</option>
                                                <option value="(+94)">Sri Lanka &nbsp;(+94)</option>
                                                <option value="(+249)">Sudan &nbsp;(+249)</option>
                                                <option value="(+597)">Suriname &nbsp;(+597)</option>
                                                <option value="(+268)">Swaziland &nbsp;(+268)</option>
                                                <option value="(+46)">Sweden &nbsp;(+46)</option>
                                                <option value="(+41)">Switzerland &nbsp;(+41)</option>
                                                <option value="(+963)">Syria &nbsp;(+963)</option>
                                                <option value="(+992)">Tajikistan &nbsp;(+992)</option>
                                                <option value="(+255)">Tanzania &nbsp;(+255)</option>
                                                <option value="(+66)">Thailand &nbsp;(+66)</option>
                                                <option value="(+670)">Timor-Leste (East Timor) &nbsp;(+670)</option>
                                                <option value="(+228)">Togo &nbsp;(+228)</option>
                                                <option value="(+676)">Tonga &nbsp;(+676)</option>
                                                <option value="(+1-868)">Trinidad and Tobago &nbsp;(+1-868)</option>
                                                <option value="(+216)">Tunisia &nbsp;(+216)</option>
                                                <option value="(+90)">Turkey &nbsp;(+90)</option>
                                                <option value="(+993)">Turkmenistan &nbsp;(+993)</option>
                                                <option value="(+688)">Tuvalu &nbsp;(+688)</option>
                                                <option value="(+256)">Uganda &nbsp;(+256)</option>
                                                <option value="(+380)">Ukraine &nbsp;(+380)</option>
                                                <option value="(+971)">United Arab Emirates &nbsp;(+971)</option>
                                                <option value="(+44)">United Kingdom &nbsp;(+44)</option>
                                                <option value="(+598)">Uruguay &nbsp;(+598)</option>
                                                <option value="(+998)">Uzbekistan &nbsp;(+998)</option>
                                                <option value="(+678)">Vanuatu &nbsp;(+678)</option>
                                                <option value="(+379)">Vatican City &nbsp;(+379)</option>
                                                <option value="(+58)">Venezuela &nbsp;(+58)</option>
                                                <option value="(+84)">Vietnam &nbsp;(+84)</option>
                                                <option value="(+967)">Yemen &nbsp;(+967)</option>
                                                <option value="(+260)">Zambia &nbsp;(+260)</option>
                                                <option value="(+263)">Zimbabwe &nbsp;(+263)</option>
                                                <option value="(+995)">Abkhazia &nbsp;(+995)</option>
                                                <option value="(+886)">China, Republic of (Taiwan) &nbsp;(+886)</option>
                                                <option value="(+277)">Nagorno-Karabakh &nbsp;(+277)</option>
                                                <option value="(+1-303)">Northern Cyprus &nbsp;(+1-303)</option>
                                                <option value="(+1-161)">Pridnestrovie (Transnistria) &nbsp;(+1-161)</option>
                                                <option value="(+252)">Somaliland &nbsp;(+252)</option>
                                                <option value="(+995)">South Ossetia &nbsp;(+995)</option>
                                                <option value="(+61)">Christmas Island &nbsp;(+61)</option>
                                                <option value="(+61)">Cocos (Keeling) Islands &nbsp;(+61)</option>
                                                <option value="(+672)">Norfolk Island &nbsp;(+672)</option>
                                                <option value="(+687)">New Caledonia &nbsp;(+687)</option>
                                                <option value="(+689)">French Polynesia &nbsp;(+689)</option>
                                                <option value="(+262)">Mayotte &nbsp;(+262)</option>
                                                <option value="(+590)">Saint Barthelemy &nbsp;(+590)</option>
                                                <option value="(+590)">Saint Martin &nbsp;(+590)</option>
                                                <option value="(+508)">Saint Pierre and Miquelon &nbsp;(+508)</option>
                                                <option value="(+681)">Wallis and Futuna &nbsp;(+681)</option>
                                                <option value="(+682)">Cook Islands &nbsp;(+682)</option>
                                                <option value="(+683)">Niue &nbsp;(+683)</option>
                                                <option value="(+690)">Tokelau &nbsp;(+690)</option>
                                                <option value="(+44)">Guernsey &nbsp;(+44)</option>
                                                <option value="(+44)">Isle of Man &nbsp;(+44)</option>
                                                <option value="(+44)">Jersey &nbsp;(+44)</option>
                                                <option value="(+1-264)">Anguilla &nbsp;(+1-264)</option>
                                                <option value="(+1-441)">Bermuda &nbsp;(+1-441)</option>
                                                <option value="(+246)">British Indian Ocean Territory &nbsp;(+246)</option>
                                                <option value="(+357)">British Sovereign Base Areas &nbsp;(+357)</option>
                                                <option value="(+1-284)">British Virgin Islands &nbsp;(+1-284)</option>
                                                <option value="(+1-345)">Cayman Islands &nbsp;(+1-345)</option>
                                                <option value="(+500)">Falkland Islands (Islas Malvinas) &nbsp;(+500)</option>
                                                <option value="(+350)">Gibraltar &nbsp;(+350)</option>
                                                <option value="(+1-664)">Montserrat &nbsp;(+1-664)</option>
                                                <option value="(+290)">Saint Helena &nbsp;(+290)</option>
                                                <option value="(+1-649)">Turks and Caicos Islands &nbsp;(+1-649)</option>
                                                <option value="(+1-670)">Northern Mariana Islands &nbsp;(+1-670)</option>
                                                <option value="(+939)">Puerto Rico &nbsp;(+939)</option>
                                                <option value="(+1-684)">American Samoa &nbsp;(+1-684)</option>
                                                <option value="()">Baker Island &nbsp;()</option>
                                                <option value="(+1-671)">Guam &nbsp;(+1-671)</option>
                                                <option value="(+1-340)">U.S. Virgin Islands &nbsp;(+1-340)</option>
                                                <option value="(+852)">Hong Kong &nbsp;(+852)</option>
                                                <option value="(+853)">Macau &nbsp;(+853)</option>
                                                <option value="(+298)">Faroe Islands &nbsp;(+298)</option>
                                                <option value="(+299)">Greenland &nbsp;(+299)</option>
                                                <option value="(+594)">French Guiana &nbsp;(+594)</option>
                                                <option value="(+590)">Guadeloupe &nbsp;(+590)</option>
                                                <option value="(+596)">Martinique &nbsp;(+596)</option>
                                                <option value="(+262)">Reunion &nbsp;(+262)</option>
                                                <option value="(+340)">Aland &nbsp;(+340)</option>
                                                <option value="(+297)">Aruba &nbsp;(+297)</option>
                                                <option value="(+599)">Netherlands Antilles &nbsp;(+599)</option>
                                                <option value="(+47)">Svalbard &nbsp;(+47)</option>
                                                <option value="(+247)">Ascension &nbsp;(+247)</option>
                                                <option value="(+290)">Tristan da Cunha &nbsp;(+290)</option>

                                            </select>
                                        </td>
                                        <td>
                                            <label for="phone">Phone Number:</label>
                                            <input type="text" name="phonenumber" id="phone" class="form-control input-sm" placeholder="Phone number"/>
                                        </td>
                                        <td><label for="servicetype">Class of Service:</label>
                                            <select class="form-control input-sm" name="servicetype" id="servicetype">
                                                <option value="business">Business Class</option>
                                                <option value="firstclass">First Class</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td> <label for="npassengers">Number of Passengers:</label>
                                            <select class="form-control input-sm" name="npassengers" id="npassengers">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </td>
                                        <td class="oner">
                                            <div class="form-group ui-widget">
                                                <label for="fromcity">From(City/airport code):</label>
                                                <input type="text" name="fromcity" id="fromcity" class="form-control input-sm autocomplete" placeholder="From City/airport"/>
                                            </div>
                                        </td>
                                        <td class="oner">
                                            <div class="form-group ui-widget">
                                                <label for="tocity">To(City/airport code):</label>
                                                <input type="text" name="tocity" id="tocity" class="form-control input-sm autocomplete" placeholder="To City/airport"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="oner">
                                        <td>
                                            <label for="departuredate">Departure:</label>
                                            <input   name="departuredate" id="departuredate" class="departuredate form-control datepicker input-sm" placeholder="Departure Date"/>
                                        </td>
                                        <td>
                                            <label for="returndate">Return:</label>
                                            <input  type="text" name="returndate" id="returndate" class="returndate form-control datepicker input-sm" placeholder="Return Date"/>
                                        </td>
                                    </tr>


                                    <!-- Multi City rows START-->
                                    <tr class="multi1 multitr">
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="fromcity">From(City/airport code):</label>
                                                <input type="text" name="fromcity1" id="fromcity1" class="form-control input-sm autocomplete " placeholder="From City/airport"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="tocity">To(City/airport code):</label>
                                                <input type="text" name="tocity1" id="tocity1" class="form-control input-sm autocomplete " placeholder="To City/airport"/>
                                            </div>
                                        </td>

                                        <td style="display: block;margin-top: 0px;">
                                            <label for="departuredate">Departure:</label>
                                            <input   name="departuredate1" id="departuredate1" class="departuredate form-control datepicker input-sm " placeholder="Departue Date"/>
                                        </td>

                                    </tr>
                                    <tr class="multi2 multitr">
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="fromcity">From(City/airport code):</label>
                                                <input type="text" name="fromcity2" id="fromcity2" class="form-control input-sm autocomplete " placeholder="From City/airport"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="tocity">To(City/airport code):</label>
                                                <input type="text" name="tocity2" id="tocity2" class="form-control input-sm autocomplete " placeholder="To City/airport"/>
                                            </div>
                                        </td>

                                        <td style="display: block;margin-top: 0px;">
                                            <label for="departuredate">Departure:</label>
                                            <input   name="departuredate2" id="departuredate2" class="departuredate form-control datepicker input-sm " placeholder="Departue Date"/>
                                        </td>

                                    </tr>
                                    <tr class="multi3 multitr">
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="fromcity">From(City/airport code):</label>
                                                <input type="text" name="fromcity3" id="fromcity3" class="form-control input-sm autocomplete" placeholder="From City/airport"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="tocity">To(City/airport code):</label>
                                                <input type="text" name="tocity3" id="tocity3" class="form-control input-sm autocomplete" placeholder="To City/airport"/>
                                            </div>
                                        </td>

                                        <td style="display: block;margin-top: 0px;">
                                            <label for="departuredate">Departure:</label>
                                            <input   name="departuredate3" id="departuredate3" class="departuredate form-control datepicker input-sm" placeholder="Departue Date"/>
                                        </td>

                                    </tr>
                                    <tr class="multi4 multitr">
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="fromcity">From(City/airport code):</label>
                                                <input type="text" name="fromcity4" id="fromcity4" class="form-control input-sm autocomplete" placeholder="From City/airport"/>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group ui-widget">
                                                <label for="tocity">To(City/airport code):</label>
                                                <input type="text" name="tocity4" id="tocity4" class="form-control input-sm autocomplete" placeholder="To City/airport"/>
                                            </div>
                                        </td>

                                        <td style="display: block;margin-top: 0px;">
                                            <label for="departuredate">Departure:</label>
                                            <input   name="departuredate4" id="departuredate4" class="departuredate form-control datepicker input-sm" placeholder="Departue Date"/>
                                        </td>

                                    </tr>
                                    <!-- Multi City rows END-->


                                    <tr>
                                        <td colspan="3">
                                            <label for="comment">Comment:</label>
                                            <textarea class="form-control input-sm" rows="5" name="comment" id="comment"></textarea>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="3"><input type="submit" id="quotformsub" value="Submit" class="btn btn-default"></td>                        
                                    </tr>                   
                                </table>
                            </form>
                            <div class="quote-right">
                                <h2>50-70% OFF</h2>
                                <h3>on Business & First Class Tickets.</h3>
                                <h3>Lowest Fares guaranteed!</h3>
                                <h4>Please fill the form or call us for an instant quote!</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <!--                        Quotation Form Section End                                          -->

                <!--                        Sample Fares Section Start                                          -->
                <div id="samplefare" class="container-fluid">


                    <div class="container samfare">
                        <h1>SAMPLE FARES</h1>
                        <div id="clientsSlider"></div>
                        <div>  <h3>Business and First class flight deals to The Middle East</h3></div>
                        <div class="middleeast"></div>            
                        <div class="table-responsive middleeast-table">
                            <table class="table">

                                <tr>
                                    <th>City</th>
                                    <th>Business Class</th>
                                    <th>First Class</th>
                                </tr>
                                <tr>
                                    <th>Dubai</th>
                                    <td>$3152*</td>
                                    <td>$4168*</td>
                                </tr>
                                <tr>
                                    <th>Tel Aviv</th>
                                    <td>$2867*</td>
                                    <td>$3868*</td>
                                </tr>
                                <tr>
                                    <th>Dammam</th>
                                    <td>$3275*</td>
                                    <td>$3875*</td>
                                </tr>
                                <tr>
                                    <th>Amman</th>
                                    <td>$3348*</td>
                                    <td>$3827*</td>
                                </tr>
                                <tr>
                                    <th>Doha</th>
                                    <td>$2962*</td>
                                    <td>$3954*</td>
                                </tr>
                            </table>
                        </div>


                        <div><h3>Business and First class flight deals to Asia</h3></div>
                        <div class="asia"></div>
                        <div class="table-responsive asia-table">
                            <table class="table">

                                <tr>
                                    <th>City</th>
                                    <th>Business Class</th>
                                    <th>First Class</th>
                                </tr>
                                <tr>
                                    <th>Hong Kong</th>
                                    <td>$3156*</td>
                                    <td>$3980*</td>
                                </tr>
                                <tr>
                                    <th>Bangkok</th>
                                    <td>$3080*</td>
                                    <td>$3820*</td>
                                </tr>
                                <tr>
                                    <th>Singapore</th>
                                    <td>$3295*</td>
                                    <td>$4622*</td>
                                </tr>
                                <tr>
                                    <th>Tokyo</th>
                                    <td>$3012*</td>
                                    <td>$3902*</td>
                                </tr>
                                <tr>
                                    <th>Shanghai</th>
                                    <td>$3085*</td>
                                    <td>$3818*</td>
                                </tr>
                            </table>

                        </div>


                        <div> <h3>Business and First class flight deals to Australia & New Zealand</h3></div>
                        <div class="ausnew"></div>
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th>City</th>
                                    <th>Business Class</th>
                                    <th>First Class</th>
                                </tr>
                                <tr>
                                    <th>Brisbane</th>
                                    <td>$3826*</td>
                                    <td>$4626*</td>
                                </tr>
                                <tr>
                                    <th>Melbourne</th>
                                    <td>$3882*</td>
                                    <td>$4835*</td>
                                </tr>
                                <tr>
                                    <th>Sydney</th>
                                    <td>$3957*</td>
                                    <td>$4898*</td>
                                </tr>
                                <tr>
                                    <th>Perth</th>
                                    <td>$4420*</td>
                                    <td>$4981*</td>
                                </tr>
                                <tr>
                                    <th>Auckland</th>
                                    <td>$3898*</td>
                                    <td>$4993*</td>
                                </tr>
                            </table>

                        </div>

                        <div><h3>Business and First class flight deals to Europe</h3></div>
                        <div class="europe"></div>
                        <div class="table-responsive"><table class="table">

                                <tr>
                                    <th>City</th>
                                    <th>Business Class</th>
                                    <th>First Class</th>
                                </tr>
                                <tr>
                                    <th>Milan</th>
                                    <td>$2610*</td>
                                    <td>$3310*</td>
                                </tr>
                                <tr>
                                    <th>Amsterdam</th>
                                    <td>$2678*</td>
                                    <td>$3420*</td>
                                </tr>
                                <tr>
                                    <th>Rome</th>
                                    <td>$2695*</td>
                                    <td>$3480*</td>
                                </tr>
                                <tr>
                                    <th>London</th>
                                    <td>$2715*</td>
                                    <td>$3615*</td>
                                </tr>
                                <tr>
                                    <th>Paris</th>
                                    <td>$2788*</td>
                                    <td>$3415*</td>
                                </tr>
                            </table>

                        </div>

                        <div>     <h3>Business and First class flight deals to US & Canada</h3></div>
                        <div class="uscanada"></div>
                        <div class="table-responsive"><table class="table">

                                <tr>
                                    <th>City</th>
                                    <th>Business Class</th>
                                    <th>First Class</th>
                                </tr>
                                <tr>
                                    <th>Los Angeles</th>
                                    <td>$3847*</td>
                                    <td>$4629*</td>
                                </tr>
                                <tr>
                                    <th>San Francisco</th>
                                    <td>$3886*</td>
                                    <td>$4832*</td>
                                </tr>
                                <tr>
                                    <th>Miami</th>
                                    <td>$3985*</td>
                                    <td>$4967*</td>
                                </tr>
                                <tr>
                                    <th>New York</th>
                                    <td>$4263*</td>
                                    <td>$4999*</td>
                                </tr>
                                <tr>
                                    <th>Vancouver</th>
                                    <td>$3963*</td>
                                    <td>$4998*</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>

                <!--                        Sample Fares Section End                                          -->

                <!--                        How It Works Section Start                                          -->
                <div id="howit" class="howit container-fluid">
                    <div class="container">
                        <div class="page-header hwit"><h1>How it works</h1></div>
                        <div class="hwcn col-sm-12">
                            <div class="col-sm-12">
                                <h4 class="widget-title ma"><span class="glyphicon glyphicon-chevron-right"></span>How it works with BestBusinessFares ?</h4>
                                <p>BBF is a travel agency specializing in mileage tickets for discounted first and business class air travel. We are usually thousands of dollars (pounds and euros) cheaper than the retail price.


                                </p><h4 class="widget-title ma"><span class="glyphicon glyphicon-chevron-right"></span>How does BBF manage to offer airfares at such reduced costs?</h4>
                                <p>BBF has contracts with many major corporations and manufacturers that purchase their supplies through credit card, thus accumulating millions of frequent flyer miles. The corporations and manufacturers then sell these miles to BBF. Subsequently, BBF resells those miles to their customers as first and business class award air tickets.


                                </p><h4 class="widget-title ma"><span class="glyphicon glyphicon-chevron-right"></span>Is selling miles legal?</h4>
                                <p>Yes. Although the airlines may be displeased with this kind of activity, as they lose thousands of dollars on each award ticket purchased; it is 100% legal. Any rightfully earned personal or business miles, may be redeemed however the owner sees fit. Major airlines would benefit by having the customers accumulate miles and then simply having them expire.

                                </p><h4 class="widget-title ma"><span class="glyphicon glyphicon-chevron-right"></span>How much time in advance do I need to book prior to my flying date?</h4>
                                <p>Since these tickets are award/mileage seats the earlier you book the better. This is how it works - every airline releases between 6-9 award seats on each of their flights, in each class. The seats can be booked with miles as early as 12 months in advance.


                                </p><h4 class="widget-title ma"><span class="glyphicon glyphicon-chevron-right"></span>Will I earn miles and points on flights booked through BBF?</h4>
                                <p>Unfortunately, you do not earn miles on award/mileage tickets. That is the one and only difference between these tickets and the usual retail tickets that would cost you 50-70% more.
                                </p><h4 class="widget-title ma"><span class="glyphicon glyphicon-chevron-right"></span>Will I 'always' save at least 50% on first &amp; biz class airfares?</h4>
                                <p>Our goal is to answer yes to this; however, realistically it is not always possible. For example, if there is a published retail fare on KAYAK of $2,500 USD roundtrip from LAX to FRA in business class we have no way of competing with this.

                                </p></div>
                        </div>

                    </div>
                </div>
                <!--                        How It Works Section End                                          -->




                <!--                        ABOUT Section Start                                          -->    
                <div id="about" class="aboutus container-fluid">
                    <div class="container">
                        <div class="page-header abthd"><h1>About Us</h1></div>
                        <div class="col-sm-12 abcn">
                            <!--<img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
                            <div class="well about-one">
                                <p>Since its inception in 2014, BEST BUSINESS FARES has become synonymous with incredibly low 
                                    discount air fares and hassle-free bookings. We Continued to strengthen our position as 
                                    the Growing full-service travel agency in New Zealand.</p>

                                <p>Personalized service has always been one of the core elements of our success. 
                                    we work around the clock to find affordable First Class and Business Class Airfare for 
                                    busy professionals just like you. We're committed to showing you just how hassle free 

                                    booking your travel plans can be. At BestBusinessFares.com we do all of the hard work 
                                    for you, like finding and comparing airfare prices and coordinating your travel itinerary.</p>

                                <p>We focus on what's most important - your business and your family.
                                    Not only will we make booking First Class and Business Class airfare simple and straightforward,
                                    we'll also help you save 30% to 75% off of Business Class and First Class fares.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 abcn">
                            <!--<img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
                            <div class="well about-one"> 
                                <h3>Travel</h3>
                                <p>Traveling in comfort has never been simpler. BEST BUSINESS FARES is your one stop shop 
                                    for finding affordable and most comfortable Business and First Class Airfare available on the market.</p>
                            </div>

                        </div>
                        <div class="col-sm-12 abcn">
                            <div class="well about-two">
                                <h3>BUSINESS CLASS AIRLINE TICKETS</h3>
                                <p>
                                    Travel safe and comfortable on Business Class flights! Whether you undertake short-distance 
                                    travel or long distance, the preference is always to reach the destination rejuvenated and 
                                    relaxed. Flying business class offers you the opportunity to make the most of the journey.</p>

                                <p>Business Class flights abound in world-class lounge, multi-course meals, Internet access, private screens
                                    and entertainment systems. Pamper yourself with a massage at selected airports or enjoy a flat bed in the
                                    sky and a personal mood lighting system, available on selected airlines and routes. Explore cheap business class 
                                    flight deals on BestBusinessfares and enjoy traveling like never before.</p>

                                </p>
                                <ul><li>A spacious seat, which converts into a fully flat bed</li>


                                    <li>Delicious food and drink options using fresh, local ingredients</li>


                                    <li>Access to private lounges and luxurious spa treatments</li>


                                    <li>Dedicated check-in desks and priority boarding</li>
                                </ul>

                            </div>

                        </div>
                        <div class="col-sm-12 abcn">
                            <div class="well about-two">
                                <h3>FIRST CLASS AIRLINE TRAVEL</h3>
                                <p>
                                    Your First suite is a haven of style and comfort where sophisticated and contemporary
                                    British design meet impeccable service and attention to detail.
                                    Whether you want to unwind or get down to business, you'll find you're equally well equipped:
                                </p>
                                <ul>
                                    <li>Your own private, spacious suite</li>
                                    <li>A fully flat bed with mattress and duvet</li>
                                    <li>Delicious and indulgent dining</li>
                                    <li>Access to luxurious lounges and spa treatments</li>
                                    <li>Exclusive and attentive service</li>

                                </ul>
                            </div></div>
                    </div>
                </div>

            </div>

            <!--                        ABOUT Section End                                          -->

            <!--                        FOOTER Section        START                                 -->
            <div class="footer-out">
                <footer class="container-fluid footer-div">
                    <!-- Contact div-->
                    <div class="contactusdiv container-fluid" id="contactus">
                        <div class="container contcon">
                            <div class="cuhd"><h1>Contact Us</h1></div>
                            <div class="col-sm-4">
                                <h3>Best Business Fares</h3>
                                <ul>
                                    <li>67A, Second Avenue,</li>
                                    <li>Kingsland, Auckland,1021,</li>
                                    <li> New Zealand.</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h3 style="height: 25px;"></h3>
                                <p><span class="glyphicon glyphicon-earphone"></span> 1-888-627-9403</p>
                                <p><span class="glyphicon glyphicon-earphone"></span> 1-628-666-0017</p>
                                <p><span class="glyphicon glyphicon-envelope"></span> Email:&nbsp;&nbsp;info@bestbusinessfares.com</p>
                                <p><span class="glyphicon glyphicon-globe" ></span> Website:&nbsp;&nbsp; www.bestbusinessfares.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- Google Map Start--->

                    <div class="container mapdiv">
                        <h4>We are located @: &nbsp;<span class="glyphicon glyphicon-map-marker"></span></h4>
                        <div id="bbfmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.7974846148913!2d174.73624881492518!3d-36.87126597993399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47af6c71228b%3A0x4ddcfdc48d05bb3e!2s67A+Second+Ave%2C+Kingsland%2C+Auckland+1021%2C+New+Zealand!5e0!3m2!1sen!2sin!4v1473993627590" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <!-- Google Map End--->

                    <div class="container">

                        <div class="col-sm-12 left footertext">
                            © 2016  <a href="http://www.bestbusinessfares.com" title="BestBusinessFares">BestBusinessfares.com</a>. All Rights Reserved.
                        </div>
                    </div>
                </footer>
            </div>

            <!--                        FOOTER Section      END          -->

        </div>
    </body>

</html>