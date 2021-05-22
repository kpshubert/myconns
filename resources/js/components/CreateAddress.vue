<template>
  <form action="" @submit="createAddress(address)">
    <h4 class="text-center font-weight-bold">Add Address</h4>
    <div class="form-group">
      <div class="row">
        <input type="text" placeholder="Street 1" v-model="address.street1" class="form-control" />
      </div>
      <div class="row">
        <input type="text" placeholder="Street 2" v-model="address.street2" class="form-control" />
      </div>
      <div class="row">
        <div class="col-md-4">
          <input type="text" placeholder="City" v-model="address.city" />
        </div>
        <div class="col-md-4">
          <input type="text" placeholder="ST" v-model="address.st" />
        </div>
        <div class="col-md-4">
          <input type="text" placeholder="ZIP" v-model="address.zip" />
        </div>
      </div>
        <div class="row">
      <input type="text" placeholder="County" v-model="address.county" />
      </div>
      <div class="row">
        <input type="text" placeholder="Country" v-model="address.country" />
      </div>
    </div>
    <div class="form-group">
      <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createAddress(address)">Submit
      </button>
    </div>
  </form>
</template>

<script>
  export default {
    name: "CreateAddress",
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

    <style scoped>

    </style>
