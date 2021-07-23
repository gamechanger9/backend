import React from "react";
import Sidebar from "./Components/sidebar";
import "./Assets/CSS/location.css";
import Jumbo from "./Components/jumbo";
import TabPanel from "./Components/tabpanel";

function Location() {
  const heading="Locations";
  const text="This section is used to modify locations.";
  return (
    <React.Fragment>
      <Sidebar />
      <Jumbo head={heading} passText={text}/>
      
      <div className="locc">
        <TabPanel />
      </div>
    </React.Fragment>
  );
}
export default Location;
