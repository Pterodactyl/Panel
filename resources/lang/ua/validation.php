і<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accept' => 'Атрибут: повинен бути прийнятий.',
    'active_url' => 'Атрибут: не є допустимою URL-адресою.',
    'after' => 'Атрибут: повинен бути датою після: date.',
    'after_or_equal' => 'Атрибут: повинен бути датою після або рівною: date.',
    'alpha' => 'Атрибут: може містити лише літери.',
    'alpha_dash' => 'Атрибут: може містити лише літери, цифри та тире.',
    'alpha_num' => 'Атрибут: може містити лише літери та цифри.',
    'array' => 'Атрибут: атрибут повинен бути масивом.',
    'before' => 'Атрибут: повинен бути датою до: date.',
    'before_or_equal' => 'Атрибут: повинен бути датою до або дорівнювати: date.',
    'between' => [
        'numeric' => 'Атрибут: повинен бути між: min та: max.',
        'file' => 'Атрибут: повинен бути між: min та: max kilobytes.',
        'string' => 'Атрибут: повинен бути між: min та: max символів.',
        'array' => 'Атрибут: атрибут повинен містити між: min та: max items.',
    ],
    'boolean' => 'Поле: attribute має бути істинним або хибним.',
    'confirm' => 'Підтвердження атрибута не збігається.',
    'date' => 'Атрибут: не є допустимою датою.',
    'date_format' => 'Атрибут: не відповідає формату: format.',
    'different' => 'Атрибути: і attribute повинні бути різними.',
    'digits' => 'Атрибут: повинен мати: цифри цифр.',
    'digits_between' => 'Атрибут: повинен бути між: min та: max digits.',
    'sizes' => 'Атрибут: має недійсні розміри зображення.',
    'distinct' => 'Поле: attribute має повторюване значення.',
    'email' => 'Атрибут: повинен бути дійсною адресою електронної пошти.',
    'exists' =>  'Вибраний: атрибут недійсний.',
    'file' => 'Атрибут: повинен бути файлом.',
    'fill' => 'Поле: attribute обов\'язкове.',
    'image' => 'Атрибут: атрибут повинен бути зображенням.',
    'in' => 'Вибраний: атрибут недійсний.',
    'in_array' => 'Поле: attribute не існує в: other.',
    'integer' => 'Атрибут: має бути цілим числом.',
    'ip' => 'Атрибут: повинен бути дійсною IP-адресою.',
    'json' => 'Атрибут: повинен бути дійсним рядком JSON.',
    'max' => [
        'numeric' => 'Атрибут: не може бути більшим за: макс.',
        'file' => 'Атрибут: не може бути більшим за: максимум кілобайт.',
        'string' => 'Атрибут: не може бути більшим за: максимум символів.',
        'array' => 'В атрибуті: не може бути більше: макс. елементів.',
    ],
     'mimes' => 'Атрибут: повинен бути файлом типу:: values.',
    'mimetypes' => 'Атрибут: повинен бути файлом типу:: values.',
    'min' => [
         'numeric' => 'Атрибут: атрибут повинен бути принаймні: хв.',
        'file' => 'Атрибут: атрибут: повинен бути не менше: хв кілобайт.',
        'string' => 'Атрибут: атрибут повинен мати принаймні: мінімум символів.',
        'array' => 'Атрибут: атрибут повинен мати принаймні: мінімум елементів.',
    ],
     'not_in' => 'Вибраний: атрибут недійсний.',
    'numeric' => 'Атрибут: атрибут повинен бути числом.',
    'present' => 'Поле: attribute повинно бути присутнім.',
    'regex' => 'Формат атрибута: недійсний.',
    'required' => 'Поле: attribute є обов\'язковим.',
    'required_if' => 'Поле: attribute є обов\'язковим, коли: other is: value.',
    'required_unless' => 'Поле: attribute обов\'язкове, якщо: other не знаходиться в: values.',
    'required_with' => 'Поле: attribute є обов\'язковим, коли присутній: values.',
    'required_with_all' => 'Поле: attribute є обов\'язковим, коли присутній: values.',
    'required_without' => 'Поле: attribute обов\'язкове, коли: значень немає.',
    'required_without_all' => 'Поле: attribute є обов\'язковим, коли немає жодного з: значень.',
    'same' => 'Атрибут: і атрибут: other повинні збігатися.',
    'size' => [
         'numeric' => 'Атрибут: повинен бути: size.',
        'file' => 'Атрибут: повинен бути: розмір кілобайт.',
        'string' => 'Атрибут: повинен бути: розмір символів.',
        'array' => 'Атрибут: повинен містити елементи розміру.',
    ],
     'string' => 'Атрибут: атрибут повинен бути рядком.',
    'timezone' => 'Атрибут: атрибут повинен бути дійсним поясом.',
    'unique' => 'Атрибут: атрибут уже взятий.',
    'uploaded' => 'Не вдалося завантажити атрибут:',
    'url' => 'Формат атрибута: недійсний.',


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

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => ': змінна env',
        'invalid_password' => 'Введений пароль був недійсним для цього облікового запису.',
    ],
];