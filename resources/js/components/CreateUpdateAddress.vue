<template>
<!-- Modal -->
  <div id="addUpdateModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add/Edit Address</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <input id='txtAddress1' type="Text" placeholder="Address 1" v-model="addUpdateAddress.street1" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input id='txtAddress2' type="Text" placeholder="Address 2" v-model="addUpdateAddress.street2" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <input id='txtCity' type="Text" placeholder="City" v-model="addUpdateAddress.city" class="form-control" />
                </div>
                <div class="col-md-2">
                  <input id='txtSt' type="Text" placeholder="State" v-model="addUpdateAddress.st" class="form-control" />
                </div>
                <div class="col-md-2">
                  <input id='txtZIP' type="Text" placeholder="ZIP" v-model="addUpdateAddress.zip" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input id='txtCounty' type="Text" placeholder="County" v-model="addUpdateAddress.county" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input id='txtCountry' type="Text" placeholder="Country"  v-model="addUpdateAddress.country" class="form-control"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="addOrUpdateAddress(addUpdateAddress)">Submit</button>
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
                addOrUpdateAddress(addUpdateAddress) {
                  if (addUpdateAddress.id === 0) {
                    this.$store.dispatch('createAddress', addUpdateAddress).then($("#addUpdateModal").modal("toggle"))
                  } else {
                    this.$store.dispatch('saveAddress', addUpdateAddress).then($("#addUpdateModal").modal("toggle"))
                  }
                },
             },
             computed: {
                 isValid() {
                     return this.addUpdateAddress.street1 !== '' && this.addUpdateAddress.street2 !== '' && this.addUpdateAddress.city !== '' && this.addUpdateAddress.st !== ''
                       && this.addUpdateAddress.zip !== '' && this.addUpdateAddress.county !== '' && this.addUpdateAddress.country !== ''
                 },
                 ...mapGetters(['addUpdateAddress']),
            }
  }
</script>
