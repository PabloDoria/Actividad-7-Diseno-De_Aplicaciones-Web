<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Data</title>
</head>
<body>

    <h1>Show All Data</h1>

    @foreach ($data as $tableName => $tableData)
        <h2>{{ $tableName }}</h2>
        <table border="1">
            <thead>
                <tr>
                    @foreach ($tableData->first() as $key => $value)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($tableData as $row)
                    <tr>
                        @foreach ($row as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    @endforeach

</body>
</html>
