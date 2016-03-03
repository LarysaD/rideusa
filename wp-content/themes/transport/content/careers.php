<?php
/**
 * Transport - Carrers custom Form
 * 
 * @package transport
 * @subpackage transport.content
 * @since transport 1.0.0
 * 
 */
?>
<div class="careers-form">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading "> 
                    <span><?php echo esc_html(get_post_meta(get_the_ID(), 'transport_sub_title', true)); ?></span>
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="contact-form-box">
                    <div class="row">
                       <div class="carrer-form">
                            <h4 class="carrersTitle">Applicant Information:</h4>
                           <form action="careersForm.php" method="POST" id="careersForm">
                               <div class="field">
                                    <div class="col-md-3 nopad">
                                        <label for="fullName">Full Name</label>
                                    </div>
                                   <div class="col-md-9">
                                       <input type="text" name="fullName" id="fullName" placeholder="First Name, Last Name, M.I">
                                   </div>
                               </div>
                               <div class="field">
                                   <div class="col-md-3 nopad"> 
                                        <label for="dateYear">Date</label>
                                   </div>

                                    <div class="col-md-9">
                                        <div class="col-md-4 col-xs-12 padSelect selectBoxes"> 
                                           <select class="date-year" id="dateYear" name="dateYear"><option value="default" selected="selected">Year</option><option value="2016" >2016</option><option value="2017">2017</option><option value="2018">2018</option> </select>        
                                        </div>
                                         <div class="col-md-4 col-xs-12 padSelect selectBoxes"> 
                                           <select class="date-month" id="date-month" name="dateMonth"><option value="default" selected="selected">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3" >Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
                                        </div>
                                         <div class="col-md-4 col-xs-12 padSelect selectBoxes last"> 
                                           <select class="date-day" id="date-day" name="dateDay"><option value="default" selected="selected">Day</option><option value="1" >1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                                        </div>
                                    </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad"> 
                                        <label class="labelAdress" for="adress">Address</label>
                                    </div>
                                    <div class="col-md-9">
                                         <textarea name="adress" id="adress" rows="4" placeholder="Street Address, Apartment/Unit, City, State, ZIP Code"></textarea>
                                   </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad"> 
                                      <label for="phone">Phone</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                    </div>
                               </div>
                               <div class="field">
                                   <div class="col-md-3 nopad"> 
                                        <label for="emailAdress">Email</label>
                                    </div>
                                   <div class="col-md-9">
                                        <input type="email" name="emailAdress" id="emailAdress" placeholder="Email Address">
                                    </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad"> 
                                         <label for="dateAvailable">Date Available</label>
                                    </div>
                                     <div class="col-md-9">
                                         <div class="col-md-4 padSelect selectBoxes"> 
                                           <select class="date-yearAvailable" id="dateYearAvailable" name="dateYearAvailable"><option value="default" selected="selected">Year</option><option value="2016" >2016</option><option value="2017">2017</option><option value="2018">2018</option>
                                           </select>
                                        </div>
                                        <div class="col-md-4 padSelect selectBoxes"> 
                                           <select class="date-monthAvailable" id="date-monthAvailable" name="dateMonthAvailable"><option value="default" selected="selected">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3" >Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
                                        </div>
                                         <div class="col-md-4 padSelect selectBoxes last"> 
                                            <select class="date-dayAvailable" id="date-dayAvailable" name="dateDayAvailable"><option value="default" selected="selected">Day</option><option value="1" >1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                                        </div>
                                    </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad"> 
                                         <label for="daysAvailable">Days Available</label>
                                    </div>
                                    <div class="col-md-9"> 
                                        <input type="text" name="daysAvailable" id="daysAvailable" placeholder="Days Available">
                                    </div>
                               </div>
                               <div class="field">
                                     <div class="col-md-3 nopad"> 
                                         <label for="daysAvailable">Desired Salary</label>
                                    </div>
                                    <div class="col-md-9"> 
                                         <input type="text" name="desiredSalary" id="desiredSalary" placeholder="$">
                                    </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad"> 
                                         <label for="position">Position Aplied for</label>
                                    </div>
                                    <div class="col-md-9"> 
                                         <input type="text" name="position" id="position" placeholder="Position Aplied For">
                                    </div>
                               </div>
                               <div class="field radioButtons">
                                    <div class="col-md-3 nopad"> 
                                        <label for="usCitizen">Are you a citizen of the United States?</label>
                                    </div>
                                     <div class="col-md-9 radioContainer"> 
                                        <div class="col-md-2 col-xs-6 center nopad">
                                              <input type="radio" name="usCitizen" value="YES"><span>YES</span>  
                                        </div> 
                                         <div class="col-md-2 col-xs-6 center nopad">
                                              <input type="radio" name="usCitizen" value="NO"><span>NO</span>
                                        </div>
                                    </div>
                                 
                               </div>
                               <div class="field radioButtons">
                                    <div class="col-md-3 nopad"> 
                                         <label for="ifNoCitizen">If no, are you authorized to work in the U.S.?</label>
                                    </div>
                                    <div class="col-md-9 radioContainer">
                                        <div class="col-md-2 col-xs-6  center nopad">
                                            <input type="radio" name="ifNoCitizen" value="YES"><span>YES</span>
                                        </div>
                                        <div class="col-md-2  col-xs-6  center nopad">
                                            <input type="radio" name="ifNoCitizen" value="NO"><span>NO</span>
                                        </div>
                                          
                                    </div>      
                                 
                               </div>
                               <div class="field radioButtons" >
                                     <div class="col-md-3 nopad"> 
                                            <label for="workedBefore">Have you ever worked for this company?</label>
                                    </div>
                                    <div class="col-md-9 radioContainer">
                                        <div class="col-md-2  col-xs-6  center nopad">
                                             <input type="radio" name="workedBefore" value="YES"><span>YES</span>
                                        </div>
                                       
                                       <div class="col-md-2  col-xs-6 center nopad">
                                           <input type="radio" name="workedBefore" value="NO"><span>NO</span>
                                       </div>
                                    </div>
                                     
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad"> 
                                         <label for="ifYes">If Yes, When?</label>
                                    </div>
                                    <div class="col-md-9">
                                         <input type="text" name="ifYes" id="ifYes">
                                    </div>    
                               </div>
                               <div class="field radioButtons">
                                     <div class="col-md-3 nopad"> 
                                         <label for="convicted">Have you ever been convicted of a felony?</label>
                                    </div>
                                     <div class="col-md-9 radioContainer">
                                        <div class="col-md-2  col-xs-6  center nopad">
                                            <input type="radio" name="convicted" value="YES"><span>YES</span>
                                        </div>
                                         <div class="col-md-2  col-xs-6 center nopad">
                                            <input type="radio" name="convicted" value="NO"><span>NO</span>
                                         </div>    
                                     </div>     
                               </div>
                                 <div class="field">
                                    <div class="col-md-3 nopad"> 
                                         <label for="ifConvicted">If Yes, explain</label>
                                    </div>
                                    <div class="col-md-9">
                                         <input type="text" name="ifConvicted" id="ifConvicted">
                                    </div> 
                               </div>
                                <h4 class="carrersTitle">Previous Employment:</h4>
                               <div class="field">
                                    <div class="col-md-3 nopad">
                                         <label for="company">Company</label>
                                    </div>
                                   <div class="col-md-9">
                                        <input type="text" name="company" id="company" placeholder="Company">
                                   </div>
                               </div>
                               <div class="field">
                                     <div class="col-md-3 nopad">
                                          <label for="phonePrevious">Phone</label>
                                    </div>
                                    <div class="col-md-9">
                                          <input type="text" name="phonePrevious" id="phonePrevious" placeholder="Phone">
                                    </div>
                               </div>
                                <div class="field">
                                    <div class="col-md-3 nopad">
                                         <label class="labelAdress" for="adressPrevious">Address</label>
                                    </div>
                                    <div class="col-md-9">
                                         <textarea name="adressPrevious" id="adressPrevious" rows="4" placeholder="Street Address, Apartment/Unit, City, State, ZIP Code"></textarea>
                                    </div>
                               </div>
                                <div class="field">
                                     <div class="col-md-3 nopad">
                                         <label for="supervisor">Supervisor</label>
                                     </div>
                                     <div class="col-md-9">
                                        <input type="text" name="supervisor" id="supervisor" placeholder="Supervisor">
                                    </div>
                               </div>
                                <div class="field">
                                     <div class="col-md-3 nopad">
                                          <label for="jobTitle">Job Title</label>
                                    </div>
                                    <div class="col-md-9">
                                         <input type="text" name="jobTitle" id="jobTitle" placeholder="Job Title">
                                    </div>
                               </div>
                                <div class="field">
                                     <div class="col-md-3 nopad">
                                          <label for="startingSalary">Starting Salary</label>
                                    </div>
                                    <div class="col-md-9">
                                         <input type="text" name="startingSalary" id="startingSalary" placeholder="$">
                                    </div>
                                  
                               </div>
                                <div class="field">
                                      <div class="col-md-3 nopad">
                                         <label for="endingSalary">Ending Salary</label>
                                      </div>
                                      <div class="col-md-9">
                                          <input type="text" name="endingSalary" id="endingSalary" placeholder="$">
                                      </div>   
                               </div>
                                <div class="field">
                                     <div class="col-md-3 nopad">
                                         <label class="labelAdress" for="responsabilities">Responsabilities</label>
                                    </div>
                                    <div class="col-md-9">
                                        <textarea name="responsabilities" id="responsabilities" rows="4" placeholder="Responsabilities"></textarea>
                                    </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad">
                                         <label for="from">From</label>
                                    </div>
                                    <div class="col-md-9">
                                         <input type="text" name="from" id="from" placeholder="From">
                                    </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad">
                                          <label for="to">To</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="to" id="to" placeholder="To">
                                    </div> 
                               </div>
                                <div class="field">
                                    <div class="col-md-3 nopad">
                                         <label for="from">Reason for Leaving</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="reasonForLeaving" id="reasonForLeaving" placeholder="Reason for Leaving">
                                    </div>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad">
                                        <label class="uploadResume" for="uploadResume">Upload Resume (*max 8MB)</label>
                                    </div>
                                    <div class="col-md-9">
                                         <div class="browse-wrap">
                                              <div class="title">Choose a file to upload</div>
                                              <input type="file" name="uploadResume" id="uploadResume" title="Choose a file to upload" class="upload">
                                        </div>  
                                        <span class="upload-path" id="uploadFileName"></span>
                                    </div> 
                                        <span class="upload-path" id="uploadFileName"></span>
                               </div>
                               <div class="field">
                                    <div class="col-md-3 nopad">
                                         <label class="uploadDrivingRecord" for="uploadDrivingRecord">Upload Driving Record (*max 8MB)</label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="browse-wrap">
                                             <div class="title">Choose a file to upload</div>
                                            <input type="file" name="uploadDrivingRecord" id="uploadDrivingRecord" title="Choose a file to upload" class="upload">
                                        </div>
                                        <span class="upload-path" id="uploadDrivingFileName"></span>
                                  </div>
                               </div>
                                <div class="field radioButtons">
                                     <div class="col-md-3 nopad"> 
                                         <label for="contactPreviousSupervisor">May we contact your previous supervisor for a reference?</label>
                                    </div>
                                     <div class="col-md-9 radioContainer">
                                        <div class="col-md-2  col-xs-6 col-sm-12 center nopad">
                                            <input type="radio" name="contactPreviousSupervisor" value="YES"><span>YES</span>
                                        </div>
                                         <div class="col-md-2  col-xs-6 col-sm-12 center nopad">
                                            <input type="radio" name="contactPreviousSupervisor" value="NO"><span>NO</span>
                                         </div>    
                                     </div>
                                     
                               </div>
                               
                               <div class="submitButton">
                                    <input type="submit" value="SUBMIT" id="careersSubmit">
                               </div>
                              
                           </form>
                          
                       </div>
                    </div>
                </div>
            </div>
           
        </div>
               
    </div>
</div>
<?php 