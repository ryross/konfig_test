<a href="<?php echo url::base()?>test/?env=production">Switch to Production</a> 
<a href="<?php echo url::base()?>test/?env=development">Switch to Development</a> 

<h1>Final Config</h1>
<?php echo debug::vars($config); ?>

<h1>Production Config: application/config/production/database.php</h1>
<?php echo debug::vars($production); ?>

<h1>Development Config: application/config/development/database.php</h1>
<?php echo debug::vars($development); ?>

<h1>Original Config: application/config/database.php</h1>
<?php echo debug::vars($original); ?>
