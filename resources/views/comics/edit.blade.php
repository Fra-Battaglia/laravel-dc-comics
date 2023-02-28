@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="{{route('comics.update', ['comic' => $comic['id']])}}" method="POST" class="py-4 comic-form">
					@csrf
					@method('PUT')
					@if ($errors->any())
						<div class="mb-3">
							<ul>
								@foreach ($errors->all() as $item)
									<li>{{ $item }}</li>
								@endforeach
							</ul>
						</div>	
					@endif
					<div class="mb-4">
						<label for="">Titolo</label>
						<input type="text" value="{{ old('title') ?? $comic->title }}" name="title" placeholder="Aggiungi titolo">
					</div>
					<div class="mb-4">
						<label for="">Descrizione</label>
						<textarea rows="5"  name="description" placeholder="Aggiungi descrizione">{{ old('description') ?? $comic->description }}"</textarea>
					</div>
					<div class="mb-4">
						<label for="">Prezzo</label>
						<input type="text" value="{{ old('price') ?? $comic->price }}" name="price" placeholder="Aggiungi prezzo">
					</div>
					<div class="mb-4">
						<label for="">Serie</label>
						<input type="text" value="{{ old('series') ?? $comic->series }}" name="series" placeholder="Aggiungi serie">
					</div>
					<div class="mb-4">
						<label for="">Data di vendita</label>
						<input type="text" value="{{ old('sale_date') ?? $comic->sale_date }}" name="sale_date" placeholder="Aggiungi data di vendita">
					</div>
					<div class="mb-4">
						<label for="">Tipo</label>
						<input type="text" value="{{ old('type') ?? $comic->type }}" name="type" placeholder="Aggiungi tipo">
					</div>
					<div class="mb-4">
						<label for="">Thumbnail</label>
						<input type="text" value="{{ old('thumb') ?? $comic->thumb }}" name="thumb" placeholder="Aggiungi link thumbnail">
					</div>
			
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Slava le modifiche</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection