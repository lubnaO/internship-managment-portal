<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('css/companyprofile.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<style>

</style>
</head>

<body>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <img src="{{ asset('storage/'.$company->companyform->img) }}" alt="">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                      
                                    <h5>
                                      {{$company->name}} 
                                    </h5>
                                    <h6>
                                    {{$company->companyform->city}} 
                                    </h6>
                                    
                                   
                             
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Our History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Berif Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="value-tab" data-toggle="tab" href="#value" role="tab" aria-controls="profile" aria-selected="false"> Our value </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="jon=bs-tab" data-toggle="tab" href="#Jobs" role="tab" aria-controls="profile" aria-selected="false"> Jobes </a>
                                </li>
                                
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                        <i class="fa fa-phone"></i>{{$company->companyform->phone}} </p>
                      <p class="user-email"><i class="fa fa-envelope"></i> {{$company->companyform->contact}} </p>
                              
                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>   {{$company->companyform->history}} </p>
                                            </div>
                                          
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>    {{$company->companyform->description}}   </p>
                                            </div>
                                   
                            
                        </div>
                    </div>

                    <div class="tab-pane fade" id="value" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p>    {{$company->companyform->create}}   </p>
                                            </div>
                                   
                            
                        </div>
                    </div>
                   
                
                    <div class="tab-pane fade" id="Jobs" role="tabpanel" aria-labelledby="jobs-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                         
                                            @foreach ( $company->announcaments as $annouancment )

                                    
                                      <p>{{ $annouancment->city }} </p>



                                            @endforeach
                                            </div>
                                     
                            
                        </div>
                    </div>
               
                            
                </div>
            </form>           
        </div>
        

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        </body>
        </html>