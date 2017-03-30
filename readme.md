<p>Projeto criado para demonstrar o funcionamento de um ACL (Lista de Controle de Acesso)</p>
Arquivos alterados:
    model->Role.php
    model->Permission.php
    model->User.php
    database/migrations/create_roles_permissions_table.php
    routes/web.php
    app/Providers/AuthServiceProvider.php
    resources/views/welcome.blade.php
    resources/views/errors/403.blade.php
    resources/views/errors/404.blade.php


Criado uma tabela "ROLES" que guarda os papéis dos usuários EX: Administrador, usuario, clientes etc...
Criado uma tabela "PERMISSIONS" que guarda os tipos de permissão EX: edit, delete etc...
Criado tabela "permission_role" que liga as ROLES com as PERMISSIONS "tabela de muitos para muitos"
Criado tabela "role_user" que liga o usuário ao seu papel "tabela muitos para muitos"

Criado relação muitos para muitos entre as Models:
Role <--> User
Role <--> Permission

No Provider "AuthServiceProvider" criado um GATE dentro do método "BOOT" para fazer a verificação das permissões.



Link da informação ( https://www.youtube.com/watch?v=-go8BMcpCf4&index=1&list=PLdKRooEQxDnW6OsnV4HQuVo-SX8fCgD1s ).


Inicio

Rodar o php artisan migrate (irá gerar todas as tabelas)
"# laravel_ACL" 
