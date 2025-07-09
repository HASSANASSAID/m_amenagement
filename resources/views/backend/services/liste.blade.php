@extends('layouts_backend.app')
@section('top-content')
       <!-- Page Header -->
                    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <nav>
                                <ol class="breadcrumb mb-1">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li> 
                                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                                </ol>
                            </nav>
                            <h1 class="page-title fw-medium fs-18 mb-0">Services</h1>
                        </div>
                        <div class="btn-list">
                             <a href="{{ route('services.create') }}" class="btn btn-primary-light btn-wave">
                                <i class="ri-add-line align-middle me-1"></i> Ajouter
                            </a> 
                            <button class="btn btn-primary-light btn-wave">
                                <i class="ri-upload-cloud-line align-middle me-1"></i> Exporter
                            </button> 
                        </div>
                    </div>
                    <!-- Page Header Close -->
@endsection
@section('content')
    @include('layouts_backend.alert') 

   <div class="card custom-card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                Liste des services
            </div>
            <div class="d-flex gap-3 align-items-center flex-wrap">
                <div class="btn-group">
                    <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:void(0)">Created Date</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Status</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Orders</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Product Name</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                    </ul>
                </div>
                <div class="custom-form-group custom-orders flex-grow-1">
                    <input type="text" class="form-control" placeholder="Search Orders.." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <a href="javascript:void(0);" class="text-muted custom-form-btn"><i class="ti ti-search"></i></a>
                </div> 
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
            <table id="table-paginations" class="table table-bordered text-nowrap w-100 dataTable no-footer dtr-inline" aria-describedby="responsiveDataTable_info" style="width: 940px;">
                    <thead>
                        <tr>
                            <th scope="col">Ref</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Catégorie</th> 
                            <th scope="col">Status</th> 
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)  
                        <tr class="order-list">
                            <td>{{$service->reference}}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="{{ asset($service->emage) }}" class="w-100 h-100" alt="..."></span>
                                    <div class="ms-2">
                                        <p class="fw-medium mb-0 d-flex align-items-center"><a href="order-details.php"> {{$service->libelle}}</a></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                        <img src="{{ asset(optional($service->color)->image) }}" alt="">
                                    </span>{{optional($service->color)->libelle}}
                                </div>
                            </td>
                            <td>   {{ optional($service->categorie)->libelle}}</td>                                             
                            <td><span class="badge bg-success-transparent">Shipped</span></td>
                            
                            <td>
                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                    <i class="ri-eye-line"></i>
                                </a> 
                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                    <i class="ri-delete-bin-line"></i>
                                </a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer border-top-0">
            <div class="d-flex align-items-center flex-wrap overflow-auto">
                <div class="mb-2 mb-sm-0">
                    Showing <b>1</b> to <b>8</b> entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
                </div>
                <div class="ms-auto">
                    <ul class="pagination mb-0 overflow-auto">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection