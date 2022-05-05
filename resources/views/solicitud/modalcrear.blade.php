<!-- Modal -->
<div class="modal fade" id="Solicitud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitud</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/action_page.php"  class="redireccionar">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Numero de investigación:</label>
              <input type="text" class="form-control" id="email" placeholder="Numero de investigacion " name="numinv">
            </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Tipo:</label>
              <select class="form-select mt-3">
                  <option>Con detenido</option>
                  <option>Sin detenido</option>
                  <option>Cuadernillo</option>
                  <option>Orden de aprehension</option>
              </select>
            </div>
         
            <a href=""type="submit" class="btn btn-primary">Submit</a>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
