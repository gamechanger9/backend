import React, { Component } from 'react';
import {Navigation} from 'react-minimal-side-navigation';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faPhone,faHome,faWarehouse} from '@fortawesome/fontawesome-free-solid'
import '../Assets/CSS/sideNav.css'
import 'react-minimal-side-navigation/lib/ReactMinimalSideNavigation.css';
import { BrowserRouter as Router, Route,Switch, Redirect, useHistory, useLocation} from 'react-router-dom';


const Sidebar = () =>
{
 const history = useHistory()
  const location = useLocation()
    return(
        <div className="Sidenav">
          
        <Navigation
        // use your own router's api to get pathname
        activeItemId={location.pathname}
        onSelect={({itemId}) => {
          // maybe push to the route
          history.push(itemId)
        }}
        
        items={[
          { 
            title: 'Home',
            itemId: '/',
            // use your own custom Icon component as well
            elemBefore: () => <FontAwesomeIcon icon={faHome} />,
          },
          {
            title: 'Inventory',
            itemId: '/inventory',
            elemBefore: () =><FontAwesomeIcon icon={faWarehouse} />,
            subNav: [
              {
                title: 'Products',
                itemId: '/inventory/Products',
              },
              {
                title: 'Suppliers',
                itemId: '/inventory/Suppliers',
              },
              {
                title: 'Locations',
                itemId: '/inventory/Location',
              },
              {
                title: 'Purchase Order',
                itemId: '/inventory/purchaseorder',
              },
              {
                title: 'Invoice',
                itemId: '/inventory/invoice',
              },
              {
                title: 'Closing',
                itemId: '/inventory/closing',
              }
            ],
          },
         
        ]}
      />
      
      </div>
    );
}
export default Sidebar;