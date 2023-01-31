<?php
/* viene definita la stringa { $chars } che contiene tutti i caratteri possibili da utilizzare nella password, Includendo lettere minuscole, maiuscole, numeri e simboli speciali. */
  function generatePassword($len) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:\'",.<>/?';
    return substr(str_shuffle($chars), 0, $len);
  }
?>