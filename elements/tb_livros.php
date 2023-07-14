<?php

$sql = "SELECT * FROM `tb_livros`";
$query = mysqli_query($conexao, $sql);

while($row = mysqli_fetch_assoc($query)){

    $likes = $row['likes'];
    $dislikes = $row['dislikes'];

    $soma = $likes + $dislikes;

    if($dislikes<>0){
        $percent = ($likes/$soma) * 100;
    }else{
        $percent = 100;
    }

   ?>

<div class="card Card mt-3 ">
  <a href="livro.php?id=<?php echo $row['id']?>">
      <a href="livro.php?id=<?php echo $row['id']?>"><div class="card-header"><h5><?php echo $row['titulo'] ?></h5></div></a>
      <div class="card-body d-flex justify-content-center ">
        
        <img class="Capa" width="175px" src="./phpActions/uploadsCapa/<?php echo $row['id'] ?>.jpg" alt="">
        
      </div>
      <div class="card-footer CardFooter"> 
      <?php echo $row['autor'] ?>
        <div class="IconsDiv d-flex">
          <img class="IconCard" src="./assets/png/like.png" alt=""><?php echo $percent."%" ?>
          <img class="IconCard" src="./assets/png/downloads.png" style="    margin-left: 15px;" alt=""><?php echo $row['downloads'] ?>
        </div>
</div>
</a>
</div>


<?php } ?>