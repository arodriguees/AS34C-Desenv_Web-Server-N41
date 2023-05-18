# AS34C-Desenv_Web-Server-N41
Projeto Desenvolvimento Web

Allan Rogrigues Clementino,	RA 2163187
Davi Silva Buhrer,			RA 2374102
Vitor Iago Huggler,			RA 2384329

# Fluxo de Caixa Parametrizável

## Criar uma aplicação para controle de fluxo de caixa, utilizando a tecnologia PHP.

<h4 align="center"> 
	🚧  PHP Select 🚀 Em construção...  🚧
</h4>

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[XAMPP para LINUX](https://www.apachefriends.org/pt_br/download_success.html).
Além disto é bom ter um editor para trabalhar com o código, utilizamos o [VSCode](https://code.visualstudio.com/)

### Instalando o XAMPP

Pode ser feito a instalação via linha de commando.

```bash
# Acesse a pasta de Downloads e abra as propriedades do arquivo xampp-linux-VERSAO-installer.
# Em permissões marcar a opção "Permitir execução do arquivo como um programa"

# Acesse a pasta de Download no terminal/cmd
$ cd Downloads/

# Execute o arquivo baixado
$ sudo ./xampp-linux-x64-VERSAO-installer.run

# Na tela do instalador é só clicar em "Avançar" e aguardar a instalação.
# Por fim, mantenha a opção Launch XAMPP e Finalize.
```

### 🎲 Rodando o Back End (servidor)

# Caso a janela do XAMPP esteja fechada, segir o seguinte passo.

```bash
# Acesse a pasta de /opt/lampp no terminal/cmd
$ cd ~
$ cd ../../opt/lampp/

# Execute o comando abaixo
$ sudo ./manager-linux-x64.run
```

# O servidor inciará na porta:80 - acesse <http://localhost/web-servidor/AS34C-Desenv_Web-Server-N41/>

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [PHP](https://www.php.net/)

### Instalando o MySQL Workbench

O download pode ser feito no site [MYSQL Workbench](https://dev.mysql.com/downloads/workbench/), seguindo o passa-a-passo de instalação [Installation](https://dev.mysql.com/doc/workbench/en/wb-requirements.html).

Após o download e configuração, precisamos criar um Server e executar os scripts base para o projeto.

### 🎲 Criando o Banco de Dados (MySQL Workbench)

Executar um por vez.

```SQL
CREATE SCHEMA IF NOT EXISTS `FLUXO`; -- DEFAULT CHARACTER SET utf8;


-- -----------------------------------------------------
-- Table `FLUXO`.`CATEGORIA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FLUXO`.`Categoria` (
  ID INT NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(45) NOT NULL,
  Descricao VARCHAR(100) NOT NULL,
  PRIMARY KEY (ID))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Inserts Table `FLUXO`.`CATEGORIA`
-- -----------------------------------------------------
INSERT INTO FLUXO.Categoria (nome, descricao)
VALUES  ('categoria 1', 'Descricao da categoria 1'),
	('categoria 2', 'Descricao da categoria 2');

-- -----------------------------------------------------
-- Table `FLUXO`.`MetodoPagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FLUXO`.`MetodoPagamento` (
  ID INT NOT NULL AUTO_INCREMENT,
  Nome VARCHAR(45) NOT NULL,
  PRIMARY KEY (ID))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Inserts Table `FLUXO`.`MetodoPagamento`
-- -----------------------------------------------------
INSERT INTO FLUXO.MetodoPagamento (nome)
VALUES ('Boleto'), ('Crédito'), ('Débito'),	('Pix');

-- -----------------------------------------------------
-- Table `FLUXO`.`Lancamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `FLUXO`.`Lancamento` (
  ID INT NOT NULL AUTO_INCREMENT,
  Data_Lancamento VARCHAR(12) NOT NULL,
  Valor DOUBLE NOT NULL,
  Descricao VARCHAR(100) NOT NULL,
  Tipo VARCHAR(45) NOT NULL,
  PRIMARY KEY (ID)
);

-- -----------------------------------------------------
-- Table `FLUXO`.`Lancamento`
-- -----------------------------------------------------
ALTER TABLE FLUXO.Lancamento ADD Categoria_Lancamento INT NOT NULL;

ALTER TABLE FLUXO.Lancamento ADD Pagamento INT NOT NULL;

ALTER TABLE FLUXO.Lancamento 
ADD FOREIGN KEY (Categoria_Lancamento) 
REFERENCES FLUXO.Categoria(ID);

ALTER TABLE FLUXO.Lancamento 
ADD FOREIGN KEY (Pagamento) 
REFERENCES FLUXO.MetodoPagamento(ID);

-- -----------------------------------------------------
-- Insert Table `FLUXO`.`Lancamento`
-- -----------------------------------------------------
INSERT INTO FLUXO.Lancamento (Data_Lancamento, Valor, Descricao, Tipo, Categoria_Lancamento, Pagamento)
VALUES	('07/05/2023', 2.39, 'Pra inteirar no maço de eight', 'Aii zé da mangaaa', 2, 1),
	('09/05/2023', 0.05, 'Depois do eight fiquei pobre...', 'Aaaaai calica', 1, 1);


-- Join para exibir o nome das colunas, e não o ID --
SELECT lan.*, cat.nome Categoria, pag.nome Metodo_Pagamento FROM FLUXO.Lancamento lan
JOIN FLUXO.Categoria cat ON cat.ID = lan.categoria_lancamento
JOIN FLUXO.MetodoPagamento pag ON pag.ID = lan.pagamento 
ORDER BY lan.Data_Lancamento;

```

----------------------------------------------------------------------------------------------------------

As funções atribuidas a cada integrante do grupo foram relacionadas ao nível de conhecimento e/ou praticidade em cada uma das aplicações. Segue listado abaixo as funções de cada membro:

- Allan Clementino: Documentação de configuração e instalação do software: este documento deve mostrar os requisitos para instalação, quais arquivos de configuração devem ser atualizados, como o banco de dados deve ser criado, etc;

- Davi Buhrer: Uso de um sistema de rotas (URL transparente) e o uso do padrão MVC (melhoria do Trabalho 1 para separar a lógica (validações, controle, etc.), a estrutura de dados (entidades, consultas, etc.) e o HTML (apenas apresentação do conteúdo)). 

- Vitor Huggler: Banco de Dados MySQL / MariaDB / Postgres / Outro via PDO;

Em suma, todos os integrantes se ajudaram em tarefas determinadas, tomando a frente em certos casos para aumentar a produtividade.

Este programa em particular ainda não possui a funcionalidade de registro de novos usuários, sendo necessário utilizar o login pré-definido como "admin" e senha "1234" para acessar o sistema.

Para cadastrar um novo lançamento financeiro, é necessário ter previamente cadastrado pelo menos um método de pagamento e uma categoria. Essa funcionalidade permite uma melhor organização e precisão nas informações financeiras do usuário.

É possível apagar métodos de pagamentos e categorias sem que afetem os lançamentos criados com tais métodos de pagamentos e categorias.