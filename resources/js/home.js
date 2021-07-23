import React, { Component } from 'react';
import Sidebar from './Components/sidebar';
import Jumbo from './Components/jumbo';

function Home()
{
    return(
        <React.Fragment>
        <Jumbo/>
        <Sidebar/>
        </React.Fragment>
        
    );
}
export default Home;