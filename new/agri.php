<?php

    session_start();

    if(isset($_POST['logout'])) {

        $_SESSION['name'] = '';

        $_SESSION['vid'] = '';

        $_SESSION['mobile'] = '';

        echo "<script> location.href='index.php' </script>";

    }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AGRICULTURE</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!--jQuery 1.12.4-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	
    <style type="text/css">

        .navbar-brand:hover {

            font-size: 150%;

        }

        .nav-text:hover {

          font-size: 110%;

        }

        .nav-text {

            color: #E0A108;

        }
        .tabs {

            float:left;
            background-color: #BDE0FF; /* Green */
            font-size:15px;
             border: 1px solid transparent;
            border-radius:2px;
            color:black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;


        }
        .tabs {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.tabs:hover {
    background-color: #FF3D0A;
    color: black;
}

        .tab {

            background-color: #BDE0FF; /* Green */
            font-size:15px;
             border: 1px solid transparent;
            border-radius:2px;
            color:black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        .tab {
             -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
           }

        .tab:hover {
        background-color: #FF3D0A; /* Green */
         color:black;
           }
           @media screen and (max-width: 480px) {
           .tabs {
           background-color: #FF3D0A;
           float:left;
           }
           }
           @media screen and (max-width: 480px) {
           .tab {
             background-color:#FF3D0A;
            }
              }
              @media screen and (max-width: 480px){
                .mar1 {
                    margin: 0px 10px 0px 10px;
                }

              }
              @media screen and (max-width: 480px){
                .mar2 {
                    margin: 0px 10px 0px 10px; 
                }

              }
              #donate {
                                        
                background: none repeat scroll 0 0 #FFD600;
                border: 1px solid transparent;
                border-radius: 4px;
                color: #000;
                font-size: 14px;
                font-weight: bold;
                line-height: 1.71429;
                margin-bottom: 0;
                margin-top: 15px;
                padding: 6px 12px;
                text-align: center;
                text-transform: uppercase;
                vertical-align: middle;
                            
                            }
                            #donate span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                }

                #donate span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                #donate:hover span {
                padding-right: 25px;
                }

                #donate:hover span:after {
                opacity: 1;
                right: 0;
                }
                .click {
                                        
                background: none repeat scroll 0 0 #FFD600;
                border: 1px solid transparent;
                border-radius: 4px;
                color: #000;
                font-size: 14px;
                font-weight: bold;
                line-height: 1.71429;
                margin-bottom: 0;
                margin-top: 15px;
                margin-bottom:30px;
                padding: 6px 12px;
                text-align: center;
                text-transform: uppercase;
                vertical-align: middle;
                            
                            }
                            .click span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                }

                .click span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                .click:hover span {
                padding-right: 25px;
                }

                .click:hover span:after {
                opacity: 1;
                right: 0;
                }
                .mar1 {
                    text-align: justify;
                     background-color: rgba(208,208,208,0.6);
                }
                .mar2 {
                    text-align: justify;
                     background-color: rgba(208,208,208,0.6);
                }
                 .mar3 {
                    text-align: justify;
                     background-color: rgba(208,208,208,0.6);
                }
                #topic {
                  margin-top:200px;
                  color: red;
                  font-size:70px;
                  text-align: center;
                  text-shadow: 4px 4px green;

                }
               
                .logout {

            border: none;
            background-color: Transparent;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.7); 
            margin-top: 7px;

        }

        .logout:hover {

            color: white;
            font-size: 90%;

        }
		
		.kaka{
		font-family: 'Orbitron', sans-serif;
		}

        @media screen and (max-width: 480px)
        {

            .logout {

                color: #222222;
                margin-left: -4px;

            }

        }

    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>

<body id="page-top" style="background-image:url('img/baba.jpg');background-position:center; background-repeat: repeat-y; background-size: 2000px 1000px;">


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #FFFFD9;">
      <div class="container heading_container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><span style="color: #FF9900;">Power in your hands</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <form method="post">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="health.php"><span class="nav-text">Health</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services"><span class="nav-text">Education</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Agriculture</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><span class="nav-text">Power</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="waste.php"><span class="nav-text">Sewage</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="job.php"><span class="nav-text">Jobs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="sell.php"><span class="nav-text">Sell Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="buy.php"><span class="nav-text">Buy Crop</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="donate.php"><span class="nav-text">Donate</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php"><span class="nav-text">Contact</span></a>
            </li>
            <li class="nav-item">
              <?php

                  if(!empty($_SESSION['name']) OR !empty($_SESSION['vid'])) {

                      echo "<form method='post'><button class='logout' name='logout'><span class='nav-text'>LOG OUT</span></button></form>";

                  }

              ?>
          </li>
          </ul>
          </form>
        </div>
      </div>
    </nav>
    
    <div class="mar1" style="margin: 0px 250px 0px 100px;">
    <p class="kaka"id="topic">AGRICULTURE</p>
        <h1  style="margin-top:100px;text-shadow: 2px 2px green;">IRRIGATION TECHNIQUES </h1>
      <p>Raindrops are like liquid gold to farmers in the poorest countries of the world. Yet when the rains do come - and in many places they come erratically or with decreasing frequency - with no irrigation techniques available, most of that precious moisture is washed away, unused. Land is so dehydrated that they are unable to grow enough produce even to sustain their families, there seems to be no way out.</p>
      <p>Practical Action is working with communities to introduce simple yet effective irrigation systems to combat the issue. So instead of parched, dusty fields, there are life-giving gardens brimming with hearty fruit and vegetables or sturdy columns of maize, year after year.</p>
      
      <h2><button id="x1" class="color1 tabs">How it works</button></h2>
      <h2><button id="x2" class="color1 tabs">Impact</button></h2>
      <h2><button id="x3" class="color1 tab">Further Info</button></h2>
        
        <div class="t1">
                 <h2>Drip Irrigation</h2>
         <p >Even if rainfall is low or erratic, the drip irrigation<br> system enables farmers to nourish and grow the crops they need.</br></p>
        <p>This is how it works:</p>
        <ul >
            <li>A large, water harvesting tank in the village catches the rain and stores it.</li>
            <li>A farmer fills a 20-litre drip bucket and places it one metre above the ground on poles.</li>
            <li>The drip bucket is attached to a long hose that criss-crosses the crop field.</li>
            <li>Simple gravity provides enough pressure to force the water through the hose.</li>
            <li>Water drips through the holes in the hose, directly onto the roots of the plants.</li>
            <li>100-200 plants can be grown using just one drip bucket system</li>
        </ul >
        
        <h2>Treadle pump irrigation</h2>
        <p>Able to be operated by one or two adults, the treadle pump uses pedal power to suck water up from wells up to 7.5m deep at a rate of up to 18m3 per hour – that’s six times more water than from a traditional hand pump. What’s more, because leg muscles tire less than arm muscles, it can also be used by the farmers for longer. And because most of the parts are manufactured locally, it also brings much needed income to the local economy.</p>
        <p>The treadle pump can greatly increase the income that farmers generate from their land, both by extending the traditional growing season and by expanding the types of crops that can be cultivated.</p>
        <p>Able to be operated by one or two adults, the treadle pump uses pedal power to suck water up from wells up to 7.5m deep at a rate of up to 18m3 per hour – that’s six times more water than from a traditional hand pump. What’s more, because leg muscles tire less than arm muscles, it can also be used by the farmers for longer. And because most of the parts are manufactured locally, it also brings much needed income to the local economy.</p>
        </div>
        <!-- Imapact for treadle -->
        <div class="t2">
        <h2>A new home for Phool</h2>
        <p>Phool Kumari lives in the Banke district of Nepal, with her husband, two children and a sister in law. Phool and her husband were barely able to provide two meals a day for their family. Earning to provide enough nutritious food, proper clothing and adequate shelter seemed more like a distant reality. But today things have changed after help from Practical Action's ILISSCON project: Phool has a regular source of income from selling vegetables produced in her leased land.</p>
        <p>“The project provided us training on nursery management, seasonal and off seasonal commercial vegetable production and group management. We also received seeds, fertilisers, water cane and other supporting materials. They even installed a treadle pump in my farm” she explains.</p>
        <p>This is one of the many successful cases of the ILISSCON project. For Phool and her husband the leasehold farming has proved to be fruitful in many ways.</p>
        <p>“With vegetable farming we earn around NPR. 20,000 (£156) per season. With this income I am paying tuition fee for my children and sister in law. We are able to buy enough food and clothes. We even bought an ox,” she claims.</p>
        <p>The project has installed a treadle pump in Phool’s farm; with the regular irrigation facility it has boosted the vegetable production. The treadle pump is an appropriate option for irrigation as it pumps more water than a hand pump. The project also provided treadle pump operation and maintenance training to the farmers.</p>
        <p>“The leased land has given us a lot. Before we used to sell wooden logs and earned very less. But now we have made so much profit that we have leased another piece of land where we have planted paddy. The treadle pump is exactly what we needed to boost our production, she affirms.”</p>
        <p>Phool is now building a new house for her family: “I am relieved because of the sustainable income. We cannot wait to move into our new home.”</p>
        <h2>How Mahima Gharti rescued her community through farming</h2>
        <p>Forced to flee from conflict in her native village, Mrs Mahima Gharti migrated to the Shanti-tole settlement in Kathmandu with her family to start afresh. But soon their dreams lay in tatters. Saline had rendered the 1/6th hectare of land they had bought barren. Faced with a heartbreaking choice, Mahima’s husband was forced to leave his family behind and migrate to India to find work. Mahima was left to work as a labourer – and bring up their five children – alone.</p>
        <p>But after hearing Practical Action staff talk at a village meeting, Mahima was determined to turn things around. After forming a women’s farming group in Shanti-tole with five of the poorest families in the settlement, they found a suitable plot and set to work.</p>
        <p>With the help of Practical Action, the women are now skilled in vegetable and seed cultivation. As Mahima told us, “We used to scatter seeds but, after training, I now know how to make nurseries and transplant into the main field.” To her and her children’s delight, this meant her husband could return home, where he now works the land using a treadle pump. Mahima’s farming group have now set up a savings plan and are able to produce at least three crops a year. Mahima expects to earn around NPRs 10,000 a year (around £75) from her hard work – money that means her family will be able to stay together.</p>
        </div>
        <!-- How can you help-->
        <div class="t3">
    <p><strong>Rs 100</strong> could buy 100g of cauliflower seeds</p>
    <p><strong>Rs 200</strong> could pay for 200 polybags to help farmer germinate their seeds</p>
    <p><strong>Rs 500</strong> could buy five kid goats, which will provide nutritious milk for a family</p>
    <p><strong>Rs 620</strong> could pay for a treadle pump – pumping vital water at a rate of 18m<sup>3</sup> an hour</p>
    <p><strong>Rs 1000</strong> could fund a pedal water pump to irrigate a large plot of land up to 1000m<sup>2</sup></p>
     <button href="donate" id="donate" style="vertical-align:middle"><span>DONATE </span></button>        </div>
   </div>
   </div>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
         integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
         crossorigin="anonymous"></script>
        <script type="text/javascript">

        $(".t1").hide();
        $(".t2").hide();
        $(".t3").hide();
        $("#x1").click(function() {
            $(".t2").hide();
            $(".t3").hide();
            $(".t1").show();
             $(".t4").hide();
        $(".t5").hide();
        $(".t6").hide();
        });
        $("#x2").click(function() {
            $(".t1").hide();
            $(".t3").hide();
            $(".t2").show();
             $(".t4").hide();
        $(".t5").hide();
        $(".t6").hide();
        });
        $("#x3").click(function() {
            $(".t1").hide();
            $(".t2").hide();
            $(".t3").show();
             $(".t4").hide();
        $(".t5").hide();
        $(".t6").hide();
        });
        $(".color1").click(function() {
            $(this).css("background-color","#FF3D0A");
        });
        $("#x1").click(function(){
            $("#x2").css("background-color","#BDE0FF");
        });
        $("#x1").click(function(){
            $("#x5").css("background-color","#BDE0FF");
        });
        $("#x1").click(function(){
            $("#x4").css("background-color","#BDE0FF");
        });
        $("#x1").click(function(){
            $("#x6").css("background-color","#BDE0FF");
        });
        $("#x1").click(function(){
            $("#x3").css("background-color","#BDE0FF");
        });
         $("#x2").click(function(){
            $("#x1").css("background-color","#BDE0FF");
        });
         $("#x2").click(function(){
              $("#x3").css("background-color","#BDE0FF");

        });
        $("#x2").click(function(){
            $("#x5").css("background-color","#BDE0FF");
        });
        $("#x2").click(function(){
            $("#x4").css("background-color","#BDE0FF");
        });
        $("#x2").click(function(){
            $("#x6").css("background-color","#BDE0FF");
        });
         $("#x3").click(function(){
            $("#x1").css("background-color","#BDE0FF");
        });
         $("#x3").click(function(){
            $("#x2").css("background-color","#BDE0FF");
        });
         $("#x3").click(function(){
            $("#x5").css("background-color","#BDE0FF");
        });
        $("#x3").click(function(){
            $("#x4").css("background-color","#BDE0FF");
        });
        $("#x3").click(function(){
            $("#x6").css("background-color","#BDE0FF");
        });
       
           
        </script>
    

   
        <!--NEXT HEADING AFTER SEE MORE-->

         <div  class="mar2" style="margin:50px 250px 100px 100px;">
        <h1 style="text-shadow: 2px 2px green; margin:80px 250px 100px 100px;">RAINWATER HARVESTING</h1>
        <p>Rain water harvesting is one of the most effective methods of water management and water conservation. It is the term used to indicate the collection and storage of rain water used for human, animals and plant needs. It involves collection and storage of rain water at surface or in sub-surface aquifer, before it is lost as surface run off. The augmented resource can be harvested in the time of need.</p>
        
        <h2><button id="x4" class="color2 tabs">How it works</button></h2>
        <h2><button id="x5" class="color2 tabs">Impact</button></h2>
        <h2><button id="x6" class="color2 tab">Further Info</button></h2>
      
      <div class="t4">
        <h2>How Practical Action are helping the people feeling the effects of climate change</h2>
        <p>Climate change is disrupting the world’s rainfall patterns, meaning some parts of <br>the developing world are suffering from a drastic drop leading to a fall in water levels in many reservoirs and rivers.</br> In sub-Saharan Africa, 90% of agriculture is rain-fed, making it even more vulnerable to changing weather patterns.</p>
        </div>

        <!--How it works-->
        <div class="t5">
        <h2>Rainwater for irrigation</h2>
        <p>By constructing ridges of soil along the contours of fields, rainfall is held back from running off the hard-baked soils too quickly, so that crops have enough water to grow. Even when rainfall levels are low, families can harvest enough food.</p>
        <p>Precious rainwater can also be captured and stored in tanks so that even on the driest of days, there will always be a water source for the important irrigation of crops.</p>
        <p>Facilities installed have included both above and below ground rainwater catchment tanks, with the water collected from roofs of buildings, dams and channels for irrigation purposes, and improvement of ponds used for storing water.</p>
        <h2>Rainwater for drinking</h2>
        <p>The villagers themselves have usually expressed a clear need for improving water collection and storage provision. The water facilities are usually largely built by the villagers themselves with some assistance from trained masons or builders. People consider obtaining improved access to water well worth the building effort.</p>
        </div>
        <!--Impact-->
        <div class="t6">
        <p>Tias Sibanda is Chairman of the Rainwater Harvesting coordinators in Ward 17, South Matebeleland, Zimbabwe. He is also one of the 100 farmer trainers. </p>
        <p>He cultivates 4.5 hectares of maize and also has a homestead plot of 2 hectares for sorghum. Before he was introduced to water harvesting techniques by Practical Action, he used to plant maize on the 4.5 hectares but frequently harvested nothing because of the drought. He was able to grow sorghum at h\is homestead, as the crop needs little water, but this provided insufficient food for himself and his family and they could only survive by buying food with the proceeds from selling livestock.</p>
        <p>He was one of the first farmers in the ward to build contours for conserving rainwater. This led to a big improvement in food supplies: last year, he had two crops of maize, the first producing 1.5 tonnes and the second 0.75 tonnes. He retained all of this for food and sold nothing. As a result, he no longer had to buy food and has sufficient stocks at home to last until next season. He calculates that he has avoided having to spend money on food equivalent to 12 goats. With a goat selling at some Z$300,000 (about £17), this means that he saved over £200.</p>
        <p>"Thanks to the water harvesting techniques shown to us by Practical Action," says Tias, "and with the contour field structures, we are now more ‘food secure’ and have no worries about soil loss. I am confident of further improvements in the future and, if the drought eases, would soon be able to sell some of my maize crop".</p>
        <button href="donate" id="donate" style="vertical-align:middle"><span>DONATE </span></button>
        </div>
        </div>
          
                          <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
         integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
         crossorigin="anonymous"></script>
        <script type="text/javascript">
         $(".t4").hide();
        $(".t5").hide();
        $(".t6").hide();
        $("#x4").click(function() {
            $(".t4").show();
            $(".t5").hide();
            $(".t6").hide();
            $(".t1").hide();
        $(".t2").hide();
        $(".t3").hide();
        });
        $("#x5").click(function() {
            $(".t4").hide();
            $(".t6").hide();
            $(".t1").hide();
        $(".t2").hide();
        $(".t3").hide();
            $(".t5").show();
        });
        $("#x6").click(function() {
            $(".t4").hide();
            $(".t5").hide();
            $(".t1").hide();
        $(".t2").hide();
        $(".t3").hide();
            $(".t6").show();
        });
        $(".color2").click(function() {
            $(this).css("background-color","#FF3D0A")
        });
        $("#x4").click(function(){
            $("#x5").css("background-color","#BDE0FF");
        });
        $("#x4").click(function(){
            $("#x1").css("background-color","#BDE0FF");
        });
        $("#x4").click(function(){
            $("#x2").css("background-color","#BDE0FF");
        });
        $("#x4").click(function(){
            $("#x3").css("background-color","#BDE0FF");
        });
        $("#x4").click(function(){
            $("#x6").css("background-color","#BDE0FF");
        });
        $("#x5").click(function(){
            $("#x4").css("background-color","#BDE0FF");
        });
        $("#x5").click(function(){
            $("#x6").css("background-color","#BDE0FF");
        });
        $("#x5").click(function(){
            $("#x1").css("background-color","#BDE0FF");
        });
        $("#x5").click(function(){
            $("#x2").css("background-color","#BDE0FF");
        });
        $("#x5").click(function(){
            $("#x3").css("background-color","#BDE0FF");
        });
        $("#x6").click(function(){
            $("#x4").css("background-color","#BDE0FF");
        });
        $("#x6").click(function(){
            $("#x5").css("background-color","#BDE0FF");
        });
        $("#x6").click(function(){
            $("#x1").css("background-color","#BDE0FF");
        });
        $("#x6").click(function(){
            $("#x2").css("background-color","#BDE0FF");
        });
        $("#x6").click(function(){
            $("#x3").css("background-color","#BDE0FF");
        });

          
        </script>
      <div class="mar3" style="margin:50px 250px 100px 100px;">
              <h1 style="text-shadow: 2px 2px green; margin:80px 250px 100px 100px;">FERTILIZER</h1>
<h1>Plant seed for Change</h1>
<p>Shivansh fertilizer brings dead soil back to life in one planting season, enabling farmers to reduce costs, increase yields, and make a decent living.</p>
<h2>WHY THIS MATTERS</h2>
<p>Many of the 2 billion poor farmers around the world fertilize their crops with a nitrogen fertilizer called urea, which was produced originally for industrial agriculture. Urea was introduced to poor small-scale farmers as a way to easily boost productivity, and many farmers abandoned their centuries-old farming traditions for this new promise. Unfortunately, when urea gets into the soil, it upsets the balance of soil microorganisms, which are essential for providing vitamins and minerals to growing plants. Destroying the soil ecosystem in this way creates a chain of negative outcomes:</p>
<li>Crops become more susceptible to disease because their immune systems are compromised—any body that’s weak attracts bugs—which prompts farmers to spend money on pesticides and herbicides;</li>
<li>Crop productivity declines when essential soil nutrients are diminished—which prompts farmers to use more fertilizer;</li>
<li>Crops that are sick or malnourished produce poor-quality seeds that cannot be planted the following season—which means farmers have to buy seed, some of which is GMO;</li>
<li>Crops are less nutritious because the plants are starving for nutrients—which furthers the problem of human malnutrition, especially among children;</li>
<li>Fields require more water because the water-holding capacity of the soil is significantly diminished when microbial life is destroyed—which prompts farmers to increase irrigation, resulting in depleted aquifers, increased run-off, and surface-level water pollution.</li>
<p>Many farmers that put their hope in urea now find themselves inescapably dependent on chemical fertilizers, pesticides, and GMO seeds, the combination of which degrades their soils, poisons their waters, harms their health, and diminishes their incomes. Because of these rising costs, farmers are making a mere 2% profit, which only intensifies their poverty and food insecurity.</p>
<button class="click"> READ MORE </button>
<!--Logo-->
<div class="t7">
<h1>Shivansh Farming</h1>
<p>Billions of rural farmers are unable to make a living and care for their families.</p>
<p>We’re helping restore their livelihoods by teaching them to make their own fertilizer for free.</p>
<!--Image-->
<h1>THE SOLUTION</h1>
<h2>Shivansh Fertilizer</h2>
<p>Shivansh Fertilizer is a cost-free fertilizer that can transform unproductive land into a thriving farm, enabling farmers to reduce reliance on chemicals and increase profits. Shivansh Fertilizer is made by gathering whatever is laying around—dry plant materials, fresh grass, crop residues, animal manure—and then using a simple-to-follow layering method to construct a shoulder-high pile. Besides having to tend to the pile every other day, Nature does all the work. After 18 days, the result is a nutrient-rich fertilizer with a high concentration of soil microorganisms. Integrating the fertilizer into a field can bring dead soil back to life within the first planting season. Shivansh Fertilizer has the potential to revolutionize life for farmers around the world.</p>
<h1>WHY IT WORKS</h1>
<h2>Getting Back to the Fundamentals</h2>
<p>Shivansh farming is effective because it seeks to improve that which is most fundamental to agriculture: Soil. Healthy soil supports healthy plants. Healthy plants have strong immune systems and aren’t susceptible to pests and disease, which means less need for pesticides and herbicides. Healthy plants are highly productive and produce higher quality crops, which means more revenue and more nutritious food. Finally, healthier plants generate fruits with viable seeds, which means no more need to buy costly seeds.</p>
<!--Image--><!--Image-->
<h1>THE IMPACT</h1>
<h2>Results from the Field</h2>
<p>Field-testing with Shivansh Fertilizer began with 50 farms in India in 2016. Within a year it had spread virally to about 40,000 farms. The results have been stunning. Farmers who have replaced urea with Shivansh Fertilizer have reported both higher yields and higher quality crops. They’re using less pesticide because their plants are healthier. Their produce looks better and tastes better. They have visibly healthier kids because the kids are eating more nutritious food. Their irrigation requirements are lower because instead of 90 percent of water in a field evaporating, now 90 percent is being absorbed. Crops are producing functional seeds, which can be replanted to grow new crops, so farmers no longer have to buy seeds. Instead of burning farm waste, they’re turning it into fertilizer, which means less air pollution. Most importantly, the farmers are making a living, which is allowing them to send their kids to school, buy basic necessities, and experience higher quality of life. All of these benefits can be attributed to reinvigorating the soil with Shivansh Fertilizer.</p>
<h1>Fertilizer Instructions</h1>
<img src="https://www.tierversuche-verstehen.de/wp-content/uploads/2016/08/pdf.icon_.png" height="30px;" style="margin-left: 10px; margin-right: 10px;"><a href="ferti.pdf" download><span style="font-size: 120%;">Dowload PDF</span></a>
<br><br>
<!--download  link-->   
<embed href="ShivanshFertilizerBook-EN-web.pdf" > 
    </div>
    </div>

    
        

           
        
            <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
         integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
         crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(".t7").hide();
        $(".click").click(function() {
            $(".t7").show();
            $(".click").hide();
        });

          
        </script>


    </div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
 
