# Manipulando arrays

## Adicionando itens a um array
- Podemos criar novos índices com dados em um array, basta por o nome do array com o novo índice em colchetes e atribuir um valor;
- Ex: $arr[1] = "teste";
- E em arrays associativos basta utilizar o nome da nova chave com a atribuição de valor;

## Adicionando valores ao fim do array
- Podemos adicionar valor ao fim de um array utilizando a atribuição sem determinar um índice;
- Então o valor atribuído será enviado para o último e novo índice do array;
- Exemplo: $arr[] = 5;

## Criando um array mais rápido
- Podemos utilizar a função range para criar um array de forma rápida com a função 'range()';
- Exemplo: range(l, 10);
- Um array de 1 a 10 será criado, e podemos atribuir este valor a uma variável;
- Sintaxe: range(valor_inicial, valor_final, step)

## Número de elementos de um array
- Podemos obter o número de elementos de um array com a função count;
- Basta passar o array como argumentoe um inteiro será retornado como a quantidade de elementos do array informado;
```php
<?php
  $arr = range(1, 10);
  echo count($arr)      //imprime 10
?>
```
## Arrays multidimensionais
- Quando inserimos arrays dentro de arrays formamos um multidimensional, também conhecido como matriz;
- Para acessar este tipo de array também utilizamos índices, acessando o externo e depois os internos;
-  Ex: $arr[1][0] => Primeiro elemento do segundo array;















