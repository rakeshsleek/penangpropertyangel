<div class="content container-fluid">
    <form id="<?php echo $form;?>" action="<?php echo $route;?>" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
        <div class="row">
            <?php if(hasMessage('warning')) { ?>
                <div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i><?php echo getMessage('warning');?>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
            <?php } ?>
            <div class="col-sm-4 col-xs-3">
                <h4 class="page-title"><?php echo $title;?></h4>
            </div>
            <div class="col-sm-8 text-right m-b-30">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                <a href="<?php echo $back;?>" class="btn btn-primary"><i class="fa fa-back"></i> Back</a>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h3 class="page-title">Add Main Information</h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>First Name<span class="text-danger">*</span></label>
                            <input value="<?php echo $firstname;?>" name="first_name" class="form-control"  type="text" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Last Name<span class="text-danger">*</span></label>
                            <input value="<?php echo $lastname;?>" name="last_name" class="form-control"  type="text">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Username(Email)<span class="text-danger">*</span></label>
                            <input value="<?php echo $email;?>" name="email" class="form-control" type="email" required>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Gender</label>
                            <input <?php echo ($gender === 'Male') ? : "checked" ;?> type="radio" name="gender" value="Male"> Male
                            <input <?php echo ($gender === 'Female') ? : "checked" ;?> type="radio" name="gender" value="Female"> Female
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Birthday<span class="text-danger"></span></label>
                            <input value="<?php echo $birthday;?>" name="birthday" class="form-control"  type="text">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>NRIC</label>
                            <input value="<?php echo $nric;?>" name="nric" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Telephone<span class="text-danger"></span></label>
                            <input value="<?php echo $phone;?>" name="phone" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Mobile<span class="text-danger"></span></label>
                            <input value="<?php echo $mobile;?>" name="mobile" class="form-control " type="text">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Fax</label>
                            <input value="<?php echo $fax;?>" name="fax" class="form-control " type="text">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Occupation<span class="text-danger"></span></label>
                            <input value="<?php echo $occupation;?>" name="occupation" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Address<span class="text-danger"></span></label>
                            <input value="<?php echo $address_1;?>" name="address_1" class="form-control" value="" type="text">
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Country<span class="text-danger"></span></label>
                            <select name="country_id" class="form-control">
                                <?php if(!empty($countries)) {
                                    foreach ($countries as $country) {?>
                                        <option value="<?php echo $country->id;?>" <?php echo ($country_id == $country->id) ? "selected" : "";?>><?php echo $country->name;?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>State/Province<span class="text-danger"></span></label>
                            <select name="state_id" class="form-control">
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>City<span class="text-danger"></span></label>
                            <input value="<?php echo $city;?>" name="city" class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label>Zip Code<span class="text-danger"></span></label>
                            <input value="<?php echo $postcode;?>" name="postcode" class="form-control" type="text" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="form-group">
                            <label>Logo<span class="text-danger"></span></label>
                            <a href="javascript:void(0);" id="thumb-image" data-toggle="image" class="img-thumbnail" type="image"><img src="<?php echo $thumb;?>" alt="" title="" data-placeholder="<?php echo $placeholder;?>"/></a>
                            <input type="hidden" name="logo" value="<?php echo $logo;?>" id="input-image" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </form>
</div>