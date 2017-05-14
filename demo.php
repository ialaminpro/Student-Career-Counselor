  <div class="w3-container"   id="question_3">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large" style="margin-bottom:30px;">3. In which Department are/were you enrolled?</p>
            <label><select name="question_3" class="question_3">

                    <?php
                    $sql = "SELECT * FROM qa_department";
                    $result = mysqli_query($conn, $sql);
//print_r($result);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $row["department_id"] ?>"><?php echo $row["department_name"] ?></option>
                            <?php
                        }
                    }
                    ?>
                    <option value="">Others</option>




                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="3" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="3" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="3" >Next</button>

        </div>
    </div>

    <div class="w3-container"  id="question_4">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">4. Which Level in ?</p>
            <label><select name="question_4" class="question_4">

                    <option value="1">1st Level</option>
                    <option value="2">2nd Level</option>
                    <option value="3">3rd Level</option>
                    <option value="4">4th Level</option>



                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="4" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="4" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="4" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_5">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">5. Which Term in  ?</p>
            <label><select name="question_5" class="question_5">

                    <option value="1">1st Term</option>
                    <option value="2">2nd Term</option>
                    <option value="3">3rd Term</option>



                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="5" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="5" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="5" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_6">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">6. Current Educational Goal ?</p>
            <label><select name="question_6" class="question_6">

                    <?php
                    $sql = "SELECT * FROM educational_goal";
                    $result = mysqli_query($conn, $sql);
//print_r($result);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $row["educational_goal_id"] ?>"><?php echo $row["educational_goal_name"] ?></option>
                            <?php
                        }
                    }
                    ?>
                    <option value="">Others</option>

                    <!--
                                        <option value="1">Associate degree</option>
                                        <option value="2">Bachelor's degree</option>
                                        <option value="3">Master's degree</option>
                                        <option value="4">Doctorate or professional degree</option>
                                        <option value="5">Certification (initial or renewal)</option>
                                        <option value="6">Self-improvement/pleasure</option>
                                        <option value="7">Job-related training</option>
                                        <option value="8">Other</option>-->

                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="6" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="6" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="6" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_7">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">7. Current CGPA:</p>
            <label><select name="question_7" class="question_7">
                    <option value="1">No credits earned</option>
                    <option value="2">1.99 or below</option>
                    <option value="3">2.0 - 2.49</option>
                    <option value="4">2.5 - 2.99</option>
                    <option value="5">3.0 - 3.49</option>
                    <option value="6">3.5 or above</option>
                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="7" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="7" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="7" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_8">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">8. Current Residence: ?</p>
            <label><select name="question_8" class="question_8">
                    <option value="1">Residence hall</option>
                    <option value="2">Fraternity / Sorority</option>
                    <option value="3">Own house</option>
                    <option value="4">Rent room or apartment off campus</option>
                    <option value="5">Parent's home</option>
                    <option value="6">Other</option>
                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="8" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="8" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="8" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_9" >
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large" style="margin-bottom:30px;">9. What is your gender identity?:</p>

            <div class="radio"><label  ><input name="question_9"  value="1" type="radio"> <font id="input1">Male</font></label></div>
            <div class="radio"><label ><input  name="question_9"  value="2" type="radio"> <font id="input2">Female</font></label></div>
            <div class="radio"><label ><input  name="question_9"  value="3" type="radio"> <font id="input2"> Transgender/transsexual/genderqueer (female to male spectrum)</font></label></div>
            <div class="radio"><label ><input  name="question_9"  value="4" type="radio"> <font id="input2"> Transgender/transsexual/genderqueer (male to female spectrum)</font></label></div>
            <div class="radio"><label ><input  name="question_9"  value="5" type="radio"> <font id="input2"> Prefer not to answer
                    </font></label></div>
            <div class="radio"><label ><input  name="question_9" value="0" type="radio"> <font id="input2">Other</font></label></div>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="9" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="9" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="9" >Next</button>

        </div>
    </div>
    <div class="w3-container"   id="question_10" >
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large" style="margin-bottom:30px;">10.  I am interested in</p>
            <label><select name="question_10" class="question_10">

                    <?php
                    $sql = "SELECT * FROM qa_interest_topics";
                    $result = mysqli_query($conn, $sql);
//print_r($result);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $row["qa_interest_topic_id"] ?>"><?php echo $row["qa_interest_topic_name"] ?></option>
                            <?php
                        }
                    }
                    ?>
                    <option value="">Others</option>




                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="10" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="10" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="10" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_11">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">11. Main challenge in Your way to learn ?</p>
            <label><select name="question_11" class="question_11">
                    <?php
                    $sql = "SELECT * FROM qa_challenge_to_learn";
                    $result = mysqli_query($conn, $sql);
//print_r($result);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $row["qa_challenge_to_learn_id"] ?>"><?php echo $row["qa_challenge_to_learn_name"] ?></option>
                            <?php
                        }
                    }
                    ?>

                    <option value = "6">Other</option>

                </select> </label>
            <br>
            <button class = "w3-btn w3-orange w3-large w3-text-white skip" data-value = "11" >Skip</button>
            <button class = "w3-btn w3-orange w3-large w3-text-white previous" data-value = "11" >Previous</button>
            <button class = "w3-btn w3-orange w3-large w3-text-white next" data-value = "11" >Next</button>

        </div>
    </div>

    <div class = "w3-container" id = "question_12">
        <div class = "w3-padding-jumbo w3-light-grey">
            <p class = "w3-large" style = "margin-bottom:30px;">12. I have participated in following Event/Contest/Workshop?</p>
            <label><select name = "question_12" class = "question_12">

                    <?php
                    $sql = "SELECT * FROM event_contest_workshop";
                    $result = mysqli_query($conn, $sql);
//print_r($result);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                            <option value="<?php echo $row["event_contest_workshop_id"] ?>"><?php echo $row["event_contest_workshop_name"] ?></option>
                            <?php
                        }
                    }
                    ?>
                    <option value="">Others</option>




                </select> </label>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="12" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="12" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="12" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_13">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">13. Do you know yet what career areas you are interested in??</p>

            <div class="radio"><label  ><input name="question_13"  value="1" type="radio"> YES, I have one strong career goal</font></label></div>
            <div class="radio"><label ><input  name="question_13"  value="2" type="radio"> YES, I can name 2 or 3 possible career areas that might interest me</font></label></div>
            <div class="radio"><label ><input  name="question_13"  value="3" type="radio"> NOT YET, but I am starting to think about careers</font></label></div>
            <div class="radio"><label ><input  name="question_13"  value="4" type="radio"> NO, I do not know yet what type of career I want</font></label></div>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="13" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="13" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="13" >Next</button>

        </div>
    </div>
    <div class="w3-container" id="question_14">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">14. What is your current grade or school status?</p>

            <div class="radio"><label><input name="question_14"   value="1" type="radio"> <font id="input1">YES, I have one strong career goal</font></label></div>
            <div class="radio"><label><input  name="question_14"  value="2" type="radio"> <font id="input2">YES, I can name 2 or 3 possible career areas that might interest me</font></label></div>
            <div class="radio"><label><input  name="question_14"  value="3" type="radio"> <font id="input3">NOT YET, but I am starting to think about careers</font></label></div>
            <div class="radio"><label><input  name="question_14"  value="3" type="radio"> <font id="input4">NO, I do not know yet what type of career I want</font></label></div>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="14" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="14" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="14" >Next</button>

        </div>
    </div>
    <div class="w3-container"  id="question_15">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">15. What do you prefer?</p>

            <div class="radio"><label  ><input name="question_15"  value="1" type="radio"> <font id="input1">Working alone</font></label></div>
            <div class="radio"><label ><input  name="question_15"  value="2" type="radio"> <font id="input2">Working with a partner</font></label></div>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="15" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="15" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="15" >Next</button>
        </div>
    </div>
    <div class="w3-container" id="question_16">
        <div class="w3-padding-jumbo w3-light-grey">
            <p class="w3-large"  style="margin-bottom:30px;">16. What is your Email Address?</p>
            <label><input name="question_16"  value="" type="email"> </label>
            <br>
            <br>
            <br>
            <button  class="w3-btn w3-orange w3-large w3-text-white skip" data-value="16" >Skip</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white previous" data-value="16" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white next" data-value="16" >Next</button>
        </div>
    </div>

    <div class="w3-container" style="text-align: center" id="question_17">
        <div class="w3-padding-jumbo w3-light-grey">

            <button  class="w3-btn w3-orange w3-large w3-text-white previous_17" data-value="17" >Previous</button>
            <button  class="w3-btn w3-orange w3-large w3-text-white finish" data-value="17" >Finish</button>


        </div>
    </div>