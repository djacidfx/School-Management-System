<?php
  $slider_images_json = $this->db->get_where('frontend_general_settings', array(
    'type' => 'slider_images'
  ))->row()->description;
  $slider_images = json_decode($slider_images_json);
?>

<ul class="nav nav-tabs bordered">
  <li class="active">
    <a href="#tab1" data-toggle="tab">
      <span class="visible-xs"><i class="entypo-home"></i></span>
      <span class="hidden-xs"><?php echo get_phrase('homepage_slider_settings'); ?></span>
    </a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="tab1" style="margin-top: 20px;">

  <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title" >
                        <a href="https://www.piecex.com/eng/source-code/School-Management-System-6250">
                        <i class="entypo-plus-circled">DOWNLOAD FULL PROJECT WITH ALL FEATURES HERE</i>
                        </a>
                    </div>
                </div>
                
            </div>


  </div>
</div>


    