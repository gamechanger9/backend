import React from "react";
import Sidebar from "./Components/sidebar";
import "./Assets/CSS/products.css";
import Jumbo from "./Components/jumbo";
import TabPanel from "./Components/tabpanel";

function Products() {
  const heading="Products";
  const text="This section is used to modify products.";
  return (
    <React.Fragment>
      <Sidebar />
      <Jumbo head={heading} passText={text}/>
      
      <div className="prodd">
        <TabPanel/>
      </div>
    </React.Fragment>
  );
}
export default Products;
