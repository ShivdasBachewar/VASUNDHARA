                  <!DOCTYPE html>
                  <html>
                  <title>rojnishi</title>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                  <style>
                  body,h1,h2,h3,h4,h5 { font-family: "Raleway", sans-serif ;}
                

                  </style>


                  <body class="w3-light-grey">

                  <!-- w3-content defines a container for fixed size centered content, 
                  and is wrapped around the whole page content, except for the footer in this example -->
                  <div class="w3-content" style="max-width:1300px">
                  <!-- Header -->
                  <header class="w3-container w3-black"> <!-- Navbar (sit on top) -->
                  <div class="w3-row">
                    <div class="w3-bar-item w3-black  w3-xlarge w3-padding-16" >
                       <a href="home.php"  class="w3-bar-item w3-button w3-circle w3-wide "><img src="images/thumb.jpg"></img></a>
                          <a href="home.php" class="w3-bar-item w3-button w3-wide w3-hover-text-red w3-hover-none" style="text-decoration:none">वसुंधरा</a>
                      <!-- Right-sided navbar links -->
                      <div class="w3-right w3-hide-small" >
                        <a href="stories.php" class="w3-bar-item w3-button w3-hover-text-red w3-hover-none" style="text-decoration:none">लेख </a>
                        <a href="poem.php" class="w3-bar-item w3-button w3-hover-text-red  w3-hover-none"  style="text-decoration:none"> कविता</a>
                        <a href="navelekhan.php" class="w3-bar-item w3-button w3-hover-text-red w3-hover-none" style="text-decoration:none">  नवेलेखन</a>
                        <a href="#pricing" class="w3-bar-item w3-button w3-hover-text-red w3-hover-none" style="text-decoration:none"> कलादालन</a>
                        <a href="register.php" class="w3-bar-item w3-button w3-hover-text-red w3-hover-none" style="text-decoration:none"> संपर्क</a>
                      </div>
                      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
                      </div>
                      </div>
                  </header>

                <div class="w3-row">
                <div class="w3-col l8 s12">
                <div class=" w3-panel w3-margin w3-text-red w3-padding" > 

                <h4><strong>    सदस्य खाते /  वसुंधराचे सदस्य व्हा ! </strong> </h4>
                
                
                <div class=" w3-panel w3-margin w3-text-black" > 

                <h2>  सदस्य खाते </h2>
                </div>
                </div>
                </div>
                </div>


              <div class="w3-row">
                <div class="w3-col l8 s12">
                <div class=" w3-panel w3-margin w3-text-black w3-padding-16" > 


                 <section id="block-system-main" class="block block-system clearfix">

                      
                  <form class="user-info-from-cookie" enctype="multipart/form-data" action="/user/register" method="post" id="user-register-form" accept-charset="UTF-8">
                  <div><div id="edit-account" class="form-wrapper form-group">
                  <div class="form-item form-item-name form-type-textfield form-group"> <label class="control-label" for="edit-name">सदस्यनाम <span class="form-required" title="This field is required.">*</span></label>
                <input class="username form-control form-text required" title="" data-toggle="tooltip" id="edit-name" name="name" value="" size="60" maxlength="60" data-original-title="Spaces are allowed; punctuation is not allowed except for periods, hyphens, apostrophes, and underscores." type="text"></div><script type="text/javascript">_gph_edit_name = new gamabhanaPhoneticHandler('edit-name','__devanagari__','__roman__','#gamabhana#');</script><div class="form-item form-item-mail form-type-textfield form-group"> <label class="control-label" for="edit-mail">ईमेल पत्ता <span class="form-required" title="This field is required.">*</span></label>
                <input class="form-control form-text required" title="" data-toggle="tooltip" id="edit-mail" name="mail" value="" size="60" maxlength="254" data-original-title="A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail." type="text"></div><div class="form-item form-item-pass form-type-password-confirm form-group"><div class="row"><div class="form-item form-item-pass-pass1 form-type-password form-group col-sm-6 col-md-4 has-feedback"> <label class="control-label" for="edit-pass-pass1">संकेताक्षर <span class="form-required" title="This field is required.">*</span><div class="label" aria-live="assertive"></div></label>
                <input class="password-field form-control form-text required password-processed" id="edit-pass-pass1" name="pass[pass1]" size="25" maxlength="128" type="password"><span class="glyphicon form-control-feedback"></span><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div></div></div><div class="form-item form-item-pass-pass2 form-type-password form-group col-sm-6 col-md-4 has-feedback"> <label class="control-label" for="edit-pass-pass2">संकेताक्षर (पासवर्ड) पडताळणी <span class="form-required" title="This field is required.">*</span></label>
                <input class="password-confirm form-control form-text required" id="edit-pass-pass2" name="pass[pass2]" size="25" maxlength="128" type="password"><span class="glyphicon form-control-feedback"></span></div><div class="help-block password-help"></div></div></div><input name="timezone" value="Asia/Kolkata" type="hidden">
                
                  <button type="submit" id="edit-submit" name="op" value="वसुंधराचे सदस्य व्हा !" class="w3-hover-text-red btn btn-default form-submit">वसुंधराचे सदस्य व्हा !</button>

                  <hr>
                  <br>
                                     <h5>Already have an Aconunt </h5><hr>
                                     <a href="login.php" class="w3-bar-item w3-button w3-hover-text-red w3-red "  style="text-decoration:none"> login</a>


                         </form></section>
                      
                  </div>
                  </div>
                <hr>
              
   <!-- Introduction menu -->
                <div class="w3-col l4">
                  
                  <!-- Posts -->
                  <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                      <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                      <li class="w3-padding-16">
                        <img src="/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">hanuman</span><br>
                        <span>nuclare atomataion</span>
                      </li>
                      <li class="w3-padding-16">
                        <img src="/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">hanuman</span><br>
                        <span>Praes tinci sed</span>
                      </li> 
                      <li class="w3-padding-16">
                        <img src="/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">sherlock</span><br>
                        <span>Ultricies congue</span>
                      </li>   
                      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                        <img src="/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                        <span class="w3-large">partner</span><br>
                        <span>Lorem ipsum dipsum</span>
                      </li>  
                    </ul>
                  </div>
                  <hr> 
                 




                               <div class="w3-card w3-margin">
                                  <div class="w3-container w3-padding w3-white">
                    
                              <div class="panel-heading">

                                      <h4 class="panel-title">वसुंधरात आलेली माणसं</h4>
                                
                              </div>

                                  <div class="panel-body">
                                  <p>सध्या 12 सदस्य हजर आहेत.</p><ul><li><span class="username" xml:lang="" about="/user/27003" typeof="sioc:UserAccount" property="foaf:name" datatype="">urenamashi</span></li>
                            <li><span class="username" xml:lang="" about="/user/10168" typeof="sioc:UserAccount" property="foaf:name" datatype="">किल्लेदार</span></li>
                            <li><span class="username" xml:lang="" about="/user/23551" typeof="sioc:UserAccount" property="foaf:name" datatype="">थॉर माणूस</span></li>
                            <li><span class="username" xml:lang="" about="/user/7371" typeof="sioc:UserAccount" property="foaf:name" datatype="">अर्धवटराव</span></li>
                            <li><span class="username" xml:lang="" about="/user/23660" typeof="sioc:UserAccount" property="foaf:name" datatype="">अनन्त अवधुत</span></li>
                            <li><span class="username" xml:lang="" about="/user/16063" typeof="sioc:UserAccount" property="foaf:name" datatype="">प७९</span></li>
                            <li><span class="username" xml:lang="" about="/user/11117" typeof="sioc:UserAccount" property="foaf:name" datatype="">रुपी</span></li>
                            <li><span class="username" xml:lang="" about="/user/22202" typeof="sioc:UserAccount" property="foaf:name" datatype="">समर्पक</span></li>
                            <li><span class="username" xml:lang="" about="/user/21874" typeof="sioc:UserAccount" property="foaf:name" datatype="">NiluMP</span></li>
                            <li><span class="username" xml:lang="" about="/user/18831" typeof="sioc:UserAccount" property="foaf:name" datatype="">राघवेंद्र</span></li>
                            <li><span class="username" xml:lang="" about="/user/16882" typeof="sioc:UserAccount" property="foaf:name" datatype="">श्रीरंग_जोशी</span></li>
                            <li><span class="username" xml:lang="" about="/user/10033" typeof="sioc:UserAccount" property="foaf:name" datatype="">विदुला</span></li>
                            </ul>   </div>
                              
                                    </div>
                                    </div>











                  <!-- Labels / tags -->
                  <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                      <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                    <p><span class="w3-tag w3-black w3-margin-bottom">कविता </span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">लेख</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">बालगीते</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                    </p>
                    </div>
                  </div>
                  
                <!-- END Introduction Menu -->
                </div>

                <!-- END GRID -->
                </div><br>

                <!-- END w3-content -->
                </div>
                 </div>



                  <!-- Footer -->
                  
                  <footer class ="w3-row w3-grey w3-padding" >
                    <div class="w3-row-padding w3-center w3-margin-top"><br>
                    <div class="w3-third">
                      <div class="w3-card w3-container w3-black" style="min-height:130px" ; align="left">
                      <h4>वसुंधरा.कॉम  बाबत मूलभूत माहिती:</h4><br>
                      <p>आम्ही कोण?</p>
                      </div> 
                    </div>

                    <div class="w3-third">
                      <div class="w3-card w3-container w3-black" style="min-height:130px"; align="left">
                      <h4>नवीन सदस्यांकरीता महत्वाचे दुवे:</h4><br>
                     <p>सदस्य होण्यापूर्वी वाचावे असे काही</p>
                      </div>
                    </div>

                    <div class="w3-third">
                      <div class="w3-card w3-container w3-black" style="min-height:130px" ; align="left">
                      <h4>अभिप्राय देण्याविषयी:</h4><br>
                      <p>कृपया आजच आपला अभिप्राय नोंदवा.</p>
                      </div>
                      </div>
                    </div>
                    
                    <hr>

                     <div class="w3-row-padding w3-center w3-margin-top "><br>
                         <div class= "w3-third">
                           <div class=" w3-container w3-opacity" style="min-height:50px" ; align="left"> 
          
                              <i class="fa fa-facebook-official w3-hover-opacity"></i>
                              <i class="fa fa-instagram w3-hover-opacity"></i>
                              <i class="fa fa-snapchat w3-hover-opacity"></i>
                              <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                              <i class="fa fa-twitter w3-hover-opacity"></i>
                              <i class="fa fa-linkedin w3-hover-opacity"></i>
                              <p class="w3-medium">Powered by <a href="#" target="_blank" class="w3-hover-text-green w3-text-red">वसुंधरा.कॉम</a></p>
                           </div>
                         </div>

                            <div class= "w3-third">
                            <div class="  w3-opacity " style="min-height:50" ; align="left"> 
                                <h5>© 2018 vasundhara.com, All rights reserved.</h5>
                              </div> 
                              </div>


                              <div class= "w3-third ">
                              <div class="  w3-opacity  " style="min-height:50px" ; align="right"> 
                                  <h5>©  Disclaimer · Privacy policy · Login .</h5>
                                </div>  
                                </div>
                             </div> 

                          </footer>       
        
                  </body>
                  </html>
