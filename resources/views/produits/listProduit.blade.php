@extends('layouts.Layout')

@section('content')	
    <div class="wrapper theme-1-active navbar-top-light">	
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Liste Produits</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>special pages</span></a></li>
							<li class="active"><span>Produits</span></li>
						</ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Produits</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="datable_1" class="table  display table-hover mb-30">
												<thead>
													<tr>
														<th>Numéros</th>
														<th>Reference Produit</th>
														<th>Nom Produit</th>
														<th>Description</th>
														<th>View</th>
													</tr>
												</thead>

												<tbody>
												@foreach($produits as $produit)
													<tr>
														<td>#1</td>
														<td>{{ $produit->reference}}</td>
														<td>{{ $produit->nomProduit}}</td>
														<td>Rien</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
												@endforeach
													<!-- <tr>
														<td>#5013</td>
														<td>Accountant</td>
														<td>$205,500</td>
														<td>
															<span class="label label-success">paid</span>
														</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
													<tr>
														<td>#5014</td>
														<td>Junior Technical Author</td>
														<td>$205,500</td>
														<td>
															<span class="label label-warning">pending</span>
														</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr> -->
													
												</tbody>
											</table>
										</div>
									</div>	
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			
        </div>
			
		</div>
        <!-- /Main Content -->

    </div>
@endsection