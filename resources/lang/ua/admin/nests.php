<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created '=>' Нове гніздо,: name, було успішно створено. ',
        'delete' => 'Успішно видалено запитане гніздо з панелі.',
        'updated' => 'Успішно оновлено параметри конфігурації гнізда.',
    ],
    'eggs' => [
        'notices' => [
            'import' => 'Успішно імпортовано це яйце та пов\'язані з ним змінами.',
            'updated_via_import' => 'Це оновлення оновлено за допомогою наданого файлу.',
            'delete' => 'Успішно видалено запитане яйце з панелі.',
            'updated' => 'Конфігурація яєць успішно оновлена.',
            'script_updated' => 'Сценарій встановлення створює оновлення та працює щоразу, коли встановлюються сервери.',
            'egg_created' => 'Нове яйце було успішно відкладено. Вам потрібно буде перезапустити всі запущені демоні, щоб скасувати це нове яйце. ',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Змінна ": variable" була видалена і більше не буде доступна для серверів після перебудови.',
            'variable_updated' => 'Змінна ": змінна" оновлена. Вам потрібно буде відновити будь-які сервери, що використовують цю змінну, щоб застосувати зміни. ',
            'variable_created' => 'Нову змінну успішно створено та призначено цьому яйцю.',
        ],
    ],
];