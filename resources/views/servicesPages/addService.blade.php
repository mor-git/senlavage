@extends('layouts.Layout')

@section('content')
<div class="wrapper theme-1-active navbar-top-light">
	<!-- Main Content -->
	<div class="page-wrapper">
		<div class="container-fluid">
			
			<!-- Title -->
			<div class="row heading-bg">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h5 class="txt-dark">Enrégistrement Commande</h5>
				</div>
			
				<!-- Breadcrumb -->
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>forms</span></a></li>
						<li class="active"><span>Enrégistrer Commande</span></li>
					</ol>
				</div>
				<!-- /Breadcrumb -->
			
			</div>
			<!-- /Title -->
			
			<!-- Row -->
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Informations Client</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="form-wrap">
									<form>
										<div class="row">
											<div class="col-sm-1"></div>
											<div class="col-sm-3">
												<div class="form-group">
													<div >
														<input type="text" id="prenom" name="prenomClient" class="form-control" placeholder="Prénom Client">
													</div>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<input type="text" id="nom" name="nomClient" class="form-control" placeholder="Nom Client">
												</div>
											</div>
											<div class="col-sm-3">
												<div class="form-group">
													<input type="text"  id="phone" name="phone" class="form-control" placeholder="Téléphone">
												</div>
											</div>
											<div class="col-sm-2"></div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Row -->
								
			<!-- Row -->
			<div class="row">
				<!-- <form action="{{ url('storeService') }}" method="POST"> -->
				<input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
				@if(Auth::user())
				<input type="hidden" value="{{ Auth::user()->id }}" name="user" id="user" />
				@endif
				<div class="col-md-8">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Commande</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="form-wrap">
									<!-- <form> -->
										<div class="row mor1">
											<div class="col-sm-3">Produit</div>
											<div class="col-sm-3">Taille</div>
											<div class="col-sm-3">Montant</div>
											<div class="col-sm-3">Action</div>
										</div>
										<div class="row mt-5" id="panier">
											<!-- <div class="col-sm-3"></div>
											<div class="col-sm-3"></div>
											<div class="col-sm-3"></div>
											<div class="col-sm-3"></div> -->
										</div>
										<div class="row mor1 mt-30" id="total">
											<div class="col-sm-3"></div>
											<div class="col-sm-3">Total</div>
											<div class="col-sm-3" id="somme">0</div>
											<div class="col-sm-3"></div>
										</div>
										<!-- <div class="row mt-20 statut" id="stat">
											<a  href="#" alt="default" data-toggle="modal" data-target="#responsive-modal">Définir le Statut</a> 
										</div> -->
										<div class="row" id="btnButton">
											<div class="col-sm-12 mt-20">
												<div class="button-box"> 
													<a id="ajouterStatut" class="btn btn-primary btn-outline btn-rounded btn-block" href="#" alt="default" data-toggle="modal" data-target="#responsive-modal">Valider Commande</a> 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12 mt-20">
												<div class="button-box"> 
													<a class="btn btn-primary btn-rounded btn-block" href="#" alt="default" data-toggle="modal" data-target="#responsive-modal-ticket">Imprimer Ticket</a> 
												</div>
											</div>
										</div>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default card-view">
						<div class="panel-heading">
							<div class="pull-left">
								<h6 class="panel-title txt-dark">Informations Produit</h6>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-wrapper collapse in">
							<div class="panel-body">
								<div class="form-wrap">
									<!-- <form> -->
									<div class="row">
										<div class="col-sm-12">
											<label class="control-label mb-10">Produit*</label>
											<div class="form-group">
												<select class="selectpicker" name="produit" id="produit" data-style="btn-warning btn-outline">
													@foreach($produits as $produit)
														<option value="{{ $produit->id }}">{{ $produit->nomProduit }}</option>
													@endforeach
												</select>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label mb-10">Taille*</label>
												<input type="text" id="taille" name="taille" class="form-control" placeholder="La taille">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label class="control-label mb-10">Montant*</label>
												<input type="text" id="montant" name="montant" class="form-control" placeholder="Le Montant">
											</div>
										</div>
										<div class="col-sm-12 mt-10">
											<button id="ajoutPanier" class="btn btn-block btn-outline btn-primary btn-rounded">
											<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;Ajouter Commande</button>
										</div>
									</div>
									<!-- </form> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- </form> -->
			</div>
			<!-- /Row -->
			<!-- Row Gestion Modal Statut--->
			<!-- sample modal content -->
			<!-- /.modal -->
			<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h5 class="modal-title">Statut de la Commande</h5>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label for="recipient-name" class="control-label mb-10">Statut*:</label>
									<select class="selectpicker" id="statut" name="statut" data-style="btn-warning btn-outline">
										<option value="Non Payee">Non Payée</option>
										<option value="Payee">Payée</option>
									</select>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
							<button type="button" class="btn btn-success" id="btnAjax" data-dismiss="modal">Ajouter</button>
						</div>
					</div>
				</div>
			</div>
			<!-- <img src="{{asset('template/img/modals/model.png')}}" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive"/> -->
			<!-- Button trigger modal -->	
			<!-- /Row -->

			<!-- Row Gestion Modal Ticket--->
			<!-- /.modal -->
			<div id="responsive-modal-ticket" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content col-md-5">
						<div class="modal-header">
							<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
							<h5 class="modal-title">SENLAVAGE</h5>
						</div>
						<div class="modal-body">
							<form>
								<div class="row mb-20  ticket">
									<div class="col-md-4">produits</div>
									<div class="col-md-4">Taille</div>
									<div class="col-md-4">Prix</div>
								</div>
								<div class="row" id="ticket">
									
								</div>
								<div class="row" >
									<div class="col-md-4">Tapis</div>
									<div class="col-md-4"></div>
									<div class="col-md-4">2000f</div>
								</div>
								<div class="row">
									<div class="col-md-4">Voiture</div>
									<div class="col-md-4"></div>
									<div class="col-md-4">5000f</div>
								</div>
								<div class="row mt-20">
									<div class="col-md-4">Total</div>
									<div class="col-md-4"></div>
									<div class="col-md-4">2000f</div>
								</div>
								
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default btn-xs btn-icon left-icon" data-dismiss="modal">Imprimer</button>
							<!-- <button type="button" class="btn btn-success btn-xs" data-dismiss="modal">Imprimer</button> -->
						</div>
					</div>
				</div>
			</div>
			<!-- <img src="{{asset('template/img/modals/model.png')}}" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive"/> -->
			<!-- Button trigger modal -->	
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$(document).ready(function(){
		$('#btnButton').hide();
		$('#total').hide();
		var tabs = [];
		var $n = 1;
		$cli = $('#ajoutPanier').click(function(){
	
			$produit =  $('#produit').val();
			if($produit==1){
				$vall = "Tapis";
			}else{
				$vall = "Voiture";
			}
			$taille  =  $('#taille').val();
			$montant =  Number($('#montant').val());
			$somme   =  Number($('#somme').text());
			$laSomme =  $somme + $montant;
	
			$('#somme').text($laSomme);
			$('#panier').append("<div id='div-"+$n+"'><div class='col-sm-3'>"+$vall+"</div><div class='col-sm-3'>"+$taille+"</div><div class='col-sm-3'>"+$montant+"</div><div class='col-sm-3'>"+"<a href='javascript:void(0)' title='Update'><i class='ti-pencil txt-primary'></i></a>"+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+"<a  id='div-"+$n+"' title='Delete'  onclick='document.getElementById('div-"+$n+"').remove();'><i class='zmdi zmdi-delete txt-danger'></i></a>"+"</div></div>");
			console.log('div-'+$n);
			tabs1 = new Array($produit,$taille,$montant);
			console.log(tabs1);
			tabs.push(tabs1);
			console.log(tabs);

			$('#btnButton').show();
			$('#total').show();
			$('#produit').val("");
			$('#taille').val("");
			$('#montant').val("");
			$n++;
		});
		$('#ajouterStatut').click(function(){
			$statut = $('#statut').val();
			// console.log($statut);
			$('#ticket').html() = $('#panier').html();
		});
		$("div-"+$n+"").click(function(){
			console.log("Dokhna");
			// $('div-'+$n).remove();
		});
		$('#btnAjax').click(function(){
			console.log(tabs);
			$prenom 	   =  $('#prenom').val();
			$nom    	   =  $('#nom').val();
			$phone  	   =  $('#phone').val();
			$user          =  $('#user').val();
			// $statut 	   =  $('#statut').val();
			$montantTotal  =  $laSomme;

			$.ajax({ 
				type: 'post', 
				url: "{{ url('storeService') }}", 
				data: { tab : tabs, user : $user, prenom : $prenom, nom : $nom, phone : $phone, statut : $statut, montantTotal : $montantTotal,_token: '{!! csrf_token() !!}' },
				success: function(response) { 
					console.log("Success");	
				}
			});
		});
		
});
</script>
@endsection