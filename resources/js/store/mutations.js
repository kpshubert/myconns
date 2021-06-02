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
  CHANGE_CIRCLE_SELECT(state, args) {
    let addressIndex = state.addresses.findIndex(item => item.id === args[0])
    let circleIndex = state.circles.findIndex(item => item.circle_level === args[1])
    let circle_info = state.circles[circleIndex].circle_info
    state.addresses[addressIndex].circle_info = circle_info
  }
}
export default mutations
