<?php
$checklogin=0;
unset($_COOKIE['khlathom_username']);
setcookie('khlathom_username', '', time() - 3600, '/'); 

unset($_COOKIE['khlathom_password']);
setcookie('khlathom_password', '', time() - 3600, '/'); 
?>
<script type="text/javascript">
   location.href = "<?php echo $domain; ?>?admin=1&login";
</script>
<?php

?>