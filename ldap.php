<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 08/03/16
 * Time: 16:55
 */

// LDAP variables

function conectarLDAP($user,$password)
{
    $conectado = false;
    $ldaphost = "10.150.0.155";  // your ldap servers
    $ldapport = 389;                 // your ldap server's port number

    $ldaprdn = "IFRN\\$user";     // ldap rdn or dn
    $ldappass = $password;  // associated password
// Connecting to LDAP
    $ldapconn = ldap_connect($ldaphost, $ldapport)
    or die("Could not connect to $ldaphost");
    if ($ldapconn) {

        // binding to ldap server
        $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);


        // verify binding
        print_r($ldapbind);
        if ($ldapbind) {
            $conectado = true;
        }

    }
    return $conectado;
}

//BASE DN => DC=ifrn,DC=local
?>