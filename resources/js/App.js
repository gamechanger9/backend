import React from 'react';
import Login from './login';
import './App.css';
import Home from './home';
import {BrowserRouter as Router, Route, Switch,Link} from 'react-router-dom';
import Suppliers from './suppliers';
import Products from './products';
import Location from './location';
import Purchase from './purchaseorder';
import Inventory from './inventory';
import Invoice from './invoice';
import Closing from './closing';

function App() {
  return (
  
      
      <Switch>
      
      <Route path="/inventory/suppliers" component={Suppliers} />
      <Route path="/inventory/products" component={Products} />
      <Route path="/inventory/location" component={Location} />
      <Route path="/inventory/purchaseorder" component={Purchase} />
      <Route path="/inventory/invoice" component={Invoice} />
      <Route path="/inventory/closing" component={Closing} />
      <Route path="/inventory" component={Inventory} />
      <Route path="/" component={Home} /> 
      
      
      
      {/* <Route path="/inventory" component={} */}
      </Switch>
    
     
    
  );
}

export default App;
