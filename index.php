<?php require_once('config.php'); ?>
<?php require_once('header.php'); ?>

<style>
    .next,.previous,.skip {
        margin-top: 10%


            /*        margin-left: 90%;*/
    }
    .previous {


        margin-left: 70%;
    }
    /*    .next{
            text-align: right;
        }*/
</style>

<div class="w3-container" style="text-align: center" id="question_0">
    <div class="w3-padding-jumbo w3-light-grey">

        <button  class="w3-btn w3-orange w3-large w3-text-white start" data-value="0" >Start</button>


    </div>
</div>
<div>

    <?php
    $i = 1;
    $sql = "SELECT * "
            . "FROM sharing_information "
            . "ORDER BY sharing_information_order; ";
    $result = mysqli_query($conn, $sql);
    //print_r(mysqli_fetch_assoc($result));

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row["sharing_information_id"] == 12)
                continue;
            ?>
            <div class="w3-container"  id="question_<?php echo $i; ?>">
                <div class="w3-padding-jumbo w3-light-grey">
                    <p class="w3-large"  style="margin-bottom:30px;"><?php echo $i . '. ' . $row["information"]; ?></p>
                    <?php
                    if ($row["question_type_id"] == 4) {
                        ?>
                        <label><input name="question_<?php echo $row["sharing_information_id"]; ?>"  value="" type="text"> </label>
                        <?php
                    } else if ($row["question_type_id"] == 5) {
                        ?>
                        <label><select name="question_<?php echo $row["sharing_information_id"]; ?>" class="question_<?php echo $row["sharing_information_id"]; ?>">

                                <?php
                                $sql4 = "SELECT * "
                                        . "FROM helping_options "
                                        . "WHERE sharing_information_id =  {$row["sharing_information_id"]}; ";

                                $result4 = mysqli_query($conn, $sql4);
                                // print_r($result1);

                                if (mysqli_num_rows($result4) > 0) {
                                    // output data of each row
                                    while ($row4 = mysqli_fetch_assoc($result4)) {
                                        ?>
                                        <option value="<?php echo $row4["helping_option_id"] ?>"><?php echo $row4["helping_option"] ?></option>
                                        <?php
                                    }
                                }
                                ?>


                            </select> </label>

                    <?php } else if ($row["question_type_id"] == 1) { ?>

                        <?php
                        $sql1 = "SELECT * "
                                . "FROM helping_options "
                                . "WHERE sharing_information_id =  {$row["sharing_information_id"]}; ";

                        $result1 = mysqli_query($conn, $sql1);
                        // print_r($result1);

                        if (mysqli_num_rows($result1) > 0) {
                            $jj = 1;
                            // output data of each row
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                ?>
                                <div class="radio">
                                    <label>
                                        <input <?php if ($jj == 1) echo 'checked' ?> name="question_<?php echo $row["sharing_information_id"]; ?>"  value="<?php echo $row1["helping_option_id"] ?>" type="radio"> 
                                        <font id="input1"><?php echo $row1["helping_option"] ?></font>
                                    </label>
                                </div>


                                <?php
                                $jj = 0;
                            }
                        }
                        ?>

        <?php } ?>


                    <br>
                    <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="<?php echo $i; ?>" >Skip</button>
                    <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="<?php echo $i; ?>" >Previous</button>
                    <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="<?php echo $i++; ?>" >Next</button>
                </div>
            </div>
            <?php
        }
    }
    ?>
    <div class="w3-container" style="text-align: center" id="question_<?php echo $i; ?>">
        <div class="w3-padding-jumbo w3-light-grey">

            <button  class="w3-btn w3-orange w3-large w3-text-white previous_17" data-value="<?php echo $i; ?>" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white finish" data-value="<?php echo $i; ?>" >Finish</button>


        </div>
    </div>

    <!--    </form>-->
</div>


<script type="text/javascript">

    $(document).ready(function () {
<?php
$sqljs = "SELECT * "
        . "FROM sharing_information "
        . "ORDER BY sharing_information_order; ";
$resultjs = mysqli_query($conn, $sqljs);

//print_r(mysqli_fetch_assoc($resultjs));
?>

        $(".finish").click(function () {
        var data = {
<?php
if (mysqli_num_rows($resultjs) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($resultjs)) {
        if ($row["question_type_id"] == 1) {
            ?>
            <?php echo '"' . $row["sharing_information_id"] . '":' ?>  $('input[name=question_' +<?php echo $row["sharing_information_id"] ?> + ']:checked').val()?$('input[name=question_' +<?php echo $row["sharing_information_id"] ?> + ']:checked').val():"0"
            <?php
            echo ',';
        } elseif ($row["question_type_id"] == 4) {
            ?>
            <?php echo '"' . $row["sharing_information_id"] . '":' ?>  $('input[name=question_' + '<?php echo $row["sharing_information_id"] ?>' + ']').val()?$('input[name=question_' + '<?php echo $row["sharing_information_id"] ?>' + ']').val():"0"
            <?php
            echo ',';
        } elseif ($row["question_type_id"] == 5) {
            ?>
            <?php echo '"' . $row["sharing_information_id"] . '":' ?>  $('.question_' + '<?php echo $row["sharing_information_id"] ?>').val()?$('.question_' + '<?php echo $row["sharing_information_id"] ?>').val():"0"
            <?php
            echo ',';
        }
    }
}
?>

        };
        console.log(data);
        var url_op = "get_suggestion.php";
        $.ajax({
            type: "POST",
            url: url_op,
            data: data,
            success: function (response) {
                //content.html(response);

                window.location.replace('guideline.php');

                window.location = 'guideline.php?' + response;
//                        if (/*no errors*/) {
//                window.location = 'thank-you.html';
//                }
                console.log(response);
                if (response.success) {
                    $("#reg_notification").html(response.message)
                            .fadeIn(400, function () {
                                window.location = response.redirectTo;
                            });
                } else {
                    //                        // somethings else
                }
                content.html(response);
                if (msg != 'false')
                {
                    var msg_data = msg.split(',');
                    var msg_option = '<option value="">Select Color</option>';
                    for (var i = 0; i < msg_data.length; i++)
                    {
                        msg_option += '<option value="' + msg_data[i] + '">' + msg_data[i] + '</option>';
                    }
                    $('.color_name').html(msg_option);
                } else {
                    alert('Some Problem Occured During Getting Information. Please Check Clearly');
                }
            }
        });
    });
    for (var j = 1; j <= 17; j++) {
        $("#question_" + j).hide();
    }

    $('.start').click(function () {

        for (var j = 0; j <= 17; j++) {
            $("#question_" + j).hide();
        }

        var val = parseInt($(this).attr('data-value'));
        var d = parseInt(val + 1);
        $("#question_" + d).show();
    });
    $('.next').click(function () {

        for (var j = 0; j <= 17; j++) {

//            if($('input[name=question_'+j+']:checked').val()==48){                         
//                j++;
//            }else{

            $("#question_" + j).hide();
//            }



        }
        var val = parseInt($(this).attr('data-value'));
        //alert(val);
        var d = parseInt(val + 1);
        ////            $("#question_" + val).hide();
        $("#question_" + d).show();
    });
    $('.previous').click(function () {
        for (var j = 0; j <= 17; j++) {
            $("#question_" + j).hide();
        }

        var val = parseInt($(this).attr('data-value'));
        var d = parseInt(val - 1);
        $("#question_" + val).hide();
        $("#question_" + d).show();
    });
    $('.previous_17').click(function () {
        for (var j = 0; j <= 17; j++) {
            $("#question_" + j).hide();
        }

        var val = parseInt($(this).attr('data-value'));
        var d = parseInt(val - 1);
        $("#question_" + val).hide();
        $("#question_" + d).show();
    });
    $('.skip').click(function () {
        //            alert($(this).attr('data-value'));
        $(location).attr('href', 'home.php')

    });
    $(".view_type").click(function () {
        if ($(".view_type[value=2]").is(':checked')) {
            $("#salary-table").addClass('hide');
            $("#paysheet-table").removeClass('hide');
        } else {
            $("#salary-table").removeClass('hide');
            $("#paysheet-table").addClass('hide');
        }
    });



//        alert(1);
    $(".next").click(function () {
        //alert($(this).attr('data-value'));
    });



    $('.product_id').on('change', function () {



    var product_id = $('.product_id').select2("val");
            //alert(product_id);
            if (product_id)
    {
    // var url_op = "<?php //echo base_url();                                                                                                       ?>" + "product/get_product_color";
    $.ajax({
    type: "POST",
            url: url_op,
            data: 'product_id=' + product_id,
            success: function (msg) {
            if (msg != 'false')
            {
            var msg_data = msg.split(',');
                    var msg_option = '<option value="">Select Color</option>';
                    for (var i = 0; i < msg_data.length; i++)
            {
            msg_option += '<option value="' + msg_data[i] + '">' + msg_data[i] + '</option>';
            }
            $('.color_name').html(msg_option);
            } else {
            alert('Some Problem Occured During Getting Information. Please Check Clearly');
            }
            }
    });
    }
    });
    }
    );

</script>
<!--         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">-->

<?php require_once('footer.php'); ?>  
