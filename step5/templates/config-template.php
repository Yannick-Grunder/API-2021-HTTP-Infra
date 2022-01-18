<?php
    $stat_ip = getenv('STATIC_APP');
    $dyn_ip = getenv('DYNAMIC_APP');
?>

<VirtualHost *:80>
    ServerName demo.api.ch

    ProxyPass '/api/step2/' '<?php print "$dyn_ip"?>'
    ProxyPassReverse '/api/step2/' '<?php print "$dyn_ip"?>'

    ProxyPass '/' '<?php print "$stat_ip"?>'
    ProxyPassReverse '/' '<?php print "$stat_ip"?>'

</VirtualHost>