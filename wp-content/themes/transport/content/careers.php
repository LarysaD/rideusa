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
                <div class="contact-form-box ">
                    <div class="row">
                       <div class="carrer-form">
                            <h4>Applicant Information:</h4>
                           <form action="careersForm.php" method="POST">
                               <div class="field">
                                    <label for="fullName">Full Name</label>
                                   <input type="text" name="fullName" id="fullName" placeholder="First Name, Last Name">
                               </div>
                               <div class="field">
                                    <label for="dateYear">Date</label>
                                   <select class="date-year" id="dateYear" name="dateYear"><option value="">Year</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="selected">2016</option><option value="2017">2017</option><option value="2018">2018</option>

                                   </select>
                                   <select class="date-month" id="date-month" name="date-month"><option value="">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3" selected="selected">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>

                                   <select class="date-day" id="date-day" name="date-day"><option value="">Day</option><option value="1" selected="selected">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                               </div>
                               <div class="field">
                                    <label class="labelAdress" for="adress">Adress</label>
                                   <textarea name="adress" id="adress" rows="5" placeholder="Street Adress, Apartment/Unit, City, State, ZIP Code"></textarea>
                               </div>
                               <div class="field">
                                    <label for="phone">Phone</label>
                                   <input type="text" name="phone" id="phone" placeholder="Phone Number">
                               </div>
                               <div class="field">
                                    <label for="emailAdress">Email</label>
                                   <input type="email" name="emailAdress" id="emailAdress" placeholder="Email Adress">
                               </div>
                               <div class="field">
                                   <label for="dateAvailable">Date Available</label>
                                   <select class="date-yearAvailable" id="dateYearAvailable" name="dateYearAvailable"><option value="">Year</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016" selected="selected">2016</option><option value="2017">2017</option><option value="2018">2018</option>

                                   </select>
                                   <select class="date-monthAvailable" id="date-monthAvailable" name="date-monthAvailable"><option value="">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3" selected="selected">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>

                                   <select class="date-dayAvailable" id="date-dayAvailable" name="date-dayAvailable"><option value="">Day</option><option value="1" selected="selected">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                               </div>
                               <div class="field">
                                    <label for="daysAvailable">Days Available</label>
                                   <input type="text" name="daysAvailable" id="daysAvailable" placeholder="Days Available">
                               </div>
                               <div class="field">
                                    <label for="daysAvailable">Desired Salary</label>
                                   <input type="text" name="desiredSalary" id="desiredSalary" placeholder="Desired Salary">
                               </div>
                               <div class="field">
                                    <label for="position">Position Aplied for</label>
                                   <input type="text" name="position" id="position" placeholder="Position Aplied For">
                               </div>
                               <div class="field radioButtons">
                                  <label for="usCitizen">Are you a citizen of the United States?</label>
                                  
                                     <input type="radio" name="usCitizen" value="YES"><span>YES</span>
                                     <input type="radio" name="usCitizen" value="NO"><span>NO</span>
                                 
                               </div>
                               <div class="field radioButtons" >
                                    <label for="workedBefore">Have you ever worked for this company?</label>
                                     <input type="radio" name="workedBefore" value="YES"><span>YES</span>
                                     <input type="radio" name="workedBefore" value="NO"><span>NO</span>
                               </div>
                               <div class="field">
                                    <label for="ifYes">If Yes, When?</label>
                                   <input type="text" name="ifYes" id="ifYes">
                               </div>
                               <div class="field radioButtons">
                                  <label for="convicted">Have you ever been convicted of a felony?</label>
                                  
                                     <input type="radio" name="convicted" value="YES"><span>YES</span>
                                     <input type="radio" name="convicted" value="NO"><span>NO</span>
                               </div>
                                 <div class="field">
                                    <label for="ifConvicted">If Yes, explain</label>
                                   <input type="text" name="ifConvicted" id="ifConvicted">
                               </div>
                                <h4>Previous Employment:</h4>
                               <div class="field">
                                    <label for="company">Company</label>
                                   <input type="text" name="company" id="company" placeholder="Company">
                               </div>
                               <div class="field">
                                    <label for="phonePrevious">Phone</label>
                                   <input type="text" name="phonePrevious" id="phonePrevious" placeholder="Phone">
                               </div>
                                <div class="field">
                                    <label class="labelAdress" for="adressPrevious">Adress</label>
                                   <textarea name="adressPrevious" id="adressPrevious" rows="5" placeholder="Street Adress, Apartment/Unit, City, State, ZIP Code"></textarea>
                               </div>
                                <div class="field">
                                    <label for="supervisor">Supervisor</label>
                                   <input type="text" name="supervisor" id="supervisor" placeholder="Supervisor">
                               </div>
                                <div class="field">
                                    <label for="jobTitle">Job Title</label>
                                   <input type="text" name="jobTitle" id="jobTitle" placeholder="Job Title">
                               </div>
                                <div class="field">
                                    <label for="startingSalary">Starting Salary</label>
                                   <input type="text" name="startingSalary" id="startingSalary" placeholder="Starting Salary">
                               </div>
                                <div class="field">
                                    <label for="endingSalary">Ending Salary</label>
                                   <input type="text" name="endingSalary" id="endingSalary" placeholder="Ending Salary">
                               </div>
                                <div class="field">
                                    <label class="labelAdress" for="responsabilities">Responsabilities</label>
                                   <textarea name="responsabilities" id="responsabilities" rows="5" placeholder="Responsabilities"></textarea>
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