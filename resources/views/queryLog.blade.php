<h2>Query Log</h2>
<table>
    <thead>
        <tr>
            <th>Query</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach($queryLog as $query)
        <tr>
            <td>
                {{ $query['query'] }}
            </td>
            <td>
                {{ $query['time'] }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>