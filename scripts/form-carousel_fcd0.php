<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Reservas WEB',
    'email_message' => 'Recibiste una nueva reserva.',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'reservasweb@refugiodeglaciares.com',
    'to' => 'info@refugiodeglaciares.com'
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>