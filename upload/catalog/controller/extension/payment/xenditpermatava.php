<?php

class ControllerExtensionPaymentXenditPermataVA extends Controller {
    public function index() {
        $this->load->language('extension/payment/xendit');

        $data['environment'] = $this->config->get('payment_xendit_environment');
        $data['text_instructions'] = $this->language->get('text_instructions');
        $data['text_test_instructions'] = $this->language->get('text_test_instructions');
        $data['invoice_hash'] = 'permata';

        return $this->load->view('extension/payment/xendit', $data);
    }
}