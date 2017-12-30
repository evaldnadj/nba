<div>
<h1>{{ $team->name }}</h1>

        @if ($team->players)
        <h1>Players</h1>
            <ul>
            @foreach ($team->players as $player)
                <li>
                    <a href="/team/{{ $player->id }}"><h4>{{ $player->first_name }}</h4></a>
                    
                </li>
            @endforeach
            </ul>
        @endif
</div>