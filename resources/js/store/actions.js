let actions = {
  createAddress({commit}, address) {
    axios.post('/api/address', address)
      .then(res => {
        commit('CREATE_ADDRESS', res.data)
      }).catch(err => {
        console.log(err)
      })
  },
  async fetchAddresses({commit}) {
    await axios.get('/api/address')
      .then(res => {
        commit('FETCH_ADDRESSES', res.data)
      }).catch(err => {
        console.log(err)
      })
  },
  deleteAddress({commit}, address) {
    axios.delete('/api/address/' + address.id)
      .then(res => {
        if (res.data === 'ok') {
          commit('DELETE_ADDRESS', address)
        }
      }).catch(err => {
        console.log(err)
      })
  },
  saveAddress({commit}, address) {
    axios.put('/api/address/' + address.id, address)
      .then(res => {
        commit('SAVE_ADDRESS', res.data)
      }).catch(err => {
        console.log(err)
      })
  },
  getUpdateAddress({commit}, address) {
    commit('GET_UPDATE_ADDRESS', address)
  },
  copyAddressForRevert({commit}, address) {
    let JSONString = JSON.stringify(address)
    let JSONObj = JSON.parse(JSONString)
    commit('COPY_ADDRESS_FOR_REVERT', JSONObj)
  },
  revertAddress({commit}, address) {
    commit('REVERT_ADDRESS', address)
  },
  createCircle({commit}, circle) {
    axios.post('/api/circle', circle)
      .then(res => {
        commit('CREATE_CIRCLE', res.data)
      }).catch(err => {
        console.log(err)
      })
    },
    async fetchCircles({commit}) {
      await axios.get('/api/circle')
      .then(res => {
        commit('FETCH_CIRCLES', res.data)
      }).catch(err => {
        console.log(err)
      })
    },
    deleteCircle({commit}, circle) {
      axios.delete('/api/circle/' + circle.id)
      .then(res => {
        if (res.data === 'ok')
        commit('DELETE_CIRCLE', circle)
      }).catch(err => {
        console.log(err)
      })
    },
    saveCircle({commit}, circle) {
      axios.put('/api/circle/' + circle.id, circle)
      .then(res => {
        commit('SAVE_CIRCLE', res.data)
      }).catch(err => {
        console.log(err)
      })
    },
    getUpdateCircle({commit}, circle) {
      commit('GET_UPDATE_CIRCLE', circle)
    },
    changeCircleSelect({commit}, addOrUpdateAddress) {
      commit('CHANGE_CIRCLE_SELECT', addOrUpdateAddress)
    },
    setDeleteObject({commit}, object) {
      commit('SET_DELETE_OBJECT', object)
    },
    setDeleteAction({commit}, actionName) {
      commit('SET_DELETE_ACTION', actionName)
    }
}

export default actions
