# 🚀 Sistema de Gestão de Usuários (Projeto de Estudo)

Este projeto foi desenvolvido como parte do meu aprendizado em **Laravel**, focado na criação de um sistema robusto de administração de usuários. Nele, apliquei conceitos essenciais de desenvolvimento web moderno e segurança.

## 📋 Funcionalidades

* **Autenticação Completa:** Sistema de Login e Cadastro de novos usuários.
* **CRUD de Usuários:** Listagem, criação, edição e exclusão de registros.
* **Controle de Acesso (Middlewares & Gates):** * Filtro `auth` para proteger rotas privadas.
    * Middleware customizado para permitir que apenas administradores realizem ações sensíveis (ex: Exclusão).
* **Validação de Dados:** Uso de *Form Requests* para validação de segurança no lado do servidor.
* **Soft Deletes:** Implementação de exclusão lógica (os dados permanecem no banco, mas ficam ocultos na aplicação).

## 🛠 Tecnologias e Ferramentas

* **Linguagem:** PHP 8.x
* **Framework:** Laravel 10/11
* **Frontend:** HTML5 & Tailwind CSS
* **Banco de Dados:** MySQL
* **Ambiente:** Docker
* **Versionamento:** Git & GitHub

## 🏗️ Conceitos Praticados

Durante o desenvolvimento, utilizei diversas ferramentas da CLI do Laravel (**Artisan**):

* `php artisan make:controller`: Organização da lógica de negócio.
* `php artisan make:model -m`: Mapeamento de tabelas e criação de migrations.
* `php artisan make:middleware`: Criação de filtros de acesso personalizados.
* `php artisan make:request`: Centralização das regras de validação.
* `php artisan migrate:fresh`: Gerenciamento e reset do esquema do banco de dados.

## 🚀 Como rodar o projeto

1.  Clone o repositório:
    ```bash
    git clone [https://github.com/seu-usuario/nome-do-repositorio.git](https://github.com/seu-usuario/nome-do-repositorio.git)
    ```
2.  Instale as dependências do PHP:
    ```bash
    composer install
    ```
3.  Configure o arquivo `.env` com suas credenciais de banco de dados.
4.  Execute as migrations:
    ```bash
    php artisan migrate
    ```
5.  Inicie o servidor local:
    ```bash
    php artisan serve
    ```
