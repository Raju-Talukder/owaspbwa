<html>
<head>


<title>OWASP 1-Liner</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />


<body>
<div class="foo">
<h1><center>OWASP 1-Liner</center></h1>
<p><p>

<h3>About OWASP 1-Liner </h3>
<p>OWASP 1-Liner is a deliberately vulnerable Java and JavaScript-based chat application. It runs in two versions simultaneously - vulnerable and securish. The vulnerable version is intended for attack demos and the securish version is intended for demoing countermeasures.</p>
<p>For more information see the <a href="http://1-liner.org/">OWASP 1-Liner homepage</a>.</p>

<h3>Current status</h3>
Deployment of the OWASP 1-Liner on the OWASPBWA VM is <b>incomplete</b> at this point. Some features are working, but other areas are non-functional.

<h3>Setup instructions</h3>
In order to use this application, you must access it using some specific hostnames.
<ol>
<li>Note the IP of this host (it is shown below and is also displayed on the console when the VM boots).</li>
<li>Configure your hosts file (/etc/hosts on Linux, C:\Windows\System32\drivers\etc\hosts on Windows) to redirect the following domains to the IP of the VM: local.1-liner.org, other.1-liner.org, local.l-liner.org, 3rd-party.info, attackr.se. 

For example, the line in the hosts file will look like:<br><br>
<?php
echo $_SERVER['SERVER_ADDR'];
?> owaspbwa local.1-liner.org other.1-liner.org local.l-liner.org 3rd-party.info attackr.se<br><br>
<li>
Browse to <a href="http://local.1-liner.org/oneliner/">http://local.1-liner.org/oneliner/</a> to get started.</ol>

</body>


</html>