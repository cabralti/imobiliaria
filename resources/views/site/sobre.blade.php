@extends('layouts.site')

@section('content')
<div class="container">
    <div class="row section">
        <h3 class="center-align">Sobre</h3>
        <div class="divider"></div>
    </div>
    <div class="row section">
        <div class="col s12 m6">
            <img src="{{ asset('img/modelo_img_home.jpg') }}" alt="" class="responsive-img">    
        </div>
        <div class="col s12 m6">
            <h4>A Empresa</h4>
            <blockquote>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime repudiandae fugit, libero accusantium at sed eaque commodi debitis itaque quisquam fuga facilis beatae minus dolorum animi doloremque accusamus ipsa consectetur.
            </blockquote>
            <p>Texto sobre a empresa.</p>
        </div>
    </div>
</div>
@endsection
