<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => 'mrsagi08@gmail.com'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'email\' is required.'
    )
    ),
    'text' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'text',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'text\' is required.'
    )
    ),
    'DELIVERY ADDRESS' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'DELIVERY ADDRESS',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'DELIVERY ADDRESS\' is required.'
    )
    ),
    'STATE' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'STATE',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'STATE\' is required.'
    )
    ),
    'phone' => array(
    'order' => 6,
    'type' => 'tel',
    'label' => 'phone',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'phone\' is required.'
    )
    ),
    '1.000 SET &#x3D; #34,499                                                                                                                                                                                                                                                                                                                                                                       ' => array(
    'order' => 7,
    'type' => 'string',
    'label' => '1.000 SET &#x3D; #34,499                                                                                                                                                                                                                                                                                                                                                                       ',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'1.000 SET &#x3D; #34,499                                                                                                                                                                                                                                                                                                                                                                       \' is required.'
    )
    ),
    'SUBMIT' => array(
    'order' => 8,
    'type' => 'checkbox',
    'label' => 'SUBMIT',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'SUBMIT\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>