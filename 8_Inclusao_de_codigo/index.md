# Inclusão de código

O php possui uma funcionalidade interessante: é possível incluir arquivos php em outros arquivos php. Com isso é possível reaproveitar código, criando, por exemplo, o template de um site, separando o cabeçalho da página, o rodapé, etc. Com isso, ganha-se eficiência no reaproveitamento de código já desenvolvido. Veremos a seguir as maneiras de se incluir código php.

## Include
- Com o include inserimos um arquivo de PHP, ou até mesmo um HTML, em outro;
- Podendo assim utilizar tudo que está declarado no arquivo incluído;
- O include não gera erro fatal se o arquivo não existir, e sim um warning;
Veremos abaixo como incluir dados do componente pai em um arquivo (componente) filho:

No componente pai.php, que doará o código:
```php
<?php
  <h1>Testando o include</h1>
?>
```

No componente filho.php, que receberá o código:
```php
<?php
  include pai.php
?>

<p>Após o include</p>
```
Para utilização novamente de código do componente pai, basta abiri as tags php (<?php) e invocar o trecho de código do componente incluído

## Require
- Com o require também podemos inserir um arquivo de PHP, ou até mesmo um HTML, em outro;
- Podendo assim utilizar tudo que está declarado no arquivo incluído;
- Diferentemente do include, o require gera erro fatal se o arquivo invocado não existir, parando o script, o que pode não ser interessante em aplicações com muitos módulos e de maior complexidade;

No componente pai.php:
```php
<?php
  <div>
    <h1>Aqui você encontra os melhores produtos!</h1>
    <p>Canetas a partir de R$1,00</p>
  </div>
```

No componente filho.php:
```php
<p>Testando o require</p>
  <?php
    require filho.php;
  ?>
<p>Fim do require</p>
```
Para acessar arquivos dentro de pastas, basta passar o caminho do arquivo desejado entre aspas. O caminho deve ser informado como se partindo da pasta do arquivo que chama o outro arquivo, ou seja, partindo do diretório do arquivo filho.php. Para tanto, usa-se a expressão "__DIR__", para indicar que estamos partindo do diretório do arquivo em uso conforme exemplo abaixo:
```php
  require __DIR__ . "pasta/arquivo.php"
```

## Include_once e require_once
- Os dois funcionam da mesma maneira que require e include, porém impedem que o mesmo arquivo seja adicionado mais de uma vez na mesmo página;
- Este pode ser o método mais indicado quando estamos montando templates com PHP;
- Usando o require_once ou include_once, a segunda e demais vezes em que o código de outro arquivo for inserido serão ignoradas. Usando o require e include, a cada vez que for feita a inclusão o código será incluído.

## Short tags
- A short tag é uma funcionalidade para adicionar código PHP em uma página;
- Este recurso, no entantom, depende de uma configuração do servidor para funcionar. Por esse motivo seu uso é desencorajado, afinal,  pode ser que o código não funcione;
- A diferença é muito pequena, ao invés de se usar "<?php (...) ?>", usa-se "<? (...) ?>". Mas na vale a pena, visto que nem mesmo no XAMPP esse recurso é habilitado de forma nativa.

### Habilitando short tags no XAMPP
1 - No painel de controle do XAMPP, na linha referente ao Apche, clique no botão 'Config', e, em seguida, selecione a opção 'PHP (php.ini)'
2 - Localize a linha com a instrução 'short_open_tag=Off' e altere de 'Off' para 'On'

## Exibição de conteúdo
- É uma técnica semelhante ao short tags, podemos exibir conteúdo sem o echo;
- É uma boa opção para resumir as chamadas PHP apenas para exibição de valores;

```php
<?php
  $nome = 'Gabriel';
?>

<form action=''>
  <div>
    <input type='text' value="<?= $nome; ?>">
  </div>
 #Dessa forma o campo do formulário já virá preenchido com o valor de $nome;
 ```

## Inserindo PHP no HTML
- Como demonstrado anteriormente, esta é uma das principais funcionalidades PHP;
- Podemos inserir código dinâmico entre as tags;
- As extensões para este tipo de arquivo podem ser de .php ou .phtml (para indicar que é um html que recebe php);
Exemplo:
 ```php
<h1><?= $titulo ?></h1>
```
Demonstrando com um exmplo prático:

No arquivo backend.php:
```php
<?php
  $nome = 'Gabriel';
  $produtos = ['Computador', 'Monitor', 'Teclado'];
?>
```

No arquivo index.php
```php
<?php
  include_once "backend.php";
?>

<h1>Seja bem-vindo ao nosso site</h1>
<p><?=$nome; ?>, veja nossas ofertas

<h2>Confira nossos principais produtos:</h2>
<ul>
  <php foreach($produtos as $produto): ?>
  <li><?= $produto;?></li>
  <?php endforeach; ?> #é necessário encerrar o foreach quando este for inserido em um trecho de html
</ul>
```





















