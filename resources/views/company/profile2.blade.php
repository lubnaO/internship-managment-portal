<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/profile2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
 <form method="post">
    <div class="row">
     <div class="col-md-4">
         <div class="profile-img">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
            
                    </div>
                    </div>

                    @foreach ($CompanyForm as $companyform)
                    <div class="col-md-6">
                    <div class="profile-head">
                                 <h5>
                                 {{ $companyform->name }} 
                                 </h5>
                                    <h6>
                                    Field of Company
                                    </h6>
                                    <p class="Location">  {{ $companyform->city}} </span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link " id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Our History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#section-history" role="tab" aria-controls="profile" aria-selected="false">Brief Description</a>
                                </li>
                             
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                      <i class="fa fa-phone"></i>Phone number </p>
                      <p class="user-email"><i class="fa fa-envelope"></i> Email</p>
                 
                           <!-- <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>--> 
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="section-history">
                            <div class="tab-pane fade " role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                          
                                           <p> The Moon is a barren, rocky world without air and water. It has dark lava plain on its surface. 
                                               The Moon is filled wit craters. It has no light of its own. It gets its light from the Sun. 
                                               The Moo keeps changing its shape as it moves round the Earth.
                                                It spins on its axis in 27.3 days stars were named after the Edwin Aldrin were the first ones to set
                                                 their foot on the Moon on 21 July 1969 They reached the Moon in their space craft named Apollo II. </p>
                                        </div>
                                      </div>
                                    </div>
                            </div>

                            <div class="col-md-8">
                        <div class="tab-content " >
                            <div class="tab-pane fade  " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                           <h4> our history </h4>
                                           <p> The Moon is a barren, rocky world without air and water. It has dark lava plain on its surface. 
                                               The Moon is filled wit craters. It has no light of its own. It gets its light from the Sun. 
                                               The Moo keeps changing its shape as it moves round the Earth.
                                                It spins on its axis in 27.3 days stars were named after the Edwin Aldrin were the first ones to set
                                                 their foot on the Moon on 21 July 1969 They reached the Moon in their space craft named Apollo II. </p>
                                        </div>  
                            </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>