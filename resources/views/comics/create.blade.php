@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="{{route("comics.store")}}" method="POST" class="py-4 comic-form">
					@csrf
					@if ($errors->any())
						<div class="mb-3">
							<ul class="text-danger">
								@foreach ($errors->all() as $item)
									<li>{{ $item }}</li>
								@endforeach
							</ul>
						</div>	
					@endif
					<div class="mb-4">
						<label for="">Titolo</label>
						<input type="text" id="" aria-describedby="" name="title" placeholder="Aggiungi titolo">
					</div>
					<div class="mb-4">
						<label for="">Desctizione</label>
						<textarea rows="5" id="" aria-describedby="" name="description" placeholder="Aggiungi descrizione"></textarea>
					</div>
					<div class="mb-4">
						<label for="">Prezzo</label>
						<input type="text" id="" aria-describedby="" name="price" placeholder="Aggiungi prezzo">
					</div>
					<div class="mb-4">
						<label for="">Serie</label>
						<input type="text" id="" aria-describedby="" name="series" placeholder="Aggiungi serie">
					</div>
					<div class="mb-4">
						<label for="">Data di vendita</label>
						<input type="text" id="" aria-describedby="" name="sale_date" placeholder="Aggiungi data di vendita">
					</div>
					<div class="mb-4">
						<label for="">Tipo</label>
						<input type="text" id="" aria-describedby="" name="type" placeholder="Aggiungi tipo">
					</div>
					<div class="mb-4">
						<label for="">Thumbnail</label>
						<input type="text" id="" aria-describedby="" name="thumb" placeholder="Aggiungi link thumbnail">
					</div>
			
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Crea il nuovo Comics</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection