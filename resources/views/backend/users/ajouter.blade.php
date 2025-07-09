@extends('layouts_backend.app')
@section('top-content')
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Utilisateurs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header Close -->
@endsection
@section('content') 
    <!-- Start:: row-2 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Ajouter un utilisateur
                    </div> 
                </div>
                <div class="card-body">
                    <form action="{{ route('user.save') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-label" class="form-label">Nom</label>
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="input" name="nom" value="{{ old('nom') }}">
                                @error('nom')   
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>     
                                @enderror 
                            </div> 
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-label" class="form-label">Email</label>
                                <input type="text" class="form-control" id="input" name="email" >
                                @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-placeholder" class="form-label">Mot de passe</label>
                                <input type="text" class="form-control" id="input-placeholder"   name="mtdp">
                                @error('mtdp')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-placeholder" class="form-label">Statut</label>
                                <select class="form-select" id="inputGroupSelect01" name="statut">
                                    <option value="1">Actif</option>
                                    <option value="0">Inactif</option>
                                </select>
                                @error('statut')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="row mt-3 float-end">
                            <div class="prism-toggle">
                                <button class="btn btn-sm btn-primary" type="submit">Enregistrer </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-2 -->

@endsection