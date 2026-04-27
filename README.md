# 🚀 Sistema de Gestão de Usuários (Projeto de Estudo)

Este projeto foi desenvolvido com o objetivo de praticar **Laravel** e seus principais conceitos, construindo um sistema completo de gerenciamento de usuários com boas práticas de desenvolvimento.

---

## 📋 Funcionalidades

- ✔️ Autenticação (Login e Cadastro)
- ✔️ CRUD de Usuários (criar, listar, editar e excluir)
- ✔️ Controle de acesso com Middlewares
- ✔️ Validação de dados com Form Requests
- ✔️ Soft Deletes (exclusão lógica de registros)

---

## 🛠 Tecnologias Utilizadas

- PHP (v8.4.17)
- Laravel (v13.4.0)
- MySQL (ou compatível)
- Blade (Template Engine do Laravel)
- HTML5
- Tailwind CSS
- Docker (opcional)
- Git & GitHub
- Node.js / NPM (v11.4.2)

---

## 🧠 Conceitos Aplicados

- MVC (Model-View-Controller)
- Eloquent ORM
- Migrations
- Middlewares
- Validação de requisições
- Autenticação com Laravel Breeze

---

## 🚀 Como rodar o projeto

### 🔹 1. Clone o repositório
```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
```
### 🔹 2. Acesse a pasta do projeto
```bash
cd nome-do-projeto
```
### 🔹 3. Instale as dependências
```bash
composer install
npm install
```
### 🔹 4. Configure o ambiente 
```bash
cp .env.example .env
```
Depois, ajuste as configurações conforme o seu ambiente (principalmente banco de dados).

### 🔹 5. Gere a chave da aplicação
```bash
php artisan key:generate
```
### 🔹 6. Execute as migrations
```bash
php artisan migrate
```
### 🔹 7. Inicie o Front-End
```bash
npm run dev
```
### 🔹 8. Acesse o projeto
http://localhost ou utilize o domínio configurado no seu ambiente.
