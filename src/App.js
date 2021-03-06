import React from 'react';
import 'bootstrap/dist/css/bootstrap.min.css';
import {BrowserRouter as Router, Switch, Route, Link} from 'react-router-dom';
import './App.css';
import Insert from './components/Insert';
import Edit from './components/Edit';
import View from './components/View';



function App() {
  return (
    <Router>
      <div className="container">
        <nav className="navbar navbar-expand-lg navbar-light bg-light">
          <Link to={'/'} className="navbar-brand">React Crud Example</Link>
          <div className="collapse navbar-collapse" id="navbarSupportedContent">
            <ul className="navbar-nav ml-auto">
              <li className="nav-item">
                <Link to={'/'} className="nav-link">Home</Link>
              </li>
              <li className="nav-item">
                <Link to={'/insert'} className="nav-link">Insert</Link>
              </li>
              <li className="nav-item">
                <Link to={'/view'} className="nav-link">View</Link>
              </li>
            </ul>
          </div>
        </nav>
        <Switch>
          <Route exact path='/insert' component={Insert} />
          <Route path='/edit/:id' component={Edit} />
          <Route path='/view' component={View} />
        </Switch>
      </div>
    </Router>
  );
}

export default App;
