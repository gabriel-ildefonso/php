# Estruturas de repetição
Estruturas de repetição sãõ amplamente utilizadas para que um bloco de código seja executado quantas vezes forem necessárias

## While
- O while é uma das principais estruturas de repetição, pode executar um código n vezes;
- Enquanto a condição estabelecida no while for verdadeira, a instrução será executada;
- Geralmente é necessário um contador para atingir a condição, pois corre-se o risco de se gerar um loop infinito, causando travamento da máquina;

```
  while(condicao) {
    código
  }
```
Uso no PHP:
```php
<?php
//Primeiro, é de boa prática definir o contador que será usado na estrutra de repetição
$i = 0;

//Definição da estrutura
while(x < 10){
  //Aqui ficará o bloco de código que será executado enquanto a condição for verdadeira, ou seja, enquanto x for menor que 10
  echo $x . "<br>";
  //incremento do contador, para que o valor de x seja alterado e o programa não fique em um loop infinito. Nesse caso, vamos incrementar o valor de x em 1 a cada vez que o código for executado
  $x++;
}
/*
Aqui está o retorno da estrutura while acima
0
1
2
3
4
5
6
7
8
9
Note que ao imprimir 9 o valor de x tornou-se 10 e, portanto, a condição do while não foi mais atendida, parando sua execução
*/
```

### Saindo do loop
- Podemos sair de um loop while antes do seu fim, para isso é necessário adicionar a instrução break;
- Quando o break for lido pelo programa, o o loop será automaticamente finalizado;
- Geralmente inserimos esta instrução em uma condição if;

```php
<?php
$x = 0;
while($x < 10){
  echo $x;

  if($x == 5){
    break;
  }
  $x++
}
```

### Loop aninhado (loops dentro de loops)
- Como nas estruturas de if, podemos adicionar um loop dentro de outro;
- O contador deve ser único, para que um loop não afete o outro;
- O loop interno será executado todas as vezes em que o loop externo for;
- E em cada uma das suas execuções, serão passadas todas as suas etapas;

```php
<?php
$i = 1;
while($i < 10){
  echo "loop interno nº $i <br>;
  $i++;

  $j = 1;
  while($j <= 3){
    echo "loop interno nº $j";
  }
  $j++

/*
O retorno será:
loop externo 1
loop interno 1
loop interno 2
loop interno 3
loop externo 2
loop interno 1
...
*/
```
### Instrução Continue
- O continue pula uma execução do loop;
- Quando o interpretador encontrar esta instrução, a próxima etapa do loop será executada;
- Novamente, esta funcionalidade deve ser aplicada dentro de uma estrutura condicional;

```php
<?php
$a = 10;

while($a > 0) {
  if($a == 5 || $a == 7){
    echo "Pulou a execução";
    $a--;
    continue;
  }
  echo "$a <br> ;
  $a--
}

/* Retorno:
10
9
8
6
4
3
2
1
*/
```
## Do while
- o do while é uma estrutra de repetição semelhante ao while, porém com a sintaxe invertida. Isso garante que a instrução será executada pelo menos uma vez, mesmo que a condição do while não seja atendida.
Exemplo:
```php
<?php
$a = 10;

do {
	echo "funciona";
	$a++;

}	while($a > 12);

//Retornará "funciona", apenas uma vez, pois a condição do while não foi atendida sequer uma vez.
```

## For
- A estrutra de repetição for é, sem dúvidas, a estrutura de repetição mais utilizada;
- Sua sintaxe é mais organizada, necessita de apenas uma linha para ser implementada.

Exemplo: <br>
  for (contador; condicao; incremento) {<br>
    codigo<br>
  }<br>

```php
<?php
for ($i = 0; $i < 10; $i++) {
  echo $i;
}

/* Retornará:
0
1
2
3
4
5
6
7
8
9
*/
```
### Loop infinito
- loop infinito é um erro que pode ser ocasionado quando uma estrutura de repetição não tem uma condição de término possível;
- Isso vai fazer o software travar, o que pode interromper a execução de todo um sistema;
- Em um loop infinito, a mesma instrução será executada até que o usuário force a sua parada;
Exemplo:
```php
<?php
while(5 < 10){
echo "Este é um loop infinito"

# Como não há incremento, a mensagem será impressa indefinidamente
```

## Foreach
- foreach também é uma estrutura de repetição, porém ela é orientada a arrays;
- Ela deve ser utilizada para que a estrutura repita (percorra) em todos os elementos do array;
Exemplo:
```php
<?php
$nomes = ['Gabriel', 'Vinícius', 'Olavo', 'Pedro'];

foreach($nomes as nome){
echo "O nome do índice atual é $nome <br>;

*/ Retorno:
O nome do índice atual é Gabriel
O nome do índice atual é Vinícius
O nome do índice atual é Olavo
O nome do índice atual é Pedro
/*






















.
