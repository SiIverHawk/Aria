import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter, Route, Switch } from "react-router-dom";
import Sidebar from "./Sidebar/Sidebar";
import Dashboard from "./Menu/Dashboard";
import Orders from "./Menu/Orders";
import Products from "./Menu/Products";
import Customers from "./Menu/customers";
import Reports from "./Menu/reports";

function Home() {
    return (
        <BrowserRouter>
            <div>
                <Sidebar />
                <Switch>
                    <Route exact path="/" component={Dashboard} />
                    <Route exact path="/orders" component={Orders} />
                    <Route exact path="/products" component={Products} />
                    <Route exact path="/customers" component={Customers} />
                    <Route exact path="/reports" component={Reports} />
                </Switch>
            </div>
        </BrowserRouter>
    );
}

export default Home;

if (document.getElementById("home")) {
    ReactDOM.render(<Home />, document.getElementById("home"));
}
