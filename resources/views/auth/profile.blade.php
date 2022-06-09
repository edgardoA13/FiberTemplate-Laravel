@extends('layouts.app-profile')

@section('content')
    
    <header>	
            <div class="container mt-5 pt-5">
                <div class="row contenido">				
                    <div class="col-12 py-5">					
                        <form>
                            <div class="text-center mb-4 containerdiv">
                                <img src="../images/avatar.jpg" class="img-avatar rounded-circle img-thumbnail">
                            </div>
                            <div class="form-group">
                                <label for="name_user" class="font-weight-bold">Nombre</label>
                                <input type="" class="form-control" name="name_user" id="name_user" value="{{auth()->user()->name}}" disabled="disabled">
                            </div>

                            <div class="form-group">
                                <label for="email_user" class="font-weight-bold">Correo</label>
                                <input type="" class="form-control" name="email_user" id="email_user" value="{{auth()->user()->email}}" disabled="disabled">
                            </div>						
                        </form>
                    </div>
                </div>
            </div>	
    </header>
    
@endsection