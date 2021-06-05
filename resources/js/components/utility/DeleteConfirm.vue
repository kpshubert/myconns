<template>
<!-- Modal -->
  <div id="deleteConfirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Confirm Delete</h4>
          <button type="button" class="close" @click="setDelete(false)">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <p>Are you sure you want to delete this record?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <button class="btn btn-block btn-primary" @click="setDelete(true)">Yes</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-block btn-danger btn-default" @click="setDelete(false)">No</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    methods: {
                setDelete(value) {
                  this.$store.dispatch('deleteRecord', value)
                  $("#deleteConfirmModal").modal("toggle")
                }
             }
  }
</script>
