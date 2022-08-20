         </div>
         <div class="modal-footer">
            <button type="button" wire:click.prevent="resetUI()" class="btn " data-dismiss="modal">
               <i class="las la-times"></i>
               CERRAR
            </button>
            @if ($selected_id < 1)
            <button type="button" wire:click.prevent="store()" class="btn btn-dark">
               GUARDAR
            </button>
            @else
            <button type="button" wire:click.prevent="update()" class="btn btn-dark">
               ACTUALIZAR
            </button>
            @endif
         </div>
      </div>
   </div>
</div>