<template>
<!-- Modal -->
  <div id="addUpdateModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add/Edit Circle</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <input id='txtCircleLevel' type="Text" placeholder="Circle Level" v-model="addUpdateCircle.circle_level" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input id='txtName' type="Text" placeholder="Circle Name" v-model="addUpdateCircle.name" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input id='txtDescription' type="Text" placeholder="Circle Description" v-model="addUpdateCircle.description" class="form-control" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="addOrUpdateCircle(addUpdateCircle)">Submit</button>
              </div
              <div class="col-md-6">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                addOrUpdateCircle(addUpdateCircle) {
                  if (addUpdateCircle.id === 0) {
                    this.$store.dispatch('createCircle', addUpdateCircle).then($("#addUpdateModal").modal("toggle"))
                  } else {
                    this.$store.dispatch('saveCircle', addUpdateCircle).then($("#addUpdateModal").modal("toggle"))
                  }
                },
             },
             computed: {
                 isValid() {
                     return this.addUpdateCircle.circle_level >= 0 && this.addUpdateCircle.name !== '' && this.addUpdateCircle.description !== ''
                 },
                 ...mapGetters(['addUpdateCircle']),
            }
  }
</script>
