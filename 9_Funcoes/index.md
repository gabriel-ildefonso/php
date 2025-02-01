# Funções
## O que são funções?
- São blocos de códigos que possuem nomes;
- Funções realizam uma ação específica e podem ser reaproveitadas (chamadas novamente) ao longo do programa;
- Podemos passar parâmetros para funções, que moldam a sua execução;
- A criação de funções reduz a duplicidade de código e também melhora a manutenção;
- O PHP, assim como as demais linguagens de programação, possui diversas funções prontas já incluídas que podemos utilizar;
Assim podemos criar funções:

```php
<?php
  function nomeDaFuncao() {
    //código
  }
?>
```

## Chamando funções
- Para chamar uma função basta colocar o seu nome e abrir e fecharparênteses;
Exemplo: funcaoTeste();
- Algumas funções exigem parâmetros, que veremos mais adiante;
- O ato de chamar uma função também é conhecido como invocar;
- O PHP tem diversas funções prontas (built_in) para utilizarmos no nosso código, tais como: strlen, strtoupper, strtolower, print_r, var_dump;
- É uma boa prática definir as funções logo no início do arquivo.

## Parâmetros da função
- Podemos passar parâmetros para as funções, estes parâmetros são como variáveis, que são utilizadas dentro da função para moldar a sua execução;
- Pode-se estabelecer quantidade de parâmentros que se desejar;
Exemplo:
```php
<?php
  function teste(param, param2) {
    // código
  }
?>
```
Na prática:
```php
<?php
  function media($a, $b){
    	$c = (($a + $b) / 2);
      echo "A média entre $a e $b é $c";
  }
  
  media(35, 77)  //Retornará "A média entre 35 e 77 é 56"
?>
```
- Invocar umma função que requeira parâmetros sem passar os referidos parâmetros causa um erro fatal na execução do programa, interrompendo a sequência de código onde estiver a função invocada de forma indevida.
- De forma semelhante, se uma função requer um parâmetro e ela vier a ser invocada recebendo dois parâmetros, a função irá usar o primeiro parâmetro e ignorar os demais parâmetros desnecessários.

## Retorno de uma função
- Normalmente funções retornam algo, para isso utilizamos a instrução return;
- O objetivo é armazenar o valor de retorno em uma variável e utilizá-lo posteriormente no código;

```php
<?php
  function soma($a, $b) {
    return $a + $b;      //Com isso o valor fica disponível para o resto do código
  }

  echo soma(2, 5);       //Imprime o retorno da função com os parâmtros passados
  
  $x = soma(2, 4);       //Usa o retorno para atribuir valor a uma variável
  echo $x;               //Imprime o valor de $x
?>
```

## Relembrando escopo de função
- Nas funções temos um escopo específico chamado de local, onde as suas variáveis são exclusivamente delas;
- Podemos utilizar as variáveis globais com a instrução global;
- E também há o static, onde podemos manter um valor após a execuçãode uma função, o que normalmente é resetado;
- Vejamos na prática:
  
```php
<?php
  $a = 10;

  function testeEscopo(){
	  $a = 7;
		echo "Escopo local de a: $a <br>";
  }
  echo testeEscopo();
  echo "Escopo global de a: $a <br>";
?>

/* O retorno será:
  Escopo local de a: 7
  Escopo global de a: 10
*/
```
## Argumentos Default
- Podemos passar parâmetros que já possuem um valor pré-determinado, o padrão, 'default';
- Então caso você não passe este parâmetro, o valor default será utilizado, e a função será executada normalmente com o valor definido;
- Caso uma função exija um parâmetro seja invocada sem o parâmetro, o programa apresentará um erro fatal, interrompendo sua execução.

```php
<?php
  function padrao($a = "padrão") {
    echo "o valor de a é: $a; <br>"
  }

  padrão()              //Será impresso: "O valor de a é: padrão"
  padrão("teste")       //Será impresso: "O valor de a é: teste"
?>
```
## Argumentos das funções
- No PHP temos duas funções interessantes para aprender mais sobre as funções que iremos utilizar no programa;
- func_get_arg = retorna uma lista com os argumentos de uma função;
- func num args = retorna o número de argumentos de uma função;

```php
<?php
  function soma($a, $b){
	  print_r(func_get_args()) . "<br>";    //Retorna: Array ( [0] => 2 [1] => 4 )
		echo func_num_args() . "<br>";        //Retorna 2
		return $a + $b;
  }
echo soma(2, 4);
?>
```

## Retornando múltiplos valores
- Caso seja necessário retornar vários valores em uma função, podemos formar um array para retorno;
- E então acessar os índices de forma isolada com a nova variável que contém o retorno;

```php
<?php
  function multiplosDados($nome, $idade){
	  $nome = "Sr. $nome";
	  $idade = "$idade anos";
	  return [$nome, $idade];
  }

  $dados = multiplosDados("Gabriel", 31);

  print_r($dados);
  echo "<br>";
  echo "Ola $dados[0], você tem $dados[1]";
?>
```
## Depurando dados
- Utilizamos duas funções para verificar dados formatados: print_r e var_dump;
- As duas apresentam os dados de forma semelhante;
- Porém var_dump exibe de uma forma "human readable", traduzindo seria algo como "para humanos lerem";
- Veremos, a seguir, a diferença dos dois métodos:

  ```php
  <?php
	  $arr = [
	    'teste', 
	    123, 
	    123.456,
	    true,
	    [1, 2, 3]
    ];

    print_r($arr);
    echo "<br>";
    var_dump($arr);
  ?>
  /*
  Resposta do print_r: Array ( [0] => teste [1] => 123 [2] => 123.456 [3] => 1 [4] => Array ( [0] => 1 [1] => 2 [2] => 3 ) )
  Resposta do var_dump: array(5) { [0]=> string(5) "teste" [1]=> int(123) [2]=> float(123.456) [3]=> bool(true) [4]=> array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } }

  Percebe-se que o var_dump fornece mais informações, como o tamanho do array, os tipos de dados de cada índice do array, e ainda separa o array interno para facilitar a visualização.
  */


















