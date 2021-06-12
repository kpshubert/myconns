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
  deleteObject: state => {
    return state.deleteObject
  },
  deleteAction: state => {
    return state.deleteAction
  }
}

export default getters
