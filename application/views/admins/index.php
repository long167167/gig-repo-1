<?php $this->load->view($this->config->item('theme') . 'header'); ?>
<?php 
if ($first_name != ""){
    echo '<img src="../img/' . $picture . '" width="100" height="100"' . '>' . '<h4>' . $email . '</h4><br>';

    echo '<h1>Welcome ' . $first_name ." ". $last_name . '!</h1><br> Today is ' . date('l, M jS, Y, H:i a.') . '<hr>';
    
    echo '<h3>Login Histories</h3>';  
    echo '
    <table class="table table-striped table-hover ">
    <thead>
    <tr>
    <th>Name </th>
    <th>Last Login</th>
    <th>Last Logout</th>
    </tr>
    </thead>
    <tbody>
    ';
    echo '
    <tr>
    <td>"'. $first_name ." ". $last_name .'"</td>
    <td>"'.$Lastlogin.'"</td>
    <td>"'.$Lastlogout.'"</td>
    </tr>
    ';
    
    echo '
    </tbody>
    </table> ';

    
}else{
    
    echo '<h1>' . $logged . '</h1><br>' . 'It is ' . date('l, M jS, Y, H:i a.');
}

?>
<?php $this->load->view($this->config->item('theme') . 'footer'); ?>