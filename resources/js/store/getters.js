let getters = {
  addresses: state => {
    return state.addresses
  },
  addUpdateAddress: state => {
    return state.addUpdateAddress
  },
  circles: state => {
    return state.circles
  },
  addUpdateCircle: state => {
    return state.addUpdateCircle
  },
  deleteRecord: state => {
    return state.deleteRecord
  }
}

export default getters
