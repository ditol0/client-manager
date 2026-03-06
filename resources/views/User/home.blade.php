<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #0f172a;
            --bg-soft: #1e293b;
            --card: #ffffff;
            --text-main: #0f172a;
            --text-soft: #475569;
            --primary: #0ea5e9;
            --primary-hover: #0284c7;
            --border: #e2e8f0;
            --danger: #ef4444;
        }

        body {
            min-height: 100vh;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:
                radial-gradient(circle at top right, #1d4ed8 0%, transparent 35%),
                radial-gradient(circle at bottom left, #0ea5e9 0%, transparent 35%),
                var(--bg);
            padding: 32px 16px;
        }

        .contact {
            max-width: 1200px;
            margin: 0 auto;
            background-color: var(--card);
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.35);
            display: grid;
            grid-template-columns: 320px 1fr;
            gap: 24px;
        }

        .formadd {
            background-color: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 18px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .formadd h2 {
            color: var(--text-main);
            font-size: 20px;
            margin-bottom: 6px;
        }

        .formadd input {
            width: 100%;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            padding: 11px 12px;
            font-size: 14px;
            color: var(--text-main);
            background-color: #ffffff;
            outline: none;
        }

        .formadd input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.18);
        }

        .formadd button {
            border: none;
            border-radius: 10px;
            padding: 12px;
            background-color: var(--primary);
            color: #ffffff;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .formadd button:hover {
            background-color: var(--primary-hover);
        }

        .table-wrap {
            overflow-x: auto;
            border: 1px solid var(--border);
            border-radius: 14px;
        }

        table {
            width: 100%;
            min-width: 620px;
            border-collapse: collapse;
            background-color: #ffffff;
        }

        th {
            text-align: left;
            background-color: var(--bg-soft);
            color: #f8fafc;
            padding: 14px 12px;
            font-size: 14px;
            letter-spacing: 0.2px;
        }

        td {
            padding: 13px 12px;
            border-bottom: 1px solid #eef2f7;
            color: var(--text-soft);
            font-size: 14px;
        }

        tr:hover td {
            background-color: #f8fafc;
        }

        td:last-child {
            color: var(--danger);
            font-weight: 600;
            cursor: pointer;
        }
        a{
            text-decoration: none;
        }

        @media (max-width: 960px) {
            .contact {
                grid-template-columns: 1fr;
                padding: 18px;
            }
        }
    </style>
</head>
<body>
  <div class="contact">
    <form action="" class="formadd">
        <h2>Add User</h2>
        <input type="text" name="name" id="" placeholder="Name">
        <input type="email" name="email" id="" placeholder="Email">
        <input type="text" name="phone" id="" placeholder="Phone">
        <input type="text" name="platform" id="" placeholder="Password">
        <input type="text" name="server" id="" placeholder="Server">
        <button type="submit">Add</button>
    </form>
    <div class="table-wrap">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>platform</th>
                <th>server</th>

            </tr>
            <tr>
                <td>dito</td>
                <td>gHs4o@example.com</td>
                <td>+966 5 555 5555</td>
                <td>التركيه</td>
                <td><a href="#">Delete</a></td>
            </tr>
        </table>
    </div>
    

    
  </div>
</body>
</html>
