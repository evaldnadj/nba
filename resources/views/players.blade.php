<div>
    

  @foreach($team->players as $player)
        <li><a href="{{ route('', ['playerId'=>$player->id]) }}">
            {{ $player->first_name }} {{ $player->last_name }}
        </a></li>
    @endforeach
   
</div>