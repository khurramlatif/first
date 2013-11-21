<!DOCTYPE html>





<html lang="en" class="os-win">
<head>
	<title>

		Step1 : Logged In

	</title>

	<link rel="stylesheet" type="text/css" href="<?php  echo CSS.'/search_advance_css.css' ?>">




 


     <script type="text/javascript">
        function RotateSpinner(spinnerId, up) {
            document.getElementById(spinnerId).value = up ? parseInt(document.getElementById(spinnerId).value) + 1 : parseInt(document.getElementById(spinnerId).value) - 1;
        }
    </script>




</head>




<body>


<script type="text/javascript">


       function bigImg(){

          document.getElementById('signout').style.display='block';
        }

        function normalImg(){

          document.getElementById('signout').style.display='none';

        }


        function keepVisible(){

          document.getElementById('signout').style.display='block';
        }


        function disCon(){

          document.getElementById('addconnections').style.display='block';

        }

                function hidCon(){
          document.getElementById('addconnections').style.display='none';
        }


        function disInbox(){

              document.getElementById('inbox').style.display='block';
        }

                function hidInbox(){

            document.getElementById('inbox').style.display='none';
        }


function disNotif(){

  document.getElementById('notifications').style.display='block';

}

function hidNotif(){

document.getElementById('notifications').style.display='none';
  
}


function showProfileLinks(){

//document.getElementById('profile-sub-nav').style.display='block';

    document.getElementById('profile-sub-nav').style.width='200px';
    document.getElementById('profile-sub-nav').style.height='50px';

    document.getElementById('profile-sub-nav').style.paddingLeft='10px';

    document.getElementById('profile-sub-nav').style.paddingTop='18px';

}


function hidProfileLinks(){

  //document.getElementById('profile-sub-nav').style.display='none';

    document.getElementById('profile-sub-nav').style.width='200px';
    document.getElementById('profile-sub-nav').style.height='0px';

    document.getElementById('profile-sub-nav').style.paddingLeft='0px';

    document.getElementById('profile-sub-nav').style.paddingTop='0px';


}



function disNetwork(){

    //document.getElementById('network-ul').style.display='block';
    document.getElementById('network-ul').style.width='auto';
    document.getElementById('network-ul').style.height='70px';


}


function hidNetwork(){

   // document.getElementById('network-ul').style.display='none';

        document.getElementById('network-ul').style.width='0px';
    document.getElementById('network-ul').style.height='0px';
}



</script>


<div id="header">


	<div id="top-header">

		<div class="wrapper">


			<div class="header-section first-child">

				<h2 class="logo-container" tabindex="0">
 <a href="http://www.linkedin.com/?trk=nav_logo" class="logo" id="in-logo">
 LinkedIn
 </a>
 </h2>


 <form method="POST" class="header-form" >


<fieldset>

<legend>Find People, Jobs, Companies, and More</legend>

<div id="control_gen_2">

	<label for="main-search-category" id="llbl">Search for:</label>

<span class="label"><span class="styled-dropdown-select-all">All</span></span>











<select name="type" id="main-search-category" class="search-category">
            
            
              <option class="all" data-li-advanced-link="/vsearch/f?adv=true&amp;trk=federated_advs" data-li-styled-dropdown-class="all" data-li-search-action="/vsearch/f" data-li-ghost-text="Search for people, jobs, companies, and more..." data-li-trk-code="vsrp_all_vertical_selector_item" title="Search for people, jobs, companies, and more..." value="all">All</option>
            
            
            
                <option class="people" data-li-advanced-link="/vsearch/p?adv=true&amp;trk=advsrch" data-li-styled-dropdown-class="people" data-li-search-action="/vsearch/p" data-li-ghost-text="Search people..." data-li-trk-code="vsrp_people_vertical_selector_item" title="Keyword, name, company or title" value="people">People</option>
              

            
                <option class="jobs" data-li-advanced-link="/vsearch/j?adv=true&amp;trk=hb_advjs" data-li-styled-dropdown-class="jobs" data-li-search-action="/vsearch/j" data-li-ghost-text="Search jobs..." data-li-trk-code="vsrp_jobs_vertical_selector_item" title="Keyword, company or job title" value="jobs">Jobs</option>
              

            
                <option class="companies" data-li-styled-dropdown-class="companies" data-li-search-action="/vsearch/c" data-li-ghost-text="Search companies..." title="Keyword" data-li-trk-code="vsrp_companies_vertical_selector_item" value="companies">Companies</option>
              

            
              
                  <option class="groups" data-li-styled-dropdown-class="groups" data-li-search-action="/vsearch/g" data-li-ghost-text="Search groups..." data-li-trk-code="vsrp_groups_vertical_selector_item" title="Keyword" value="groups">Groups</option>
                
            

            
              
                  <option class="edu" data-li-styled-dropdown-class="edu" data-li-search-action="/vsearch/e" data-li-ghost-text="Search universities..." data-li-trk-code="vsrp_edu_vertical_selector_item" title="Keyword" value="edu">Universities</option>
                
            

            

          
              <option class="inbox" data-li-styled-dropdown-class="inbox" data-li-search-action="/inbox/messages/search" data-li-ghost-text="Search inbox..." data-li-trk-code="vsrp_inbox_vertical_selector_item" title="Keyword" value="inbox">Inbox</option>
            
          </select>






<ul class="search-selector"><li class="all option first selected highlighted"><div>All</div></li><li class="people option"><div>People</div></li><li class="jobs option"><div>Jobs</div></li><li class="companies option"><div>Companies</div></li><li class="groups option"><div>Groups</div></li><li class="edu option"><div>Universities</div></li><li class="inbox option"><div>Inbox</div></li></ul>














</div>







<div class="search-box-container" id="search-box-container">
      <span id="search-autocomplete-container" title="Tip: You can also search by keyword, company, school..." class="/typeahead">
      
          
              
            
          
            <label for="main-search-box" class="ghost" id="control_gen_3" style="display: none;">Search for people, jobs, companies, and more...</label>
          
    
          <input name="keywords" id="main-search-box" class="search-term yui-ac-input" type="text" value="" autocomplete="off" placeholder="Search for people, jobs, companies, and more...">
        
        <span id="search-typeahead-container"></span>

        
      </span>

      
          <input name="orig" type="hidden" value="GLHD">
          <input name="rsid" type="hidden">
        
      <input name="pageKey" type="hidden" value="nux">
      
    </div>







<button name="search" value="Search" class="search-button" type="submit">
        <span>Search</span>
      </button>






</fieldset>


<div class="advanced-search-outer">
      <div class="advanced-search-inner">
        <a href="" class="advanced-search" id="advanced-search">Advanced
          
        </a>
      </div>
    </div>

 </form>


			</div>  <!--  Div  header section First Child Ends here !-->




<div class="header-section last-child">


<ul class="nav utilities">


  <li class="nav-item activity-tab"  onmouseover="disInbox();"  onmouseout="hidInbox();" >  

<a href="http://www.linkedin.com/inbox/messages/received?trk=nav_utilities_inbox" class="activity-toggle inbox-alert">
       <span class="tt"> Inbox </span>
      </a>

<span id="header-messages-count" class="gem">5</span>

<div class="activity-container" id="inbox">


<div class="activity-drop">

  <div class="activity-drop-header messages">

<h3> <a href="#">Messages

<span class="sub-nav-header-arrow" role="presentation"></span>

</a>
 </h3>


<a href="http://www.linkedin.com/inbox/mailbox/message/compose?trk=hb-messages-item-cmpmsg-v2" class="see-all">
 Compose Message <span class="carret"></span>
 </a>

  </div>   <!-- Header ends here !-->


<div class="activity-drop-body">
 <ol class="li-scroll-content empty"><li>No messages right now.</li></ol>
 </div>


</div>

</div>


    </li>


<li class="nav-item activity-tab" onmouseover="disNotif();"  onmouseout="hidNotif();"  >

  <a href="#notifications" class="activity-toggle notifications-alert">
       <span class="tt"> Notification</span>
      </a>

      <span id="notify-messages-count" class="gem">3</span>

  <div class="activity-container" id="notifications">


        <div class="activity-drop">


          <div class="activity-drop-header">
          <h3>Notifications<span class="sub-nav-header-arrow" role="presentation"></span></h3>
        </div>


<div class="activity-drop-body" id="control_gen_16">
          
              <ol class="li-scroll-content empty"><li>No notifications right now.</li></ol>
            
          <div class="li-scroll-track" style="display: none;">
            <div class="li-scroll-thumb">
              <div class="li-scroll-scrollbar"></div>
            </div>
          </div>
        </div>

        </div>


      </div>

</li>







<li class="nav-item activity-tab"  onmouseover="disCon();"  onmouseout="hidCon();" >

<a href="/secure/importAndInvite?trk=nav_utilities_add_connx" class="activity-toggle add-connections-btn">
            <span class="tt">  Add C </span>
          </a>


<div class="add-connections simple-responsive" id="addconnections">


<div class="add-connections-options">


<div class="activity-drop-header">


  <h3>Add Connections</h3>

</div>

<h4>Invite your contacts</h4>

<p>Quickly find people you may know by searching your email contacts:</p>




</div>

</div>





</li>


<li class="nav-item account-settings-tab"  onmouseover="bigImg();"  onmouseout="normalImg();" >

  <a href="http://www.linkedin.com/profile/view?id=302450217&amp;trk=nav_responsive_tab_profile_pic" class="account-toggle">
       <img    src="https://static.licdn.com/scds/common/u/images/themes/katy/ghosts/person/ghost_person_30x30_v1.png" alt="faran kaka009" class="nav-profile-photo" height="20" width="20">
    </a>



    <div class="account-sub-nav" id="signout" onmouseover="keepVisible();">


      <div class="account-sub-nav-options" id="main-container-subnav">


        <div class="account-sub-nav-header">

          <h3>Account & Settings</h3>

        </div>

              <div   class="account-sub-nav-body extra"  >

                <ul class="account-settings">




<li class="self">
              <div class="account-settings-link">
                <span class="act-set-row">
                  <span class="act-set-icon">
                    <a href="http://www.linkedin.com/profile/view?id=302450217&amp;trk=nav_responsive_tab_profile_pic">
                      <span class="act-set-icon-image" role="presentation">
                           <img src="https://static.licdn.com/scds/common/u/images/themes/katy/ghosts/person/ghost_person_30x30_v1.png" alt="faran kaka009" class="profile-photo" height="20" width="20">
                      </span>
                    </a>
                  </span>
                  <span class="act-set-name">
                    
                    faran kaka009                 

                  </span>

                  <span class="act-set-action">
                    <a href="http://www.linkedin.com/uas/logout?session_full_logout=&amp;csrfToken=ajax%3A6147856875102110457&amp;trk=nav_account_sub_nav_signout" class="account-submenu-split-link">
                      Sign Out
                    </a>
                  </span>
                </span>
              </div>
    </li>








                </ul>

              </div>

      </div>





    </div>


</li>







</ul>

</div> <!--  Div  header section last Child Ends here !-->





		</div>





	</div>   <!-- Div with ID top-header ends here !-->


<!--  Lower menu starts from here  !-->

<!--  Lower menu ends here  !-->


</div>   <!-- Div with ID header ends here !-->


<!-- id="lower_menu" !-->
<div class="responsive-nav"  id="responsive-nav-scrollable" >

  <div class="wrapper">


    <ul class="nav main-nav" id="control_gen_6" >

      <li class="nav-item">
      <a href="http://www.linkedin.com/home?trk=nav_responsive_tab_home" class="nav-link">
        Home
      </a>
    </li>




    <li class="nav-item" onmouseover="showProfileLinks();" onmouseout="hidProfileLinks();" >



      <a href="http://www.linkedin.com/profile/view?id=302450217&amp;trk=nav_responsive_tab_profile" class="nav-link">
                Profile
            </a>


            <ul class="sub-nav" id="profile-sub-nav">

              <li>
            <a href="http://www.linkedin.com/profile/edit?trk=nav_responsive_sub_nav_edit_profile">
              Edit Profile
            </a>
          </li>



          <li>
              <a href="http://www.linkedin.com/wvmx/profile?trk=nav_responsive_sub_nav_wvmp">
                Who's Viewed Your Profile
              </a>
            </li>






            </ul>

    </li>




<!--  Network starts from here  !-->


            <li class="nav-item" onmouseover="disNetwork();" onmouseout="hidNetwork();">

              <a href="http://www.linkedin.com/connections?trk=nav_responsive_tab_network" class="nav-link">
                Network
              </a>

      <ul class="sub-nav" id="network-ul">
      <li>
        <a href="http://www.linkedin.com/connections?trk=nav_responsive_tab_network">
          Contacts
        </a>
      </li>
      <li>
        <a href="/fetch/importAndInviteEntry?trk=nav_responsive_sub_nav_add_connections">
          Add Connections
        </a>
      </li>
      <li>
        <a href="http://www.linkedin.com/college/alumni?trk=nav_responsive_sub_nav_find_alumni">
          Find Alumni
        </a>
      </li>
    </ul>




            </li>







    </ul>

  </div>

</div>   <!--  Div with id Lower menu ends here or responsive nav !-->



<div id="main" class="home-member-new grid-f">


<div id="facets-col" class="col" >


  <a id="advs-link" href="/vsearch/f?adv=true" class="advs-link mod open" aria-role="button" aria-controls="advanced-search-container">Advanced<span class="advs-indicator available">Advanced Search is available for people</span></a>



<div id="search-types" >


  <div class="mod search-types hide-extra">


<form method="POST"  id="peopleSearchForm" action="http://localhost/codeingniter-bootstrap/index.php/search_advance_controller/process_form">


<fieldset class="text-input-fields">


<ol id="search-inplist">


<li class="keywords"><label for="advs-keywords">Keywords</label>
  <input type="text" name="keywords" id="advs-keywords" class="">
</li>

<li class="firstName">
  <label for="advs-firstName">First Name</label>
  <input type="text" name="firstName" id="advs-firstName">
</li>

<li class="lastName"><label for="advs-lastName">Last Name</label><input type="text" name="lastName" id="advs-lastName"></li>

<li class="title"><label for="advs-title">Title</label><input type="text" name="title" id="advs-title"></li>

<li class="company"><label for="advs-company">Company</label><input type="text" name="company" id="advs-company"></li>

<li class="school"><label for="advs-school">School</label><input type="text" name="school" id="advs-school"></li>

<li class="locationType"><label for="advs-locationType">Location</label><select name="locationType" id="advs-locationType"><option value="Y">Anywhere</option><option value="I" selected="">Located in or near:</option></select></li>

<li class="countryCode"><label for="advs-countryCode">Country</label><select name="countryCode" id="advs-countryCode" class=""><option value="us">United States</option><option value="af">Afghanistan</option><option value="ax">Aland Islands</option><option value="al">Albania</option><option value="dz">Algeria</option><option value="as">American Samoa</option><option value="ad">Andorra</option><option value="ao">Angola</option><option value="ai">Anguilla</option><option value="aq">Antarctica</option><option value="ag">Antigua and Barbuda</option><option value="ar">Argentina</option><option value="am">Armenia</option><option value="aw">Aruba</option><option value="au">Australia</option><option value="at">Austria</option><option value="az">Azerbaijan</option><option value="bs">Bahamas</option><option value="bh">Bahrain</option><option value="bd">Bangladesh</option><option value="bb">Barbados</option><option value="by">Belarus</option><option value="be">Belgium</option><option value="bz">Belize</option><option value="bj">Benin</option><option value="bm">Bermuda</option><option value="bt">Bhutan</option><option value="bo">Bolivia</option><option value="ba">Bosnia and Herzegovina</option><option value="bw">Botswana</option><option value="br">Brazil</option><option value="io">British Indian Ocean Territory</option><option value="bn">Brunei Darussalam</option><option value="bg">Bulgaria</option><option value="bf">Burkina Faso</option><option value="bi">Burundi</option><option value="kh">Cambodia</option><option value="cm">Cameroon</option><option value="ca">Canada</option><option value="cv">Cape Verde</option><option value="cb">Caribbean Nations</option><option value="ky">Cayman Islands</option><option value="cf">Central African Republic</option><option value="td">Chad</option><option value="cl">Chile</option><option value="cn">China</option><option value="cx">Christmas Island</option><option value="cc">Cocos (Keeling) Islands</option><option value="co">Colombia</option><option value="km">Comoros</option><option value="cg">Congo</option><option value="ck">Cook Islands</option><option value="cr">Costa Rica</option><option value="ci">Cote D'Ivoire (Ivory Coast)</option><option value="hr">Croatia</option><option value="cu">Cuba</option><option value="cy">Cyprus</option><option value="cz">Czech Republic</option><option value="cd">Democratic Republic of the Congo</option><option value="dk">Denmark</option><option value="dj">Djibouti</option><option value="dm">Dominica</option><option value="do">Dominican Republic</option><option value="tp">East Timor</option><option value="ec">Ecuador</option><option value="eg">Egypt</option><option value="sv">El Salvador</option><option value="gq">Equatorial Guinea</option><option value="er">Eritrea</option><option value="ee">Estonia</option><option value="et">Ethiopia</option><option value="fk">Falkland Islands (Malvinas)</option><option value="fo">Faroe Islands</option><option value="fm">Federated States of Micronesia</option><option value="fj">Fiji</option><option value="fi">Finland</option><option value="fr">France</option><option value="gf">French Guiana</option><option value="pf">French Polynesia</option><option value="tf">French Southern Territories</option><option value="ga">Gabon</option><option value="gm">Gambia</option><option value="ge">Georgia</option><option value="de">Germany</option><option value="gh">Ghana</option><option value="gi">Gibraltar</option><option value="gr">Greece</option><option value="gl">Greenland</option><option value="gd">Grenada</option><option value="gp">Guadeloupe</option><option value="gu">Guam</option><option value="gt">Guatemala</option><option value="gg">Guernsey</option><option value="gn">Guinea</option><option value="gw">Guinea-Bissau</option><option value="gy">Guyana</option><option value="ht">Haiti</option><option value="hn">Honduras</option><option value="hk">Hong Kong</option><option value="hu">Hungary</option><option value="is">Iceland</option><option value="in">India</option><option value="id">Indonesia</option><option value="ir">Iran</option><option value="iq">Iraq</option><option value="ie">Ireland</option><option value="im">Isle of Man</option><option value="il">Israel</option><option value="it">Italy</option><option value="jm">Jamaica</option><option value="jp">Japan</option><option value="je">Jersey</option><option value="jo">Jordan</option><option value="kz">Kazakhstan</option><option value="ke">Kenya</option><option value="ki">Kiribati</option><option value="kr">Korea</option><option value="kp">Korea (North)</option><option value="ko">Kosovo</option><option value="kw">Kuwait</option><option value="kg">Kyrgyzstan</option><option value="la">Laos</option><option value="lv">Latvia</option><option value="lb">Lebanon</option><option value="ls">Lesotho</option><option value="lr">Liberia</option><option value="ly">Libya</option><option value="li">Liechtenstein</option><option value="lt">Lithuania</option><option value="lu">Luxembourg</option><option value="mo">Macao</option><option value="mk">Macedonia</option><option value="mg">Madagascar</option><option value="mw">Malawi</option><option value="my">Malaysia</option><option value="mv">Maldives</option><option value="ml">Mali</option><option value="mt">Malta</option><option value="mh">Marshall Islands</option><option value="mq">Martinique</option><option value="mr">Mauritania</option><option value="mu">Mauritius</option><option value="yt">Mayotte</option><option value="mx">Mexico</option><option value="md">Moldova</option><option value="mc">Monaco</option><option value="mn">Mongolia</option><option value="me">Montenegro</option><option value="ms">Montserrat</option><option value="ma">Morocco</option><option value="mz">Mozambique</option><option value="mm">Myanmar</option><option value="na">Namibia</option><option value="nr">Nauru</option><option value="np">Nepal</option><option value="nl">Netherlands</option><option value="an">Netherlands Antilles</option><option value="nc">New Caledonia</option><option value="nz">New Zealand</option><option value="ni">Nicaragua</option><option value="ne">Niger</option><option value="ng">Nigeria</option><option value="nu">Niue</option><option value="nf">Norfolk Island</option><option value="mp">Northern Mariana Islands</option><option value="no">Norway</option><option value="om">Oman</option><option value="pk" selected="">Pakistan</option><option value="pw">Palau</option><option value="ps">Palestinian Territory</option><option value="pa">Panama</option><option value="pg">Papua New Guinea</option><option value="py">Paraguay</option><option value="pe">Peru</option><option value="ph">Philippines</option><option value="pn">Pitcairn</option><option value="pl">Poland</option><option value="pt">Portugal</option><option value="pr">Puerto Rico</option><option value="qa">Qatar</option><option value="re">Reunion</option><option value="ro">Romania</option><option value="ru">Russian Federation</option><option value="rw">Rwanda</option><option value="sh">Saint Helena</option><option value="kn">Saint Kitts and Nevis</option><option value="lc">Saint Lucia</option><option value="pm">Saint Pierre and Miquelon</option><option value="vc">Saint Vincent and the Grenadines</option><option value="ws">Samoa</option><option value="sm">San Marino</option><option value="st">Sao Tome and Principe</option><option value="sa">Saudi Arabia</option><option value="sn">Senegal</option><option value="rs">Serbia</option><option value="sc">Seychelles</option><option value="sl">Sierra Leone</option><option value="sg">Singapore</option><option value="sk">Slovak Republic</option><option value="si">Slovenia</option><option value="sb">Solomon Islands</option><option value="so">Somalia</option><option value="za">South Africa</option><option value="es">Spain</option><option value="lk">Sri Lanka</option><option value="sd">Sudan</option><option value="sr">Suriname</option><option value="sj">Svalbard and Jan Mayen</option><option value="sz">Swaziland</option><option value="se">Sweden</option><option value="ch">Switzerland</option><option value="sy">Syria</option><option value="tw">Taiwan</option><option value="tj">Tajikistan</option><option value="tz">Tanzania</option><option value="th">Thailand</option><option value="tl">Timor-Leste</option><option value="tg">Togo</option><option value="tk">Tokelau</option><option value="to">Tonga</option><option value="tt">Trinidad and Tobago</option><option value="tn">Tunisia</option><option value="tr">Turkey</option><option value="tm">Turkmenistan</option><option value="tc">Turks and Caicos Islands</option><option value="tv">Tuvalu</option><option value="ug">Uganda</option><option value="ua">Ukraine</option><option value="ae">United Arab Emirates</option><option value="gb">United Kingdom</option><option value="uy">Uruguay</option><option value="uz">Uzbekistan</option><option value="vu">Vanuatu</option><option value="va">Vatican City State (Holy See)</option><option value="ve">Venezuela</option><option value="vn">Vietnam</option><option value="vg">Virgin Islands (British)</option><option value="vi">Virgin Islands (U.S.)</option><option value="wf">Wallis and Futuna</option><option value="eh">Western Sahara</option><option value="ye">Yemen</option><option value="zm">Zambia</option><option value="zw">Zimbabwe</option><option value="oo">Other</option></select></li>






<li class="postalCode" ><label for="advs-postalCode">Postal Code</label><input type="text" name="postalCode" id="advs-postalCode">
</li>




</ol>



</fieldset>


<div class="form-controls">
  <input type="submit" value="Search" name="submit" class="submit-advs">
  <input type="reset" class="reset-advs text-button" value="Reset">
</div>

</form>

  </div>

</div>


</div>  <!--  left search form ends here  !-->




<div id="adv-search-results">


<div id="results_count" class="mod results_count">

  <p><strong>9</strong> results</p>

  <div class="save-search-container"><span class="separator"><button id="save-search">Save search</button></span></div>

</div>



<div id="pivot-bar-container">

  <div id="pivot-bar"  class="pivot-bar mod" >


    <ul class="pivots">

<li class="pivot" data-li-pivot-facet-name="N" data-li-pivot-facet-value="F">1st Connections<button class="remove-pivot" type="submit" data-li-trk-code="vsrp_people_pivotbar_x" data-li-trk-facet-type="network">Remove</button></li>

<li class="pivot" data-li-pivot-facet-name="N" data-li-pivot-facet-value="S">2nd Connections<button class="remove-pivot" type="submit" data-li-trk-code="vsrp_people_pivotbar_x" data-li-trk-facet-type="network">Remove</button></li>


<li class="pivot" data-li-pivot-facet-name="N" data-li-pivot-facet-value="A">Group Members<button class="remove-pivot" type="submit" data-li-trk-code="vsrp_people_pivotbar_x" data-li-trk-facet-type="network">Remove</button></li>


<li><button class="pivot-reset" data-li-trk-code="vsrp_people_pivotbar_reset">Reset</button></li>


    </ul>

  </div>

</div>  <!-- pivot bar ends here  !-->



<div id="results-container">





  <ol id="results" class="search-results" >





<!--   One contact starts from here !-->






<?php
        if (isset($header3_item)){


          

          foreach ($header3_item as $key){



for ($i=0; $i < count($key) ; $i++) { 


             $s_o = $key[$i];

            


  
?>






    <li class="mod result idx1 people" >

<a href="#">
<img class="entity-img" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_60_60/p/4/000/140/2c9/1f050b9.jpg" height="60" width="60">
</a>


<div class="bd">

  <h3>
    <a href="#">
        <strong class="highlight"><?php echo $s_o->fname; ?></strong>  <?php echo $s_o->lname; ?>
    </a>
    <span class="badges"><span><abbr title="Farhan Raza Naqvi is a 2nd degree contact" class="degree-icon ">2<sup>nd</sup></abbr></span></span>
  </h3>

  <p class="description"><?php echo $s_o->title; ?></p>

  <dl class="demographic">
    
    <dd><?php echo $s_o->country ?></dd>
    
    <dd class="separator">Information Technology and Services</dd>
  </dl>


<div class="srp-actions blue-button" >


  <div class="primary-action-button">

    <a href="#">Connect</a>

  </div>

</div>


</div>

    </li>



<?php


}  // simple for loop ends here 
 

          

          }  // end bracket of foreach loop

            } // end bracket of if check

          ?>




<!--   One contact ends here !-->































<li class="mod result idx1 people" >

<a href="#">
<img class="entity-img" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_60_60/p/4/000/140/2c9/1f050b9.jpg" height="60" width="60">
</a>


<div class="bd">

  <h3>
    <a href="#">
        <strong class="highlight">Farhan</strong>  Raza Naqvi
    </a>
    <span class="badges"><span><abbr title="Farhan Raza Naqvi is a 2nd degree contact" class="degree-icon ">2<sup>nd</sup></abbr></span></span>
  </h3>

  <p class="description">Manager Multimedia at Techlogix</p>

  <dl class="demographic">
    
    <dd>Pakistan</dd>
    
    <dd class="separator">Information Technology and Services</dd>
  </dl>


<div class="srp-actions blue-button" >


  <div class="primary-action-button">

    <a href="#">Connect</a>

  </div>

</div>


</div>

    </li>









  </ol>

</div>  <!-- Results container ends here !-->

</div> <!-- Div with id  SEARCH RESULTS ends here  !-->


</div>  <!-- Div with id main ends here  !-->










<!-- Div with ID Footer  starts below ends here !-->


<div id="footer">

  <div id="above-border">

  </div>

<div class="wrapper">


  <ul class="nav-footer">
 <li>

 <a href="http://help.linkedin.com/app/home/loc/ft/trk/nux/" target="_blank" rel="nofollow" class="cust-svc-link"><strong>Help Center</strong></a>

 </li>
 <li><a href="/about-us">About</a></li>
 <li><a href="/redir/redirect?url=http%3A%2F%2Fpress%2Elinkedin%2Ecom%2F&amp;urlhash=UMoC" target="_blank">Press</a></li>
 <li><a href="/redir/redirect?url=http%3A%2F%2Fblog%2Elinkedin%2Ecom%2F&amp;urlhash=ULil" target="_blank">Blog</a></li>
 <li><a href="/company/linkedin/careers?trk=hb_ft_work">Careers</a></li>
  <li><a href="/advertising?src=en-all-el-li-hb_ft_ads&amp;trk=hb_ft_ads">Advertising</a></li>  
  <li><a href="/redir/redirect?url=http%3A%2F%2Fbusiness%2Elinkedin%2Ecom%2Ftalent-solutions%3Fsrc%3Dli-footer&amp;urlhash=f9Nj" target="_blank">Talent Solutions</a></li>
 <li><a href="/static?key=tools&amp;trk=hb_ft_tools">Tools</a></li>
 <li><a href="/mobile" target="_blank">Mobile</a></li>
 <li><a href="/redir/redirect?url=http%3A%2F%2Fdeveloper%2Elinkedin%2Ecom&amp;urlhash=EFv_" target="_blank">Developers</a></li>
 <li class=""><a href="/publishers?trk=hb_ft_pubs">Publishers</a></li>
 <li id="nav-utility-lang" class="">
 <a href="https://www.linkedin.com/secure/settings">Language</a> 
 </li>
 <li class="last">
 <a href="/mnyfe/subscriptionv2?displayProducts=&amp;trk=hb_ft_upyracct"> <strong>Upgrade Your Account</strong></a>
 </li>
 </ul>



<br>

 <p id="copyright" class=""><span>LinkedIn Corporation</span> <em> &copy; 2013</em></p>


<ul id="nav-legal">
 <li><a href="/legal/user-agreement?trk=hb_ft_userag">User Agreement</a></li>
 <li><a href="/legal/privacy-policy?trk=hb_ft_priv">Privacy Policy</a></li>
 <li>
 <a href="http://help.linkedin.com/app/answers/detail/a_id/34593/loc/na/trk/nux/" target="_blank" rel="nofollow">Community Guidelines</a>
 
 </li>
 <li><a href="/legal/cookie-policy?trk=hb_ft_cookie">Cookie Policy</a></li>
 <li class=""><a href="/legal/copyright-policy?trk=hb_ft_copy">Copyright Policy</a></li>


 <li class="last" id="feedback-request">
 
 
 <a href="http://help.linkedin.com/app/home/loc/ft/trk/nux/" target="_blank" rel="nofollow"><strong>Send Feedback</strong></a>
 

 
 </li>
 
 </ul>


</div>



</div>





<script src="C:/Users/Ali/Desktop/web_pro/pages_screen_shots/srobbin-jquery-pageslide-v2.0-0-gd00801f/srobbin-jquery-pageslide-d00801f/lib/jquery-1.7.1.min.js"></script>
    <script src="C:/Users/Ali/Desktop/web_pro/pages_screen_shots/srobbin-jquery-pageslide-v2.0-0-gd00801f/srobbin-jquery-pageslide-d00801f/jquery.pageslide.min.js"></script>
    <script>
        /* Default pageslide, moves to the right */
        var width = $(window).width();

$('.first').animate({left : -width}, 500, function(){ $div.hide() });

        
        /* Slide to the left, and make it model (you'll have to call $.pageslide.close() to close) */
        $(".second").pageslide({ direction: "left", modal: true });


 


    </script>







</body>




</html>