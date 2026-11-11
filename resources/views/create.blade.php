
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Visitor</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 30px;
        }

        .container {
            max-width: 720px;
            margin: auto;
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.06);
        }

        h1 {
            color: #243b53;
            font-size: 42px;
            margin-top: 0;
            margin-bottom: 18px;
        }

        p {
            color: #64748b;
            font-size: 20px;
            margin-bottom: 32px;
        }

        label {
            display: block;
            margin-top: 24px;
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 20px;
            color: #243b53;
        }

        input {
            width: 100%;
            padding: 17px;
            border: 1px solid #d5dce7;
            border-radius: 9px;
            box-sizing: border-box;
            font-size: 17px;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
        }

        button, .back {
            display: inline-block;
            margin-top: 32px;
            padding: 16px 23px;
            border: none;
            border-radius: 9px;
            text-decoration: none;
            cursor: pointer;
            font-size: 17px;
        }

        button {
            background: #3155dc;
            color: white;
        }

        button:hover {
            background: #2445bd;
        }

        .back {
            background: #e8edf5;
            color: #243b53;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add New Visitor</h1>
    <p>Enter the visitor's information below.</p>

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('visitors.store') }}" method="POST">
        @csrf

        <label for="id">Visitor ID</label>
        <input
            type="number"
            id="id"
            name="id"
            placeholder="Enter visitor ID"
            min="1"
            value="{{ old('id') }}"
            required
        >

        <label for="name">Full Name</label>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Enter full name"
            value="{{ old('name') }}"
            required
        >

        <label for="address">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            placeholder="Enter address"
            value="{{ old('address') }}"
            required
        >

        <label for="position">Position</label>
        <input
            type="text"
            id="position"
            name="position"
            placeholder="Enter position"
            value="{{ old('position') }}"
            required
        >

        <button type="submit">Save Visitor</button>

        <a href="{{ route('visitors.index') }}" class="back">Back</a>

    </form>

</div>

</body>
</html>
