@extends('layouts.Layout')

@section('content')	
<!-- Main Content -->
<div class="page-wrapper pa-0 ma-0 auth-page">
    <div class="container-fluid">
        <!-- Row -->
        <div class="table-struct full-width full-height">
            <div class="table-cell vertical-align-middle auth-form-wrap">
                <div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="mb-30">
                                <!-- <h3 class="text-center txt-dark mb-10">Sign up to Winkle</h3> -->
                                <h6 class="text-center nonecase-font txt-grey">Nouveau Utilisateur</h6>
                            </div>	
                            <div class="form-wrap">
                                <form action="{{ url('storeUser')}}" method="post">
                                <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputName_1">Prénom</label>
                                        <input type="text" class="form-control" required="" id="exampleInputName_1" placeholder="Prénom Utilisateur">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputName_6">Nom</label>
                                        <input type="text" class="form-control" required="" id="exampleInputName_6" placeholder="Nom Utilisateur">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10" for="exampleInputEmail_2">Email</label>
                                        <input type="email" class="form-control" required="" id="exampleInputEmail_2" placeholder="Entrer email">
                                    </div>
                                    <div class="form-group">
                                        <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Mot de Passe</label>
                                        <input type="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="Mot de Passe">
                                    </div>
                                    <div class="form-group">
                                        <label class="pull-left control-label mb-10" for="exampleInputpwd_3">Confirmez Mot de Passe</label>
                                        <input type="password" class="form-control" required="" id="exampleInputpwd_3" placeholder="Confirmez Mot de Passe">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label mb-10">Profile</label>
                                        <select class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                        </select>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success btn-rounded">Enrégistrer</button>
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
@endsection