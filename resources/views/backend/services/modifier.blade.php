@extends('layouts_backend.app')
@section('top-content')
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">AJouter</li>
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
                        Ajouter un service
                    </div>

                </div>
                <div class="card-body">
                    <form action="{{ route('service.update') }}" method="post" enctype="multipart/form-data"
                        class="form-horizontal">
                        @csrf
                        <input type="hidden" name="id" value="{{ $service->id ?? '' }}">
                        <div class="row gy-4">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-label" class="form-label">Réference</label>
                                <input type="text" class="form-control @error('ref') is-invalid @enderror" id="input" name="ref" value="{{ $service->reference ?? old('ref') }}">
                                @error('ref')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-label" class="form-label">Libelle</label>
                                <input type="text" class="form-control" id="input" name="libelle"  value="{{ $service->libelle ?? old('libelle') }}">
                                @error('libelle')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-placeholder" class="form-label">Déscription</label>
                                <input type="text" class="form-control" id="input-placeholder" placeholder="Placeholder" value="{{ $service->description ?? old('description') }}"
                                    name="description">
                                @error('description')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-file" class="form-label">Image</label>
                                <div class="row">
                                    <div class="col-md-2">
                                        <span class="avatar avatar-xxl avatar-square bg-gray-300"><img src="{{ asset($service->emage) }}" class="w-100 h-100" alt="..."></span>
                                    </div>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" id="input-file" name="image">
                                    </div>

                                </div>
                                @error('image')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"> 
                                <label for="input-placeholder" class="form-label">Couleur</label>
                                <select class="form-select" id="inputGroupSelect01" name="color">
                                    <option value="" >...</option>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color->id }}" {{ (isset($service) && $service->color_id == $color->id) ? 'selected' : '' }}>{{ $color->libelle}}</option>
                                    @endforeach 
                                </select>
                                @error('color')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <label for="input-placeholder" class="form-label">Catégorie</label>
                                <select class="form-select" id="inputGroupSelect01"  name="categorie">
                                    <option value="">...</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}" {{ (isset($service) && $service->categorie_id == $categorie->id) ? 'selected' : '' }}>{{ $categorie->libelle}}</option>
                                    @endforeach 
                                </select>
                                @error('categorie')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <label for="input-placeholder" class="form-label">Statut</label>
                                <select class="form-select" id="inputGroupSelect01" name="statut">
                                    <option value="1" {{ (isset($service) && $service->statut == 1) ? 'selected' : '' }}>Actif</option>
                                    <option value="0" {{ (isset($service) && $service->statut == 0) ? 'selected' : '' }}>Inactif</option>
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