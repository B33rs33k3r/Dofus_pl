
@extends('layout.master')

@section('content')
	<div class="container">
		<ul class="playerlist grid-x">
			@foreach($players as $player)
				<li class="player-item large-12">
					<div class="player grid-x">
						<div>
							<img src="{{ $player->classe->image }}">
						</div>

						<div>
							<p>{{ $player->name }}</p>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
@endsection