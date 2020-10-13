@extends('layouts.Layout')

@section('content')	
    <div class="wrapper theme-1-active navbar-top-light">	
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Liste Services</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>special pages</span></a></li>
							<li class="active"><span>Services</span></li>
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
									<h6 class="panel-title txt-dark">Services</h6>
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
														<th>Prenom Client</th>
														<th>Nom Client</th>
														<th>Téléphone</th>
														<th>Montant</th>
														<th>Caissier</th>
														<th>Status</th>
														<th>Date</th>
														<th>View</th>
													</tr>
												</thead>

												<tbody>
												<!-- <php $i=1; ?> -->
												@foreach($details as $detail)
													<tr>
														<td>#1</td>
														<td>{{ $detail->services->prenomClient }}</td>
														<td>{{ $detail->services->nomClient }}</td>
														<td>{{ $detail->services->phone }}</td>
														<td>{{ $detail->total }}</td>
														<td>{{ $detail->services->users->name }}</td>
														@if( $detail->services->statut == "Non Payee")
														<td><span class="label label-danger">Non Payee</span></td>
														@else
														<td><span class="label label-success">Payee</span></td>
														@endif
														<!-- @for($i=0; $i < 1; $i++)
															@foreach ($detail->produits as $prod) {	
																<td>{ $prod->pivot->total }}</td>	
															}
															@endforeach
														@endfor -->
														<td>{{ $detail->services->laDate }}</td>
														<td>
															<a href="#">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>
															</a>	
														</td>
													</tr>
												<!-- <php $i++; ?> -->
												@endforeach
													<!-- <tr>
														<td>#5014</td>
														<td>Junior Technical Author</td>
														<td>$205,500</td>
														<td>2009/01/12</td>
														<td>2009/01/12</td>
														<td>2009/01/12</td>
														<td>
															<span class="label label-warning">pending</span>
														</td>
														
														<td>2012/12/02</td>
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