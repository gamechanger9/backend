import React from "react";
import Sidebar from "./Components/sidebar";
import "./Assets/CSS/suppliers.css";
import Jumbo from "./Components/jumbo";
import TabPanel from "./Components/tabpanel";

function Invoice() {
  const heading="Invoice";
  const text="This section is used to generate an Invoice.";
  return (
    <React.Fragment>
      <Sidebar />
      <Jumbo head={heading} passText={text}/>
      
      <div className="supp">
        <TabPanel />
      </div>
    </React.Fragment>
  );
}
export default Invoice;
