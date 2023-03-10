<?php

function username_validation($data)
{
    $res = array("options" => array("regexp" => "/^(\w){3,}$/"));
    $val = [];
    if (!empty($data)) {
        if (filter_var($data, FILTER_VALIDATE_REGEXP, $res)) {
            return $data;
        } else {
            array_push($val, false, 'The username cannot contain special characters except dash.');
            return $val;
        }

    } else {
        array_push($val, false, 'Username cannot be empty');
        return $val;
    }
}


function password_validation($data)
{

    $res = array("options" => array("regexp" => "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*]).{8,}$/"));
    //Conditions in the order of min char, Uppercase, lowercase, number, special char.
    $cond = ["/.{8,}/", "/(?=.*?[A-Z])/", "/(?=.*?[a-z])/", "/(?=.*?[0-9])/", "/(?=.*?[#?!@$%^&*-])/"];
    $val = [];
    if (!empty($data)) {
        if (!filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $cond[0])))) {
            array_push($val, false, 'Password cannot be less than 8 characters');
            return $val;
        } elseif (!filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $cond[1])))){
            array_push($val, false, 'Password must contain atleast 1 Uppercase character.');
            return $val;
        }elseif (!filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $cond[2])))){
            array_push($val, false, 'Password must contain atleast 1 lowercase character.');
            return $val;
        }elseif (!filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $cond[3])))){
            array_push($val, false, 'Password must contain atleast 1 number.');
            return $val;
        }elseif (!filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => $cond[4])))){
            array_push($val, false, 'Password must contain atleast 1 special character.');
            return $val;
        }
        else {
            return $data;
        }
    } else {
        array_push($val, false, 'Password cannot be empty');
        return $val;
    }
}

function email_validation($data)
{
    $val = [];
    $res = array("options" => array("regexp" => "/^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9-]+).([a-z]{2,10}).([a-z]{2,8})?$/"));
    if (!empty($data)) {
        if (filter_var($data, FILTER_VALIDATE_REGEXP, $res)) {
            return $data;
        } else {
            array_push($val, false, 'Invalid email');
            return $val;
        }

    } else {
        array_push($val, false, 'Email cannot be empty');
        return $val;
    }
}

 //Function for stripping and formatting raw user data.
 function validate($data)
 {

     $data = trim($data); //Strip spaces

     $data = stripslashes($data); //Strip Slashes

     $data = htmlspecialchars($data); //use HTML special characters

     return $data;

 }
?>