import React from "react";
import Sidebar from "./Components/sidebar";
import "./Assets/CSS/inventory.css";
import Jumbo from "./Components/jumbo";
import Viewtable from "./Components/viewtable";
import InvPanel from "./Components/invpanel";

function Inventory() {
  const heading="Inventory";
  const text="";
  return (
    <React.Fragment>
      <Sidebar />
      <Jumbo head={heading} passText={text}/>
      
      <div className="invent">
        <Viewtable/>
        <InvPanel/>
      </div>
    </React.Fragment>
  );
}
export default Inventory;
