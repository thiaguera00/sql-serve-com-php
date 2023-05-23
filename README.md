## Passo a passo para usar o SQL SERVER com PHP

## Instalar o PHP 

<p>Download do <a href="https://windows.php.net/download#php-8.2">PHP</a></p> <br>
<p>De preferência o PHP com Thread Safe!!! </p>

## Instalar Drivers do SQL Server

<p>Baixe os drivers do SQL Server neste 
<a href="https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-serverview=sql-server-ver16">
    link
</a>
neste link você deve ir até na sessão de download e clique no 
"Download Microsoft Drivers for PHP for SQL Server "(Windows) 
</p>
<br>
<p>Quando clicar para baixar irá baixar um arquivo zip com varias versões</p> <br>
<p>Cada final de arquivo tem um número este número é a versão do seu php </p> <br>
<p>Para saber a versão do seu php so digitar o comando "php -v" no seu terminal</p> <br>
<p>Sabendo sua versão do PHP agora vc vai caçar dois arquivos de acordo com sua versão!</p> <br>
<p>Exemplo de arquivo: "php_pdo_sqlsrv_82_ts_x64.dll", "php_sqlsrv_82_ts_x64.dll"</p> <br>

<p>Esses dois arquivos vc irá botar na sua pasta ext la onde você baixou o PHP</p> <br>
<p>Depois so ir no php.ini e adicionar as extensões do arquivo que você botou</p> <br>
<p>Exemplo: "extension=php_pdo_sqlsrv_82_ts_x64.dll"," extension=php_sqlsrv_82_ts_x64.dll"</p> <br>
<p>Deixa estas extensões descomentadas ";"</p> <br>
<p>Depois disso tudo você tem que baixar o driver OBDC clique neste 
<a href="https://learn.microsoft.com/pt-br/sql/connect/odbc/download-odbc-driver-for-sql-server?view=sql-server-ver16"> link</a> </p> <br>
<p>Fez o download agora é hora de testar!</p> <br>
<p>Tem um exemplo de um arquivo connection.php para você ter a ideia!</p> <br>
<p>Agora só importar seu arquivo de conexão e fazer suas querys!</p> <br>

