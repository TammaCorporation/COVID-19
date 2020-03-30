<!-- page header -->
<?php include('header.php'); ?>



    <div class=" outer-body  ">
        <div class="inner-body d-flex justify-content-center align-items-center">
            <form class="col-12 col-sm-12 col-md- 9 col-lg-6 col-xl-6 ">
                <div class="form-header text-center">
                    <span class="lead">Curriculum Update!</span>
                </div>
                <hr>
                <div class="row ">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                       <div class="row">
                            <div class="form-group col-12 col-sm-12 col-md- 9 col-lg-6 col-xl-6">
                                <label><b>Grade:</b></label><br>
                                <select name="key" class="form-control ">
                                    <option selected disabled>CHOOSE CLASS</option>
                                    <option value="first grade"> Grade One</option>
                                    <option value="second grade">Grade Two</option>
                                    <option value=" third Grade">Grade Three</option>
                                    <option value="fourth grade">Grade Four</option>
                                    <option value="fifth Grade">Grade Five</option>
                                    <option value="sixth Grade">Grade Six</option>
                                    <option value="seventh Grade">Grade Seven</option>
                                    <option value="eighth Grade">Grade Eight</option>
                                    <option value="nineth Grade">Grade Nine</option>
                                    <option value="tenth Grade">Grade Ten</option>
                                    <option value="eleventh Grade">Grade Eleven</option>
                                    <option value="twelveth Grade">Grade Twelve</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-12 col-sm-12 col-md- 9 col-lg-6 col-xl-6">
                                <label><b>Subject:</b></label>
                                <select name="key" class="form-control ">
                                    <option selected disabled>CHOOSE SUBJECT</option>
                                    <option value="english">English</option>
                                    <option value="math">Math</option>
                                    <option value=" social science">Social Science</option>
                                    <option value=" general knowledge">General Knowledge</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                       <div class="row">
                            <div class="form-group col-12 col-sm-12 col-md- 9 col-lg-6 col-xl-6">
                                <label><b>Semester:</b></label><br>
                                <select name="key" class="form-control  ">
                                    <option selected disabled>CHOOSE SEMESTER</option>
                                    <option value="first semester">Semester One</option>
                                    <option value="second semester">Semester Two</option>
                                </select>
                            </div>
                            <div class="form-group col-12 col-sm-12 col-md- 9 col-lg-6 col-xl-6">
                                <label><b>Period:</b></label><br>
                                <select name="key" class="form-control ">
                                    <option selected disabled>CHOOSE PERIOD</option>
                                    <option value="first period">1st Period</option>
                                    <option value="second period">2nd Period</option>
                                    <option value="third period">3rd Period</option>
                                    <option value="fourth period">4thd Period</option>
                                    <option value="fifth period">5th Period</option>
                                    <option value="sixth period">6th Period</option>
                                </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><b>Topic:</b></label><br>
                    <textarea type="text" class="form-control" rows="3" placeholder="provide topic for discussion" required></textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Learning Outcome:</b></label><br>
                    <textarea type="text" class="form-control" rows="3" placeholder="knowledge or skills students should acquire by the end of a particular exercise" required></textarea
                    </div>
                    <div class="form-group">
                        <label><b>Objectives:</b></label><br>
                    <textarea type="text" class="form-control" rows="3"  placeholder="what students will achieved at the end of this exercise" required></textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Content:</b></label><br>
                    <textarea type="text" class="form-control" rows="3"  placeholder="what the exercise is about" required></textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Activities:</b></label><br>
                    <textarea type="text" class="form-control" rows="3"  placeholder="things students need to do" required></textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Materials:</b></label><br>
                    <textarea type="text" class="form-control" rows="3"  placeholder="tools students need" required></textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Competency Assessment:</b></label><br>
                    <textarea type="text" class="form-control" rows="3" placeholder="students progress" required></textarea>
                    </div>
                    <div class=" mt-2 justify-content-center">
                        <button type="button" class=" col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12   btn btn-primary btn-md  text-white col-8 justify-self-center mb-3 button" >Save Changes</button>
                    </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
       


<!-- page footer -->
<?php include('footer.php'); ?>