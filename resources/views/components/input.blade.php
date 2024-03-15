@props(['titulo', 'type', 'nombre'])

<label for="">{{ $titulo }}</label>
<input type={{ $type }} name={{ $nombre}}> 
@error( $nombre )
<p>{{ $messsage }}</p>
@enderror
