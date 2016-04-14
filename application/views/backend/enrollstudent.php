<?php include(APPPATH.'views/backend/include/header.php') ;?>
<?php include(APPPATH.'views/backend/include/main_sidebar.php');?>
	  	  
	  
	          <!-- Main content -->
        <div class="content-wrapper" style="min-height: 946px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="text-center">
            Enroll Student
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-primary">
                <!--<div class="box-header with-border">
                  <!--<h3 class="box-title">Quick Example</h3>
                </div>-->
                <!-- form start -->
                  <div class="col-md-12">
                <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a id="block1" href="#tab_1" data-toggle="tab" aria-expanded="true">Basic Info</a></li>
                  <li class=""><a id="block2" href="#tab_2" data-toggle="tab" aria-expanded="false">Agent Commission</a></li>
                  <li class=""><a id="block3" href="#tab_3" data-toggle="tab" aria-expanded="false">Fee Component</a></li>
              </ul>
                 
                    <form id="studentinfo" name="studentinfo" autocomplete="off" role="form" class="form" method="post">                <div class="tab-content">
                      
                    
                  <div class="tab-pane active" id="tab_1">
                    <div style="clear:both;"></div>
                   <!--     Tab 1   start     -->
                  <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" value="" id="fullNameI" class="form-control" placeholder="Name" required="required" name="name">                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email ID</label>

    <input type="email" value="" id="emailIdI" class="form-control" placeholder="Email-Id" required="required" name="emailId">                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact Number</label>
    <input type="number" value="" placeholder="Mobile" id="mobileI" class="form-control" required="required" name="mobile">                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Street Address</label>
                                <input type="text" value="" id="emailIdI" class="form-control" placeholder="Student's Address" required="required" name="address">                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" value="" id="city" class="form-control" placeholder="Student's City" required="required" name="city">                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Country</label>
                                <select class="form-control" required="required" name="country"><option value="">&lt;Country&gt;</option>
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia, Plurinational State of</option>
<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, the Democratic Republic of the</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Côte d'Ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curaçao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-Bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and McDonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, the former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Réunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="BL">Saint Barthélemy</option>
<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin (French part)</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and the Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten (Dutch part)</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and the South Sandwich Islands</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan, Province of China</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-Leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela, Bolivarian Republic of</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option></select>                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Zipcode</label>
                                <input type="number" value="" id="zipcodeI" class="form-control" placeholder="Zipcode" required="required" name="zipcode">                            </div>

                                <input type="hidden" value="841785de09c867f1eb5c91492d1175ba-871369954ba5063d03c8537653c729bb" name="mcsrf">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gender</label>
                            <select id="bioGenderS" class="form-control genderSelect" required="required" name="gender"><option value="">&lt;Select Gender&gt;</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="other">Other</option></select>                            </div>

                        <div class="form-group">
                                <label for="exampleInputEmail1">Date of Birth</label>
                            
                            <div class="row">

                                <div class="form-group column col-md-3 col-sm-3 col-xs-3">
    <select required="required" id="birthDayS" class="form-control" name="birthDay"><option value="">&lt;Date&gt;</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option></select>      
                                    
                                </div>
                                <div class="form-group column col-md-4 col-sm-4 col-xs-4"><select id="birthMonthS" class="form-control" required="required" name="birthMonth"><option value="">&lt;Month&gt;</option>
<option value="01">Jan</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option></select>                                </div>
                                <div class="form-group column col-md-5 col-sm-5 col-xs-5"><input type="text" value="" placeholder="Year" id="birthYearI" class="form-control" required="required" name="birthYear">                                </div>
                                                                                                            
                            </div>
                        </div>
                   <!-- </div>
                        <div class="">-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Institute</label>
                                    <select id="instituteIdS" class="form-control" required="required" name="instituteId"><option value="">&lt;Select Institute&gt;</option>
<option value="11">New England College</option>
<option value="12">New Wales College</option>
<option value="15">Test</option>
<option value="16">Dfgdgdg</option></select>                                
                              
                                </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Select Programme</label>
                                <select id="programmeIdS" class="form-control" required="required" name="programmeId"><option value="">-Programme list will appear here once you seclect an institute-</option></select></div><div class="form-group"><label for="exampleInputEmail1">Tuition Fee To Be Paid</label><input type="number" value="" placeholder="Tuition Fees To be Paid" id="tuitionFeesI" class="form-control" name="tuitionFees">                               <!-- </div>-->
                            <div id="prgError117"></div>
                        </div>
                       <!-- <div class="">-->
                            <div class="form-group">
                                <label for="exampleInputEmail1">Select Agent</label>
                            <select id="agentIdS" class="form-control" required="required" name="agentId"><option value="">-Agent list will appear here once you seclect an institute-</option></select>                            </div>
                            <div id="agntError117"></div>
                            
                            
                               <div class="form-group">
                            <div class="control-group">
                                <div class="controls col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-offset-4 col-sm-4">
                                    <br>
                                    <div onclick=" $('#block2').click();" class="btn btn-primary btn-block">Next &gt;&gt;</div>
                                    <br>
                                </div>
                            </div>
                        </div>
                            
                            
                    <!--     Tab 1   close     -->  
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                      
                      <div style="clear:both;"></div>
                     <!--     Tab 2   start     -->
                    <div class="form-group">
                                <label for="exampleInputEmail1">Set Commission Status:</label>
                            <select id="commissionStatusS" class="form-control" required="required" name="commissionStatus"><option value="">&lt;Set Commission Status&gt;</option>
<option value="1">Paid</option>
<option value="0">Pending</option></select></div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Amount to Add to Default Commission</label>
                            <input type="number" value="" placeholder="Amount to Add to Default Commission" id="addCommissionI" class="form-control" name="addCommission"></div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Amount to Deduct from Default Commission</label>
                            <input type="number" value="" placeholder="Amount to Deduct from Default Commission" id="deductCommissionI" class="form-control" name="deductCommission"></div>
                     
                     
                     
                       <div class="form-group">
                            <div class="control-group">
                                <div class="controls col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-offset-4 col-sm-4">
                                    <br>
                                    <div onclick=" $('#block3').click();" class="btn btn-primary btn-block">Next &gt;&gt;</div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    <!--     Tab 2   close     -->  
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                      <div style="clear:both;"></div>
                    <!--     Tab 3   start     -->
                    <!-- <div class="">-->

                            <div id="retro34To19HJ"><div class="text-info">Choose an Institute from options given above to fetch fee structure</div></div>
                            <div id="strctError117"></div>
                            
                             <div class="form-group">
                            <div class="control-group">
                                <div class="controls col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-offset-4 col-sm-4">
                                    <br>
                                    <button class="btn btn-primary btn-block">Save</button>
                                    <br>
                                </div>
                            </div>
                        </div>
                            
                            
                            
                       <!-- </div>-->
                    <!--     Tab 3   close     -->  
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
                
                 
                            </form>                
                
              </div>
            </div>
                
				<?php echo form_open_multipart('admin/addstudent');?>
              <!--    <div class="box-body">
                  <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half space">
                      <label for="exampleInputfirstname">First name</label>
                      <input type="text" placeholder="First Name" id="exampleInputfirstname" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half">
                      <label for="exampleInputlastname">Last name</label>
                      <input type="text" placeholder="Last Name" id="exampleInputlastname" class="form-control">
                    </div>
                     <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half space">
                      <label for="exampleInputnickname">Nick name</label>
                      <input type="text" placeholder="Nick Name" id="exampleInputnickname" class="form-control">
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half">
                      <label for="exampleInputdob">D.O.B</label>
                      <input type="text" placeholder="D.O.B" id="exampleInputdob" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Visa category</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    
                    <div class="form-group">
                    <label>Number of weeks:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" id="reservation" class="form-control pull-right">
                    </div>
                  </div>
                    <div class="form-group">
                      <label>Courses : &nbsp;</label>
                      <input type="checkbox"> Ilets &nbsp; &nbsp;
                      <input type="checkbox"> Lorem &nbsp; &nbsp;
                      <input type="checkbox"> Ipsum &nbsp; &nbsp;
                      <input type="checkbox"> Dollor &nbsp; &nbsp;
                      <input type="checkbox"> Ut sed &nbsp; &nbsp;
                      <input type="checkbox"> Expecto
       				</div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Study plans</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    
                      <div class="form-group">
                      <label>Placement test : &nbsp;</label>
                      <input type="radio" name="test" value="yes">Yes
                      <input type="radio" name="test" value="no">No                            
                    </div>
                    <div class="form-group">
                      <label for="exampleInputtest">proficiency test</label>
                      <input type="text" placeholder="proficiency test" id="exampleInputtest" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputprice">Price</label>
                      <input type="text" placeholder="Price" id="exampleInputprice" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputmarket">Marketing specialist</label>
                      <input type="text" placeholder="Marketing specialist" id="exampleInputmarket" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputcode">Unique code</label>
                      <input type="text" placeholder="Unique code" id="exampleInputcode" class="form-control">
                    </div>
                    
                                
                    
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half space">
                      <label>Payment Staus</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12 no_padding half">
                      <label>Payment plan</label>
                      <select class="form-control">
                      <option>select</option>
                      <option>lorem</option>
                      <option>ipsum</option>
                      </select>                      
                    </div>
                    
                    
                  </div>-->

                  <div class="box-footer text-center">
                   <!-- <button class="btn btn-primary" type="submit">Add</button>-->
                  </div>
                </form>              </div><!-- /.box -->

           


            </div><!--/.col (left) -->
        
        
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


<?php include(APPPATH.'views/backend/include/footer.php')?>
 </body>
 </html>