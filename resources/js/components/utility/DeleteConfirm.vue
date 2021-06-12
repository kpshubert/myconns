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
                <button class="btn btn-block btn-primary" @click="yesClicked(deleteAction, deleteObject)">Yes</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-block btn-danger btn-default" @click="closeDialog()">No</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  export default {
    methods: {
                yesClicked(deleteAction, deleteObject) {
                  this.$store.dispatch(deleteAction, deleteObject)
                  $("#deleteConfirmModal").modal("toggle")
                },
                closeDialog() {
                  $("#deleteConfirmModal").modal("toggle")
                }
             },
    computed: {
                ...mapGetters([
                    'deleteAction',
                    'deleteObject'
                ])
              }

  }
</script>
