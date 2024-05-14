<?php
    function hasNonNumericCharacters($string) {
        for ($i = 0; $i < strlen($string); $i++) {
            if (!is_numeric($string[$i])) {
                return true;
            }
        }
        return false;
    }

    $fromCur = $_REQUEST['fromCur'];
    $toCur = $_REQUEST['toCur'];
    $amount = $_REQUEST['amount'];

    if ($amount == "" || $amount < 0 || hasNonNumericCharacters($amount) == true) {
        echo "Please enter valid input!";
    }
    
    else {
        // USD to BDT
        if ($fromCur == "usd" && $toCur == "bdt") {
            $total = $amount * 109.76;
    
            echo "USD to BDT: " . $total;
        }
        
        // INR to BDT
        if ($fromCur == "inr" && $toCur == "bdt") {
            $total = $amount * 1.32;
    
            echo "INR to BDT: " . $total;
        }
    }
?>