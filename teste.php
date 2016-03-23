<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 08/03/16
 * Time: 17:15
 */

$ldaphost = "10.150.0.155";  // your ldap servers
$ldapport = 389;                 // your ldap server's port number

$ldaprdn = "IFRN\\1935921";     // ldap rdn or dn
$ldappass = "jmv288DM@!";  // associated password
// Connecting to LDAP
$ldapconn = ldap_connect($ldaphost, $ldapport)
or die("Could not connect to $ldaphost");
if ($ldapconn) {

    // binding to ldap server
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // verify binding
    if ($ldapbind) {

        $filter="(&(objectClass=user)(objectCategory=person)(sAMAccountName=username))";
        $justthese = array( "sn", "givenname", "mail");

        $sr=ldap_search($ldapconn, "DC=ifrn,DC=local", $filter, $justthese);
        print_r($filter);

        print_r($sr);
        $info = ldap_get_entries($ds, $sr);

        echo $info["count"]." entries returned\n";
        print_r($info);

    } else {
        echo "não conectado";
    }

}



?>