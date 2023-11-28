
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo get_phrase('setup_payment_information') ?></h3>
                </div>

                <div class="panel-body">

                    <!-- vertical tabs -->
                    <div class="tabs-vertical-env">

                        <ul class="nav tabs-vertical"><!-- available classes "right-aligned" -->
                            <li class="active"><a href="#tab1" data-toggle="tab">PayPal</a></li>
                            <li class=""><a href="#tab2" data-toggle="tab">Stripe</a></li>
                           <li  class=""><a href="#tab3" data-toggle="tab">PayUMoney</a></li>
<!--                            <li><a href="#tab4" data-toggle="tab">PayTM</a></li>-->
                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane active" id="tab1">
                            <?php
                                $paypal_settings = get_settings('paypal');
                                $paypal = json_decode($paypal_settings);
                            ?>
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

                            <div class="tab-pane" id="tab2">
                            <?php
                                $stripe_settings = get_settings('stripe_keys');
                                $stripe = json_decode($stripe_settings);
                            ?>
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

                           <div class="tab-pane" id="tab3">
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
<!---->
<!--                            <div class="tab-pane" id="tab4">-->
<!--                                -->
<!--                            </div>-->
                        </div>

                    </div>
                    <!-- vertical tabs -->

                </div>
            </div>
        </div>
    </div>
</div>
