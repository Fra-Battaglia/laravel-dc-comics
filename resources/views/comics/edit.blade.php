@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="{{route('comics.update', ['comic' => $comic['id']])}}" method="POST" class="py-4">
					@csrf
					@method('PUT')
					<div class="mb-3">
						<label for="" class="form-label">Titolo</label>
						<input type="text" class="form-control" value="{{ old('title') ?? $comic->title }}" name="title" placeholder="Aggiungi titolo">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Desctizione</label>
						<textarea rows="5" class="form-control"  name="description" placeholder="Aggiungi descrizione">{{ old('description') ?? $comic->description }}"</textarea>
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Prezzo</label>
						<input type="text" class="form-control" value="{{ old('price') ?? $comic->price }}" name="price" placeholder="Aggiungi prezzo">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Serie</label>
						<input type="text" class="form-control" value="{{ old('series') ?? $comic->series }}" name="series" placeholder="Aggiungi serie">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Data di vendita</label>
						<input type="text" class="form-control" value="{{ old('sale_date') ?? $comic->sale_date }}" name="sale_date" placeholder="Aggiungi data di vendita">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Tipo</label>
						<input type="text" class="form-control" value="{{ old('type') ?? $comic->type }}" name="type" placeholder="Aggiungi tipo">
					</div>
					<div class="mb-3">
						<label for="" class="form-label">Thumbnail</label>
						<input type="text" class="form-control" value="{{ old('thumb') ?? $comic->thumb }}" name="thumb" placeholder="Aggiungi link thumbnail">
					</div>
			
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Crea il nuovo Comics</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection