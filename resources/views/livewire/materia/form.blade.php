@include('common.modalHead')
    <div class="form-group mb-4">
        <label for="formGroupExampleInput">Nombre de la materia</label>
        <input type="text" class="form-control" id="name" wire:model.lazy="name" placeholder="Ingrese el nombre de la materia">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
@include('common.modalFooter')