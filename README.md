# Sistema de Sorteio de Amigo Secreto

Esse sistema compõe um CRUD feito com o framework Laravel em sua versão 11, onde podemos cadastrar, listar, excluir, editar os usuários e também realizar um sorteio de modo ramdomico onde sera sorteado seu amigo secreto,sistema foi realizado seguindo todas validações de segurança e também seguindo os conceitos de clean code. 

## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/Francielabreu/logsmart_test.git
```

Entre no diretório do projeto

```bash
  cp .env.example .env
```

Instale as dependências

```bash
  composer install
```

Inicie o servidor

```bash
  php artisan serve
```

Atualize as variáveis de ambiente do arquivo .env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_logsmart
DB_USERNAME=root
DB_PASSWORD=

```



## Stack utilizada

**Front-end:** TailwindCSS

**Back-end:** PHP, Laravel versão 11.0

