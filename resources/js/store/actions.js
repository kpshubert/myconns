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
    axios.put('/api/address/', address)
      .then(res => {
        commit('SAVE_ADDRESS', res.data)
      }).catch(err => {
        console.log(err)
      })
  },
  getUpdateAddress({commit}, address) {
    commit('GET_UPDATE_ADDRESS', address)
  }
}

export default actions
