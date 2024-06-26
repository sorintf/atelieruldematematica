<?php
require_once 'config/dev-config.php';
require 'mailjet/vendor/autoload.php';


use \Mailjet\Resources;

$mode = $action = $email = $name = $subject = $message = $link_activare_cont = $link_resetare_parola = $platform_name = $date = "";
if (isset($_POST['mode'])) {
    $mode = trim(htmlspecialchars($_POST['mode']));
}
if (isset($_POST['action'])) {
    $action = trim(htmlspecialchars($_POST['action']));
}
if (isset($_POST['email'])) {
    $email = trim(htmlspecialchars($_POST['email']));
}
if (isset($_POST['name'])) {
    $name = trim(htmlspecialchars($_POST['name']));
}
if (isset($_POST['subject'])) {
    $subject = trim(htmlspecialchars($_POST['subject']));
}
if (isset($_POST['message'])) {
    $message = trim(htmlspecialchars($_POST['message']));
}
if (isset($_POST['link_activare_cont'])) {
    $link_activare_cont = trim(htmlspecialchars($_POST['link_activare_cont']));
}
if (isset($_POST['link_resetare_parola'])) {
    $link_resetare_parola = trim(htmlspecialchars($_POST['link_resetare_parola']));
}
if (isset($_POST['platform_name'])) {
    $platform_name = trim(htmlspecialchars($_POST['platform_name']));
}
if (isset($_POST['date'])) {
    $date = trim(htmlspecialchars($_POST['date']));
}

$response = new stdClass;

$responseArr = array('success'=>false, 'message'=>"Init", 'mode'=>$mode, 'action'=>$action, 'email'=>$email, 'name'=>$name, 'subject'=>$subject, 'message'=>$message, 'link_activare_cont'=>$link_activare_cont, 'link_resetare_parola'=>$link_resetare_parola, 'platform_name'=>$platform_name, 'date'=>$date, 'responsedata'=>'');

switch ($mode) {
    case 'sendRegisterFormEmail':
        $mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "software@twoandfrom.com",
                        'Name' => "Software"
                    ],
                    'To' => [
                        [
                            'Email' => $email,
                            'Name' => $name
                        ]
                    ],
                    'TemplateID' => 5276705,
                    'TemplateLanguage' => true,
                    'Subject' => $subject, 
                    'Variables' => [
                        'mj_confirmation_link' => $link_activare_cont, 
                        'mj_name' => $name, 
                        'mj_platform_name' => $platform_name
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        if ($response->success()) {
            #$_SESSION['msg_success'][] = 'Emailul a fost trimis';
            $responseArr['success'] = true;
        }else {
            #$_SESSION['msg_errors'][] = 'Eroare la trimiterea emailului de confirmare.';
        }
        break;        
    
    case 'sendAccountActivated':
        $mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "software@twoandfrom.com",
                        'Name' => "Software"
                    ],
                    'To' => [
                        [
                            'Email' => $email,
                            'Name' => $name
                        ]
                    ],
                    'TemplateID' => 5276981,
                    'TemplateLanguage' => true,
                    'Subject' => $subject, 
                    'Variables' => [
                        'mj_login_link' => $link_activare_cont, 
                        'mj_name' => $name, 
                        'mj_platform_name' => $platform_name
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        if ($response->success()) {
            #$_SESSION['msg_success'][] = 'Emailul a fost trimis';
            $responseArr['success'] = true;
        }else {
            #$_SESSION['msg_errors'][] = 'Eroare la trimiterea emailului de confirmare.';
        }
        break;        

    case 'sendResetPasswordEmail':
        $mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "software@twoandfrom.com",
                        'Name' => "Software"
                    ],
                    'To' => [
                        [
                            'Email' => $email,
                            'Name' => $name
                        ]
                    ],
                    'TemplateID' => 5285913,
                    'TemplateLanguage' => true,
                    'Subject' => $subject, 
                    'Variables' => [
                        'mj_resetpass_link' => $link_activare_cont, 
                        'mj_name' => $name, 
                        'mj_platform_name' => $platform_name
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        if ($response->success()) {
            #$_SESSION['msg_success'][] = 'Emailul a fost trimis';
            $responseArr['success'] = true;
        }else {
            #$_SESSION['msg_errors'][] = 'Eroare la trimiterea emailului de confirmare.';
        }
        break;        

    case 'sendSub':
        $mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE, true, ['version' => 'v3']);
        $body = [
            'Name' => $name,
            'Properties' => "object",
            'Action' => $action,
            'Email' => $email
        ];
        $response = $mj->post(Resources::$ContactslistManagecontact, ['id' => MJ_MANAGE_CONTACT, 'body' => $body]);
        if ($response->success()) {
            #$_SESSION['msg_success'][] = 'Emailul a fost trimis';
            $responseArr['success'] = true;
        }else {
            #$_SESSION['msg_errors'][] = 'Eroare la trimiterea emailului de confirmare.';
        }
        break;        

    case 'sendRecoverAccountEmail':
        $mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "software@twoandfrom.com",
                        'Name' => "Software"
                    ],
                    'To' => [
                        [
                            'Email' => $email,
                            'Name' => $name
                        ]
                    ],
                    'TemplateID' => 5290976,
                    'TemplateLanguage' => true,
                    'Subject' => $subject, 
                    'Variables' => [
                        'mj_recovery_link' => $link_activare_cont, 
                        'mj_valid_before' => $date,
                        'mj_name' => $name, 
                        'mj_platform_name' => $platform_name
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $responseArr['message'] = serialize($response->getData());
        if ($response->success()) {
            #$_SESSION['msg_success'][] = 'Emailul a fost trimis';
            $responseArr['success'] = true;
        }else {
            #$_SESSION['msg_errors'][] = 'Eroare la trimiterea emailului de confirmare.';
        }
        break;        
    
    case 'sendTest':
        $mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE, true, ['version' => 'v3.1']);
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "software@twoandfrom.com",
                        'Name' => "Software"
                    ],
                    'To' => [
                        [
                            'Email' => 'remus.f.rotaru@gmail.com',
                            // 'Email' => 'remus.rotaru@caroli.ro',
                            'Name' => 'Remus Rotaru'
                            // 'Email' => 'sorinionut.dan@gmail.com',
                            // 'Name' => 'Sorin Dan'
                        ]
                    ],
                    'Subject' => 'Formular Contact Caroli Foods Group',
                    'TextPart' => 'Asta este un mesaj nou de tip text. Sper ca asta era problema',
                    'HTMLPart' => '<h3>Titlu in mesaj de tip HTML</h3><br /><p>Paragraf in mesaj de tip HTML</p>'
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        if ($response->success()) {
            #$_SESSION['msg_success'][] = 'Emailul a fost trimis';
            $responseArr['success'] = true;
        }else {
            #$_SESSION['msg_errors'][] = 'Eroare la trimiterea emailului de confirmare.';
        }
        break;  
    
    default:
        $responseArr['message'] = 'Altceva';
        break;
}

// if ($response->success()) {
    #$_SESSION['msg_success'][] = 'Emailul a fost trimis';
    // $responseArr['success'] = true;
// }else {
    #$_SESSION['msg_errors'][] = 'Eroare la trimiterea emailului de confirmare.';
// }

$responseArr['responsedata'] = serialize($response->getData());

echo json_encode($responseArr);