<?php

/* funzione che permette di generare password casuali */
  function generatePassword($len) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:\'",.<>/?';
    return substr(str_shuffle($chars), 0, $len);
  }
?>