<p>Projeto criado para demonstrar o funcionamento de um ACL (Lista de Controle de Acesso)</p>
<b>Arquivos alterados:</b>
<ul>
    <li>model->Role.php</li>
    <li>model->Permission.php</li>
    <li>model->User.php</li>
    <li>database/migrations/create_roles_permissions_table.php</li>
    <li>routes/web.php</li>
    <li>app/Providers/AuthServiceProvider.php</li>
    <li>resources/views/welcome.blade.php</li>
    <li>resources/views/errors/403.blade.php</li>
    <li>resources/views/errors/404.blade.php</li>
</ul>

<p>Criado uma tabela "ROLES" que guarda os papéis dos usuários EX: Administrador, usuario, clientes etc...</p>
<p>Criado uma tabela "PERMISSIONS" que guarda os tipos de permissão EX: edit, delete etc...</p>
<p>Criado tabela "permission_role" que liga as ROLES com as PERMISSIONS "tabela de muitos para muitos"</p>
<p>Criado tabela "role_user" que liga o usuário ao seu papel "tabela muitos para muitos"</p>

<b>Criado relação muitos para muitos entre as Models:</b>
<ul>
    <li>Role <--> User</li>
    <li>Role <--> Permission</li>
</ul>

<p>No Provider "AuthServiceProvider" criado um GATE dentro do método "BOOT" para fazer a verificação das permissões.</p>

<p><b>Instalação</b></p>
<p>Rodar o php artisan migrate (irá gerar todas as tabelas).</p>
<p>Depois rodar o php artisan db:seed (irá popular as tabelas Role, Permission e User).</p>

<p><b>Necessário criar os vinculos para funcionar Ex:</b></p>

<b>permission_role</b>
<table>
    <thead>
        <tr>
            <td>role_id</td>
            <td>permission_id</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
        </tr>
        <tr>
            <td>2</td>
            <td>1</td>
        </tr>
    </tbody>
</table>

<br>

<b>role_user</b>
<table>
    <thead>
        <tr>
            <td>role_id</td>
            <td>user_id</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
        </tr>
    </tbody>
</table>

Link da informação ( https://www.youtube.com/watch?v=-go8BMcpCf4&index=1&list=PLdKRooEQxDnW6OsnV4HQuVo-SX8fCgD1s ).
