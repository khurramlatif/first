<!DOCTYPE html>


<?php $this->load->library('session'); ?>


<html lang="en" class="os-win">
<head>
	<title>

		Welcome to Linked In

	</title>

	<link rel="stylesheet" type="text/css" href="<?php  echo CSS.'/L_home_css.css' ?>">




 


     <script type="text/javascript">
        function RotateSpinner(spinnerId, up) {
            document.getElementById(spinnerId).value = up ? parseInt(document.getElementById(spinnerId).value) + 1 : parseInt(document.getElementById(spinnerId).value) - 1;
        }
    



        function submit_both(){

          alert("working");

          document.form1.submit();
          document.form2.submit();

          //document.getElementById("text_field").submit();
          //document.getElementById("slideshare-upload-form").submit();

       

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


 <form method="POST" class="header-form">


<fieldset>

<legend>Find People, Jobs, Companies, and More</legend>

<div id="control_gen_2">

	<label for="main-search-category">Search for:</label>

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
                    
                    <?php echo $this->session->userdata('fname'); ?>                 

                  </span>

                  <span class="act-set-action">
                    <a href="http://localhost/codeingniter-bootstrap/index.php/logout_controller" class="account-submenu-split-link">
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

</div>




<div id="main" class="home-member-new grid-f">



<div id="content">



<div id="feed-nhome"  class="section feed feed-nhome feed-redesign">


  <div class="filter-cont rt-filter-cont"  id="posting-area">


    <div id="slick-sharing-cont" class="profile-image post-home is-view share-box rt-filter-cont">

<a href="#">
<img src="https://static.licdn.com/scds/common/u/img/themes/katy/ghosts/profiles/ghost_profile_60x60_v1.png" class="member-photo animated-member-photo" width="60" height="60" alt="faran kaka009">
</a>



    <div id="post-module" class="post-module">


<form  name="form1" method="POST" id="text_field" action="http://localhost/codeingniter-bootstrap/index.php/l_home_controller/process_status" >

<textarea name="postText" id="postText-postModuleForm" rows="2" cols="40" class="post-message mentions-input" placeholder="Share an update..." data-base-height="15"></textarea>


</form>


<form  name="form2" id="slideshare-upload-form" class="is-ready" method="POST" enctype="multipart/form-data"  action="http://localhost/codeingniter-bootstrap/index.php/l_home_controller/process_status" >



  <input name="file_name"  type="file" id="slideshare-file-input" class="file-input">







    </div>



    </div>





  </div>







<div id="move_down">
<div id="share_with">

<input id="spinner" type="text" value="Public" />
    <ul class="spinner">
        <li>
            <input type="button" value="&#9650;" onclick="RotateSpinner('spinner', true)" />
        </li>
        <li>
            <input type="button" value="&#9660;" onclick="RotateSpinner('spinner', false)" />
        </li>


    </ul>


</div>


<div class="submit">
<input type="button" name="" onclick="submit_both();" value="Share" class="btn-primary" id="share-submit" >
</div>
</div>

</div>



</form>  <!--  End form with id  slideshare-upload-form !-->



<div  id="updates_box">





<ul class="show_status">




<!--  One complete status Starts from  here  here  !-->


<li class="one_status">

<div class="user_image">
<img src="http://localhost/codeingniter-bootstrap/assets/img/images/dummy_dp.png">
</div>

<div class="user_name">

<a href="#"><strong><?php echo $this->session->userdata('fname'); ?> </strong> </a>

</div>

<div class="posted_msg">

dsdasd dasdasdas sdfasdas dssc dsvv vfdvsdf hdasm masnknascsks msdbjasdkja askdaikdn askaskdlas akjsdkjasdn kadkas kasdnkasdk asdkasdla ladnkasdn ajsdgasd lasdjla asyuw d asdnlald abkasdl kasdnlaksl ajsghajdl


<div class="feed-items">

<ul>

<li><a href="#">Like </a></li> <span>.</span>
<li><a href="#">Comment</a></li>
<li><a href="#">Share</a></li>
<li>2m ago</li>

</ul>


</div>

</div>  <!--  end div  posted_msg !-->


</li>

<!--  One complete status ends here  !-->









<li class="one_status">

<div class="user_image">
<img src="http://localhost/codeingniter-bootstrap/assets/img/images/dummy_dp.png">
</div>

<div class="user_name">

<a href="#"><strong><?php echo $this->session->userdata('fname'); ?> </strong> </a>

</div>

<div class="posted_msg">

Hi  this is a line of text .
assssssssssssssssff


<div class="feed-items">

<ul>

<li><a href="#">Like </a></li> <span>.</span>
<li><a href="#">Comment</a></li>
<li><a href="#">Share</a></li>
<li>2m ago</li>

</ul>


</div>

</div>  <!--  end div  posted_msg !-->


</li>


















</ul>


</div>

</div>




<div id="right_div">

  <div id="title_rd">

<h3>WHO'S VIEWED YOUR UPDATES</h3>
  </div>

  <div id="content_rd">


<div id="inner_content">

<div  id="boundry">
  <div class="content-main">
            
                <h3><?php echo $this->session->userdata('fname'); ?> , start getting noticed.</h3>
                <p>See who you reach when you share on LinkedIn.</p>
                <a href="/today/?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_true_*1&amp;trk=nmp_wvmu_teaser_link" class="cta" data-li-trkcode="nmp_wvmu_teaser_link_hover">Great articles to get you started</a>
              
          </div>


</div>


</div>


  </div>

</div>   <!-- Div with id right_div ends here  !-->



<div id="rr-footer">


  <div class="nav-container">
 <ul id="nav-links">
 <li class="nav-link"><a href="/about-us">About</a></li>

 <li class="nav-link">
 
 <a href="/lite/feedback-form">Feedback</a>

 
 </li>

 <li id="privacy-nav" class="nav-link">
 <a href="#privacy-subnav" class="subnav-trigger">Privacy &amp; Terms</a>

 
 </li>


 </ul>
 </div>


 <h3 id="copyright"><span class="copy-text">LinkedIn Corp &copy; 2013</span></h3>

</div>  <!-- Div with id rr-footer ends here  !-->


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