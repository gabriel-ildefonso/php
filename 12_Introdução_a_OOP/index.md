# INTRODUÇÃO À PROGRAMAÇÃO ORIENTADA A OBJETOS

## O que seão objetos?
- Objetos são entidades que possuem comportamentos e características;
- As características são conhecidas como propriedades (variáveis);
- Os comportamentos como métodos (funções);
- Os objetos interagem entre si e sistemas são escritos orientados a objetos (paradigma de Orientação a Objetos)

## O que são classes?
- Classes são os "pais" dos objetos;
- Em PHP sempre que vamos criar ou instanciar um objeto vamos precisar de uma classe;
- A classe contém o molde do objeto, ou seja, seus métodos e suas propriedades;
- Podemos mudar o valor para cada objeto criado, mas ele parte do que a classe impõe;

## Criando classes
- Para iniciar uma classe vamos precisar da palavra reservada class, também dar um nome para a classe;
- Por convenção, a inicial do nome é sempre em maiúscula, ex: User;
- Como é um bloco de código, a classe é envolvida por {}
- Exemplo: class User {}

```php
<?php
  class User{
    //propriedades
    //objetos
  }
?>
```

## Instanciando (criando) um objeto
- Para instanciar um objeto vamos utilizar a palavra new em conjunto do nome da classe;
- A partir daí uma entidade com as características da classe será criada;
- Normalmente encapsulamos este valor em uma variável;
- Exemplo: $gabriel = new User;

## Métodos
- Para declarar um método vamos utilizar a sintaxe de function, porém dentro de uma class;
- O restante é exatamente igual a sintaxe de função;
- Podemos retornar ou imprimir dados, dependendo da nossa regra de negócios;

```php
<?php
  class pessoa {
    function falar() {
     echo "Olá, eu sou um objeto!
    }
  }
  $gabriel = new Pessoa;
  $gabriel->falar();
?>
```

## Declarando propriedades
- Para declarar propriedades vamos basicamente criar uma variável dentro de uma class;
- Porém precisamos definir a sua privacidade, como por exemplo public;
- Uma propriedade pública pode ser acessada fora do escopo do objeto;
- Exemplo: public $idade = 29;

```php
<?php
  class Car {
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Azul";
  }

  $ka = new Car;
  echo $ka->rodas.<br>;
  $ka->cor = "Preta";
  echo $ka->cor
?>
```

## Palavra $this
- $this se refere a instância atual do objeto;
- Podendo assim alterar um valor de uma propriedade do objeto com: $this->proriedade = "x";
- Também é possível invocar um método do objeto com this também;

```php
<?php
  class Animal{
    public $nome;

    function escolherNome($nome) {
      $this->nome = $nome;
    }
		
    function latir(){
      return "woof woof \n";
    }
		
    function latirForte(){
      return strtoupper($this->latir());
    }
  }

  $joey = new Animal;
  echo "O nome do animal é: $Joey->nome \n";
	
  $joey->escolherNome("Joey");
  echo "O nome do animal é: $joey->nome \n";
	
  echo $joey->latir();
  echo $joey->latirForte();
?>

//Retorno:
O nome do animal é:  
O nome do animal é: Joey 
woof woof 
WOOF WOOF
```

## Constantes em classes
- constantes são parecidas com variáveis, salvam valores em memória, porém o seu valor não pode ser alterado;
- Exemplo de sintaxe: public const CHAVE API = "AS0793mJJs39";
- É uma prática manter o nome de constantes com letras maiúsculas;

## Visibilidade
Temos três formatos de visibilidade: public, protected e private;
- <b>public:</b> A propriedade ou método pode ser acessada de qualquer forma;
- <b>protected:</b> A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma de herança;
- <b>private:</b> a propriedade ou método pode ser acessada apenas pela classe que foi criada;

## Herança
- A herança é o recurso da OOP que dá a possibilidade de uma classe herdar métodos e propriedades de outra;
- A palavra reservada é extends;
```php
<?php
  class Humano{
    public $idade = 31;
		
    public function falar(){
      echo "Olá mundo!\n";
    }
    private function gritar(){
      echo "OLÁ MUNDO!\n";
    }
		
    public function getGritar(){
      self::gritar(); 	//'self::'' === '$this->'
    }
  }
	
  $gabriel = new Humano;
  $gabriel->falar();
	
  class Programador extends Humano{
  }
	
  $ze = new Programador;
  $ze->falar();
  $ze->getGritar();
?>
```
 
## Ancestralidade
- Para checar a ancestralidade de uma classe utilizamos o operador instanceof;
- Podemos inserir essa operação em um if, pois vai retornar um booleano;
```php
<?php
  class Humano{	
  }
	
  $gabriel = new Humano;
	
  if ($gabriel instanceof Humano){
    echo "Gabriel é humano";
  }
?>
```

## Interfaces
- As interfaces criam um modelo de definição de uma classe;
- Então toda classe que implementar uma interface, deverá implementar também suas propriedades e métodos, obrigatoriamente;
- A palavra reservada é implements;
- É muito útil na padronização de classes, retornando erro quando uma propriedade ou método não for implementada.

```php
<?php
  interface Caracteristicas{
    public function falar();
  }
	
  class Humano implements Caracteristicas{
    public function falar(){
      echo "Olá mundo! \n";
    }
  }
?>
```
## Traits
- As traits permitem o reuso do código sem hierarquia de classes, ou seja, sem herança;
- Podemos assim utilizar os métodos da classe que foi feita a trait;
- Utilizamos a palavra reservada use;
- É possível usar várias traits em uma mesma classe;
```php
<?php
  trait Objeto{
    public function teste() {
      echo "Testando trait Objeto \n";
    }
  }
  trait Testando{
    public function traitTeste(){
      echo "Testando trait Testando";
    }
  }
  class Central {
    use Objeto;
    use Testando;
  }
	
  $x = new Central;
  $x->teste();
  $x->traitTeste();
?>

Retorno:
Testando trait Objeto 
Testando trait Testando
```

## Classes abstratas
- Classes abstratas não podem ser instanciadas;
- Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata;
- A ideia é executar métodos de uma classe sem que ela seja instanciada;
- A palavra reservada tanto para classes como para métodos é abstract;
```php
<?php
  abstract class Teste {
    public static function testandoClasse() {
      echo "Este médtodo é de uma classe abstrata \n";
    }
  }
	
  //$t = new Teste; Se instanciada, o programa retorna um erro fatal
	
  Teste::testandoClasse(); 
?>

Retorno:
Este médtodo é de uma classe abstrata
```

## Construtores
- Pelos construtores podemos inicializar objetos com valores de propriedades únicos para cada objeto;
- Passamos como argumentos os valores das propriedades;
```php
<?php

  class Car {
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca, $modelo){
      $this->portas = $portas;
      $this->cor = $cor;
      $this->marca = $marca;
      $this->modelo = $modelo;
    }
  }
	
  $ka = new Car(4, "Preta", "Ford", "Ka");
  echo "O carro $ka->modelo é da marca $ka->marca, é de cor $ka->cor e possui $ka->portas portas";
?>

Retorno:
O carro Ka é da marca Ford, é de cor Preta e possui 4 portas
```

## Classes anônimas
- classes anônimas são criadas em uma variável e não possuem nome;
- Elas funcionam como qualquer outra classe, mas não podem ser instanciadas;
- Precisamos finalizá-la com ";";

```php
<?php
  $pessoa = new class(){
    public $nome = "Gabriel";
  };		//Perceba o ";", encerrando a declaração da classe que funciona como variável

  echo $pessoa->nome
?>
Retorno:
Gabriel
```

## Verificando classes
Em PHP temos alguns métodos que nos ajudam a entender as classes;
- class_exists():verifica se uma classe existe;
- get_class_methods(): verifica os métodos de uma classe;
- get_class_vars(): mapeamento das propriedades de uma classe;

## Verificando objetos
Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos:
- is_object(): verifica se uma variável é um objeto;
- get_class(): verifica a classe de um objeto;
- method_exists(): verifica se um método existe em um objeto;








































