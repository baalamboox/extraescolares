@extends('layouts.scaffold')

@section('title', 'Credito deportivo')

@section('user')
    <img src="https://images.pexels.com/photos/2726111/pexels-photo-2726111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Profile" class="rounded-circle shadow-lg my-4" width="150" height="150">
    <h2 class="fs-5 fw-light mb-0">Usuario</h2>
    <small class="text-muted">Rol</small>
@endsection

@section('menu')
    <li class="mb-2 w-100">
        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-layer-group me-2"></i>Mis creditos</a>
    </li>
    <li class="mb-2 w-100">
        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-clock me-2"></i>Registrar horas</a>
    </li>
    <li class="w-100">
        <a href="#" class="btn btn-light rounded-pill text-start w-100"><i class="fa-solid fa-address-card me-2"></i>Datos académicos</a>
    </li>
@endsection

@section('main')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3">
                <button type="button" class="btn btn-primary position-relative h-100">
                    Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                </button>
            </div>
            <div class="col-md-9">
                <h1 class="">Bienvenido a tu credito deportivo</h1>
                <hr>
                <p>Recuerda que para poder liberar este credito necesitas:</p>
                <ul>
                    <li>MOOC.</li>
                    <li>Taller en que participaste.</li>
                    <li>Evidencias o constancias.</li>
                    <li>Todo en formato PDF.</li>
                </ul>
            </div>
        </div>
        <div class="row my-4">
            <div class="col bg-secondary rounded p-4">
                <p>Sube tus evidencias o constancias en su area correspondiente.</p>
                <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary position-relative">
                                Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                            </button>
                            <span>MOOC</span>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary position-relative">
                                Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                            </button>
                            <span>Taller</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end">
                            <button type="submit" class="btn btn-success rounded-pill"><i class="fa-solid fa-file-arrow-up me-2"></i>Subir archivos</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col bg-secondary rounded p-4">
                <p>Tabla de estado</p>
                <table class="table table-striped" id="tabla">
                    <thead>
                        <tr>
                            <th>Credito</th>
                            <th>Fecha de solicitud</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Deportivo</td>
                            <td>25/05/2023</td>
                            <td>Pendiente</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection