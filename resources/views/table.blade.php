<h2>Datatable</h2>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Position</th>
            <th>Team</th>
        </tr>
    </thead>
    <tbody>
        @foreach($list->data as $player)
        <tr>
            <td>
                {{ $player->id }}
            </td>
            <td>
                {{ $player->name }}
            </td>
            <td>
                {{ $player->position }}
            </td>
            <td>
                {{ $player->team }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ $list->prev_page_url }}">Previous</a>
<a href="{{ $list->next_page_url }}">Next</a>