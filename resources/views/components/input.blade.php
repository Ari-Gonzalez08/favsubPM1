
@props(['titulo', 'type', 'nombre'])
<div class="my-2" >
 <label class="pr-2" style="font-size: 30px ">{{ $titulo }}</label>
 <br>
 <input type={{ $type }} name={{ $nombre}}
 class="border border-black rounder-lg px-3 py">
 @error( $nombre )
 <p>{{ $message }}</p>
 @enderror
</div>
