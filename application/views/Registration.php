                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Register Corona Patient Details</h5>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate method="POST" action="<?php echo base_url(); ?>index.php/registration/registerMember">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom01"> Traveler Person Name / प्रवासी व्यक्तीचे नाव</label>
                                                <input type="text" class="form-control" name="fullName" id="validationCustom01" placeholder=" प्रवासी व्यक्तीचे नाव" required>
                                                <div class="valid-feedback">
                                                    Enter valid name!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Gender / लिंग</label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="gender" name="gender" id="male" value="Male" class="custom-control-input"><span class="custom-control-label">Male</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="gender" name="gender" id="female" value="Fmale" class="custom-control-input"><span class="custom-control-label">Female</span>
                                            </label>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Enter Age / वय</label>
                                                <input data-parsley-type="number" type="text" required="" name="age" placeholder="Enter Age / वय" class="form-control">
                                                <div class="valid-feedback">
                                                    Enter Valid Age!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Enter Mobile Number / मोबाईल नंबर</label>
                                                <input data-parsley-type="number" type="text" name="mobile" required="" placeholder="आपला १० अंकी मोबाइलला नंबर एंटर करा" class="form-control">
                                                <div class="valid-feedback">
                                                    Enter Valid Age!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">कोणत्या राज्यातून आला आहात</label>
                                                <select name="statelist" id="state" onchange="GetSelectedState(this)" class="form-control selectpicker"  required>
                                                <option value="">राज्य निवडा</option>
                                                <?php
                                                    foreach ($statelist as $row)
                                                    {                                         
                                                            $str =$row->State_English_Name." / ".$row->State_Marathi_Name;
                                                           //echo "<script type='text/javascript'>alert('$row->stateId');</script>";
                                                         echo '<option value="'.$row->stateId.'">'.$str.'</option>';
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02"> कोणत्या जिल्ह्यातून आला आहात</label>
                                                <select name="districtlist" id="districtlist" onchange="GetSelectedDistrict(this)" class="form-control selectpicker" required>
                                                <option value="">जिल्हा निवडा</option>                              
                                                </select>
                                            </div> 
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">कोणत्या शहरातून आला आहात</label>
                                                <select name="city" id="citylist" class="form-control selectpicker" required>
                                                <option value="">शहर निवडा</option>                              
                                                </select>
                                            </div>                                         
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">पंढरपूर शहरातील राहण्याचा पत्ता</label>
                                                <input data-parsley-type="text" name="address" type="text" required="" placeholder="पंढरपूर शहरातील राहण्याचा पत्ता" class="form-control">
                                                <div class="valid-feedback">
                                                    Enter Valid Valid Address!
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">पंढरपूर शहरात प्रवेश करणेसाठी शासनाची परवानगी घेतली आहे काय ?</label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="permission" value="YES" class="custom-control-input"><span class="custom-control-label">YES/होय</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="permission" value="NO" class="custom-control-input"><span class="custom-control-label">NO/नाही</span>
                                            </label>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">मेडिकल सर्टिफिकेट आहे काय ?</label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="medical_certificate" value="YES" class="custom-control-input"><span class="custom-control-label">YES/होय</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="medical_certificate" value="NO" class="custom-control-input"><span class="custom-control-label">NO/नाही</span>
                                            </label>
                                            </div>
                                            
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <h4>कोणत्या चेकपॉईंट वरून पंढरपूर शहरात प्रवेश केला ?</h4>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" name="entrypoint" class="custom-control-input" value="पुणे-सातारा रोड,वाखरी चौक"><span class="custom-control-label">पुणे-सातारा रोड,वाखरी चौक</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="entrypoint" class="custom-control-input" value="कराड रोड,ठाकरे चौक"><span class="custom-control-label">कराड रोड,ठाकरे चौक</span>
                                            </label> 
                                            <label class="custom-control custom-radio">
                                                <input type="radio" name="entrypoint" class="custom-control-input" value="सांगोला-कोल्हापूर रोड यमाई तुकाईदेवी मंदिर"><span class="custom-control-label">सांगोला-कोल्हापूर रोड यमाई तुकाईदेवी मंदिर</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="entrypoint" class="custom-control-input" value="मंगळवेढा रोड, गोपाळपूर पुलाजवळ"><span class="custom-control-label">मंगळवेढा रोड, गोपाळपूर पुलाजवळ</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" name="entrypoint" class="custom-control-input" value="टेम्भूर्णी-सोलापूर रोड अहिल्या पुलाजवळ"><span class="custom-control-label">टेम्भूर्णी-सोलापूर रोड अहिल्या पुलाजवळ</span>
                                            </label>
                                           <!-- <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="entrypoint" class="custom-control-input"><span class="custom-control-label">मंगळवेढा रोड, गोपाळपूर पुलाजवळ</span>
                                            </label>-->
                                            
                                    </div>
                                        </div>
                                        
<!--                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                        <label class="form-check-label" for="invalidCheck">
                                                            Agree to terms and conditions
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            You must agree before submitting.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
<script>  
 $(document).ready(function(){  
      $('#statelist').change(function(){  
           var stateId = $('#statelist').val();  
           alert(stateId); 
             /*   $.ajax({  
                        url:"<?php echo base_url(); ?>index.php/registration/fetchDistrict",  
                        method:"POST",  
                        data:{stateId:stateId},  
                        success:function(data){  
                        $('#districtlist').html(data);
                        } 
                });   */
      });   
 });  
</script>  
 <script type="text/javascript">
    function GetSelectedState(state) {
        var stateId = $('#state').val();  
           //alert(stateId); 
                $.ajax({  
                        url:"<?php echo base_url(); ?>index.php/registration/fetchDistrict",  
                        method:"POST",  
                        data:{stateId:stateId},  
                        success:function(data){  
                        $('#districtlist').html(data);
                        } 
                });   
    }
</script>
<script type="text/javascript">
    function GetSelectedDistrict(districtlist) {
        var districtId = $('#districtlist').val();  
           //alert(districtId); 
                $.ajax({  
                        url:"<?php echo base_url(); ?>index.php/registration/fetchCity",  
                        method:"POST",  
                        data:{districtId:districtId},  
                        success:function(data){  
                        $('#citylist').html(data);
                        } 
                });   
    }
</script>
