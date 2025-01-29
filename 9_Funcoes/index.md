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
```
Na prática:
```php
<?php
  function media($a, $b){
    	$c = (($a + $b) / 2);
      echo "A média entre $a e $b é $c";
  }
  
  media(35, 77)  //Retornará "A média entre 35 e 77 é 56"
```
- Invocar umma função que requeira parâmetros sem passar os referidos parâmetros causa um erro fatal na execução do programa, interrompendo a sequência de código onde estiver a função invocada de forma indevida.
- De forma semelhante, se uma função requer um parâmetro e ela vier a ser invocada recebendo dois parâmetros, a função irá usar o primeiro parâmetro e ignorar os demais parâmetros desnecessários.



















