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















































