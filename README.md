## Descrição sobre o projeto

Sistema web de gerenciamento de publicações desenvolvido com Laravel. O projeto implementa um CRUD completo (Criar, Listar, Editar, Deletar) de artigos, com interface construída usando Blade e Bootstrap. A aplicação permite cadastrar um título (campo obrigatorio), conteúdo e status (ativo/inativo) para cada publicação.


## Tecnologias Utilizadas:

- PHP 8+
- Laravel
- Blade (motor de templates)
- Bootstrap 5.3 – para layout responsivo
- MySQL – banco de dados relacional
- CSS customizado – via arquivo style.css
- Git/GitHub – versionamento e hospedagem


## Pré-Requisitos:

- PHP 8.x
- Composer
- MySQL
- Git


## Passo a passo para rodar o projeto

Clone o projeto
```sh
git clone https://github.com/eamodev/gerenciamento-artigos.git gerenciamento-artigos
```
```sh
cd gerenciamento-artigos
```

Instale as dependências do projeto
```sh
composer install
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

Configure seu Banco de Dados no arquivo .env
```sh
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui
```

Rode as migrates
```sh
php artisan migrate
```

Inicie o servidor
```sh
php artisan serve
```

Acesse em http://localhost:8000/publicacoes.