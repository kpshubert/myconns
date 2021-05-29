<template>
  <div>
    <button type="button" class="btn btn-info btn-lg" @click="showCreateModal()">Add Address</button>
    <h4 class="text-center font-weight-bold">Addresses</h4>
    <div class="row">
      <vue-good-table
        :columns="columns"
        :rows="addresses"
        :fixed-header="true"
        :pagination-options="{
              enabled: true,
              mode: 'records',
              perPage: 10,
              position: 'top',
              perPageDropdown: [5, 10, 20, 30, 40, 50, 75, 100],
              dropdownAllowAll: true,
              setCurrentPage: 2,
              nextLabel: 'next',
              prevLabel: 'prev',
              rowsPerPageLabel: 'Rows per page',
              ofLabel: 'of',
              pageLabel: 'page', // for 'pages' mode
              allLabel: 'All',
              infoFn: (params) => `my own page ${params.firstRecordOnPage}`,
            }">
        <template slot="table-row" slot-scope="props">
            <span v-if="props.column.field == 'buttonSet'">
              <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-success" @click="showUpdateModal(props.row)"><i style="color:white" class="fa fa-edit"></i></button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-danger" @click="deleteAddress(props.row)"><i style="color:white" class="fa fa-trash"></i></button>
                </div>
              </div>
            </span>
            <span v-else>
              {{props.formattedRow[props.column.field]}}
            </span>
        </template>
      </vue-good-table>
    </div>
  </div>
</template>

<script>
  import { mapGetters } from 'vuex'
  import { VueGoodTable } from 'vue-good-table'

  export default {
    name: "Addresses",
    components: {
      VueGoodTable
    },
    async mounted() {
                await this.$store.dispatch('fetchAddresses')
              },
    data() {
      return { addAddress: {
        street1: '',
        street2: '',
        city: '',
        st: '',
        zip: '',
        county: '',
        country: ''},
      rows: [],
      columns: [
        {
          label: 'Street 1',
          field: 'street1'
        },
        {
          label: 'Street 2',
          field: 'street2'
        },
        {
          label: 'City',
          field: 'city'
        },
        {
          label: 'State',
          field: 'st'
        },
        {
          label: 'ZIP',
          field: 'zip'
        },
        {
          label: 'County',
          field: 'county'
        },
        {
          label: 'Country',
          field: 'country'
        },
        {
          label: 'Actions',
          field: 'buttonSet',
          sortable: false
        }
      ]
    }
    },
    methods: {
                deleteAddress(address) {
                    this.$store.dispatch('deleteAddress', address)
                },
                showUpdateModal(address) {
                  this.$store.dispatch('getUpdateAddress', address)
                  $('#txtAddress1').focus()
                  $('#addUpdateModal').modal('show')
                },
                showCreateModal() {
                  this.$store.dispatch('getUpdateAddress', { id: 0, street1: '', street2: '', city: '', st: '', zip: '', county: '', country: ''})
                  $('#txtAddress1').focus()
                  $('#addUpdateModal').modal('show')
                }
             },
    computed: {
                 ...mapGetters([
                  'addresses'
                ])
            }
        };
    </script>
    <style scoped>

    </style>
