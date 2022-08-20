<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">
              <b>INFORMACIÓN</b> | <b>{{$componentName}}</b>
            </h5>
            <h6 class="text-center text-warning" wire:loading>POR FAVOR ESPERE</h6>
         </div>
         <div class="modal-body">
            <div>
               <label for="">
                  <h6>
                     <b>Nombre de la Materia: </b>
                  </h6>
               </label> {{$name}}
            </div>
            <div>
               <label for="">
                  <h6>
                     <b>Curso: </b>
                  </h6>
               </label> {{$course}}
            </div>
            <div>
               <label for="">
                  <h6>
                     <b>Grado: </b>
                  </h6>
               </label> {{$grade}}
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" wire:click.prevent="resetUI()" class="btn " data-dismiss="modal">
               <i class="las la-times"></i>
               CERRAR
            </button>
         </div>
      </div>
   </div>
</div>