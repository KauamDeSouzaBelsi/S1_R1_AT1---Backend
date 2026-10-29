<?php 
// 🔹 DESAFIO PROFISSIONAL
// A empresa pediu para cadastrar clientes e funcionários.
// Pergunta:
// Você criaria uma classe só ou mais de uma?
// sera feita com apenas uma classe
// Quais atributos seriam diferentes? nome e preço
?>

<?php 
class Produto{ //criado a classe
    //atributos
    public $nome; // objeto
    public $preco; // objeto

    // metodos:
    public function __construct($nome,$preco)
    {
        $this -> nome= $nome;
        $this -> preco= $preco;
        // o "$this" seria para usar indicar o objeto
    }
    public function cadastrar(){
        echo "\n produto {$this ->nome} foi cadastrado com sucesso";
    }

    public function mostrarDados(){
        echo "nome: " .$this -> nome . "\n";
        echo "preço: " .$this -> preco . "\n";
    }

}

$prod = new Produto("lapis", 12 );
$prod -> mostrarDados()
?>