<template>
  <div>
    <h4 class="text-center font-weight-bold">Addresses</h4>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Street 1</th>
          <th scope="col">Street 2</th>
          <th scope="col">City</th>
          <th scope="col">ST</th>
          <th scope="col">ZIP</th>
          <th scope="col">County</th>
          <th scope="col">Country</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="addressInfo in addresses">
          <td>{{addressInfo.street1}}</td>
          <td>{{addressInfo.street2}}</td>
          <td>{{addressInfo.city}}</td>
          <td>{{addressInfo.st}}</td>
          <td>{{addressInfo.zip}}</td>
          <td>{{addressInfo.county}}</td>
          <td>{{addressInfo.country}}</td>
          <td>
            <button class="btn btn-danger" @click="deleteAddress(addressInfo)"><i style="color:white" class="fa fa-trash"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex'

  export default {
    name: "Addresses",
    async mounted() {
                await this.$store.dispatch('fetchAddresses')
              },
    methods: {
                deleteAddress(address) {
                    this.$store.dispatch('deleteAddress',address)
                }
            },
    computed: {
                 ...mapGetters([
                  'addresses'
                ]),
                addressesList() {
                  return this.$store.state.addresses
                },
                addressCount() {
                  return this.addressesTest.length
                },
                addressListCount() {
                  return this.$store.getters.addressesTest.length
                }
            }
        };
    </script>
    <style scoped>

    </style>
