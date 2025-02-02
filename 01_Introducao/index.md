# Seção 1 - Introdução

## O Que Faz o PHP?

O PHP pode ser dividido em duas vertentes:

- **Programação backend**: Criação de sites dinâmicos, conexão e interação com banco de dados, geração de gráficos, documentos de XML e PDF.
- **Scripts de linha de comando**: Rodar scripts para que ações sejam executadas no computador ou remotamente, administração de sistema ou até mesmo CRONs.

## O que é de fato PHP?

- Uma linguagem de programação que foi desenvolvida para deixar o HTML dinâmico.
- Linguagem de script e open source.
- O foco de PHP é o desenvolvimento web.
- Os programas são executados em server side (lado do servidor, backend).
- PHP significa: Personal Home Page (P) Hypertext Preprocessor.

## Uma Breve História

- O criador da linguagem foi **Rasmus Lerdorf**.
- O ano de lançamento foi **1994**.
- A linguagem já está quase na versão 8, diversas melhorias foram implementadas.
- A ideia principal era deixar o HTML dinâmico, não havia pretensão de ser o que é hoje.
- Quase **80%** dos sites hoje (2020) contêm PHP.

## Instalação PHP no Windows

O PHP pode ser instalado no Windows sem a instalação de ferramentas, porém a própria documentação recomenda o **XAMPP**.

- O XAMPP é um pacote que contém os principais recursos para desenvolvimento web: Apache, MySQL, Pearl e PHP.
- Com o XAMPP conseguimos simular um servidor web de modo fácil e também executar qualquer código PHP.

## Executando o XAMPP

- Após a instalação do XAMPP, devemos colocar os arquivos que serão executados em uma pasta específica.
- O software vem configurado para rodar na pasta `htdocs`, dentro do local de sua instalação.
- Arquivos que estão lá podem ser acessados pelo navegador no endereço `localhost`.
- Lembrando que o servidor precisa estar ligado.
- Para acessar os seus arquivos no localhost, acesse o diretório onde foi instalado o XAMPP no seu computador. Acesse a pasta `htdocs`, nela, crie uma pasta que irá receber os seus projetos. Com o servidor rodando, basta acessar `localhost/nome-da-pasta`.

## O Que é Localhost?

- É a forma de acessar o servidor local da nossa máquina.
- Equivale ao IP `127.0.0.1`, ou seja, nosso PC.
- Assim, podemos simular como se o site ou arquivo que estamos acessando é processado em um servidor.
- IP significa Internet Protocol.

## A Sintaxe do PHP

- O PHP vai interpretar um bloco de código em nosso arquivo apenas se ele estiver entre as tags de PHP.
- A abertura é: `<?php`
- E o fechamento: `?>` (opcional).
- Coloque `;` a cada instrução.
- Todo o código dentro destas tags será executado pelo PHP, e após isso será impresso na tela.
- O que estiver fora das tags será impresso na tela como texto puro.

### Exemplo de Sintaxe

```php
<?php
  echo "Olá, Mundo!";
?>
```

## PHP e suas dependências
- Podemos checar como o PHP e suas dependências estão instaladas no nosso computador;
- O nome da função é ‘phpinfo()’;
- Ela também exibe as versões pacotes instalados;
- Útil para saber como o servidor está configurado;

```php
<?php
  phpinfo();
?>
```

