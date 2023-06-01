<!-- MICE IMPORTS -->

<?php if (file_exists("includes/bogota.php")) { ?>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src="js/jquery-ui-1.13.1.custom/jquery-ui.min.js?v=<?=time();?>"></script>
<?php }else{
  include '../includes/footer.php';
} ?> 
<link rel="stylesheet" href="js/jquery-ui-1.13.1.custom/jquery-ui.structure.min.css?v=<?=time();?>">
<link rel="stylesheet" href="js/jquery-ui-1.13.1.custom/jquery-ui.theme.css?v=<?=time();?>">
<link rel="stylesheet" href="css/styles.css?v=<?=time();?>" />
<script src="js/purify.min.js?v=<?=time();?>"></script>
<script src="js/main.js?v=<?=time();?>"></script>