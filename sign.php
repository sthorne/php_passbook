#!/usr/bin/env php
<?php
    
require 'SignPass.class';

$options = getopt("p:c:w:o:fh");

if(isset($options['h']) || !isset($options['p']) || !isset($options['c']) || !isset($options['w']) || !isset($options['o']))
{
    die('Usage: sign.php -p /path/to/pass/directory -c /path/to/ssl/certificate -w certificate-password -o /path/for/output/file  -i /path/to/intermediate/certificate' . PHP_EOL);
}

$passbook = new SignPass($options['p'], $options['c'], $options['w'], "", $options['o']);

$passbook->sign_pass(isset($options['f']));

    
?>