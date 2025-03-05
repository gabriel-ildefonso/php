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

## Autoprocessamento de formulários
- Podemos criar uma página que faz o processamento dos dados e também exibe o input de informações;
- Para isso devemos criar um if que checa se o método de requisição ($_SERVER['REQUEST_METHOD']) é GET ou POST;
- Depois criar as duas variações, para cada uma das possibilidades;
- Ou checar se algum parâmetro veio pela requisição e então criar as variações;
- Acompanhe o desenvolvimento na pasta 'autoprocessamento'.

## Preenchimento de formulário com dados da requisição
- Podemos preencher o formulário com dados que vieram da requisição;
- Isso acontece bastante em resultados de busca ou edições de registros;
- Podemos fazer uma checagem de se o dado foi enviado e recebido para a página, e utilizar o echo para exibir no atributo value do input, por exemplo:
```html
  <input type="text" value="<?php echo $nome;?>">
```
- Acompanhe o desenvolvimento na pasta 'preenchimento'.

## Parâmetro com mais de um valor
- Os inputs de checkbox podem conter mais de um valor;
- Para receber todos os eles no backend, precisamos adicionar uma sintaxe de array no name;
- Assim receberemos todos os inputs marcados;
- Exemplo: name="caracteristicas[]"
- Acompanhe o desenvolvimento na pasta 'checkbox'.

## Upload de arquivos
- Para enviar arquivos ao servidor vamos precisar mudar o enctype do formulário para: multipart/form-data;
- Também será necessário um input de tipo file;
- Cuidado: O tamanho do arquivo pode exaurir a memória do servidor;
- Depois do envio, todos os dados da imagem estarão em $_FILES;
- Acompanhe o desenvolvimento na pasta 'upload';

## Validação de formulários
- A validação é uma parte importante do recebimento de dados;
- Devemos checar se os dados enviados condizem com o que estamos esperando;
- Para isso, podemos criar condicionais fazendo as verificações;
- Caso alguma não atenda ou um campo obrigatório esteja vazio, retornamos uma mensagem ao usuário;
- Obs: é possível fazer validações com HTML e também JavaScript;
- Acompanhe o desenvolvimento na pasta 'validacao';

## Mantendo o estado da requisição
- O HTTP é um protocolo que não mantém o estado (stateless);
- Ou seja, após o fim da requisição a conexão entre usuário e servidor é finalizada, a próxima conexão não possui mais relação entre ambos;
- Para conseguir manter estes dados podemos utilizar os cookies;
- O problema desta abordagem é que alguns navegadores não permitem o uso de cookies ou os bloqueiam;

## Conhecendo os cookies
- Os cookies são strings que contém informações;
- A função para adicionar um cookie é setcookie;
- A função deve ser chamada antes do corpo da página, pois envia dados como header (cabeçalho);
- O cookie leva dados como: nome, valor e data de expiração;
- Podemos acessar os cookies de volta com $_COOKIE;

## Conhecendo as Sessions
- Com session podemos criar uma variável que persiste em diferentes páginas e também perdura por várias visitas ao mesmo site;
- A session utiliza recursos de cookies para seu funcionamento, e se o recurso estiver desabilitado propaga a sessão via URL;
- Sessions são utilizadas para: autenticação, carrinho de compras e tudo o que precisa persistir de página em página;
- Acaba sendo o recurso mais utilizado, comparando com o cookie;
- As sessions são salvas em arquivos no computador que estamos ou no servidor da aplicação;
- O caminho para onde os arquivos são salvos fica em php.ini na configuração session.save_path;
- As sessions podem ser salvas em dois formatos: o próprio do PHP e também o Web Distributed Data eXchange (WDDX)
- Acompanhe o desenvolvimento na pasta 'session';

## Introdução ao SSL
- SSL vem de Secure Sockets Layer;
- O PHP não se importa muito e não tem vantagens sobre o SSL;
- Porém garantimos que as requisições de dados entre nosso site e servidor estejam mais seguras com a encriptação dos dados;
- Devemos apenas ter cuidado com os formulários, para que sejam enviados para a URL com HTTPS, pois alguns servidores bloqueiam a conexão HTTP;



















  
