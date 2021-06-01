<template>
  <div>
    <button type="button" class="btn btn-info btn-lg" @click="showCreateModal()">Add Circle</button>
    <h4 class="text-center font-weight-bold">Circles</h4>
    <div class="row">
      <vue-good-table
        :columns="columns"
        :rows="circles"
        :fixed-header="true"
        :pagination-options="{
              enabled: true,
              mode: 'pages',
              perPage: 10,
              position: 'top',
              perPageDropdown: [5, 10, 20, 30, 40, 50, 75, 100],
              dropdownAllowAll: true
            }">
        <template slot="table-row" slot-scope="props">
            <span v-if="props.column.field == 'buttonSet'">
              <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-success" @click="showUpdateModal(props.row)"><i style="color:white" class="fa fa-edit"></i></button>
                </div>
                <div class="col-md-6">
                  <button class="btn btn-danger" @click="deleteCircle(props.row)"><i style="color:white" class="fa fa-trash"></i></button>
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
    name: "Circles",
    components: {
      VueGoodTable
    },
    async mounted() {
                await this.$store.dispatch('fetchCircles')
              },
    data() {
      return { circle: {
        id: 0,
        circle_level: 0,
        name: '',
        description: ''},
      rows: [],
      columns: [
        {
          label: 'Circle Level',
          field: 'circle_level'
        },
        {
          label: 'Name',
          field: 'name'
        },
        {
          label: 'Description',
          field: 'description'
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
                deleteCircle(circle) {
                    this.$store.dispatch('deleteCircle', circle)
                },
                showUpdateModal(circle) {
                  this.$store.dispatch('getUpdateCircle', circle)
                  $('#txtCircleLevel').focus()
                  $('#addUpdateModal').modal('show')
                },
                showCreateModal() {
                  this.$store.dispatch('getUpdateCircle', { id: 0, circle_level: 0, name: '', description: ''})
                  $('#txtCircleLevel').focus()
                  $('#addUpdateModal').modal('show')
                }
             },
    computed: {
                 ...mapGetters([
                  'circles'
                ])
            }
        };
    </script>
    <style scoped>
    </style>
