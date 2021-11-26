<?php
require "header.php";
//page content 
echo "<p class='text-green-600 font-bold mt-5 flex align-center'>Hi ! It's a simple project for using patterns to solve dynamic form builder problem!</p>";
if(!isset($_REQUEST['action'])){
?>
<form name="formparams" id="formparams">
    number of inputs: 
</form>
<?php 

}
?>

<?php
//end of page content 
require "footer.php";
?>