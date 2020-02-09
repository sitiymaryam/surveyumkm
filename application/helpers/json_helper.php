<?php
defined("BASEPATH") OR exit("No direct script access allowed");

function response($response) {
	$ci =& get_instance();
	$ci->output->set_content_type("application/json");
	$ci->output->set_status_header(200);
	$ci->output->set_output(json_encode($response));
}

function successWithData($input) {
	$meta = array(
		'code' => 200,
		'message' => 'Success',
		'error' => false
	);
	$data = $input;
	$response = array(
		"meta" => $meta,
		"data" => $data
	);
	
	response($response);
}

function successWithMetaData($meta_input, $data_input) {
	$response = array(
		"meta" => $meta_input,
		"data" => $data_input
	);
	
	response($response);
}

function successWithoutData($msg) {
	$meta = array(
		'code' => 200,
		'message' => $msg,
		'error' => false
	);
	$response = array(
		"meta" => $meta,
	);
	
	response($response);
}

function errorVerifyEmail() {
	$meta = array(
		'code' => 204,
		'message' => 'Please Verify Your Email',
		'error' => true
	);
	$response = array(
		"meta" => $meta
	);
	
	response($response);
}

function errorAccountSuspended() {
	$meta = array(
		'code' => 205,
		'message' => 'Your Account Has Ben Suspended',
		'error' => true
	);
	$response = array(
		"meta" => $meta
	);
	
	response($response);
}

function errorSomething() {
	$meta = array(
		'code' => 400,
		'message' => 'Something Error',
		'error' => true
	);
	$response = array(
		"meta" => $meta
	);
	
	response($response);
}

function errorCredentials() {
	$meta = array(
		'code' => 206,
		'message' => 'Invalid Credentials',
		'error' => false
	);
	$response = array(
		"meta" => $meta
	);
	
	response($response);
}

function errorCustom($code, $msg) {
	$meta = array(
		'code' => $code,
		'message' => $msg,
		'error' => true
	);
	$response = array(
		"meta" => $meta
	);
	
	response($response);
}