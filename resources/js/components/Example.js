import React from "react";
import ReactDOM from "react-dom";

function Example() {
    return (
        <div className="container-fluid">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Dashboard</div>
                        <div className="card-body">You are logged in!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
