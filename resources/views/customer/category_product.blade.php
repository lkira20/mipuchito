@extends('layouts.customer')

@section('content')


<div id="page_loader" class="loading">
	<div>
		<div class="spinner-grow mb-2 ml-4" style="width: 5rem; height: 5rem" role="status">
		</div>
		<p>Espere un momento...</p>
	</div>
</div>


<div id="carouselExampleIndicators" class="carousel slide mt-5 animated fadeIn" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="/img/banner1.png" style="height: 470px" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="/img/banner2.jpg" style="height: 470px" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="/img/banner3.jpg" style="height: 470px" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="/img/banner4.jpg" style="height: 470px" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="/img/banner5.jpg" style="height: 470px" class="d-block w-100" alt="...">
		</div>
		<div class="carousel-item">
			<img src="/img/banner6.jpg" style="height: 470px" class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>



<div class="container-fluid my-5 animated wrapper">
	<div class="row">
		<div class="col-lg-3 col-12">
			<div class="card shadow-sm mb-4">
				<div class="card-header">
					<h5>Filtrado de productos</h5>
				</div>
				<div class="card-body">
					<form>
						<div class="form-group mb-4">
							<label for="empresas">Por empresas</label>
							<select class="form-control" id="empresas">
								<option disabled selected>Selecciona una empresa</option>
								@foreach ($empresas as $emp)
									<option {{ $emp->id }}>{{ $emp->name }}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group mb-4">
							<label for="empresas">Por categorias</label>
							<select class="form-control" id="categorias">
								<option disabled selected>Selecciona una categoria</option>
								@foreach ($categorias as $categoria)
									<option {{ $categoria->id }}>{{ $categoria->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="d-flex justify-content-center">
							<button class="btn btn-primary mr-2" type="reset">
								<i class="fas fa-sync mr-2"></i>Reiniciar
							</button>

							<button class="btn btn-primary" type="reset">
								<i class="fas fa-search mr-2"></i>Filtrar
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-9 col-12">

			<div class="card mb-4 shadow-sm">
				<div class="card-body d-flex justify-content-between">
					<h5>{{ $cat }}</h5>
					<p>{{ count($data) }} productos encontrados</p>
				</div>
			</div>

			@foreach ($data as $producto)
				<div class="card shadow-sm mb-4">

					<div class="card-body">
						<div class="row">
							<div class="col-3">
								<img style="height: 200px; object-fit: contain" src='/storage/{{ $producto->image }}' class="card-img-top">
							</div>
							<div class="col-6">
								<h5 class="card-title">{{ $producto->inventory->product_name }}</h5>
								<p class="font-weight-light">{{ $producto->inventory->description }}</p>
							</div>
							<div class="col-3 d-flex flex-column justify-content-between border-left">
								<div>
									<span class="font-weight-light">Precio: {{ number_format($producto->retail_pvp, 2, ',', '.') }} Bs</span>
									<br>
									<span class="font-weight-light">I.V.A: {{ number_format($producto->retail_iva_amount, 2, ',', '.') }} Bs</span><br>
									<span class="lead font-weight-normal"><small>Total: </small>{{ number_format($producto->retail_total_price, 2, ',', '.') }} Bs</span>
								</div>
								<div>
									<button
										type="button"
										class="btn btn-primary btn-block addCartBtn"
										data-id="{{ $producto->id }}"
										data-producto="{{ $producto->inventory->product_name }}"
										data-precio="{{ $producto->retail_total_price }}"
										data-type="al-menor"
										data-cantidad="1"
									>

										<i class="fas fa-shopping-cart mr-2"></i><span class="text">Comprar</span>
									</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			@endforeach

		</div>
	</div>
</div>




@endsection

@push('scripts')
<script>

	$(() => {

		// $('.rating').rating({
		// 	theme: 'krajee-fas',
		// 	emptyStar: '<i class="fas fa-star></i>',
		// 	filledStar: '<i class="fas fa-star></i>'
		// })

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		toastr.options = {
			"closeButton": true,
			"progressBar": true,
			"positionClass": "toast-bottom-left",
		}


		$('.SearchProductNameAutoComplete').autoComplete({
			minLength: 2,
			resolverSettings: {
				url: '/traer_productos',
			}
		});


		// saber si hay elementos en el carrito para mostrar la candidad en color rojo en el navbar
		$.get('/get_shoppingcart', (res) => {
			if (res > 0) {
				$('#cart_counter').removeClass('d-none')
				$('#cart_counter').text(res)
			}

			$('#page_loader').fadeOut()
		})
		.catch((err) => {
			if (err.status != 401) {
				toastr.error('Ha ocurrido un error.')
				console.error(err)
			}
			$('#page_loader').fadeOut()
		})

		// saber si hay elementos en la lista de deseos
		$.get('/get_wishlist', (res) => {
			if (res > 0) {
				$('#wishlist_counter').removeClass('d-none')
				$('#wishlist_counter').text(res)
			}
		})
		.catch((err) => {
			if (err.status != 401) {
				toastr.error('Ha ocurrido un error.')
				console.error(err)
			}
		})

		$('.addCartBtn').click(function(e){

			let data = $(this).data()
			let that = $(this)

			$.post({
				url: '/shoppingcart',
				data,
				beforeSend(){
					that.attr('disabled', true)
					that.html('<i class="fas fa-circle-notch fa-spin fa-"></i>')
				}
			})
			.done((res) => {
				// console.log(res)
				if (res == 'rejected') {
					toastr.info('Este producto ya está agregado con un tipo de compra distinto.')
				}
				else {

					$('#cart_counter').removeClass('d-none')
					$('#cart_counter').text(res)
				}

				that.removeAttr('disabled')
				that.html('<i class="fas fa-shopping-cart mr-2"></i><span class="text">Comprar</span>')
			})
			.fail((err) => {
				toastr.error('Ha ocurrido un error.')
				console.error(err)
			})
		});

	})

</script>
@endpush