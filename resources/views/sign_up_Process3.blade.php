
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Material Bootstrap Wizard by Creative Tim</title>

  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />

 

  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
   <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  
  <link href="{{asset('assets/css/material-bootstrap-wizard.css')}}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
  <!-- Google Tag Manager -->
  
  <!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
  
  <!-- End Google Tag Manager (noscript) -->
  <div class="image-container set-full-height" style="background-image: url('Admin_Assit/assets/img/form-image.jpg')">
      <!--   Creative Tim Branding   -->
   

    <!--  Made With Material Kit  -->
   

      <!--   Big container   -->
      <div class="container">
          <div class="row">
            <div class="col-sm-12 col-sm-offset-0">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="" id="datain">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">
                                Welcome to
15 Campbell Street, Amityville, NY 11701
Sign-in to get Started
                              </h3>
                  <!--<h5>This information will let us know more about you.</h5>-->
                          </div>
              

                           <div class="tab-pane" id="description1">
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <!--<h4 class="info-text"> Let's start with the basic details.</h4>-->
                                    </div>
                                      <div class="col-sm-6">
                                          <div class="input-group">
                                              <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                              </span>
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Agent's First Name</label>
                                                  <input name="Agent_First_Name" type="text" id="Agent_First_Name"  class="form-control" placeholder="Agent's First Name" tabindex="1">
                                              </div>


                                          </div>

                                           <div class="input-group">
                                                <span class="input-group-addon">
                                                   <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                     <label class="control-label">Agent's Email</label>
                                                     <input name="Agent_Email" id="Agent_Email" type="Email" class="form-control" placeholder="Agent's Email" tabindex="3">
                                               </div>
                                          </div>
                                      </div>

                                      <div class="col-sm-6">
                                          <div class="input-group">
                                              <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                              </span>
                                              <div class="form-group label-floating">
                                                  <label class="control-label">Agent's Last Name</label>
                                                  <input name="Agent_Last_Name" id="Agent_Last_Name" type="text" class="form-control" placeholder="Agent's Last Name" tabindex="2">
                                              </div>


                                          </div>

                                           <div class="input-group">
                                                <span class="input-group-addon">
                                                   <i class="material-icons">phone</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                     <label class="control-label">Agent's Phone</label>
                                                     <input name="Agent_Number" id="Agent_Number" type="text" class="form-control" placeholder="Agent's Phone" tabindex="4">
                                               </div>
                                          </div>
                                      </div>
                                   
                                  </div>
                                 
                                </div>


                               

                                
                              
                                 



                                

                          
                            <div class="wizard-footer" style="margin-top:100px">
                                <div class="pull-right">
                                      <input type='button' class='btn  btn-fill btn-danger btn-wd' name='next' value='Next' onclick="step3();" />
                                      <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish'   onclick="step7();" />
                                  </div>
                               <div class="pull-left">
                                      <input type='button' class='btn  btn-fill btn-default btn-wd' name='previous' value='Previous' onclick="backclick();"/>

                    
                                  </div>
                                  <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->
    </div> <!--  big container -->

      

    
    </div>

  </div>

</body>
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

  <!--  Plugin for the Wizard -->
  <script src="{{asset('assets/js/demo.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/material-bootstrap-wizard.js')}}" type="text/javascript"></script>

  <!--  More information about jquery.validate here: https://jqueryvalidation.org/   -->
  <script src="{{asset('assets/js/jquery.validate.min.js')}}" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function () {


       //alert("hello");

       fill_data();
});

function fill_data() 
{
     //alert("hello1");
     $.ajax({
            url: "{{url('/prebtn')}}",
            method: 'get',
            dataType: 'json',
     success: function (data) {
             // alert("hello2");
              console.log(data[0].Working_Real_Estate);
           //$('input[name="Home_Loan"]:checked').val(data[0].Home_Loan);
               $("#Agent_First_Name").val(data[0].Agent_First_Name);
                $("#Agent_Last_Name").val(data[0].Agent_Last_Name);
               $("#Agent_Email").val(data[0].Agent_Email);
           $("#Agent_Number").val(data[0].Agent_Number);
     }



     });
}




function step3()
{
  //alert("test1");
  //alert($('input[name="Home_Loan"]:checked').val());
   var _data = {
       Agent_First_Name:  $("#Agent_First_Name").val(),
       Agent_Last_Name:  $("#Agent_Last_Name").val(),
       Agent_Email:  $("#Agent_Email").val(),
       Agent_Number:  $("#Agent_Number").val(),
     }

     $.ajax({
                url: "{{url('/welcome/step3')}}",
                //data: $("#datain").serialize(),
                method: 'get',
                data:_data,
                dataType: 'html',
                success: function (result) {
                   var url = "{{url('/si4')}}";
                  $(location).attr('href',url);
                },
            })
}
function backclick()
{
    var url = "{{url('/si2')}}";
     $(location).attr('href',url);
    
}

  </script>


 

</html>
