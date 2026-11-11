
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Management System</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            color: #243b53;
            margin-top: 0;
        }

        .add-button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #243b53;
            color: white;
        }

        .message {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .empty {
            text-align: center;
            padding: 20px;
            color: #777;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Visitor Management System</h1>
    <p>Manage and monitor registered visitors.</p>

    @if(session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('visitors.create') }}" class="add-button">
        + Add New Visitor
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Position</th>
                <th>Date Registered</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($visitors as $visitor)
                <tr>
                    <td>{{ $visitor->id }}</td>
                    <td>{{ $visitor->name }}</td>
                    <td>{{ $visitor->address }}</td>
                    <td>{{ $visitor->position }}</td>
                    <td>{{ $visitor->created_at->format('M d, Y') }}</td>
              
<td>
    <a href="{{ route('visitors.show', $visitor->id) }}">View</a>
    |
    <a href="{{ route('visitors.edit', $visitor->id) }}">Edit</a>
    |
    <form action="{{ route('visitors.destroy', $visitor->id) }}"
          method="POST"
          style="display: inline;"
          onsubmit="return confirm('Are you sure you want to delete this visitor?');">
        @csrf
        @method('DELETE')
        <button type="submit"
                style="background: #dc2626; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer;">
            Delete
        </button>
    </form>
</td>

                </tr>
            @empty
                <tr>
                    <td colspan="6" class="empty">
                        No visitors found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>
