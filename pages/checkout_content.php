<br>
<section class="cart-section">    
    <div class="row match-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>You have to login to complete your valuable order. If you are not registered then rigister now !</h5>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="row match-height">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 align="center"  class="text-center text-success" id="basic-layout-tooltip">Register Form</h3>
                            <hr/>
                            <br>
                            <form class="form" action="shopping_page.php" method="post">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label for="issueinput1">First Name</label>
                                        <input type="text" id="issueinput1" class="form-control" placeholder="First Name" name="first_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Frist Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput1">Last Name</label>
                                        <input type="text" id="issueinput1" class="form-control" placeholder="Last Name" name="last_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Last Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="issueinput2">Email Address</label>
                                        <input type="email" id="issueinput2" class="form-control" placeholder="Email Address" name="email_address" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput2">Password</label>
                                        <input type="password" id="issueinput2" class="form-control" placeholder="Password" name="password" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput8">Address</label>
                                        <textarea id="issueinput8" rows="5" class="form-control" name="address" placeholder="Address" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Address"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput2">Phone Number</label>
                                        <input type="text" id="issueinput2" class="form-control" placeholder="Phone Number" name="phone_number" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Phone Number">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput2">City</label>
                                        <input type="text" id="issueinput2" class="form-control" placeholder="City" name="City" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="City">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput6">Country</label>
                                        <select id="issueinput6" name="country" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Country">
                                            <option value="">-- Select Country Name --</option>
                                            <option value="ban">Bangladesh</option>
                                            <option value="pak">Pakistan</option>
                                            <option value="ind">India</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">

                                    <button type="reset" name="btn" class="btn btn-warning mr-1 ">
                                        <i class="icon-cross2"></i> Reset
                                    </button> 
                                    <button type="submit" name="btn" class="btn btn-primary pull-right">
                                        <i class="icon-check2"></i> Registration
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 align="center"  class="text-center text-success" id="basic-layout-tooltip">Login Form</h3>
                            <hr/>
                            <br>
                            <form class="form" action="" method="post">
                                <div class="form-body">



                                    <div class="form-group">
                                        <label for="issueinput2">Email Address</label>
                                        <input type="email" id="issueinput2" class="form-control" placeholder="Email Address" name="email_address" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput2">Password</label>
                                        <input type="password" id="issueinput2" class="form-control" placeholder="Password" name="password" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Password">
                                    </div>

                                </div>
                                <div class="form-actions"> 
                                    <button type="submit" name="btn" class="btn btn-primary btn-block">
                                        <i class="icon-check2"></i> Sign In
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">

                                <form class="form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label >First Name</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                                <div class="form-control-position">
                                                    <i class="icon-head"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label >Employee Name</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                                <div class="form-control-position">
                                                    <i class="icon-head"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="timesheetinput2">Project Name</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="icon-briefcase4"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="timesheetinput3">Date</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="date" id="timesheetinput3" class="form-control" name="date">
                                                <div class="form-control-position">
                                                    <i class="icon-calendar5"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Rate Per Hour</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">$</span>
                                                <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)" name="rateperhour">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="timesheetinput5">Start Time</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                        <div class="form-control-position">
                                                            <i class="icon-clock5"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="timesheetinput6">End Time</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                        <div class="form-control-position">
                                                            <i class="icon-clock5"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="timesheetinput7">Notes</label>
                                            <div class="position-relative has-icon-left">
                                                <textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="notes"></textarea>
                                                <div class="form-control-position">
                                                    <i class="icon-file2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="icon-cross2"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icon-check2"></i> Save
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
