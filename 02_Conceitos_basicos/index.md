# Seção 2 - Conceitos básicos

## Case Sensitive

- Significa sensibilidade a casas maiúsculas e minúsculas.
- Para instruções PHP, não temos essa diferença, ou seja: `echo == ECHO == EcHo`.
- Porém, para nomes de variáveis, são case sensitive; ou seja, `$nome != $NOME`.
- Obs: Veremos variáveis em detalhes mais adiante.

### Exemplo de Case Sensitive

```php
<?php
echo "Este é um teste"; // Funciona
ECHO "Este também é um teste"; // Funciona
$nome = "João";
$NOME = "Maria";
echo $nome; // Imprime "João"
echo $NOME; // Imprime "Maria"
?>
```

## Instruções de Código
- As instruções simples de PHP são separadas por ponto e vírgula.
- Instruções simples são instruções de uma linha.
- Quando há uma instrução maior, como de condição ou repetição, a definição desta é dada por abertura e fechamento de chaves, nestes casos, não precisaremos de ponto e vírgula.
```php
<?php
  echo "Olá, Mundo!"; // Instrução simples
   if (true) {
    echo "Condição verdadeira"; // Instrução maior com chaves  
  }
?>
```
## Espaços em Branco
- Para interpretação do código em PHP, o espaço em branco é ignorado.
- Isso acontece pois o mesmo é removido antes da execução.
- A quebra de linha também é ignorada.
- Porém, se utilizada de má forma, pode gerar erros inesperados no código.

```php
<?php
    echo     "Espaços em branco são ignorados";
    echo
    "Quebra de linha também";
?>
```

## Comentários em PHP
- Os comentários servem para dar informações e direções importantes de como o código funciona.
- Iniciamos um comentário com // ou #.
- Todo conteúdo que está em um comentário é ignorado na execução.
- Não insira informações sensíveis nos comentários.
- Comentários multilinhas são feitos com /* comentário */.

```php
<?php
  // Este é um comentário de linha única
  # Este também é um comentário de linha única
  /* Este é um
     comentário de
     múltiplas linhas */
  echo "Comentários não aparecem na saída";
?>
```

## Palavras Reservadas
- Algumas palavras são reservadas da linguagem e já têm suas funcionalidades definidas, então não podemos utilizá-las em nossos programas.
- Pois, caso fosse possível, poderíamos substituir a sua função original.
- Exemplos de Palavras Reservadas: echo, insteadof, else, interface, namespace, pow, _DIR_, _FILE_, endif, print, private, protected, and, require, public, as, break, case, for, finally, switch, throw, etc.
