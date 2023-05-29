@extends('layouts.app')

@section('title', 'Registro')
    
@section('body')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-3 shadow border-0">
                    <div class="card-body">
                        <form action="{{route("auth.register")}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="profile-container pb-3">
                                <div class="profile mx-auto">
                                    <img src="https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg" alt="Profile" class="rounded-circle shadow" id="photo">
                                    <div class="photo_profile_container bg-success d-flex align-items-center justify-content-center rounded-circle">
                                        <label for="photo_profile" class="text-white" title="Subir foto"><i class="fa-solid fa-camera"></i></label>
                                        <input type="file" id="photo_profile" name="photo_profile" hidden>
                                    </div>
                                </div>
                            </div>
                            @error('photo_profile')
                                <div class="text-center">
                                    <span class="text-danger fw-bold text-center">{{ $message }}</span>
                                </div>
                            @enderror
                            @if ($error = Session::get('error'))
                                <div class="text-center">
                                    <span class="text-danger fw-bold text-center">{{ $error }}</span>
                                </div>                             
                            @endif
                            <fieldset class="px-3 mb-3">
                                <legend class="fs-5 border-bottom mb-4">Datos personales</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-pill @error('names') is-invalid @enderror" id="names" name="names" placeholder="Nombre(s)">
                                            @error('names')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                            @enderror
                                            <label for="names" class="form-label"><i class="fa-solid fa-user me-2"></i>Nombre(s)</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-pill @error('first_surname') is-invalid @enderror" id="first_surname" name="first_surname" placeholder="Apellido paterno">
                                            @error('first_surname')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                            @enderror
                                            <label for="first_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido paterno</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-pill @error('second_surname') is-invalid @enderror" id="second_surname" name="second_surname" placeholder="Apellido materno">
                                            @error('second_surname')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                            @enderror
                                            <label for="second_surname" class="form-label"><i class="fa-solid fa-user me-2"></i>Apellido materno</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo electrónico">
                                            @error('email')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                            @enderror
                                            <label for="email" class="form-label"><i class="fa-solid fa-envelope me-2"></i>Correo electrónico</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-pill @error('birthday') is-invalid @enderror" id="birthday" name="birthday" placeholder="Fecha nacimiento">
                                            @error('birthday')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                            @enderror
                                            <label for="birthday" class="form-label"><i class="fa-solid fa-calendar-days me-2"></i>Fecha nacimiento</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control rounded-pill @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" placeholder="Teléfono">
                                            @error('phone_number')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                                @enderror
                                                <label for="phone_number" class="form-label"><i class="fa-solid fa-phone me-2"></i>Teléfono</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="px-3 mb-3">
                                <legend class="fs-5 border-bottom mb-4">Datos escolares</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-pill @error('control_number') is-invalid @enderror" id="control_number" name="control_number" placeholder="Número de control">
                                            @error('control_number')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                                @enderror
                                                <label for="control_number" class="form-label"><i class="fa-solid fa-hashtag me-2"></i>Número de control</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-floating mb-3">
                                            <select class="rounded-pill" id="career" name="career" placeholder="Carrera" hidden>
                                                <option value="null">Elegir carrera</option>
                                                <option value="isc">Ingeniería en sistema computacionales</option>
                                                <option value="ii">Ingeniería industrial</option>
                                                <option value="ige">Ingeniería en gestión empresarial</option>
                                            </select>
                                            <input type="text" class="form-control rounded-pill @error('career') is-invalid @enderror" id="temp_career" placeholder="Carrera">
                                            @error('career')
                                                <span class="text-danger fw-bold" id="error_career">{{ $message }}</span>
                                                @enderror
                                                <label for="career" class="form-label"><i class="fa-solid fa-graduation-cap me-2"></i>Carrera</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-pill @error('admission_day') @enderror" id="admission_day" name="admission_day" placeholder="Fecha de ingreso al TecNM">
                                            @error('admission_day')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                                @enderror
                                                <label for="admission_day" class="form-label"><i class="fa-solid fa-calendar-days me-2"></i>Fecha de ingreso al TecNM</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control rounded-pill @error('school_origin') is-invalid @enderror" id="school_origin" name="school_origin" placeholder="Escuela de procedencia">
                                            @error('school_origin')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                            @enderror
                                            <label for="school_origin" class="form-label"><i class="fa-solid fa-school-flag me-2"></i>Escuela de procedencia</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="px-3 mb-3">
                                <legend class="fs-5 border-bottom mb-4">Datos de usuario</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control rounded-pill @error('user') is-invalid @enderror" id="user" name="user" placeholder="Usuario">
                                            @error('user')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                                @enderror
                                                <label for="user" class="form-label"><i class="fa-solid fa-user me-2"></i>Usuario</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña">
                                            @error('password')
                                                <span class="text-danger fw-bold">{{ $message }}</span>
                                            @enderror
                                            <label for="password" class="form-label"><i class="fa-solid fa-lock me-2"></i>Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-switch my-4">
                                    <input class="form-check-input" type="checkbox" role="switch" id="show_hide_password">
                                    <label class="form-check-label" for="show_hide_password" id="text_show_hide_password">Mostrar contraseña</label>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-success w-100 rounded-pill"><i class="fa-solid fa-user-plus me-2"></i>Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection