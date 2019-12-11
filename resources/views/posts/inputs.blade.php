<div class="row mg-b-25">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Título: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="titulo" class="" >{{ $post['titulo'] or 'Não Informado' }}</p>
      @else
        <input class="form-control form-control-dark" type="text" name="titulo" value="{{ $post->titulo  ?? old('titulo') }}" placeholder="Enter firstname" />
      @endif
    </div>
  </div><!-- col-12 -->

  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Texto: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="texto" class="" >{{ $post['texto'] or 'Não Informado' }}</p>
      @else
        <div id="editor">
            @if(old('texto'))
                old('texto')
            @else
                <br/><br/><br/>
            @endif
        </div>

      @endif
    </div>
  </div><!-- col-12 -->

  <div class="col-lg-12">
    <div class="form-group mg-b-10-force form-categorias">
      <label class="form-control-label">Categorias: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="categorias" class="">Detalhes Categorias</p>
      @else
        <select class="form-control select2" data-placeholder="Choose country" multiple="multiple" name="categorias[]" >
           @foreach($categorias as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
           @endforeach
        </select>
      @endif
    </div>
  </div><!-- col-4 -->

  <div class="col-lg-8">
    <div class="custom-file">
      <label class="form-control-label">Imagem: <span class="tx-danger">*</span></label>
      @isset($detalhe)
        <p id="imagem" class="">Detalhes da Imagem</p>
      @else
        <input type="file" class="custom-file-input"  id="validatedCustomFile" aria-describedby="inputGroupFileAddon04" name="image" value="{{ old('image') }}" />
        <label class="custom-file-label" for="validatedCustomFile">Selecione uma imagem</label>

      @endif
    </div>
  </div><!-- col-8 -->
</div><!-- row -->