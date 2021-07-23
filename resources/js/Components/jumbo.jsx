import React, { Component } from 'react';
import Jumbotron from 'react-bootstrap/Jumbotron'
import Container from 'react-bootstrap/Container'
import '../Assets/CSS/jumbo.css'

function Jumbo({head,passText})
{
return(
  
    <Jumbotron fluid className="jumbo">
  <Container>
    <h1>{head}</h1>
    <p>
      {passText}
    </p>
  </Container>
</Jumbotron>

    


);

}
export default Jumbo;