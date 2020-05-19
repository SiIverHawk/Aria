import React from 'react'
import "../../../../public/css/dashboard.css";

function Main(props) {
    return (
        <div className="col-md-8 col-lg-10 ml-lg-auto px-4 dashboard" id="dashboard">
            <div className="row">
                <div className="col-md-8">
                    {props.children}
                </div>
            </div>
        </div>
    )
}

export default Main
