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
