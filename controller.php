<?php 

    $filter_rules = [
        'name'      => FILTER_SANITIZE_STRING,
        'email'     => FILTER_VALIDATE_EMAIL,
        'phone'     => FILTER_SANITIZE_STRING
    ];
    
    $validation = [
        'name' =>[
            'is_null'   => 'Preencha o campo <b>nome</b>!',
            'is_false'  => 'O Campo <b>nome</b> não é valido!'
        ],
        'email' =>[
            'is_null'   => 'Preencha o campo <b>e-mail</b>!',
            'is_false'  => 'O Campo <b>e-mail</b> não é valido!'
        ],
        'phone' =>[
            'is_null'   => 'Preencha o campo <b>Telefone</b>!',
            'is_false'  => 'O Campo <b>Telefone</b> não é valido!'
        ]
    ];

    $data = filter_input_array(INPUT_POST, $filter_rules);

    foreach ($data as $field => $value){
        if(empty($validation[$field])){
            continue;
        }
        if($value == null or $value == ''){
            echo json_encode(["status"=>false,"msg"=> $validation[$field]['is_null'] ]); exit;
        } elseif($value === false){
            echo json_encode(["status"=>false,"msg"=> $validation[$field]['is_false'] ]); exit;
        }
    }

    