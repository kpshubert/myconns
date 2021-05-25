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
                  <input type="Text" placeholder="Address 1" v-model="address.street1" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="Text" placeholder="Address 2" v-model="address.street2" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <input type="Text" placeholder="City" v-model="address.city" class="form-control" />
                </div>
                <div class="col-md-2">
                  <input type="Text" placeholder="State" v-model="address.st" class="form-control" />
                </div>
                <div class="col-md-2">
                  <input type="Text" placeholder="ZIP" v-model="address.zip" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="Text" placeholder="County" v-model="address.county" class="form-control" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                <input type="Text" placeholder="Country"  v-model="address.country" class="form-control"/>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createAddress(address)">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>

  </div>
</template>

<script>
  export default {
    data() {
    return {
              address: {
                street1: '',
                street2: '',
                city: '',
                st: '',
                zip: '',
                county: '',
                country: ''
              }
           }
    },
    methods: {
                createAddress(address) {
                    this.$store.dispatch('createAddress', address)
                }
             },
             computed: {
                 isValid() {
                     return this.address.street1 !== '' && this.address.street2 !== '' && this.address.city !== '' && this.address.st !== ''
                       && this.address.zip !== '' && this.address.county !== '' && this.address.country !== ''
                 }
            }
  }
</script>
