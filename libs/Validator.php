<?php
class Validator
{
    private $errors=[];

    public function getError()
    {
        return $this->errors;
    }

    public function isValid()
    {
        return count($this->errors)==0;
    }

    public function isVide($champ,$key,$msg= "ce champ est obligatoire")
    {
        if ($champ == " ") {
            $this->errors[$key]=$msg;
        }
    }
}