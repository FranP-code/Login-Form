<?php

function sanitize($typeOfField, $field) {

    switch($typeOfField) {
        case ($typeOfField === 'user'):
            return filter_var($field, FILTER_SANITIZE_STRING);
            break;

        case ($typeOfField === 'email'):
            return filter_var($field, FILTER_SANITIZE_EMAIL);
            break;
        
        default:
            return 'The value in the '. $typeOfField . 'field is not valid';
            break;
    }
}

?>