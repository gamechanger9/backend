import React, { Component } from 'react';
import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';
import './Assets/CSS/login.css';
import logo from './Assets/Images/logo1.jpeg'

function Login() {
  return (
    <div className="Login">
        <img src={logo} alt=""/>
            <Form>
        <Form.Group controlId="formBasicEmail">
            <Form.Label>Email address</Form.Label>
            <Form.Control type="email" placeholder="Enter email" />
        </Form.Group>

        <Form.Group controlId="formBasicPassword">
            <Form.Label>Password</Form.Label>
            <Form.Control type="password" placeholder="Password" />
        </Form.Group>
        <Button variant="dark" type="submit">
            Submit
        </Button>
        </Form>
    </div>
  );
}

export default Login;
