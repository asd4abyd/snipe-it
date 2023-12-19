<?php

return [
    'custom_fields'		        => 'Pola niestandardowe',
    'manage'                    => 'Zarządzaj',
    'field'		                => 'Pole',
    'about_fieldsets_title'		=> 'O zestawie pól',
    'about_fieldsets_text'		=> 'Zestawy pól pozwalają na utworzenie grup własnych, niestandardowych pól, które są często wykorzystywane. Mogą być one wykorzystane i przypisane do modeli aktywów.',
    'custom_format'             => 'Własny format...',
    'encrypt_field'      	        => 'Szyfruje wartość tego pola w bazie danych',
    'encrypt_field_help'      => 'UWAGA: Szyfrowanie pola spowoduje brak możliwości wyszukiwania go.',
    'encrypted'      	        => 'Zaszyfrowane',
    'fieldset'      	        => 'Zestaw pól',
    'qty_fields'      	      => 'Ilość pól',
    'fieldsets'      	        => 'Zestaw pól',
    'fieldset_name'           => 'Nazwa zestawu pól',
    'field_name'              => 'Nazwa Pola',
    'field_values'            => 'Wartości pól',
    'field_values_help'       => 'Dodaj opcje zaznaczania, jeden na wiersz. Puste wiersze poza pierwszym wierszem będą ignorowane.',
    'field_element'           => 'Element formularza',
    'field_element_short'     => 'Element',
    'field_format'            => 'Format',
    'field_custom_format'     => 'Format niestandardowy',
    'field_custom_format_help'     => 'To pole umożliwia użycie wyrażenia regularnego do sprawdzania poprawności. Wyrażenie powinno zaczynać się od "regex:" - na przykład, aby sprawdzić, czy niestandardowa wartość pola zawiera poprawny IMEI (15 cyfr), trzeba użyć <code>regex: / ^[0-9]{15}$ /</code>.',
    'required'   		          => 'Wymagane',
    'req'   		              => 'Wymagane',
    'used_by_models'   		    => 'Używane przez modele',
    'order'   		            => 'Kolejność',
    'create_fieldset'         => 'Nowy zestaw pól',
    'update_fieldset'         => 'Aktualizuj zestaw pól',
    'fieldset_does_not_exist'   => 'Zestaw pól :id nie istnieje',
    'fieldset_updated'         => 'Zestaw pól zaktualizowany',
    'create_fieldset_title' => 'Utwórz nową listę',
    'create_field'            => 'Nowe pole niestandardowe',
    'create_field_title' => 'Utwórz pole niestandardowe',
    'value_encrypted'      	        => 'Wartość tego pola jest zaszyfrowana w bazie danych. Tylko admini będą mogli wyświetlić rozszyfrowaną wartość',
    'show_in_email'     => 'Czy podać wartość tego pola w e-mailach z przypisaniem, wysłanych do użytkownika? Zaszyfrowane pola nie mogą być zawarte w wiadomościach e-mail',
    'show_in_email_short'     => 'Dołącz do wiadomości e-mail.',
    'help_text' => 'Tekst pomocniczy',
    'help_text_description' => 'Jest to tekst opcjonalny, który pojawi się pod elementami formularza podczas edycji zasobu w celu zapewnienia kontekstu.',
    'about_custom_fields_title' => 'O polach niestandardowych',
    'about_custom_fields_text' => 'Pola niestandardowe pozwalają na dodawanie dowolnych atrybutów do środków trwałych.',
    'add_field_to_fieldset' => 'Dodaj pole do listy pól',
    'make_optional' => 'Wymagane - kliknij, aby ustawić jako opcjonalne',
    'make_required' => 'Opcjonalnie - kliknij, aby ustawić jako wymagane',
    'reorder' => 'Zmień kolejność',
    'db_field' => 'Pole bazy danych',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'Ta wartość musi być unikalna dla wszystkich aktywów',
    'unique' => 'Unikalny',
    'display_in_user_view' => 'Zezwalaj zaznaczonemu użytkownikowi na wyświetlanie tych wartości na stronie Widok Przypisanych Zasobów',
    'display_in_user_view_table' => 'Widoczne dla użytkownika',
    'auto_add_to_fieldsets' => 'Automatycznie dodaj to do każdego nowego zestawu pól',
    'add_to_preexisting_fieldsets' => 'Dodaj do dowolnego istniejącego zestawu pól',
    'show_in_listview' => 'Domyślnie pokazuj w widokach list. Autoryzowani użytkownicy nadal będą mogli pokazywać/ukrywać za pomocą selektora kolumn',
    'show_in_listview_short' => 'Pokaż na listach',
    'show_in_requestable_list_short' => 'Show in requestable assets list',
    'show_in_requestable_list' => 'Show value in requestable assets list. Encrypted fields will not be shown',
    'encrypted_options' => 'To pole jest zaszyfrowane, więc niektóre opcje wyświetlania nie będą dostępne.',

];
