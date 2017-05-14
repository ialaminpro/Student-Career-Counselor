<?php require_once('config.php'); ?>
<?php
session_start();
$int = $inter = $department_name = $challenge = $event_contest_workshop = $gender = $goal = $residence = $career_areas = $grade = $prefer = '';
if ($_POST) {

//    $sql = "SELECT * FROM qa_institute where qa_institute_id={$_POST['institute']}";
//    $result = mysqli_query($conn, $sql);
//    if (mysqli_num_rows($result) > 0) {
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            $int = $row['qa_institute_name'];
//        }
//    }
//    $sql = "SELECT * FROM qa_department where department_id={$_POST['department']}";
//    $result = mysqli_query($conn, $sql);
//    if (mysqli_num_rows($result) > 0) {
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            $department_name = $row['department_name'];
//        }
//    }
//    $sql = "SELECT * FROM qa_interest_topics where qa_interest_topic_id={$_POST['interested']}";
//    $result = mysqli_query($conn, $sql);
//    if (mysqli_num_rows($result) > 0) {
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            $inter = $row['qa_interest_topic_name'];
//        }
//    }
//    $sql = "SELECT * FROM qa_challenge_to_learn where qa_challenge_to_learn_id={$_POST['challenge']}";
//    $result = mysqli_query($conn, $sql);
//    if (mysqli_num_rows($result) > 0) {
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            $challenge = $row['qa_challenge_to_learn_name'];
//        }
//    }
//    $sql = "SELECT * FROM event_contest_workshop where event_contest_workshop_id={$_POST['event_contest_workshop']}";
//    $result = mysqli_query($conn, $sql);
//    if (mysqli_num_rows($result) > 0) {
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            $event_contest_workshop = $row['event_contest_workshop_name'];
//        }
//    }
//    $sql = "SELECT * FROM educational_goal where educational_goal_id={$_POST['goal']}";
//    $result = mysqli_query($conn, $sql);
//    if (mysqli_num_rows($result) > 0) {
//        while ($row = mysqli_fetch_assoc($result)) {
//
//            $goal = $row['educational_goal_name'];
//        }
//    }
//    if($_POST['residence']==1){
//        $residence='Residence hall';
//    }
//    else if($_POST['residence']==2){
//        $residence='Fraternity / Sorority';
//    }
//    else if($_POST['residence']==3){
//        $residence='Own house';
//    }
//    else if($_POST['residence']==4){
//        $residence='Rent room or apartment off campus';
//    }
//    else if($_POST['residence']==5){
//        $residence="Parent's home";
//    }else{
//        $residence='Other';
//    }
//    
//    if($_POST['gender']==1){
//        $gender='Male';
//    }
//    else if($_POST['gender']==2){
//        $gender='Female';
//    }
//    else if($_POST['gender']==3){
//        $gender='Transgender/transsexual/genderqueer (female to male spectrum)';
//    }
//    else if($_POST['gender']==4){
//        $gender='Transgender/transsexual/genderqueer (male to female spectrum)';
//    }
//    else if($_POST['gender']==5){
//        $gender='Prefer not to answer';
//    }else{
//        $gender='Other';
//    }
//    
//    if($_POST['career_areas']==1){
//        $career_areas='YES, I have one strong career goal';
//    }
//    else if($_POST['career_areas']==2){
//        $career_areas='YES, I can name 2 or 3 possible career areas that might interest me';
//    }
//    else if($_POST['career_areas']==3){
//        $career_areas='NOT YET, but I am starting to think about careers';
//    }
//    else if($_POST['career_areas']==4){
//        $career_areas='NO, I do not know yet what type of career I want';
//    }
//    else{
//        $career_areas='Other';
//    }
//    
//    if($_POST['grade']==1){
//        $grade='YES, I have one strong career goal';
//    }
//    else if($_POST['grade']==2){
//        $grade='YES, I can name 2 or 3 possible career areas that might interest me';
//    }
//    else if($_POST['grade']==3){
//        $grade='NOT YET, but I am starting to think about careers';
//    }
//    else if($_POST['grade']==4){
//        $grade='NO, I do not know yet what type of career I want';
//    }
//    else{
//        $grade='Other';
//    }
//    
//    if($_POST['prefer']==1){
//        $prefer='Working alone';
//    }
//    else if($_POST['prefer']==2){
//        $prefer='Working with a partner';
//    }
//    
//    else{
//        $prefer='Other';
//    }

    $sqljs = "SELECT * "
            . "FROM sharing_information "
            . "ORDER BY sharing_information_order; ";
    $resultjs = mysqli_query($conn, $sqljs);
    $data = array();
    if (mysqli_num_rows($resultjs) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($resultjs)) {
            $data[$row["sharing_information_id"]] = $_POST[$row["sharing_information_id"]];
        }
    }

//    echo '<pre>';
//    print_r($_POST);
//    echo '<pre>';
//    print_r($resultjs);
//    echo '<pre>';
//    print_r(mysqli_fetch_array($resultjs));
//    echo '<pre>';
   // print_r($data);
    $_SESSION['guideline_data'] = $data;
    echo true;
} else {
    echo false;
}
return ;

//$ajaxData = $_POST;
//echo '<pre>';
//print_r($ajaxData); // $ajaxData;
//
//$ajaxData['interested'];
//$sql = "SELECT * FROM qa_institute";
//$result = mysqli_query($conn, $sql);
////print_r($result);
//
//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//    while ($row = mysqli_fetch_assoc($result)) {
//        
?>

        <!--<option value="<?php //echo $row["qa_institute_id"]           ?>"><?php //echo $row["qa_institute_name"]           ?></option>-->
        <?php
//    }
//}
//
//
//exit();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

