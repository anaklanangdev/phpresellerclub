<?php

require_once __DIR__ . '/../core/Core.php';

class Billing extends Core {
  public function getCustomerPricing($customerId) {

  }

  public function getResellerPricing($resellerId) {

  }

  public function getResellerCostPricing($resellerId) {

  }

  public function getCustomerTransactionDetails($transactionIds) {
    // Handle array and string
  }

  public function getResellerTransactionDetails($transactionIds) {

  }

  public function payTransactions($invoiceIds, $debitIds) {

  }

  public function cancelInvoiceDebitNote($invoiceIds, $debitIds) {

  }

  public function getCustomerBalance($customerId) {

  }

  public function executeOrderWithoutPayment($invoiceIds, $cancelInvoice = FALSE) {
    
  }

  public function searchCustomerTransaction($options, $page = 1, $count = 10) {

  }

  public function searchResellerTransaction($options, $page = 1, $count = 10) {

  }

  public function getResellerBalance($resellerId) {
    
  }

  public function discountInvoice($invoiceId, $discount, $transactionKey, $role) {
    
  }

  public function addFundsCustomer($customerId, $options) {

  }

  public function addFundsReseller($resellerId, $options) {
    
  }

  public function addDebitNoteCustomer($customerId, $options) {

  }

  public function addDebitNoteReseller($customerId, $options) {
    
  }

  public function suspendOrder($orderId, $reason) {

  }

  public function unsuspendOrder($orderId, $reason) {

  }

  public function getCurrentActions($options, $page = 1, $count = 10) {

  }

  public function getArchiveActions($options, $page = 1, $count = 10) {

  }

  public function getLegalAggrement($type) {

  }

  public function getAllowedPaymentGatewayCustomer($customerId = NULL, $paymentType) {
    // handle both API calls
  }

  public function getAllowedPaymentGatewayReseller() {

  }

  public function getCurrencyDetails() {

  }

  public function getCountryList() {

  }

  public function getStateList($countryCode) {
    
  }
}