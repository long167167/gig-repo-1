<?php
/**
* application/views/gigs/add.php is the add gigs page for Gigs controller
*
* views/gigs/add.php
*
* @package ITC 260 Gig Central CodeInitor
* @subpackage Gig Controller
* @author Patricia Barker <pbarke01@seattlecentral.edu>
* @version 2.1 2015/06/11
* @link http://www.tcbcommercialproperties.com/sandbox/codeignitor/
* @license http://www.apache.org/licenses/LICENSE-2.0
* @see Gig_model.php
* @see Gig.php
* @todo none
*/
//error messages for form validation

?>

<?php $this->load->view($this->config->item('theme') . 'headerjqueryui'); ?>

<div class="container">
  <div class="col-lg-10">

        <form class="form-horizontal" role="form" method="post" action="add">
        <fieldset>
            
            <div class="form-group">
                <h1><strong>Add a Gig</strong></h1><br />
                <legend><h3><strong>Company Information</strong></h3></legend>

            </div>
<!--Company Name            form-group 1 -->
            <div class="form-group">
                <label for="Name" class="col-lg-3 control-label"><em>Company Name</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('Name'); ?>
                        <input type="text" class="form-control" id="Name" name="Name" placeholder="Company Name" value="<?php echo set_value('Name'); ?>">
                    </div>
            </div>
  <!--CompanyAddress            form-group 2 -->          
            <div class="form-group">
                <label for="CompanyAddress" class="col-lg-3 control-label"><em>Company Address</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('CompanyAddress'); ?>
                        <input type="text" class="form-control" id="CompanyAddress" name="CompanyAddress" placeholder="Company Address" value="<?php echo set_value('CompanyAddress'); ?>">
                    </div>
            </div>
 <!--CompanyCity            form-group 3 -->           
            <div class="form-group">
                <label for="CompanyCity" class="col-lg-3 control-label"><em>City</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('CompanyCity'); ?>
                        <input type="text" class="form-control" id="CompanyCity" name="CompanyCity" placeholder="City" value="<?php echo set_value('CompanyCity'); ?>">
                    </div>
            </div>
 <!-- CompanyState           form-group 4 -->
            <div class="form-group">
                <label for="CompanyState" class="col-lg-3 control-label"><em>State</em></label>
                    <div class="col-md-6">
                    <?php echo form_error('CompanyState'); ?>
                    <select class="form-control" id="CompanyState" name="CompanyState">                        
                        <option value="">Select State</option>
                        <option value="<?php echo set_value('CompanyState'); ?>AK">Alaska</option>
                        <option value="<?php echo set_value('CompanyState'); ?>AL">Alabama</option>
                        <option value="<?php echo set_value('CompanyState'); ?>AR">Arkansas</option>
                        <option value="<?php echo set_value('CompanyState'); ?>AZ">Arizona</option>
                        <option value="<?php echo set_value('CompanyState'); ?>CA">California</option>
                        <option value="<?php echo set_value('CompanyState'); ?>CO">Colorado</option>
                        <option value="<?php echo set_value('CompanyState'); ?>CT">Connecticut</option>
                        <option value="<?php echo set_value('CompanyState'); ?>DC">District of Columbia</option>
                        <option value="<?php echo set_value('CompanyState'); ?>DE">Delaware</option>
                        <option value="<?php echo set_value('CompanyState'); ?>FL">Florida</option>
                        <option value="<?php echo set_value('CompanyState'); ?>GA">Georgia</option>
                        <option value="<?php echo set_value('CompanyState'); ?>HI">Hawaii</option>
                        <option value="<?php echo set_value('CompanyState'); ?>IA">Iowa</option>
                        <option value="<?php echo set_value('CompanyState'); ?>ID">Idaho</option>
                        <option value="<?php echo set_value('CompanyState'); ?>IL">Illinois</option>
                        <option value="<?php echo set_value('CompanyState'); ?>IN">Indiana</option>
                        <option value="<?php echo set_value('CompanyState'); ?>KS">Kansas</option>
                        <option value="<?php echo set_value('CompanyState'); ?>KY">Kentucky</option>
                        <option value="<?php echo set_value('CompanyState'); ?>LA">Louisiana</option>
                        <option value="<?php echo set_value('CompanyState'); ?>MA">Massachusetts</option>
                        <option value="<?php echo set_value('CompanyState'); ?>MD">Maryland</option>
                        <option value="<?php echo set_value('CompanyState'); ?>ME">Maine</option>
                        <option value="<?php echo set_value('CompanyState'); ?>MI">Michigan</option>
                        <option value="<?php echo set_value('CompanyState'); ?>MN">Minnesota</option>
                        <option value="<?php echo set_value('CompanyState'); ?>MO">Missouri</option>
                        <option value="<?php echo set_value('CompanyState'); ?>MS">Mississippi</option>
                        <option value="<?php echo set_value('CompanyState'); ?>MT">Montana</option>
                        <option value="<?php echo set_value('CompanyState'); ?>NC">North Carolina</option>
                        <option value="<?php echo set_value('CompanyState'); ?>ND">North Dakota</option>
                        <option value="<?php echo set_value('CompanyState'); ?>NE">Nebraska</option>
                        <option value="<?php echo set_value('CompanyState'); ?>NH">New Hampshire</option>
                        <option value="<?php echo set_value('CompanyState'); ?>NJ">New Jersey</option>
                        <option value="<?php echo set_value('CompanyState'); ?>NM">New Mexico</option>
                        <option value="<?php echo set_value('CompanyState'); ?>NV">Nevada</option>
                        <option value="<?php echo set_value('CompanyState'); ?>NY">New York</option>
                        <option value="<?php echo set_value('CompanyState'); ?>OH">Ohio</option>
                        <option value="<?php echo set_value('CompanyState'); ?>OK">Oklahoma</option>
                        <option value="<?php echo set_value('CompanyState'); ?>OR">Oregon</option>
                        <option value="<?php echo set_value('CompanyState'); ?>PA">Pennsylvania</option>
                        <option value="<?php echo set_value('CompanyState'); ?>PR">Puerto Rico</option>
                        <option value="<?php echo set_value('CompanyState'); ?>RI">Rhode Island</option>
                        <option value="<?php echo set_value('CompanyState'); ?>SC">South Carolina</option>
                        <option value="<?php echo set_value('CompanyState'); ?>SD">South Dakota</option>
                        <option value="<?php echo set_value('CompanyState'); ?>TN">Tennessee</option>
                        <option value="<?php echo set_value('CompanyState'); ?>TX">Texas</option>
                        <option value="<?php echo set_value('CompanyState'); ?>UT">Utah</option>
                        <option value="<?php echo set_value('CompanyState'); ?>VA">Virginia</option>
                        <option value="<?php echo set_value('CompanyState'); ?>VT">Vermont</option>
                        <option value="<?php echo set_value('CompanyState'); ?>WA">Washington</option>
                        <option value="<?php echo set_value('CompanyState'); ?>WI">Wisconsin</option>
                        <option value="<?php echo set_value('CompanyState'); ?>WV">West Virginia</option> 
                        <option value="<?php echo set_value('CompanyState'); ?>WY">Wyoming</option>
                        </select>
                    </div>
            </div>
<!--  ZipCode          form-group 5 -->
            <div class="form-group">
                <label for="ZipCode" class="col-lg-3 control-label"><em>Zip Code</em></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="ZipCode" name="ZipCode" placeholder="Zip Code" value="<?php echo set_value('ZipCode'); ?>">
                    </div>
            </div>
<!--CompanyPhone            form-group 6 -->
            <div class="form-group">
                <label for="CompanyPhone" class="col-lg-3 control-label"><em>Company Phone</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('CompanyPhone'); ?>
                        <input type="text" class="form-control" id="CompanyPhone" name="CompanyPhone" placeholder="Phone Number" value="<?php echo set_value('CompanyPhone'); ?>">
                    </div>
            </div>
<!-- CompanyWebsite           form-group 7 -->
            <div class="form-group">
                <label for="CompanyWebsite" class="col-lg-3 control-label"><em>Company Website</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('CompanyWebsite'); ?>
                        <input type="text" class="form-control" id="CompanyWebsite" name="CompanyWebsite" placeholder="Company Website" value="<?php echo set_value('CompanyWebsite'); ?>">
                    </div>
            </div>
<!--            form-group 8 -->
            <br>
            <br>
                <fieldset>
                <legend><h3><strong>Company Gig Contact</strong></h3></legend>
            <div class="form-group">
                <label for="FirstName" class="col-lg-3 control-label"><em>First Name</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('FirstName'); ?>
                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" value="<?php echo set_value('FirstName'); ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="LastName" class="col-lg-3 control-label"><em>Last Name</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('LastName'); ?>
                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" value="<?php echo set_value('LastName'); ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="Email" class="col-lg-3 control-label"><em>Email</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('Email'); ?>
                        <input type="text" class="form-control" id="Email" name="Email" placeholder="Gig Contact Email" value="<?php echo set_value('Email'); ?>">
                    </div>
            </div>
            <div class="form-group">
                <label for="Phone" class="col-lg-3 control-label"><em>Phone</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('Phone'); ?>
                        <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Gig Contact Phone" value="<?php echo set_value('Phone'); ?>">
                    </div>
            </div>
            </fieldset>
            <fieldset>
            <div class="form-group">
                <label for="EmploymentType" class="col-lg-3 control-label"><em>Employment Type</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('EmploymentType'); ?>
                        <select class="form-control" id="EmploymentType" name="EmploymentType">
                            <option value="0">Select One</option>
                            <option value="contract" <?php echo set_select('EmploymentType', 'contract'); ?>>Contract</option>
                            <option value="intern" <?php echo set_select('EmploymentType', 'intern'); ?>>Intern</option>
                            <option value="temporary" <?php echo set_select('EmploymentType', 'temporary'); ?>>Temporary</option>
                            <option value="permanent" <?php echo set_select('EmploymentType', 'permanent'); ?>>Permanent</option>
                        </select>
                    </div>
            </div>
                </fieldset>
                <fieldset>
            <div class="form-group">
                <label for="PayRate" class="col-lg-3 control-label"><em>Pay rate</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('PayRate'); ?>
                        <input type="text" class="form-control" id="PayRate" name="PayRate" placeholder="Pay rate" value="<?php echo set_value('PayRate'); ?>">
                    </div>
            </div>
                </fieldset>
        <br>
        <br>
            <fieldset>
            <legend><h3><strong>Gig Close Date</strong></h3></legend>
                <div class="form-group">
            <label for="GigCloseDate"class="col-lg-3 control-label hidden-label"><em>Gig Close Date</em></label>
                    <div class="col-md-6">
                    <?php echo form_error('GigCloseDate'); ?>
            <?php $attributes = 'id="GigCloseDate" placeholder="Gig close date"';
            echo form_input('GigCloseDate', set_value('GigCloseDate'), $attributes); ?> 
                        </div>
                    </div>
                </fieldset>
        <br>
        <br>
                 <fieldset>
                <legend><h3><strong>Description</strong></h3></legend>
            <div class="form-group">
                <label for="GigOutline" class="col-lg-3 control-label hidden-label"><em>Gig Outline</em></label>
                    <div class="col-md-6">
                        <?php echo form_error('GigOutline'); ?>
                        <textarea class="form-control" rows="15" cols="25" id="GigOutline" name="GigOutline" placeholder="Project/Gig Description"><?php echo set_value('GigOutline'); ?></textarea>

                    </div>
            </div>
                </fieldset>
            <br>
            <br>
                <fieldset>
                <legend><h3><strong>Gig Qualifications</strong></h3></legend>
            <div class="form-group">
                <label for="GigQualify" class="col-lg-3 control-label hidden-label"><em>Qualifications</em></label><br>
                    <div class="col-md-6">
                        <?php echo form_error('GigQualify'); ?>
                        <textarea  rows="15" cols="25" class="form-control" id="GigQualify" name="GigQualify" placeholder="Qualifications"><?php echo set_value('GigQualify'); ?></textarea>
                    </div>
            </div>
                </fieldset>
        <br>
        <br>
                <fieldset>
                <legend><h3><strong>Gig Special Instructions</strong></h3></legend>
            <div class="form-group">
                <label for="SpInstructions" class="col-lg-3 control-label hidden-label"><em>Special Instructions</em></label><br>
                    <div class="col-md-6">
                        <?php echo form_error('SpInstructions'); ?>
                        <textarea rows="15" cols="25" class="form-control" id="SpInstructions" name="SpInstructions" placeholder="Special Instructions"><?php echo set_value('SpInstructions'); ?></textarea>
                    </div>
            </div>
                </fieldset>
        <br>
        <fieldset>
            <div class="col-xs-12 col-md-6 col-lg-9">
                <button type="submit" class="btn btn-default pull-right">Submit</button>
            </div>
        </fieldset>
        </form>
    </div>
</div>
<?php $this->load->view($this->config->item('theme') . 'footerjqueryui'); ?>