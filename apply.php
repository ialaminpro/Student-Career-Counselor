<?php require_once('header.php'); ?>

        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Course Apply</h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Apply</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="space70"></div>


        <div class="container">
            <div class="row">
                <div class="col-sm-9 margin-btm-30">
                    <h3>Apply for a course!</h3>
                    <p>Carefully fill out the fields below. </p>
                    <div class="space30"></div>
                    <form>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name_apply" name="name_apply" placeholder="First Name">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname_apply" name="lastname_apply" placeholder="Last Name">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" id="email_apply" name="email_apply" class="form-control" placeholder="Enter Email">
                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" id="phone_apply" name="phone_apply" class="form-control" placeholder="Enter Phone number">
                                    <span class="input-icon"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="country_apply" id="country_apply">
                                        <option value="" selected="">Select your country</option>
                                        <option value="Europe">Europe</option>
                                        <option value="Asia">Asia</option>
                                        <option value="North America">North America</option>
                                        <option value="South America">South America</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="gender_apply" id="gender_apply">
                                        <option value="" selected="">Select your gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="education_apply" id="education_apply">
                                        <option value="" selected="">Select your education level</option>
                                        <option value="Less than high school">Less than high school</option>
                                        <option value="High school diploma or equivalent">High school diploma or equivalent</option>
                                        <option value="Some college no degree">Some college, no degree</option>
                                        <option value="Bachelor degree">Bachelor’s degree</option>
                                        <option value="Doctoral or professional degree">Doctoral or professional degree</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="age_apply" id="age_apply" class="form-control" placeholder="Age">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="course_apply" id="course_apply">
                                        <option value="" selected="">Select your a course</option>
                                        <option value="Less than high school">Management: Build a Business Plan </option>
                                        <option value="High school diploma or equivalent">Art: Impressionist </option>
                                        <option value="Some college no degree">Litteratture: Poetry </option>
                                        <option value="Bachelor degree">Math: 12 Principles</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="5" id="message_apply_2" name="message_apply" class="form-control" placeholder="Additional message" style="height:150px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-skin btn-lg">Apply Now</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 margin-btm-40">
                    <div class="sidebar-widget">
                        <h3>Job Openings</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Designer - HTML5 / CSS3</a></li>
                            <li><a href="#">Wordpress Developer</a></li>
                            <li><a href="#">Marketing Manager</a></li>
                            <li><a href="#">AngularJs Master</a></li>
                        </ul>
                    </div><!--sidebar widget end-->
                    <div class="sidebar-widget">
                        <h3>Events</h3>
                        <div class="side-event clearfix">
                            <div class="s-event-date">
                                <span>April 16</span>
                                2016
                            </div>
                            <div class="s-event-content">
                                <h5> <a href="#">
                                        World online Video Tour at assan campus  
                                    </a></h5>
                                <p>9:AM - 1:PM</p>
                            </div>
                        </div><!--event end-->
                        <div class="side-event clearfix">
                            <div class="s-event-date">
                                <span>April 16</span>
                                2016
                            </div>
                            <div class="s-event-content">
                                <h5> <a href="#">
                                        World online Video Tour at assan campus  
                                    </a></h5>
                                <p>9:AM - 1:PM</p>
                            </div>
                        </div><!--event end-->
                        <div class="side-event clearfix">
                            <div class="s-event-date">
                                <span>April 16</span>
                                2016
                            </div>
                            <div class="s-event-content">
                                <h5> <a href="#">
                                        World online Video Tour at assan campus  
                                    </a></h5>
                                <p>9:AM - 1:PM</p>
                            </div>
                        </div><!--event end-->
                    </div><!--sidebar widget end-->
                    <div class="sidebar-widget">
                        <h3>Tag Cloud</h3>
                        <ul class="list-inline tag-list">
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">AngularJs</a></li>
                            <li><a href="#">Meteor</a></li>
                            <li><a href="#">ReactJs</a></li>
                            <li><a href="#">.Net</a></li>
                            <li><a href="#">Jquery</a></li>
                        </ul>
                    </div><!--sidebar widget end-->
                </div>
            </div>
        </div>

 <div class="space40"></div>
        <!--footer start-->
         <?php require_once('footer.php'); ?>    