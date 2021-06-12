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
  },
  COPY_ADDRESS_FOR_REVERT(state, address) {
    state.revertAddress = address
  },
  REVERT_ADDRESS(state, address) {
    address.street1 = state.revertAddress.street1
    address.street2 = state.revertAddress.street2
    address.city = state.revertAddress.city
    address.st = state.revertAddress.st
    address.zip = state.revertAddress.zip
    address.county = state.revertAddress.county
    address.country = state.revertAddress.country
    address.highestcircle = state.revertAddress.highestcircle
    address.circle_info = state.revertAddress.circle_info
    address.effectivedate = state.revertAddress.effectivedate
    address.enddate = state.revertAddress.enddate
  },
  CREATE_CIRCLE(state, circle) {
    state.circles.unshift(circle)
  },
  FETCH_CIRCLES(state, circles) {
    return state.circles = circles
  },
  DELETE_CIRCLE(state, circle) {
    let index = state.circles.findIndex(item => item.id === circle.id)
    state.circles.splice(index, 1)
  },
  SAVE_CIRCLE(state, circle) {
    let index = state.circles.findIndex(item => item.id === circle.id)
    state.circles[index] = circle
  },
  GET_UPDATE_CIRCLE(state, circle) {
    state.addUpdateCircle = circle
  },
  CHANGE_CIRCLE_SELECT(state, addOrUpdateAddress) {
    let circleIndex = state.circles.findIndex(item => item.circle_level === addOrUpdateAddress.highestcircle)
    let circle_info = state.circles[circleIndex].circle_info
    addOrUpdateAddress.circle_info = circle_info
  },
  SET_DELETE_OBJECT(state, object) {
    state.deleteObject = object
  },
  SET_DELETE_ACTION(state, deleteAction) {
    state.deleteAction = deleteAction
  }
}
export default mutations
