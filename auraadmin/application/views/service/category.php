<?php
    if(isset($editcategory)){
        $backcolor = "#FF8800";
        $color_ = "#FF8800";
        $categ_ = $editcategory->CATEGORY;
        $desc_ = $editcategory->DESC_;
        $button_ = '<button type="submit" class="btn btn-danger"> Update </button>';
    } else {
        $backcolor = "#f0f0f0";
        $color_ = "#000000";
        $categ_ = '';
        $desc_ = '';
        $button_ = '<button type="submit" class="btn btn-primary"> Submit </button>';
    }
?>
<div class="col-lg-6" id="newCat">
    <div class="panel panel-default" style="height:305px;overflow: auto">
        <div class="panel-heading"<?php if(isset($editcategory)){ echo " style='background: ".$backcolor."'"; }?>>
            <?php if(isset($editcategory)){ ?>
                <b>Update Category for Services here...</b>
                <div style="float: right"><?php echo anchor('service/callpage/service/category','New'); ?></div>
            <?php } else { ?>
                <b>Feed Category for Services here...</b>
            <?php } ?>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(isset($editcategory)){ ?>
                        <?php echo form_open('service/UpdateCategory/'.$editcategory->CATEGID, array('name' => 'frmUpdateServiceCategory', 'id' => 'frmUpdateServiceCategory', 'role' => 'form')); ?>
                    <?php } else { ?>
                        <?php echo form_open('service/createCategory', array('name' => 'frmServiceCategory', 'id' => 'frmServiceCategory', 'role' => 'form')); ?>
                    <?php } ?>
                    <div class="form-group">
                        <label>Category</label>
                        <?php
                        $data = array(
                            'type' => 'text',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'placeholder' => 'Title for Category',
                            'class' => 'required form-control',
                            'name' => 'txtServiceCategory',
                            'id' => 'txtServiceCategory',
                            'value' => $categ_,
                            'style' => 'color: '.$color_
                        );
                        echo form_input($data);
                        ?>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <?php
                        $data = array(
                            'rows' => '3',
                            'autocomplete' => 'off',
                            'required' => 'required',
                            'placeholder' => 'Category Description',
                            'class' => 'required form-control',
                            'name' => 'txtDesc',
                            'id' => 'txtDesc',
                            'value' => $desc_,
                            'style' => 'color: '.$color_
                        );
                        echo form_textarea($data);
                        ?>
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
<div class="col-lg-6">
    <div class="panel panel-default" style="height:305px;overflow: auto">
        <div class="panel-heading" style="background:#808080; color:#ffffff">
            <b>Existing Categories</b>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-striped table-advance table-hover">
                        <tbody>
                            <tr>
                                <th>Name</th>                                                
                                <th>Action</th>
                                <!--th>Status</th-->
                            </tr>
                            <?php foreach($categories as $item){ ?>
                            <tr>
                                <td><?php echo ucwords(strtolower($item->CATEGORY)) ;?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="<?php echo site_url('service/callpage/service/category/'.$item->CATEGID); ?>"><i class="icon_pencil-edit">Edit</i></a>
                                        <a class="btn btn-danger" href="<?php echo site_url('service/deleteCategory/'.$item->CATEGID); ?>"><i class="icon_close_alt2">Del</i></a>
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