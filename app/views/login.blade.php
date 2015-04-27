@extends('layouts.main')



@section('content')



@foreach ($errors->all() as $error )

<p class="error">{{ $error}} </p>

@endforeach
{!! Form::open() !!}






 <input type="text " name="email" placeholder="Email" />

 <input type="password" name="mdp" placeholder="mot de passe" />
 <input type="submit" value="Se connecter" />










{!! Form::close() !!}

@stop

