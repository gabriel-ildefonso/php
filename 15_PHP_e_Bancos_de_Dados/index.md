# PHP e Bancos de Dados

## Introdução
- O PHP tem suporte para mais de 20 bancos de dados;
- O mais comum a ser utilizado é o MySQL;
- Há algumas formas de conexão a bancos disponíveis no PHP, a mais famosa é o PDO (PHP Data Objects), porém também temos a mysqli;
- PDO costuma ser implementado por causa da abordagem orientada a objetos e outras vantagens sobre a mysqli;

## Bancos de dados relacionais
- O banco de dado relacional tem sua principal característica trabalhar com tabelas;
- Cada tabela possui colunas que categorizam os dados, que são inseridos nas tabelas;
- O PHP é muito utilizado com DBS relacionais, como o MySQL, por exemplo;
- A linguagem para operações com estes bancos é a SQL;
- As instruções em SQL costumam ser escritas em letras maiúsculas;

## Criando bancos de dados
- Podemos criar bancos de dados manualmente em softwares como o phpMyAdmin ou por SQL;
- Para criar bancos vamos utilizar o: CREATE DATABASE nomedobanco;

## Removendo bancos
- Podemos também remover os bancos, ou seja deletá-los do sistema;
- Isso fará com que todos os dados e tabelas sejam perdidos, então tome cuidado;
- O comando para deletar bancos é: DROP DATABASE nomedobanco;

## Tipos de dados no SQL
Os tipos de dados do banco funcionam como os tipos de dados de variáveis, porém em vários 'níveis' para a melhor performance;
- VARCHAR: texto de 0 a 65535 caracteres;
- TEXT: texto com no máximo 65535 bytes;
- INT: números inteiros;
- BIGINT: números inteiros com maior proporção que o INT;
- DATE: data no formato YYYY-MM-DD

## Criando tabelas
As tabelas ficam dentro dos bancos, e os dados ficam dentro das tabelas, ou seja, é uma parte fundamental do banco relacional;
- Podemos criar tabelas facilmente por SQL,o comando é:
```sql
CREATE TABELA nome (
  coluna tipodedado,
  coluna2 tipodedado
);
```
## Removendo tabelas
Há também a possibilidade de remover tabelas do banco, os dados serão removidos para sempre. O comando para deletar tabelas é:
```sql
DROP TABLE nome;
```

## Modificando tabelas
- Podemos alterar uma tabela já criada, com algumas operações: adicionar coluna, remover coluna, modificar coluna;
- Normalmente o banco não costuma mudar após a sua criação, a operação mais provável é a adição de colunas;
- Comandos de alterar tabelas começam com:

```sql
ALTER TABLE nome
ADD/DROP COLUMN/MODIFY COLUMN nome
```

## Constraints
- Constraints são características que podem ser adicionadas na hora da criação de uma tabela;
- Podemos definir: campos que não podem ser nulos, campos únicos, chaves primárias e mais;
- O comando fica após o tipo da coluna: coluna tipodedado constraint,

### Not null
- A NOT NULL é uma constraint que não permite que o dado adicionado a esta coluna esteja vazio;
- Exemplo: nome VARCHAR(100) NOT NULL

### Unique
- A UNIQUE é uma constraint que garante que todos os valores da coluna que foram adicionados sejam únicos;
- Lembrando que podemos unir várias constraints;
```sql
nome VARCHAR(IOO) UNIQUE
email VARCHAR(255) NOT NULL UNIQUE;
```

### Primary key
- As chaves primárias devem ter valores únicos e não podem ser nulas, geralmente colocadas na coluna de ID;
- Uma tabela só pode ter uma PRIMARY KEY;

```sql
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
```

## Inserindo dados
- Para inserir dados vamos utilizar a instrução INSERT;
- Devemos determinar a tabela, colunas e também os dados que serão inseridos;
```sql
INSERT INTO tabela (coluna, coluna2) VALUES (valor, valor2);
```

## Selecionando dados
- Para selecionar dados vamos utilizar a instrução SELECT;
- Devemos determinar a tabela e as colunas que serão selecionadas;
- Podemos utilizar o * para selecionar todas as colunas;
```sql
SELECT * FROM tabela;
```

## Selecionando dados com WHERE
- O WHERE é uma cláusula utilizada para filtrar registros;
- Vamos poder resgatar os dados que batem apenas com as características que estamos procurando;
- Exemplo:
```sql
SELECT colunas
FROM tabela
WHERE condição;
```

## Condicionais AND, OR e NOT
- Os operadores AND, OR e NOT são semelhantes aos do PHP e podem auxiliar o WHERE a filtrar mais ainda os dados;
- Podemos utilizar os operadores em conjunto;
- Exemplo:
```sql
WHERE condicao AND condica02
```

## Ordenando resultados
- Com o ORDER BY é possível ordenar o retorno com base em alguma coluna;
- Podemos ordenar de forma crescente (ASC) ou descendente (DESC)
```sql
ORDER BY email ASC;
```

## Atualizando dados
- Para atualizar dados em uma tabela vamos utilizar a instrução UPDATE;
- Precisamos determinar a tabela, colunas e valores;
- Obs: Um UPDATE sem WHERE vai atualizar todos os dados da tabela;
Exemplo:
```sql
UPDATE tabela
SET colunal = valor 1
WHERE condicao;
```

## Deletando dados
- Para deletar dados de uma tabela vamos utilizar o DELETE FROM;
- DELETE sem WHERE vai deletar todos os dados da tabela;
Exemplo:
```sql
DELETE FROM tabela
WHERE condicao;
```

## Criando usuários
- Podemos criar usuários no banco, depois utilizá-los para conectar e realizar as queries;
- Além de criar precisamos adicionar os privilégios;
Exemplo:
```sql
CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'senha';
GRANT ALL PRIVILEGES ON *.* TO 'usuario'@'localhost';
FLUSH PRIVILEGES;
```

# mysqli x PDO
- O mysqli é uma extensão do próprio PHP para conectar ao banco MySQL, e tem uma proximidade do código nativo, sendo mais rápida do que a PDO;
- PDO é uma API para conexão de bancos de dedos, não limitada ao MySQL, que abstrai alguns conceitos com código PHP tornando esta abordagem mais lenta;
- Ambas as formas podem ser utilizadas da forma orientada a objetos;

## Conectando com mysqli
- Para conectar ao MySQL com o mysqli é muito simples, precisamos utilizar a função mysqli_connect;
- Passar os parâmetros de: host, usuário, senha e banco de dados;
- Com a conexão feita podemos utilizar as queries;
```php
$conn = new mysqli("host", "user", "pass", "db");
```
- Acompanhe o desenvolvimento na pasta 'mysqli_connection'

## Erro na conexão
- Para verificar se houve algum erro na conexão podemos utilizar a propriedade connect_errno;
- E para verificar o erro podemos utilizar o método connect_error()
- Podemos inserir a checagem em um if e mostrar a mensagem de erro com um echo, por exemplo;
- Acompanhe o desenvolvimento na pasta 'erro_connection'

## Excutando uma query
- Para executar uma query vamos usar o método query;
- Ele deve ser utilizado a partir do objeto que fez a conexão;
- Vamos receber um determinado retorno como resultado, que podem ser os dados, caso seja um SELECT, por exemplo;
- É importante ao fim de todas as queries fechar a conexão, com o método close;
- Conexões abertas gastam recursos do servidor e prejudicam a aplicação;

```php
<?php
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);
print_r($result)
$conn->close()
```

## Criando e deletando tabelas com mysqli
- Para criar e deletar tabelas vamos utilizar as mesmas queries de SQL puro, porém com o auxílio do método query;
- DROP TABLE para deletar tabelas;
- CREATE TABLE para criar tabelas;
- Lembre-se de fechar a conexão!
```php
<?php
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$conn->query($sql);
$conn->close()
```

## Inserindo dados
- Para inserir dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;
- A instrução para inserir dados é a INSERT INTO;
- Devemos passar a tabela, colunas e valores;
```php
<?php
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$table = "itens";
$nome = "Xícara";
$descricao = "Xícara de porcelana chinesa do século XIX";

$sql = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($sql);
$conn->close()
```

## Selecionando dados com mysqli
- Para resgatar dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método query;
- A instrução para inserir dados é a SELECT;
- Vamos inserir o método query em uma variável, que é onde receberemos os resultados;
- Com o método fetch_assoc, transformamos os resultados em um array;

```php
<?php
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$sql = "SELECT * FROM itens";
$result = $conn->query($sql);
$conn->close()

//UM RESULTADO
$item = $result->fetch_assoc

//TODOS OS RESULTADOS
$itens = $result->fetch_all()

print_r($itens)
```

## Prepared statements
- Prepared statements é quando criamos uma query com placeholders em vez dos valores reais;
- Aumentando a segurança e a performance da requisição;
- Neste caso o fluxo muda um pouco, vamos utilizar o método prepare para preparar a query;
- O bind_param para resgatar os parâmetros, e o execute para rodar a query;

## Inserindo dados com prepared statements
- Para inserir dados com prepared statements vamos seguir a ideia do tópico anterior;
- prepare => bind_param => execute;
- Como teremos uma variável para guardar estes três passos, também devemos fechar a conexão desta variável;
- Ela é comumente chamada de statement; (declaração)
- Lembre-se de fechar a conexão;

```php
<?php
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$nome "suporte de microfone" ;
$descricao = "O suporte é novo e foi feito na China";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");
$stmt->bind_param("ss", $nome, $descricao); //s = string, i = integer, d = double
$stmt->execute()
```

## Selecionando dados com prepared statements
- Para selecionar dados com prepared statements devemos resgatar os dados com o método fetch_all;
- A sequência será: prepare => bind_param => execute => get_result => fetch_all;
- E depois devemos fechar a conexão;

```php
<?php
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 4;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_all() ;
$stmt->close();

print_r($data);
```

## Resgatando apenas uma linha
- Para os selects que precisamos de apenas um dado retornado, podemos utilizar o fetch_row;
- Este método pode ser inserido depois de obter o resultado, ou seja, após get_result;
```php
<?php 
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 4;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$data = $result->fetch_row() ;
$stmt->close();

print_r($data);
```

## Atualizando dados com prepared statement
- Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;
- Na hora de inserir o SET para atualizar os campos, vamos inserir os prepared statements;
- Sequência: prepare => bind_param => execute;
```php
<?php 
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 4;
$stmt = $conn->prepare("UPDATE itens SET nome=?, descricao=? WHERE id=?");

$nome = "sofá";
$descricao = "sofá de madeira de demolição";
$stmt->bind_param("ssi", $nome, $descricao, $id);
$stmt->execute();
$stmt->close();

print_r($data);
```

## Deletando dados com prepared statements
- Para atualizar dados vamos seguir os mesmos passos de INSERT e SELECT;
- Na hora de inserir o WHERE para remover os registros, vamos inserir os prepared statements;
- Sequência: prepare => bind_param => execute;
- Lembrando que DELETE sem WHERE, causa a remoção de todos os registros;

```php
<?php 
$host = "localhost";
$user = "root";
$pass = "2wedf";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 4;
$stmt = $conn->prepare("DELETE FROM itens WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$conn->close();
```

# Habilitando a PDO
- Antes de começar a de fato utilizar a PDO, é necessário checar se a lib está habilitada;
- Vamos checar no php.ini por duas linhas, e descomentar caso estejam: php_pdo php_pdo_mysql

## Conexão ao banco de dados com PDO
- A conexão com é um pouco diferente do mysqli, PDO mas vamos informar basicamente os mesmos parâmetros;
- Que são: banco de dados, host, nome do banco, usuário e senha;
- Exemplo: $conn = new PDO("mysql:host=localhost;dbname=teste", $user, $pass);
```php
<?php
$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db, $user, $pass");
```

## Inserindo dados com PDO
- Em PDO vamos utilizar uma abordagem parecida com o mysqli;
- Utilizaremos o método prepare para realizar a query com prepared statements;
- Depois bind_param para estabelecer os valores dos parâmetros;
- Por fim execute fará a execução da query;
$stmt = $con->prepare("INSERT INTO x(a, b) VALUES(?,?)")

```php
<?php
$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db, $user, $pass");

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Suporte de monitor";
$descricao = "Suporte novo e na caixa";

$stmt->bindParam(":nome", $nome) ;
$stmt->bindParam(":descricao",  $descricao) ;

$stmt->execute();
```

## Atualizando dados com PDO
- Para atualizar a abordagem também é parecida;
- Vamos seguir com a sequência: prepare => bind_param => execute
- E então a query persistirá no banco: $stmt = $con->prepare("UPDATE x SET a=?, b=? WHERE c=?")

```php
<?php
$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db, $user, $pass");

$id = 5;
$nome = "Teclado Microsoft";
$descricao = "Teclado novo e na caixa";

$stmt = $conn->prepare("UPDATE itens SET nome=:nome, descricao=:descricao WHERE id=:id");
$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
```

## Selecionando dados com o PDO
- Para selecionar dados a abordagem também é parecida com mysqli;
- Vamoa seguir com a sequência: prepare => bind_param => execute
- Porém, para o resgate dos dados temos dois métodos:
- fetch: recebe apenas a primeira ocorrência;
- fetchAll: recebe todos os dados;

```php
<?php
$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db, $user, $pass");

$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id ");

$stmt->bindParam(":id", $id);
$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);
```









































