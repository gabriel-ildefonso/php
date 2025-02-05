# Manipulando strings

## Interpolando variáveis
- Interpolação é o uso de variáveis no decorrer de uma string;
- Podemos interpolar variáveis em strings de duas formas:
  1 - Utilizando aspas duplas e colocando a variável.
  2 - e também com chaves e o nome da variável;
- Não há diferença em ambas as formas;
- Nada impede de se usar ambas as formas no mesmo projeto, mas é uma boa prática utilizar apenas uma, isso melhora a legibilidade do código.

```php
<?php
  $teste = "texto";

  echo "Interpolando a variável $teste";
  echo "Interpolando a variável {$teste}";
?>
```
## Função print
- A função print tem a funcionalidade semelhante de echo, porém pode imprimir uma string que foi passada como argumento;
```php
<?php
  print("testando");
?>
```

## Função printf
- A função printf tem a funcionalidade semelhante a print;
- Mas nesse caso, porém, podemos imprimir valores de forma dinâmica utilizando o símbolo '%';
- Essa funcionalidade era comum em linguagens mais antigas, como o C e C++;

```php
<?php

  $nome = 'Gabriel;

  printf("O nome é %s <br>", $nome);
  // %s -> quando a variável for uma string;
  // %d -> quando a variável for um int;
  // %f -> para floats, sendo possível limitar as casas decimais, %.2f limita a duas casas decimais.
?>
```

## Tamanho da string
Utilizando a função strlen() com uma string como parâmetro, vamos receber como retorno o tamanho da string, ou seja, a sua quantidade de caracteres;

```php
<?php
  $str1 = "Esta string é muito grande";
  $str2 = "Esta não";

  echo strlen($str1) . <br>;  //imprime 27
  echo strlen($str2) . <br>;  //imprime 9
?>
```

## Percorrendo um string
- Podemos percorrer cada um dos caracteres de uma string, usando a função strlen();
- Para isso vamos utilizar uma estrutura de repetição;
- Com isso podemos iterar por toda string

```php
<?php
  $str = "Esta é uma string muito grande, ela tem vários caracteres";

  for($i = 0; $i < strlen($str); $i++){
    echo "#str[$i] <br>;
  }  // Isso imprimirá cada caracter da string em uma linha do console;
?>
```

## Limpando uma string
- Podemos remover os espaços em branco de uma string com funções de PHP;
- 'trim()' limpa espaços antes e depois da string;
- 'ltrim()' limpa espaços da parte inicial da string;
- 'rtrim()' limpa espaços da parte final da string;
- Desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários;

## Alterando o case
- Podemos alterar as strings para maiúsculas ou minúsculas com funções de PHP;
- strtolower() - altera todas as letras minúsculas;
- strtoupper() - altera todas as letras maiúsculas;

## Alterando o case de palavras
- Podemos alterar o case apenas das palavras com funções de PHP;
- ucfirst() - altera a primeira letra da string para maiúscula;
- ucwords() - altera primeira letra de cada palavra para maiúscula;

## Removendo tags HTML
- Um problema comum ao trabalhar com HTML é a limpeza das tags, para tanto, podemos remover as tags HTML de uma string com a função 'strip_tags()';
- É especialmente útil para salvar dados em um banco.

## Resgatando parte de uma string
- Com a função substr, podemos resgatar apenas uma parte da string;
- Ex: substr(str, início, fim);
- 'str' é a string que vamos procurar algo;
- 'início' é o índice inicial da palavra ou texto;
- 'fim' é o índice final da palavra ou texto (não será retirado, é exclusive), se deixado em branco irá até o fim da string, se negativo irá remover do último índice;  

```php
<?
  $str = "Esta é a minha string"
  $minha = substr($str, 10, 5);

  echo $str . <br>          //imprime a frase inteira
  echo $minha . <br>        //imprime "minha"
?>
```

## Invertendo strings
- Podemos inverter uma string com a função 'strrev';
- Esta função recebe uma string como parâmetro e retorna o inverso desta;

```php
<?php
  $palavra = "Teclado";
  $inverso = strrev($palavra);

  echo $palavra . <br>;  //imprime 'Teclado'
  echo $inverso . <br>;  //imprime 'odalceT'
?>
```

## Repetição de string
- Com a função str_repeat você pode repetir n vezes uma determinada string;
- O primeiro argumento é a string que será repetida;
- O segundo é o número de repetições;

```php
<?php
$str = 'Teste'
$strrepetida = str_repeat($str, 5);

echo $strrepetida    //imprime 'TesteTesteTesteTesteTeste'
?>
```

## Transformando string em array
- Podemos converter uma string em array com a função explode;
- Passamos primeiro o separador como argumento, depois a string que vai ser convertida;

```php
<?php
  $frase = "banana, maça, laranja, coco";
  $fraseArray = explode(', ',$frase);
  
  print_r($fraseArray);

  /*
  Output:
    
    Array
     (
      [0] => banana
      [1] => maça
      [2] => laranja
      [3] => coco
     )
  */
?>
```

## Transformando um array em string
- Podemos converter um array em string com a função implode;
- Passamos primeiro o separador como argumento, depois a string que vai ser convertida; 
```php
<?php
  $arr = ['banana', 'maça', 'laranja', 'coco'];
  $frase = implode(', ',$arr);
  print_r($frase);

  /*
  Output:
  banana, maça, laranja, coco
  */
?>
```

## Encontrando trechos de strings
- Com a função '  strpos()' podemos encontrar algum trecho em uma string;
- Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;
- Se for retornado false, o texto não está na string;

```php
<?php
  $str = "Estamos testando o método strpos, com o strpos podemos encontrar trechos de strings";
  $teste = strpos($str, "strpos");
  echo $teste      //imprime 27, o índice inicial da primeira ocorrência de "strpos" na string
?>
```

## Encontranso a última ocorrência
- Com a função 'strrpos()' podemos encontrar a última ocorrência de um texto na string;
- Se recebermos algum valor é que o texto foi encontrado, e este valor é o índice inicial;
- Se for retornado false, o texto não está na string;

## Localizando o resto da string
- Com a função strstr podemos encontrar um texto em uma string;
- Se algo for encontrado, a função vai retornar o resto da string após o texto encontrado;
- Se não encontrar nada retorna false;

  ## Decompondo URLs
  - Com a função 'parse_url()' podemos decompor uma URL, recebendo um array com todas as partes que a URL tem;
  - Alguns elementos que podem ser retornados são: protocolo, host e parâmetros;

  ```php
  <?php
    $url = "http://www.google.com";
    $arrayUrl = parse_url($url);
    print_r($arrayUrl);

    /*
    Output:
      Array
      (
        [scheme] => http
        [host] => www.google.com
      )
    */
  ?>

























