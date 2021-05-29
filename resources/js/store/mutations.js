let mutations = {
  CREATE_ADDRESS(state, address) {
    state.addresses.unshift(address)
  },
  FETCH_ADDRESSES(state, addresses) {
    return state.addresses = addresses
  },
  DELETE_ADDRESS(state, address) {
    let index = state.addresses.findIndex(item => item.id === address.id)
    state.addresses.splice(index, 1)
  },
  SAVE_ADDRESS(state, address) {
    let index = state.addresses.findIndex(item => item.id === address.id)
    state.addresses[index] = address
  },
  GET_UPDATE_ADDRESS(state, address) {
    state.addUpdateAddress = address
  }
}
export default mutations
