# Estruturas de controle

## If
- A estrutura If checa se uma expressão é verdadeira;
- Podemos incluir operadores lógicos nas expressões;
- Exemplo: if(expressão) { // bloco de código },

```php
<?php
  if(5 > 2){
    echo 'É verdadeiro'
  }
  //a string 'É verdadeiro' será impressa, pois a condição da estrutura if foi satisfeita, ou seja, retornou true

  if( 10 % 3 == 0) {
    echo 'É verdadeiro'
  }
  //nada será impresso, pois a divisão de 10 por 3 não é uma divisão exata.
?>
```

## Else
- A estrutura else pode executar um outro bloco de código, isso acontece quando a expressão de if é falsa;
- Funciona como o 'senão';
- Em else não inserimos expressões;
```
if (exp) {
  //código
} else {
  //código
}
```

```php
<?php
  if( 10 % 3 == 0) {
    echo 'É verdadeiro'
  } else {
    echo 'É falso
  }
  //será impressa a string 'É falso', pois a condição do if não foi satisfeita
?>
```

## If aninhado
- Podemos também inserir um if dentro de outro;
- Neste caso o segundo bloco precisa apenas ficar dentro do primeiro if;
- Caso a expressão do primeiro if retorne verdadeira, o programa passará à verificação do segundo if. <b>São checagens sucessivas</b>.
Exemplo:
```
if(expressão) {
  if(expressão) {
  //
  }
}
```

## Else if
- Com o else jf podemos criar um novo bloco de expressão;
- Este bloco será executado caso o primeiro if seja falso;
- O else if fica entre o if e o else;
- Na prática, serve para iniciar um novo if caso o primeiro if retorne falso;
Exemplo:
```
if(expressão) {
  //código
} else if(expressão) {
  //código
}
```

## Switch
- switch é uma estrutura de condição, que pode substituir o if em alguns casos;
- Podemos adicionar a instrução break, para ele não ser mais executado;
- Há a possibilidade também de adicionar a instrução default, que é executada caso nenhuma condição seja satisfeita;
```php
<?php
  $idade = 21;
  switch($idade) {
    case $idade < 18:
      echo 'É menor de idade';
      break;
    case $idade >= 18:
      echo 'É maior de idade';
      break;
    default:
      echo: não foi possíve
  }
?>
```
