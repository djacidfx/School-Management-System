<ul class="nav nav-tabs bordered">
  <li class="active">
    <a href="#tab1" data-toggle="tab">
      <span class="visible-xs"><i class="entypo-home"></i></span>
      <span class="hidden-xs"><?php echo get_phrase('about_us'); ?></span>
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


    

<script type="text/javascript">

  $('#submit_button').on('click', function() {
    var value = $('#sample_wysiwyg').val();
    $('#about_us').val(value);
    $('#jq-submit').submit();
  });

</script>
