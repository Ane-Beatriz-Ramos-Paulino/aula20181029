<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Cadastro de usu�rios</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td, th {
            padding: 10px;
            
        }
        

       

        tr:nth-child(odd) {
            background-color: white;
        }
    </style>
</head>
<body>
    <!-- formul�rio de cadastro de usu�rio -->
    <h2>Cadastro de usu�rio</h2>

    <table>
        <tr>
            <td>
                <label>Nome Completo</label>
                <input type="text" name="nome" />

            </td>
        </tr>
        <tr>
            <td>
                <label>E-mail</label>
                <input type="text" name="login" />
            </td>
        </tr>

        <tr>
            <td>

                <label>Senha</label>
                <input type="text" name="senha" />

            </td>
        </tr>

        <tr>
            <td>

                <input type="submit" name="botao_cadastrar" value="Cadastrar" />
            </td>
        </tr>

    </table>
    <!-- Lista de usu�rio -->
    <table>
        <tr>
            <h2>Usuarios</h2>
            <td>ID</td>
            <td>Nome completo</td>
            <td>Nome de acesso</td>
            <td>Senha</td>
            <td>Status</td>
            <td></td>
        </tr>
    </table>

    <!-- Edi��o de usu�rio -->
    <table>
        <h2> Editar usu�rio</h2>
        <tr>
            <td>
                <label>Nome Completo: </label>
                <label>Franciele Castilho</label>
            </td>
        </tr>
        <tr>
            <td>
                <label>E-mail: </label>
                <label>francielecasteves@gmail.com</label>
            </td>
        </tr>

        <tr>
            <td>

                <label>Senha</label>
                <input type="text" name="senha_editar" />

            </td>
        </tr>

        <tr>
            <td>

                <input type="submit" name="botao_editar" value="Salvar" />
            </td>
        </tr>
    </table>

</body>
</html>