@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} - {{ session('user_name') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{ session('user_role_name') }}

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.jenis_hewan.index') }}" class="btn btn-primary btn-block">
                                    <i class="fas fa-paw"></i> Jenis Hewan
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.pemilik.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Pemilik
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.kategori.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Kategori
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.kategori_klinis.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Kategori Klinis
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.kode_tindakan_terapi.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Kode Tindakan Terapi
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.pet.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Pet
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.ras_hewan.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Ras Hewan
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.role.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Role
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.user.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> User
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.pasien.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Pasien
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.pendaftaran.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Pendaftaran
                                </a>
                            </div>
                            <div class="col-md-12 mb-2">
                                <a href="{{ route('admin.rekam_medis.index') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-users"></i> Rekam Medis
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
