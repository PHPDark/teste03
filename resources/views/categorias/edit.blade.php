@extends('layouts.main02')

@section('title', 'Criar Categoria')

@section('content')

<style type="text/css">
    .com-padding-top {
        padding-top: 100px;
    }
</style>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
  <div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="#">Home</a>
      <a class="breadcrumb-item" href="#">Categorias</a>
      <span class="breadcrumb-item active">Editar Categoria</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="br-pagetitle">
    <i class="icon ion-ios-gear-outline"></i>
    <div>
      <h4>Editar {{ $categoria->nome }}</h4>
      <p class="mg-b-0">Edite a categoria para utilizar nos seus posts</p>
    </div>
  </div><!-- d-flex -->

    @if($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
       </div>
    @endif

  <div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="form-layout form-layout-1">
		
		<form id="form-categorias-edit" name="form-categorias-edit" action="{{ route('categorias.update', $categoria->id) }}" method="POST" enctype="multipart/form-data">

			      @csrf
            {{method_field('PATCH')}}

            @include('categorias.inputs', ['categoria' => $categoria, 'detalhe' => null])

	        <div class="form-layout-footer">
	          <button class="btn btn-primary" type="submit">Salvar Alterações</button>
	          <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
	        </div><!-- form-layout-footer -->
		 </form>

      </div><!-- form-layout -->
    </div>
  </div>
</div><!--  end mainpanel -->

@endsection


