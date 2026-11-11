
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Details</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        h1 {
            color: #243b53;
        }

        .detail {
            padding: 12px 0;
            border-bottom: 1px solid #ddd;
        }

        .detail strong {
            display: inline-block;
            width: 130px;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 16px;
            background: #64748b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .edit {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 16px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Visitor Details</h1>
    <p>Complete information of the registered visitor.</p>

    <div class="detail">
        <strong>Visitor ID:</strong>
        {{ $visitor->id }}
    </div>

    <div class="detail">
        <strong>Full Name:</strong>
        {{ $visitor->name }}
    </div>

    <div class="detail">
        <strong>Address:</strong>
        {{ $visitor->address }}
    </div>

    <div class="detail">
        <strong>Position:</strong>
        {{ $visitor->position }}
    </div>

    <div class="detail">
        <strong>Date Registered:</strong>
        {{ $visitor->created_at->format('F d, Y h:i A') }}
    </div>

    <a href="{{ route('visitors.index') }}" class="back">
        Back to List
    </a>

    <a href="{{ route('visitors.edit', $visitor->id) }}" class="edit">
        Edit Visitor
    </a>

</div>

</body>
</html>
