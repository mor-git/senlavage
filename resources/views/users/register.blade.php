@extends('layouts.Layout')

@section('content')	
<div class="wrapper theme-1-active navbar-top-light">
    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Nouveau Utilisateur</h5>
                </div>
            
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Dashboard</a></li>
                        <li><a href="#"><span>form</span></a></li>
                        <li class="active"><span>Utilisateurs</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            
            </div>
            <!-- /Title -->
            
            <!-- Row -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-default card-view">
                        <!-- <div class="panel-heading">
                            <div class="pull-left">
                                <h6 class="panel-title txt-dark">Form with icon</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                        <div class="panel-wrapper collapse in">
                            <h5>Ajout Utilisateur</h5><br>
                            <div class="panel-body">
                                
                                <div class="row">
                                    <div class="col-sm-12 col-xs-12">
                                        <div class="form-wrap">
                                            <form action="{{ url('storeUser')}}" method="post" class="form-horizontal">
                                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="exampleInputText_6">Prenom*</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                            <input type="text" name="prenom" class="form-control" id="exampleInputText_6" placeholder="Prénom">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="exampleInputText_5">Nom*</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                                            <input type="text" name="name" class="form-control" id="exampleInputText_5" placeholder="Nom">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="exampleInputEmail_4">adresse Email*</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                            <input type="email" name="email" class="form-control" id="exampleInputEmail_4" placeholder="Entrer l'email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="exampleInputpwd_3">Mot de Passe*</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                            <input type="password" name="password" class="form-control" id="exampleInputpwd_3" placeholder="Mot de Passe*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="exampleInputpwd_2">Confirm Mot de Passe*</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                            <input type="password" name="password_confirmation" class="form-control" id="exampleInputpwd_2" placeholder="Confirmez le Mot de Passe">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">Profile*</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="profil" data-placeholder="Choose a Category" tabindex="1">
                                                            <option></option>
                                                            @foreach($profils as $profil)
                                                            <option value="{{ $profil->id }}">{{ $profil->profilName }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div><br>
                                                <div class="centre">
                                                    <div class="col-sm-3"></div>
                                                    <div class="col-sm-6">
                                                        <button type="submit" class="btn btn-success btn-rounded">Enrégistrer</button>&nbsp;&nbsp;
                                                        <button type="submit" class="btn btn-primary btn-rounded">Annuler</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
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
		
		