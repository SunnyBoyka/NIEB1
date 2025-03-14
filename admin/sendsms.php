<?php
session_start();

require "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
  $crops = trim($_GET["crop"]);
  $linker = $_GET["url"];

if($crops != 'all')
{

  $crops = explode(",", $crops);

  for ($i = 0; $i < count($crops); $i++) 
  {
    $query = "select * from govtsch22_farmer where govtsch22_farmcrops like '%" . $crops[$i] . "%'";
	
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) 
    {
      while ($row = mysqli_fetch_array($result)) 
      {
        $resultsms = '';

        $fields = array(
          "sender_id" => "FTWSMS",
          "message" => "New Scheme link is $linker",
          "language" => "english",
          "route" => "v3",
          "numbers" => $row["govtsch22_farmphone"],
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
            "authorization: 7ZOhfvuRCc4PeTXb1JiDHtLrpBA5oWjwqKlxadFnN6VG9ykzYQb7m3ktrcBPpFiZ0vRUD1MlWOwjy4x8",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
          ),
        ));

      $response = curl_exec($curl);
	  echo $response ;
      $err = curl_error($curl);
	  echo $err ;
        curl_close($curl);

        if ($err) 
        {
          $resultsms = $err;
        } 
        else 
        {
          $resultsms = $response;
        }
      }
    }
  }
}
else
{
  
  $query = "select * from govtsch22_farmer";
  $result = mysqli_query($link, $query);
  if (mysqli_num_rows($result) > 0) 
  {
    while ($row = mysqli_fetch_array($result)) 
    {
	echo $query ;
      $resultsms = '';

      $fields = array(
        "sender_id" => "FTWSMS",
          "message" => "New Scheme link is $linker",
        "language" => "english",
        "route" => "v3",
        "numbers" => $row["govtsch22_farmphone"],
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
          "authorization: 7ZOhfvuRCc4PeTXb1JiDHtLrpBA5oWjwqKlxadFnN6VG9ykzYQb7m3ktrcBPpFiZ0vRUD1MlWOwjy4x8",
          "accept: */*",
          "cache-control: no-cache",
          "content-type: application/json"
        ),
      ));

      $response = curl_exec($curl);
	  echo $response ;
      $err = curl_error($curl);
	  echo $err ;

      curl_close($curl);

      if ($err) 
      {
        $resultsms = $err;
      } 
      else 
      {
        $resultsms = $response;
      }
    }
  }
}


  if (mysqli_query($link, $query)) 
  {
    $_SESSION["add"] = "success";
    echo "<script> location.replace('managescheme.php') </script>";
  } 
  else 
  {
    $_SESSION["add"] = "failed";
    echo "<script> location.replace('managescheme.php') </script>";
  }



  mysqli_close($link);
}
