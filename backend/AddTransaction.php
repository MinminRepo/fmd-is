<?php

/** extract the form data */
$__form_data = $_POST;
print_r ($__form_data);

/** assign to local variables to get ready for querying */
$__request_type = $__form_data['type']['id'];       // the request type in coded form
$__request_office = $__form_data['office']['id'];   // the requesting office in coded form
$__request_title = $__form_data['titleSubject'];    // the title or subject of the request
$__request_amount = (float) $__form_data['amount']; // the amount requested in PHP
$__request_status = $__form_data['initialStatus']['id']; // the status of the request as selected
$__request_hwi = $__form_data['hwi'];               // the hand-written instruction, if any

// echo $__request_type . "\n";
// echo $__request_office . "\n";
// echo $__request_title . "\n";
// echo $__request_amount . "\n";
// echo $__request_status . "\n";
// echo $__request_hwi . "\n";

/** commence insert */
$__request_sql = "INSERT INTO ";




exit ();