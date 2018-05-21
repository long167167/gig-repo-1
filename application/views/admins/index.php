<?php $this->load->view($this->config->item('theme') . 'header'); ?>
<!--
<h1>
    //"Hi " . $first_name . ", "?>//$logged
</h1>
-->
<?php 
if ($first_name != ""){
    echo '<img src="../img/' . $picture . '" width="100" height="100"' . '>' . '<h4>' . $email . '</h4><br>'; 
    echo '<h1>Welcome ' . $first_name . " " . $last_name . '!<br><hr><br>' . $logged . "</h1><br> Today is " . date('l, M jS, Y, H:i a.');
}else{
    
    echo '<h1>' . $logged . '</h1><br>' . 'It is ' . date('l, M jS, Y, H:i a.');
}

?>
<?php $this->load->view($this->config->item('theme') . 'footer'); ?>
