  <!-- <meta name="subject" content="Travis">
       <meta name="copyright" content="4lph4-travis">
       <meta name="author" content="A747iR, 4lph4-ir@gmail.com">
       <meta name="designer" content="A747ir">
       <meta name="owner" content="4lph4Ir">
-->

  <?php

    function url_encode_full($value)
    {
        return implode("", array_map(function ($i) {
            return sprintf("%%%X", ord($i));
        }, str_split($value)));
    }
