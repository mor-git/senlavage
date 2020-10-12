@extends('layouts.layout')

@section('content')
		<div class="wrapper theme-1-active navbar-top-light">
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Update Profil</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>update profil</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
                    <div class="col-sm-2"></div>
						<div class="col-sm-6">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="{{ url('updateProfil') }}" method="POST">
											<input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-calendar-note mr-10"></i>Update Profil</h6>
												<hr class="light-grey-hr"/>
												<input type="hidden" value="{{ $profils->id }}" name="id" />
												<div class="row">
													<div class="col-sm-12">
														<div class="form-group">
															<input type="text" name="nameProfil" class="form-control" value="{{ $profils->profilName }}">
														</div>
													</div>
													
												</div>
			
												<div class="form-actions">
													<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>Valider</span></button>
													<button type="button" class="btn btn-warning pull-left">Annuler</button>
													<div class="clearfix"></div>
												</div>
											</form>
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