<?php 
  require 'functions.php';

  $id = $_GET['id'];

  if(isset($id)) {
    if(hapus($id) > 0) {
      echo "<script>
            alert('data berhasil di hapus!');
            document.location.href = 'index.php';
            </script>";
      }
    }

?>