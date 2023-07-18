<div class="col-twelve">

    <!-- form -->
    {{-- <form name="contactForm" id="contactForm" method="post" action=""> --}}
          <fieldset>
          <div class="form-field">
            <input name="contactName" type="text" id="contactName" placeholder="Nombre" wire:model="name" value="" minlength="2" required="">
          </div>
          <div class="form-field">
            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" wire:model="email" value="" required="">
           </div>
          <div class="form-field">
            <input name="contactSubject" type="text" id="contactSubject" placeholder="telefono" wire:model="telefono" value="">
           </div>                       
          <div class="form-field">
                <textarea name="contactMessage" id="contactMessage" placeholder="Msg" wire:model="msg" rows="10" cols="50" required=""></textarea>
           </div>                      
         <div class="form-field">
             <button class="submitform" wire:click="send_contact">Enviar</button>
           
          </div>
          </fieldset>
      {{-- </form>  --}}

    <!-- contact-warning -->
    <div id="message-warning">            	
    </div>            
    <!-- contact-success -->
      <div id="message-success">
       <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      </div>

 </div> <!-- /col-twelve -->

 @push("scripts")
   <script>
    document.addEventListener("livewire:load", function(){

      document.addEventListener("close_swal", () => {
                  Swal.close()
      })

      document.addEventListener("inputs_empty", () => {
	      toastr.error('Debe llenar todos los campos', 'Contacto!');
      })

    })
   </script>
 @endpush