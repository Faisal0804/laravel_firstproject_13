

<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">update product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div id="ErroMsg">

        <ul type="none"><li ></li></ul>
           

        </div>

        <div id="successMes">
           

        </div>
       
       
        

       <form action="{{route('update.product')}}" method="post" id="updateproduct">
         @csrf
         <input  type="hidden"  id="up_id" >
         <div class="form">
           <label for="">Product Name</label>
           <input  type="text" name="up_pname" id="up_pname" >
         </div>

         <div class="form mt-3">
           <label for="">Product price</label>
           <input type="text" name="up_price" id="up_price" >
         </div>
         
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary update_product">Save product</button>
      </div>
    </div>
  </div>
</div>