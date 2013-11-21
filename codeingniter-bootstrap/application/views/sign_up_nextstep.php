<!DOCTYPE html> 

 <!--[if lt IE 7]> <html lang="en" class="ie ie6 lte9 lte8 lte7 os-win"> <![endif]-->
 <!--[if IE 7]> <html lang="en" class="ie ie7 lte9 lte8 lte7 os-win"> <![endif]-->
 <!--[if IE 8]> <html lang="en" class="ie ie8 lte9 lte8 os-win"> <![endif]-->
 <!--[if IE 9]> <html lang="en" class="ie ie9 lte9 os-win"> <![endif]-->
 <!--[if gt IE 9]> <html lang="en" class="os-win"> <![endif]-->
 <!--[if !IE]><!--> 


<html lang="en" class="os-win"> <!--<![endif]-->



<head>
     
<title>World's Largest Professional Network | LinkedIn</title>


<link rel="stylesheet" type="text/css" href="<?php  echo CSS.'/sign_up_nextstep_css.css' ?>">

</head>



<body class="mainbody">


<div id="header">

<div class="wrapper">

<div id="logo">

<img src="https://static.licdn.com/scds/common/u/img/logos/logo_linkedin_92x22.png"  width="92"  height="22"  >

</div>

</div>

</div>




<div id="body">

<div id="body_wrapper">


<div id="main">

	<div class="progress-container">
        
        
            
                <h1><strong><?php echo $this->session->userdata('fname'); ?></strong>, let's start creating your professional profile</h1>
              
          
      </div>



<div class="alert error" role="alert" id="top_error">

	<p>

		<strong>There were one or more errors in your submission. Please correct the marked fields below.</strong>
	</p>

</div>




      <div id="motivation">


      	<div class="profile-features">

      		<h3>A LinkedIn profile helps you...</h3>

      		<ul>
                  <li class="first">Showcase your skills and experience</li>
                  <li>Be found for new opportunities</li>
                  <li>Stay in touch with colleagues and friends</li>

            </ul>

      	</div>

      </div>


      <form  method="POST"  action="http://localhost/codeingniter-bootstrap/index.php/signup_nextstep_controller/Process">


      	<ul class="infoList">


      		<li class="country">

      	<label for="countryCode-location-employedProfileForm" class="hidden-el">

              <abbr title="This is a required field."><em>*</em></abbr>
              Country

        </label>


        <div class="fieldgroup" >

        	<select name="countryCode" id="countryCode-location-employedProfileForm" class="country-select">
<option value="us">United States</option><option value="af">Afghanistan</option><option value="ax">Aland Islands</option><option value="al">Albania</option><option value="dz">Algeria</option><option value="as">American Samoa</option><option value="ad">Andorra</option><option value="ao">Angola</option><option value="ai">Anguilla</option><option value="aq">Antarctica</option><option value="ag">Antigua and Barbuda</option><option value="ar">Argentina</option><option value="am">Armenia</option><option value="aw">Aruba</option><option value="au">Australia</option><option value="at">Austria</option><option value="az">Azerbaijan</option><option value="bs">Bahamas</option><option value="bh">Bahrain</option><option value="bd">Bangladesh</option><option value="bb">Barbados</option><option value="by">Belarus</option><option value="be">Belgium</option><option value="bz">Belize</option><option value="bj">Benin</option><option value="bm">Bermuda</option><option value="bt">Bhutan</option><option value="bo">Bolivia</option><option value="ba">Bosnia and Herzegovina</option><option value="bw">Botswana</option><option value="br">Brazil</option><option value="io">British Indian Ocean Territory</option><option value="bn">Brunei Darussalam</option><option value="bg">Bulgaria</option><option value="bf">Burkina Faso</option><option value="bi">Burundi</option><option value="kh">Cambodia</option><option value="cm">Cameroon</option><option value="ca">Canada</option><option value="cv">Cape Verde</option><option value="cb">Caribbean Nations</option><option value="ky">Cayman Islands</option><option value="cf">Central African Republic</option><option value="td">Chad</option><option value="cl">Chile</option><option value="cn">China</option><option value="cx">Christmas Island</option><option value="cc">Cocos (Keeling) Islands</option><option value="co">Colombia</option><option value="km">Comoros</option><option value="cg">Congo</option><option value="ck">Cook Islands</option><option value="cr">Costa Rica</option><option value="ci">Cote D'Ivoire (Ivory Coast)</option><option value="hr">Croatia</option><option value="cu">Cuba</option><option value="cy">Cyprus</option><option value="cz">Czech Republic</option><option value="cd">Democratic Republic of the Congo</option><option value="dk">Denmark</option><option value="dj">Djibouti</option><option value="dm">Dominica</option><option value="do">Dominican Republic</option><option value="tp">East Timor</option><option value="ec">Ecuador</option><option value="eg">Egypt</option><option value="sv">El Salvador</option><option value="gq">Equatorial Guinea</option><option value="er">Eritrea</option><option value="ee">Estonia</option><option value="et">Ethiopia</option><option value="fk">Falkland Islands (Malvinas)</option><option value="fo">Faroe Islands</option><option value="fm">Federated States of Micronesia</option><option value="fj">Fiji</option><option value="fi">Finland</option><option value="fr">France</option><option value="gf">French Guiana</option><option value="pf">French Polynesia</option><option value="tf">French Southern Territories</option><option value="ga">Gabon</option><option value="gm">Gambia</option><option value="ge">Georgia</option><option value="de">Germany</option><option value="gh">Ghana</option><option value="gi">Gibraltar</option><option value="gr">Greece</option><option value="gl">Greenland</option><option value="gd">Grenada</option><option value="gp">Guadeloupe</option><option value="gu">Guam</option><option value="gt">Guatemala</option><option value="gg">Guernsey</option><option value="gn">Guinea</option><option value="gw">Guinea-Bissau</option><option value="gy">Guyana</option><option value="ht">Haiti</option><option value="hn">Honduras</option><option value="hk">Hong Kong</option><option value="hu">Hungary</option><option value="is">Iceland</option><option value="in">India</option><option value="id">Indonesia</option><option value="ir">Iran</option><option value="iq">Iraq</option><option value="ie">Ireland</option><option value="im">Isle of Man</option><option value="il">Israel</option><option value="it">Italy</option><option value="jm">Jamaica</option><option value="jp">Japan</option><option value="je">Jersey</option><option value="jo">Jordan</option><option value="kz">Kazakhstan</option><option value="ke">Kenya</option><option value="ki">Kiribati</option><option value="kr">Korea</option><option value="kp">Korea (North)</option><option value="ko">Kosovo</option><option value="kw">Kuwait</option><option value="kg">Kyrgyzstan</option><option value="la">Laos</option><option value="lv">Latvia</option><option value="lb">Lebanon</option><option value="ls">Lesotho</option><option value="lr">Liberia</option><option value="ly">Libya</option><option value="li">Liechtenstein</option><option value="lt">Lithuania</option><option value="lu">Luxembourg</option><option value="mo">Macao</option><option value="mk">Macedonia</option><option value="mg">Madagascar</option><option value="mw">Malawi</option><option value="my">Malaysia</option><option value="mv">Maldives</option><option value="ml">Mali</option><option value="mt">Malta</option><option value="mh">Marshall Islands</option><option value="mq">Martinique</option><option value="mr">Mauritania</option><option value="mu">Mauritius</option><option value="yt">Mayotte</option><option value="mx">Mexico</option><option value="md">Moldova</option><option value="mc">Monaco</option><option value="mn">Mongolia</option><option value="me">Montenegro</option><option value="ms">Montserrat</option><option value="ma">Morocco</option><option value="mz">Mozambique</option><option value="mm">Myanmar</option><option value="na">Namibia</option><option value="nr">Nauru</option><option value="np">Nepal</option><option value="nl">Netherlands</option><option value="an">Netherlands Antilles</option><option value="nc">New Caledonia</option><option value="nz">New Zealand</option><option value="ni">Nicaragua</option><option value="ne">Niger</option><option value="ng">Nigeria</option><option value="nu">Niue</option><option value="nf">Norfolk Island</option><option value="mp">Northern Mariana Islands</option><option value="no">Norway</option><option value="om">Oman</option><option value="pk" selected="">Pakistan</option><option value="pw">Palau</option><option value="ps">Palestinian Territory</option><option value="pa">Panama</option><option value="pg">Papua New Guinea</option><option value="py">Paraguay</option><option value="pe">Peru</option><option value="ph">Philippines</option><option value="pn">Pitcairn</option><option value="pl">Poland</option><option value="pt">Portugal</option><option value="pr">Puerto Rico</option><option value="qa">Qatar</option><option value="re">Reunion</option><option value="ro">Romania</option><option value="ru">Russian Federation</option><option value="rw">Rwanda</option><option value="sh">Saint Helena</option><option value="kn">Saint Kitts and Nevis</option><option value="lc">Saint Lucia</option><option value="pm">Saint Pierre and Miquelon</option><option value="vc">Saint Vincent and the Grenadines</option><option value="ws">Samoa</option><option value="sm">San Marino</option><option value="st">Sao Tome and Principe</option><option value="sa">Saudi Arabia</option><option value="sn">Senegal</option><option value="rs">Serbia</option><option value="sc">Seychelles</option><option value="sl">Sierra Leone</option><option value="sg">Singapore</option><option value="sk">Slovak Republic</option><option value="si">Slovenia</option><option value="sb">Solomon Islands</option><option value="so">Somalia</option><option value="za">South Africa</option><option value="es">Spain</option><option value="lk">Sri Lanka</option><option value="sd">Sudan</option><option value="sr">Suriname</option><option value="sj">Svalbard and Jan Mayen</option><option value="sz">Swaziland</option><option value="se">Sweden</option><option value="ch">Switzerland</option><option value="sy">Syria</option><option value="tw">Taiwan</option><option value="tj">Tajikistan</option><option value="tz">Tanzania</option><option value="th">Thailand</option><option value="tl">Timor-Leste</option><option value="tg">Togo</option><option value="tk">Tokelau</option><option value="to">Tonga</option><option value="tt">Trinidad and Tobago</option><option value="tn">Tunisia</option><option value="tr">Turkey</option><option value="tm">Turkmenistan</option><option value="tc">Turks and Caicos Islands</option><option value="tv">Tuvalu</option><option value="ug">Uganda</option><option value="ua">Ukraine</option><option value="ae">United Arab Emirates</option><option value="gb">United Kingdom</option><option value="uy">Uruguay</option><option value="uz">Uzbekistan</option><option value="vu">Vanuatu</option><option value="va">Vatican City State (Holy See)</option><option value="ve">Venezuela</option><option value="vn">Vietnam</option><option value="vg">Virgin Islands (British)</option><option value="vi">Virgin Islands (U.S.)</option><option value="wf">Wallis and Futuna</option><option value="eh">Western Sahara</option><option value="ye">Yemen</option><option value="zm">Zambia</option><option value="zw">Zimbabwe</option><option value="oo">Other</option></select>

        </div>


      		</li>




      		<li class="post_code">

      			<label for="postalCode-location-employedProfileForm" class="">
              <abbr title="This is a required field."><em>*</em></abbr>
              <span>Postal Code</span>
            </label>


            <div class="fieldgroup">

            	<input type="text" name="postalCode" value="" id="postalCode-location-employedProfileForm" class="text-input" data-ime-mode-disabled="">

            </div>

      		</li>



<li id="status-chooser-container" >


<fieldset>
            <legend class="status-chooser-legend"><span>I am currently:</span></legend>
            <ul>
              <li class="employed"><label for="employed-btn">
                <input type="radio" name="status-chooser" value="1" id="employed-btn" checked="checked" defaultchecked="true" onclick="handleClick(this);" >Employed</label>
              </li>
              <li class="looking"><label for="looking-btn"><input type="radio" name="status-chooser" value="2" id="looking-btn" onclick="handleClick(this);" >Job Seeker</label></li>
              <li class="student"><label for="student-btn"><input type="radio" name="status-chooser" value="3" id="student-btn" onclick="handleClick(this);" >Student</label></li>
            </ul>

 </fieldset>

</li>




<!--  Data to be changed starts from here  !-->
<div id="visible_employed"  >



<li class="job-title required">


          <label for="workCompanyTitle-employedProfileForm">
            <abbr title="This is a required field."><em>*</em></abbr>
            Job title
          </label>
          <div class="fieldgroup">
            <div id="employee_e1"><span  class="error" id="inp_error">Please enter your title.<br></span></div>
            <input type="text" name="job-title-1" value="" id="workCompanyTitle-employedProfileForm" class="text-input" >
              
          </div>

</li>



<li class="self-employed">
            <div class="fieldgroup">
              <input type="checkbox" name="selfEmployed" value="true" id="selfEmployed-employeeCompany-employedProfileForm">
              <label for="selfEmployed-employeeCompany-employedProfileForm">I am self-employed</label>
            </div>
        </li>



        <li class="company required">
              <label for="companyName-companyInfo-employeeCompany-employedProfileForm">
                <abbr title="This is a required field."><em>*</em></abbr>
                Company
              </label>
              <div id="employedProfileForm_company_ta" class="fieldgroup">
               <div id="employee_e2"> <span class="error" id="inp_error">Please enter a company.<br></span> </div>
                
<input type="text" name="company-name-1"  id="companyName-companyInfo-employeeCompany-employedProfileForm" class="text-input">
                
      
    
              </div>
        </li>





<li id="employedProfileForm_industry" class="industry required show">
            <label for="industryChooser-employeeCompany-employedProfileForm">
              <abbr title="This is a required field."><em>*</em></abbr>
              Industry:
            </label>
            <div class="fieldgroup">
               <div id="employee_e3"> <span class="error" id="inp_error">Please select an industry.<br></span></div>
              <select name="industryChooser" id="industryChooser-employeeCompany-employedProfileForm">
<option value="" selected="">-</option><option value="47" class="corp fin">Accounting</option><option value="94" class="man tech tran">Airlines/Aviation</option><option value="120" class="leg org">Alternative Dispute Resolution</option><option value="125" class="hlth">Alternative Medicine</option><option value="127" class="art med">Animation</option><option value="19" class="good">Apparel &amp; Fashion</option><option value="50" class="cons">Architecture &amp; Planning</option><option value="111" class="art med rec">Arts and Crafts</option><option value="53" class="man">Automotive</option><option value="52" class="gov man">Aviation &amp; Aerospace</option><option value="41" class="fin">Banking</option><option value="12" class="gov hlth tech">Biotechnology</option><option value="36" class="med rec">Broadcast Media</option><option value="49" class="cons">Building Materials</option><option value="138" class="corp man">Business Supplies and Equipment</option><option value="129" class="fin">Capital Markets</option><option value="54" class="man">Chemicals</option><option value="90" class="org serv">Civic &amp; Social Organization</option><option value="51" class="cons gov">Civil Engineering</option><option value="128" class="cons corp fin">Commercial Real Estate</option><option value="118" class="tech">Computer &amp; Network Security</option><option value="109" class="med rec">Computer Games</option><option value="3" class="tech">Computer Hardware</option><option value="5" class="tech">Computer Networking</option><option value="4" class="tech">Computer Software</option><option value="48" class="cons">Construction</option><option value="24" class="good man">Consumer Electronics</option><option value="25" class="good man">Consumer Goods</option><option value="91" class="org serv">Consumer Services</option><option value="18" class="good">Cosmetics</option><option value="65" class="agr">Dairy</option><option value="1" class="gov tech">Defense &amp; Space</option><option value="99" class="art med">Design</option><option value="69" class="edu">Education Management</option><option value="132" class="edu org">E-Learning</option><option value="112" class="good man">Electrical/Electronic Manufacturing</option><option value="28" class="med rec">Entertainment</option><option value="86" class="org serv">Environmental Services</option><option value="110" class="corp rec serv">Events Services</option><option value="76" class="gov">Executive Office</option><option value="122" class="corp serv">Facilities Services</option><option value="63" class="agr">Farming</option><option value="43" class="fin">Financial Services</option><option value="38" class="art med rec">Fine Art</option><option value="66" class="agr">Fishery</option><option value="34" class="rec serv">Food &amp; Beverages</option><option value="23" class="good man serv">Food Production</option><option value="101" class="org">Fund-Raising</option><option value="26" class="good man">Furniture</option><option value="29" class="rec">Gambling &amp; Casinos</option><option value="145" class="cons man">Glass, Ceramics &amp; Concrete</option><option value="75" class="gov">Government Administration</option><option value="148" class="gov">Government Relations</option><option value="140" class="art med">Graphic Design</option><option value="124" class="hlth rec">Health, Wellness and Fitness</option><option value="68" class="edu">Higher Education</option><option value="14" class="hlth">Hospital &amp; Health Care</option><option value="31" class="rec serv tran">Hospitality</option><option value="137" class="corp">Human Resources</option><option value="134" class="corp good tran">Import and Export</option><option value="88" class="org serv">Individual &amp; Family Services</option><option value="147" class="cons man">Industrial Automation</option><option value="84" class="med serv">Information Services</option><option value="96" class="tech">Information Technology and Services</option><option value="42" class="fin">Insurance</option><option value="74" class="gov">International Affairs</option><option value="141" class="gov org tran">International Trade and Development</option><option value="6" class="tech">Internet</option><option value="45" class="fin">Investment Banking</option><option value="46" class="fin">Investment Management</option><option value="73" class="gov leg">Judiciary</option><option value="77" class="gov leg">Law Enforcement</option><option value="9" class="leg">Law Practice</option><option value="10" class="leg">Legal Services</option><option value="72" class="gov leg">Legislative Office</option><option value="30" class="rec serv tran">Leisure, Travel &amp; Tourism</option><option value="85" class="med rec serv">Libraries</option><option value="116" class="corp tran">Logistics and Supply Chain</option><option value="143" class="good">Luxury Goods &amp; Jewelry</option><option value="55" class="man">Machinery</option><option value="11" class="corp">Management Consulting</option><option value="95" class="tran">Maritime</option><option value="80" class="corp med">Marketing and Advertising</option><option value="97" class="corp">Market Research</option><option value="135" class="cons gov man">Mechanical or Industrial Engineering</option><option value="126" class="med rec">Media Production</option><option value="17" class="hlth">Medical Devices</option><option value="13" class="hlth">Medical Practice</option><option value="139" class="hlth">Mental Health Care</option><option value="71" class="gov">Military</option><option value="56" class="man">Mining &amp; Metals</option><option value="35" class="art med rec">Motion Pictures and Film</option><option value="37" class="art med rec">Museums and Institutions</option><option value="115" class="art rec">Music</option><option value="114" class="gov man tech">Nanotechnology</option><option value="81" class="med rec">Newspapers</option><option value="100" class="org">Nonprofit Organization Management</option><option value="57" class="man">Oil &amp; Energy</option><option value="113" class="med">Online Media</option><option value="123" class="corp">Outsourcing/Offshoring</option><option value="87" class="serv tran">Package/Freight Delivery</option><option value="146" class="good man">Packaging and Containers</option><option value="61" class="man">Paper &amp; Forest Products</option><option value="39" class="art med rec">Performing Arts</option><option value="15" class="hlth tech">Pharmaceuticals</option><option value="131" class="org">Philanthropy</option><option value="136" class="art med rec">Photography</option><option value="117" class="man">Plastics</option><option value="107" class="gov org">Political Organization</option><option value="67" class="edu">Primary/Secondary Education</option><option value="83" class="med rec">Printing</option><option value="105" class="corp">Professional Training &amp; Coaching</option><option value="102" class="corp org">Program Development</option><option value="79" class="gov">Public Policy</option><option value="98" class="corp">Public Relations and Communications</option><option value="78" class="gov">Public Safety</option><option value="82" class="med rec">Publishing</option><option value="62" class="man">Railroad Manufacture</option><option value="64" class="agr">Ranching</option><option value="44" class="cons fin good">Real Estate</option><option value="40" class="rec serv">Recreational Facilities and Services</option><option value="89" class="org serv">Religious Institutions</option><option value="144" class="gov man org">Renewables &amp; Environment</option><option value="70" class="edu gov">Research</option><option value="32" class="rec serv">Restaurants</option><option value="27" class="good man">Retail</option><option value="121" class="corp org serv">Security and Investigations</option><option value="7" class="tech">Semiconductors</option><option value="58" class="man">Shipbuilding</option><option value="20" class="good rec">Sporting Goods</option><option value="33" class="rec">Sports</option><option value="104" class="corp">Staffing and Recruiting</option><option value="22" class="good">Supermarkets</option><option value="8" class="gov tech">Telecommunications</option><option value="60" class="man">Textiles</option><option value="130" class="gov org">Think Tanks</option><option value="21" class="good">Tobacco</option><option value="108" class="corp gov serv">Translation and Localization</option><option value="92" class="tran">Transportation/Trucking/Railroad</option><option value="59" class="man">Utilities</option><option value="106" class="fin tech">Venture Capital &amp; Private Equity</option><option value="16" class="hlth">Veterinary</option><option value="93" class="tran">Warehousing</option><option value="133" class="good">Wholesale</option><option value="142" class="good man rec">Wine and Spirits</option><option value="119" class="tech">Wireless</option><option value="103" class="art med rec">Writing and Editing</option></select>
            </div>
        </li>




</div>  <!-- div with visible_emplpoyed  ends here !-->






<div id="visible_job_seeker"   style="display:none;">  <!--  div with visible_job_seeker starts from here  !-->

<li class="job-title required">
          <label for="workCompanyTitle-lookingProfileForm">
            <abbr title="This is a required field."><em>*</em></abbr>
            Most recent job title
          </label>
          <div class="fieldgroup">
            <span class="error" id="workCompanyTitle-lookingProfileForm-error"></span>
            <input type="text" name="workCompanyTitle" value="" id="workCompanyTitle-lookingProfileForm" class="text-input">
          </div>
 </li>
       

<li class="self-employed">
          
            <div class="fieldgroup">
              <span class="error" id="selfEmployed-employeeCompany-lookingProfileForm-error"></span>
              <input type="checkbox" name="selfEmployed" value="true" id="selfEmployed-employeeCompany-lookingProfileForm">
              <label for="selfEmployed-employeeCompany-lookingProfileForm">I am self-employed</label>
            </div>
          
        </li>





        <li class="company required">
          
            
              <label for="companyName-companyInfo-employeeCompany-lookingProfileForm">
                <abbr title="This is a required field."><em>*</em></abbr>
                Most recent company
              </label>
              <div id="lookingProfileForm_company_ta" class="fieldgroup">
                <span class="error" id="companyName-companyInfo-employeeCompany-lookingProfileForm-error"></span>
                
                  <input type="text" name="companyName" value="" id="companyName-companyInfo-employeeCompany-lookingProfileForm" class="text-input">
                
      
    
              </div>
            
          
        </li>




<li class="time-period">


            <label>
              <abbr title="This is a required field."><em>*</em></abbr>
              Time period
            </label>

            <select class="start-year" name="start-year">

            	<option value="-" selected="" >-</option>
            	<option value="2013" selected="">2013</option>

            </select>
          
          <span>to</span>

            <select class="start-year" name="end-year">

            	<option value="-" selected="" >-</option>
            	<option value="2010" selected="">2010</option>

            </select>


</li>


</div>  <!--  div with visible_job_seeker ends here  !-->





<!--  Div     Visible_student  starts from here   !-->

<div id="visible_student" style="display:none;">

<li class="education typeahead required">

          
            
              
                  <label for="schoolText-school-education-studentProfileForm">
                    <abbr title="This is a required field."><em>*</em></abbr>
                    School/University
                  </label>
                
              <div id="studentProfileForm_school_ta" class="fieldgroup">
                <span class="error" id="inp_error">Please enter your college or university.<br></span>
                
                  <input type="text" name="schoolText" value="" id="schoolText-school-education-studentProfileForm" class="text-input">
                
    
              </div>
            
          
 </li>








<li class="time-period">


            <label>
              <abbr title="This is a required field."><em>*</em></abbr>
              Dates Attended
            </label>

            <select class="start-year" name="start-date-3">

              <option value="-" selected="" >-</option>
              <option value="2010" selected="">2010</option>

            </select>
          
          <span>to</span>

            <select class="start-year" name="end-date-3">

              <option value="-" selected="" >-</option>
              <option value="2013" selected="">2013</option>

            </select>

            <p class="tip">Current students: enter your expected graduation year</p>


</li>




</div> <!-- div with id visible_student  ends here  !-->

      	</ul>


      	<p class="actions">
          <span>
                <input type="submit" name="submit" value="Create my profile" id="employed-btn-submit" class="btn-primary" onclick="Valida()"><div class="progress-indicator" style="line-height: 16px;"></div>
          </span>
    </p>


    <p class="key"><strong>*</strong> Indicates required field.</p>


      </form>

</div>


</div>


</div>




<!--  Footer starts from here !-->


<div id="footer">
 <div class="wrapper">
 <div id="legal">
 <p id="copyright">LinkedIn Corporation © 2013 | Commercial use of this site without express authorization is prohibited.</p>
 <p id="terms-of-use">
 
 </p>
 </div>
 </div>
</div>





</body>


<script type="text/javascript">


function Validate()
{


document.getElementById("top_error").style.display="block";
document.getElementById("employee_e1").style.visibility="visible";

document.getElementById("employee_e2").style.display="block";
document.getElementById("employee_e2").style.visibility="visible";



}

</script>


<script type="text/javascript">

var currentValue = 0;
function handleClick(myRadio) {
 


    if(myRadio.value==1){


      document.getElementById("visible_employed").style.display="block";
      document.getElementById("visible_job_seeker").style.display="none";
      document.getElementById("visible_student").style.display="none";

    }


        if(myRadio.value==2){


      document.getElementById("visible_employed").style.display="none";
      document.getElementById("visible_job_seeker").style.display="block";
      document.getElementById("visible_student").style.display="none";

    }



        if(myRadio.value==3){


      document.getElementById("visible_employed").style.display="none";
      document.getElementById("visible_job_seeker").style.display="none";
      document.getElementById("visible_student").style.display="block";

    }










}


</script>


</html>