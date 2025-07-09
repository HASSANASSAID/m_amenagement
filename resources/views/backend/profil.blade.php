@extends('layouts_backend.app')
@section('top-content')
    <!-- Page Header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div>
            <nav>
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header Close -->
@endsection
@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card profile-card">
                <div class="profile-banner-img">
                    <img src="https://php.spruko.com/zeno/zeno/assets/images/media/media-3.jpg" class="card-img-top"
                        alt="...">
                </div>
                <div class="card-body pb-0 position-relative">
                    <div class="row profile-content">
                        <div class="col-xl-9">
                            <div class="card custom-card overflow-hidden border">
                                <div class="card-body"> 
                                    <div class="tab-content" id="profile-tabs">
                                        
                                        <div class="tab-pane p-0 border-0 active show" id="edit-profile-tab-pane"
                                            role="tabpanel" aria-labelledby="edit-profile-tab" tabindex="0">
                                            <ul class="list-group list-group-flush border rounded-3">
                                                <form action="{{ route('user.update') }}" method="POST">
                                                    @csrf 
                                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                                    <li class="list-group-item p-3">
                                                        <span class="fw-medium fs-15 d-block mb-3">Informations personnelles :</span>
                                                        <div class="row gy-3 align-items-center">
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Nom :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" name="nom" value="{{ $user->name }}"
                                                                    placeholder="Placeholder" >
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Email :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                                                    placeholder="Placeholder" >
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Mot de passe :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <input type="text" class="form-control" name="mtdp"  placeholder="Laissez vide pour ne pas changer" >
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="lh-1">
                                                                    <span class="fw-medium">Statut :</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-9">
                                                                <select class="form-select" id="etat{{$user->id}}" name="etat" required>
                                                                    <option value="1" {{ $user->etat == 1 ? 'selected' : '' }}>Active</option>
                                                                    <option value="0" {{ $user->etat == 0 ? 'selected' : '' }}>Inactive</option>
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="row mt-3 float-end">
                                                                <div class="prism-toggle">
                                                                    <button class="btn btn-sm btn-primary" type="submit">Enregistrer </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li> 
                                                </form>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card overflow-hidden border">
                                <div class="card-body border-bottom border-block-end-dashed">
                                    <div class="text-center">
                                        <span class="avatar avatar-xxl avatar-rounded online mb-3">
                                            <img src="https://php.spruko.com/zeno/zeno/assets/images/faces/11.jpg" alt="">
                                        </span>
                                        <h5 class="fw-medium mb-1">{{ auth()->user()->name }} </h5>
                                        <span class="d-block fw-medium text-muted mb-2">Admin</span>
                                        <p class="fs-12 mb-0 text-muted">  
                                                    <span><i
                                                    class="ri-map-pin-line me-1 align-middle"></i>Maroc</span> </p>
                                    </div>
                                </div>
                          
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection