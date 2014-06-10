<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    "accepted"         => "O campo :attribute deve ser aceito.",
    "active_url"       => "O campo :attribute não contém um URL válido.",
    "after"            => "O campo :attribute deverá conter uma data posterior a :date.",
    "alpha"            => "O campo :attribute deverá conter apenas letras.",
    "alpha_dash"       => "O campo :attribute deverá conter apenas letras, números e traços.",
    "alpha_num"        => "O campo :attribute deverá conter apenas letras e números .",
    "array"            => "O campo :attribute precisa ser um conjunto.",
    "before"           => "O campo :attribute deverá conter uma data anterior a :date.",
    "between"          => array(
        "numeric" => "O campo :attribute deverá ter um valor entre :min - :max.",
        "file"    => "O campo :attribute deverá ter um tamanho entre :min - :max kilobytes.",
        "string"  => "O campo :attribute deverá conter entre :min - :max caracteres.",
        "array"   => "O campo :attribute precisar ter entre :min - :max itens."
    ),
    "boolean"          => "The :attribute field must be true or false",
    "confirmed"        => "A confirmação para o campo :attribute não coincide.",
    "date"             => "O campo :attribute não contém uma data válida.",
    "date_format"      => "A data indicada para o campo :attribute não respeita o formato :format.",
    "different"        => "Os campos :attribute e :other deverão conter valores diferentes.",
    "digits"           => "O campo :attribute deverá conter :digits dígitos.",
    "digits_between"   => "O campo :attribute deverá conter entre :min a :max dígitos.",
    "email"            => "O campo :attribute não contém um endereço de email válido.",
    "exists"           => "O valor selecionado para o campo :attribute é inválido.",
    "image"            => "O campo :attribute deverá conter uma imagem.",
    "in"               => "O campo :attribute não contém um valor válido.",
    "integer"          => "O campo :attribute deverá conter um número inteiro.",
    "ip"               => "O campo :attribute deverá conter um IP válido.",
    "max"              => array(
        "numeric" => "O campo :attribute não deverá conter um valor superior a :max.",
        "file"    => "O campo :attribute não deverá ter um tamanho superior a :max kilobytes.",
        "string"  => "O campo :attribute não deverá conter mais de :max caracteres.",
        "array"   => "O campo :attribute deve ter no máximo :max itens."
    ),
    "mimes"            => "O campo :attribute deverá conter um arquivo do tipo: :values.",
    "min"              => array(
        "numeric" => "O campo :attribute deverá ter um valor superior ou igual a :min.",
        "file"    => "O campo :attribute deverá ter no mínimo :min kilobytes.",
        "string"  => "O campo :attribute deverá conter no mínimo :min caracteres.",
        "array"   => "O campo :attribute deve ter no mínimo :min itens."
    ),
    "not_in"           => "O campo :attribute contém um valor inválido.",
    "numeric"          => "O campo :attribute deverá conter um valor numérico.",
    "regex"            => "O formato do valor para o campo :attribute é inválido.",
    "required"         => "É obrigatória a indicação de um valor para o campo :attribute.",
    "required_if"      => "É obrigatória a indicação de um valor para o campo :attribute quando o valor do campo :other é igual a :value.",
    "required_with"    => "É obrigatória a indicação de um valor para o campo :attribute quando :values está presente.",
    "required_with_all" => "The :attribute field is required when :values is present.",
    "required_without" => "É obrigatória a indicação de um valor para o campo :attribute quanto :values não está presente.",
    "required_without_all" => "É obrigatória a indicação de um valor para o campo :attribute quando nenhum dos :values está presente.",
    "same"             => "Os campos :attribute e :other deverão conter valores iguais.",
    "size"             => array(
        "numeric" => "O campo :attribute deverá conter o valor :size.",
        "file"    => "O campo :attribute deverá ter o tamanho de :size kilobytes.",
        "string"  => "O campo :attribute deverá conter :size caracteres.",
        "array"   => "O campo :attribute deve ter :size itens."
    ),
    "unique"           => "O valor indicado para o campo :attribute já se encontra registado.",
    "url"              => "O formato do URL indicado para o campo :attribute é inválido.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'attribute-name' => array(
            'rule-name' => 'custom-message',
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => array(),

);
