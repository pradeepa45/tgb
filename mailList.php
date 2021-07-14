<?php 
    $email = $_POST['email'];
    file_put_contents("mailinglist.txt",$email.", \n",FILE_APPEND);
?>

<script>
      window.location.href = 'index.php';
</script>