<?php
    $stat_ip = getenv('STATIC_APP');
    $dyn_ip = getenv('DYNAMIC_APP');
?>

<VirtualHost *:80>
    ServerName demo.api.ch

    ProxyPass '/api/step2/' 'http://<?php print "$dyn_ip"?>'
    ProxyPassReverse '/api/step2/' 'http://<?php print "$dyn_ip"?>'

    ProxyPass '/' 'http://<?php print "$stat_ip"?>'
    ProxyPassReverse '/' 'http://<?php print "$stat_ip"?>'

</VirtualHost>