#My Project

Este é um projeto PHP que implementa um CRUD (Create, Read, Update, Delete) básico de clientes e seus endereços. O projeto utiliza o padrão de arquitetura MVC *(Model-View-Controller) e é composto pelos seguintes arquivos:

    *index.php: Arquivo inicial que roteia as requisições para os controllers apropriados.
    *controllers/ClientController.php: Controller responsável pelas ações relacionadas aos clientes.
    *controllers/AddressController.php: Controller responsável pelas ações relacionadas aos endereços.
    *models/ClientModel.php: Model responsável pelo acesso aos dados dos clientes.
    *models/AddressModel.php: Model responsável pelo acesso aos dados dos endereços.
    *views/layout/app.php: Layout padrão da aplicação, que inclui o cabeçalho e rodapé.
    *views/clients/index.php: View responsável por exibir a lista de clientes cadastrados.
    *views/clients/create.php: View responsável por exibir o formulário de cadastro de clientes.
    *views/clients/edit.php: View responsável por exibir o formulário de edição de clientes.
    *views/addresses/create.php: View responsável por exibir o formulário de cadastro de    endereços.
    *views/addresses/edit.php: View responsável por exibir o formulário de edição de endereços.

##Configuração

Antes de executar o projeto, é necessário configurar o acesso ao banco de dados. Para isso, basta criar um arquivo config/config.php com as seguintes informações:

php
'
<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'my_database');
define('DB_USER', 'my_user');
define('DB_PASS', 'my_password');
'

Substitua os valores das constantes pelas informações do seu banco de dados.
Execução

Para executar o projeto, basta iniciar um servidor web PHP e acessar o arquivo index.php. Por exemplo:

sh
'
php -S localhost:8000
'
Depois, acesse http://localhost:8000 no seu navegador.