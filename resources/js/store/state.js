let state = {
  addresses: [],
  saveClicked: false,
  deleteRecord: false,
  addUpdateAddress: {
    id: 0,
    street1: '',
    street2: '',
    city: '',
    st: '',
    zip: '',
    county: '',
    country: '',
    effectivedate: '',
    enddate: '',
    highestcircle: 0
  },
  revertAddress: {
    id: 0,
    street1: '',
    street2: '',
    city: '',
    st: '',
    zip: '',
    county: '',
    country: '',
    effectivedate: '',
    enddate: '',
    highestcircle: 0
  },
  circles: [],
  addUpdateCircle: {
    id: 0,
    circle_level: 0,
    name: '',
    description: ''
  }
}

export default state
