<div class="row">
    <?php echo form_open(site_url('admin/manage_online_exam/create') , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
        <div class="col-md-6">
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
        
    </form>
</div>

<script type="text/javascript">
	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo site_url('admin/get_class_section_selector/');?>' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

        get_class_subject(class_id);
    }

    function get_class_subject(class_id) {

    	$.ajax({
            url: '<?php echo site_url('admin/get_class_subject_selector/');?>' + class_id ,
            success: function(response)
            {
                jQuery('#subject_selector_holder').html(response);
            }
        });
    }

</script>
