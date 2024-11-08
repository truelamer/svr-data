<?php

return [
    'companies' => 'Организации',
    'company_id' => 'id компании',
    'company_base_index' => 'базовый индекс компании',
    'company_guid_vetis' => 'Уникальный номер поднадзорного объекта, который есть в ВЕТИС',
    'company_guid' => 'GUID СВР',
    'company_name_short' => 'Название хозяйства - короткое',
    'company_name_full' => 'Название хозяйства - полное',
    'company_address' => 'Адрес хозяйства',
    'company_inn' => 'ИНН - индивидуальный налоговый номер',
    'company_kpp' => 'КПП - код причины постановки на учет',
    'company_date_update_objects' => 'Дата последнего обновления поднадзорных объектов компании',
    'company_status_horriot' => 'Статус первоначального нахождения данных о хозяйстве в хорриот',
    'company_status' => 'Статус записи (enabled - активна/disabled - не активна)',
    'company_status_delete' => 'Статус псевдо-удаленности записи (active - не удалена/deleted - удалена)',
    'company_created_at' => 'Дата и время создания',
    'update_at' => 'дата последнего изменения строки записи',
    'modal_company_objects' => 'Список ПО',
    'modal_company_locations' => 'Список локаций компании',
    'link_company_objects' => 'Список в новом окне',

    'companies_objects' => 'Поднадзорные объекты',
    'company_object_id' => 'Инкремент',
    'company_object_guid_self' => 'GUID объекта',
    'company_object_guid_horriot' => 'GUID объекта в хорриот',
    'company_object_approval_number' => 'Номер',
    'company_object_address_view' => 'Адрес',
    'company_object_is_favorite' => 'Избранный ПО',
    'company_object_created_at' => 'Дата создания записи',

    'companies_locations' => 'Локации компаний',
    'company_location_id' => 'Инкремент',
    'region_id' => 'ID региона из справочника',
    'district_id' => 'ID района из справочника',
    'location_status' => 'Статус записи (активна/не активна)',
    'location_status_delete' => 'Статус псевдо-удаленности записи (активна - не удалена/не активна - удалена)',
    'location_created_at' => 'Дата создания записи',

    'application' => [
        'title'							=> 'Заявки СВР',
        'create'						=> 'Создание заявки',
        'edit'							=> 'Редактирование заявки',
        'description'					=> 'Заявки в системе',
        'application_id'				=> 'ID заявки',
        'company_location_id'			=> 'ID компании-локации',
        'company_location'				=> 'Компания-локация',
        'user_id'						=> 'ID пользователя',
        'doctor_id'						=> 'ID вет. врача',
        'user_name'						=> 'Пользователь',
        'doctor_name'					=> 'Вет. врач',
        'user'							=> 'Автор',
        'doctor'						=> 'Вет. врач',
        'application_date_create'		=> 'Дата создания',
        'application_date_horriot'		=> 'Дата отправки в Хорриот',
        'application_date_complete'		=> 'Дата завершения',
        'application_status'			=> 'Статус заявки',
        'application_created_at'		=> 'Дата создания',
        'update_at'						=> 'Дата обновления',
    ],

	'animal' => [
        'animal_id'							=> 'ID животного',
        'title'								=> 'Животные СВР',
        'create'							=> 'Создание животного',
        'edit'								=> 'Редактирование животного',
        'description'						=> 'Импортированные животные хозяйств',
        'company_location_id'				=> 'ID локации',
        'polovoz_id'						=> 'ID ПВГ',
        'breed_id'							=> 'ID породы',
        'breed_name'						=> 'Порода',
        'animal_task'						=> 'код задачи',
        'animal_guid_self'					=> 'GUID СВР',
        'animal_guid_horriot'				=> 'GUID Хорриот',
        'animal_number_horriot'				=> 'номер Хорриот',
        'animal_nanimal'					=> 'NANIMAL',
        'animal_nanimal_time'				=> 'NANIMAL_TIME',
        'animal_code_chip_id'				=> 'ID чипа',
        'animal_code_left_id'				=> 'ID левого номера',
        'animal_code_right_id'				=> 'ID правого номера',
        'animal_code_rshn_id'				=> 'ID номера РСХН',
        'animal_code_inv_id'				=> 'ID инвентарного номера',
        'animal_code_device_id'				=> 'ID номера в оборудовании',
        'animal_code_tattoo_id'				=> 'ID тату',
        'animal_code_import_id'				=> 'ID импортного номера',
        'animal_code_name_id'				=> 'ID клички',
        'animal_code_chip'					=> 'Чип',
        'animal_code_left'					=> 'Левый номер',
        'animal_code_right'					=> 'Правый номер',
        'animal_code_rshn'					=> 'Номер РСХН',
        'animal_code_inv'					=> 'Инвентарный номер',
        'animal_code_device'				=> 'Номер в оборудовании',
        'animal_code_tattoo'				=> 'Тату',
        'animal_code_import'				=> 'Импортный номер',
        'animal_code_name'					=> 'Кличка',
        'animal_code_inv_value'				=> 'Значение инвентарного номера',
        'animal_code_rshn_value'			=> 'Значение РСХН',
        'animal_date_create_record'			=> 'Дата создания',
        'animal_date_birth'					=> 'дата рождения',
        'animal_date_import'				=> 'дата ввоза',
        'animal_date_income'				=> 'дата поступления',
        'animal_sex_id'						=> 'ID пола',
        'animal_sex'						=> 'Пол',
        'animal_breeding_value'				=> 'племенная ценность',
        'animal_colour'						=> 'масть',
        'animal_place_of_keeping_id'		=> 'COMPANY_ID места содержания',
        'animal_object_of_keeping_id'		=> 'company_object_id места содержания',
        'animal_place_of_birth_id'			=> 'COMPANY_ID места рождения',
        'animal_object_of_birth_id'			=> 'company_object_id места рождения',
        'animal_place_of_keeping'			=> 'Хозяйство содержания',
        'animal_object_of_keeping'			=> 'Объект содержания',
        'animal_place_of_birth'				=> 'Хозяйство рождения',
        'animal_object_of_birth'			=> 'Объект рождения',
        'animal_type_of_keeping_id'			=> 'тип содержания',
        'animal_purpose_of_keeping_id'		=> 'цель содержания',
        'animal_country_nameport_id'		=> 'ID страны ввоза',
        'animal_country_nameport'			=> 'страна ввоза',
        'animal_description'				=> 'описание',
        'animal_photo'						=> 'фото',
        'animal_out_date'					=> 'дата выбытия',
        'animal_out_reason'					=> 'причина выбытия',
        'animal_out_rashod'					=> 'расход животного',
        'animal_out_type_id'				=> 'ID типа выбытия',
        'animal_out_basis_id'				=> 'ID основания выбытия',
        'animal_out_type'					=> 'тип выбытия',
        'animal_out_basis'					=> 'основание выбытия',
        'animal_out_weight'					=> 'живая масса (кг)',
        'animal_mother_num'					=> 'уникальный номер матери',
        'animal_mother_rshn'				=> 'рсхн номер матери',
        'animal_mother_inv'					=> 'инвентарный номер матери',
        'animal_mother_date_birth'			=> 'дата рождения матери',
        'animal_mother_breed_id'			=> 'ID породы матери',
        'animal_father_num'					=> 'уникальный номер отца',
        'animal_father_rshn'				=> 'рсхн номер отца',
        'animal_father_inv'					=> 'инвентарный номер отца',
        'animal_father_date_birth'			=> 'дата рождения отца',
        'animal_father_breed_id'			=> 'ID породы отца',
        'animal_status'						=> 'статус животного',
        'animal_status_delete'				=> 'статус удаления животного',
        'animal_repair_status'				=> 'Флаг починки животного',
        'animal_created_at'					=> 'Дата создания',
        'update_at'							=> 'Дата обновления',

        'message_animal_not_found'			=> 'Животное не найдено!',
        'message_animal_edit_success'		=> 'Данные животного успешно сохранены'
    ],
];
