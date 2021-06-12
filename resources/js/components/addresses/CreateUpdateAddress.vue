<template>
<!-- Modal -->
  <div id="addUpdateModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add/Edit Address</h4>
          <button type="button" class="close" @click="cancelChange(addUpdateAddress)">&times;</button>
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
              <div class="row">
                <div class="col-md-12">
                  <br/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  Circle:
                </div>
                <div class="col-md-6">
                  <select v-model="addUpdateAddress.highestcircle" @change="changeCircleSelect(addUpdateAddress)">
                    <option v-for="circle in circles" :value="circle.circle_level">{{circle.circle_info}}</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <p>Effective Date</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <VueCtkDateTimePicker v-model="addUpdateAddress.effectivedate" dark></VueCtkDateTimePicker>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12">
                      <p>End Date</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <VueCtkDateTimePicker v-model="addUpdateAddress.enddate" dark></VueCtkDateTimePicker>
                    </div>
                  </div>
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
              </div>
              <div class="col-md-6">
                <button class="btn btn-block btn-danger btn-default" @click="cancelChange(addUpdateAddress)">Close</button>
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
    async mounted() {
      await this.$store.dispatch('fetchCircles')
    },
    methods: {
                addOrUpdateAddress(addUpdateAddress) {
                  if (addUpdateAddress.id === 0) {
                    this.$store.dispatch('createAddress', addUpdateAddress).then($("#addUpdateModal").modal("toggle"))
                  } else {
                    this.$store.dispatch('saveAddress', addUpdateAddress).then($("#addUpdateModal").modal("toggle"))
                  }
                },
                changeCircleSelect(addUpdateAddress) {
                  this.$store.dispatch('changeCircleSelect', addUpdateAddress)
                },
                cancelChange(addUpdateAddress) {
                  this.$store.dispatch('revertAddress', addUpdateAddress)
                  $("#addUpdateModal").modal("toggle")
                },
             },
             computed: {
                 isValid() {
                     return this.addUpdateAddress.street1 !== '' && this.addUpdateAddress.street2 !== '' && this.addUpdateAddress.city !== '' && this.addUpdateAddress.st !== ''
                       && this.addUpdateAddress.zip !== '' && this.addUpdateAddress.county !== '' && this.addUpdateAddress.country !== ''
                 },
                 ...mapGetters(['addUpdateAddress', 'circles']),
            }
  }
</script>
