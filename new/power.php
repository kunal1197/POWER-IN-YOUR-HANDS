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

    <title>biogas</title>

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
    .man {
	
text-align:center;
	}
	
#t1{
	background-color: #D8FAD1;
}

#t2{
	background-color: #D8FAD1;
}
#t3{
	background-color: #D8FAD1;
}
#t4{
	background-color: #D8FAD1;
}
.mar {
                    text-align: justify;
                     background-color: rgba(210,210,210,0.5);
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

    </style>

    <!--bttn.css-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bttn.css/0.2.4/bttn.css">

  </head>

  <body id="page-top"  style="background-image: url('http://t.wallpaperweb.org/wallpaper/computer/1920x1200/Della_Nott_1920x1200.jpg');">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #FFFFD9;">
      <div class="container heading_container">
        <a class="navbar-brand js-scroll-trigger" href="index1.php"><span style="color: #FF9900;">Power in your hands</span></a>
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
              <a class="nav-link js-scroll-trigger" href="education.php"><span class="nav-text">Education</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="agri.php"><span class="nav-text">Agriculture</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#"><span class="nav-text">Power</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="waste.php"><span class="nav-text">Waste</span></a>
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

    <div class="mar" style="margin:100px 200px 0px 200px";>
      <h1 id="h1" style="text-align:center";>POWER GENERATION</h1>

<h2 class="man" style="margin:50px 200px 0px 200px"; id="biogas">BIOGAS</h2>
<p>Biogas is the product of breaking down organic matter in the absence of oxygen . It can be used in several ways, including generating electricity. The most common example of this is using biogas to fuel conventional engine-generator sets. These consist of an internal combustion engine coupled with an electrical generator, the rotary motion of the engine being transformed into electricity. Biogas can also be used to run other conversion technologies such as gas turbines, Stirling engines and some kind of or Fuel Cells, like illustrated in the figure</p>
<!--Image-->
<button id="x1" class="bttn-slant bttn-md bttn-primary man ">read more</button>
<div id="t1">
<img style="margin-left:300px;" src="https://4.imimg.com/data4/QP/RO/MY-5685352/commercial-biogas-plant-500x500.jpg">
<h3>1. Potential contribution to sustainable development</h3>
<h4>Global sustainable energy supply</h4>
<p>Technologies for the cogeneration of electric power and heat using biogas could play an important role in the global energy system, as they offer a suitable alternative to increasing the efficiency of the energy use of biomass. Cogeneration plants running on biogas are suitable options for the decentralised supply of electric power and heat and are able to respond to local fluctuations in energy demand.</p>
<p>There is significant energy potential in landfill gases, animal manure management or the organic fraction of municipal waste, but this remains under-exploited, particularly in developing countries. Biogas electric power technologies allow for these waste flows to be utilised effectively.</p>
<h4>Climate change mitigation</h4>
<p>Biogas-based electric power rather than electricity from fossil fuels is an option for reducing green house gas emissions. The positive effects are even greater if the biogas energy content is used in cogeneration systems and consumption of fossil fuel for heat is avoided.</p>
<p>Using biogas from organic waste flows may also make a very significant contribution to climate change mitigation. The natural decomposition of organic matter produces methane, which has a high global warming potential (25 times that of carbon dioxide). The global warming potential of these emissions is significantly reduced if the methane is used to generate electricity and heat.</p>
<h4>Millennium development goals</h4>
<p>Electric power from biogas represents a competitive option for ensuring decentralised access to electricity. The technology is available for small off-grid solutions to supply electricity to one or several users. This allows people and organisations to participate directly in their energy supply. Biogas electric power represents a powerful tool in addressing energy poverty.</p>
<h3>2. Environmental Issues</h3>
<p>Greenhouse gas emissions from biogas combustion are climate neutral. Other types of emissions are comparable with those from energy generation using natural gas (possibly the cleanest fossil fuel). Emissions standards can therefore be met under proper combustion conditions and with the use of conventional exhaust treatment systems.</p>
<h4>Overall emissions of greenhouse gases</h4>
<p>Greenhouse gas emissions from the biomass supply chain need to be taken into account in addition to operational emissions (which are climate neutral). These mainly include the mechanical preparation of soil, fertilisation, harvest and transport (see Environmental issues of Biomass Electric Power).</p>
<p>Emission levels are generally lowest when waste flows are used as substrates and highest when crop production involves extensive inputs and energy. The environmental effects can also be enhanced when heat losses are used productively and consumption of fossil fuel is avoided. The overall effects on the environment are therefore case specific.</p>
<h4>Systems using waste flows</h4>
<p>Absolute reductions in greenhouse gas emissions can be achieved in systems operating solely on waste flows. An analysis of German biogas cogeneration systems shows that a system using only manure is set to achieve a net reduction of greenhouse gases of around 850 g of CO2 (equivalent) emissions per kWh of electricity1. The net reduction results mainly from the lack of methane emissions that would be released in a conventional animal breeding system, without the treatment of manure, via anaerobic digestion.</p>
<h4>Systems using energy crops</h4>
<p>The same system using only corn to produce biogas is estimated to generate between 200 g and 260 g of CO2 (equivalent) emissions per kWh of electricity. This value still represents a sizeable reduction potential when compared with the overall emissions from efficient power plants driven by fossil fuels: i.e. over 900 g of CO2 (equivalent) per kWh of electricity in large coal facilities and over 400 g of CO2 (equivalent) per kWh of electricity in large combined cycle power plants running on natural gas2.</p>
<h3>3. Social Issues</h3>
<p>The application of biogas electric power technologies can help address social challenges, such as poverty reduction and waste disposal.</p>
<h4>Option for energy poverty</h4>
<p>Generating electric power from biogas is already being used as a technological solution to address energy poverty. The availability of equipment that is adapted to the needs of rural households or small communities allows people to participate directly in their own energy supply system, although some cultural factors may hamper the supply of substrates for the production of biogas:</p>
<li>Collecting animal manure may be difficult because of breeding activities that very often do not include closed stables for the animals.</li>
<li>Using domestic wastewater for biogas production may require additional work to make people aware of the suitability of the technology.</li>
<h4>Option for organic wastes</h4>
<p>Different kinds of organic waste flows (such as sewage, animal manure, industrial waste water or municipal waste) can be used as input to electricity generation. Using this type of waste is cleaner than using waste from uncontrolled disposal, which is still a critical social and environmental issue in developing countries, especially in or around large urban centres (mega cities).</p>
<h3>4. Development status and prospects</h3>
<p>Generating electric power from biogas is already a commercial standard. The main components required (the biodigester and the engine-generator set) are well known technologies and widely available.</p>
<h4>Technology for waste flows</h4>
<p>Using cogeneration units to utilise biogas from sewage plants is a common practice in many countries. Generating electric power from landfill gases has received special interest in developing countries, particularly because of the possibility of obtaining carbon credits by participating in the clean development mechanism (CDM).</p>
<h4>Electricity from energy crops</h4>
<p>Producing biogas from energy crops is becoming increasingly widespread in Europe. Around one-third of European biogas production in 2007 came from facilities using agricultural products. Cogeneration units are the preferred option3.</p>
<h4>Improvement potential</h4>
<p>Despite the maturity of these technologies, improvements are possible and even necessary in various areas: cleaning and upgrading the biogas, improving different types of substrates, integrated plant management (heat management) and improving conversion technologies (e.g. gas engines, micro turbines or fuel cells) to suit the properties of the biogas.</p>
<h4>Compact trigeneration units</h4>
<p>Further moves towards commercialising small and compact trigeneration units will allow for more effective use of biogas energy. Trigeneration units are a single source of electricity, heat and cooling. Technical improvements and cost-reductions must be made if small units that can cover building and household needs are to be commercialised. They must also be user-friendly.</p>
<h3>5. Economic Issues</h3>
<p>The biodigester and the generation set constitute the main investment outlay in terms of generating electric power using biogas. The resulting power generation costs depend heavily on the source of substrates. Biomass from waste flows often has no market price. The costs of substrates are negligible in such cases and only the costs of collection and transport activities need to be taken into account. The situation with energy crops is entirely different, however. The variability of market prices has a strong impact on the financial feasibility of a project.</p>
<h4>Capital costs of small applications</h4>
<p>The Energy Sector Management Assistance Program has assessed the costs of a small 60 kW electric power system4. The capital costs for such a system are between USD 2,260 and USD 2,720 per kilowatt (cost in 2004). These figures are not expected to vary significantly in the future, as the main cost factors (biodigester and engine-generator set) are mature technologies with low cost reduction potentials.</p>
</div>

 <h1 class="man" style="margin:100px 200px 0px 200px"; id="solar">SOLAR PHOTOVOLTAIC</h1>
      <p>Photovoltaic (PV) technologies convert solar radiation directly into electricity. The traditional building block for PV systems is the photovoltaic cell, a thin square plate or film of semiconductor material that measures around 10 cm x 10 cm. Solar radiation "falling" on the cell induces an electric voltage as a result of the photovoltaic effect. Several cells are interconnected and assembled in PV modules. These modules can be arranged in mounting structures in order to generate more power.</p>
     <button id="x2" class="bttn-slant bttn-md bttn-primary" class="man">read more</button>
      <div id="t2">
	  
	  <img style="margin-left:300px;" src="https://www.arc-ers.co.uk/wp-content/uploads/2015/01/solar-photovoltaic-3.jpg">
      <h2>1. Potential contribution to sustainable development</h2>
      
      <h3>Global sustainable energy supply</h3>
      <p>Photovoltaic technologies have the potential to make a significant contribution to electricity generation in the future. Photovoltaic systems are expected to meet between 6% and 12% of the global electric power demand in low carbon scenarios by 20501,2. On-grid distributed applications that are already available as well as future grid-connected technologies (such as systems integrated into buildings) are set to play the major role in these scenarios. To this end, the current pace of market development (average annual growth rate of 55% between 2005 and 2008)3 should be maintained or even increased.</p>
      <h3>Climate change mitigation</h3>
      <p>Photovoltaic technologies are already a suitable option for mitigating the emission of greenhouse gases from electric power generation, even taking into account the discharges from module fabrication, which still involves energy-intensive processes. The continuous development of more efficient fabrication technologies and different types of solar cell is expected to further enhance the climate change mitigation potential of photovoltaic systems.</p>
      <h3>Millennium development goals</h3>
      <p>Photovoltaic systems already represent an economically feasible solution for many off-grid applications. The necessary equipment and installations to provide off-grid electric power are relatively simple. Operation and maintenance can also be achieved at relatively low costs, which make photovoltaic technologies a powerful tool to address energy poverty.</p>
      <h2>2. Environmental Issues</h2>
      <p>The operation of photovoltaic technologies can be considered as emissions free. The technology's main environmental impact relates to the fabrication and later recycling and disposal of the photovoltaic devices.</p>
      <h3>Main determinants of greenhouse gas emissions</h3>
      <p>The level of greenhouse gas emissions per unit of energy generated by photovoltaic systems depends on four main factors:</p>
      <li>The fabrication technology.</li>
      <li>The energy mix used for the manufacturing process.</li>
      <li>The configuration of the Balance of System (BoS).</li>
      <li>The projected energy yield of the system during its whole life.</li>
      <h3>Overall greenhouse gases emissions</h3>
      <p>A lifecycle assessment of the on-grid silicon photovoltaic systems (without battery block) currently operating in Europe has estimated the total impact on climate change to be between 35 g and 92 g CO2 (equivalent) per kilowatt-hour generated4.</p>
      <p>The lower level is produced by a system operating in southern Europe (i.e. with an estimated annual production of 1,572 kWh/kWp) and using monocrystalline modules. The highest value is produced by a system installed in central Europe (with an estimated annual yield of 772 kWh/kWp) and using standard multicrystalline silicon modules.</p>
      <h3>Photovoltaic waste and recycling</h3>
      <p>Although the current flow of photovoltaic waste is rather insignificant (e.g. around four tons per year in Europe in 2008), the recycling and disposal of photovoltaic components is expected to become a crucial issue over the next ten years (e.g. around 35,000 tons per year in Europe by 2020).</p>
      <p>The sector seems to be aware of the challenge and some technologies have already been developed and tested5. These technologies allow not only for the glass and silicon to be recuperated, but also for the rare materials that are required in particular for the production of thin films, such as tellurium (Te), indium (In) and gallium (Ga), to be recovered. Recycling policies and regulations are expected to lead to the establishment of proper take-back systems in the biggest PV markets around the world.</p>
      <h2>3. Social Issues</h2>
      <p>In off-grid regions with no access to modern energy services, solar PV appliances (such as solar home systems for households, public buildings or health centres) can significantly change people's living conditions and social life</p>
      <h3>Better education and health conditions</h3>
      <p>PV systems can provide the necessary electricity for lighting or information systems in order to improve educational opportunities and teaching conditions. Electrification via solar PV can allow health centres to run cooling devices for vaccines, to sterilise and run medical equipment, and provide lighting for night-time operations. Access to electricity also helps attract health and social workers to work in poor rural areas. Information on preventable diseases can better be distributed via mass communication tools.</p>
      <h3>Communication and business options</h3>
      <p>Solar PV electricity can also improve communication, such as operating radios or recharging mobile phones. The latter is also a crucial economical factor, as it represents a source of income for small, recharging stations or makes business people more available. Even small, craft enterprises, such as hairdressers or tailors, can run equipment using solar PV electricity.</p>
      <p>However, there are clear limits as some businesses and industrial settlements cannot run on solar PV alone. Electricity output is relatively low in comparison to the high acquisition costs for the devices. Solar cells have to be imported, which leads to only limited local technology production and high import tariffs.</p>
      <h3>Gender issues</h3>
      <p>Better education, improved health conditions and small business opportunities can improve the living conditions of women in particular. Street lighting can also improve safety in urban settlements or unsafe areas and allow women to go out or go to work after sunset without fear of being attacked.</p>
      <h3>Lessons learned / critical aspects</h3>
      <p>The lessons already learned from solar PV programmes show that introducing PV systems can also have negative effects. Without appropriate regional maintenance and technical know-how, third-party funded solar cells have a limited lifespan or cannot be used if technical problems occur. Expectations of the devices may be too high if there is insufficient proper information and users may be disappointed when they see the limits of the systems.</p>
      <p>Only well-off people can afford expensive solar home  systems without the need to resort to third party funding. This leads to envy and increased social disparity. Theft of solar cells has also become an acute problem so security systems need to be installed.</p>
      <h2>4. Development status and prospects</h2>
      <p>The photovoltaic market has been experiencing impressive annual growth rates. Starting from a modest 1,500 MW in 2000, the global, cumulative installed capacity reached 13 GW in 20083. The PV market accounted for around 5.4 gigawatts (GW) in 2008 and some projections anticipate market levels of 10 GW per year by 2010.<p>
          <h3>Decisive political support</h3>
          <p>Investment costs for photovoltaic applications remain high. The rapid growth of the PV market has been driven by decisive political support. Initial PV support programmes were introduced in Japan, Germany and the USA, which in 2008 still had around 60% of global cumulative installed capacity. More countries have introduced programmes and legislation in recent years in a bid to make the PV market more attractive. Spain and South Korea are particularly prominent examples where the markets witnessed five-fold and six-fold increases respectively between 2007 and 2008.</p>
          <p>Technological developments are expected to address at least one of two main issues: cost reductions and the improvement of energy conversion efficiency.</p>
          <h3>Expected developments of crystalline silicon</h3>
          <p>Crystalline silicon commercial conversion efficiencies are expected to increase by more than 20% over the medium and long term. Significant increases in resource efficiency in the fabrication process are also expected, namely as a result of new manufacturing methods (such as the Ribbon-Growth-on-Substrate), by optimising energy and resource flows during the entire process (e.g. energy recuperation and material recycling) and by increasing the automation level of the process.</p>
          <h3>Expected development of thin films</h3>
          <p>The main advantages of thin films are the relatively low consumption of raw materials as well as the high level of automation and resource efficiency of the manufacturing process. These features translate into lower investment costs than is the case with crystalline silicon modules, but also into lower energy conversion efficiencies. The technology is relatively new and is expected to increase its market share significantly by 2020. In addition to improvements in the energy conversion efficiency and further enhancements of the fabrication process, one crucial challenge is the reduction or avoidance of the use of rare metals.</p>
          <h3>Concentrated photovoltaic technologies</h3>
          <p>Concentrated PV promises high conversion efficiencies of more than 20%. The need for rare materials becomes much less critical than in the case of other PV cell technologies because of the small size of the cells. Demonstration projects in Europe and the USA have proven the technical reliability of the systems. Investment costs are still not competitive, however. Implementing larger demonstration projects and establishing automated production lines may facilitate the commercial introduction of concentrated PV technology in the near future.</p>
          <h3>Third-generation photovoltaic technologies</h3>
          <p>A third generation of PV solutions is expected to come onto the market in the medium or long term. These new concepts are likely to be of two main types: very low cost devices that produce low or medium efficiencies and devices that offer very high conversion efficiencies (of more than 40%).</p>
          <h2>5. Economic Issues</h2>
          <p>Photovoltaic technologies have shown relatively high learning rates over recent decades. Cost reductions of 15% to 20% have been achieved by doubling the cumulative installed capacity. PV modules account for around 60% of the total investment costs required for a PV system. The average price of crystalline silicon modules on the spot market was between USD 2.5 and USD 3 per watt at the end of 2009.</p>
          <h3>Further reduction of prices</h3>
          <p>Assuming sustained learning rates, continued support for market development programmes and continued technological development, the average cost of PV modules could be below USD 2 in the near future.</p>
          <h3>Capital costs of PV systems</h3>
          <p>The size of the system and the Balance of System (BoS) required for the application have a major influence on the investment costs of a specific project. </p>
          <p>A report from the Energy Sector Management Assistance Program (ESMAP) of the World Bank analysed the costs of different kind of systems up to 2005 and their possible development up to 20157. Small stand-alone systems, including battery banks and power capacities below one kilowatt, show the highest average costs: around USD 7.5 per watt up to 2005 and USD 5.8 per watt by 2015.</p>
          <p>The graphic shows the changes in the anticipated capital costs of PV from two different perspectives, namely the changes in global average costs of PV modules in carbon-constrained scenarios according to the IEA1, and the probable range of investment costs for three different types of PV systems according to ESMAP.</p>  
</div>

    
    <h1 class="man" style="margin:100px 200px 0px 200px"; id="micro">MICRO-HYDRO</h1>
<p>Micro-hydro electric plants are technologies that are appropriate for the provision of electricity where the demand for power is relative low (e.g. below 100 kW) and a constant flow of running water is available . This is often the case in villages or industries located in rural regions. Micro-hydro projects are commonly designed in "run-of-river" schemes, i.e. configurations where only part of the water flow of a stream or river is deviated to drive the hydroelectric units.</p>
<button id="x3" class="bttn-slant bttn-md bttn-primary" class="man">read more</button>
<div id="t3">

<img style="margin-left:300px;" src="https://zmpulungan.files.wordpress.com/2013/10/tangga_dam_large.jpg">
<h2>1. Potential contribution to sustainable development</h2>

<h3>Global sustainable energy supply</h3>
<p>Micro-hydro technologies are appropriate options for providing clean and constant electric power by exploiting specifically local potentials. In regions where water flows are readily available, micro-hydro can be used to improve the provision of electricity or even cover the electric power needs of local populations and/or industries. The technology is suitable for feeding both off-grid configurations and grids in distributed schemes. Micro-hydro can therefore be an important component of the energy development plans of many countries</p>
<h3>Climate change mitigation</h3>
<p>The emissions associated with micro-hydroelectric power are marginal in comparison to the greenhouse gas emissions from conventional fossil fuel plants. In rural areas, micro-hydro represents an effective option to reduce or avoid the emission of greenhouse gases produced by small-scale power generation technologies based on fossil fuels, such as engines running on diesel.</p>
<h3>Millennium development goals</h3>
<p>Micro-hydropower is a powerful tool in addressing energy poverty issues. It is not only suitable for the energy demand of households, but also for local entrepreneurs, local governments, schools or health centres, as well as new initiatives that aim to stimulate further economic development.</p>
<p>Alongside the installation of mini-grids, micro-hydro is a preferred option to ensure access to electricity in rural areas.</p>
<h2>2. Environmental Issues</h2>
<p>Greenhouse gas emissions associated with the operation of micro-hydroelectric plants are considered to be marginal. However, the installation of a micro-hydro system involves changes in the natural water flow of the target stream or river and this can threaten habitats that depend on the natural supply of water. A thorough assessment of the environmental impacts is required.</p>
<h3>Changes of natural water flow</h3>
<p>The operation of micro-hydro plants involves modifications of the natural water flow. In the case of "run-of-river“ schemes, only a section of the stream will be used  (i.e. between the intake weir and the outflow of the turbine). In the case of schemes that use reservoirs, the operation of the plant affects the water flow downstream of the dam. </p>
<h3>Water flow management</h3>
<p>Changes in the water flow can have a critical impact on the habitats of local species (e.g. fishes, birds and mammals). Water management strategies should be developed where water flows are modified in order to guarantee the minimum supply of water needed to conserve the local ecosystems.</p>
<h2>3. Social Issues</h2>
<p>Micro-hydro is an energy supply option that can be managed by local entrepreneurs or organisations. They can therefore be important tools to foster local empowerment. Water is a key issue for many social and economical activities so the participation of local stakeholders before, during and after the implementation of micro-hydro projects is a critical issue.</p>
<h3>Local initiatives</h3>
<p>Micro-hydroelectric plants often form part of local initiatives to improve access to electricity among rural communities. In such cases, the power supply can also be managed and owned by locals, local entrepreneurs or organisations. Under this kind of scheme, the provision of energy becomes a key driver of economic and social development.</p>
<h3>Investment barrier</h3>
<p>However, the development of micro-hydroelectric projects requires significant investments, which in most cases exceeds the available capital of local communities. Rural communities also have very limited access to capital markets.</p>
<p>Introducing micro-hydro more widely requires the development of financing mechanisms adapted to rural realities. The most common scheme is partial or fully funding of the capital costs by government programmes or other kind of grants. Private capital only plays a rather marginal role.</p>
<h3>Capacity building</h3>
<p>Technical and managerial skills are a prerequisite for ensuring the continued operation of the system. The implementation of micro-hydro plants therefore has to include the training and capacity building of local individuals and organisations.</p>
<h3>Linkages to other values</h3>
<p>Water flows are commonly related with multiple social and economic values. The impact of a micro-hydro project can lead to synergies or conflicts with other issues. For example, the development of a micro-hydro plant can be integrated into programmes addressing other local needs such as irrigation, flood prevention, flow regulation for navigation or the fostering of tourism activities.</p>
<p>On the other hand, the operation of a micro-hydro plant can result in conflicts with the same issues: competition for use of water flow or negative effects such as floods or insufficient water flow after it has been adjusted to meet the energy generation needs.</p>
<h3>Communication and consultation mechanisms</h3>
<p>Measures to avoid conflicts and harness potentials as well as other aspects of local development should be included in the project strategies from the beginning. Communication and consultation can help to identify conflicts and potentials that already exist during the design phase of the project.</p>
<p>The establishment of communication and consultation mechanisms should be compulsory as they ensure that decisions taken during the long-term operation of the project (such as water flow management) also consider the needs of other socio-economic activities as well as environmental needs.</p>
<h2>4. Development status and prospects</h2>
<p>Most of the water turbines and generators used in micro-hydro plants are commercially available. The technologies are already mature and no significant cost changes are expected. However, in some developing countries with excellent resource availability, access to the technology can be improved by developing local hardware and software supply capacities (e.g. local production and engineering skills).</p>
<h2>5. Economic Issues</h2>
<p>The graphic shows the expected development of the capital costs of hydroelectric systems from two different perspectives: (1) the development of the global average costs of small hydro projects  according to the IEA1, and (2) the probable range of investment costs for three different sizes of hydroelectric systems according to ESMAP2. The ESMAP projections are explicitly based on projects in developing countries.</p>
      </div>
      <h1 class="man" style="margin:100px 200px 0px 200px"; id="mini">MINI-GRID</h1>
<p>The term mini-grid refers to (relatively small) electric networks that are used to distribute alternate electric current within a village or neighbourhood. Such distribution solutions are mostly used in areas that are remote from national or regional grids.</p>
<p>Mini-grids are usually supplied by a single power generation station (e.g. Micro-Hydro power plant, Wind turbine, combustion engine running on Biogas or a Photovoltaic array). However, the combination of two or more generation technologies (hybrid power systems) attracts greater interest, as this is an option to improve the reliability of the electricity supply.</p>
<button id="x4" class="bttn-slant bttn-md bttn-primary" class="man">read more</button>
      <div id="t4">
	  
<img style="margin-left:300px;" src="http://tb.bizwiz.ro/Investitie-de-76-milioane-de-euro-intr-un-parc-fotovoltaic-in-Giurgiu/5ec3a154879b05d2b3/588/331/2/70/Investitie-de-76-milioane-de-euro-intr-un-parc-fotovoltaic-in-Giurgiu.jpg">	  
<h2>1. Potential contribution to sustainable development</h2>
<h3>Global sustainable energy supply</h3>
<p>The main role of mini-grids in the global energy supply is to enable access to electricity in areas that are not covered by central networks and have no option to be connected to a grid in the future. Mini-grids can also lead to a more widespread dissemination and faster deployment of renewable energy technologies. These are more flexible and can be implemented more easily using mini-grids rather than conventional energy technologies. They are therefore associated closely with renewable energy technologies.</p>
<h3>Climate change mitigation</h3>
<p>The application of mini-grids makes no direct contribution to climate change mitigation. However, in combination with electric power generation based on renewable sources, mini-grids can be key to reducing (or even avoiding) greenhouse gas emissions.</p>
<h3>Millennium development goals</h3>
<p>Mini-grids are technical solutions that are appropriate for areas with no access to central networks. This technology already plays an important role in measures addressing energy poverty. In particular in regions where a high proportion of the rural population does not have access to electricity, mini-grids adjusted to the specific local conditions can be important factors in social and economic development. The systems can also be managed and owned by local entrepreneurs or organisations, which in turn can boost local development.</p>
<h2>2. Environmental Issues</h2>
<p>Operation of mini-grids (i.e. without the generation facilities) can be considered as free of direct emissions. The major environmental impacts of mini-grids derive from the production of the components, the installation of the network and network losses.</p>
<h3>Design of layout</h3>
<p>An environmentally sensitive design of the layout of the mini-grids can avoid major impacts on the local environment from the installation process. For example, the design can include the extension of the distribution lines along already available paths to avoid additional interventions on the landscape.</p>
<h3>Combination with renewable power</h3>
<p>In rural areas, small engine-generation sets running on fossil fuels are commonly used to supply electricity. These devices often cover the electricity demand of single households or small workshops for just a few hours per day. Mini-grids distributing renewable electricity can reduce or avoid the emissions from these kinds of fossil fuel options.</p>
<h2>3. Social Issues</h2>
<p>Installing a mini-grid involves long-term intervention on the collective reality of a community. The involvement of the local population is therefore crucial at different stages of the development process. Securing the community's access to electricity can lead to significant improvements in the living conditions of individuals and the community as a whole.</p>
<h3>Ownership, operation and management</h3>
<p>Clear ownership and a well-defined assignment of responsibilities are fundamental for the sustainability of the project. Two main approaches are commonly used:</p>
<li>A private entrepreneur (e.g. one villager with some investment capacity) takes a major part on the capital costs of the project and assumes the operation and maintenance of the system</li>
<li>Some kind of village or common ownership is established. Organisational experience would be valuable in this case. The continuity of the organisational structure and long-term commitment are essential for the sustainability of the project.</li>
<h3>Assessing demand and ability to pay</h3>
<p>The expected demand of electricity should be assessed when designing the system. This requires the participation of the future end users.</p>
<p>Communication and consultation is also necessary in order to establish a proper tariff scheme, one that is adapted to the ability to pay and the consumption patterns of the end users while at the same time ensuring the financial sustainability of the project. Assessing the current energy expenses that could be replaced by the connection to the mini-grid can help to estimate the tariff structure for the service</p>
<p>In both kinds of ownership approaches, a tariff scheme should be established that allows the entrepreneur or the responsible organisation to cover operation and maintenance costs, repay possible loans and obtain a profit margin.</p>
<h3>Technical and managerial training</h3>
<p>Technical and managerial skills are a prerequisite for ensuring the continued operation of the system. The implementation of mini-grid projects therefore has to include training and building the capacities of locals. To this end, identifying individuals in the community that show long-term commitment may become crucial.</p>
<h3>Electrifying social facilities</h3>
<p>Having social facilities such schools or health centres as end users of the mini-grid can have positive effects for both sides: It can lead to a significant improvement in the supply of social services and it can enhance the economic feasibility of the mini-grid as social facilities have a relatively fixed power demand, which means that the system operator can predict revenues.</p>
<h3>Improvement of living conditions</h3>
<p>Securing access to electricity can lead to significant improvement in the quality of life of the local population. There are various positive effects:</p>
<li>The possibility of using electric lighting is a cleaner and less risky option than traditional combustion lamps.</li>
<li>The availability of electricity opens up a wide range of communication, information and entertainment options.</li>
<li>Being able to run electrical devices (e.g. freezers, electrical tools, motors, etc.) helps small businesses to grow</li>
<li>Social services such as health care, education or community activities can be improved by using electric appliances.</li>
<h2>4. Development status and prospects</h2>
<p>All the components necessary to build mini-grids are already commercial products. However, the availability (as well as the prices) of components may vary strongly from region to region. In addition to the supply of components, technical skills are needed to use mini-grids because, unlike other technologies, a mini-grid must be designed according to the very case-specific conditions. The development of training and design tools to facilitate local capacity building may therefore be crucial to the widespread use of mini-grids.</p>
<h2>5. Economic Issues</h2>
<p>The capital costs of mini-grids vary strongly, depending on the project. An evaluation of projects with mini-grids installed in different contexts found that investment levels varied widely: from a very basic design in Laos of around USD 20 per consumer to a very sophisticated design in the Ivory Coast of around USD 650 per consumer1.</p>
<h3>Using local resources</h3>
<p>The costliest components of mini-grids are often the poles and the cables. In some cases, poles can be manufactured using resources that are available locally, while the community can supply a significant share of the labour required during construction.</p>
<h3>Costs per kilometre</h3>
<p>The main factors determining the capital costs of a mini-grid are the total length of the cable and the peak load to be distributed. The typical costs of Indian electrification programmes are reported to be USD 3,500 per kilometre for low-voltage lines2.</p>
      

    </div>

    </div>
       <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
         integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
         crossorigin="anonymous"></script>
        <script type="text/javascript">
        $("#t1").hide();
         $("#t2").hide();
         $("#t3").hide();
         $("#t4").hide();
       
        $("#x1").click(function(){
          $("#t1").show();
           $("#t2").hide();
         $("#t3").hide();
         $("#t4").hide();
           $("#x1").hide();
               $("#x4").show();
            $("#x2").show();
            $("#x3").show();
        });
        $("#x2").click(function(){
          $("#t2").show();
           $("#t1").hide();
         $("#t3").hide();
         $("#t4").hide();
            $("#x2").hide();
             $("#x1").show();
            $("#x4").show();
            $("#x3").show();
        });
        $("#x3").click(function(){
          $("#t3").show();
           $("#t2").hide();
         $("#t1").hide();
         $("#t4").hide();
            $("#x3").hide();
            $("#x1").show();
            $("#x2").show();
            $("#x4").show();       
             });
         $("#x4").click(function(){
          $("#t4").show();
           $("#t2").hide();
         $("#t3").hide();
         $("#t1").hide();
            $("#x4").hide();
            $("#x1").show();
            $("#x2").show();
            $("#x3").show();
          
        });
        </script>

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
