<!--WEB APPLICATION DEVELOPED BY EDDY ELLA & FELIX GOZALI--> 

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Update Profile</title>
    <?php include 'frontend/includes/head.php';?>
</head>
    
<body class='page'>
<?php include 'frontend/includes/menu.php';?>   
    
<main class='content content-ex'>
<section class='section'>
    <div class="container container-fluid">
        <div class='row'>
            <div class='col-sm-8 col-md-8'>
                <div class="blog blog-main shadow">
                    <h4>Personal Details</h4>
                    <div class='details'>
                    <div class='row'>
                        <div class='col-md-4 col-sm-4'>
                            <div class='profile-picture'>
                            <img src='<?php echo $server_root?>/images/users/1024/profile.jpg' class='img-circle img-responsive' />
                            </div>
                        </div>
                        
                        <div class='col-sm-8'>
                        <form method="POST" action='' id="form">  
                        <div class="tab-content">
                            <div class="errorForm col-sm-12"></div>
                            <div class='form-group col-sm-12'>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input  type="text" class="form-control input-lg firstname" placeholder='First Name' name='firstname' title='Enter your first name' required/>
                                </div>
                            </div>

                            <div class='form-group col-sm-12'>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input  type="text" class="form-control input-lg lastname" placeholder='Lastname Name' name='lastname' title='Please enter your last name' required/>
                                </div>
                            </div>
                            
                        <div class='form-group col-sm-12'>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-smile-o fa-fw"></i></span>
                                <input  type="text" class="form-control input-lg" placeholder='Preferred Name' name='nickname'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-12'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-send fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg email" placeholder='Personal Email (Not Insearch email)' name='email' title='Please enter your email' required/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-12'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Phone Number' name='phone' id='phone'/>
                            </div>
                        </div>
                        
                        <div class='form-group col-sm-12'>
                            <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
                            <input  type="text" class="form-control input-lg" placeholder='Address' name='address'/>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-4">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Day of Birth</option>
                                <?php
                                    for($i = 1; $i <= 31; $i++)
                                    {
                                        echo "<option value='".$i."'>".$i."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-4">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Month of Birth</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                               
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-4">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Year of Birth</option>
                                <?php
                                    for($f = 1970; $f <= 2006; $f++)
                                    {
                                        echo "<option value='".$f."'>".$f."</option>";
                                    }

                              ?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control input-lg" name="gender">
                                <option selected>Gender</option>
                                <option value='0'>Female</option>
                                <option value='1'>Male</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-6">
                          <select class="form-control input-lg" name="country">
                                <option selected>Country (Current Passport)</option>
                                <?php include 'frontend/includes/countries.html';?>
                            </select>
                        </div>
                        
                        <div class="form-group col-sm-12">
                            <select id="multi" data-placeholder="Choose the languages you speak" multiple class="w350">
                                <option value="">Choose One or more</option>
                                <?php include 'frontend/includes/languages.html';?>
                            </select>
                        </div>
                           
                        <div class="form-group col-sm-12">
                            <button type="submit" class="btn btn-orange btn-lg pull-right"><i class='fa fa-floppy-o fa-fw'></i> Save</button>                          <div class='clear'></div>
                        </div>
                        
                    </div>
                    </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div> 
            
            
            
            <div class='col-sm-4 col-md-4'>
                <a href=''><div class="blog shadow blog-sidebar">
                    <h3><i class='fa fa-info fa-fw'></i> Update your description</h3>
                </div></a>
                
                <a href=''><div class="blog shadow blog-sidebar">
                    <h3><i class='fa fa-gears fa-fw'></i> Update your Skills</h3>
                 
                </div></a>
                
                <a href=''><div class="blog shadow blog-sidebar">
                    <h3><i class='fa fa-graduation-cap fa-fw'></i> Update your qualifications</h3>
                    
                </div></a>
                
                <a href=''><div class="blog shadow blog-sidebar">
                    <h3><i class='fa fa-refresh fa-fw'></i> Update your experience</h3>
                
                </div></a>
            </div>
            
        
        </div>
    </div>
</section>
    
    

</main>
    
<?php include 'frontend/includes/footer.php';?>    
</body>
<?php include 'frontend/includes/js.php';?>  
<script src="<?php echo $server_root;?>/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo $server_root;?>/assets/js/select2.min.js"></script>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    
<script>
    jQuery(document).ready(function($) {        
        // Error Message In One Container
        jQuery("#valWizard").validate({
            errorLabelContainer: jQuery("#valWizard div.errorForm")
        });
        
        jQuery("#phone").mask("99 9999 9999");
        tinymce.init({selector:'.tiny'});
        jQuery("#multi").select2();        

    });
</script>
</html>