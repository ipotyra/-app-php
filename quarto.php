<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Easy Peasy - Quarto</title>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #eeeeee;
    }

    .section {
        background: linear-gradient(90deg, #f4a3c0, #f7d8b6);
        padding: 40px;
        width: 80%;
        margin: 40px auto;
        border-radius: 8px;
    }

    h1 {
        margin: 0;
        color: #b90066;
        font-size: 34px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    h2 {
        margin: 0 0 20px 0;
        font-size: 26px;
        font-weight: bold;
        color: #6b0038;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        font-size: 15px;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #eac2d4;
    }

    th {
        background: #ffe4ef;
    }

    /* SELECTS ESTILIZADOS */
    select {
        padding: 6px 10px;
        border-radius: 10px;
        border: 1px solid #e8b9cc;
        background: #ffe4ef;
        font-size: 14px;
        cursor: pointer;
        color: #6b0038;
        transition: 0.2s;
        width: 100%;
    }

    select:hover {
        background: #ffd1e4;
    }

    .btn {
        margin-top: 25px;
        background: #d92786;
        border: none;
        padding: 12px 40px;
        border-radius: 20px;
        color: white;
        font-size: 18px;
        cursor: pointer;
        display: block;
        margin-left: auto;
        margin-right: auto;
        transition: 0.3s;
    }

    .btn:hover {
        background: #b11d6e;
    }

</style>
</head>
<body>

<div class="section">
    <h1>EASY PEASY</h1>
    <h2>Quarto</h2>

    <table>
        <tr>
            <th>Tarefa</th>
            <th>Status</th>
            <th>Prioridade</th>
            <th>Data</th>
        </tr>

        <tr>
            <td>Trocar lençol</td>
            <td>
                <select>
                    <option>✅ Concluído</option>
                    <option>🟠 Em andamento</option>
                    <option>🔵 Em revisão</option>
                    <option selected>⏳ Não iniciado</option>
                </select>
            </td>
            <td>
                <select>
                    <option>🟢 Alta</option>
                    <option selected>🟡 Média</option>
                    <option>🔴 Baixa</option>
                    <option>⚪ Nenhuma</option>
                </select>
            </td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td>Limpar janelas</td>
            <td>
                <select>
                    <option selected>✅ Concluído</option>
                    <option>🟠 Em andamento</option>
                    <option>🔵 Em revisão</option>
                    <option>⏳ Não iniciado</option>
                </select>
            </td>
            <td>
                <select>
                    <option selected>🟢 Alta</option>
                    <option>🟡 Média</option>
                    <option>🔴 Baixa</option>
                    <option>⚪ Nenhuma</option>
                </select>
            </td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td>Aspirar</td>
            <td>
                <select>
                    <option>✅ Concluído</option>
                    <option>🟠 Em andamento</option>
                    <option selected>🔵 Em revisão</option>
                    <option>⏳ Não iniciado</option>
                </select>
            </td>
            <td>
                <select>
                    <option>🟢 Alta</option>
                    <option>🟡 Média</option>
                    <option selected>🔴 Baixa</option>
                    <option>⚪ Nenhuma</option>
                </select>
            </td>
            <td><input type="date"></td>
        </tr>

        <tr>
            <td>Passar pano</td>
            <td>
                <select>
                    <option>✅ Concluído</option>
                    <option>🟠 Em andamento</option>
                    <option>🔵 Em revisão</option>
                    <option selected>⏳ Não iniciado</option>
                </select>
            </td>
            <td>
                <select>
                    <option>🟢 Alta</option>
                    <option>🟡 Média</option>
                    <option>🔴 Baixa</option>
                    <option selected>⚪ Nenhuma</option>
                </select>
            </td>
            <td><input type="date"></td>
        </tr>

    </table>

    <button class="btn">Prontinhoo 💖</button>
</div>

</body>
</html>
