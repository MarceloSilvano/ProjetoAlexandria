<?php

class livro{
    private $id;
    private $titulo;
    private $autor;
    private $descricao;
    private $ano;
    private $pdf;
    private $audio;
    private $userPost;
    private $dataPost;
    private $likes;
    private $dislikes;
    private $porcentagem;
    private $downloads;
    private $views;

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getPdf() {
        return $this->pdf;
    }

    public function getAudio() {
        return $this->audio;
    }

    public function getUserPost() {
        return $this->userPost;
    }

    public function getDataPost() {
        return $this->dataPost;
    }

    public function getLikes() {
        return $this->likes;
    }

    public function getDislikes() {
        return $this->dislikes;
    }

    public function getPorcentagem(){
        return $this->porcentagem;
    }

    public function getDownloads() {
        return $this->downloads;
    }

    public function getViews() {
        return $this->views;
    }

    public function getDetalhes() {
        echo "Título: " . $this->getTitulo() . "<br>";
        echo "Autor: " . $this->getAutor() . "<br>";
        echo "Descrição: " . $this->getDescricao() . "<br>";
        echo "Ano: " . $this->getAno() . "<br>";
        echo "PDF: " . $this->getPdf() . "<br>";
        echo "Áudio: " . $this->getAudio() . "<br>";
        echo "Usuário Post: " . $this->getUserPost() . "<br>";
        echo "Data Post: " . $this->getDataPost() . "<br>";
        echo "Likes: " . $this->getLikes() . "<br>";
        echo "Dislikes: " . $this->getDislikes() . "<br>";
        echo "Porcentagem: " . $this->getPorcentagem() . "<br>";
        echo "Downloads: " . $this->getDownloads() . "<br>";
        echo "Views: " . $this->getViews() . "<br>";
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setPdf($pdf) {
        $this->pdf = $pdf;
    }

    public function setAudio($audio) {
        $this->audio = $audio;
    }

    public function setUserPost($userPost) {
        $this->userPost = $userPost;
    }

    public function setDataPost($dataPost) {
        $this->dataPost = $dataPost;
    }

    public function setLikes($likes) {
        $this->likes = $likes;
    }

    public function setDislikes($dislikes) {
        $this->dislikes = $dislikes;
    }

    public function setPorcentagem(){
        $soma = $this->likes + $this->dislikes;

        if($this->dislikes<>0){
            $percent = ($this->likes/$soma) * 100;
            $this->porcentagem = round($percent);
        }else{
            $this->porcentagem = 100;
        }
    }

    public function setDownloads($downloads) {
        $this->downloads = $downloads;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    //construtor
    function __construct($id){
        $db = [
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'database' => 'alexandria'
        ];
        
        $conexao = mysqli_connect($db['host'],$db['user'],$db['password'],$db['database']);
        
        $sql = "SELECT * FROM tb_livros";
        $query = mysqli_query($conexao,$sql);
        $livro = mysqli_fetch_assoc($query);

        $this->setId($id);
        $this->setTitulo($livro['titulo']);
        $this->setAutor($livro['autor']);
        $this->setDescricao($livro['descricao']);
        $this->setAno($livro['ano']);
        $this->setPdf($livro['pdf']);
        $this->setAudio($livro['audio']);
        $this->setUserPost($livro['usuarioPost']);
        $this->setDataPost($livro['dataPost']);
        $this->setLikes($livro['likes']);
        $this->setDislikes($livro['dislikes']);
        $this->setPorcentagem();
        $this->setDownloads($livro['downloads']);
        $this->setViews($livro['views']);
    }
}

class cardLivro extends livro{
    function show(){
        echo '<div class="card Card mt-3 ">';
        echo '<a href="http://localhost/PROJETOS/Alexandria/livro.php?id='.$this->getId().'">';
        echo '<a href="http://localhost/PROJETOS/Alexandria/livro.php?id='.$this->getId().'"><div class="card-header"><h5>'.$this->getTitulo().'</h5></div></a>';
        echo '<div class="card-body d-flex justify-content-center">';
        echo '<img class="Capa" width="175px" src="../phpActions/uploadsCapa/'.$this->getId().'.jpg" alt="">';
        echo '</div>';
        echo '<div class="card-footer CardFooter">';
        echo $this->getAutor();
        echo '<div class="IconsDiv d-flex">';
        echo '<img class="IconCard" src="./assets/png/like.png" alt="">'.$this->getPorcentagem();
        echo '<img class="IconCard" src="./assets/png/downloads.png" style="margin-left: 15px;" alt="">'.$this->getDownloads();
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }
}

?>
