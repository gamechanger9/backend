import React from "react";
import Sidebar from "./Components/sidebar";
import "./Assets/CSS/suppliers.css";
import Jumbo from "./Components/jumbo";
import TabPanel from "./Components/tabpanel";

function Purchase() {
  const heading="Purchase Order";
  const text="This section is used for generating purchase order.";
  const label="disabled"
  return (
    <React.Fragment>
      <Sidebar />
      <Jumbo head={heading} passText={text}/>
      
      <div className="supp">
        <TabPanel/>
      </div>
    </React.Fragment>
  );
}
export default Purchase;
