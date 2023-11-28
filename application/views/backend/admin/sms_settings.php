<?php
	$active_sms_service = $this->db->get_where('settings' , array(
		'type' => 'active_sms_service'
	))->row()->description;
?>
<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary">
		    <div class="panel-heading">
		        <h3 class="panel-title"><?php echo get_phrase('setup_sms_information') ?></h3>
		    </div>
		    <div class="panel-body">

		    			<div class="tabs-vertical-env">

					<ul class="nav tabs-vertical">
					<li class="active"><a href="#b-profile" data-toggle="tab">Select A SMS Service</a></li>
						<li>
							<a href="#v-home" data-toggle="tab">
								Clickatell Settings
								<?php if ($active_sms_service == 'clickatell'):?>
									<span class="badge badge-success"><?php echo get_phrase('active');?></span>
								<?php endif;?>
							</a>
						</li>
						<li>
							<a href="#v-profile" data-toggle="tab">
								Twilio Settings
								<?php if ($active_sms_service == 'twilio'):?>
									<span class="badge badge-success"><?php echo get_phrase('active');?></span>
								<?php endif;?>
							</a>
						</li>
						<li>
							<a href="#v-msg91-profile" data-toggle="tab">
								MSG91 Settings
								<?php if ($active_sms_service == 'msg91'):?>
									<span class="badge badge-success"><?php echo get_phrase('active');?></span>
								<?php endif;?>
							</a>
						</li>
					</ul>

					<div class="tab-content">

						<div class="tab-pane active" id="b-profile">

							<?php echo form_open(site_url('admin/sms_settings/active_service') ,
								array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>

							<div class="form-group">
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
							
			            <?php echo form_close();?>
						</div>

						<div class="tab-pane" id="v-home">
						<div class="panel panel-primary" data-collapsed="0">
							<div class="panel-heading">
								<div class="panel-title" >
									<a href="https://www.piecex.com/eng/source-code/School-Management-System-6250">
									<i class="entypo-plus-circled">DOWNLOAD FULL PROJECT WITH ALL FEATURES HERE</i>
									</a>
								</div>
							</div>
							
						</div>
			                <?php echo form_close();?>
						</div>
						<div class="tab-pane" id="v-profile">
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
						<!-- MSG91 settings -->
						<div class="tab-pane" id="v-msg91-profile">
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

				</div>


		    </div>
		</div>

		
	</div>
</div>
