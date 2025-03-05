# PHP E A WEB

## Introdução ao HTTP
- A web roda em cima do protocolo HTTP (HyperText Transfer Protocol);
- Quando um navegador solicita uma página web é feito um request HTTP, uma requisição ao servidor no qual a página está hospedada;
- Esta requisição recebe uma resposta, ambos podem possuir um body;
- A resposta contém um header (cabeçalho), que é constituído pelo método (GET, POST), arquivo/path solicitado (index.php, por exemplo) e versão do protocolo HTTP (HTTP/l.x);
- Basicamente, uma requisição é enviada e uma resposta é recebida;

## Métodos HTTP
As requisições que enviamos também contém métodos, alguns deles são:
- GET: Solicita a apresentação de um recurso (ex: visualização de uma página);
- POST: Envio de dados ao servidor (ex: cadastro de usuário);
- PUT: Atualização de dados;
- DELETE: Remoção de dados;
- PATCH: Atualização de dado específico;

## Variáveis globais do PHP
Para lidar com estas requisições o PHP nos dá algumas variáveis globais:
- $_ENV: variáveis de ambiente;
- $_GET: Parâmetros que foram enviados por request GET;
- $_POST: Parâmetros que foram enviados por POST;
- $_COOKIE: Valores de cookies;
- $_SERVER: Informações sobre o servidor;
- $_FILES: Informações sobre os arquivos que vieram por upload;

## Variável $_SERVER
Como dito anteriormente $ SERVER tem diversas informações importantes sobre o servidor: 
- SERVER_SOFTWARE: Identificação do servidor;
- SERVER_NAME: Hostname, DNS ou IP do servidor;
- SERVER_PROTOCOL: Protocolo do servidor;
- SERVER_PORT: Porta do servidor;
- QUERY_STRING: Argumentos após o ? na URL;

## Teoria do processamento de formulários
- Vamos realizar processamentos de formulário de duas maneiras: via GET e via POST;
- Com o GET vamos processar os parâmetros que vem na query string, ou seja, na URL;
- Com o POST vamos processar as informações que vem na requisição, estas não aparecem na URL;
- Exemplos de uso: Buscas => GET; cadastro de usuário => POST

## Formulários com GET
- Vamos precisar criar um formulário e definir o método como GET, e também o arquivo ou rota que vamos acessar em action;
- No lado do servidor vamos acessar a variável $_GET que contém os parâmetros enviados para o servidor;
- Faremos o processamento e retornamos algo para o usuário;
- Acompanhe o desenvolvimento na pasta 'get'.

## Formulários com POST
- Vamos precisar criar um formulário e definir o método como POST, e também o arquivo ou rota que vamos acessar em action;
- No lado do servidor vamos acessar a variável $_POST que contém os parâmetros enviados para o servidor;
- Faremos o processamento e retornamos algo para o usuário;
- Acompanhe o desenvolvimento da pasta 'post'.





















  
