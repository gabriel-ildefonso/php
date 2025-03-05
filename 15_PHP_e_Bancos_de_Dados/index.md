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

















































