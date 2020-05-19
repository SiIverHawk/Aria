import React from "react";
import "../../../../public/css/dashboard.css";
import { NavLink } from "react-router-dom";

function Sidebar() {
    return (
        <nav className="col-md-2 d-md-block d-none bg-light sidebar">
            <div className="sidebar-sticky">
                <ul className="nav flex-column">
                    <li className="nav-item">
                        <NavLink to="/" className="nav-link" activeClassName="active">
                            <i className="fa fa-file-invoice feather"></i>{" "}
                            Dash
                        </NavLink>
                        <NavLink to="/orders" className="nav-link" activeClassName="active">
                            <i className="fa fa-file-invoice feather"></i>{" "}
                            Orders
                        </NavLink>
                    </li>
                    <li className="nav-item">
                        <NavLink to="/products" className="nav-link" activeClassName="active">
                            <i className="fa fa-shopping-cart feather"></i>{" "}
                            Products
                        </NavLink>
                    </li>
                    <li className="nav-item">
                        <NavLink to="/customers" className="nav-link" activeClassName="active">
                            <i className="fa fa-user-friends feather"></i>{" "}
                            Customers
                        </NavLink>
                    </li>
                    <li className="nav-item">
                        <NavLink to="/reports" className="nav-link" activeClassName="active">
                            <i className="fa fa-file-excel feather"></i> Reports
                        </NavLink>
                    </li>
                </ul>
                <h6 className="sidebar-heading d-flex justify-content-center align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Chat</span>
                </h6>
                <ul className="nav flex-column mb-2">
                    <li className="nav-item">
                        <a href="#" className="nav-link">
                            <i className="fa fa-user feather"></i>Jhon Doe
                        </a>
                    </li>
                </ul>
                <h6 className="sidebar-heading d-flex justify-content-center align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Chat rooms</span>
                </h6>
                <ul className="nav flex-column mb-2">
                    <li className="nav-item">
                        <a href="#" className="nav-link">
                            <i className="fa fa-user feather"></i>Sales
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    );
}

export default Sidebar;
