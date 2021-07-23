import React from "react";
import PropTypes from "prop-types";
import SwipeableViews from "react-swipeable-views";
import { makeStyles, useTheme } from "@material-ui/core/styles";
import AppBar from "@material-ui/core/AppBar";
import Tabs from "@material-ui/core/Tabs";
import Tab from "@material-ui/core/Tab";
import Typography from "@material-ui/core/Typography";
import Box from "@material-ui/core/Box";
import Form from "react-bootstrap/Form";
import Col from "react-bootstrap/Col";
import Button from "react-bootstrap/Button";
import Viewtable from "./viewtable";
import "../Assets/CSS/tabPanel.css";
import "@fontsource/roboto";

const formData = [
  {
    fullname: "asdasd",
    email: "asdasd",
    address: "asdasd",
    contact: "asdasd",
  },
  {
    fullname: "asdasd",
    email: "asdasd",
    address: "asdassdfsdfd",
    contact: "asdasd",
  },
  {
    fullname: "asdasd",
    email: "asdasd",
    address: "asdasd",
    contact: "asdasd",
  },
  {
    fullname: "asdasd",
    email: "asdasd",
    address: "asdasd",
    contact: "asdasd",
  },
];

function TabPanel(props) {
  const { children, value, index, ...other } = props;

  return (
    <div
      role="tabpanel"
      hidden={value !== index}
      id={`full-width-tabpanel-${index}`}
      aria-labelledby={`full-width-tab-${index}`}
      {...other}
    >
      {value === index && (
        <Box p={4}>
          <Typography>{children}</Typography>
        </Box>
      )}
    </div>
  );
}

TabPanel.propTypes = {
  children: PropTypes.node,
  index: PropTypes.any.isRequired,
  value: PropTypes.any.isRequired,
};

function a11yProps(index) {
  return {
    id: `full-width-tab-${index}`,
    "aria-controls": `full-width-tabpanel-${index}`,
  };
}

const useStyles = makeStyles((theme) => ({
  root: {
    backgroundColor: theme.palette.background.paper,
    width: 1000,
  },
}));

export default function FullWidthTabs() {
  const classes = useStyles();
  const theme = useTheme();
  const [value, setValue] = React.useState(0);

  const handleChange = (event, newValue) => {
    setValue(newValue);
  };

  const handleChangeIndex = (index) => {
    setValue(index);
  };

  return (
    <div className={classes.root}>
      <AppBar position="static" color="default">
        <Tabs
          value={value}
          onChange={handleChange}
          indicatorColor="primary"
          textColor="primary"
          variant="fullWidth"
          aria-label="full width tabs example"
          centered
        >
          <Tab label="ADD" {...a11yProps(0)} />
          <Tab label="EDIT" {...a11yProps(1)} />
          <Tab label="DELETE" {...a11yProps(2)} />
          <Tab label="VIEW" {...a11yProps(3)} />
        </Tabs>
      </AppBar>
      <SwipeableViews
        axis={theme.direction === "rtl" ? "x-reverse" : "x"}
        index={value}
        onChangeIndex={handleChangeIndex}
      >
      
        <TabPanel value={value} index={0} dir={theme.direction}>
          <Form>
            {formData.map((d, i) => {
                return (
                  <Form.Control placeholder="Full Name" className="Forms" />
                );
            })}
            
            <Button variant="secondary" size="sm">
              Submit
            </Button>
          </Form>
        </TabPanel>
        <TabPanel value={value} index={1} dir={theme.direction}>
          <Form>
          <Form.Control size="md" as="select" className="Forms">
              <option>Select..</option>
            </Form.Control>
            {formData.map((d, i) => {
                return (
                  <Form.Control placeholder="Full Name" className="Forms" />
                );
            })}
            
            <Button variant="secondary" size="sm">
              Submit
            </Button>
          </Form>
        </TabPanel>
{/*
        <TabPanel value={value} index={1} dir={theme.direction}>
          <Form.Row>
            <Form.Control size="sm" as="select" className="Forms">
              <option>Select..</option>
            </Form.Control>
          </Form.Row>

          <Form className="editForm">
            <Form.Control placeholder="Full Name" className="Forms" />

            <Form.Control placeholder="Contact" className="Forms" />

            <Form.Control placeholder="Email" className="Forms" />

            <Form.Control placeholder="Address" className="Forms" />

            <Button variant="secondary" size="sm">
              Submit
            </Button>
          </Form>
        </TabPanel>
        <TabPanel value={value} index={2} dir={theme.direction}>
          <Form.Row>
            <Col>
              <Form.Control size="sm" as="select" className="Forms">
                <option>Select..</option>
              </Form.Control>
            </Col>
          </Form.Row>
          <Button variant="secondary" size="sm">
            Submit
          </Button>
        </TabPanel>
        <TabPanel value={value} index={3} dir={theme.direction}>
          <Viewtable />
        </TabPanel> */}
      </SwipeableViews>
    </div>
  );
}
