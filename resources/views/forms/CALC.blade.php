@extends('layouts.homeframe')

@section('content')

 <!-- Smart Wizard -->
                    <p>Petition for conversion of Certificate of Ancestral Land Claim into Certificate of Ancestral Land Title</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Information of CALC</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Ancestral Land</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Certification</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Attested</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CALC Number <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                              <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date Issued <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Location of Ancestral Land<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                          </div>
                          <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Total Area</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Awardee</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Total estimated area<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
          
                          <div class="form-group">
                          <p>Person(s) authorized to file application:</p>
                         <table>
              							<tr>
              								<th>Name of Representatives</th>
              								<th>Tribe</th>
              								<th>Address</th>
              								<th>Sex</th>
              								<th>Contact No.</th>
              							</tr>
              							<tr>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              							</tr>
              							<tr>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              							</tr>
              							<tr>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              							</tr>
              						</table>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nature of Authority <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                           <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Given <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                          
                           <div class="form-group">
                           <p>Number of Right Holders:</p>
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Family/ies<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                            <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Individual<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                        </form>

                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Location of Ancestral Land</h2>
                       <!-- <p>
                          do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p> 

                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p> -->
                       <form class="form-horizontal form-label-left">
                       <div class="form-group">
                       <p>Particular area for inclusion from the CALC area (if any)</p>
                            <table>
                							<tr>
                								<th>Barangay</th>
                								<th>Municipality</th>
                								<th>Province</th>
                							</tr>
                							<tr>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                							</tr>
                							<tr>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                							</tr>
                							<tr>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                							</tr>
                						</table>
                          </div>
                          <div class="form-group">
                          <p>Particular area for exclusion from the CALC area (if any)</p>
                            <table>
                              <tr>
                                <th>Barangay</th>
                                <th>Municipality</th>
                                <th>Province</th>
                              </tr>
                              <tr>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                              </tr>
                              <tr>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                              </tr>
                              <tr>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                                <td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
                              </tr>
                            </table>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Total estimated area<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                        </form>
                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">Certification</h2>
                       <!-- <p>
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p> -->
						<div class="form-inline">
                       	 <p>
                       	 <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
                       	 I hereby certify that the entries/statements made hereon are true and correct to the best of my knowledge.
                       	 </p>
                         	In witness, I hereunto set my hand this <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          		<span>December 30, 2014</span> <b class="caret"></b> at 
                            	<div class="form-group">
                    			<input type="email" id="ex4" class="control-label col-md-4 col-sm-4 col-xs-12" placeholder=" ">, Philippines.
                  				</div>
                  		</div>

                        <form class="form-horizontal form-label-left">
                         <table>
              							<tr>
              								<th>Name of Representatives</th>
              								<th>Community Tax Certificate No.</th>
              								<th>Place Issued</th>
              								<th>Date Issued</th>
              								<th>Signature(s)</th>
              							</tr>
              							<tr>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              							</tr>
              							<tr>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              							</tr>
              							<tr>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              								<td><input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text"></td>
              							</tr>
              						</table>
                          </form>
                      </div>
                      <div id="step-4">
                        <h2 class="StepTitle">Attested by</h2>
                        <form class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Tribal Leader<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Republic of the Philippines<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-inline">
                              SUBSCRIBED AND SWORN to before me this <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          		<span>December 30, 2014</span> <b class="caret"></b> at 
                            	<div class="form-group">
                    			<input type="email" id="ex4" class="control-label col-md-4 col-sm-4 col-xs-12" placeholder=" ">, Philippines.
                  				</div>
                  			</div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Doc. No.<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Page No.<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Book No.<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Series of<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                          </div>
                          </form>
                      <!--  <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p> -->
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
@endsection