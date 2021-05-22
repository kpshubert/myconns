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
    console.log('Running deleteAddress action')
    console.log(address.id)
    axios.delete('/api/address/' + address.id) //${address.id}')
      .then(res => {
        if (res.data === 'ok')
        commit('DELETE_ADDRESS', address)
      }).catch(err => {
        console.log(err)
      })
    console.log('Completed deletAddress action')
  }
}

export default actions
