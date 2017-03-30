<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="alert alert-danger" style="margin: 30px" align='center'>
    <b>SEM PERMISSÃO</b>
</div>

<?php
    $array = explode('/',$_SERVER['HTTP_REFERER']);
    $url = end($array);
    echo "<a href='/" . $url . "'>Voltar</a>";
 ?>
