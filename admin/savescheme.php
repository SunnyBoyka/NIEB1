<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    /*$name = trim($_POST["name"]);
    $stype = trim($_POST["stype"]);
    $email = trim($_POST["email"]);
    $cphone = trim($_POST["cphone"]);
    $descr = trim($_POST["descr"]);
    $surl = trim($_POST["surl"]);
    $crop = trim($_POST["crop"]);*/

    $resultsms = '';

        $desc1 = " Enhance recharge of aquifers and introduce sustainable water conservation 
        practices.
        Promote extension activities relating to water harvesting, water 
        management and crop alignment for farmers and grass root level field 
        functionaries.";

        $crop1 = "cotton";

        $link1 = "https://pmksy.gov.in/mis/frmDashboard.aspx";

        $desc2 = "  Providing financial support to farmers suffering crop loss/damage arising out of unforeseen events.
        Stabilizing the income of farmers to ensure their continuance in farming.
        Encouraging farmers to adopt innovative and modern agricultural practices."; 
        
        $crop2 = "all";

        $link2 = "https://pmfby.gov.in/ext/rpt/ssfr_17";

        $desc3 = "Improved marketing infrastructure to allow farmers to sell directly to a larger 
        base of consumers and hence, increase value realization for the farmers. 
        This will improve the overall income of farmers."; 
        
        $crop3 = "all";

        $link3 = "http://agriinfra.dac.gov.in/";

        $desc4 = "Empowers farmers with increased capacity building.
        Bring consumers to the farm without the need of middleman.
        Consumers and buyers are often involved in production and verification process."; 
        
        $crop4 = "all";

        $link4 = "https://pgsindia-ncof.gov.in/home.aspx";

        $desc5 = "Promotes organic farming in the country by providing financial assistance to states for setting up clusters of organic producers, certification process and marketing infrastructure."; 
        
        $crop5 = "all";

        $link5 = "https://www.mygov.in/task/poster-making-contest-paramparagat-krishi-vikas-yojana/";

        $desc6 = "To increase the production of targeted crops to ensure food security and enhance the income of farmers. It focuses on increasing productivity through the adoption of improved technologies, high-yielding varieties, and better agricultural practices."; 
        
        $crop6 = "all";

        $link6 = "http://nfsm.gov.in/";

        $desc7 = "To incentivize states to increase their investment in agriculture and allied sectors. It supports the development of infrastructure, research and development, extension services, and capacity building to enhance agricultural productivity and farmers' income."; 
        
        $crop7 = "all";

        $link7 = "https://rkvy.nic.in/"; 

        $desc8 = "Aims to empower farmers to make informed decisions for improving soil fertility and productivity through issuance of soil health cards. It covers all crops grown in the country."; 
        
        $crop8 = "all";

        $link8 = "https://www.unnatbharatabhiyansrmist.com/2020/08/soil-health-card-scheme.html/";

        $desc9 = "Yeshasvini Co-operative Members Health Care Trust has been established to implement the scheme. Hon'ble Chief Minister is the Chief Patron and Hon'ble Minister for Co-operation is the Patron of the Trust. The Principal Secretary to the Government, the Co-operation Department is the Chairman of the Trust."; 
        
        $crop9 = "all";

        $link9 = "https://yeshasvinitrust.in/";


        $desc10 = "myScheme is a National Platform that aims to offer one-stop search and discovery of the Government schemes. It provides an innovative, technology-based solution to discover scheme information based upon the eligibility of the citizen. The platform helps the citizen to find the right Government schemes for them. It also guides on how to apply for different Government schemes."; 
        
        $crop10 = "all";

        $link10 = "https://www.myscheme.gov.in/schemes/rkvyshfshc";

        $desc11 = "Pradhan Mantri Krishi Sinchayee Yojana (PMKSY) was launched during the year 2015-16 to enhance physical access of water on farm and expand cultivable area under assured irrigation, improve on-farm water use efficiency, introduce sustainable water conservation practices, etc. PMKSY is an umbrella scheme, consisting of two major components being implemented by Ministry of Jal Shakti, namely, Accelerated Irrigation Benefit Programme (AIBP), and Har Khet Ko Pani (HKKP)."; 
        
        $crop11 = "all";

        $link11 = "https://jalshakti-dowr.gov.in/pmksy-aibp/";

        $desc12 = "Pradhan Mantri Kisan Samman Nidhi is an initiative by the government of India that give farmers up to ₹6,000 per year as minimum income support."; 
        
        $crop12 = "all";

        $link12 = "https://www.pmkisan.gov.in/";


        $desc13 = "Pradhan Mantri Shram Yogi Maandhan is a government scheme meant for old age protection and social security of Unorganized workers."; 
        
        $crop13 = "all";

        $link13 = "https://maandhan.in/";


        $desc14 = "PMFBY was launched in 2016 in order to provide a simple and affordable crop insurance product to ensure comprehensive risk cover for crops to farmers against all non-preventable natural risks from pre-sowing to post-harvest and to provide adequate claim amount. The scheme is demand driven and available for all farmers A total of 5549.40 lakh farmer applications were insured."; 
        
        $crop14 = "all";

        $link14 = "https://pmfby.gov.in/";


        $desc15 = "The Interest Subvention Scheme (ISS) provides concessional short term agri-loans to the farmers practicing crop husbandry and other allied activities like animal husbandry, dairying and fisheries. ISS is available to farmers availing short term crop loans up to Rs.3.00 lakh at an interest rate of 7% per annum for one year."; 
        
        $crop15 = "all";

        $link15 = "https://www.rbi.org.in/Scripts/BS_CircularIndexDisplay.aspx?Id=12411";

        $desc16 = "In order to address the existing infrastructure gaps and mobilize investment in agriculture infrastructure, Agri Infra Fund was launched under Aatmanirbhar Bharat Package. AIF was introduced with a vision to transform the agriculture infrastructure landscape of the country. Under the scheme, Rs. 1 Lakh Crore will be provided by banks and financial institutions as loans with interest subvention of 3% per annum and credit guarantee coverage under CGTMSE for loans up to Rs. 2 Crores. Further, each entity is eligible to get the benefit of the scheme for up to 25 projects located in different LGD codes."; 
        
        $crop16 = "all";

        $link16 = "https://agriinfra.dac.gov.in/Home";

        //if(rand(1,4) >= 1)
        {
          $descr = $desc1;
          $surl = $link1;
          $crop = $crop1;
		  $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";

        }
		 $descr = $desc1;
          $surl = $link1;
          $crop = 'ragi';
		  $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";

        }
		 $descr = $desc1;
          $surl = $link1;
          $crop = 'jowar';
		  $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";

        }
		 $descr = $desc1;
          $surl = $link1;
          $crop = 'fenugreek';
		  $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";

        }
        }
        //elseif (rand(1,4) >= 2) 
        {
          $descr = $desc2;
          $surl = $link2;
          $crop = $crop2;
		   $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";

        }
        }
        //elseif (rand(1,4) >= 3) 
        {
          $descr = $desc3;
          $surl = $link3;
          $crop = $crop3;
		   $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";

        }
        }
        //elseif (rand(1,4) >= 4) 
        {
          $descr = $desc4;
          $surl = $link4;
          $crop = $crop4;
		   $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc5;
          $surl = $link5;
          $crop = $crop5;
		   $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
		  if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc6;
          $surl = $link6;
          $crop = $crop6;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc7;
          $surl = $link7;
          $crop = $crop7;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc8;
          $surl = $link8;
          $crop = $crop8;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc9;
          $surl = $link9;
          $crop = $crop9;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc10;
          $surl = $link10;
          $crop = $crop10;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc11;
          $surl = $link11;
          $crop = $crop11;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc12;
          $surl = $link12;
          $crop = $crop12;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc13;
          $surl = $link13;
          $crop = $crop13;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc14;
          $surl = $link14;
          $crop = $crop14;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc15;
          $surl = $link15;
          $crop = $crop15;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
        {
          $descr = $desc16;
          $surl = $link16;
          $crop = $crop16;
           $query = "insert into govtsch22_schemes values('','','','','','$descr','$surl','$crop')";
          if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
        }
         


        //$query = "insert into govtsch22_schemes values('','$name','$stype','$email','$cphone','$descr','$surl','$crop')";
        
        $fields = array(
            "sender_id" => "FTWSMS",
            "message" => "The scheme has been added successfully for the crop $crop",
            "language" => "english",
            "route" => "v3",
            "numbers" => $cphone,
            "flash" => "0"
        );
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($fields),
          CURLOPT_HTTPHEADER => array(
            "authorization: 7ZOhfvuRCc4PeTXb1JiDHtLrpBA5oWjwqKlxadFnN6VG9ykzYQb7m3ktrcBPpFiZ0vRUD1MlWOwjy4x8ff",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
		
        
        if ($err) {
          $resultsms = $err;
        } else {
            $resultsms = $response;
        }

        //if(mysqli_query($link,$query))
        {
            $_SESSION["add"] = "success";
            echo"<script> location.replace('addscheme.php') </script>";

        }
       // else         
        //{
           // $_SESSION["add"] = "failed";
           // echo"<script> location.replace('addscheme.php') </script>";
       // }

        

        mysqli_close($link);
}
