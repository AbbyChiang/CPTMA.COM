<?php
	/**
	 * Configure tmsearch object
   * Copyright http://cptma.com
   * By Ray
	 */
	$tmsearch_obj_config = array
	(
      	'name' => array
		(
			'required' => false,
			'prefix' => '[Applicant Name]'
		),
      	'reg_no' => array
		(
			'required' => false,
			'prefix' => '[Registration Number]'
		),
		/**
		 * Configure keyword field
		 * The prefix is prepended to the inputting keyword
		 */
		'keyword' => array
		(
          	'visible' => true,
			'required' => true,
			'prefix' => '[Keyword Search]'
		),

		/**
		 * Configure ReCaptcha protection
		 * Requires an API v2 key pair to function
		 *
		 * @see https://developers.google.com/recaptcha
		 */
		'recaptcha' => array
		(
			'site_key' => '',
			'secret_key' => ''
		),

		/**
		 * Configure labels and messages
		 * Can be used to customize or translate items
		 */
		'translate' => array
		(
			'labels' => array
			(
				'name' => 'Applicant Name',
				'keyword' => 'Keyword',
				'reg_no' => 'Registration Number',
				'recaptcha' => 'ReCaptcha'
			),
			'errors' => array
			(
              	'code' => '0',
				'required' => '%s is required',
				'invalid' => '%s is invalid'
			),
			'messages' => array
			(
				'error' => 'We have encountered an unknown error, please try again.',
				'success' => 'The retrieval was successful and the result will be sent to your mailbox shortly.'
			)
		)
	);

	/**
	 * Load tmsearch class and its dependencies
	 * Create new class object with given configuration
	 */
	require __DIR__ . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'tmsearch-obj.php';
	$tmsearch_obj = new TMSearch_Obj($tmsearch_obj_config);

?>
