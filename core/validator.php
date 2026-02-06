<?php
namespace core;
class Validator {

    public static function validate($data) {
        $errors = [];

        
        if (empty($data['name']) || strlen($data['name']) < 2) {
            $errors['name'] = "يرجى إدخال اسم صحيح.";
        }

        if (empty($data['age']) || $data['age'] <= 0 || $data['age'] > 120) {
            $errors['age'] = "يرجى إدخال عمر منطقي.";
        }

       
        if (empty($data['height']) || $data['height'] <= 50 || $data['height'] > 250) {
            $errors['height'] = "يرجى إدخال طول صحيح (سم).";
        }

        
        if (empty($data['weight']) || $data['weight'] <= 2 || $data['weight'] > 300) {
            $errors['weight'] = "يرجى إدخال وزن صحيح (كجم).";
        }

        return $errors;
    }
}