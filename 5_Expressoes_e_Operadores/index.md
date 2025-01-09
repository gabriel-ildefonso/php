# Expressões e Operadores

## O que são expressões de código?
- Uma expressão é uma instrução de código que será avaliada e resultará em um valor;
- Uma simples impressão de um texto é uma expressão;
- Uma soma ou operação matemática mais complexa também;
- Na construção de um programa ou sistema, é comum utilizarmos incontáveis expressões para formar nosso software;

## O que é um operador?
- Operadores são recursos que utilizamos para compor expressões mais complexas;
- São alguns exemplos de operadores: '+', '-', '**', '/', '++', '>', '<', '>=', '<=', etc;
- Estas operações podem matemáticas ou até mesmo de comparações;
- A ideia principal é que um novo valor é gerado ou mesmo que um booleano seja retornado;

## Ordem de execução de operadores
- O PHP e as linguagens de programação executam os operadores na mesma ordem que na matemática;
- Ou seja, em: 2 + 2 * 4, teremos o resultado de 10;
- Isso se dá pois a multiplicação é avaliada antes da soma, ainda que a primeira operação da expressão seja a soma;
- Se necessário, podemos utilizar parênteses '( )' para separar operações e alterar a ordem de execução;

```php
<?php
  echo 3 + 2 * 5;      //imprime 13
  echo '<br>';  
  echo (3 + 2) * 5;    //imprime 25
?>
```
## Mudança de tipo implícito
- O PHP em certas operações muda o tipo de dado de forma implícita;
- Por exemplo: 5 / 2 = 2.5 (gera um float);
- E 5 . 5 resulta em 55 (gera uma string, o '.' é o operador de concatenação);
- Por isso, temos que tomar cuidado com algumas expressões que podem gerar resultados indesejados;
- Este recurso é chamado de <strong>auto cast</strong>;
- Para verificar qual o tipo de um dado, podemos utilizar a função gettype();

```php
<?php
  if(is_float(5 / 2)) {
    echo 'É float <br>'
  }                              //imprime 'É float'

  if(is_string(2 . 3)) {
    echo 'É string <br>          //imprime 'É string'
  }

  //Qual o tipo de dado resultante da multiplicação de uma string por um inteiro?
  $operacao = "5" * 12;
  echo $operacao . <br>;         //imprime 60
  echo gettype($operacao);       //imprime 'integer'
?>
```

## Operadores aritméticos
- Os operadores básicos da matemática estão presentos no PHP;
- Soma (+), subtração (-), divisão (/) e multiplicação (*)

## Operador de módulo
- O operador de módulo é inserido no código pelo símbolo de '%';
- Sua função é realizar uma divisão, mas apresenta como resultado apenas o resto da mesma;

```php
<?php
  echo 12 % 2;          //imprime 0, pois a divisão é exata
  echo 13 % 2;          //imprime 1, pois é o resto da divisão de 13 por 2
?>
```

## Operador de exponenciação
- Podemos realizar o cálculo de potência com o símbolo '**'
Exemplo: 5 ** 2, desta maneira teremos o resultado de 5 elevado a 2;

```php
<?php
  echo 5 ** 2;          //imprime 25
?>
```

## Operador de concatenação
- Em PHP podemos concatenar valores com '.' (ponto);
- Concatenar é o ato de juntar vários textos e/ou números em apenas uma string;
- Não há limites de quantas expressões podem ser concatenadas;

```php
<?php
  $nome = 'Gabriel';
  $sobrenome = $'Silveira';

  echo $nome . ' ' . $sobrenome;          //imprime "Gabriel Silveira"
?>
```

## Operadores de autoincremento e autodecremento
- Podemos incrementar um valor ou decrementar com os operadores: '++' e '--;
- Exemplo: $n++ ou $x--;
- Onde n e x são variáveis, e terão seus valores alterados com +1 e -1;
- Estes operadores são particularmente úteis em estruturas de repetição;

```php
<?php
  $x = 0;
  echo "$x <br>";          //imprime 0
  $x++;
  echo "$x <br>";          //imprime 1
  $x--;
  echo "$x <br>";          //imprime 0
?>
```

## Operadores de comparação
- As operações com operadores de comparação resultarão em true or false;
Igualdade: '==', compara o valor de dois dados;         
Idêntico a: '===', compara o valor e o tipo dos dados, retornando 'true' quando as duas características forem verdadeiras;
Diferença: '!=';
Não idêntico a: '!==';
Maior e maior ou igual a: '>' e '>=';
Menor e menor ou igual a: '<' e '<=';














