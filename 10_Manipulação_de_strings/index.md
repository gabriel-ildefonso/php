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

