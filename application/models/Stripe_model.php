<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Stripe_model extends CI_Model {

    function __construct() {
        parent::__construct();

        $this->load->library('stripegateway');
    }

    public function pay($invoice_id = '') {

       
    }

}
