<?php 
// 🔹 DESAFIO PROFISSIONAL
// A empresa pediu para cadastrar clientes e funcionários.
// Pergunta:
// Você criaria uma classe só ou mais de uma?
// mais de uma, sendo uma para produtos, clientes e funcionarios
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
        echo "preço: " .$this -> preco . "\n\n";
    }

}

$prod = new Produto("lapis", 12 ); //instancia da classe a(ja com os objetos nela)
$prod2 = new Produto("borrcha", 15);
$prod -> mostrarDados();
$prod2 -> mostrarDados();

class funcionario{
    public $nome;
    public $idade;
    public $setor;
    public $salario;

    public function __construct($nome,$idade,$setor, $salario)
    {
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> setor = $setor;
        $this -> salario = $salario;

    }
    public function cadastrar(){
        echo "\n Funcionario: {$this ->nome} cadastrdo com sucesso";
    }

    public function mostrarDados(){
        echo "Nome: " .$this->nome . "\n";
        echo "idade: " .$this->idade . "\n";
        echo "setor: " .$this -> setor ."\n";
        echo "salario: " .$this -> salario ."\n\n";
    }
}

$fun = new funcionario ("kauam",17, "contabilidade", 2000);
$fun2 = new funcionario ("celis",16, "repositor", 1700);
$fun -> mostrarDados();
$fun2 -> mostrarDados();


class clientes{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this -> nome  = $nome;
        $this -> idade = $idade;
    }
    public function cadastrar(){
        echo "\n cliente: {$this -> nome } cadastrado com sucesso";
    }
    public function mostrarDados(){
        echo "Nome: " .$this->nome . "\n";
        echo "idade: " .$this->idade . "\n\n";

    }

}

$cli = new clientes("celis", 22 );
$cli2 = new clientes("edu", 45);
$cli -> mostrarDados();
$cli2 -> mostrarDados();

?>