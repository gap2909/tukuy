<?php
/**
 * Descripción de Encriptador
 * @autor Gustavo Páez, <gpaez@eval.org.ve>
 * @fecha 02/08/2018
 * @version 1.0
 * @modificado 02/08/2018
 */

class Encriptador {
    public static function getHash($algoritmo, $dato, $key) {
        $hash = hash_init($algoritmo, HASH_HMAC, $key);
        hash_update($hash, $dato);
        
        return hash_final($hash);
    }
}