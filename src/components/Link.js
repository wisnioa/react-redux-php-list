import React from 'react'
import PropTypes from 'prop-types'

const Link = ({ active, children, onClick }) => (

    <button
       onClick={onClick}
       disabled={active}
       style={{
         marginTop:30,
          marginLeft:15
           
       }}
    >
      {children}
    </button>
  
)

Link.propTypes = {
  active: PropTypes.bool.isRequired,
  children: PropTypes.node.isRequired,
  onClick: PropTypes.func.isRequired
}

export default Link

