# TRABALHANDO COM DATAS

## Função date()
A função retorna a data atual, e recebe como parâmetro a indicação de como a data deve ser informada, como pode se ver no código abaixo:

```php
<?php
  $d = date('d/m/y');
	echo "$d \n";
	
	$d2 = date('D, M, Y');
	echo "$d2 \n";
?>
Retorno:
28/02/25 
Fri, Feb, 2025
```
Existem mais de 20 parâmetros possíveis para a formatação de data na função date(), sendo necessário consultar a documentação para verificar qual a formatação para um caso concreto.

## Função strtotime()
- Recebe uma string como parâmetro, a função tenta interpretar e transformar em data;

```php
<?php
	echo date('d/m/y', strtotime("5 days"));  //retorna 5 dias além de hoje
?>
```

## Função mktime
- A função mktime recebe em seus parâmetros: hora, minuto, segundo, mês, dia e ano;
- Assim podemos criar uma data a partir desta informação;

```php
<?php
	$dob = mktime(18, 55, 00, 10, 22, 1993);
	echo "$dob \n";
	
	$dobFormatada = date('d/m/y', $dob);
	echo $dobFormatada;
?>

Retorno
751316100 
22/10/93
```

## Objeto DateTime
- O objeto DateTime permite tratar a data como um objeto;
- Podemos passar um parâmetro que será a data criada, se não passarmos, a data será a atual;
- Podemos exibir as informações do objeto com print_r, mas os valores das propriedades não são acessíveis;

```php
<?php
	$data = new DateTime();
	print_r($data);
?>

Retorno
DateTime Object
(
    [date] => 2025-02-28 19:48:09.754384
    [timezone_type] => 3
    [timezone] => UTC
)
```

## Métodos format e modify
Os métodos format e modify são da classe DateTime e nos ajudam amanipular os dados nestes objetos;
- format: Formata a data;
- modify: Altera a data;

```php
<?php
	$data =  new DateTime();
	echo $data->format('d/m/y') . "\n";
  echo $data->format('D - M - Y') . "\n";
    
  $data->modify( '+5 days');
  echo $data->format('d/m/y') . "\n";
?>

Retorno
28/02/25
Fri - Feb - 2025
05/03/25
```

## Métodos setDate e setTime
Temos mais dois métodos interessantes em DateTlme: setDate setTime;
- setDate: Recebe ano, mês e dia, alterando completamente a data;
- setTlme: Recebe hora, minuto e segundo, alterando o tempo da data;

```php
<?php
	$data =  new DateTime();
	print_r($data);
	echo "\n";
	
	$data->setDate(1993, 10, 22);
	print_r($data);
	echo "\n";
	
	$data->setTime(18, 55, 00);
	print_r($data);
	echo "\n";
?>

Retorno
DateTime Object
(
    [date] => 2025-02-28 20:06:31.762163
    [timezone_type] => 3
    [timezone] => UTC
)

DateTime Object
(
    [date] => 1993-10-22 20:06:31.762163
    [timezone_type] => 3
    [timezone] => UTC
)

DateTime Object
(
    [date] => 1993-10-22 18:55:00.000000
    [timezone_type] => 3
    [timezone] => UTC
)
```

## Diferenças entre datas
- Podemos calcular a diferença entre duas datas com o método diff;
- O resultado pode ser formatado com format;

```php
<?php
	$dataAtual =  new DateTime();
	
	$dob = new DateTime;
	$dob->setDate(1993, 10, 22);
	
	$diferenca = $dataAtual->diff($dob);
	print_r($diferenca);
	echo "\n";
	
	echo $diferenca->format("%a days");
?>

Retorno
DateInterval Object
(
    [y] => 31
    [m] => 4
    [d] => 5
    [h] => 23
    [i] => 59
    [s] => 59
    [f] => 0.999995
    [invert] => 1
    [days] => 11451
    [from_string] => 
)

11451 days
```

## Comparação de datas
- Datas que foram criadas com o objeto de DateTlme podem ser comparadas utilizando os operadores de comparação;
- Operadores como: >, < ou ==;
- Exemplo: $dataA > $dataB, retornando um valor booleano

## Alterando o fuso horário
- O PHP por padrão vai utilizar o fuso horário da máquina que está sendo executado, ou seja, do servidor;
- Porém podemos alterar manualmente o fuso com a função date_default_timezone_set;
- Esta função recebe como parâmetro o novo fuso horário em string, exemplo: date_default_timezone_set('America/Sao_Paulo')





























