
<link rel="stylesheet" href="{{ asset('/css/employee.css') }}">

<div>
    <h1>Employee Detail Information</h1>
    <table>
        <tr>
            <th>EMPLOYEE ID</th>
            <td>{{ $id }}</td>
        </tr>
        <tr>
            <th>EMPLOYEE NAME</th>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <th>EMPLOYEE POSITION</th>
            <td>{{ $position }}</td>
        </tr>
    </table>
</div>