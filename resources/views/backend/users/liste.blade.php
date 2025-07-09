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
                             <a href="{{ route('users.create') }}" class="btn btn-primary-light btn-wave">
                                <i class="ri-add-line align-middle me-1"></i> Ajouter
                            </a> 
                           
                        </div>
                    </div>
                    <!-- Page Header Close -->
@endsection
@section('content')
    @include('layouts_backend.alert') 

   <div class="card custom-card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                Liste des utilisateurs
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
                            <th scope="col">id</th>
                            <th scope="col">Nom</th>
                            <th scope="col">email</th> 
                            <th scope="col">Status</th> 
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key=> $user)  
                        <tr class="order-list">
                            <td>{{$key +1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                                    <td>
                                @if($user->etat == 1)
                                    <span class="badge bg-success-transparent">Active</span>
                                @else
                                    <span class="badge bg-danger-transparent">Inactive</span>
                                @endif 
                            
                            </td>
                            <td>
                                <!-- Modifier User Button -->
                                <!-- Modifier User Button -->
                                <button class="btn btn-icon btn-sm btn-warning-light btn-wave waves-effect waves-light" title="Modifier" data-bs-toggle="modal" data-bs-target="#editUserModal{{$user->id}}">
                                    <i class="ri-edit-line"></i>
                                </button>

                                <!-- Edit User Modal -->
                                <div class="modal fade" id="editUserModal{{$user->id}}" tabindex="-1" aria-labelledby="editUserModalLabel{{$user->id}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('user.update') }}" method="POST">
                                            @csrf 
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editUserModalLabel{{$user->id}}">Modifier Utilisateur</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="name{{$user->id}}" class="form-label">Nom</label>
                                                        <input type="text" class="form-control" id="name{{$user->id}}" name="nom" value="{{ $user->name }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email{{$user->id}}" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email{{$user->id}}" name="email" value="{{ $user->email }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password{{$user->id}}" class="form-label">Mot de passe</label>
                                                        <input type="password" class="form-control" id="password{{$user->id}}" name="password" placeholder="Laissez vide pour ne pas changer">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="etat{{$user->id}}" class="form-label">Status</label>
                                                        <select class="form-select" id="etat{{$user->id}}" name="etat" required>
                                                            <option value="1" {{ $user->etat == 1 ? 'selected' : '' }}>Active</option>
                                                            <option value="0" {{ $user->etat == 0 ? 'selected' : '' }}>Inactive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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