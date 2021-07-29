@extends('layouts.app')

	@section('siteTitle', 'ჩემი შეკვეთები')
	
	@section('content')

	@include('msg.message')

	<div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
		<div class="modal-dialog category-area" role="document">
			<div class="category-area-inner">
				<div class="modal-header">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<i class="uil uil-multiply"></i>
					</button>
				</div>
				<div class="category-model-content modal-content">
					<div class="cate-header">
						<h4>Select Category</h4>
					</div>
					<ul class="category-by-cat">
						
						<li>
							<a href="shop_grid.html" class="single-cat-item">
								<div class="icon">
									<img src="{{ asset('front/images/category/icon-1.svg') }}" alt="">
								</div>
								<div class="text">Fruits and Vegetables</div>
							</a>
						</li>

					</ul>
					<a href="shop_grid.html" class="morecate-btn"><i class="uil uil-apps"></i>More Categories</a>
				</div>
			</div>
		</div>
	</div>

	<div id="search_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
		<div class="modal-dialog search-ground-area" role="document">
			<div class="category-area-inner">
				<div class="modal-header">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<i class="uil uil-multiply"></i>
					</button>
				</div>
				<div class="category-model-content modal-content">
					<div class="search-header">
						<form action="#">
							<input type="search" placeholder="Search for products...">
							<button type="submit"><i class="uil uil-search"></i>
							</button>
						</form>
					</div>
					<div class="search-by-cat">
						
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="{{ asset('front/images/category/icon-1.svg') }}" alt="">
							</div>
							<div class="text">Fruits and Vegetables</div>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>

	@livewire('header-cart-item-wishlist-and-cart-quantity')

	<div class="wrapper">
		
		<div class="gambo-Breadcrumb">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <nav aria-label="breadcrumb">
		                    <ol class="breadcrumb">
		                        <li class="breadcrumb-item">
		                            <a href="{{ route('front.index') }}">
		                            	<i class="fa fa-home"></i>
		                            	მთავარი
		                            </a>
		                        </li>
		                        <li class="breadcrumb-item active" aria-current="page">
		                            შეკვეთები
		                        </li>
		                    </ol>
		                </nav>
		            </div>
		        </div>
		    </div>
		</div>
		
		<div class="dashboard-group">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12">
		                @include('front.account.components.user_profile')
		            </div>
		        </div>
		    </div>
		</div>

		<div class="container">
		    <div class="row">
		   		@livewire('shop-user-dashboard-order')     
		    </div>
		</div>

	</div>

@endsection