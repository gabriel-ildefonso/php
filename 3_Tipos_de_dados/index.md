# Tipos de dados

## Números inteiros
Os inteiros são os números inteiros da matemática, incluindo os negativos, como: 1, -2, 15;
```php
<?php
  Echo 5
  Echo 5 + 7   //retornará 12
  Echo -12
```

### Verificando se um dado é número inteiro
Podemos validar se um dado é inteiro com a função ‘is_int()’;
Caso um número seja inteiro, será retornado <strong>'true'</strong> (um outro tipo de dado);
Caso não seja, receberemos um retorno de <strong>'false'</strong> (tipo de dado também);
Precisamos utilizar uma estrutura ‘if’ para validar o valor;
```php
If(is_int(9)){
	Echo ‘é um inteiro’;
}
// A função irá imprimir a string ‘é um inteiro, pois 9 é um número inteiro
```

## Números decimais (floats)
- Os floats são todos os números com casas decimais;
- Como o padrão universal é da língua inglesa, temos a separação de casas com ‘.’, e não ‘,’
- Exemplos de floats: 2.123, 0.04, -12.8

### Verificando se um número é float
- Podemos utilizar a função is_float() para verificar se um dado é um float;
- A função recebe um valor como parâmetro;
- Novamente receberemos true or false, dependendo do dado enviado;
- Precisamos utilizar uma estrutura If para validar o valor;

```php
<?php
$numero = 2.123;
if (is_float($numero)) {
    echo 'é um float'; // Imprime 'é um float'
} else {
    echo 'não é um float';
}
?>
```

## Strings
- Os textos são conhecidos como strings;
- Em PHP podemos escrever textos em aspas simples ou duplas, não há diferença para texto puro;
- As aspas duplas interpretam variáveis (interpolação);
### Verificando se um dado é strindg

- Podemos utilizar a função is_string() para verificar se um dado é uma string;
- A função recebe um valor como parâmetro;
- Novamente receberemos true or false, dependendo do dado enviado;
- Precisamos utilizar uma estrutura If para validar o valor;

```php
<?php
$numero = 5;
if (is_float($numero)) {
    echo 'é um float';
} else {
    echo 'não é um float'; // Imprime 'não é um float'
}
?>
```

## Booleanos
- O boolean é um tipo de dado que só possui dois valores:
- True - verdadeiro;
- False - falso;
- Alguns valores são considerados como falsos: 0, 0.0, "0", [], NULL;

```php
<?php
echo true;	//imprime 1
echo false;	//nada é impresso
if(true){
  echo 'é verdadeiro';	//a string será impressa
}
if(5 > 2){
  echo 'é verdadeiro';	//a string será impressa
}
?>
```

### Verificando se dado é verdadeiro
- Podemos utilizar a função is_bool() para verificar se um dado é um boolean;
- A função recebe um valor como parâmetro;
- Novamente receberemos true or false, dependendo do dado enviado;
- Precisamos utilizar uma estrutura if para validar o valor;

```php
<?php
$a = true;

if(is_bool(a)){
  echo "É um booleano";	//a string será impressa
}

if(0 == false){
  echo '0 é considerado falso!';  //a string será impressa
}

if(is_bool(0)){
  echo 'é booleano'; //a string não será impressa, 0 é número
}
?>
```

## Arrays (conjuntos, listas)
- O array é um tipo de dado que serve para agrupar um conjunto de valores;
- Podemos inserir qualquer tipo de dado na lista;
- A sintaxe é: [1, 2, 3, 4, 5];
- Valores sempre entre [ ], dados separados por ',';
- Veremos arrays em mais detalhes futuramente, é uma estrutura de dados muito importante e muito utilizada;

```php
<?php
$a = [1, 2, 3]
//não é possível utilizar 'echo' para imprimir um array, echo destina-se a impressão apenas de strings. É necessário, portanto, converter o array para string, isso pode ser feito com a função <strong>print_r()</strong>
print_r($a)	//imprime Array([0] => 1 [1] => 2 [2] => 3)
//É possível acessar cada elemento do array individualmente, utilizando seu índice. Arrays sempre começam com índice 0.
echo $a[0]	//imprime 1
?>
```

### Arrays associativos
- O array associativo é basicamente um array, porém com chave e valor;
- A estrutura base é a mesma, mas utiliza a estrutura chave => valor, sendo construído dessa maneira:
- Chave entre aspas, seta para apontar o valor e valor;
  
$arr = ['nome' => 'Matheus', idade => 29]

```php
<?php
$arr = [
  'nome' => 'Shark',
  'patas'=> 4,
  'cor'  => 'marrom',
]

echo $arr[nome];	//imprime 'Shark'
?>
```

## Objetos
- PHP possui o paradigma de orientação a objetos;
- Podemos criar classes, que são como moldes para criação de objetos, o objeto é considerado um tipo de dado;
- Objetos possuem métodos que são suas ações e propriedades que são suas características;

  ```php
  <?php
   class Pessoa {
      function falar(){
        echo 'Olá, pessoal!".
      }
    }

   $gabriel = new Pessoa();
   $gabriel->nome = "Gabriel";

   echo $gabriel->nome;	//imprime "Gabriel"
   $gabriel->falar();	//imprime 'Olá, pessoal!'
  ?>
  ```

## Tipo de dado Null
-   O tipo de dado Null tem apenas um valor, o NULL;
-   Um caso de uso do Null seria checar se uma variável tem ou não valor;
-   Podemos checar se um valor é null com is_null();

```php
<?php
  echo NULL;	//nada é impresso

  $nome = NULL;

  if(is_null($nome)){
    echo "o valor é nulo"	//imprime 'o valor é nulo'
  }
?>
```

