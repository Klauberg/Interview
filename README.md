#My Project

Este é um projeto PHP que implementa um CRUD (Create, Read, Update, Delete) básico de clientes e seus endereços. O projeto utiliza o padrão de arquitetura MVC *(Model-View-Controller) e é composto pelos seguintes arquivos:

    *index.php: Arquivo inicial que roteia as requisições para os controllers apropriados.
    *routes.php: Arquivo responsavel para passar as rotas do front-end.
    *controller/ClientController.php: Controller responsável pelas ações relacionadas aos clientes.
    *controller/AddressController.php: Controller responsável pelas ações relacionadas aos endereços.
    *controller/AuthController.php: Controller responsável pelo login e criação da sessão.
    *views/layout: Layout padrão da aplicação, que inclui o cabeçalho e rodapé.
    *views/create-client.php: Criação da pagina de cadastro do cliente.
    *views/add-client: Responsável para coletar energia passado pelo usuario do cliente e passar pro banco de dados.


##Configuração

Antes de executar o projeto, é necessário configurar o acesso ao banco de dados. Para isso, basta criar um arquivo config/database.php com as seguintes informações:

php
'


$servername = "localhost";
$username = "(nome do usuario do banco)";
$password = "(senha do usuario do banco)";
$dbname = "(nome do database)";
'

Substitua os valores pelas informações do seu banco de dados.
Execução

Para executar o projeto, basta iniciar um servidor web PHP e acessar o arquivo index.php. Por exemplo:

sh
'
php -S localhost:8000
'
Depois, acesse http://localhost:8000 no seu navegador.