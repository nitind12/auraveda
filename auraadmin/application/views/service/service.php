<style>
  #txtAboutService{width:100%;}
  #txtIncludes{width:100%;}
  #txtBenefits{width:100%;}
</style>

<?php
    if(isset($editservicedetail)){

        $backcolor = "#FF8800";
        $color_ = "#FF8800";
        $categ_ = $editservicedetail->CATEGID;
        $service = $editservicedetail->SERVICE;
        $sid = $editservicedetail->SID;
        $about_ = $editservicedetail->ABOUT;
        $strabout_ = '';
        $define_ = $editservicedetail->_DEFINE_;
        $strdefine_ = '';
        $includes_ = $editservicedetail->INCLUDES;
        $strincludes_ = '';
        $benefits_ = $editservicedetail->BENEFITS;
        $strbenefits_ = '';
        $vareity_ = $editservicedetail->VAREITY;
        $strvareity = '';
        $duration_ = $editservicedetail->DURATION;
        $time_ = $editservicedetail->TIME;
        $fee_ = $editservicedetail->FEE;
        $free_ = $editservicedetail->FREE_;
        $discount_ = $editservicedetail->DISCOUNT_;
        $button_ = '<button type="submit" class="btn btn-danger"> Update </button>';
    } else {
        $backcolor = "#f0f0f0";
        $color_ = "#000000";
        $categ_ = '';
        $strabout_ = '';
        $about_ = '';
        $define_ = '';
        $strdefine_ = '';
        $strincludes_ = '';
        $includes_ = '';
        $strbenefits_ = '';
        $benefits_ = '';
        $vareity_ = '';
        $strvareity = '';
        $duration_ = '';
        $time_ = '';
        $fee_ = '';
        $free_ = '';
        $discount_ = '';
        $button_ = '<button type="submit" class="btn btn-primary"> Submit </button>';
    }
?>
<div class="col-lg-12" id="newCat">
    <div class="panel panel-default" style="height:auto;overflow: auto">
        <div class="panel-heading"<?php if(isset($editservicedetail)){ echo " style='background: ".$backcolor."'"; }?>>
            <?php if(isset($editservicedetail)){ ?>
                <b>Update Service detail here...</b>
                <div style="float: right"><?php echo anchor('service/callpage/service/service','New'); ?></div>
            <?php } else { ?>
                <b>Feed Service detail here...</b>
            <?php } ?>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(isset($editservicedetail)){ ?>
                        <?php echo form_open_multipart('service/UpdateServiceDetail/'.$editservicedetail->SDEID, array('name' => 'frmUpdateService', 'id' => 'frmUpdateService', 'role' => 'form')); ?>
                    <?php } else { ?>
                        <?php echo form_open_multipart('service/createServiceDetail', array('name' => 'frmService', 'id' => 'frmService', 'role' => 'form')); ?>
                    <?php } ?>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Category</label>
                                <?php 
                                  $data = array(
                                      'name' => 'cmbServiceCategory',
                                      'id' => 'cmbServiceCategory',
                                      'class' => 'required form-control',
                                      'style' => 'width: 100%',
                                      'required' => 'required',
                                      'style' => 'width:100%; color: '.$color_
                                  );
                                  $options = array();
                                  $options[''] = "Select";
                                  foreach ($categories as $categitem) {
                                      $options[$categitem->CATEGID] = $categitem->CATEGORY;
                                  }
                                  echo form_dropdown($data, $options, $categ_);
                                ?>
                            </div>
                            <div class="col-sm-6">
                                <label>Service</label>
                                <?php if(isset($editservicedetail)){ ?>
                                  <select name="cmbService" id="cmbService" class="required form-control" style="width:100%; color:<?php echo $color_;?>" required="required">
                                      <option value="" selected="selected">Select</option>
                                      <?php foreach($services_ as $sitem){ ?>
                                        <?php if($sitem->SID == $sid) {?>
                                          <option value="<?php echo $sitem->SID; ?>" selected="selected"><?php echo $sitem->SERVICE; ?></option>
                                        <?php } else { ?>
                                          <option value="<?php echo $sitem->SID; ?>"><?php echo $sitem->SERVICE; ?></option>
                                        <?php } ?>
                                      <?php } ?>
                                  </select>
                                <?php } else { ?>
                                  <select name="cmbService" id="cmbService" class="required form-control" style="width:100%; color:<?php echo $color_;?>" required="required">
                                      <option value="">Select</option>
                                  </select>
                                <?php } ?>
                            </div>
                              <button style="display: none" id="service_click_modal_button" name="service_click_modal_button" type="button" class="btn btn-primary btn-lg" style="font-size: 16px; padding: 5px;" data-toggle="modal" data-target="#myModal">
                                New Sevrice
                              </button>
                        </div>
                        
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-2">
                          <label>Duration</label>
                          <?php
                          $data = array(
                              'type' => 'text',
                              'autocomplete' => 'off',
                              'required' => 'required',
                              'placeholder' => 'Duration of Service',
                              'class' => 'required form-control',
                              'name' => 'txtServiceDuration',
                              'id' => 'txtServiceDuration',
                              'value' => $duration_,
                              'style' => 'color: '.$color_
                          );
                          echo form_input($data);
                          ?>
                        </div>
                        <div class="col-sm-2">
                          <label>Time</label>
                          <?php
                          $data = array(
                              'type' => 'text',
                              'autocomplete' => 'off',
                              'required' => 'required',
                              'placeholder' => 'Time of Service',
                              'class' => 'required form-control',
                              'name' => 'txtServiceTime',
                              'id' => 'txtServiceTime',
                              'value' => $time_,
                              'style' => 'color: '.$color_
                          );
                          echo form_input($data);
                          ?>
                        </div>
                        <div class="col-sm-3">
                          <label>Fee</label>
                          <?php
                          $data = array(
                              'type' => 'text',
                              'autocomplete' => 'off',
                              'required' => 'required',
                              'placeholder' => 'Fee of Service',
                              'class' => 'required form-control',
                              'name' => 'txtServiceFee',
                              'id' => 'txtServiceFee',
                              'value' => $fee_,
                              'style' => 'color: '.$color_
                          );
                          echo form_input($data);
                          ?>
                        </div>
                        <div class="col-sm-3">
                          <label>Anything Free?</label>
                          <?php
                          $data = array(
                              'type' => 'text',
                              'autocomplete' => 'off',
                              'required' => 'required',
                              'placeholder' => 'Anything free',
                              'class' => 'required form-control',
                              'name' => 'txtServiceFree',
                              'id' => 'txtServiceFree',
                              'value' => $free_,
                              'style' => 'color: '.$color_
                          );
                          echo form_input($data);
                          ?>
                        </div>
                        <div class="col-sm-2">
                          <label>Any Discount?</label>
                          <?php
                          $data = array(
                              'type' => 'text',
                              'autocomplete' => 'off',
                              'required' => 'required',
                              'placeholder' => 'Time of Service',
                              'class' => 'required form-control',
                              'name' => 'txtServiceDiscount',
                              'id' => 'txtServiceDiscount',
                              'value' => $discount_,
                              'style' => 'color: '.$color_
                          );
                          echo form_input($data);
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                          <div class="col-sm-6">
                            <label>About Service</label>
                                  <?php 
                                    $about_ = explode("•",$about_);
                                    for($i=0; $i<count($about_);$i++){
                                      if(trim($about_[$i]) != ''){
                                        $strabout_ = $strabout_ . "• " . $about_[$i];
                                      }
                                    }
                                  ?>
                            <?php
                            $data = array(
                                'rows' => '10',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'placeholder' => 'About Service',
                                'class' => 'required form-control txtAboutService',
                                'name' => 'txtAboutService',
                                'id' => 'txtAboutService',
                                'value' => $strabout_,
                                'style' => 'color: '.$color_
                            );
                            echo form_textarea($data);
                            ?>
                          </div>
                          <div class="col-sm-6">
                            <label>Definition(s)</label>
                                  <?php 
                                    $define_ = explode("•",$define_);
                                    for($i=0; $i<count($define_);$i++){
                                      if(trim($define_[$i]) != ''){
                                        $strdefine_ = $strdefine_ . "• " . $define_[$i];
                                      }
                                    }
                                  ?>
                            <?php
                            $data = array(
                                'rows' => '10',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'placeholder' => 'Definition(s) here',
                                'class' => 'required form-control txtDefine',
                                'name' => 'txtDefine',
                                'id' => 'txtDefine',
                                'value' => $strdefine_,
                                'style' => 'color: '.$color_
                            );
                            echo form_textarea($data);
                            ?>
                          </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6">
                            <label>Service Includes</label>
                                  <?php 
                                    $includes_ = explode("•",$includes_);
                                    for($i=0; $i<count($includes_);$i++){
                                      if(trim($includes_[$i]) != ''){
                                        $strincludes_ = $strincludes_ . "• " . $includes_[$i];
                                      }
                                    }
                                  ?>
                                <?php
                            $data = array(
                                'rows' => '10',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'placeholder' => 'Service Includes',
                                'class' => 'required form-control txtIncludes',
                                'name' => 'txtIncludes',
                                'id' => 'txtIncludes',
                                'value' => $strincludes_,
                                'style' => 'color: '.$color_
                            );
                            echo form_textarea($data);
                            ?>
                          </div>
                        <div class="col-sm-6">
                          <label>Service Benefits</label>
                                  <?php 
                                    $benefits_ = explode("•",$benefits_);
                                    for($i=0; $i<count($benefits_);$i++){
                                      if(trim($benefits_[$i]) != ''){
                                        $strbenefits_ = $strbenefits_ . "• " . $benefits_[$i];
                                      }
                                    }
                                  ?>
                          <?php
                          $data = array(
                              'rows' => '10',
                              'autocomplete' => 'off',
                              'required' => 'required',
                              'placeholder' => 'Service Benefits',
                              'class' => 'required form-control txtBenefits',
                              'name' => 'txtBenefits',
                              'id' => 'txtBenefits',
                              'value' => $strbenefits_,
                              'style' => 'color: '.$color_
                          );
                          echo form_textarea($data);
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-12">
                          <label>Variety(s)</label>
                                  <?php 
                                    $vareity_ = explode("•",$vareity_);
                                    for($i=0; $i<count($vareity_);$i++){
                                      if(trim($vareity_[$i]) != ''){
                                        $strvareity = $strvareity . "• " . $vareity_[$i];
                                      }
                                    }
                                  ?>
                            <?php
                            $data = array(
                                'rows' => '10',
                                'autocomplete' => 'off',
                                'required' => 'required',
                                'placeholder' => 'Vareity',
                                'class' => 'required form-control txtVareity',
                                'name' => 'txtVareity',
                                'id' => 'txtVareity',
                                'value' => $strvareity,
                                'style' => 'color: '.$color_
                            );
                            echo form_textarea($data);
                            ?>
                        </div>
                      </div>
                    </div>

                    <?php echo $button_; ?>
                    <button type="reset" class="btn btn-flickr"> Reset </button>
                    <?php echo form_close(); ?>
                    <div style="color: #ff0000; font-weight: bold; font-style: italic; padding: 5px"><?php echo $this->session->flashdata('feed_msg_'); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="panel panel-default" style="height:auto;overflow: auto">
        <div class="panel-heading" style="background:#808080; color:#ffffff">
            <b>Existing Service Detail</b>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th>Categories</th>
                                <th>Servcies</th>
                                <th>About</th>
                                <th>Includes</th>                                               
                                <th>Action</th>
                                <!--th>Status</th-->
                            </tr>
                            <?php foreach($serviceDetail as $item){ ?>
                            <?php
                              $about = explode("•", $item->ABOUT);
                              $includes = explode("•", $item->INCLUDES);
                            ?>
                            <tr>
                                <td><?php echo ucwords(strtolower($item->CATEGORY)) ;?></td>
                                <td><?php echo ucwords(strtolower($item->SERVICE)) ;?></td>
                                <td>
                                  <ul>
                                  <?php for($i=0; $i<count($about);$i++){
                                    if(trim($about[$i]) != ''){
                                      echo "<li>" . $about[$i] . "</li>";
                                    }
                                  }
                                  ?>
                                  </ul>
                                </td>
                                <td>
                                  <ul>
                                  <?php for($i=0; $i<count($includes);$i++){
                                    if(trim($includes[$i]) != ''){
                                      echo "<li>" . $includes[$i] . "</li>";
                                    }
                                  }
                                  ?>
                                  </ul>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="<?php echo site_url('service/callpage/service/service/'.$item->SDEID); ?>"><i class="icon_pencil-edit">Edit</i></a>
                                        <a class="btn btn-danger" href="<?php echo site_url('service/deleteServcieDetail/'.$item->SDEID); ?>"><i class="icon_close_alt2">Del</i></a>
                                    </div>
                                </td>
                                <!--td>
                                    <div class="row m-bot15" style="padding: 5px 0px;">
                                        <div class="col-sm-6 text-center">
                                            <?php if($item->STATUS == 1){
                                                $data = array(
                                                    'type'=>'checkbox',
                                                    'data-toggle'=>'switch',
                                                    'value'=> $item->CATEGID,
                                                    'id'=>'grampchk_'.$item->CATEGID,
                                                    'checked'=>'checked'
                                                    );
                                                echo form_input($data);
                                            } else {
                                                $data = array(
                                                    'type'=>'checkbox',
                                                    'data-toggle'=>'switch',
                                                    'value'=> $item->CATEGID,
                                                    'id'=>'grampchk_'.$item->CATEGID,
                                                    );
                                                 echo form_input($data);
                                            } ?>
                                        </div>
                                    </div>
                                </td-->
                            </tr>
                            <?php } ?>                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

