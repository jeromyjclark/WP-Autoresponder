<?php 
include __DIR__."/wp-config.php";
include __DIR__."/wp-admin/includes/plugin.php";
echo "About to install ".__DIR__."/wp-content/plugins/wp-responder-email-autoresponder-and-newsletter-plugin/wpresponder.php";
if (is_file(__DIR__."/wp-content/plugins/wp-responder-email-autoresponder-and-newsletter-plugin/wpresponder.php")) {
   echo "Plugin file found"; 
   var_dump(activate_plugin(__DIR__."/wp-content/plugins/wp-responder-email-autoresponder-and-newsletter-plugin/wpresponder.php"));
}
else {
   echo "File not found";
   exit(1);
}
