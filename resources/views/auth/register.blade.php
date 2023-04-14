@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Registro" class="my-3">
                
                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @else 
                    <b-alert show>
                        Por favor ingresa tus datos:
                    </b-alert>
                @endif
        
                <b-form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <b-form-group label="Nombres" label-for="name">
                        <b-form-input id="name"
                            type="text"
                            name="name"     required autofocus>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Correo electronico" label-for="email"
                        description="We'll nnever share your email with anyone else.">
                        <b-form-input id="email"
                            type="email"
                            name="email"    required
                            placeholder="example@programacionymas.com">
                        </b-form-input>
                    </b-form-group>
    
                    <b-form-group label="Confirmar" label-for="passowrd"
                        description="We'll nnever share your email with anyone else.">
                        <b-form-input id="password"
                            type="password"
                            name="password" required>
                        </b-form-input>
                    </b-form-group>    
                    <b-form-group label="Contraseña contraseña" label-for="password_confirmation"
                        description="We'll nnever share your email with anyone else.">
                        <b-form-input id="password_confirmation"
                            type="password"
                            name="password_confirmation" required>
                        </b-form-input>
                    </b-form-group>                
                    <b-button type="submit" variant="primary">
                        Confirmar registro
                    </b-button>
                    <b-button href="{{route('password.request')}}" variant="link">
                        ¿Ya te has registrado?
                    </b-button>
             </b-form>
        </b-col>
    </b-row>
</b-container>
@endsection
