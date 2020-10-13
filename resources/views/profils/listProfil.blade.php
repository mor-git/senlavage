@extends('layouts.Layout')

@section('content')	
    <div class="wrapper theme-1-active navbar-top-light">	
        <!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Liste Profils</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>special pages</span></a></li>
							<li class="active"><span>Profils</span></li>
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
									<h6 class="panel-title txt-dark">Profils</h6>
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
														<th>Les profils</th>
														<th>View</th>
													</tr>
												</thead>

												<tbody>
												@foreach($profils as $profil)
													<tr>
														<td>#1</td>
														<td>{{ $profil->profilName}}</td>
														<td>
															<a href="{{ url('editer',$profil->id) }}">
																<i class="fa fa-file-text-o" aria-hidden="true"></i>

															</a>	
														</td>
													</tr>
												@endforeach
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