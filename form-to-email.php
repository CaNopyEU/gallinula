<?php

if(isset($_POST['submit'])){
	$_jmeno = htmlspecialchars(trim($_POST['jmeno']));
	$_email = htmlspecialchars(trim($_POST['email']));
	$_text  = htmlspecialchars(trim($_POST['text']));



// antispam
$evil_words = array('[url', 'viagra', 'website');
foreach($evil_words as $word){
    if(strpos($_text, $word) !== false){
        $error_messages['text'] = 'Zpráva obsahuje některé ze zakázaných slov: '.implode(', ', $evil_words);
    }
}

if(substr_count($_text, 'http://') > 5 ){
    $error_messages['text'] = 'Více než pět hypertextových odkazů není povoleno.';
}


// kontrola uzivatelskych dat
    if(empty($_jmeno)){
        $error_messages['jmeno'] = 'Pole Jméno je povinné.';
    }

    if(!preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $_email)){
        $error_messages['email'] = 'Pole E-mail má chybný formát.';
    }

    if(empty($_email)){
        $error_messages['email'] = 'Pole E-mail je povinné.';
    }

    if(empty($_text)){
        $error_messages['text'] = 'Pole Vaše zpráva je povinné.';
    }else{
        $text_array  = explode(' ', $_text);
        $text_count  = count($text_array);
        $text_return = NULL;

        for($i = 0; $i <= $text_count-1; $i++){
            $text_array[$i] = wordwrap($text_array[$i], 50, ' ', 1);
            $text_return .= $text_array[$i].' ';
        }

        $_text = $text_return;
    }

    // odeslání na email + přesměrování
    if(empty($error_messages)) {
        $email_from = $_email;//<== update the email address
        $email_subject = "New Form submission";
        $email_body = "Přišla Vám nová zpráva z webu Gallinula od uživatele - $_jmeno.\n" .
            "Zpráva :\n $_text";

        $to = "outcast.slovakia@gmail.com";//<== adresa m�sta odesl�n�
        $headers = "From: $email_from \r\n";
        $headers .= "Reply-To: $_email \r\n";
        //Send the email!
        mail($to, $email_subject, $email_body, $headers);


        //Přesměrování
        $current_url = $_SERVER['REQUEST_URI'];
        $current_url .= (strpos($current_url, '?') === false ? '?sent=1' : '&sent=1');
        $location_hash = "#form";
        header('Location: ' . $current_url . $location_hash);  //při použití location přímo na soubor je způsoben redirect = neprojeví se akce oznámení chyb.
        echo '<meta http-equiv="refresh" content="1;url=' . $current_url . '." />';
        exit;
    }

} // konec if(isset($_POST['submit']))
