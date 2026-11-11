
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Visitor</title>

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

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button, .back {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            background: #2563eb;
            color: white;
        }

        .back {
            background: #64748b;
            color: white;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
<div class="container">

    <h1>Edit Visitor</h1>
    <p>Update the visitor information below.</p>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('visitors.update', $visitor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Editable Visitor ID -->
       

        <label for="name">Full Name</label>
        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $visitor->name) }}"
            required
        >

        <label for="address">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            value="{{ old('address', $visitor->address) }}"
            required
        >

        <label for="position">Position</label>
        <input
            type="text"
            id="position"
            name="position"
            value="{{ old('position', $visitor->position) }}"
            required
        >

        <button type="submit">Update Visitor</button>

        <a href="{{ route('visitors.index') }}" class="back">Cancel</a>
    </form>

</div>
</body>
</html>
