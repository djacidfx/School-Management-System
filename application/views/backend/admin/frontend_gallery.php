<ul class="nav nav-tabs bordered">
	<li class="active">
		<a href="#tab1" data-toggle="tab">
			<span class="visible-xs"><i class="entypo-home"></i></span>
			<span class="hidden-xs"><?php echo get_phrase('gallery_list'); ?></span>
		</a>
	</li>
	<li class="">
		<a href="#tab2" data-toggle="tab">
			<span class="visible-xs"><i class="entypo-plus"></i></span>
			<span class="hidden-xs"><?php echo get_phrase('add_gallery'); ?></span>
		</a>
	</li>
</ul>

<div class="tab-content">
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

<script type="text/javascript">

	jQuery(document).ready(function($) {

		var datatable = $("#table_export").dataTable();
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});

	});

</script>
