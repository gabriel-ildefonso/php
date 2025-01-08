# Seção 4 - Variáveis
## Introdução
- Variáveis são alocações na memória do computador que podemos preencher com dados
- São a forma que temos para declarar um valor e salvá-lo na memória;
- Uma variável em PHP tem o '$' na frente do seu nome;
- Ex: $nome = "Gabriel";
- Para variáveis com nome de mais de duas palavras, a prática é utilizar o camel case (duasPalavras);
- Podemos salvar qualquer tipo de dado em uma variável;
- Podemos alterar o valor de uma variável no decorrer do programa;
- E podemos imprimir o valor de uma variável com 'echo';

```php
<?php
  $teste = 'algum texto';
  echo $teste;    //imprime 'algum texto'
 ?>
```

## Variável de variável
- Podemos criar uma variável por meio do nome de outra variável, com um valor diferente;
- O símbolo para esta função é o '$$';
- $x = "teste";
- $$x = 5;
- Após a execução do código, a variável teste (conteúdo de $x), será criada
com o valor 5;

```php
<?php
 $x = 'nome';
 echo "$x"      //imprime 'nome'
 $$x = 'Gabriel'; //cria uma variável que reecebe o nome do valor da $x e com valor de 'Gabriel'
 echo "$nome"   //imprime 'Gabriel'
?>
```

 ## Variável por referência
 - Podemos criar uma variável com referência a outra;
 - O símbolo é '=&';
 - Se mudamos a variável de referência, a  variável referenciada muda o valor, e ao contrário também gera a mudança;
 - As duas variáveis estão ligadas ao mesmo espaço na memória do computador;
```php
<?php
 $x = 10;
 $y =& $x;

 echo $x;  //imprime 10
 echo $y;  //imprime 10

 //A alteração no valor de qualquer das variáveis afeta as duas variáveis
 $y = 15;

 echo $x;  //imprime 15
 echo $y;  //imprime 15

?>
```

## Escopo
- Assim como em outras linguagens de programação, em PHP também temos escopo de variáveis;
- <strong>Local:</strong> variável declarada em uma função;
- <strong>Global:</strong> variáveis declaradas fora de funções;
- <strong>Static:</strong> variável declarada dentro da função, porém o seu valor permanece salvo entre chamadas da função;
- <strong>Parâmetros de função:</strong> variáveis passadas para uma função, podendo
ser utilizadas ao longo da mesma;

### Escopo local
- A variável local tem seu escopo definido dentro de uma função;
- Ela não é acessível fora da função na qual ela foi criada;
- O seu valor sempre é resetado quando a função é finalizada, liberando o espaço na memória onde ela havia sido criada;
```php
<?php
  $x = 10;
  echo "$x global <br>";

  function teste() {
    $x = 5;
    echo "$x local <br>";
  }

  teste()    //a função precisa ser invocada

  echo "$x global <br>";

  /* Resultado do código
    10 global
    5 local
    10 global
    5 local
  */
?>
```

### Escopo global
- A principal característica da variável global é ser declarada fora de funções;
- Por comportamento padrão não são acessíveis dentro de funções;
- Para que seja possível acessá-las dentro de funções, recisamos utilizar a palavra 'global' ao declará-las;
- Essa funcionalidade da variável global não ser acessível dentro de funções previne muitos problemas no software;

```php
<?php
  $teste = 'teste';     
  echo "$teste global"    //imprime 'teste global'

  if(5 > 2){
    $teste = 'gabriel';  
    echo "$teste if";     //imprime 'gabriel'
  }

  echo "$teste global 2;   //imprime 'teste global 2'

  funtion funcao() {
    echo "$teste local"    //retorna Erro, pois a variável é global, e não está acessível dentro da função
  }

  function testandoGlobal(){
    global $teste;                   //invoca a variável global para dentro da função
    $teste = 2                       //o valor da variável foi aletrado para 2
    echo "$teste global na função"
  }
  testandoGLobal()                   //imprime 2
  echo "$teste global 3"             //imprime '2 global 3', pois o valor da variável foi alterada dentro da função 'testandoGlobal()'
?>
```

### Escopo static - variável estática
- A variável estática é declarada com a instrução static;
- O valor da mesma é mantido e alterado a cada execução de uma função;
- É interessante este comportamento pois as variáveis de escopo local sempre são resetadas;

```php
<?php
  function teste(){
    $a = 0;
    $a++;
    echo "$a";
  }

  teste();    //imprime 1
  teste();    //imprime 1
  teste();    //imprime 1
  //O valor não persiste por ter sido criado em escopo local, toda vez que a a função termina sua execução o valor da variável $a é resetado.

  function testeStatic(){
    static $a = 0;
    $a++;
    echo "$a";
  }

  testeStatic();    //imprime 1
  testeStatic();    //imprime 2
  testeStatic();    //imprime 3
  //O valor de $a é mantido, mesmo após o fim da execução da função
?>
```

### Escopo dos parâmetros de função
- Os parâmetros de função também são considerados tipos de variáveis;
- Este recurso nos ajuda a criar funções com valores dinâmicos;
- Podendo alterá-los a cada invocação da mesma função;
- Podemos passar mais de um parâmetro para uma função;

```php
<?php
  function soma($a, $b) {
    echo $a + $b;
  }

  soma(2, 4);    //imprime 6
  soma(7, 8);    //imprime 15
?>
```
