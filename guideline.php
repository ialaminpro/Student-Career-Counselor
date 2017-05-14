<?php require_once('config.php'); ?>
<!--<!DOCTYPE html>
<html>
<head>
    <title>JSSample</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

<script type="text/javascript">
    $(function() {
        var params = {
            // Request parameters
            "q": "bill gates",
            "count": "10",
            "offset": "0",
            "mkt": "en-us",
            "safesearch": "Moderate",
        };
      
        $.ajax({
            url: "https://api.cognitive.microsoft.com/bing/v5.0/search?" + $.param(params),
            beforeSend: function(xhrObj){
                // Request headers
                xhrObj.setRequestHeader("Ocp-Apim-Subscription-Key","c9dad13059064637ac9e0206fa68ca95");
            },
            type: "GET",
            // Request body
            data: "{body}",
        })
        .done(function(data) {
            alert("success");
        })
        .fail(function() {
            alert("error");
        });
    });
</script>
</body>
</html>-->

<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Hello World - Google  Web Search API Sample</title>
    <script src="https://www.google.com/jsapi"
        type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
    //<!
    google.load('search', '1');

    function OnLoad() {
      // Create a search control
      var searchControl = new google.search.SearchControl();

      // Add in a full set of searchers
      var localSearch = new google.search.LocalSearch();
      searchControl.addSearcher(localSearch);
      searchControl.addSearcher(new google.search.WebSearch());
      searchControl.addSearcher(new google.search.VideoSearch());
      searchControl.addSearcher(new google.search.BlogSearch());
      searchControl.addSearcher(new google.search.NewsSearch());
      searchControl.addSearcher(new google.search.ImageSearch());
      searchControl.addSearcher(new google.search.BookSearch());
      searchControl.addSearcher(new google.search.PatentSearch());

      // Set the Local Search center point
      localSearch.setCenterPoint("New York, NY");

      // tell the searcher to draw itself and tell it where to attach
      searchControl.draw(document.getElementById("searchcontrol"));

      // execute an inital search
      searchControl.execute("VW GTI");
    }
    google.setOnLoadCallback(OnLoad);

    //]]>
    
    
    </script>
<?php
// The request also includes the userip parameter which provides the end
// user's IP address. Doing so will help distinguish this legitimate
// server-side traffic from traffic which doesn't come from an end-user.
$url = "https://ajax.googleapis.com/ajax/services/search/web?v=1.0&"
        . "q=Paris%20Hilton&userip=USERS-IP-ADDRESS";

// sendRequest
// note how referer is set manually
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_REFERER, 1);
$body = curl_exec($ch);
curl_close($ch);

// now, process the JSON string
$json = json_decode($body);
// now have some fun with the results...
?>
    
  </head>
  <body>
    <div id="searchcontrol">Loading</div>
  </body>
</html>-->






<?php
require_once('header.php');

error_reporting(0);
?>
<br>
<br>
<br>
<br>
<div class="fullwidthbanner">
    <div class="container">
        <div class="row">
            <?php
            session_start();
            $data = $_SESSION['guideline_data'];
            ?>
            <h4>Welcome <?php echo $data[9] == 26 ? 'Mr. ' . $data[1] : 'Mrs. ' . $data[1]; ?> !</h4>
        </div>
        <div class="row">

            <?php
            $res = $data;
            unset($res[1]);

            unset($res[count($res)]);
          // print_r($res);
            $pattern_sum = array_sum($res);
            $sql = "SELECT DISTINCT proper_guideline_id "
                    . "FROM information_set,information_analysis "
                    . "WHERE information_set.information_analysis_id=information_analysis.information_analysis_id "
                    . "and pattern_sum = $pattern_sum";
            $result = mysqli_query($conn, $sql);
//  echo '<pre>';
//                print_r(mysqli_fetch_object($result));
//                print_r(mysqli_fetch_all($result));
            while ($row = mysqli_fetch_assoc($result)) {
                $sql1 = "SELECT * "
                        . "FROM guideline_set,guideline "
                        . "WHERE guideline.guideline_id=guideline_set.guideline_id and proper_guideline_id = '{$row["proper_guideline_id"]}' ";

                $result1 = mysqli_query($conn, $sql1);
//                echo '<pre>';
//                print_r(mysqli_fetch_all($result1));
                if (mysqli_num_rows($result1) > 0) {

                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        echo '<a href="#"><h1>' . $row1['guideline_title'] . '</h1><br>';
//                        echo '<h3>' . substr($row1['guideline_desc_details'], 0, 120) . '...</h3><br>';
//                        echo $row1['guideline_img_desc'] . '</a>';

                        $sql2 = "SELECT * "
                                . "FROM guideline_details "
                                . "WHERE guideline_id = '{$row1["guideline_id"]}' ";

                        $result2 = mysqli_query($conn, $sql2);

                        if (mysqli_num_rows($result2) > 0) {

                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo '<a href="#"><h5>' . $row2['guideline_details'] . '</h5><br>';
//                                echo '<h3>' . substr($row1['guideline_desc_details'], 0, 120) . '...</h3><br>';
//                                echo $row2['guideline_img_desc'] . '</a>';
                            }
                        }
                    }
                }
            }

//unset($_SESSION['guideline_data']);
//             $_SESSION['guideline_data'] = "";
//print_r($_SESSION['guideline_data']);
            ?>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>   
<?php

























////function get_client_ip() {
////    $ipaddress = '';
////    if (isset($_SERVER['HTTP_CLIENT_IP']))
////        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
////    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
////        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
////    else if(isset($_SERVER['HTTP_X_FORWARDED']))
////        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
////    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
////        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
////    else if(isset($_SERVER['HTTP_FORWARDED']))
////        $ipaddress = $_SERVER['HTTP_FORWARDED'];
////    else if(isset($_SERVER['REMOTE_ADDR']))
////        $ipaddress = $_SERVER['REMOTE_ADDR'];
////    else
////        $ipaddress = 'UNKNOWN';
////    return $ipaddress;
////}
//
//
//$query = 'facebook';
//
//$url = "https://cse.google.com/cse/publicurl?cx=013138782270997694501:l-yzgy696eu&q=".$query;
//
//$body = file_get_contents($url);
//$json = json_decode($body);
////
//print_r($body);
//
//for($x=0;$x<count($json->responseData->results);$x++){
//
//echo "<b>Result ".($x+1)."</b>";
//echo "<br>URL: ";
//echo $json->responseData->results[$x]->url;
//echo "<br>VisibleURL: ";
//echo $json->responseData->results[$x]->visibleUrl;
//echo "<br>Title: ";
//echo $json->responseData->results[$x]->title;
//echo "<br>Content: ";
//echo $json->responseData->results[$x]->content;
//echo "<br><br>";
//
//}