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
        if (res.data === 'ok')
        commit('DELETE_ADDRESS', address)
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
        console.log("res.data")
        console.log(res.data)
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
    }
}

export default actions
