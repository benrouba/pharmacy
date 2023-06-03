<h1>قائمة العملاء</h1>
<table>
    <thead>
        <tr>
            <th>اسم العميل</th>
            <th>البريد الإلكتروني</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>