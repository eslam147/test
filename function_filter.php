<?php
    function Filter(){
        foreach($_POST as $key => $value){
            if(isset($_POST['email']) && $_POST[strtolower($key)] == $_POST['email']){
                $postfilter[] = strip_tags(filter_var($value, FILTER_SANITIZE_EMAIL));
            }else{
                $postfilter[] = strip_tags(filter_var($value, FILTER_SANITIZE_STRING));
            }
            $thiskeys[] = $key;
        }
        $comb = array_combine($thiskeys, $postfilter);
        return $comb;
    }
?>
