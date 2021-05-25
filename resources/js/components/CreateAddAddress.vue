<template>
<!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <input type="Text" placeholder="Address 1" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="Text" placeholder="Address 2" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <input type="Text" placeholder="City" />
                </div>
                <div class="col-md-2">
                  <input type="Text" placeholder="State" />
                </div>
                <div class="col-md-2">
                  <input type="Text" placeholder="ZIP" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="Text" placeholder="County" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <input type="Text" placeholder="Country" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>

  </div>
</template>

<script>
  export default {
    data() {
    }
  }
</script>
