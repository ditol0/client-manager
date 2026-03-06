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
            --success: #10b981;
            --success-soft: #ecfdf5;
            --border: #e2e8f0;
            --danger: #ef4444;
            --danger-soft: #fef2f2;
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

        .logout-form {
            grid-column: 1 / -1;
            display: flex;
            justify-content: flex-end;
            margin-bottom: -8px;
        }

        .logout-btn {
            border: 1px solid rgba(239, 68, 68, 0.25);
            border-radius: 10px;
            padding: 10px 14px;
            background: linear-gradient(90deg, #ef4444, #dc2626);
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: transform 0.15s ease, filter 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 10px 20px rgba(220, 38, 38, 0.2);
        }

        .logout-btn:hover {
            transform: translateY(-1px);
            filter: brightness(1.03);
        }

        .logout-btn:focus {
            outline: none;
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.2);
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

        .alert {
            border-radius: 10px;
            padding: 11px 12px;
            font-size: 0.9rem;
            border: 1px solid transparent;
            border-left-width: 4px;
            box-shadow: 0 8px 18px rgba(15, 23, 42, 0.08);
            animation: riseIn 0.25s ease-out;
        }

        .alert-success {
            color: #065f46;
            background: var(--success-soft);
            border-color: #a7f3d0;
            border-left-color: var(--success);
        }

        .alert-error {
            color: #991b1b;
            background: var(--danger-soft);
            border-color: #fecaca;
            border-left-color: var(--danger);
        }

        .error-list {
            margin: 0;
            padding-left: 18px;
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

        @keyframes riseIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 960px) {
            .contact {
                grid-template-columns: 1fr;
                padding: 18px;
            }

            @media (max-width: 600px) {

                .table-wrap{
                    overflow-x: auto;
                }
                table{
                    min-width: 100px;
                }
                th{
                    padding: 11px 3px;
                }
                td{
                    padding: 11px 3px;
                }

                
            }
        }
    </style>
</head>
<body>
  <div class="contact">

    <form action="{{ route('logout') }}" method="post" class="logout-form">
        @csrf
        <button class="logout-btn" type="submit">Logout</button>
    </form>
    <form action="{{route('store.adduser')}}" class="formadd">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

       @csrf
        <h2>Add User</h2>
        <input type="text" name="name" id="" placeholder="Name">
        <input type="text" name="server" id="" placeholder="server">
        <input type="text" name="platform" id="" placeholder="platform">
        <input type="email" name="email" id="" placeholder="email">
        <button type="submit">Add</button>
    </form>
    <div class="table-wrap">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Server</th>
                <th>Platform</th>
                <th>Action</th>

            </tr>

          

            @if(empty($data))
                <tr>
                    <td colspan="5">No data found</td>
                </tr>

            @endif
            @if(!empty($data))
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->platform }}</td>
                    <td>{{ $item->server }}</td>
                    <td><a href="{{ route('delete.user', $item->id) }}">Delete</a></td>
                </tr>
                
            @endforeach
            @endif
            
            
        </table>
    </div>
    

    
  </div>
</body>
</html>
